<?php /* Template: komplette Seite, 1:1 aus lytrag.org */ ?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact | LytraG Guinée – Place de marché, immobilier &amp; services numériques</title>
<meta name="description" content="Contactez LytraG à Conakry, Guinée : e-mail contact@lytrag.org, WhatsApp et formulaire. Place de marché, immobilier &amp; construction et services numériques pour la Guinée et la diaspora. Paiement Orange Money, livraison via WhatsApp.">
<link rel="canonical" href="https://www.lytrag.org/contact.html">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="LytraG">
<meta property="og:title" content="Contact | LytraG Guinée">
<meta property="og:description" content="Écrivez-nous par e-mail, WhatsApp ou via le formulaire. LytraG : place de marché, immobilier &amp; construction et services numériques pour la Guinée et la diaspora.">
<meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/fernwartung.jpg">
<meta property="og:url" content="https://www.lytrag.org/contact.html">
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact | LytraG Guinée">
<meta name="twitter:description" content="Écrivez-nous par e-mail, WhatsApp ou via le formulaire. LytraG : place de marché, immobilier &amp; construction et services numériques pour la Guinée et la diaspora.">
<meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/fernwartung.jpg">

<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/favicon-512.png" type="image/png">
<link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/favicon-512.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/design.css">

<!-- JSON-LD: ContactPage / Organization -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact LytraG Guinée",
  "url": "https://www.lytrag.org/contact.html",
  "mainEntity": {
    "@type": "Organization",
    "@id": "https://www.lytrag.org/#organisation",
    "name": "LytraG",
    "image": "https://www.lytrag.org/assets/fernwartung.jpg",
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
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "email": "contact@lytrag.org",
      "areaServed": "GN",
      "availableLanguage": ["French"]
    }
  }
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
      "name": "Sous combien de temps répondez-vous ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nous répondons généralement sous 24 à 48 heures ouvrées. Sur WhatsApp, la réponse est souvent encore plus rapide. N'hésitez pas à nous écrire à toute heure : nous traitons les messages dès la reprise."
      }
    },
    {
      "@type": "Question",
      "name": "Comment puis-je vous joindre le plus rapidement ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Le plus simple est WhatsApp ou l'e-mail contact@lytrag.org. Vous pouvez aussi remplir le formulaire de cette page : il nous arrive directement et nous vous recontactons par le moyen de votre choix."
      }
    },
    {
      "@type": "Question",
      "name": "Je suis dans la diaspora, puis-je vous contacter depuis l'étranger ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bien sûr. Une grande partie de notre activité immobilier et construction s'adresse justement à la diaspora. Écrivez-nous par e-mail ou WhatsApp, où que vous soyez : nous gérons votre projet à distance, avec suivi photo et vidéo et paiements par étapes."
      }
    },
    {
      "@type": "Question",
      "name": "Je veux devenir vendeur sur la place de marché, qui contacter ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Écrivez-nous via ce formulaire en choisissant le sujet « Devenir vendeur », ou contactez-nous directement par WhatsApp. Nous vous expliquons comment ouvrir votre boutique et publier vos produits."
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
            <li><a href="/">Accueil</a></li>
            <li><a href="/marketplace/">Place de marché</a></li>
            <li><a href="/immobilier/">Immobilier &amp; Construction</a></li>
            <li><a href="/services/">Services</a></li>
            <li><a href="/a-propos/">À propos</a></li>
            <li><a href="/contact/" aria-current="page">Contact</a></li>
          </ul>

          <div class="nav__lang" aria-label="Choix de la langue" style="display:flex; gap:.4rem; align-items:center; padding:.5rem 0;">
            <span aria-current="true" style="font-weight:700;">FR</span>
            <span aria-hidden="true">|</span>
            <span title="Bientôt disponible" style="opacity:.5; cursor:not-allowed;">EN</span>
            <span aria-hidden="true">|</span>
            <span title="Bientôt disponible" style="opacity:.5; cursor:not-allowed;">DE</span>
          </div>

          <div class="nav__cta-mobile">
            <a class="btn btn-solid btn-block" href="/contact/">Nous contacter</a>
          </div>
        </div>

        <div class="nav__lang nav__lang--desktop" aria-label="Choix de la langue" style="display:flex; gap:.4rem; align-items:center;">
          <span aria-current="true" style="font-weight:700;">FR</span>
          <span aria-hidden="true">|</span>
          <span title="Bientôt disponible" style="opacity:.5; cursor:not-allowed;">EN</span>
          <span aria-hidden="true">|</span>
          <span title="Bientôt disponible" style="opacity:.5; cursor:not-allowed;">DE</span>
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
          <span class="eyebrow">Contact · LytraG Guinée</span>
          <h1>Parlons de votre <span class="accent">projet</span> — nous sommes à votre écoute</h1>
          <p class="lead">Une question sur la place de marché, un projet immobilier ou de construction depuis la diaspora, un besoin de site web ou de solution numérique ? Écrivez-nous : une vraie équipe, basée à Conakry, vous répond avec attention et clarté.</p>

          <div class="actions">
            <a class="btn btn-whatsapp btn-lg" href="#" data-todo="numéro WhatsApp à compléter" target="_blank" rel="noopener">
              <span aria-hidden="true">💬</span> Écrire sur WhatsApp <span style="opacity:.7;">(à compléter)</span>
            </a>
            <a class="btn btn-ghost btn-lg" href="/cdn-cgi/l/email-protection#4b2824253f2a283f0b27323f392a2c6524392c">Envoyer un e-mail</a>
          </div>

          <ul class="hero__checks">
            <li>Réponse sous 24 à 48 h ouvrées</li>
            <li>Une équipe humaine, basée à Conakry</li>
            <li>Pour la Guinée et la diaspora</li>
            <li>Place de marché · Immobilier · Services numériques</li>
          </ul>
        </div>

        <div class="hero__media">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/fernwartung.jpg" alt="L'équipe LytraG accompagne et conseille un client à distance, par téléphone et en ligne" width="800" height="680">
          <div class="hero__badge">
            <span class="stars" aria-hidden="true"></span>
            <span><strong>Proche de vous</strong><br>Conakry, Guinée · <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c1f1312081d1f083c1005080e1d1b52130e1b">[email&#160;protected]</a></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== BARRE DE CONFIANCE ===================== -->
  <section class="trustbar" aria-label="Nos moyens de contact">
    <div class="container">
      <div class="trustbar__inner">
        <span class="trustbar__item"><strong>E-mail</strong>&nbsp;– <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d3dfdec4d1d3c4f0dcc9c4c2d1d79edfc2d7">[email&#160;protected]</a></span>
        <span class="trustbar__item"><strong>WhatsApp</strong>&nbsp;– rapide et direct <em>(à compléter)</em></span>
        <span class="trustbar__item"><strong>Téléphone</strong>&nbsp;– <em>(à compléter)</em></span>
        <span class="trustbar__item"><strong>Conakry, Guinée</strong>&nbsp;– notre base</span>
        <span class="trustbar__item"><strong>Diaspora bienvenue</strong>&nbsp;– où que vous soyez</span>
      </div>
    </div>
  </section>

  <!-- ===================== COORDONNÉES + FORMULAIRE ===================== -->
  <section class="section" aria-labelledby="contact-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Nous contacter</span>
        <h2 id="contact-title">Choisissez le moyen qui vous convient le mieux</h2>
        <p class="lead mx-auto">Par e-mail, par WhatsApp ou via le formulaire ci-dessous : tous les messages arrivent directement à notre équipe à Conakry. Indiquez-nous votre besoin, nous revenons vers vous rapidement.</p>
      </div>

      <div class="split">
        <!-- Coordonnées -->
        <div class="split__text stack">
          <h3>Nos coordonnées</h3>
          <address class="footer-contact" style="font-style:normal;">
            <span><span class="label">E-mail</span><br><a href="/cdn-cgi/l/email-protection#93f0fcfde7f2f0e7d3ffeae7e1f2f4bdfce1f4"><span class="__cf_email__" data-cfemail="781b17160c191b0c3814010c0a191f56170a1f">[email&#160;protected]</span></a></span>
            <span><span class="label">WhatsApp</span><br><a href="#" data-todo="numéro WhatsApp à compléter">Écrire sur WhatsApp</a> · <em>(numéro à compléter)</em></span>
            <span><span class="label">Téléphone</span><br><em>(à compléter)</em></span>
            <span><span class="label">Adresse</span><br>LytraG Guinée<br>Conakry, Guinée</span>
            <span><span class="label">Horaires &amp; délais</span><br>Du lundi au samedi · Réponse sous 24 à 48 h ouvrées</span>
          </address>

          <div class="actions">
            <a class="btn btn-whatsapp" href="#" data-todo="numéro WhatsApp à compléter" target="_blank" rel="noopener">
              <span aria-hidden="true">💬</span> WhatsApp <span style="opacity:.7;">(à compléter)</span>
            </a>
            <a class="btn btn-ghost" href="/cdn-cgi/l/email-protection#e0838f8e94818394a08c9994928187ce8f9287">
              <span aria-hidden="true">✉️</span> <span class="__cf_email__" data-cfemail="a9cac6c7ddc8cadde9c5d0dddbc8ce87c6dbce">[email&#160;protected]</span>
            </a>
          </div>

          <p class="text-muted">Vous faites partie de la diaspora ? Écrivez-nous depuis l'étranger : nous gérons les projets immobilier &amp; construction à distance, avec suivi photo et vidéo et paiements par étapes.</p>
        </div>

        <!-- Formulaire -->
        <div class="split__media">
          <div class="service-card" style="padding: var(--space-6);">
            <h3>Écrivez-nous</h3>
            <p class="text-muted">Remplissez ce formulaire : nous vous répondons par e-mail ou WhatsApp, selon votre préférence.</p>

            <!-- TODO: brancher le formulaire à un service d'envoi (e-mail / backend) - action et method à compléter -->
            <form class="contact-form stack" action="#" method="post" data-todo="connecter l'envoi du formulaire">
              <div>
                <label for="nom">Nom complet</label>
                <input type="text" id="nom" name="nom" autocomplete="name" placeholder="Votre nom et prénom" required>
              </div>
              <div>
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" autocomplete="email" placeholder="vous@exemple.com" required>
              </div>
              <div>
                <label for="sujet">Sujet</label>
                <select id="sujet" name="sujet">
                  <option value="" disabled selected>Choisissez un sujet</option>
                  <option value="place-de-marche">Place de marché (acheter)</option>
                  <option value="devenir-vendeur">Devenir vendeur</option>
                  <option value="immobilier-construction">Immobilier &amp; Construction</option>
                  <option value="services-numeriques">Services numériques</option>
                  <option value="autre">Autre demande</option>
                </select>
              </div>
              <div>
                <label for="message">Votre message</label>
                <textarea id="message" name="message" rows="5" placeholder="Décrivez votre besoin ou votre projet…" required></textarea>
              </div>
              <div class="actions">
                <button type="submit" class="btn btn-solid btn-block">Envoyer le message</button>
              </div>
              <p class="text-muted" style="font-size:.9em;">En nous écrivant, vous acceptez d'être recontacté par LytraG au sujet de votre demande. Vos informations restent confidentielles.</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== NOS PÔLES (rappel) ===================== -->
  <section class="section section--alt" aria-labelledby="poles-title">
    <div class="container">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">À quel sujet nous écrivez-vous ?</span>
        <h2 id="poles-title">Trois pôles, une seule équipe à votre service</h2>
        <p class="lead mx-auto">Que votre demande concerne l'achat en ligne, un projet immobilier depuis la diaspora ou la création d'un site web, vous frappez à la bonne porte. Dites-nous simplement de quoi il s'agit.</p>
      </div>

      <div class="grid grid-3">
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">🛍️</span>
          <h3>Place de marché</h3>
          <p>Acheter en ligne, devenir vendeur, paiement Orange Money et livraison via WhatsApp avec partage de localisation.</p>
          <a class="link-arrow" href="/marketplace/">Voir la place de marché</a>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">🏗️</span>
          <h3>Immobilier &amp; Construction</h3>
          <p>Terrains, biens, construction clé en main et matériaux, gérés à distance pour la diaspora avec titres vérifiés.</p>
          <a class="link-arrow" href="/immobilier/">Découvrir le pôle immobilier</a>
        </article>
        <article class="icon-card">
          <span class="icon-badge" aria-hidden="true">💻</span>
          <h3>Services numériques</h3>
          <p>Sites web et solutions digitales, avec l'expertise IT de LytraG-System (Allemagne) au service de la Guinée.</p>
          <a class="link-arrow" href="/services/">Voir nos services</a>
        </article>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="section" aria-labelledby="faq-title">
    <div class="container container--narrow">
      <div class="section-head text-center mx-auto">
        <span class="eyebrow">Questions fréquentes</span>
        <h2 id="faq-title">Avant de nous écrire</h2>
        <p class="lead mx-auto">Quelques réponses rapides. Une autre question ? Écrivez-nous, nous y répondons avec plaisir.</p>
      </div>

      <div class="faq">
        <details class="faq-item">
          <summary>Sous combien de temps répondez-vous ?</summary>
          <div class="faq-item__body">
            <p>Nous répondons généralement sous 24 à 48 heures ouvrées. Sur WhatsApp, la réponse est souvent encore plus rapide. N'hésitez pas à nous écrire à toute heure : nous traitons les messages dès la reprise.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Comment puis-je vous joindre le plus rapidement ?</summary>
          <div class="faq-item__body">
            <p>Le plus simple est WhatsApp ou l'e-mail <a href="/cdn-cgi/l/email-protection#583b37362c393b2c1834212c2a393f76372a3f"><span class="__cf_email__" data-cfemail="d5b6babba1b4b6a195b9aca1a7b4b2fbbaa7b2">[email&#160;protected]</span></a>. Vous pouvez aussi remplir le formulaire de cette page : il nous arrive directement et nous vous recontactons par le moyen de votre choix.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Je suis dans la diaspora, puis-je vous contacter depuis l'étranger ?</summary>
          <div class="faq-item__body">
            <p>Bien sûr. Une grande partie de notre activité <a href="/immobilier/">immobilier et construction</a> s'adresse justement à la diaspora. Écrivez-nous par e-mail ou WhatsApp, où que vous soyez : nous gérons votre projet à distance, avec suivi photo et vidéo et paiements par étapes.</p>
          </div>
        </details>

        <details class="faq-item">
          <summary>Je veux devenir vendeur sur la place de marché, qui contacter ?</summary>
          <div class="faq-item__body">
            <p>Écrivez-nous via le formulaire ci-dessus en choisissant le sujet « Devenir vendeur », ou contactez-nous directement par WhatsApp. Nous vous expliquons comment ouvrir votre <a href="/marketplace/">boutique</a> et publier vos produits.</p>
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
          <span class="eyebrow">Une équipe à votre écoute</span>
          <h2>Dites-nous comment nous pouvons vous aider.</h2>
          <p>Que vous soyez client, vendeur ou membre de la diaspora avec un projet en Guinée, écrivez-nous dès aujourd'hui. Nous vous répondons avec attention, en français, par e-mail ou WhatsApp.</p>
        </div>
        <div class="actions">
          <a class="btn btn-solid btn-lg" href="/cdn-cgi/l/email-protection#2a4945445e4b495e6a46535e584b4d0445584d">
            <span aria-hidden="true">✉️</span> Envoyer un e-mail
          </a>
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
        <p>LytraG, plateforme tout-en-un pour la Guinée et la diaspora : place de marché, immobilier &amp; construction et services numériques.</p>
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
          <span><strong>LytraG Guinée</strong><br>Conakry, Guinée</span>
          <span><span class="label">E-mail</span><br><a href="/cdn-cgi/l/email-protection#90f3fffee4f1f3e4d0fce9e4e2f1f7beffe2f7"><span class="__cf_email__" data-cfemail="52313d3c26333126123e2b262033357c3d2035">[email&#160;protected]</span></a></span>
          <span><span class="label">WhatsApp</span><br><a href="#" data-todo="numéro WhatsApp à compléter">WhatsApp</a> · <em>(à compléter)</em></span>
        </address>
      </div>

    </div>

    <div class="site-footer__bar">
      <span>© 2026 LytraG · Fondateurs Abdoulaye Traoré &amp; Amadou Ly</span>
      <nav aria-label="Langue">
        <span style="font-weight:700;">FR</span>
        <span style="opacity:.5;">EN</span>
        <span style="opacity:.5;">DE</span>
      </nav>
    </div>
  </div>
</footer>

<!-- ===================== BOUTONS FLOTTANTS ===================== -->
<div class="floating-actions">
  <a class="fab fab--call" href="#" data-todo="numéro de téléphone à compléter" aria-label="Appeler (numéro à compléter)">
    <span class="icon" aria-hidden="true">📞</span>
  </a>
  <a class="fab fab--whatsapp" href="#" data-todo="numéro WhatsApp à compléter" target="_blank" rel="noopener" aria-label="Écrire sur WhatsApp (numéro à compléter)">
    <span class="icon" aria-hidden="true">💬</span>
  </a>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
</html>
