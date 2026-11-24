/* Kontaktformular (#kontakt): Interessen sammeln, Cloudflare Turnstile rendern, ohne Token nicht absenden. */
(function () {
  var form = document.getElementById('kontakt-formular');
  if (!form) return;
  var interesse = document.getElementById('interesse');
  var hint = document.getElementById('turnstile-hint');
  var widgetId = null;

  function collect() {
    var v = [];
    form.querySelectorAll('.kf-int:checked').forEach(function (c) { v.push(c.value); });
    interesse.value = v.join(', ');
    return interesse.value;
  }
  form.querySelectorAll('.kf-int').forEach(function (c) { c.addEventListener('change', collect); });

  function renderWidget() {
    var el = document.getElementById('turnstile-widget');
    if (!el || widgetId !== null || !window.turnstile) return;
    widgetId = window.turnstile.render(el, {
      sitekey: el.getAttribute('data-sitekey'),
      action: el.getAttribute('data-action'),
      language: el.getAttribute('data-language') || 'auto',
      theme: 'dark',
      callback: function () { hint.style.display = 'none'; }
    });
  }
  // Wird von api.js (?onload=onTurnstileLoad) aufgerufen, sobald Turnstile geladen ist
  window.onTurnstileLoad = renderWidget;
  if (window.turnstile) renderWidget();

  form.addEventListener('submit', function (e) {
    collect();
    // Ohne Token nicht absenden (Server würde ablehnen)
    if (window.turnstile && widgetId !== null && !window.turnstile.getResponse(widgetId)) {
      e.preventDefault();
      hint.style.display = 'block';
    }
  });

  // Nach einem Fehler-Redirect (/?error=…) zum Formular scrollen (das Haupt-Skript scrollt beim Laden nach oben)
  if (/[?&]error=/.test(location.search)) {
    window.addEventListener('load', function () {
      setTimeout(function () {
        var t = document.getElementById('anfrage');
        if (t) t.scrollIntoView({ behavior: 'instant', block: 'start' });
      }, 60);
    });
  }
})();

/* Formular hinter Button (kontakt-form-toggle.php): Button oder Link auf #kontakt klappt es auf. */
(function () {
  var wrap = document.getElementById('kf-wrap');
  if (!wrap) return;
  var btn = document.querySelector('[data-kf-open]');
  function open(scroll) {
    if (wrap.classList.contains('open')) { if (scroll) wrap.scrollIntoView({ behavior: 'smooth', block: 'start' }); return; }
    wrap.classList.add('open');
    wrap.removeAttribute('inert');
    if (btn) { btn.setAttribute('aria-expanded', 'true'); btn.closest('.kf-open').classList.add('done'); }
    if (scroll) setTimeout(function () { wrap.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 80);
    var first = wrap.querySelector('input:not([type=hidden]):not([type=checkbox]), select, textarea');
    if (first) setTimeout(function () { try { first.focus({ preventScroll: true }); } catch (e) {} }, 450);
  }
  if (btn) btn.addEventListener('click', function () { open(true); });
  document.querySelectorAll('a[href="#kontakt"], a[href="' + location.pathname + '#kontakt"]').forEach(function (a) {
    a.addEventListener('click', function () { open(false); });
  });
  if (location.hash === '#kontakt' || /[?&]error=/.test(location.search)) open(false);
})();
