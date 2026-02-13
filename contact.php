<?php
// contact.php - Contact Us (static)
$pageTitle = 'Contact Us - Car Wash';
$activePage = 'contact';
$metaDesc = 'Contact our car wash for bookings, fleet rates, and questions.';

ob_start();
?>
<section class="hero">
  <div class="container">
    <div class="card hero-left" style="padding:22px;">
      <div class="hero-badge">
        <i data-lucide="message-circle" style="width:16px;height:16px;"></i>
        We respond fast
      </div>

      <h1 class="hero-title">
        Contact us for <span>bookings</span> and questions.
      </h1>

      <p class="hero-desc" style="max-width: 72ch;">
        This is a static contact form UI. It will not submit anywhere yet. You can replace the details below
        with your real phone, WhatsApp, email, and address.
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="split">
      <div class="card">
        <div class="info-card">
          <h2 class="section-title" style="margin:0;">Contact details</h2>
          <p class="section-desc" style="margin-top:10px;">Use any of these channels for quick support.</p>

          <div style="margin-top:12px;">
            <div class="info-row">
              <div class="info-ic"><i data-lucide="phone" style="width:20px;height:20px;"></i></div>
              <div>
                <div class="info-title">Phone</div>
                <div class="info-sub">+256 700 000 000</div>
              </div>
            </div>

            <div class="info-row">
              <div class="info-ic"><i data-lucide="message-circle" style="width:20px;height:20px;"></i></div>
              <div>
                <div class="info-title">WhatsApp</div>
                <div class="info-sub">+256 700 000 000</div>
              </div>
            </div>

            <div class="info-row">
              <div class="info-ic"><i data-lucide="mail" style="width:20px;height:20px;"></i></div>
              <div>
                <div class="info-title">Email</div>
                <div class="info-sub">info@carwash.local</div>
              </div>
            </div>

            <div class="info-row">
              <div class="info-ic"><i data-lucide="map-pin" style="width:20px;height:20px;"></i></div>
              <div>
                <div class="info-title">Address</div>
                <div class="info-sub">Kampala, Uganda (update address later)</div>
              </div>
            </div>

            <div class="info-row">
              <div class="info-ic"><i data-lucide="clock" style="width:20px;height:20px;"></i></div>
              <div>
                <div class="info-title">Working hours</div>
                <div class="info-sub">Mon to Sat: 8:00 AM - 7:00 PM<br>Sun: 10:00 AM - 5:00 PM</div>
              </div>
            </div>
          </div>

          <div style="margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;">
            <a class="btn primary" href="pricing.php">
              <i data-lucide="badge-dollar-sign" style="width:18px;height:18px;"></i>
              View Pricing
            </a>
            <a class="btn" href="services.php">
              <i data-lucide="layers" style="width:18px;height:18px;"></i>
              View Services
            </a>
          </div>
        </div>
      </div>

      <div class="card">
        <form class="form" x-data="{ name:'', phone:'', service:'', message:'' }" @submit.prevent="alert('Static demo: form submission is not wired yet.')">
          <div>
            <h2 class="section-title" style="margin:0;">Send a message</h2>
            <p class="section-desc" style="margin-top:10px;">We will connect the backend later. For now, it is UI only.</p>
          </div>

          <div class="field">
            <label>Your name</label>
            <input type="text" placeholder="Enter your name" x-model="name" />
          </div>

          <div class="field">
            <label>Phone</label>
            <input type="tel" placeholder="+256..." x-model="phone" />
          </div>

          <div class="field">
            <label>Service</label>
            <select x-model="service">
              <option value="">Select a service</option>
              <option>Basic Wash</option>
              <option>Standard</option>
              <option>Full Detail</option>
              <option>Engine Bay</option>
              <option>Wax Top-up</option>
              <option>Interior Detailing</option>
            </select>
          </div>

          <div class="field">
            <label>Message</label>
            <textarea placeholder="Tell us your preferred time, car type, and any special requests" x-model="message"></textarea>
          </div>

          <div style="display:flex;gap:10px;flex-wrap:wrap;">
            <button type="submit" class="btn primary">
              <i data-lucide="send" style="width:18px;height:18px;"></i>
              Send message
            </button>
            <button type="button" class="btn" @click="name='';phone='';service='';message='';">
              <i data-lucide="rotate-ccw" style="width:18px;height:18px;"></i>
              Clear
            </button>
          </div>

          <div style="margin-top:4px;color:rgba(234,240,255,.62);font-size:12px;line-height:1.45;">
            By sending this form, you agree this is a demo UI. We will add real submission later.
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
$mainContent = ob_get_clean();
require __DIR__.'/master.php';
