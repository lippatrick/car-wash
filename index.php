<?php
// index.php - Home (static)
$pageTitle = 'Home - Car Wash';
$activePage = 'home';
$metaDesc = 'Fast, professional car wash services with premium detailing options.';

ob_start();
?>
<section class="hero">
  <div class="container">
    <div class="hero-grid">
      <div class="card hero-left">
        <div class="hero-badge">
          <i data-lucide="sparkles" style="width:16px;height:16px;"></i>
          Premium wash and detailing
        </div>

        <h1 class="hero-title">
          Give your car a <span>fresh showroom shine</span> in minutes.
        </h1>

        <p class="hero-desc">
          Reliable, affordable packages for every car size. Exterior wash, interior vacuum, wax,
          engine bay cleaning, and full detailing options. Clean results, every time.
        </p>

        <div class="hero-actions">
          <a class="btn primary" href="pricing">
            <i data-lucide="badge-dollar-sign" style="width:18px;height:18px;"></i>
            See Packages
          </a>
          <a class="btn" href="services">
            <i data-lucide="layers" style="width:18px;height:18px;"></i>
            Explore Services
          </a>
          <a class="btn" href="contact">
            <i data-lucide="phone" style="width:18px;height:18px;"></i>
            Contact Us
          </a>
        </div>
      </div>

      <div class="card hero-right">
        <div class="stat">
          <div class="left">
            <div class="stat-ic"><i data-lucide="timer" style="width:20px;height:20px;"></i></div>
            <div style="min-width:0;">
              <div class="stat-title">Quick turnaround</div>
              <div class="stat-sub">Most washes in 20 to 35 minutes</div>
            </div>
          </div>
          <i data-lucide="chevron-right" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>

        <div class="stat">
          <div class="left">
            <div class="stat-ic"><i data-lucide="shield-check" style="width:20px;height:20px;"></i></div>
            <div style="min-width:0;">
              <div class="stat-title">Safe products</div>
              <div class="stat-sub">Paint-friendly shampoos and wax</div>
            </div>
          </div>
          <i data-lucide="chevron-right" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>

        <div class="stat">
          <div class="left">
            <div class="stat-ic"><i data-lucide="star" style="width:20px;height:20px;"></i></div>
            <div style="min-width:0;">
              <div class="stat-title">Consistent quality</div>
              <div class="stat-sub">Standard process and finishing checks</div>
            </div>
          </div>
          <i data-lucide="chevron-right" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>

        <div class="stat">
          <div class="left">
            <div class="stat-ic"><i data-lucide="map-pin" style="width:20px;height:20px;"></i></div>
            <div style="min-width:0;">
              <div class="stat-title">Easy access</div>
              <div class="stat-sub">Convenient location and parking</div>
            </div>
          </div>
          <i data-lucide="chevron-right" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Why choose us</h2>
        <p class="section-desc">We focus on speed, quality control, and professional finishing.</p>
      </div>
    </div>

    <div class="grid cols-3">
      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic">
            <i data-lucide="droplets" style="width:22px;height:22px;"></i>
          </div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Foam wash process</h3>
        <p>Pre-rinse, foam soak, contact wash, and final rinse to protect paint and remove grime.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic alt">
            <i data-lucide="vacuum" style="width:22px;height:22px;"></i>
          </div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Interior care</h3>
        <p>Vacuum, dashboard wipe, mats, door trims, and deodorizing options for a fresh cabin.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic">
            <i data-lucide="badge-check" style="width:22px;height:22px;"></i>
          </div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Finishing inspection</h3>
        <p>Final check on mirrors, glass, tires, and edges to maintain consistent quality standards.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card" style="padding:20px;">
      <div class="split">
        <div style="padding:10px 6px;">
          <h2 class="section-title" style="margin:0;">Ready for a clean ride?</h2>
          <p class="section-desc" style="margin-top:10px;">
            Check our packages and choose what fits your car. For fleet deals and monthly plans, contact us.
          </p>
          <div style="margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;">
            <a class="btn primary" href="pricing">
              <i data-lucide="badge-dollar-sign" style="width:18px;height:18px;"></i>
              View Pricing
            </a>
            <a class="btn" href="contact">
              <i data-lucide="message-circle" style="width:18px;height:18px;"></i>
              WhatsApp / Call
            </a>
          </div>
        </div>

        <div class="card" style="padding:18px;background:rgba(255,255,255,.05);border-color:rgba(234,240,255,.10);">
          <div class="info-row">
            <div class="info-ic"><i data-lucide="clock" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Working hours</div>
              <div class="info-sub">Mon to Sat: 8:00 AM - 7:00 PM<br>Sun: 10:00 AM - 5:00 PM</div>
            </div>
          </div>

          <div class="info-row">
            <div class="info-ic"><i data-lucide="phone" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Phone</div>
              <div class="info-sub">+256 700 000 000</div>
            </div>
          </div>

          <div class="info-row">
            <div class="info-ic"><i data-lucide="map-pin" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Location</div>
              <div class="info-sub">Kampala, Uganda (update address later)</div>
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
