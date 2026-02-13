<?php
// services.php - Services (static)
$pageTitle = 'Services - Car Wash';
$activePage = 'services';
$metaDesc = 'Explore our car wash and detailing services: exterior, interior, waxing, engine bay cleaning and more.';

ob_start();
?>
<section class="hero">
  <div class="container">
    <div class="card hero-left" style="padding:22px;">
      <div class="hero-badge">
        <i data-lucide="layers" style="width:16px;height:16px;"></i>
        Services and add-ons
      </div>

      <h1 class="hero-title">
        Everything your car needs for a <span>clean and polished</span> look.
      </h1>

      <p class="hero-desc" style="max-width: 72ch;">
        Choose a package from our Pricing page or build your own wash with add-ons. This is a static demo, so
        buttons do not submit anything yet.
      </p>

      <div class="hero-actions">
        <a class="btn primary" href="pricing.php">
          <i data-lucide="badge-dollar-sign" style="width:18px;height:18px;"></i>
          See Pricing
        </a>
        <a class="btn" href="contact.php">
          <i data-lucide="message-circle" style="width:18px;height:18px;"></i>
          Ask on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Core services</h2>
        <p class="section-desc">Most requested services for daily drivers.</p>
      </div>
    </div>

    <div class="grid cols-3">
      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="droplets" style="width:22px;height:22px;"></i></div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Exterior wash</h3>
        <p>Pre-rinse, foam wash, hand wash, rinse, dry, and tire shine finish.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic alt"><i data-lucide="vacuum" style="width:22px;height:22px;"></i></div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Interior vacuum</h3>
        <p>Seats, carpets, mats, corners, and trunk vacuum, plus light wipe-down.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="window" style="width:22px;height:22px;"></i></div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Glass cleaning</h3>
        <p>Inside and outside glass cleaning for a clear finish and better visibility.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Detailing and protection</h2>
        <p class="section-desc">Premium finishing options for a long-lasting shine.</p>
      </div>
    </div>

    <div class="grid cols-3">
      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="sparkles" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Wax and polish</h3>
        <p>Optional wax or polish to enhance shine and add a protective layer.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic alt"><i data-lucide="spray-can" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Interior detailing</h3>
        <p>Deep clean on dashboard, trims, vents, and seats for a refreshed cabin.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="cog" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Engine bay cleaning</h3>
        <p>Careful engine bay cleaning with safe products and controlled water use.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card" style="padding:20px;">
      <div class="split">
        <div style="padding:6px;">
          <h2 class="section-title" style="margin:0;">Fleet and monthly plans</h2>
          <p class="section-desc" style="margin-top:10px;">
            If you manage multiple vehicles, we can create consistent wash schedules and preferred rates.
            Contact us for a tailored plan.
          </p>
          <div style="margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;">
            <a class="btn primary" href="contact.php">
              <i data-lucide="phone" style="width:18px;height:18px;"></i>
              Talk to us
            </a>
            <a class="btn" href="pricing.php">
              <i data-lucide="badge-dollar-sign" style="width:18px;height:18px;"></i>
              View Packages
            </a>
          </div>
        </div>

        <div class="card" style="padding:18px;background:rgba(255,255,255,.05);border-color:rgba(234,240,255,.10);">
          <div class="info-row">
            <div class="info-ic"><i data-lucide="calendar" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Scheduling</div>
              <div class="info-sub">Daily, weekly, or custom time slots</div>
            </div>
          </div>
          <div class="info-row">
            <div class="info-ic"><i data-lucide="receipt" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Invoicing</div>
              <div class="info-sub">Simple monthly invoicing (later when backend is added)</div>
            </div>
          </div>
          <div class="info-row">
            <div class="info-ic"><i data-lucide="thumbs-up" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Consistency</div>
              <div class="info-sub">Standard finishing checks for every vehicle</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php
$mainContent = ob_get_clean();
require __DIR__.'/master.php';
