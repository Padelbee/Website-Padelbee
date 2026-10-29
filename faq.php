<?php
$page_id = 'faq';
include 'inc/header.php';
include 'inc/faq-data.php';
?>

<main id="main">
    <div class="container textsite" id="site">
        <div class="row pt-6">
            <div class="col-12 pb-5">
                <h1><?= t('faq_h1') ?></h1>

                <div class="accordion" id="faqAccordion">
                    <?php foreach ($faq_data as $index => $faq): ?>
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading<?php echo $index; ?>">
                            <button class="accordion-button<?php echo $index === 0 ? '' : ' collapsed'; ?>"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>"
                                aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-controls="collapse<?php echo $index; ?>">
                                <?php echo htmlspecialchars($faq['frage']); ?>
                            </button>
                        </div>
                        <div id="collapse<?php echo $index; ?>"
                            class="accordion-collapse collapse<?php echo $index === 0 ? ' show' : ''; ?>"
                            aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php echo nl2br(htmlspecialchars($faq['antwort'])); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        <?php 
    $schema_items = [];
    foreach ($faq_data as $faq) {
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

<?php
include 'inc/footer.php';
?>