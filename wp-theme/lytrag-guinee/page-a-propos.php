<?php /* Template: komplette Seite, 1:1 aus lytrag.org */ ?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>À propos | LytraG – L'Allemagne et la Guinée au service du numérique</title>
<meta name="description" content="Découvrez l'histoire et la vision de LytraG : un groupe qui relie l'Allemagne (LytraG-System, lytrag.com) et la Guinée (lytrag.org). Fondé par Abdoulaye Traoré &amp; Amadou Ly, LytraG numérise le commerce, l'immobilier et les services pour la Guinée et la diaspora.">
<link rel="canonical" href="https://www.lytrag.org/a-propos.html">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="LytraG">
<meta property="og:title" content="À propos | LytraG – L'Allemagne et la Guinée au service du numérique">
<meta property="og:description" content="L'histoire et la vision de LytraG : un groupe qui relie l'Allemagne (LytraG-System) et la Guinée. Fondé par Abdoulaye Traoré &amp; Amadou Ly.">
<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/diaspora.jpg">
<meta property="og:url" content="https://www.lytrag.org/a-propos.html">
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="À propos | LytraG – L'Allemagne et la Guinée au service du numérique">
<meta name="twitter:description" content="L'histoire et la vision de LytraG : un groupe qui relie l'Allemagne (LytraG-System) et la Guinée. Fondé par Abdoulaye Traoré &amp; Amadou Ly.">
<meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/diaspora.jpg">

<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/favicon-512.png" type="image/png">
<link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/favicon-512.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/design.css">

<!-- JSON-LD: Organization -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://www.lytrag.org/#organisation",
  "name": "LytraG",
  "image": "https://www.lytrag.org/assets/diaspora.jpg",
  "logo": "https://www.lytrag.org/assets/logo.png",
  "url": "https://www.lytrag.org/",
  "email": "contact@lytrag.org",
  "founders": [
    { "@type": "Person", "name": "Abdoulaye Traoré" },
    { "@type": "Person", "name": "Amadou Ly" }
  ],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Conakry",
    "addressCountry": "GN"
  },
  "areaServed": { "@type": "Country", "name": "Guinée" },
  "parentOrganization": {
    "@type": "Organization",
    "name": "LytraG-System",
    "url": "https://lytrag.com",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Duisburg",
      "addressCountry": "DE"
    }
  }
}
</script>
</head>
<body>

<a class="skip-link" href="#main">Aller au contenu</a>

<!-- ===================== HEADER ===================== -->
<header class="site-header">
  <div class="container">
    <div class="site-header__inner">
      <a class="brand" href="/" aria-label="LytraG – Accueil">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="Logo LytraG">
      </a>

      <nav class="nav" aria-label="Navigation principale">
        <input type="checkbox" id="navt" class="nav-toggle" aria-label="Ouvrir et fermer le menu">
        <label for="navt" class="nav-burger" aria-hidden="true"><span></span><span></span><span></span></label>

        <div class="nav__panel">
          <ul class="nav__list">
            <li><a href="/">Accueil</a></li>
            <li><a href="/marketplace/">Place de marché</a></li>
            <li><a href="/immobilier/">Immobilier &amp; Construction</a></li>
            <li><a href="/services/">Services</a></li>
            <li><a href="/a-propos/" aria-current="page">À propos</a></li>
            <li><a href="/contact/">Contact</a></li>
          </ul>

          <div class="lang-switch" aria-label="Choix de la langue">
            <a class="lang-switch__item is-active" href="/a-propos/" aria-current="true">FR</a>
            <span class="lang-switch__item is-disabled" aria-disabled="true" title="Bientôt disponible">EN</span>
            <span class="lang-switch__item is-disabled" aria-disabled="true" title="Bientôt disponible">DE</span>
          </div>

          <div class="nav__cta-mobile">
            <a class="btn btn-solid btn-block" href="/contact/">Nous contacter</a>
          </div>
        </div>

        <a class="btn btn-solid btn-sm nav__cta" href="/contact/">Nous contacter</a>
      </nav>
    </div>
  </div>
</header>

