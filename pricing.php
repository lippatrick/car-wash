<?php
// pricing.php - Pricing (static)
$pageTitle = 'Pricing - Car Wash';
$activePage = 'pricing';
$metaDesc = 'Simple pricing packages for exterior wash, interior cleaning, and full detailing.';

ob_start();
?>
<section class="hero">
  <div class="container">
    <div class="card hero-left" style="padding:22px;">
      <div class="hero-badge">
        <i data-lucide="badge-dollar-sign" style="width:16px;height:16px;"></i>
        Transparent pricing
      </div>

      <h1 class="hero-title">
        Choose a package that fits your <span>car and budget</span>.
      </h1>

      <p class="hero-desc" style="max-width: 72ch;">
        Prices below are placeholders. Update them to your real rates later.
        Buttons are UI-only for now.
      </p>

      <div class="hero-actions">
        <a class="btn" href="services.php">
          <i data-lucide="layers" style="width:18px;height:18px;"></i>
          What is included
        </a>
        <a class="btn primary" href="contact.php">
          <i data-lucide="message-circle" style="width:18px;height:18px;"></i>
          Book via WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Packages</h2>
        <p class="section-desc">Simple tiers to get you started. Adjust anytime.</p>
      </div>
    </div>

    <div class="grid cols-3">
      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="droplets" style="width:22px;height:22px;"></i></div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Basic Wash</h3>
        <p style="margin-top:6px;color:rgba(234,240,255,.88);font-weight:950;">UGX 20,000</p>
        <p>Exterior wash, dry, tire shine, glass wipe (outside).</p>
        <div style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap;">
          <a class="btn primary" href="contact.php">
            <i data-lucide="phone" style="width:18px;height:18px;"></i>
            Choose
          </a>
        </div>
      </div>

      <div class="feature" style="border-color:rgba(34,197,94,.26);background:rgba(34,197,94,.08);">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="sparkles" style="width:22px;height:22px;"></i></div>
          <div class="hero-badge" style="padding:7px 10px;background:rgba(34,197,94,.14);border-color:rgba(34,197,94,.26);">
            Popular
          </div>
        </div>
        <h3>Standard</h3>
        <p style="margin-top:6px;color:rgba(234,240,255,.92);font-weight:950;">UGX 35,000</p>
        <p>Basic wash plus interior vacuum and dashboard wipe.</p>
        <div style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap;">
          <a class="btn primary" href="contact.php">
            <i data-lucide="phone" style="width:18px;height:18px;"></i>
            Choose
          </a>
        </div>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic alt"><i data-lucide="crown" style="width:22px;height:22px;"></i></div>
          <i data-lucide="sparkle" style="width:18px;height:18px;color:rgba(234,240,255,.60);"></i>
        </div>
        <h3>Full Detail</h3>
        <p style="margin-top:6px;color:rgba(234,240,255,.88);font-weight:950;">UGX 80,000</p>
        <p>Standard plus wax, interior detailing, trims, and deep finishing.</p>
        <div style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap;">
          <a class="btn primary" href="contact.php">
            <i data-lucide="phone" style="width:18px;height:18px;"></i>
            Choose
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Add-ons</h2>
        <p class="section-desc">Optional extras you can add to any package.</p>
      </div>
    </div>

    <div class="grid cols-3">
      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="cog" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Engine bay</h3>
        <p style="margin-top:6px;color:rgba(234,240,255,.88);font-weight:950;">UGX 25,000</p>
        <p>Careful engine bay cleaning using safe products.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic alt"><i data-lucide="spray-can" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Wax top-up</h3>
        <p style="margin-top:6px;color:rgba(234,240,255,.88);font-weight:950;">UGX 20,000</p>
        <p>Extra gloss and protection layer.</p>
      </div>

      <div class="feature">
        <div class="feature-top">
          <div class="feature-ic"><i data-lucide="sparkles" style="width:22px;height:22px;"></i></div>
        </div>
        <h3>Interior deodorize</h3>
        <p style="margin-top:6px;color:rgba(234,240,255,.88);font-weight:950;">UGX 10,000</p>
        <p>Fresh scent and odor control.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="card" style="padding:20px;">
      <div class="split">
        <div style="padding:6px;">
          <h2 class="section-title" style="margin:0;">Need a fleet rate?</h2>
          <p class="section-desc" style="margin-top:10px;">
            For companies and regular customers, we can create monthly plans and discounts based on volume.
          </p>
          <div style="margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;">
            <a class="btn primary" href="contact.php">
              <i data-lucide="message-circle" style="width:18px;height:18px;"></i>
              Contact us
            </a>
            <a class="btn" href="services.php">
              <i data-lucide="layers" style="width:18px;height:18px;"></i>
              View services
            </a>
          </div>
        </div>

        <div class="card" style="padding:18px;background:rgba(255,255,255,.05);border-color:rgba(234,240,255,.10);">
          <div class="info-row">
            <div class="info-ic"><i data-lucide="receipt" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Invoices</div>
              <div class="info-sub">Monthly invoices and receipts later when backend is added</div>
            </div>
          </div>
          <div class="info-row">
            <div class="info-ic"><i data-lucide="calendar" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Schedule</div>
              <div class="info-sub">Reserve wash times for your vehicles</div>
            </div>
          </div>
          <div class="info-row">
            <div class="info-ic"><i data-lucide="badge-check" style="width:20px;height:20px;"></i></div>
            <div>
              <div class="info-title">Quality</div>
              <div class="info-sub">Same finishing checks across all washes</div>
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
