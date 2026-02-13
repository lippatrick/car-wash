<?php
require_once __DIR__.'/config/config.php';
date_default_timezone_set('Africa/Kampala');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = 'Page Not Found';
$activePage = '';

ob_start();
?>
<section class="bg-white rounded-3xl border border-secondary/70 shadow-soft p-6 lg:p-10">
    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-secondary/60 border border-secondary text-sm text-muted">
        404
    </div>

    <h1 class="mt-4 text-3xl lg:text-4xl font-semibold tracking-tight">Page not found</h1>
    <p class="mt-3 text-muted max-w-2xl">
        The page you are looking for does not exist or may have been moved. Use the buttons below to continue.
    </p>

    <div class="mt-7 flex flex-col sm:flex-row gap-3">
        <a href="index.php"
           class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-2xl bg-primary text-white font-medium shadow-soft hover:opacity-95 transition">
            Go Home
        </a>

        <a href="services.php"
           class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-2xl bg-secondary/60 border border-secondary text-primary font-medium hover:bg-secondary transition">
            Browse Services
        </a>

        <a href="contact.php"
           class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-2xl bg-secondary/60 border border-secondary text-primary font-medium hover:bg-secondary transition">
            Contact Us
        </a>
    </div>

    <div class="mt-8 border-t border-secondary/70 pt-5">
        <div class="text-sm text-muted">Tried URL:</div>
        <div class="mt-1 font-mono text-sm bg-secondary/40 border border-secondary/70 rounded-2xl px-4 py-3 overflow-x-auto">
            <?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
        </div>
    </div>
</section>
<?php
$mainContent = ob_get_clean();
require __DIR__.'/master.php';
