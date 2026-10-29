(()=>{
const $=id=>document.getElementById(id)||document.createElement("div");
const STATIC=window.BLOG_STATIC||[];
let db=null, assets=null, canEdit=false, posts=STATIC.slice(), filter='all', cur=null, form=null;
const src=b=>b&&(b.url||('/_blob/'+b.id));
const el=(t,c,txt)=>{const e=document.createElement(t); if(c) e.className=c; if(txt!=null) e.textContent=txt; return e;};
const fmtDate=d=>{ if(!d) return ''; const x=new Date(d+'T12:00:00'); return isNaN(x)?d:x.toLocaleDateString('de-DE',{day:'numeric',month:'long',year:'numeric'}); };
const slugify=s=>s.toLowerCase().replace(/ä/g,'ae').replace(/ö/g,'oe').replace(/ü/g,'ue').replace(/ß/g,'ss').replace(/[^a-z0-9]+/g,'-').replace(/^-+|-+$/g,'').slice(0,80)||'artikel';
const readMin=t=>Math.max(1,Math.round(String(t||'').split(/\s+/).length/200));
function inline(parent,text){ String(text).split(/(\*\*[^*]+\*\*)/).forEach(part=>{ if(/^\*\*[^*]+\*\*$/.test(part)) parent.appendChild(el('strong',null,part.slice(2,-2))); else if(part) parent.appendChild(document.createTextNode(part)); }); }
function renderBody(box,text){ box.textContent=''; String(text||'').split(/\n\s*\n/).forEach(block=>{ const b=block.trim(); if(!b) return;
  if(b.startsWith('## ')){ box.appendChild(el('h2',null,b.slice(3).trim())); return; }
  if(b.startsWith('### ')){ box.appendChild(el('h3',null,b.slice(4).trim())); return; }
  const lines=b.split('\n'); if(lines.every(l=>/^\s*[-•]\s+/.test(l))){ const ul=el('ul'); lines.forEach(l=>{ const li=el('li'); inline(li,l.replace(/^\s*[-•]\s+/,'')); ul.appendChild(li); }); box.appendChild(ul); return; }
  if(lines.every(l=>/^\s*\d+[.)]\s+/.test(l))){ const ol=el('ol'); lines.forEach(l=>{ const li=el('li'); inline(li,l.replace(/^\s*\d+[.)]\s+/,'')); ol.appendChild(li); }); box.appendChild(ol); return; }
  const p=el('p'); lines.forEach((l,i)=>{ if(i) p.appendChild(el('br')); inline(p,l); }); box.appendChild(p); }); }
function visible(){ return posts.filter(p=>canEdit||p.live).sort((a,b)=>String(b.datum||'').localeCompare(String(a.datum||''))); }
function render(){ const list=visible(), box=$('posts'); box.textContent='';
  const cats=[...new Set(list.map(p=>p.kategorie).filter(Boolean))]; const fb=$('bFilters'); fb.textContent=''; fb.hidden=cats.length<2;
  if(!cats.includes(filter)) filter='all';
  ['all',...cats].forEach(c=>{ const b=el('button','fbtn',c==='all'?'Alle':c); b.type='button'; b.setAttribute('aria-pressed',c===filter); b.addEventListener('click',()=>{ filter=c; render(); }); fb.appendChild(b); });
  $('bEmpty').hidden=list.length>0;
  list.filter(p=>filter==='all'||p.kategorie===filter).forEach((p,i)=>{
    const a=el('a','post'); a.href=window.BLOG_HREF?window.BLOG_HREF(p):('#blog/'+p.slug); a.style.animation=`pop .45s cubic-bezier(.16,1,.3,1) ${i*.05}s both`;
    if(i===0&&filter==='all') a.classList.add('lead-post');
    const f=el('figure'); if(p.cover){ const im=el('img'); im.src=src(p.cover); im.alt=p.titel; im.loading='lazy'; im.onerror=()=>im.remove(); f.appendChild(im); } else f.appendChild(el('div','noimg',p.kategorie||'Blog'));
    if(!p.live) f.appendChild(el('span','badge draft','Entwurf'));
    const pb=el('div','rb'); pb.appendChild(el('div','pk',[p.kategorie,fmtDate(p.datum),readMin(p.text)+' Min.'].filter(Boolean).join(' · ')));
    pb.appendChild(el('h3',null,p.titel)); if(p.teaser) pb.appendChild(el('p',null,p.teaser)); pb.appendChild(el('span','more','Weiterlesen →'));
    a.append(f,pb); box.appendChild(a); });
  if(cur&&!$('bArticle').hidden){ const u=posts.find(x=>x.slug===cur.slug); if(u){ cur=u; fill(); } }
}
function fill(){ const p=cur; $('baTitle').textContent=p.titel; $('baMeta').textContent=[p.kategorie,fmtDate(p.datum),p.autor,readMin(p.text)+' Min. Lesezeit'].filter(Boolean).join(' · ');
  $('baTeaser').textContent=p.teaser||''; $('baTeaser').hidden=!p.teaser;
  $('baCoverFig').hidden=!p.cover; if(p.cover){ $('baCover').src=src(p.cover); $('baCover').alt=p.titel; }
  renderBody($('baBody'),p.text); $('baEdit').hidden=!(canEdit&&assets); }
