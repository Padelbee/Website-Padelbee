<?php
/**
 * Wiederverwendbare FAQ-Komponente
 * 
 * Verwendung:
 * include 'inc/faq-data.php';
 * include 'inc/faq-section.php';
 * 
 * Optional: Parameter für Limit oder Filter
 * $faq_limit = 3; // Zeige nur die ersten 3 FAQs
 * $faq_category = 'all'; // Für zukünftige Kategorien
 */

// Standardwerte
$faq_limit = isset($faq_limit) ? $faq_limit : null;
$faq_category = isset($faq_category) ? $faq_category : 'all';
$faq_accordion_id = isset($faq_accordion_id) ? $faq_accordion_id : 'faqAccordionSection';
$faq_show_schema = isset($faq_show_schema) ? $faq_show_schema : false;

// FAQ-Daten filtern/begrenzen
$display_faqs = $faq_data;
if ($faq_limit !== null && is_numeric($faq_limit)) {
    $display_faqs = array_slice($faq_data, 0, (int)$faq_limit);
}
?>

<div class="accordion" id="<?php echo htmlspecialchars($faq_accordion_id); ?>">
    <?php foreach ($display_faqs as $index => $faq): ?>
        <div class="accordion-item">
            <div class="accordion-header" id="heading<?php echo $faq_accordion_id . $index; ?>">
                <button class="accordion-button<?php echo $index === 0 ? '' : ' collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq_accordion_id . $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $faq_accordion_id . $index; ?>">
                    <?php echo htmlspecialchars($faq['frage']); ?>
                </button>
            </div>
            <div id="collapse<?php echo $faq_accordion_id . $index; ?>" class="accordion-collapse collapse<?php echo $index === 0 ? ' show' : ''; ?>" aria-labelledby="heading<?php echo $faq_accordion_id . $index; ?>" data-bs-parent="#<?php echo htmlspecialchars($faq_accordion_id); ?>">
                <div class="accordion-body">
                    <?php echo nl2br(htmlspecialchars($faq['antwort'])); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php if ($faq_show_schema): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schema_items = [];
    foreach ($display_faqs as $faq) {
        $schema_items[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['frage'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode(strip_tags($faq['antwort']), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '
          }
        }';
    }
    echo implode(",\n    ", $schema_items);
    ?>
  ]
}
</script>
<?php endif; ?>

