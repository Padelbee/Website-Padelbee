// Prüft Seiten auf Desktop (1280) und Handy (390) auf einzelne Wörter in der letzten Zeile (Hurenkinder).
// Aufruf: node tests/hurenkinder-check.mjs /courts /team  (braucht puppeteer-core und Google Chrome; die URL ist padelbeedev)
import puppeteer from 'puppeteer-core';
const b=await puppeteer.launch({executablePath:'/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'});
for (const [w,h] of [[1280,900],[390,844]]) for (const path of (process.argv.slice(2).length?process.argv.slice(2):['/courts'])){
const p=await b.newPage(); await p.setViewport({width:w,height:h});
await p.goto('https://padelbeedev.devvibe.io'+path+'?x='+Date.now(),{waitUntil:'networkidle0'});
const r=await p.evaluate(()=>{const out=[];document.querySelectorAll('main p, main li, section p, section li, section h2, section h3, section figcaption').forEach(el=>{
 if(el.closest('form,header,footer,nav')||!el.offsetParent) return; if(el.textContent.trim().split(/\s+/).length<5) return;
 const words=[]; const tw=document.createTreeWalker(el,NodeFilter.SHOW_TEXT); let n;
 while(n=tw.nextNode()){ const re=/\S+/g; let m; while(m=re.exec(n.textContent)){ const rg=document.createRange(); rg.setStart(n,m.index); rg.setEnd(n,m.index+m[0].length); const rs=rg.getClientRects(); if(rs.length) words.push({t:m[0],top:Math.round(rs[rs.length-1].top),lines:rs.length}); } }
 if(words.length<5) return; const lastTop=words[words.length-1].top; const firstTop=words[0].top; if(lastTop===firstTop) return;
 const onLast=words.filter(x=>Math.abs(x.top-lastTop)<3).length;
 if(onLast===1 && words[words.length-1].lines===1) out.push(el.textContent.trim().slice(-45));});return out;});
console.log(w,path,r.length?r:'OK'); await p.close();}
await b.close();
