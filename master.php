<?php
// master.php - Public Site (CSS based, static, no backend)

if (!isset($pageTitle)) {
    $pageTitle = 'Car Wash';
}
if (!isset($activePage)) {
    $activePage = 'home';
} // home | about | services | pricing | contact
if (!isset($metaDesc)) {
    $metaDesc = 'Professional car wash services.';
}
if (!isset($mainContent)) {
    $mainContent = '';
}

function e($v)
{
    return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8');
}

$nav = [
    ['key' => 'home',     'label' => 'Home',      'href' => 'index.php'],
    ['key' => 'about',    'label' => 'About Us',  'href' => 'about'],
    ['key' => 'services', 'label' => 'Services',  'href' => 'services'],
    ['key' => 'pricing',  'label' => 'Pricing',   'href' => 'pricing'],
    ['key' => 'contact',  'label' => 'Contact',   'href' => 'contact'],
];
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?php echo e($metaDesc); ?>" />
  <title><?php echo e($pageTitle); ?></title>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root{
      --bg: #070b14;
      --bg2:#0b1220;
      --surface: rgba(255,255,255,.06);
      --surface2: rgba(255,255,255,.10);
      --text: #eaf0ff;
      --muted: rgba(234,240,255,.72);
      --border: rgba(234,240,255,.14);
      --primary: #22c55e;
      --primary2:#38bdf8;
      --danger: #ef4444;
      --shadow: 0 18px 55px rgba(0,0,0,.38);
      --radius-xl: 24px;
      --radius-lg: 18px;
      --radius-md: 14px;
      --radius-sm: 12px;
      --font: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
    }

    *{ box-sizing: border-box; }
    body{
      margin:0;
      font-family: var(--font);
      color: var(--text);
      background:
        radial-gradient(1200px 600px at 10% 10%, rgba(56,189,248,.22), transparent 60%),
        radial-gradient(900px 520px at 90% 20%, rgba(34,197,94,.22), transparent 60%),
        radial-gradient(700px 500px at 50% 100%, rgba(99,102,241,.12), transparent 60%),
        linear-gradient(180deg, var(--bg), var(--bg2));
      min-height: 100vh;
    }

    [x-cloak]{ display:none !important; }

    a{ color: inherit; }
    .container{
      width: min(1180px, calc(100% - 32px));
      margin: 0 auto;
    }

    .topbar{
      position: sticky;
      top: 0;
      z-index: 40;
      background: rgba(7,11,20,.60);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(234,240,255,.08);
    }
    .topbar-inner{
      height: 74px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap: 16px;
    }

    .brand{
      display:flex;
      align-items:center;
      gap: 12px;
      text-decoration:none;
      min-width: 0;
    }
    .logo{
      height: 44px;
      width: 44px;
      border-radius: 18px;
      background: linear-gradient(135deg, var(--primary), var(--primary2));
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow: var(--shadow);
      flex-shrink:0;
    }
    .logo svg{ color:#07101f; }
    .brand-meta{ min-width:0; }
    .brand-title{
      font-weight: 900;
      letter-spacing: .2px;
      font-size: 16px;
      line-height: 1.05;
      white-space: nowrap;
      overflow:hidden;
      text-overflow: ellipsis;
    }
    .brand-sub{
      margin-top: 3px;
      font-size: 12px;
      color: var(--muted);
      white-space: nowrap;
      overflow:hidden;
      text-overflow: ellipsis;
    }

    .nav{
      display:none;
      align-items:center;
      gap: 10px;
    }
    @media (min-width: 860px){
      .nav{ display:flex; }
    }

    .nav a{
      text-decoration:none;
      padding: 10px 12px;
      border-radius: 999px;
      border: 1px solid transparent;
      color: rgba(234,240,255,.86);
      font-weight: 750;
      font-size: 13px;
      transition: background .15s ease, border-color .15s ease, color .15s ease;
    }
    .nav a:hover{
      background: rgba(255,255,255,.06);
      border-color: rgba(234,240,255,.14);
    }
    .nav a.active{
      background: rgba(34,197,94,.16);
      border-color: rgba(34,197,94,.28);
      color: #dfffea;
    }

    .actions{
      display:flex;
      align-items:center;
      gap: 10px;
    }

    .btn{
      height: 42px;
      padding: 0 14px;
      border-radius: 999px;
      border: 1px solid rgba(234,240,255,.14);
      background: rgba(255,255,255,.06);
      color: var(--text);
      font-weight: 850;
      font-size: 13px;
      cursor: pointer;
      display:inline-flex;
      align-items:center;
      gap: 10px;
      transition: transform .08s ease, background .15s ease, border-color .15s ease;
      text-decoration:none;
      white-space: nowrap;
    }
    .btn:hover{
      background: rgba(255,255,255,.10);
      border-color: rgba(234,240,255,.20);
    }
    .btn:active{ transform: translateY(1px); }

    .btn.primary{
      background: linear-gradient(135deg, rgba(34,197,94,.92), rgba(56,189,248,.92));
      border-color: rgba(255,255,255,.18);
      color: #06101f;
    }
    .btn.primary:hover{ filter: brightness(1.03); }

    .icon-btn{
      height: 42px;
      width: 42px;
      border-radius: 999px;
      border: 1px solid rgba(234,240,255,.14);
      background: rgba(255,255,255,.06);
      display:inline-flex;
      align-items:center;
      justify-content:center;
      cursor:pointer;
      transition: background .15s ease, border-color .15s ease;
    }
    .icon-btn:hover{
      background: rgba(255,255,255,.10);
      border-color: rgba(234,240,255,.20);
    }

    .mobile-menu-btn{
      display:inline-flex;
    }
    @media (min-width: 860px){
      .mobile-menu-btn{ display:none; }
    }

    .mobile-sheet{
      position: fixed;
      inset: 0;
      z-index: 60;
      display:flex;
      justify-content:flex-end;
    }
    .overlay{
      position:absolute;
      inset:0;
      background: rgba(0,0,0,.55);
    }
    .sheet{
      position: relative;
      width: min(360px, 92vw);
      height: 100%;
      background: rgba(7,11,20,.92);
      backdrop-filter: blur(12px);
      border-left: 1px solid rgba(234,240,255,.12);
      padding: 14px;
      display:flex;
      flex-direction:column;
      gap: 12px;
    }
    .sheet-head{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap: 10px;
      padding: 8px 6px 12px 6px;
      border-bottom: 1px solid rgba(234,240,255,.10);
    }
    .sheet-title{
      font-weight: 900;
      font-size: 14px;
    }
    .sheet-nav{
      display:flex;
      flex-direction:column;
      gap: 8px;
      padding: 10px 4px;
    }
    .sheet-nav a{
      text-decoration:none;
      padding: 12px 12px;
      border-radius: 16px;
      border: 1px solid rgba(234,240,255,.10);
      background: rgba(255,255,255,.04);
      font-weight: 850;
      color: rgba(234,240,255,.92);
    }
    .sheet-nav a.active{
      background: rgba(34,197,94,.14);
      border-color: rgba(34,197,94,.26);
      color: #dfffea;
    }

    .hero{
      padding: 44px 0 10px 0;
    }
    .hero-grid{
      display:grid;
      grid-template-columns: 1.1fr .9fr;
      gap: 18px;
      align-items: stretch;
    }
    @media (max-width: 980px){
      .hero-grid{ grid-template-columns: 1fr; }
    }
    .card{
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(234,240,255,.12);
      border-radius: var(--radius-xl);
      box-shadow: var(--shadow);
    }
    .hero-left{
      padding: 26px;
      overflow:hidden;
      position:relative;
    }
    .hero-badge{
      display:inline-flex;
      align-items:center;
      gap: 10px;
      padding: 8px 12px;
      border-radius: 999px;
      border: 1px solid rgba(234,240,255,.14);
      background: rgba(255,255,255,.05);
      color: rgba(234,240,255,.90);
      font-weight: 850;
      font-size: 12px;
    }
    .hero-title{
      margin: 14px 0 0 0;
      font-size: clamp(28px, 4.2vw, 46px);
      line-height: 1.06;
      letter-spacing: -.4px;
      font-weight: 950;
    }
    .hero-title span{
      background: linear-gradient(135deg, rgba(34,197,94,1), rgba(56,189,248,1));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .hero-desc{
      margin: 14px 0 0 0;
      color: rgba(234,240,255,.76);
      font-size: 14px;
      line-height: 1.6;
      max-width: 54ch;
    }
    .hero-actions{
      margin-top: 18px;
      display:flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items:center;
    }

    .hero-right{
      padding: 16px;
      display:flex;
      flex-direction:column;
      gap: 12px;
    }
    .stat{
      padding: 14px;
      border-radius: 18px;
      border: 1px solid rgba(234,240,255,.12);
      background: rgba(255,255,255,.05);
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap: 12px;
    }
    .stat .left{
      display:flex;
      align-items:center;
      gap: 12px;
      min-width: 0;
    }
    .stat-ic{
      height: 44px;
      width: 44px;
      border-radius: 18px;
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(234,240,255,.12);
      display:flex;
      align-items:center;
      justify-content:center;
      flex-shrink:0;
    }
    .stat-ic svg{ color: rgba(234,240,255,.86); }
    .stat-title{ font-weight: 950; font-size: 14px; }
    .stat-sub{ margin-top: 3px; color: rgba(234,240,255,.72); font-size: 12px; }

    .section{
      padding: 22px 0;
    }
    .section-head{
      display:flex;
      align-items:flex-end;
      justify-content:space-between;
      gap: 12px;
      margin-bottom: 12px;
    }
    .section-title{
      margin:0;
      font-size: 18px;
      font-weight: 950;
      letter-spacing: -.2px;
    }
    .section-desc{
      margin: 0;
      color: rgba(234,240,255,.70);
      font-size: 13px;
      line-height: 1.5;
    }

    .grid{
      display:grid;
      gap: 14px;
    }
    .grid.cols-3{ grid-template-columns: repeat(3, 1fr); }
    .grid.cols-2{ grid-template-columns: repeat(2, 1fr); }
    @media (max-width: 980px){
      .grid.cols-3{ grid-template-columns: 1fr; }
      .grid.cols-2{ grid-template-columns: 1fr; }
    }

    .feature{
      padding: 16px;
      border-radius: var(--radius-xl);
      border: 1px solid rgba(234,240,255,.12);
      background: rgba(255,255,255,.05);
    }
    .feature-top{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap: 10px;
      margin-bottom: 10px;
    }
    .feature-ic{
      height: 46px;
      width: 46px;
      border-radius: 18px;
      background: rgba(34,197,94,.10);
      border: 1px solid rgba(34,197,94,.18);
      display:flex;
      align-items:center;
      justify-content:center;
      flex-shrink:0;
    }
    .feature-ic.alt{
      background: rgba(56,189,248,.10);
      border-color: rgba(56,189,248,.18);
    }
    .feature-ic svg{ color: rgba(234,240,255,.92); }
    .feature h3{
      margin: 10px 0 0 0;
      font-size: 14px;
      font-weight: 950;
      letter-spacing: -.15px;
    }
    .feature p{
      margin: 8px 0 0 0;
      color: rgba(234,240,255,.72);
      font-size: 13px;
      line-height: 1.55;
    }

    .footer{
      padding: 26px 0 40px 0;
      border-top: 1px solid rgba(234,240,255,.10);
      margin-top: 18px;
    }
    .footer-grid{
      display:grid;
      grid-template-columns: 1.2fr .8fr;
      gap: 14px;
      align-items:start;
    }
    @media (max-width: 980px){
      .footer-grid{ grid-template-columns: 1fr; }
    }
    .foot-title{ font-weight: 950; margin: 0; }
    .foot-desc{ margin: 10px 0 0 0; color: rgba(234,240,255,.72); font-size: 13px; line-height: 1.55; }
    .foot-links{
      display:flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content:flex-end;
    }
    @media (max-width: 980px){
      .foot-links{ justify-content:flex-start; }
    }
    .foot-links a{
      text-decoration:none;
      padding: 8px 10px;
      border-radius: 999px;
      border: 1px solid rgba(234,240,255,.12);
      background: rgba(255,255,255,.04);
      font-weight: 850;
      font-size: 12px;
      color: rgba(234,240,255,.86);
    }
    .foot-links a:hover{
      background: rgba(255,255,255,.08);
      border-color: rgba(234,240,255,.18);
    }
    .tiny{
      margin-top: 14px;
      color: rgba(234,240,255,.55);
      font-size: 12px;
    }

    .form{
      display:grid;
      gap: 12px;
      padding: 18px;
    }
    .field{
      display:flex;
      flex-direction:column;
      gap: 8px;
    }
    label{
      font-weight: 850;
      font-size: 12px;
      color: rgba(234,240,255,.86);
    }
    input, textarea, select{
      width: 100%;
      border-radius: 16px;
      border: 1px solid rgba(234,240,255,.14);
      background: rgba(255,255,255,.06);
      color: var(--text);
      padding: 12px 12px;
      outline: none;
      font-size: 13px;
    }
    textarea{ min-height: 120px; resize: vertical; }
    input:focus, textarea:focus, select:focus{
      border-color: rgba(34,197,94,.34);
      box-shadow: 0 0 0 3px rgba(34,197,94,.18);
    }

    .split{
      display:grid;
      grid-template-columns: 1.05fr .95fr;
      gap: 14px;
      align-items: stretch;
    }
    @media (max-width: 980px){
      .split{ grid-template-columns: 1fr; }
    }
    .info-card{
      padding: 18px;
    }
    .info-row{
      display:flex;
      align-items:flex-start;
      gap: 12px;
      padding: 12px 0;
      border-bottom: 1px solid rgba(234,240,255,.10);
    }
    .info-row:last-child{ border-bottom: 0; }
    .info-ic{
      height: 42px;
      width: 42px;
      border-radius: 18px;
      border: 1px solid rgba(234,240,255,.12);
      background: rgba(255,255,255,.05);
      display:flex;
      align-items:center;
      justify-content:center;
      flex-shrink:0;
    }
    .info-ic svg{ color: rgba(234,240,255,.86); }
    .info-title{
      font-weight: 950;
      font-size: 13px;
    }
    .info-sub{
      margin-top: 6px;
      color: rgba(234,240,255,.72);
      font-size: 13px;
      line-height: 1.45;
    }
  </style>
</head>

<body>
  <header class="topbar" x-data="{ open:false }">
    <div class="container topbar-inner">
      <a class="brand" href="index">
        <div class="logo"><i data-lucide="droplets" style="width:22px;height:22px;"></i></div>
        <div class="brand-meta">
          <div class="brand-title">Car Wash</div>
          <div class="brand-sub">Clean. Fast. Reliable.</div>
        </div>
      </a>

      <nav class="nav">
        <?php foreach ($nav as $item) {
            $isActive = ($activePage === $item['key']); ?>
          <a class="<?php echo $isActive ? 'active' : ''; ?>" href="<?php echo e($item['href']); ?>"><?php echo e($item['label']); ?></a>
        <?php } ?>
      </nav>

      <div class="actions">
        <a class="btn primary" href="pricing.php">
          <i data-lucide="badge-dollar-sign" style="width:18px;height:18px;"></i>
          View Pricing
        </a>
        <button class="icon-btn mobile-menu-btn" type="button" @click="open=true" aria-label="Open menu">
          <i data-lucide="menu" style="width:20px;height:20px;"></i>
        </button>
      </div>
    </div>

    <div x-cloak x-show="open" class="mobile-sheet">
      <div class="overlay" @click="open=false"></div>
      <div class="sheet">
        <div class="sheet-head">
          <div class="sheet-title">Menu</div>
          <button class="icon-btn" type="button" @click="open=false" aria-label="Close menu">
            <i data-lucide="x" style="width:18px;height:18px;"></i>
          </button>
        </div>

        <div class="sheet-nav">
          <?php foreach ($nav as $item) {
              $isActive = ($activePage === $item['key']); ?>
            <a class="<?php echo $isActive ? 'active' : ''; ?>" href="<?php echo e($item['href']); ?>"><?php echo e($item['label']); ?></a>
          <?php } ?>
          <a href="pricing.php" style="background:rgba(34,197,94,.14);border-color:rgba(34,197,94,.26);color:#dfffea;">View Pricing</a>
        </div>
      </div>
    </div>
  </header>

  <?php echo $mainContent; ?>

  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <p class="foot-title">Car Wash</p>
        <p class="foot-desc">
          Professional exterior and interior cleaning with premium products.
          Quick turnaround, consistent quality, and friendly service.
        </p>
        <div class="tiny">Static demo UI. No backend or submissions yet.</div>
      </div>
      <div class="foot-links">
        <a href="about">About</a>
        <a href="services">Services</a>
        <a href="pricing">Pricing</a>
        <a href="contact">Contact</a>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      if (window.lucide) window.lucide.createIcons();
    });
  </script>
</body>
</html>