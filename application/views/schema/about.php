<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AboutPage",
        "name": "<?= isset($about_title) ? $about_title : 'About Cozentus - Supply Chain Logistics Technology Partner' ?>",
        "description": "<?= isset($about_description) ? $about_description : 'Cozentus is a leading AI-powered custom technology solutions provider for supply chain logistics, with teams across US, UK, and India.' ?>",
        "url": "<?= base_url('about') ?>",
        "mainEntity": {
            "@type": "Organization",
            "name": "<?= isset($org_name) ? $org_name : 'Cozentus Technologies Pvt Ltd' ?>",
            "description": "<?= isset($org_description) ? $org_description : 'AI-powered custom technology solutions for supply chain logistics.' ?>",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "<?= isset($org_street) ? $org_street : 'SRB Tower, 5th and 6th Floor, Infocity' ?>",
                "addressLocality": "<?= isset($org_city) ? $org_city : 'Bhubaneswar' ?>",
                "addressRegion": "<?= isset($org_state) ? $org_state : 'Odisha' ?>",
                "postalCode": "<?= isset($org_zip) ? $org_zip : '751024' ?>",
                "addressCountry": "<?= isset($org_country) ? $org_country : 'IN' ?>"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "<?= isset($org_phone) ? $org_phone : '+91-977-712-6600' ?>",
                "contactType": "customer service",
                "availableLanguage": "English"
            }
        },
        "about": {
            "@type": "Thing",
            "name": "Supply Chain Logistics Technology",
            "description": "AI-powered custom technology solutions for logistics and supply chain operations."
        }
    }
</script>