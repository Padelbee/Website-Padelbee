/* Hero-Bild 3D: kippt mit der Maus, ohne Maus sanftes Schwenken */
(function(){
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  document.querySelectorAll('.hero-art.tilt').forEach(function(box){
    var hero = box.closest('.a-hero') || box, img = box.querySelector('img'), raf = 0;
    if (!img) return;
    hero.addEventListener('pointermove', function(e){
      if (e.pointerType !== 'mouse') return;
      var r = box.getBoundingClientRect();
      var x = (e.clientX - (r.left + r.width / 2)) / r.width;
      var y = (e.clientY - (r.top + r.height / 2)) / r.height;
      cancelAnimationFrame(raf);
      raf = requestAnimationFrame(function(){
        box.classList.add('live');
        img.style.transform = 'rotateY(' + (x * 14).toFixed(2) + 'deg) rotateX(' + (-y * 10).toFixed(2) + 'deg) translateZ(30px)';
      });
    });
    hero.addEventListener('pointerleave', function(){ box.classList.remove('live'); img.style.transform = ''; });
  });
})();
