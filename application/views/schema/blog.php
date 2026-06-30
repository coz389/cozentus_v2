<?php if (!empty($articles)): ?>
    <?php foreach ($articles as $article): ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Article",
                "headline": "<?= addslashes($article['title']) ?>",
                "description": "<?= addslashes($article['description']) ?>",
                "author": {
                    "@type": "Person",
                    "name": "<?= isset($article['author']) ? addslashes($article['author']) : 'Cozentus Team' ?>"
                },
                "datePublished": "<?= isset($article['date_published']) ? $article['date_published'] : date('Y-m-d') ?>",
                "dateModified": "<?= isset($article['date_modified']) ? $article['date_modified'] : date('Y-m-d') ?>",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "<?= isset($article['url']) ? $article['url'] : base_url() ?>"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "<?= isset($org_name) ? $org_name : 'Cozentus Technologies Pvt Ltd' ?>",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "<?= base_url('assets/img/logo.png') ?>"
                    }
                },
                "image": {
                    "@type": "ImageObject",
                    "url": "<?= isset($article['image']) ? $article['image'] : base_url('assets/img/default-article.jpg') ?>"
                }
            }
        </script>
    <?php endforeach; ?>
<?php endif; ?>