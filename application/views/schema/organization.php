<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?= isset($org_name) ? $org_name : 'Cozentus Technologies Pvt Ltd' ?>",
        "url": "<?= base_url() ?>",
        "logo": "<?= isset($org_logo) ? $org_logo : base_url('assets/img/logo.png') ?>",
        "description": "<?= isset($org_description) ? $org_description : 'AI-powered custom technology solutions for supply chain logistics.' ?>",
        "email": "<?= isset($org_email) ? $org_email : 'supplychain@cozentus.com' ?>",
        "telephone": "<?= isset($org_phone) ? $org_phone : '+91 977 712 6600' ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?= isset($org_street) ? $org_street : 'SRB Tower, 5th and 6th Floor, Infocity' ?>",
            "addressLocality": "<?= isset($org_city) ? $org_city : 'Bhubaneswar' ?>",
            "addressRegion": "<?= isset($org_state) ? $org_state : 'Odisha' ?>",
            "postalCode": "<?= isset($org_zip) ? $org_zip : '751024' ?>",
            "addressCountry": "<?= isset($org_country) ? $org_country : 'IN' ?>"
        },
        "sameAs": [
            "https://www.facebook.com/CozentusTechnologies/",
            "https://www.linkedin.com/company/cozentus/",
            "https://www.instagram.com/cozentus/",
            "https://www.youtube.com/@cozentus"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?= isset($org_phone) ? $org_phone : '+91-977-712-6600' ?>",
            "contactType": "customer service",
            "availableLanguage": "English"
        }
    }
</script>