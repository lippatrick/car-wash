<?php
$pageTitle = 'Bookings';
$activePage = 'bookings';

ob_start();
?>
<div style="display:flex;flex-direction:column;gap:16px;">
  <div style="background:#fff;border:1px solid #e2e8f0;border-radius:22px;box-shadow:0 10px 30px rgba(2,6,23,.08);padding:16px;">
    <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:12px;">
      <div>
        <div style="font-size:12px;color:#64748b;font-weight:700;">Overview</div>
        <div style="margin-top:6px;font-size:18px;font-weight:900;">Bookings</div>
        <div style="margin-top:6px;font-size:13px;color:#64748b;">This is placeholder UI, no backend yet.</div>
      </div>
      <button type="button"
              style="height:44px;border-radius:22px;border:1px solid #0b1220;background:#0b1220;color:#fff;padding:0 14px;font-weight:800;cursor:pointer;"
              onclick="alert('UI-only')">New booking</button>
    </div>
  </div>
</div>
<?php
$mainContent = ob_get_clean();
require __DIR__.'/master.php';
