/* Hero-Bild 3D: kippt mit der Maus, ohne Maus sanftes Schwenken.
   Ziel ist .tilt-inner (mehrere Ebenen) oder sonst das Bild selbst. */
(function(){
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  document.querySelectorAll('.hero-art.tilt').forEach(function(box){
    var hero = box.closest('.a-hero') || box, el = box.querySelector('.tilt-inner') || box.querySelector('img'), raf = 0;
    if (!el) return;
    hero.addEventListener('pointermove', function(e){
      if (e.pointerType !== 'mouse') return;
      var r = box.getBoundingClientRect();
      var x = (e.clientX - (r.left + r.width / 2)) / r.width;
      var y = (e.clientY - (r.top + r.height / 2)) / r.height;
      cancelAnimationFrame(raf);
      raf = requestAnimationFrame(function(){
        box.classList.add('live');
        el.style.transform = 'rotateY(' + (x * 16).toFixed(2) + 'deg) rotateX(' + (-y * 11).toFixed(2) + 'deg)';
      });
    });
    hero.addEventListener('pointerleave', function(){ box.classList.remove('live'); el.style.transform = ''; });
  });
})();
