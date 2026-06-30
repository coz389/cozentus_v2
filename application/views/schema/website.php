<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "<?= isset($site_name) ? $site_name : 'Cozentus - Supply Chain Logistics Technology' ?>",
        "url": "<?= base_url() ?>",
        "description": "<?= isset($site_description) ? $site_description : 'AI-powered custom technology solutions for supply chain logistics.' ?>",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?= base_url('search?q={search_term_string}') ?>",
            "query-input": "required name=search_term_string"
        },
        "inLanguage": "en-US"
    }
</script>