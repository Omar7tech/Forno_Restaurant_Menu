@props(['settings'])
@php
    $theme = $settings->theme;
@endphp
<section id="contact" class="py-16">
    <div class="container mx-auto px-6 lg:px-12">
        <h2 class="text-3xl font-bold text-center mb-10">Contact Us</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Left: Logo & Intro -->
            <div class="flex flex-col items-center text-center md:items-start md:text-left">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/circle-lebanon.png') }}" alt="Lebanon Icon" class="w-10">
                    @if ($theme == 'light')
                        <img src="{{ asset('images/title-nobg.png') }}" alt="Forno Logo"
                            class="w-32 md:w-40 object-contain">
                    @else
                        <img src="{{ asset('images/logo-white-nobg.png') }}" alt="Forno Logo"
                            class="w-32 md:w-40 object-contain">
                    @endif
                </div>
                <p class="leading-relaxed">
                    Visit us in <strong>Aley, Lebanon</strong> and discover the perfect blend of Mediterranean
                    and Italian flavors. Reach out through our socials or drop by — we’d love to welcome you!
                </p>
            </div>


            <div class="flex flex-col justify-center items-center md:items-start">
                <h3 class="text-xl font-semibold mb-4">Get in Touch</h3>
                <ul class="space-y-3">
                    @if ($settings->phone_active && $settings->phone_number)
                        <li>
                            <a class="flex items-center gap-3" href="tel: {{ $settings->phone_number }}">
                                <img src="{{ asset('icons/mobile.png') }}" alt="Phone" class="w-7">
                                <span>{{ $settings->phone_number }}</span>
                            </a>
                        </li>
                    @endif

                    @if ($settings->whatsapp_active && $settings->whatsapp_number)
                        <li>
                            <a class="flex items-center gap-3"
                                href="https://wa.me/{{ $settings->whatsapp_number }}?text=👋%20Hello%20Forno,%20I%20would%20like%20to%20place%20an%20order!"
                                target="_blank">
                                <img src="{{ asset('icons/whatsapp-footer.png') }}" alt="WhatsApp" class="w-7">
                                <span>Chat with us on WhatsApp</span>
                            </a>
                        </li>
                    @endif
                    @if ($settings->location_url && $settings->location_active)
                        <li>
                            <a class="flex items-center gap-3" href="{{ $settings->location_url }}">
                                <img src="{{ asset('icons/google-maps.png') }}" alt="Location" class="w-7">
                                <span>Aley, Mount Lebanon</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            <!-- Right: Socials -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
                <div class="flex gap-5">
                    @if ($settings->instagram_url && $settings->instagram_active)
                        <a href="{{ $settings->instagram_url }}" class="hover:scale-110 transition">
                            <img src="{{ asset('icons/instagram.png') }}" alt="Instagram" class="w-9">
                        </a>
                    @endif

                    @if ($settings->facebook_url && $settings->facebook_active)
                        <a href="{{ $settings->facebook_url }}" class="hover:scale-110 transition">
                            <img src="{{ asset('icons/facebook.png') }}" alt="Facebook" class="w-9">
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