window.openPost=slug=>{ const p=posts.find(x=>x.slug===slug&&(x.live||canEdit)); if(!p){ window._pendingPost=slug; return; }
  cur=p; fill(); $('bArticle').hidden=false; $('b-list-hero').hidden=true; $('b-liste').hidden=true; window.scrollTo(0,0);
  document.title=p.titel+' · Blog · THE COURT'; const d=document.querySelector('meta[name=description]'); if(d&&p.teaser) d.setAttribute('content',p.teaser); };
window.closePost=()=>{ $('bArticle').hidden=true; $('b-list-hero').hidden=false; $('b-liste').hidden=false; cur=null; };
/* editor */
const F=$('bFormEl'), msg=(t,e)=>{ $('bfMsg').textContent=t||''; $('bfMsg').classList.toggle('err',!!e); };
function openModal(m){ m.hidden=false; document.body.style.overflow='hidden'; }
function closeModal(m){ m.hidden=true; document.body.style.overflow=''; }
$('bForm').addEventListener('click',e=>{ if(e.target===$('bForm')||e.target.closest('[data-close]')) closeModal($('bForm')); });
function openForm(p){ form={id:p?p.id:null, cover:p&&p.cover?{id:p.cover.id}:null, removed:[], up:false}; F.reset(); msg('');
  $('bfHead').textContent=p?'Artikel bearbeiten':'Artikel schreiben';
  ['titel','kategorie','datum','autor','slug','teaser','text'].forEach(k=>F.elements[k].value=p&&p[k]||'');
  if(!p) F.elements.datum.value=new Date().toISOString().slice(0,10); else F.elements.kategorie.value=p.kategorie||'Courts';
  F.elements.live.checked=!!(p&&p.live); $('bfDel').hidden=!p; $('bfDel').classList.remove('confirm'); $('bfDel').textContent='Artikel löschen'; drawImg(); openModal($('bForm')); }
function drawImg(){ const box=$('bfImgs'); box.textContent='';
  if(form.up){ box.appendChild(el('div','rf-img up','Lädt hoch')); return; }
  if(form.cover){ const d=el('div','rf-img'); const im=el('img'); im.src=src(form.cover); im.alt=''; d.appendChild(im); d.appendChild(el('span','cv','Titelbild'));
    const t=el('div','tools'); const x=el('button',null,'×'); x.type='button'; x.setAttribute('aria-label','Bild entfernen'); x.addEventListener('click',()=>{ form.removed.push(form.cover.id); form.cover=null; drawImg(); }); t.appendChild(x); d.appendChild(t); box.appendChild(d); } }
async function shrink(file){ try{ const bmp=await createImageBitmap(file); const s=Math.min(1,2000/Math.max(bmp.width,bmp.height)); if(s===1&&file.size<2.5e6&&file.type!=='image/png') return file;
  const c=document.createElement('canvas'); c.width=Math.round(bmp.width*s); c.height=Math.round(bmp.height*s); c.getContext('2d').drawImage(bmp,0,0,c.width,c.height);
  return await new Promise(r=>c.toBlob(b=>r(b||file),'image/jpeg',.85)); }catch(e){ return file; } }