<main id="main">

  <!-- ===================== HERO ===================== -->
  <section class="hero">
    <div class="container">
      <div class="hero__inner">
        <div class="hero__text">
          <span class="eyebrow">À propos de LytraG</span>
          <h1>Un pont entre <span class="accent">l'Allemagne et la Guinée</span>, au service du numérique</h1>
          <p class="lead">LytraG est un groupe qui relie deux mondes : l'expertise informatique allemande de <strong>LytraG-System</strong> (Duisburg) et l'ambition d'une plateforme digitale tout-en-un pour la Guinée et la diaspora africaine. Notre mission : numériser le commerce, l'immobilier et les services, simplement et en toute confiance.</p>

          <div class="actions">
            <a class="btn btn-solid btn-lg" href="/contact/">Faire connaissance</a>
            <a class="btn btn-ghost btn-lg" href="https://lytrag.com" target="_blank" rel="noopener">Découvrir LytraG-System (Allemagne)</a>
          </div>

          <ul class="hero__checks">
            <li>Un groupe Allemagne &amp; Guinée</li>
            <li>Fondé par Abdoulaye Traoré &amp; Amadou Ly</li>
            <li>Au service de la Guinée et de la diaspora</li>
            <li>Confiance, proximité, transparence</li>
          </ul>
        </div>

        <div class="hero__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/conseil-client.jpg" alt="L'équipe LytraG accompagne un client vers les solutions numériques en Guinée" width="800" height="533">
          <div class="hero__badge">
            <span aria-hidden="true">🤝</span>
            <span><strong>Allemagne &amp; Guinée</strong><br>Une même équipe, deux continents</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== BARRE DE CONFIANCE ===================== -->
  <section class="trustbar" aria-label="Notre identité">
    <div class="container">
      <div class="trustbar__inner">
        <span class="trustbar__item"><strong>Groupe LytraG</strong>&nbsp;– Allemagne &amp; Guinée</span>
        <span class="trustbar__item"><strong>Conakry</strong>&nbsp;– notre base en Guinée</span>
        <span class="trustbar__item"><strong>Duisburg</strong>&nbsp;– l'expertise IT allemande</span>
        <span class="trustbar__item"><strong>Pour la diaspora</strong>&nbsp;– gérer tout depuis votre téléphone</span>
        <span class="trustbar__item"><strong>Service humain</strong>&nbsp;– une équipe proche de vous</span>
      </div>
    </div>
  </section>

  <!-- ===================== NOTRE HISTOIRE (Split) ===================== -->
  <section class="section" aria-labelledby="histoire-title">
    <div class="container">
      <div class="split split--media-first">
        <div class="split__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/diaspora.jpg" alt="LytraG, un groupe qui relie l'Allemagne et la Guinée" loading="lazy">
        </div>
        <div class="split__text stack">
          <span class="eyebrow">Notre histoire</span>
          <h2 id="histoire-title">D'une expertise allemande à une vision guinéenne</h2>
          <p class="lead">LytraG est née de la rencontre entre deux pays et d'une même conviction : la Guinée mérite des outils numériques modernes, fiables et pensés pour sa réalité.</p>
          <p>Tout commence en Allemagne, à Duisburg, avec <strong>LytraG-System</strong> (<a href="https://lytrag.com" target="_blank" rel="noopener">lytrag.com</a>) : un service informatique de proximité, reconnu pour son sérieux et son écoute. Forts de cette expérience, nous avons voulu mettre l'expertise IT allemande au service du continent africain.</p>
          <p>C'est ainsi qu'est née <strong>LytraG Guinée</strong> (lytrag.org), une plateforme digitale tout-en-un basée à Conakry. Elle relie l'Allemagne et la Guinée, et s'adresse autant aux Guinéens sur place qu'à la diaspora qui souhaite investir, acheter et bâtir au pays — depuis n'importe où dans le monde.</p>
          <div class="actions">
            <a class="link-arrow" href="https://lytrag.com" target="_blank" rel="noopener">Visiter LytraG-System (Allemagne)</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== NOTRE MISSION ===================== -->
  <section class="section section--alt" aria-labelledby="mission-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Notre mission</span>
        <h2 id="mission-title">Numériser le commerce, l'immobilier et les services en Guinée</h2>
        <p class="lead mx-auto">Nous bâtissons une plateforme unique qui réunit tout ce dont la Guinée et sa diaspora ont besoin pour acheter, vendre, construire et se développer — simplement, depuis un téléphone.</p>
      </div>

      <div class="grid grid-3">
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">🛒</span>
          <h3>Place de marché</h3>
          <p>Acheter et vendre en ligne en Guinée : produits, boutiques de vendeurs, paiement Orange Money et livraison via WhatsApp avec partage de localisation.</p>
          <a class="link-arrow" href="/marketplace/">Découvrir la place de marché</a>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">🏗️</span>
          <h3>Immobilier &amp; Construction</h3>
          <p>Acheter un terrain ou un bien, construire clé en main et suivre le chantier à distance : paiements par jalons, suivi photo/vidéo, titres vérifiés.</p>
          <a class="link-arrow" href="/immobilier/">Découvrir l'immobilier</a>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">💻</span>
          <h3>Services numériques</h3>
          <p>Sites web et solutions digitales, en partenariat avec LytraG-System (Allemagne) : l'expertise IT allemande au service de la Guinée.</p>
          <a class="link-arrow" href="/services/">Découvrir nos services</a>
        </article>
      </div>
    </div>
  </section>

  <!-- ===================== LES FONDATEURS ===================== -->
  <section class="section" aria-labelledby="fondateurs-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Les fondateurs</span>
        <h2 id="fondateurs-title">Deux parcours, une même ambition pour la Guinée</h2>
        <p class="lead mx-auto">LytraG a été fondée par deux entrepreneurs convaincus que le numérique peut transformer le quotidien en Guinée et rapprocher la diaspora de son pays.</p>
      </div>

      <div class="grid grid-2">
        <article class="service-card">
          <div class="service-card__body">
            <span class="eyebrow">Cofondateur</span>
            <h3>Abdoulaye Traoré</h3>
            <p>Cofondateur de LytraG, Abdoulaye porte la vision d'une plateforme proche du terrain, ancrée dans la réalité guinéenne. Il veille à ce que chaque service — commerce, immobilier ou numérique — réponde aux vrais besoins des Guinéens et de la diaspora.</p>
          </div>
        </article>
        <article class="service-card">
          <div class="service-card__body">
            <span class="eyebrow">Cofondateur</span>
            <h3>Amadou Ly</h3>
            <p>Cofondateur de LytraG et à l'origine de LytraG-System en Allemagne, Amadou apporte l'expertise informatique allemande au projet. Il met la technologie, la sécurité et la fiabilité au service d'une plateforme moderne, pensée pour durer.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ===================== NOS VALEURS ===================== -->
  <section class="section section--alt" aria-labelledby="valeurs-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Nos valeurs</span>
        <h2 id="valeurs-title">Ce qui guide chacune de nos décisions</h2>
        <p class="lead mx-auto">Trois principes simples, qui font la différence entre une plateforme de plus et un véritable partenaire de confiance.</p>
      </div>

      <div class="grid grid-3">
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">🤝</span>
          <h3>Confiance</h3>
          <p>Titres vérifiés, paiements par étapes, suivi transparent : nous bâtissons une infrastructure de confiance, surtout pour la diaspora qui investit à distance.</p>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">📍</span>
          <h3>Proximité</h3>
          <p>Une vraie équipe, basée à Conakry, qui connaît votre marché, parle votre langue et reste joignable — sur WhatsApp, par e-mail, comme un voisin de confiance.</p>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">🔎</span>
          <h3>Transparence</h3>
          <p>Des prix clairs, des étapes nettes et des comptes rendus réguliers. Vous savez toujours où en est votre commande, votre projet ou votre chantier.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ===================== L'ÉCOSYSTÈME (Split) ===================== -->
  <section class="section" aria-labelledby="ecosysteme-title">
    <div class="container">
      <div class="split">
        <div class="split__text stack">
          <span class="eyebrow">L'écosystème LytraG</span>
          <h2 id="ecosysteme-title">Un seul groupe, deux continents</h2>
          <p class="lead">LytraG ne se limite pas à un site web : c'est un écosystème pensé pour grandir, en Guinée d'abord, puis à l'international.</p>
          <ul class="checklist">
            <li><strong>LytraG-System (Allemagne) :</strong> service informatique à Duisburg — <a href="https://lytrag.com" target="_blank" rel="noopener">lytrag.com</a>. L'expertise technique et la rigueur allemandes.</li>
            <li><strong>LytraG Guinée :</strong> la plateforme digitale &amp; e-commerce de Conakry — lytrag.org. Place de marché, immobilier et services numériques.</li>
            <li><strong>Pour la diaspora :</strong> investir, acheter et construire au pays, tout en restant à l'étranger — tout depuis votre téléphone.</li>
            <li><strong>Une vision d'avenir :</strong> un système pensé pour la Guinée aujourd'hui, et conçu pour s'étendre à l'Afrique demain.</li>
          </ul>
          <div class="actions">
            <a class="btn btn-solid" href="/contact/">Échanger avec nous</a>
            <a class="link-arrow" href="https://lytrag.com" target="_blank" rel="noopener">Voir LytraG-System (Allemagne)</a>
          </div>
        </div>
        <div class="split__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/it-ausstattung.jpg" alt="L'expertise informatique de LytraG-System au service de la Guinée" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== STATS ===================== -->
  <section class="section section--navy section--tight" aria-label="LytraG en bref">
    <div class="container">
      <div class="stats stats--divided">
        <div class="stat">
          <div class="stat__num">2</div>
          <div class="stat__label">Pays reliés : Allemagne &amp; Guinée</div>
        </div>
        <div class="stat">
          <div class="stat__num">3</div>
          <div class="stat__label">Pôles : marché, immobilier, services</div>
        </div>
        <div class="stat">
          <div class="stat__num">Conakry</div>
          <div class="stat__label">Notre base en Guinée</div>
        </div>
        <div class="stat">
          <div class="stat__num">FR · EN · DE</div>
          <div class="stat__label">Bientôt multilingue</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== GRAND CTA ===================== -->
  <section class="cta-band">
    <div class="container">
      <div class="cta-band__inner cta-band--split">
        <div>
          <span class="eyebrow">Faisons connaissance</span>
          <h2>Construisons ensemble l'avenir numérique de la Guinée</h2>
          <p>Client, vendeur, investisseur de la diaspora ou partenaire : écrivez-nous. Nous serons ravis de vous présenter LytraG et de comprendre votre projet.</p>
        </div>
        <div class="actions">
          <a class="btn btn-solid btn-lg" href="/contact/">Nous contacter</a>
          <a class="btn btn-whatsapp btn-lg" href="#" data-todo="numéro WhatsApp à compléter" target="_blank" rel="noopener">
            <span aria-hidden="true">💬</span> WhatsApp <span style="opacity:.7;">(à compléter)</span>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- ===================== FOOTER ===================== -->
