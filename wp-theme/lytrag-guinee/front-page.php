<?php /* Template: komplette Seite, 1:1 aus lytrag.org */ ?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LytraG Guinée | Place de marché, immobilier &amp; services numériques</title>
<meta name="description" content="LytraG, la plateforme digitale tout-en-un pour la Guinée et la diaspora : place de marché en ligne, immobilier &amp; construction clé en main, services numériques. Paiement Orange Money, livraison via WhatsApp et géolocalisation. Gérez tout depuis votre téléphone.">
<link rel="canonical" href="https://www.lytrag.org/index.html">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="LytraG">
<meta property="og:title" content="LytraG Guinée | La plateforme digitale tout-en-un">
<meta property="og:description" content="Place de marché, immobilier &amp; construction, services numériques pour la Guinée et la diaspora. Orange Money, livraison via WhatsApp et géolocalisation.">
<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hero-conakry.jpg">
<meta property="og:url" content="https://www.lytrag.org/index.html">
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="LytraG Guinée | La plateforme digitale tout-en-un">
<meta name="twitter:description" content="Place de marché, immobilier &amp; construction, services numériques pour la Guinée et la diaspora. Orange Money, livraison via WhatsApp et géolocalisation.">
<meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hero-conakry.jpg">

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
  "image": "https://www.lytrag.org/assets/hero-conakry.jpg",
  "logo": "https://www.lytrag.org/assets/logo.png",
  "url": "https://www.lytrag.org/",
  "email": "contact@lytrag.org",
  "founder": [
    { "@type": "Person", "name": "Abdoulaye Traoré" },
    { "@type": "Person", "name": "Amadou Ly" }
  ],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Conakry",
    "addressCountry": "GN"
  },
  "areaServed": { "@type": "Country", "name": "Guinée" },
  "sameAs": ["https://lytrag.com"]
}
</script>

