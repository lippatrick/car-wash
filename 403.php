<?php
$pageTitle = '403 - Access Denied';
$activePage = 'error';
$metaDesc = 'You do not have permission to access this page.';

ob_start();
?>
<section class="hero">
  <div class="container">
    <div class="card hero-left" style="padding:22px;">
      <div class="hero-badge" style="border-color:rgba(239,68,68,.22);background:rgba(239,68,68,.08);">
        <i data-lucide="shield-alert" style="width:16px;height:16px;"></i>
        Access denied
      </div>

      <h1 class="hero-title">
        403 - <span>Forbidden</span>
      </h1>

      <p class="hero-desc" style="max-width: 72ch;">
        You do not have permission to access this resource. If you believe this is a mistake, contact support or try a different page.
      </p>

      <div class="hero-actions">
        <a class="btn primary" href="index.php">
          <i data-lucide="home" style="width:18px;height:18px;"></i>
          Go Home
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
            <i data-lucide="info" style="width:20px;height:20px;"></i>
          </div>
          <div style="min-width:0;">
            <div style="font-weight:950;font-size:14px;">Tip</div>
            <div style="margin-top:6px;color:rgba(234,240,255,.72);font-size:13px;line-height:1.55;">
              If you typed the address manually, check the spelling, or return to the home page and navigate from the menu.
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
