<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/config.php';
date_default_timezone_set('Africa/Kampala');

if (session_status() === PHP_SESSION_NONE) session_start();

$pageTitle = "About";
$activePage = "about";

ob_start();
?>
<section class="bg-white rounded-3xl border border-secondary/70 shadow-soft p-6 lg:p-8">
    <h1 class="text-2xl lg:text-3xl font-semibold tracking-tight">About Us</h1>
    <p class="mt-3 text-muted">Hello, let you get to know us.</p>
</section>
<?php
$mainContent = ob_get_clean();
require __DIR__ . '/master.php';