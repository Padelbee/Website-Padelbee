$(document).ready(function () {
  document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {
    everyitem.addEventListener('mouseover', function (e) {
      if ($(window).width() > 975) {
        let el_link = this.querySelector('a.dropdown-toggle');
        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.add('show');
          nextEl.classList.add('show');
        }
      }
    });
    everyitem.addEventListener('mouseleave', function (e) {
      if ($(window).width() > 975) {
        let el_link = this.querySelector('a.dropdown-toggle');
        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.remove('show');
          nextEl.classList.remove('show');
        }
      }
    });
  });

  $('.as').click(function () {
    if (
      !$('#customCheck1').is(':checked') &&
      !$('#customCheck2').is(':checked') &&
      !$('#customCheck3').is(':checked') &&
      !$('#customCheck4').is(':checked') &&
      !$('#customCheck5').is(':checked') &&
      !$('#customCheck6').is(':checked') &&
      !$('#customCheck7').is(':checked') &&
      !$('#customCheck8').is(':checked') &&
      !$('#customCheck9').is(':checked') &&
      !$('#customCheck10').is(':checked')
    )
      $('#weiter1-ohne').html('Weiter ohne Auswahl');
    else $('#weiter1-ohne').html('Weiter mit Auswahl');
  });

  $('#weiter1-ohne').click(function () {
    // Checkbox-Werte in Hidden Fields übertragen
    transferCheckboxValues();
    $('#form1').hide();
    $('#form2').fadeIn();
    $('#back').show();
    renderTurnstileWidget();
    return false;
  });

  $('#back').click(function () {
    $('#form2').hide();
    $('#form1').fadeIn();
    $('#back').hide();
    return false;
  });

  $('.reiterbtn').click(function () {
    z = $(this).attr('rel');
    $('.tab').removeClass('active show');
    $('.tab-pane').removeClass('active');
    $(z).addClass('active');
    $(z + '-pane').addClass('active show');
  });

  $('.nav-item .nav-link').click(function () {
    $('.navbar-collapse').removeClass('show');
  });

  $(window).scroll(function () {
    if ($(window).width() > 992) {
      if ($(window).scrollTop() >= 20) {
        $('body').addClass('floating-nav');
      } else {
        $('body').removeClass('floating-nav');
      }
    }
  });
  $('#organisation').change(function () {
    $(this).addClass('dark');
  });

  // Sportplatzbau: Leistungsschritte beim Scroll einblenden
  var steps = document.querySelectorAll('.leistungsschritt');
  if (steps.length && 'IntersectionObserver' in window) {
    var stepObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
        }
      });
    }, { rootMargin: '0px 0px -40px 0px', threshold: 0.1 });
    steps.forEach(function (el) { stepObserver.observe(el); });
  } else if (steps.length) {
    steps.forEach(function (el) { el.classList.add('in-view'); });
  }
});

function setCookie(name) {
  var date = new Date();
  date.setTime(date.getTime() + 1000 * 60 * 60 * 24 * 365);
  var tt = date.toGMTString();
  document.cookie = name + '=1;expires=' + tt + ';path=/;domain=freasy.app';
  return true;
}

// Funktion zum Übertragen der Checkbox-Werte in EIN Hidden Fieldw
function transferCheckboxValues() {
  var interessen = [];

  if ($('#customCheck1').is(':checked')) interessen.push($('#customCheck1').val());
  if ($('#customCheck2').is(':checked')) interessen.push($('#customCheck2').val());
  if ($('#customCheck3').is(':checked')) interessen.push($('#customCheck3').val());
  if ($('#customCheck4').is(':checked')) interessen.push($('#customCheck4').val());
  if ($('#customCheck5').is(':checked')) interessen.push($('#customCheck5').val());
  if ($('#customCheck6').is(':checked')) interessen.push($('#customCheck6').val());
  if ($('#customCheck7').is(':checked')) interessen.push($('#customCheck7').val());
  if ($('#customCheck8').is(':checked')) interessen.push($('#customCheck8').val());
  if ($('#customCheck9').is(':checked')) interessen.push($('#customCheck9').val());
  if ($('#customCheck10').is(':checked')) interessen.push($('#customCheck10').val());

  // Alle Interessen als kommaseparierte Liste in ein Feld
  var interesseWert = interessen.join(', ');
  $('#interesse').val(interesseWert);

  // Debug: Ausgabe in Konsole
  console.log('Übertragene Interessen:', interesseWert);

  return interesseWert;
}

// Cloudflare Turnstile: Widget erst rendern, wenn Schritt 2 (#form2) sichtbar ist.
// Das Widget steckt in einem anfangs versteckten Container, daher explizites Rendern
// statt implizitem class="cf-turnstile". Die Seite navigiert nach dem Submit weg,
// daher ist kein turnstile.reset() nötig.
var turnstileWidgetId = null;

function renderTurnstileWidget() {
  var el = document.getElementById('turnstile-widget');
  if (!el || turnstileWidgetId !== null || !window.turnstile) return;
  turnstileWidgetId = window.turnstile.render(el, {
    sitekey: el.getAttribute('data-sitekey'),
    action: el.getAttribute('data-action'),
    language: el.getAttribute('data-language') || 'auto',
    callback: function () {
      $('#turnstile-hint').hide();
    },
  });
}

// Wird von api.js (?onload=onTurnstileLoad) aufgerufen, sobald Turnstile geladen ist
window.onTurnstileLoad = function () {
  if ($('#form2').is(':visible')) renderTurnstileWidget();
};

// Formular-Submit-Handler für HubSpot-Kompatibilität
$(document).ready(function () {
  $('#kontakt-formular').on('submit', function (e) {
    // Checkbox-Werte nochmal übertragen (Sicherheit)
    var interessen = transferCheckboxValues();

    console.log('Form wird submitted mit Interesse:', $('#interesse').val());

    // Turnstile: ohne Token nicht absenden (Server würde ablehnen)
    if (window.turnstile && turnstileWidgetId !== null) {
      var token = window.turnstile.getResponse(turnstileWidgetId);
      if (!token) {
        e.preventDefault();
        $('#turnstile-hint').show();
        return false;
      }
    }

    // Browser-Validierung nutzen
    // Wenn Formular valide ist, wird es normal submitted (kein preventDefault)
    // HubSpot kann dann tracken
  });
});

function testEMail(s) {
  var a = false;
  var res = false;
  if (typeof RegExp == 'function') {
    var b = new RegExp('abc');
    if (b.test('abc') == true) {
      a = true;
    }
  }
  if (a == true) {
    reg = new RegExp('^([a-zA-Z0-9\\-\\.\\_]+)' + '(\\@)([a-zA-Z0-9\\-\\.]+)' + '(\\.)([a-zA-Z]{2,4})$');
    res = reg.test(s);
  } else {
    res = s.search('@') >= 1 && s.lastIndexOf('.') > s.search('@') && s.lastIndexOf('.') >= s.length - 5;
  }
  return res;
}

