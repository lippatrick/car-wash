<?php
if (!isset($pageTitle)) $pageTitle = "Car Wash Uganda";
if (!isset($activePage)) $activePage = "";
if (!isset($mainContent)) $mainContent = "";

function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

function base_url() {
    if (defined('BASE_URL') && BASE_URL) return rtrim(BASE_URL, '/') . '/';
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script = $_SERVER['SCRIPT_NAME'] ?? '/';
    $dir = rtrim(str_replace('\\', '/', dirname($script)), '/');
    return $scheme . '://' . $host . ($dir ? $dir . '/' : '/');
}

function asset_url($path) {
    return base_url() . ltrim($path, '/');
}

function nav_link($href, $label, $key, $activePage) {
    $isActive = ($key === $activePage);
    $cls = $isActive
        ? "text-black bg-secondary/70 border-secondary"
        : "text-muted hover:text-black hover:bg-secondary/50 border-transparent";
    return '<a href="' . e($href) . '" class="inline-flex items-center gap-2 px-3 py-2 rounded-xl border ' . $cls . ' transition">'
        . e($label) . '</a>';
}

$brandName = "Kampala Car Wash";
$brandTagline = "Order a wash. We come to you.";

$siteLinks = [
    ["href" => asset_url("index.php"), "label" => "Home", "key" => "home"],
    ["href" => asset_url("services.php"), "label" => "Services", "key" => "services"],
    ["href" => asset_url("pricing.php"), "label" => "Pricing", "key" => "pricing"],
    ["href" => asset_url("order.php"), "label" => "Place Order", "key" => "order"],
    ["href" => asset_url("about.php"), "label" => "About", "key" => "about"],
    ["href" => asset_url("contact.php"), "label" => "Contact", "key" => "contact"],
];

$whatsappNumber = "+256700000000";
$whatsappLink = "https://wa.me/" . preg_replace('/\D+/', '', $whatsappNumber) . "?text=" . rawurlencode("Hello, I would like to place a car wash order.");

$metaDesc = "Online car wash in Uganda. Book a wash, choose services, set location and time - our team comes to you.";
$metaImage = asset_url("assets/og-image.jpg");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= e($pageTitle) ?> - <?= e($brandName) ?></title>
    <meta name="description" content="<?= e($metaDesc) ?>" />

    <meta property="og:title" content="<?= e($pageTitle) ?> - <?= e($brandName) ?>" />
    <meta property="og:description" content="<?= e($metaDesc) ?>" />
    <meta property="og:image" content="<?= e($metaImage) ?>" />
    <meta property="og:type" content="website" />

    <link rel="icon" href="<?= e(asset_url("assets/favicon.png")) ?>" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#0B1220",
                        secondary: "#ECE6E2",
                        accent: "#D7AD99",
                        accentDark: "#b66c40",
                        surface: "#ffffff",
                        muted: "#544c50",
                        brand: {
                            primary: "#0B1220",
                            accent: "#D7AD99",
                        }
                    },
                    boxShadow: {
                        soft: "0 10px 30px rgba(0,0,0,0.08)"
                    }
                }
            }
        }
    </script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="min-h-screen bg-secondary/35 text-primary antialiased">
<div
    x-data="siteShell()"
    x-init="init()"
    class="min-h-screen flex flex-col"
