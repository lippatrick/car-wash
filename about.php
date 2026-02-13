<?php
// about.php - About Us (static)
$pageTitle = 'About Us - Car Wash';
$activePage = 'about';
$metaDesc = 'Learn about our car wash, our mission, and our quality promise.';

ob_start();
?>
<section class="hero">
  <div class="container">
    <div class="card hero-left" style="padding:22px;">
      <div class="hero-badge">
        <i data-lucide="badge-check" style="width:16px;height:16px;"></i>
        Quality first, always
      </div>

      <h1 class="hero-title" style="max-width: 20ch;">
        Built for <span>clean results</span> and consistent service.
      </h1>

      <p class="hero-desc" style="max-width: 70ch;">
        We are a professional car wash focused on safe cleaning methods, premium products, and fast turnaround.
        Our process is designed to protect paintwork, keep interiors fresh, and deliver a reliable finish.
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid cols-2">
      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="target" style="width:22px;height:22px;"></i></div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Our mission</h3>
        <p>
          To provide fast, affordable, and high-quality car care services that keep our customers confident on the road.
        </p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic alt"><i data-lucide="eye" style="width:22px;height:22px;"></i></div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Our vision</h3>
        <p>
          To become the most trusted neighborhood car wash by delivering consistent results and outstanding service.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid cols-3">
      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="shield" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Safe methods</h3>
        <p>We use a careful wash process that reduces swirl marks and protects paint and trims.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic alt"><i data-lucide="users" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Professional team</h3>
        <p>Friendly attendants trained to deliver consistent finishing across packages.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="sparkles" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Quality checks</h3>
        <p>We do finishing checks on glass, tires, edges, and interior touch-points before handover.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card" style="padding:20px;">
      <div class="split">
        <div style="padding:6px;">
          <h2 class="section-title" style="margin:0;">What we stand for</h2>
          <p class="section-desc" style="margin-top:10px;">
            Consistency, honesty, and customer-first service. We respect your time, your vehicle, and your expectations.
          </p>
          <div style="margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;">
            <a class="btn primary" href="services.php">
              <i data-lucide="layers" style="width:18px;height:18px;"></i>
              View Services
            </a>
            <a class="btn" href="contact.php">
              <i data-lucide="message-circle" style="width:18px;height:18px;"></i>
              Contact Us
            </a>
          </div>
        </div>

        <div class="card" style="padding:18px;background:rgba(255,255,255,.05);border-color:rgba(234,240,255,.10);">
          <div class="info-row">
            <div class="info-ic"><i data-lucide="map-pin" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Service area</div>
              <div class="info-sub">Kampala and nearby areas (update locations later)</div>
            </div>
          </div>
          <div class="info-row">
            <div class="info-ic"><i data-lucide="car" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Vehicles</div>
              <div class="info-sub">Sedan, SUV, pickup, van, and fleet arrangements</div>
            </div>
          </div>
          <div class="info-row">
            <div class="info-ic"><i data-lucide="badge-check" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Guarantee</div>
              <div class="info-sub">If you spot a missed area, we fix it immediately</div>
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
