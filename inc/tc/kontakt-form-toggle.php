<?php
/**
 * Kontaktformular hinter einem Button: Klick (oder Link auf #kontakt) klappt das Formular auf.
 * Optional vorher $tcFormButton setzen (Button-Text, Standard "Projekt anfragen").
 * Das Formular selbst kommt unverändert aus kontakt-form.php (ID, Feldnamen, action, HubSpot).
 */
$tcFormButtonText = $tcFormButton ?? 'Projekt anfragen';
?>
    <p class="kf-open"><button class="btn" type="button" data-kf-open aria-expanded="false" aria-controls="kf-wrap"><?= tc_h($tcFormButtonText) ?></button></p>
    <div class="kf-wrap" id="kf-wrap" inert><div class="kf-in">
<?php include __DIR__ . '/kontakt-form.php'; ?>
    </div></div>
