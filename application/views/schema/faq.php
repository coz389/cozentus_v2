<?php if (!empty($faqs)): ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                <?php foreach ($faqs as $index => $faq): ?> {
                        "@type": "Question",
                        "name": "<?= addslashes($faq['question']) ?>",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "<?= addslashes($faq['answer']) ?>"
                        }
                    }
                    <?= $index < count($faqs) - 1 ? ',' : '' ?>
                <?php endforeach; ?>
            ]
        }
    </script>
<?php endif; ?>