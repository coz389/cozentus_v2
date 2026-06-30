<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "<?= isset($contact_title) ? $contact_title : 'Contact Cozentus - Supply Chain Logistics Technology' ?>",
        "description": "<?= isset($contact_description) ? $contact_description : 'Get in touch with Cozentus for AI-powered supply chain logistics solutions.' ?>",
        "url": "<?= base_url('contact') ?>",
        "mainEntity": {
            "@type": "Organization",
            "name": "<?= isset($org_name) ? $org_name : 'Cozentus Technologies Pvt Ltd' ?>",
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
                "availableLanguage": "English",
                "email": "<?= isset($org_email) ? $org_email : 'supplychain@cozentus.com' ?>"
            }
        }
    }
</script>