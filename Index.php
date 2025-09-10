<?php include 'inc/functions.php'; ?>
<!DOCTYPE html>
<html lang="nl" data-bs-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio - Koen</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- AOS (animaties bij scroll) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="stylesheet/stylesheet.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="80" tabindex="0">
  <!-- Navbar -->
  <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top py-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#home">Koen<span class="brand-accent">.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Navigatie openen">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navContent">
        <ul class="navbar-nav ms-auto gap-lg-2">
          <li class="nav-item"><a class="nav-link" href="#about">Over mij</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projecten</a></li>
          <li class="nav-item"><a class="nav-link" href="#connect">Contact</a></li>
        </ul>
        <a href="#connect" class="btn btn-primary ms-lg-3">Neem contact op</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header id="home" class="hero-section position-relative overflow-hidden">
    <div class="hero-bg"></div>
    <div class="container position-relative">
      <div class="row align-items-center py-5 gy-4">
        <div class="col-lg-7" data-aos="fade-right">
          <span class="badge text-bg-primary-subtle border border-primary-subtle rounded-pill mb-3">
            <i class="bi bi-lightning-charge-fill me-1"></i> Software Developer in opleiding
          </span>
          <h1 class="display-4 fw-extrabold lh-1 mb-3">Hi, ik ben Koen 👋</h1>
          <p class="lead text-secondary mb-4">
            2e jaars Software Developer uit Someren. Ik bouw gebruiksvriendelijke, snelle web- en softwareprojecten
            met oog voor detail en performance.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a href="#projects" class="btn btn-primary btn-lg">
              <i class="bi bi-eyeglasses me-1"></i> Bekijk projecten
            </a>
            <a href="#skills" class="btn btn-outline-primary btn-lg">
              <i class="bi bi-code-slash me-1"></i> Skills
            </a>
          </div>
          <div class="mt-4 small text-muted">
            <i class="bi bi-geo-alt me-1"></i> Someren, Nederland · <i class="bi bi-mortarboard ms-2 me-1"></i> ROC
          </div>
        </div>
        <div class="col-lg-5 text-center" data-aos="zoom-in" data-aos-delay="150">
          <div class="hero-card shadow-lg rounded-4 p-4 bg-white">
            <img src="images/Test.png" alt="Koen project preview" class="img-fluid rounded-3 hero-image">
          </div>
        </div>
      </div>
    </div>
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
  </header>

  <!-- Over mij -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6" data-aos="fade-up">
          <h2 class="section-title">Over mij</h2>
          <p class="fs-5">
            Ik ben een 18-jarige developer-in-opleiding met passie voor webapplicaties en software. Ik leer snel,
            ben nieuwsgierig en werk gestructureerd — met focus op kwaliteit, leesbare code en UX.
          </p>
          <ul class="list-unstyled d-grid gap-2">
            <li><i class="bi bi-check2-circle text-primary me-2"></i>Werkt aan school- en side-projects</li>
            <li><i class="bi bi-check2-circle text-primary me-2"></i>Lerend: PHP, C#, C++, HTML, CSS</li>
            <li><i class="bi bi-check2-circle text-primary me-2"></i>Doel: full-stack developer</li>
          </ul>
          <div class="d-flex gap-2 mt-3">
            <a href="#connect" class="btn btn-primary"><i class="bi bi-send me-1"></i> Samenwerken?</a>
            <a href="#projects" class="btn btn-outline-secondary">Portfolio</a>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-3">
            <div class="col-6">
              <div class="stat-card p-4 rounded-4 border bg-white text-center">
                <div class="h3 mb-1 fw-bold">2+</div>
                <div class="small text-muted">Jaar actief</div>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-card p-4 rounded-4 border bg-white text-center">
                <div class="h3 mb-1 fw-bold"><?= count(getProjects()); ?>+</div>
                <div class="small text-muted">Projecten</div>
              </div>
            </div>
            <div class="col-12">
              <div class="p-4 rounded-4 border bg-white">
                <p class="mb-2 fw-semibold"><i class="bi bi-rocket-takeoff-fill me-2 text-primary"></i>Werkwijze</p>
                <p class="mb-0 small text-muted">Clean code, component-gedreven, Git-flow, mobile-first, korte iteraties en duidelijke documentatie.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-5 bg-gradient-subtle">
    <div class="container">
      <h2 class="section-title mb-4" data-aos="fade-up">Skills & Tools</h2>
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
          <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-braces-asterisk me-2"></i>Talen</h5>
              <p class="mb-0">PHP, C#, C++, HTML, CSS</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-tools me-2"></i>Tools & Tech</h5>
              <p class="mb-0">Git, GitHub, VS Code, Visual Studio, MySQL</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
          <div class="card h-100 shadow-sm border-0 rounded-4">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-joystick me-2"></i>Interesses</h5>
              <p class="mb-0">Web development, Software development, Game development</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Scrolling badges -->
      <div class="mt-5 marquee-mask" aria-hidden="true">
        <div class="marquee">
          <div class="d-flex gap-2">
            <span class="chip"><i class="bi bi-lightning-charge"></i> Snel & toegankelijk</span>
            <span class="chip"><i class="bi bi-grid-1x2"></i> Component-driven</span>
            <span class="chip"><i class="bi bi-git"></i> Git-flow</span>
            <span class="chip"><i class="bi bi-cpu"></i> Performance</span>
            <span class="chip"><i class="bi bi-brush"></i> Pixel-perfect</span>
            <span class="chip"><i class="bi bi-shield-check"></i> Secure-by-default</span>
            <span class="chip"><i class="bi bi-phone"></i> Mobile-first</span>
            <span class="chip"><i class="bi bi-columns-gap"></i> Clean UI</span>
          </div>
          <div class="d-flex gap-2 ms-3">
            <span class="chip"><i class="bi bi-lightning-charge"></i> Snel & toegankelijk</span>
            <span class="chip"><i class="bi bi-grid-1x2"></i> Component-driven</span>
            <span class="chip"><i class="bi bi-git"></i> Git-flow</span>
            <span class="chip"><i class="bi bi-cpu"></i> Performance</span>
            <span class="chip"><i class="bi bi-brush"></i> Pixel-perfect</span>
            <span class="chip"><i class="bi bi-shield-check"></i> Secure-by-default</span>
            <span class="chip"><i class="bi bi-phone"></i> Mobile-first</span>
            <span class="chip"><i class="bi bi-columns-gap"></i> Clean UI</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projecten -->
  <section id="projects" class="py-5">
    <div class="container">
      <div class="d-flex align-items-end justify-content-between mb-3">
        <h2 class="section-title mb-0" data-aos="fade-right">Projecten</h2>
        <div class="btn-group" role="group" aria-label="Filter">
          <button class="btn btn-outline-secondary btn-sm active" data-filter="all">Alles</button>
          <button class="btn btn-outline-secondary btn-sm" data-filter="web">Web</button>
          <button class="btn btn-outline-secondary btn-sm" data-filter="software">Software</button>
        </div>
      </div>

      <div class="row g-4">
        <?php foreach (getProjects() as $p): ?>
          <div class="col-md-6 col-lg-4 project-item" data-category="<?= htmlspecialchars($p['category']) ?>" data-aos="zoom-in">
            <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
              <?php if (!empty($p['image'])): ?>
                <img src="<?= htmlspecialchars($p['image']) ?>" class="card-img-top project-thumb" alt="<?= htmlspecialchars($p['title']) ?>">
              <?php endif; ?>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= htmlspecialchars($p['title']) ?></h5>
                <p class="card-text text-muted small flex-grow-1"><?= htmlspecialchars($p['desc']) ?></p>
                <div class="d-flex gap-2 flex-wrap mb-2">
                  <?php foreach ($p['tags'] as $tag): ?>
                    <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis border"><?= htmlspecialchars($tag) ?></span>
                  <?php endforeach; ?>
                </div>
                <div class="d-grid gap-2">
                  <a href="<?= htmlspecialchars($p['link']) ?>" target="_blank" class="btn btn-primary">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Bekijk
                  </a>
                  <?php if (!empty($p['repo'])): ?>
                    <a href="<?= htmlspecialchars($p['repo']) ?>" target="_blank" class="btn btn-outline-secondary">
                      <i class="bi bi-github me-1"></i> Broncode
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Connect (i.p.v. formulier) -->
  <section id="connect" class="py-5">
    <div class="container">
      <div class="cta-glow rounded-4 p-4 p-lg-5" data-aos="fade-up">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <span class="badge text-bg-primary-subtle border border-primary-subtle rounded-pill mb-3">
              <i class="bi bi-stars me-1"></i> Klaar om samen iets moois te bouwen?
            </span>
            <h3 class="mb-2 fw-extrabold">Let's build. 🚀</h3>
            <p class="mb-4 text-secondary">
              Interesse in een stagiair? Stuur me gerust een e-mail. Ik reageer meestal snel.
            </p>
            <div class="d-flex flex-wrap gap-2">
              <a class="btn btn-dark btn-lg" href="mailto:koenmanders28@outlook.com">
                <i class="bi bi-envelope-fill me-2"></i> Mail Koen
              </a>
              <a class="btn btn-outline-secondary btn-lg" href="#projects">
                <i class="bi bi-collection-play me-2"></i> Bekijk projecten
              </a>
            </div>
            <p class="small text-muted mt-3 mb-0">
              Beschikbaar voor stage/werkstudent/parttime opdrachten.
            </p>
          </div>

          <div class="col-lg-5">
            <div class="mail-scene d-flex justify-content-center align-items-center position-relative">
              <span class="spark s2"></span>
              <span class="spark s3"></span>
              <span class="spark s4"></span>
              <svg class="mail-ship" viewBox="0 0 220 160" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Decoratieve mail-animatie">
                <defs>
                  <linearGradient id="g1" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#3b82f6"/>
                    <stop offset="100%" stop-color="#a855f7"/>
                  </linearGradient>
                  <linearGradient id="g2" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#22c55e"/>
                    <stop offset="100%" stop-color="#f59e0b"/>
                  </linearGradient>
                  <filter id="blur" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="2"/>
                  </filter>
                </defs>
                <ellipse cx="110" cy="120" rx="70" ry="10" fill="#e2e8f0" opacity=".6" filter="url(#blur)"/>
                <g transform="translate(35,35)">
                  <rect x="0" y="0" width="150" height="100" rx="12" fill="white" stroke="#e2e8f0" stroke-width="2"/>
                  <path d="M0,6 L75,55 L150,6" fill="none" stroke="url(#g1)" stroke-width="3" />
                  <path d="M0,100 L57,50" stroke="#e5e7eb" stroke-width="2"/>
                  <path d="M150,100 L93,50" stroke="#e5e7eb" stroke-width="2"/>
                  <g transform="translate(110,-10)">
                    <circle cx="20" cy="20" r="18" fill="url(#g2)"/>
                    <path d="M12 20 l6 6 l10 -12" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                </g>
                <g stroke="url(#g1)" stroke-width="3" stroke-linecap="round" opacity=".5">
                  <path d="M10,70 h40"/>
                  <path d="M0,90 h25"/>
                  <path d="M15,110 h35"/>
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 border-top bg-white">
    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-2">
      <div class="small text-muted">© <?= date('Y') ?> Koen. Alle rechten voorbehouden.</div>
      <div class="d-flex gap-3">
        <a class="text-muted" href="#home">Naar boven</a>
        <a class="text-muted" href="#projects">Projecten</a>
        <a class="text-muted" href="mailto:koenmanders28@outlook.com">E-mail</a>
      </div>
    </div>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 700, once: true });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', (e) => {
        const id = a.getAttribute('href');
        if (id.length > 1) {
          e.preventDefault();
          const el = document.querySelector(id);
          if (el) window.scrollTo({ top: el.offsetTop - 70, behavior: 'smooth' });
        }
      });
    });

    // Project filter
    const filterButtons = document.querySelectorAll('[data-filter]');
    const items = document.querySelectorAll('.project-item');
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const cat = btn.dataset.filter;
        items.forEach(it => it.style.display = (cat === 'all' || it.dataset.category === cat) ? '' : 'none');
      });
    });
  </script>
</body>
</html>
