(()=>{
  const btns=document.querySelectorAll('.fbtn'), prods=document.querySelectorAll('.prod');
  btns.forEach(b=>b.addEventListener('click',()=>{ btns.forEach(x=>x.setAttribute('aria-pressed',x===b)); const f=b.dataset.f; let i=0;
    prods.forEach(p=>{ const show=f==='all'||p.dataset.cat.split(' ').includes(f); p.classList.toggle('out',!show); p.classList.remove('pop'); if(show){ void p.offsetWidth; p.style.animationDelay=(i++*0.05)+'s'; p.classList.add('pop'); } }); }));
  const S=[{s:'S',f:12,p:'5.190 €',r:'1–2 Courts',max:2},{s:'M',f:23,p:'5.490 €',r:'3–4 Courts',max:4},{s:'L',f:38,p:'5.990 €',r:'5–7 Courts',max:7},{s:'XL',f:53,p:'6.990 €',r:'8–9 Courts',max:9},{s:'XXL',f:68,p:'auf Anfrage',r:'10+ Courts',max:99}];
  const rng=document.getElementById('courtsRange'), lk=document.getElementById('lockers'); let last=null;
  function upd(){ const n=+rng.value, x=S.find(o=>n<=o.max);
    document.getElementById('courtsOut').textContent=n+(n===12?'+':'');
    rng.style.background=`linear-gradient(90deg,var(--yellow) ${(n-1)/11*100}%,var(--petrol-600) 0)`;
    document.querySelectorAll('#sizes span').forEach(e=>e.classList.toggle('on',e.dataset.s===x.s));
    if(last===x.s) return; last=x.s;
    document.getElementById('cfgSize').textContent=x.s; document.getElementById('cfgFach').textContent=x.f; document.getElementById('cfgPreis').textContent=x.p; document.getElementById('cfgFor').textContent=x.r;
    lk.innerHTML=''; for(let i=0;i<x.f;i++){ const e=document.createElement('i'); e.style.animationDelay=(i*0.012)+'s'; lk.appendChild(e); } }
  rng.addEventListener('input',upd); upd();
})();
