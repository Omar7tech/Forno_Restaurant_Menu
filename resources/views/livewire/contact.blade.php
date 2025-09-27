<section id="contact" class="py-16">
    <div class="container mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center mb-10">Contact Us</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Left: Logo & Intro -->
            <div class="flex flex-col items-center text-center md:items-start md:text-left">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/circle-lebanon.png') }}" alt="Lebanon Icon" class="w-10">
                    <img src="{{ asset('images/forno-logo-first.png') }}" alt="Forno Logo"
                        class="w-32 md:w-40 object-contain">
                </div>
                <p class="leading-relaxed">
                    Visit us in <strong>Aley, Lebanon</strong> and discover the perfect blend of Mediterranean
                    and Italian flavors. Reach out through our socials or drop by — we’d love to welcome you!
                </p>
            </div>

            <!-- Middle: Contact Info -->
            <div class="flex flex-col justify-center items-center md:items-start">
                <h3 class="text-xl font-semibold mb-4">Get in Touch</h3>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <img src="{{ asset('icons/mobile.png') }}" alt="Phone" class="w-7">
                        <span>+961 70 123 456</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <img src="{{ asset('icons/whatsapp-footer.png') }}" alt="WhatsApp" class="w-7">
                        <span>Chat with us on WhatsApp</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <img src="{{ asset('icons/google-maps.png') }}" alt="Location" class="w-7">
                        <span>Aley, Mount Lebanon</span>
                    </li>
                </ul>
            </div>

            <!-- Right: Socials -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                <div class="flex gap-5">
                    <a href="#" class="hover:scale-110 transition">
                        <img src="{{ asset('icons/instagram.png') }}" alt="Instagram" class="w-9">
                    </a>
                    <a href="#" class="hover:scale-110 transition">
                        <img src="{{ asset('icons/facebook.png') }}" alt="Facebook" class="w-9">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
