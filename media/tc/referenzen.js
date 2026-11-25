(()=>{
const $=id=>document.getElementById(id)||document.createElement("div");
const STATIC=window.REF_STATIC||[];
let db=null, assets=null, canEdit=false, projects=[], filter='all', cur=null, imgIdx=0, form=null;
const src=b=>b.url||('/_blob/'+b.id);
const YEAR=new Date().getFullYear();
const sortP=a=>a.slice().sort((x,y)=>((y.bilder||[]).length>0)-((x.bilder||[]).length>0)||(y.jahr||0)-(x.jahr||0)||(y.created||0)-(x.created||0));
const el=(t,c,txt)=>{const e=document.createElement(t); if(c) e.className=c; if(txt!=null) e.textContent=txt; return e;};
function visible(){ return projects.filter(p=>canEdit||p.live!==false); }
function render(){
  const list=visible(), box=$('refs'); box.textContent='';
  const LISTE=window.REF_LISTE||[]; const shown=list.filter(p=>!LISTE.includes(p.id)&&(filter==='all'||(p.kategorien||[]).includes(filter)));
  $('rEmpty').hidden=list.length>0;
  $('rFilters').hidden=list.length===0;
  const live=projects.filter(p=>p.live!==false);
  if($('rsProj')) $('rsProj').textContent=live.length; if($('rsCourts')) $('rsCourts').textContent=live.filter(p=>!p.jahr||p.jahr<=YEAR).reduce((a,p)=>a+(+p.courts||0),0);
  if($('rsLand')) $('rsLand').textContent=new Set(live.map(p=>p.land||'Deutschland')).size||0;
  shown.forEach((p,i)=>{
    const b=el('button','ref'); b.type='button'; b.style.animation=`pop .45s cubic-bezier(.16,1,.3,1) ${i*.05}s both`;
    const f=el('figure'); const imgs=p.bilder||[];
    if(imgs[0]){ const im=el('img'); im.src=src(imgs[0]); im.alt=imgs[0].alt||(p.titel+' in '+p.ort); im.loading='lazy'; im.onerror=()=>{im.remove(); f.appendChild(el('div','noimg','Bild nicht verfügbar'));}; f.appendChild(im); }
    else { const n=el('div','noimg court-ph'); n.appendChild(el('span',null,(p.jahr&&p.jahr>YEAR)||/planung/i.test(p.titel||'')?'In Planung':'Bilder folgen')); f.appendChild(n); }
    if(p.live===false) f.appendChild(el('span','badge draft','Entwurf')); else if(p.jahr) f.appendChild(el('span','badge',String(p.jahr)));
    if(imgs.length>1) f.appendChild(el('span','nimg',imgs.length+' Bilder'));
    const rb=el('div','rb'); rb.appendChild(el('div','pk',[p.ort,p.land&&p.land!=='Deutschland'?p.land:null,p.zielgruppe].filter(Boolean).join(' · ')));
    const h3=el('h3',null,p.titel); h3.setAttribute('data-type',''); rb.appendChild(h3); if(p.kurz) rb.appendChild(el('p',null,p.kurz));
    const rf=el('div','rf'); if(+p.courts) rf.appendChild(el('span',null,p.courts+(+p.courts===1?' Court':' Courts'))); (p.kategorien||[]).slice(0,3).forEach(k=>rf.appendChild(el('span',null,k))); rb.appendChild(rf);
    b.append(f,rb); b.addEventListener('click',()=>{ location.hash='referenzen/'+p.id; }); box.appendChild(b);
  });
  if(cur){ const u=projects.find(p=>p.id===cur.id); if(u){cur=u; if(!$('rDetail').hidden) fillDetail();} }
}
document.querySelectorAll('[data-rf]').forEach(b=>b.addEventListener('click',()=>{ filter=b.dataset.rf; document.querySelectorAll('[data-rf]').forEach(x=>x.setAttribute('aria-pressed',x===b)); render(); }));
/* detail */
function openModal(m){ m.hidden=false; document.body.style.overflow='hidden'; const c=m.querySelector('[data-close]'); c&&c.focus(); }
function closeModal(m){ m.hidden=true; if($('rDetail').hidden&&$('rForm').hidden) document.body.style.overflow=''; }
function fillDetail(){ const p=cur, imgs=p.bilder||[];
  $('rdTitle').textContent=p.titel; $('rdMeta').textContent=[p.ort,p.land,p.jahr].filter(Boolean).join(' · ');
  const facts=$('rdFacts'); facts.textContent='';
  [['Courts',+p.courts||null],['Fertigstellung',p.jahr],['Bauherr',p.zielgruppe],['Partner',p.hersteller]].forEach(([k,v])=>{ if(!v) return; const d=el('div'); d.append(el('span',null,k),el('b',null,String(v))); facts.appendChild(d); });
  facts.hidden=!facts.children.length;
  const tx=$('rdText'); tx.textContent=''; String(p.text||p.kurz||'').split(/\n\s*\n/).filter(s=>s.trim()).forEach(s=>tx.appendChild(el('p',null,s.trim())));
  const ch=$('rdChips'); ch.textContent=''; if((p.leistungen||[]).length){ ch.appendChild(el('span','k','Unsere Leistungen')); p.leistungen.forEach(l=>ch.appendChild(el('span',null,l))); }
  $('rdEdit').hidden=!(canEdit&&assets);
  const th=$('rdThumbs'); th.textContent=''; th.hidden=imgs.length<2;
  imgs.forEach((b,i)=>{ const t=el('button'); t.type='button'; t.setAttribute('aria-label','Bild '+(i+1)); const im=el('img'); im.src=src(b); im.alt=''; im.loading='lazy'; t.appendChild(im); t.addEventListener('click',()=>showImg(i)); th.appendChild(t); });
  document.querySelectorAll('.rd-nav').forEach(n=>n.hidden=imgs.length<2);
  $('rdImg').parentElement.hidden=!imgs.length; showImg(Math.min(imgIdx,Math.max(0,imgs.length-1)));
}
function showImg(i){ const imgs=(cur&&cur.bilder)||[]; if(!imgs.length) return; imgIdx=(i+imgs.length)%imgs.length; const b=imgs[imgIdx];
  $('rdImg').src=src(b); $('rdImg').alt=b.alt||(cur.titel+', Bild '+(imgIdx+1)); $('rdCount').textContent=(imgIdx+1)+' / '+imgs.length;
  $('rdThumbs').querySelectorAll('button').forEach((t,k)=>t.setAttribute('aria-current',k===imgIdx)); }
document.querySelector('.rd-nav.prev').addEventListener('click',()=>showImg(imgIdx-1));
document.querySelector('.rd-nav.next').addEventListener('click',()=>showImg(imgIdx+1));
window.openRef=id=>{ const p=projects.find(x=>x.id===id); if(!p){ window._pendingRef=id; return; } cur=p; imgIdx=0; fillDetail(); openModal($('rDetail'));
  document.title=p.titel+' · Referenz · THE COURT'; };
window.closeRef=()=>{ if(!$('rDetail').hidden) closeModal($('rDetail')); if(!$('rForm').hidden) closeModal($('rForm')); };
document.querySelectorAll('.r-modal').forEach(m=>{ m.addEventListener('click',e=>{ if(e.target===m||e.target.closest('[data-close]')) { if(m.id==='rDetail'&&location.hash.startsWith('#referenzen/')) history.replaceState(null,'','#referenzen'); closeModal(m); } }); });
document.addEventListener('keydown',e=>{ if($('rDetail').hidden) return; if(e.key==='ArrowLeft') showImg(imgIdx-1); if(e.key==='ArrowRight') showImg(imgIdx+1); if(e.key==='Escape'){ history.replaceState(null,'','#referenzen'); closeModal($('rDetail')); } });
/* editor */
const F=$('rFormEl'), msg=(t,err)=>{ $('rfMsg').textContent=t||''; $('rfMsg').classList.toggle('err',!!err); };
function openForm(p){ form={id:p?p.id:null, bilder:(p&&p.bilder||[]).map(b=>({id:b.id,alt:b.alt||'',url:b.url||undefined})), removed:[], uploading:0};
  F.reset(); $('rfHead').textContent=p?'Projekt bearbeiten':'Projekt anlegen'; msg('');
  ['titel','ort','jahr','courts','hersteller','kurz','text'].forEach(k=>F.elements[k].value=p&&p[k]!=null?p[k]:'');
  F.elements.land.value=p&&p.land||'Deutschland'; F.elements.zielgruppe.value=p&&p.zielgruppe||''; F.elements.live.checked=!p||p.live!==false;
  F.querySelectorAll('[data-group] input').forEach(c=>{ const g=c.closest('[data-group]').dataset.group; c.checked=!!(p&&(p[g]||[]).includes(c.value)); });
  $('rfDel').hidden=!p; $('rfDel').classList.remove('confirm'); $('rfDel').textContent='Projekt löschen';
  drawImgs(); if(!$('rDetail').hidden) closeModal($('rDetail')); openModal($('rForm')); }
function drawImgs(){ const box=$('rfImgs'); box.textContent='';
  form.bilder.forEach((b,i)=>{ const d=el('div','rf-img'); const im=el('img'); im.src=src(b); im.alt=''; d.appendChild(im); if(i===0) d.appendChild(el('span','cv','Titelbild'));
    const t=el('div','tools'); [['←','Nach vorne',()=>mv(i,-1)],['→','Nach hinten',()=>mv(i,1)],['×','Entfernen',()=>{ form.removed.push(form.bilder[i].id); form.bilder.splice(i,1); drawImgs(); }]].forEach(([s,l,fn])=>{ const bt=el('button',null,s); bt.type='button'; bt.title=l; bt.setAttribute('aria-label',l); bt.addEventListener('click',fn); t.appendChild(bt); });
    d.appendChild(t); box.appendChild(d); });
  for(let k=0;k<form.uploading;k++) box.appendChild(el('div','rf-img up','Lädt hoch'));
}
function mv(i,d){ const j=i+d; if(j<0||j>=form.bilder.length) return; const a=form.bilder; [a[i],a[j]]=[a[j],a[i]]; drawImgs(); }
async function shrink(file){ try{ const bmp=await createImageBitmap(file); const s=Math.min(1,2000/Math.max(bmp.width,bmp.height)); if(s===1&&file.size<2.5e6&&file.type!=='image/png') return file;
  const c=document.createElement('canvas'); c.width=Math.round(bmp.width*s); c.height=Math.round(bmp.height*s); c.getContext('2d').drawImage(bmp,0,0,c.width,c.height);
  return await new Promise(r=>c.toBlob(b=>r(b||file),'image/jpeg',.85)); }catch(e){ return file; } }
async function addFiles(files){ if(!assets){ msg('Bilder hochladen ist nur für Bearbeiter möglich.',true); return; }
  const list=[...files].filter(f=>/^image\/(jpeg|png|webp)$/.test(f.type)); if(!list.length){ msg('Bitte JPG, PNG oder WebP wählen.',true); return; }
  form.uploading+=list.length; drawImgs(); msg('');
  for(const f of list){ try{ const blob=await shrink(f); const r=await assets.upload(blob,{type:blob.type||f.type}); form.bilder.push({id:r.id,url:r.url,alt:''}); }
    catch(e){ msg(e&&e.code==='too_large'?'Ein Bild ist zu groß (max. 20 MB).':e&&e.code==='quota_or_state'?'Der Speicher ist voll. Entferne nicht mehr genutzte Bilder.':e&&e.code==='rate_limited'?'Zu viele Uploads auf einmal, bitte kurz warten.':'Ein Bild konnte nicht hochgeladen werden.',true); }
    form.uploading--; drawImgs(); } }
$('rfFile').addEventListener('change',e=>{ addFiles(e.target.files); e.target.value=''; });
const drop=$('rfDrop'); ['dragenter','dragover'].forEach(t=>drop.addEventListener(t,e=>{ e.preventDefault(); drop.classList.add('over'); }));
['dragleave','drop'].forEach(t=>drop.addEventListener(t,e=>{ e.preventDefault(); drop.classList.remove('over'); }));
drop.addEventListener('drop',e=>addFiles(e.dataTransfer.files));
F.addEventListener('submit',async e=>{ e.preventDefault(); if(!db) return;
  if(form.uploading){ msg('Bitte warten, bis alle Bilder hochgeladen sind.',true); return; }
  const v=k=>F.elements[k].value.trim(); if(!v('titel')||!v('ort')){ msg('Projektname und Ort sind Pflichtfelder.',true); (v('titel')?F.elements.ort:F.elements.titel).focus(); return; }
  const grp=g=>[...F.querySelectorAll(`[data-group="${g}"] input:checked`)].map(c=>c.value);
  const old=form.id&&projects.find(p=>p.id===form.id);
  const body={titel:v('titel'),ort:v('ort'),land:F.elements.land.value,jahr:v('jahr')?+v('jahr'):null,courts:v('courts')?+v('courts'):null,zielgruppe:F.elements.zielgruppe.value,hersteller:v('hersteller'),kurz:v('kurz'),text:F.elements.text.value.trim(),
    kategorien:grp('kategorien'),leistungen:grp('leistungen'),bilder:form.bilder.map(b=>({id:b.id,alt:b.alt||'',url:b.url||undefined})),live:F.elements.live.checked,
    created:old&&old.created||Date.now(),updated:Date.now()};
  $('rfSave').disabled=true; msg('Speichert …');
  try{ const ref=form.id?db.collection('projekte').doc(form.id):db.collection('projekte').doc(); await ref.set(body);
    for(const id of form.removed) if(!body.bilder.some(b=>b.id===id)) assets.delete(id).catch(()=>{});
    closeModal($('rForm')); location.hash='referenzen/'+ref.id; }
  catch(err){ msg(err&&err.code==='quota_exceeded'?'Speicherlimit erreicht.':err&&err.code==='invalid_argument'?'Speichern nicht erlaubt. Du brauchst Bearbeitungsrechte.':'Speichern fehlgeschlagen, bitte erneut versuchen.',true); }
  $('rfSave').disabled=false; });
$('rfDel').addEventListener('click',async()=>{ const b=$('rfDel'); if(!b.classList.contains('confirm')){ b.classList.add('confirm'); b.textContent='Wirklich löschen?'; return; }
  try{ const p=projects.find(x=>x.id===form.id); await db.collection('projekte').doc(form.id).delete(); (p&&p.bilder||[]).forEach(x=>assets&&assets.delete(x.id).catch(()=>{})); closeModal($('rForm')); history.replaceState(null,'','#referenzen'); }
  catch(e){ msg('Löschen fehlgeschlagen.',true); } });
$('rNew').addEventListener('click',()=>openForm(null));
$('rdEditBtn').addEventListener('click',()=>cur&&openForm(cur));
/* boot */
projects=sortP(STATIC); render();
(async()=>{ if(!window.claude||!window.claude.use) return;
  const [d,a,u]=await Promise.all([claude.use('db'),claude.use('assets'),claude.use('user')]);
  db=d; assets=a; canEdit=!!(u&&u.canEdit&&u.canEdit());
  if(db&&assets&&canEdit){ $('rAdmin').hidden=false; $('rHint').hidden=false; $('rHint').textContent='Bearbeitungsmodus: Nur du und Bearbeiter sehen Entwürfe und die Buttons zum Anlegen und Bearbeiten.'; }
  if(!db) return;
  db.collection('projekte').orderBy('created','desc').onSnapshot(s=>{
    projects=sortP(s.docs.map(x=>Object.assign({id:x.id},x.data())));
    render(); if(window._pendingRef){ const id=window._pendingRef; window._pendingRef=null; window.openRef(id); } },
    ()=>{});
})();
})();