<!-- JSON-LD: FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Que propose LytraG en Guinée ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "LytraG est une plateforme digitale tout-en-un avec trois pôles : une place de marché pour acheter et vendre en ligne, un pôle immobilier et construction (terrains, biens, construction clé en main, gestion de chantier à distance pour la diaspora) et des services numériques. Le paiement se fait par Orange Money et la livraison s'organise par WhatsApp avec partage de votre localisation."
      }
    },
    {
      "@type": "Question",
      "name": "Comment se passe le paiement ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Le moyen de paiement principal est Orange Money (mobile money), simple et déjà utilisé partout en Guinée. Vous payez directement depuis votre téléphone, sans carte bancaire. Pour les projets de construction, le paiement se fait par étapes (jalons) au fur et à mesure de l'avancement."
      }
    },
    {
      "@type": "Question",
      "name": "Je vis à l'étranger : puis-je acheter et construire depuis la diaspora ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oui. LytraG est pensé pour la diaspora africaine. Vous gérez tout depuis votre téléphone : achat de terrains et de biens aux titres vérifiés, construction clé en main, suivi du chantier par photos et vidéos, et paiements par jalons. Vous gardez le contrôle, où que vous soyez dans le monde."
      }
    },
    {
      "@type": "Question",
      "name": "Comment devenir vendeur sur la place de marché ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Notre place de marché accueille les vendeurs guinéens qui souhaitent ouvrir leur boutique en ligne et toucher plus de clients, y compris dans la diaspora. Rendez-vous sur la page Place de marché et cliquez sur « Devenir vendeur » pour commencer."
      }
    },
    {
      "@type": "Question",
      "name": "Quel est le lien entre LytraG et l'Allemagne ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "LytraG relie deux pays : LytraG-System en Allemagne (lytrag.com), un service informatique professionnel, et LytraG en Guinée (lytrag.org). C'est l'expertise IT allemande mise au service de la Guinée et de son développement numérique."
      }
    }
  ]
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
            <li><a href="/" aria-current="page">Accueil</a></li>
            <li><a href="/marketplace/">Place de marché</a></li>
            <li><a href="/immobilier/">Immobilier &amp; Construction</a></li>
            <li><a href="/services/">Services</a></li>
            <li><a href="/a-propos/">À propos</a></li>
            <li><a href="/contact/">Contact</a></li>
          </ul>

          <div class="lang-switch" aria-label="Choix de la langue">
            <a class="lang-switch__item is-active" href="/" aria-current="true">FR</a>
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
          <span class="eyebrow">Guinée &amp; diaspora · tout-en-un</span>
          <h1>La plateforme digitale <span class="accent">tout-en-un</span> pour la Guinée &amp; la diaspora</h1>
          <p class="lead">Acheter et vendre en ligne, investir dans l'immobilier, construire à distance, et accéder à des services numériques de confiance – tout depuis votre téléphone. Paiement Orange Money, livraison par WhatsApp et géolocalisation. LytraG relie la Guinée et le monde.</p>

          <div class="actions">
            <a class="btn btn-solid btn-lg" href="/marketplace/">Découvrir la place de marché</a>
            <a class="btn btn-ghost btn-lg" href="/immobilier/">Immobilier &amp; construction</a>
          </div>

          <ul class="hero__checks">
            <li>Achetez &amp; vendez en ligne en toute confiance</li>
            <li>Construisez en Guinée depuis l'étranger</li>
            <li>Paiement Orange Money &amp; mobile money</li>
            <li>Livraison via WhatsApp &amp; localisation</li>
          </ul>
        </div>

        <div class="hero__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/hero-conakry.jpg" alt="Une cliente LytraG devant la corniche moderne de Conakry, smartphone à la main" width="800" height="533">
          <div class="hero__badge">
            <span aria-hidden="true">🇬🇳</span>
            <span><strong>Conakry, Guinée</strong><br>Au service de tout le pays &amp; de la diaspora</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== TRUSTBAR ===================== -->
  <section class="trustbar" aria-label="Nos engagements">
    <div class="container">
      <div class="trustbar__inner">
        <span class="trustbar__item"><strong>Tout-en-un</strong>&nbsp;– marché, immobilier &amp; numérique</span>
        <span class="trustbar__item"><strong>Orange Money</strong>&nbsp;– paiement simple &amp; mobile</span>
        <span class="trustbar__item"><strong>Diaspora</strong>&nbsp;– gérez tout depuis votre téléphone</span>
        <span class="trustbar__item"><strong>Titres vérifiés</strong>&nbsp;– immobilier en confiance</span>
        <span class="trustbar__item"><strong>Allemagne &amp; Guinée</strong>&nbsp;– expertise IT du groupe LytraG</span>
      </div>
    </div>
  </section>

  <!-- ===================== LES 3 PÔLES ===================== -->
  <section class="section" aria-labelledby="poles-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Nos trois pôles</span>
        <h2 id="poles-title">Une seule plateforme, trois façons d'avancer</h2>
        <p class="lead mx-auto">Que vous vouliez acheter, vendre, investir, construire ou digitaliser votre activité, LytraG réunit tout au même endroit – simplement et en confiance.</p>
      </div>

      <div class="grid grid-3">

        <article class="service-card">
          <div class="service-card__media">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/marche.jpg" alt="Produits et boutiques en ligne sur la place de marché LytraG" loading="lazy">
          </div>
          <div class="service-card__body">
            <h3>Place de marché</h3>
            <p>Achetez et vendez en ligne : électronique, mode, maison, alimentation, cosmétiques, matériaux, véhicules et plus encore. Ouvrez votre boutique, payez avec Orange Money et faites livrer via WhatsApp.</p>
            <a class="link-arrow" href="/marketplace/">Explorer la place de marché</a>
          </div>
        </article>

        <article class="service-card">
          <div class="service-card__media">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/construction.jpg" alt="Immobilier et construction en Guinée gérés à distance avec LytraG" loading="lazy">
          </div>
          <div class="service-card__body">
            <h3>Immobilier &amp; Construction</h3>
            <p>Terrains et biens aux titres vérifiés, construction clé en main, fourniture de matériaux et gestion de chantier à distance. Suivi par photos et vidéos, paiements par étapes – idéal pour la diaspora.</p>
            <a class="link-arrow" href="/immobilier/">Découvrir l'immobilier</a>
          </div>
        </article>

        <article class="service-card">
          <div class="service-card__media">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/it-sicherheit.jpg" alt="Services numériques et création de sites web par LytraG" loading="lazy">
          </div>
          <div class="service-card__body">
            <h3>Services numériques</h3>
            <p>Sites web, solutions digitales et accompagnement sur mesure, en partenariat avec LytraG-System (Allemagne). L'expertise IT allemande au service de votre projet en Guinée.</p>
            <a class="link-arrow" href="/services/">Voir nos services</a>
          </div>
        </article>

      </div>

      <div class="actions" style="justify-content:center; margin-top: var(--space-7);">
        <a class="btn btn-solid" href="/marketplace/">Devenez vendeur</a>
        <a class="btn btn-whatsapp" href="#" data-todo="numéro WhatsApp à compléter">
          <span aria-hidden="true">💬</span> Nous écrire sur WhatsApp
        </a>
      </div>
    </div>
  </section>

  <!-- ===================== DIASPORA (Split) ===================== -->
  <section class="section section--alt" aria-labelledby="diaspora-title">
    <div class="container">
      <div class="split split--media-first">
        <div class="split__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/diaspora.jpg" alt="Un membre de la diaspora suit son projet de construction en Guinée depuis son téléphone avec LytraG" loading="lazy">
        </div>
        <div class="split__text stack">
          <span class="eyebrow">Pensé pour la diaspora</span>
          <h2 id="diaspora-title">Gérez tout depuis votre téléphone, où que vous soyez</h2>
          <p class="lead">Vous vivez à l'étranger et vous voulez investir, acheter ou construire au pays ? Avec LytraG, vous gardez le contrôle à distance, en toute transparence – sans intermédiaire douteux et sans mauvaise surprise.</p>
          <ul class="checklist">
            <li><strong>Suivi en direct :</strong> photos et vidéos de l'avancement de votre chantier ou de votre commande.</li>
            <li><strong>Paiements par jalons :</strong> vous payez étape par étape, au fur et à mesure des résultats.</li>
            <li><strong>Titres vérifiés :</strong> terrains et biens contrôlés pour acheter en confiance.</li>
            <li><strong>Tout sur mobile :</strong> Orange Money pour payer, WhatsApp pour échanger et livrer.</li>
          </ul>
          <div class="actions">
            <a class="btn btn-solid" href="/immobilier/">Construire à distance</a>
            <a class="link-arrow" href="/contact/">Parler à un conseiller</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== PAIEMENT &amp; LIVRAISON ===================== -->
  <section class="section" aria-labelledby="paiement-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Paiement &amp; livraison</span>
        <h2 id="paiement-title">Simple, mobile et adapté à la Guinée</h2>
        <p class="lead mx-auto">Pas besoin de carte bancaire ni de démarches compliquées : tout se fait depuis votre téléphone, comme vous en avez l'habitude.</p>
      </div>

      <div class="grid grid-3">
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">📱</span>
          <h3>Orange Money &amp; mobile money</h3>
          <p>Payez en quelques secondes depuis votre téléphone. Pour la construction, réglez par étapes (jalons), au rythme de l'avancement.</p>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">💬</span>
          <h3>Commande &amp; livraison via WhatsApp</h3>
          <p>Vous échangez avec le vendeur ou notre équipe sur WhatsApp, vous confirmez et vous organisez la livraison – simplement.</p>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">📍</span>
          <h3>Livraison par géolocalisation</h3>
          <p>Partagez votre localisation et recevez votre commande là où vous êtes, sans adresse compliquée à expliquer.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- ===================== STATS ===================== -->
  <section class="section section--navy section--tight" aria-label="LytraG en bref">
    <div class="container">
      <div class="stats stats--divided">
        <div class="stat">
          <div class="stat__num">3</div>
          <div class="stat__label">Pôles réunis en une plateforme</div>
        </div>
        <div class="stat">
          <div class="stat__num">2</div>
          <div class="stat__label">Pays : Allemagne &amp; Guinée</div>
        </div>
        <div class="stat">
          <div class="stat__num">100 %</div>
          <div class="stat__label">Géré depuis votre téléphone</div>
        </div>
        <div class="stat">
          <div class="stat__num">🇬🇳</div>
          <div class="stat__label">Au service de la Guinée &amp; la diaspora</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== COMMENT ÇA MARCHE ===================== -->
  <section class="section" aria-labelledby="process-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Comment ça marche</span>
        <h2 id="process-title">En quatre étapes simples</h2>
        <p class="lead mx-auto">Que vous achetiez un produit ou que vous lanciez un projet de construction, le principe reste le même : clair, mobile et en confiance.</p>
      </div>

      <div class="grid grid-4 process">
        <div class="process-step">
          <span class="process-step__num">1</span>
          <h3>Choisissez</h3>
          <p>Parcourez la place de marché, les biens immobiliers ou nos services numériques, et sélectionnez ce qu'il vous faut.</p>
        </div>
        <div class="process-step">
          <span class="process-step__num">2</span>
          <h3>Échangez sur WhatsApp</h3>
          <p>Discutez avec le vendeur ou notre équipe, posez vos questions et obtenez un devis clair avant de vous engager.</p>
        </div>
        <div class="process-step">
          <span class="process-step__num">3</span>
          <h3>Payez en confiance</h3>
          <p>Réglez par Orange Money – en une fois pour un achat, ou par étapes (jalons) pour un projet de construction.</p>
        </div>
        <div class="process-step">
          <span class="process-step__num">4</span>
          <h3>Recevez &amp; suivez</h3>
          <p>Recevez votre commande par livraison géolocalisée, ou suivez votre chantier à distance par photos et vidéos.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== À PROPOS / ÉCOSYSTÈME (Split) ===================== -->
  <section class="section section--alt" id="apropos" aria-labelledby="apropos-title">
    <div class="container">
      <div class="split">
        <div class="split__text stack">
          <span class="eyebrow">L'écosystème LytraG</span>
          <h2 id="apropos-title">L'Allemagne et la Guinée, réunies pour vous</h2>
          <p class="lead">LytraG est né d'une conviction simple : mettre l'expertise numérique au service du développement de la Guinée. Notre groupe relie deux pays – <strong>LytraG-System en Allemagne</strong> (service informatique) et <strong>LytraG en Guinée</strong> – pour offrir des solutions fiables, modernes et accessibles à tous.</p>
          <ul class="checklist">
            <li><strong>Fondateurs :</strong> Abdoulaye Traoré &amp; Amadou Ly.</li>
            <li><strong>Expertise IT allemande :</strong> rigueur et fiabilité au service de la Guinée.</li>
            <li><strong>Ancrage local :</strong> une équipe à Conakry, proche du terrain et de ses réalités.</li>
            <li><strong>Vision long terme :</strong> une plateforme guinéenne pensée pour grandir à l'international.</li>
          </ul>
          <div class="actions">
            <a class="btn btn-solid" href="/a-propos/">En savoir plus sur LytraG</a>
            <a class="link-arrow" href="https://lytrag.com" target="_blank" rel="noopener">Découvrir LytraG-System (Allemagne)</a>
          </div>
        </div>
        <div class="split__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ecosysteme.jpg" alt="L'écosystème LytraG relie l'Allemagne et la Guinée" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== TÉMOIGNAGES ===================== -->
  <section class="section" aria-labelledby="temoignages-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Ils nous font confiance</span>
        <h2 id="temoignages-title">Des projets concrets, en Guinée &amp; dans la diaspora</h2>
        <p class="lead mx-auto">Ce que nos clients apprécient chez LytraG : la simplicité, la transparence et le sentiment d'avoir enfin un interlocuteur de confiance.</p>
      </div>

      <div class="grid grid-3">
        <figure class="testimonial">
          <span class="stars" aria-label="5 sur 5 étoiles"></span>
          <blockquote class="testimonial__quote">Je vis en France et je voulais construire la maison de mes parents à Conakry. Avec LytraG, j'ai suivi le chantier en photos et payé par étapes. Pour la première fois, je me suis senti en confiance, à distance.</blockquote>
          <figcaption class="testimonial__foot">
            <span class="testimonial__avatar" aria-hidden="true">MD</span>
            <span>
              <span class="testimonial__name">Mamadou D.</span>
              <span class="testimonial__meta">Diaspora, Paris</span>
            </span>
          </figcaption>
        </figure>

        <figure class="testimonial">
          <span class="stars" aria-label="5 sur 5 étoiles"></span>
          <blockquote class="testimonial__quote">J'ai ouvert ma boutique de cosmétiques sur la place de marché. Mes clientes commandent sur WhatsApp et paient par Orange Money. Je vends maintenant bien au-delà de mon quartier.</blockquote>
          <figcaption class="testimonial__foot">
            <span class="testimonial__avatar" aria-hidden="true">FC</span>
            <span>
              <span class="testimonial__name">Fatoumata C.</span>
              <span class="testimonial__meta">Vendeuse, Conakry</span>
            </span>
          </figcaption>
        </figure>

        <figure class="testimonial">
          <span class="stars" aria-label="5 sur 5 étoiles"></span>
          <blockquote class="testimonial__quote">Pour mon commerce, j'avais besoin d'un site web et d'outils numériques. L'équipe LytraG, avec l'appui de l'Allemagne, a tout mis en place rapidement et m'a accompagné en français, sans jargon.</blockquote>
          <figcaption class="testimonial__foot">
            <span class="testimonial__avatar" aria-hidden="true">AB</span>
            <span>
              <span class="testimonial__name">Alpha B.</span>
              <span class="testimonial__meta">Entrepreneur, Kankan</span>
            </span>
          </figcaption>
        </figure>
      </div>

      <p class="text-center text-muted" style="margin-top: var(--space-6);">Témoignages illustratifs représentatifs de nos services en Guinée et dans la diaspora.</p>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="section section--alt" aria-labelledby="faq-title">
    <div class="container container--narrow">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Questions fréquentes</span>
        <h2 id="faq-title">Les réponses avant même de demander</h2>
        <p class="lead mx-auto">Une autre question ? Écrivez-nous sur WhatsApp ou par e-mail, nous sommes là pour vous aider.</p>
      </div>

      <div class="faq">
        <details class="faq-item">
          <summary>Que propose LytraG en Guinée ?</summary>
          <div class="faq-item__body">
            <p>LytraG est une plateforme digitale tout-en-un avec trois pôles : une <a href="/marketplace/">place de marché</a> pour acheter et vendre en ligne, un pôle <a href="/immobilier/">immobilier et construction</a> (terrains, biens, construction clé en main, gestion de chantier à distance) et des <a href="/services/">services numériques</a>. Le paiement se fait par Orange Money et la livraison s'organise par WhatsApp avec partage de votre localisation.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Comment se passe le paiement ?</summary>
          <div class="faq-item__body">
            <p>Le moyen de paiement principal est Orange Money (mobile money), simple et déjà utilisé partout en Guinée. Vous payez directement depuis votre téléphone, sans carte bancaire. Pour les projets de construction, le paiement se fait par étapes (jalons), au fur et à mesure de l'avancement.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Je vis à l'étranger : puis-je acheter et construire depuis la diaspora ?</summary>
          <div class="faq-item__body">
            <p>Oui. LytraG est pensé pour la diaspora africaine. Vous gérez tout depuis votre téléphone : achat de terrains et de biens aux titres vérifiés, construction clé en main, suivi du chantier par photos et vidéos, et paiements par jalons. Vous gardez le contrôle, où que vous soyez dans le monde.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Comment devenir vendeur sur la place de marché ?</summary>
          <div class="faq-item__body">
            <p>Notre place de marché accueille les vendeurs guinéens qui souhaitent ouvrir leur boutique en ligne et toucher plus de clients, y compris dans la diaspora. Rendez-vous sur la page <a href="/marketplace/">Place de marché</a> et cliquez sur « Devenir vendeur » pour commencer.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Quel est le lien entre LytraG et l'Allemagne ?</summary>
          <div class="faq-item__body">
            <p>LytraG relie deux pays : <a href="https://lytrag.com" target="_blank" rel="noopener">LytraG-System en Allemagne</a> (lytrag.com), un service informatique professionnel, et LytraG en Guinée (lytrag.org). C'est l'expertise IT allemande mise au service de la Guinée et de son développement numérique. Les fondateurs sont Abdoulaye Traoré et Amadou Ly.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ===================== GRAND CTA ===================== -->
  <section class="cta-band">
    <div class="container">
      <div class="cta-band__inner cta-band--split">
        <div>
          <span class="eyebrow">Prêt à commencer ?</span>
          <h2>Lancez votre projet avec LytraG.</h2>
          <p>Acheter, vendre, investir, construire ou digitaliser votre activité – tout commence ici, depuis votre téléphone. Notre équipe vous répond en français, simplement.</p>
        </div>
        <div class="actions">
          <a class="btn btn-solid btn-lg" href="/marketplace/">Voir la place de marché</a>
          <a class="btn btn-whatsapp btn-lg" href="#" data-todo="numéro WhatsApp à compléter">
            <span aria-hidden="true">💬</span> WhatsApp
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
        <p>LytraG, la plateforme digitale tout-en-un pour la Guinée et la diaspora : place de marché, immobilier &amp; construction, services numériques. Paiement Orange Money, livraison via WhatsApp et géolocalisation.</p>
        <p class="text-muted">Une entreprise du groupe LytraG (Allemagne &amp; Guinée).</p>
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
          <span><span class="label">E-mail</span><br><a href="/cdn-cgi/l/email-protection#a8cbc7c6dcc9cbdce8c4d1dcdac9cf86c7dacf"><span class="__cf_email__" data-cfemail="b2d1dddcc6d3d1c6f2decbc6c0d3d59cddc0d5">[email&#160;protected]</span></a></span>
          <span><span class="label">WhatsApp</span><br>à compléter · <a href="#" data-todo="numéro WhatsApp à compléter">Ouvrir WhatsApp</a></span>
        </address>
      </div>

    </div>

    <div class="site-footer__bar">
      <span>© 2026 LytraG · Fondateurs Abdoulaye Traoré &amp; Amadou Ly</span>
      <nav aria-label="Langue">
        <a href="/" aria-current="true">FR</a>
        <span class="is-disabled" aria-disabled="true">EN</span>
        <span class="is-disabled" aria-disabled="true">DE</span>
      </nav>
    </div>
  </div>
</footer>

<!-- ===================== FLOATING ACTIONS ===================== -->
<div class="floating-actions">
  <a class="fab fab--call" href="/cdn-cgi/l/email-protection#cdaea2a3b9acaeb98da1b4b9bfacaae3a2bfaa" aria-label="Nous envoyer un e-mail">
    <span class="icon" aria-hidden="true">✉️</span>
  </a>
  <a class="fab fab--whatsapp" href="#" data-todo="numéro WhatsApp à compléter" aria-label="Écrire sur WhatsApp">
    <span class="icon" aria-hidden="true">💬</span>
  </a>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>
