<?php
require_once __DIR__.'/config/config.php';
date_default_timezone_set('Africa/Kampala');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = 'Contact';
$activePage = 'contact';

ob_start();
?>
<section class="grid lg:grid-cols-12 gap-6 items-start">
    <div class="lg:col-span-7">
        <div class="bg-white rounded-3xl border border-secondary/70 shadow-soft p-6 lg:p-8">
            <h1 class="text-2xl lg:text-3xl font-semibold tracking-tight">Contact Us</h1>
            <p class="mt-3 text-muted">
                Reach out to book a wash, ask about pricing, or partner with us. We reply fast.
            </p>

            <div class="mt-6 grid sm:grid-cols-2 gap-4">
                <div class="rounded-2xl border border-secondary/70 bg-secondary/30 p-4">
                    <div class="text-sm text-muted">Phone</div>
                    <div class="mt-1 font-semibold">+256 700 000 000</div>
                    <div class="mt-2 text-sm text-muted">Call or WhatsApp</div>
                </div>

                <div class="rounded-2xl border border-secondary/70 bg-secondary/30 p-4">
                    <div class="text-sm text-muted">Email</div>
                    <div class="mt-1 font-semibold">info@example.com</div>
                    <div class="mt-2 text-sm text-muted">We respond within business hours</div>
                </div>

                <div class="rounded-2xl border border-secondary/70 bg-secondary/30 p-4">
                    <div class="text-sm text-muted">Location</div>
                    <div class="mt-1 font-semibold">Kampala, Uganda</div>
                    <div class="mt-2 text-sm text-muted">Serving Kampala and nearby areas</div>
                </div>

                <div class="rounded-2xl border border-secondary/70 bg-secondary/30 p-4">
                    <div class="text-sm text-muted">Working Hours</div>
                    <div class="mt-1 font-semibold">8:00am - 8:00pm</div>
                    <div class="mt-2 text-sm text-muted">Monday to Sunday</div>
                </div>
            </div>

            <div class="mt-6 pt-6 border-t border-secondary/70">
                <h2 class="text-lg font-semibold">Send a message</h2>

                <form class="mt-4 grid gap-4">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium">Full Name</label>
                            <input
                                type="text"
                                class="mt-1 w-full rounded-2xl border border-secondary/70 bg-white px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
                                placeholder="Your name"
                            />
                        </div>

                        <div>
                            <label class="block text-sm font-medium">Phone Number</label>
                            <input
                                type="tel"
                                class="mt-1 w-full rounded-2xl border border-secondary/70 bg-white px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
                                placeholder="+256..."
                            />
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Email</label>
                        <input
                            type="email"
                            class="mt-1 w-full rounded-2xl border border-secondary/70 bg-white px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
                            placeholder="you@example.com"
                        />
                    </div>

                    <div>
                        <label class="block text-sm font-medium">Message</label>
                        <textarea
                            rows="5"
                            class="mt-1 w-full rounded-2xl border border-secondary/70 bg-white px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
                            placeholder="Tell us what you need..."
                        ></textarea>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <button
                            type="button"
                            class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-primary text-white font-medium shadow-soft hover:opacity-95 transition"
                        >
                            Send Message
                        </button>

                        <a
                            href="order.php"
                            class="inline-flex items-center justify-center px-5 py-3 rounded-2xl bg-secondary/60 border border-secondary text-primary font-medium hover:bg-secondary transition"
                        >
                            Place an Order Instead
                        </a>
                    </div>

                    <p class="text-xs text-muted">
                        This is frontend-only for now. Later we will connect it to the backend to send emails or WhatsApp.
                    </p>
                </form>
            </div>
        </div>
    </div>

    <aside class="lg:col-span-5">
        <div class="bg-white rounded-3xl border border-secondary/70 shadow-soft overflow-hidden">
            <div class="p-6 lg:p-8">
                <div class="font-semibold">Quick Actions</div>

                <div class="mt-4 grid gap-3">
                    <a
                        href="order.php"
                        class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-2xl bg-primary text-white font-medium shadow-soft hover:opacity-95 transition"
                    >
                        Place Order
                    </a>

                    <a
                        href="#"
                        class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-2xl bg-accent text-primary font-medium hover:bg-accent/90 transition"
                    >
                        Chat on WhatsApp
                    </a>

                    <a
                        href="services.php"
                        class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-2xl bg-secondary/60 border border-secondary text-primary font-medium hover:bg-secondary transition"
                    >
                        View Services
                    </a>
                </div>

                <div class="mt-6 pt-6 border-t border-secondary/70">
                    <div class="text-sm text-muted">Map</div>
                    <div class="mt-2 rounded-2xl border border-secondary/70 bg-secondary/30 overflow-hidden">
                        <div class="aspect-[4/3] grid place-items-center text-sm text-muted px-6 text-center">
                            Add a Google Map embed here later (frontend only for now).
                        </div>
                    </div>

                    <div class="mt-3 text-xs text-muted">
                        Tip: when you are ready, we can embed an actual Google Maps iframe for Kampala and service areas.
                    </div>
                </div>
            </div>
        </div>
    </aside>
</section>
<?php
$mainContent = ob_get_clean();
require __DIR__.'/master.php';