>
    <header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-secondary/70">
        <div class="max-w-6xl mx-auto px-4 lg:px-6">
            <div class="h-16 flex items-center justify-between gap-3">
                <a href="<?= e(asset_url("index.php")) ?>" class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-primary text-white grid place-items-center shadow-soft">
                        <span class="text-sm font-semibold">CW</span>
                    </div>
                    <div class="leading-tight">
                        <div class="font-semibold"><?= e($brandName) ?></div>
                        <div class="text-xs text-muted"><?= e($brandTagline) ?></div>
                    </div>
                </a>

                <nav class="hidden lg:flex items-center gap-2">
                    <?php foreach ($siteLinks as $l) { echo nav_link($l["href"], $l["label"], $l["key"], $activePage); } ?>
                </nav>

                <div class="flex items-center gap-2">
                    <a href="<?= e($whatsappLink) ?>" target="_blank" rel="noopener"
                       class="hidden sm:inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-accent text-primary font-medium shadow-soft hover:bg-accent/90 transition">
                        WhatsApp
                    </a>

                    <a href="<?= e(asset_url("order.php")) ?>"
                       class="hidden sm:inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-primary text-white font-medium shadow-soft hover:opacity-95 transition">
                        Place Order
                    </a>

                    <button
                        type="button"
                        class="lg:hidden inline-flex items-center justify-center w-11 h-11 rounded-xl border border-secondary/70 bg-white hover:bg-secondary/40 transition"
                        @click="openMobileNav()"
                        aria-label="Open menu"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div
            x-show="mobileOpen"
            x-cloak
            class="lg:hidden"
        >
            <div class="fixed inset-0 z-50">
                <div class="absolute inset-0 bg-black/40" @click="closeMobileNav()"></div>

                <div class="absolute right-0 top-0 h-full w-[85%] max-w-sm bg-white shadow-xl border-l border-secondary/70">
                    <div class="h-16 px-4 flex items-center justify-between border-b border-secondary/70">
                        <div class="font-semibold">Menu</div>
                        <button
                            type="button"
                            class="w-10 h-10 rounded-xl border border-secondary/70 hover:bg-secondary/40 transition grid place-items-center"
                            @click="closeMobileNav()"
                            aria-label="Close menu"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 6 6 18M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 space-y-2">
                        <?php foreach ($siteLinks as $l) { echo nav_link($l["href"], $l["label"], $l["key"], $activePage); } ?>

                        <div class="pt-3 border-t border-secondary/70 space-y-2">
                            <a href="<?= e($whatsappLink) ?>" target="_blank" rel="noopener"
                               class="w-full inline-flex items-center justify-center gap-2 px-3 py-3 rounded-xl bg-accent text-primary font-medium shadow-soft hover:bg-accent/90 transition">
                                WhatsApp
                            </a>

                            <a href="<?= e(asset_url("order.php")) ?>"
                               class="w-full inline-flex items-center justify-center gap-2 px-3 py-3 rounded-xl bg-primary text-white font-medium shadow-soft hover:opacity-95 transition">
                                Place Order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-1">
        <div class="max-w-6xl mx-auto px-4 lg:px-6 py-8">
            <?= $mainContent ?>
        </div>
    </main>

    <footer class="border-t border-secondary/70 bg-white">
        <div class="max-w-6xl mx-auto px-4 lg:px-6 py-10">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="font-semibold text-lg"><?= e($brandName) ?></div>
                    <div class="text-sm text-muted mt-1 max-w-md">
                        Book a wash online anywhere in Uganda. Choose your service, location, and time. Our team comes to you.
                    </div>

                    <div class="mt-4 flex flex-wrap gap-2">
                        <a href="<?= e($whatsappLink) ?>" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-secondary/60 border border-secondary text-primary hover:bg-secondary transition">
                            Chat on WhatsApp
                        </a>
                        <a href="<?= e(asset_url("order.php")) ?>"
                           class="inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-primary text-white hover:opacity-95 transition">
                            Place Order
                        </a>
                    </div>
                </div>

                <div>
                    <div class="font-semibold">Quick Links</div>
                    <div class="mt-3 flex flex-col gap-2 text-sm">
                        <?php foreach ($siteLinks as $l) { ?>
                            <a class="text-muted hover:text-primary transition" href="<?= e($l["href"]) ?>"><?= e($l["label"]) ?></a>
                        <?php } ?>
                    </div>
                </div>

                <div>
                    <div class="font-semibold">Contact</div>
                    <div class="mt-3 text-sm text-muted space-y-2">
                        <div>WhatsApp: <?= e($whatsappNumber) ?></div>
                        <div>Email: info@example.com</div>
                        <div>Hours: 8:00am - 8:00pm</div>
                        <div class="pt-2">
                            <span class="inline-flex items-center gap-2 px-3 py-2 rounded-xl bg-secondary/60 border border-secondary">
                                Kampala - Uganda
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-secondary/70 flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between text-sm text-muted">
                <div>© <?= (int)date('Y') ?> <?= e($brandName) ?>. All rights reserved.</div>
                <div class="flex gap-4">
                    <a href="<?= e(asset_url("privacy.php")) ?>" class="hover:text-primary transition">Privacy</a>
                    <a href="<?= e(asset_url("terms.php")) ?>" class="hover:text-primary transition">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="fixed bottom-5 right-5 z-40">
        <a href="<?= e($whatsappLink) ?>" target="_blank" rel="noopener"
           class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-accent text-primary shadow-soft hover:bg-accent/90 transition"
           aria-label="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20.52 3.48A11.91 11.91 0 0 0 12.06 0C5.5 0 .16 5.33.16 11.9c0 2.1.55 4.15 1.6 5.97L0 24l6.3-1.65a11.88 11.88 0 0 0 5.76 1.47h.01c6.57 0 11.9-5.33 11.9-11.9 0-3.18-1.24-6.17-3.45-8.44ZM12.07 21.7h-.01a9.9 9.9 0 0 1-5.04-1.38l-.36-.21-3.74.98 1-3.65-.23-.38a9.88 9.88 0 1 1 8.38 4.64Zm5.73-7.37c-.31-.16-1.84-.9-2.13-1-.29-.11-.5-.16-.72.16-.22.31-.83 1-.99 1.2-.18.2-.36.23-.67.08-.31-.16-1.3-.48-2.47-1.52-.92-.82-1.54-1.83-1.72-2.14-.18-.31-.02-.48.13-.63.13-.13.31-.36.47-.54.16-.18.2-.31.31-.52.11-.2.05-.39-.03-.55-.08-.16-.72-1.73-.99-2.37-.26-.62-.52-.53-.72-.54h-.62c-.2 0-.55.08-.83.39-.28.31-1.1 1.07-1.1 2.61 0 1.54 1.13 3.02 1.29 3.23.16.2 2.22 3.38 5.37 4.74.75.32 1.33.51 1.78.65.75.24 1.43.2 1.97.12.6-.09 1.84-.75 2.1-1.47.26-.72.26-1.34.18-1.47-.08-.13-.29-.2-.6-.36Z"/>
            </svg>
        </a>
    </div>
</div>

<script>
function siteShell() {
    return {
        mobileOpen: false,
        init() {
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.mobileOpen) this.closeMobileNav()
            })
        },
        openMobileNav() {
            this.mobileOpen = true
            document.documentElement.classList.add('overflow-hidden')
        },
        closeMobileNav() {
            this.mobileOpen = false
            document.documentElement.classList.remove('overflow-hidden')
        },
    }
}
</script>

</body>
</html>