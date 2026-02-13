<?php
$pageTitle = '404 - Page Not Found';
$activePage = 'error';
$metaDesc = 'The page you are looking for could not be found.';

ob_start();
?>
<section class="hero">
  <div class="container">
    <div class="card hero-left" style="padding:22px;">
      <div class="hero-badge" style="border-color:rgba(56,189,248,.22);background:rgba(56,189,248,.08);">
        <i data-lucide="search" style="width:16px;height:16px;"></i>
        Page not found
      </div>

      <h1 class="hero-title">
        404 - <span>Not Found</span>
      </h1>

      <p class="hero-desc" style="max-width: 72ch;">
        The page you requested does not exist, may have been moved, or the URL is incorrect.
      </p>

      <div class="hero-actions">
        <a class="btn primary" href="index.php">
          <i data-lucide="home" style="width:18px;height:18px;"></i>
          Go Home
        </a>
        <a class="btn" href="services.php">
          <i data-lucide="layers" style="width:18px;height:18px;"></i>
          View Services
        </a>
        <a class="btn" href="contact.php">
          <i data-lucide="message-circle" style="width:18px;height:18px;"></i>
          Contact Us
        </a>
        <button class="btn" type="button" onclick="history.back()">
          <i data-lucide="arrow-left" style="width:18px;height:18px;"></i>
          Go Back
        </button>
      </div>

      <div class="card" style="margin-top:16px;padding:16px;background:rgba(255,255,255,.05);border-color:rgba(234,240,255,.10);">
        <div style="display:flex;align-items:flex-start;gap:12px;">
          <div style="height:44px;width:44px;border-radius:18px;background:rgba(255,255,255,.06);border:1px solid rgba(234,240,255,.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i data-lucide="link-2" style="width:20px;height:20px;"></i>
          </div>
          <div style="min-width:0;">
            <div style="font-weight:950;font-size:14px;">Quick links</div>
            <div style="margin-top:8px;display:flex;flex-wrap:wrap;gap:10px;">
              <a class="btn" href="pricing.php">
                <i data-lucide="badge-dollar-sign" style="width:18px;height:18px;"></i>
                Pricing
              </a>
              <a class="btn" href="about.php">
                <i data-lucide="badge-check" style="width:18px;height:18px;"></i>
                About Us
              </a>
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
