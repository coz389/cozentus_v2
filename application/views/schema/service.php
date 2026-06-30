<?php if (!empty($services)): ?>
    <?php foreach ($services as $service): ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Service",
                "name": "<?= addslashes($service['name']) ?>",
                "description": "<?= addslashes($service['description']) ?>",
                "provider": {
                    "@type": "Organization",
                    "name": "<?= isset($org_name) ? $org_name : 'Cozentus Technologies Pvt Ltd' ?>",
                    "url": "<?= base_url() ?>"
                },
                "serviceType": "<?= isset($service['type']) ? addslashes($service['type']) : 'Technology Service' ?>",
                "url": "<?= isset($service['url']) ? $service['url'] : base_url('services') ?>",
                "offers": {
                    "@type": "Offer",
                    "price": "0",
                    "priceCurrency": "USD"
                }
            }
        </script>
    <?php endforeach; ?>
<?php endif; ?>