<footer class="site-footer">
  <div class="container">
    <div class="site-footer__grid">

      <div class="footer-brand">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo-dark.png" alt="Logo LytraG Guinée">
        <p>LytraG, la plateforme digitale tout-en-un pour la Guinée et la diaspora : place de marché, immobilier &amp; construction, services numériques.</p>
        <span class="rating">Une entreprise du groupe LytraG (Allemagne &amp; Guinée)</span>
      </div>

      <nav aria-label="Nos pôles">
        <h4>Nos pôles</h4>
        <ul class="footer-list">
          <li><a href="/marketplace/">Place de marché</a></li>
          <li><a href="/immobilier/">Immobilier &amp; Construction</a></li>
          <li><a href="/services/">Services numériques</a></li>
        </ul>
      </nav>

      <nav aria-label="LytraG">
        <h4>LytraG</h4>
        <ul class="footer-list">
          <li><a href="/a-propos/">À propos</a></li>
          <li><a href="https://lytrag.com" target="_blank" rel="noopener">LytraG-System Allemagne</a></li>
          <li><a href="/marketplace/">Devenir vendeur</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
      </nav>

      <div>
        <h4>Contact</h4>
        <address class="footer-contact">
          <span><strong>LytraG</strong><br>Conakry, Guinée</span>
          <span><span class="label">E-mail</span><br><a href="/cdn-cgi/l/email-protection#ee8d81809a8f8d9aae82979a9c8f89c0819c89"><span class="__cf_email__" data-cfemail="9ffcf0f1ebfefcebdff3e6ebedfef8b1f0edf8">[email&#160;protected]</span></a></span>
          <span><span class="label">WhatsApp</span><br><em>(à compléter)</em></span>
        </address>
      </div>

    </div>

    <div class="site-footer__bar">
      <span>© 2026 LytraG · Fondateurs Abdoulaye Traoré &amp; Amadou Ly</span>
      <nav aria-label="Langue">
        <a href="/a-propos/" aria-current="true">FR</a>
        <span class="is-disabled" aria-disabled="true">EN</span>
        <span class="is-disabled" aria-disabled="true">DE</span>
      </nav>
    </div>
  </div>
</footer>

<!-- ===================== BOUTONS FLOTTANTS ===================== -->
<div class="floating-actions">
  <a class="fab fab--call" href="/cdn-cgi/l/email-protection#1675797862777562567a6f6264777138796471" aria-label="Nous envoyer un e-mail">
    <span class="icon" aria-hidden="true">✉️</span>
  </a>
  <a class="fab fab--whatsapp" href="#" data-todo="numéro WhatsApp à compléter" target="_blank" rel="noopener" aria-label="Écrire sur WhatsApp (numéro à compléter)">
    <span class="icon" aria-hidden="true">💬</span>
  </a>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>