async function addFile(file){ if(!file||!assets) return; if(!/^image\/(jpeg|png|webp)$/.test(file.type)){ msg('Bitte JPG, PNG oder WebP wählen.',true); return; }
  form.up=true; drawImg(); try{ const b=await shrink(file); const r=await assets.upload(b,{type:b.type||file.type}); if(form.cover) form.removed.push(form.cover.id); form.cover={id:r.id,url:r.url}; msg(''); }
  catch(e){ msg(e&&e.code==='too_large'?'Bild zu groß (max. 20 MB).':e&&e.code==='quota_or_state'?'Speicher voll.':'Bild konnte nicht hochgeladen werden.',true); }
  form.up=false; drawImg(); }
$('bfFile').addEventListener('change',e=>{ addFile(e.target.files[0]); e.target.value=''; });
const drop=$('bfDrop'); ['dragenter','dragover'].forEach(t=>drop.addEventListener(t,e=>{ e.preventDefault(); drop.classList.add('over'); }));
['dragleave','drop'].forEach(t=>drop.addEventListener(t,e=>{ e.preventDefault(); drop.classList.remove('over'); }));
drop.addEventListener('drop',e=>addFile(e.dataTransfer.files[0]));
F.addEventListener('submit',async e=>{ e.preventDefault(); if(!db) return; if(form.up){ msg('Bitte warten, bis das Bild hochgeladen ist.',true); return; }
  const v=k=>F.elements[k].value.trim(); if(!v('titel')){ msg('Bitte einen Titel eingeben.',true); F.elements.titel.focus(); return; }
  let slug=slugify(v('slug')||v('titel')); const clash=posts.find(p=>p.slug===slug&&p.id!==form.id); if(clash) slug=slug+'-'+Date.now().toString(36).slice(-4);
  const old=form.id&&posts.find(p=>p.id===form.id);
  const body={titel:v('titel'),slug,kategorie:F.elements.kategorie.value,datum:v('datum'),autor:v('autor'),teaser:v('teaser'),text:F.elements.text.value.trim(),cover:form.cover?{id:form.cover.id}:null,live:F.elements.live.checked,created:old&&old.created||Date.now(),updated:Date.now()};
  $('bfSave').disabled=true; msg('Speichert …');
  try{ const ref=form.id?db.collection('blog').doc(form.id):db.collection('blog').doc(); await ref.set(body);
    form.removed.filter(id=>!body.cover||body.cover.id!==id).forEach(id=>assets.delete(id).catch(()=>{}));
    closeModal($('bForm')); location.hash='blog/'+slug; }
  catch(err){ msg(err&&err.code==='invalid_argument'?'Speichern nicht erlaubt. Du brauchst Bearbeitungsrechte.':'Speichern fehlgeschlagen, bitte erneut versuchen.',true); }
  $('bfSave').disabled=false; });
$('bfDel').addEventListener('click',async()=>{ const b=$('bfDel'); if(!b.classList.contains('confirm')){ b.classList.add('confirm'); b.textContent='Wirklich löschen?'; return; }
  try{ const p=posts.find(x=>x.id===form.id); await db.collection('blog').doc(form.id).delete(); if(p&&p.cover) assets.delete(p.cover.id).catch(()=>{}); closeModal($('bForm')); location.hash='blog'; }catch(e){ msg('Löschen fehlgeschlagen.',true); } });
$('bNew').addEventListener('click',()=>openForm(null));
$('baEdit').addEventListener('click',()=>cur&&openForm(cur));
render(); if(window.BLOG_OPEN) window.openPost(window.BLOG_OPEN);
(async()=>{ if(!window.claude||!window.claude.use) return;
  const [d,a,u]=await Promise.all([claude.use('db'),claude.use('assets'),claude.use('user')]);
  db=d; assets=a; canEdit=!!(u&&u.canEdit&&u.canEdit());
  if(db&&assets&&canEdit){ $('bAdmin').hidden=false; $('bHint').hidden=false; $('bHint').textContent='Bearbeitungsmodus: Entwürfe und die Buttons zum Schreiben und Bearbeiten siehst nur du und wer Bearbeitungsrechte hat.'; }
  if(!db) return;
  db.collection('blog').orderBy('created','desc').onSnapshot(s=>{ posts=s.docs.map(x=>Object.assign({id:x.id},x.data())); render();
    if(window._pendingPost){ const sl=window._pendingPost; window._pendingPost=null; window.openPost(sl); } },()=>{});
})();
})();
