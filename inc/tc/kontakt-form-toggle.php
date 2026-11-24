<?php
/**
 * Kontaktformular als kleine CTA: Kasten "Projekt anfragen" zeigt erst nur Überschrift, Satz und Button.
 * Klick auf den Button (oder ein Link auf #kontakt) klappt die Formularfelder im selben Kasten auf.
 * Optional vorher $tcFormButton setzen (Button-Text, Standard "Projekt anfragen").
 * Das Formular selbst bleibt unverändert (ID, Feldnamen, action, HubSpot).
 */
$tcFormButtonText = $tcFormButton ?? 'Projekt anfragen';
$tcFormToggle = true;
?>
    <div class="kf-wrap" id="kf-wrap">
<?php include __DIR__ . '/kontakt-form.php'; ?>
    </div>
<?php $tcFormToggle = false;
