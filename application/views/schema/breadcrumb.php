<?php if (!empty($breadcrumb_items)): ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                <?php foreach ($breadcrumb_items as $index => $item): ?> {
                        "@type": "ListItem",
                        "position": <?= $index + 1 ?>,
                        "name": "<?= addslashes($item['name']) ?>",
                        "item": "<?= $item['url'] ?>"
                    }
                    <?= $index < count($breadcrumb_items) - 1 ? ',' : '' ?>
                <?php endforeach; ?>
            ]
        }
    </script>
<?php endif; ?>