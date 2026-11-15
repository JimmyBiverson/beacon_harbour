<footer class="site-footer">
    <div class="wrap">
        <div class="footergrid">
            <div class="footer-brand-block">
                <x-brand/>
                <p>{{ config('outreach.organization.tagline') }}</p>
            </div>
            <div>
                <strong>Explore</strong>
                @foreach(['home' => 'Home', 'about' => 'About us', 'what-we-do' => 'What We Do', 'community' => 'Where We Work', 'projects' => 'Our Projects', 'journal' => 'Blog', 'contact' => 'Contact'] as $key => $label)
                    <a href="{{ route($key) }}">{{ $label }}</a>
                @endforeach
                <strong>Organization</strong>
                <a href="{{ route('involvement') }}">Get Involved</a>
                <a href="{{ route('involvement') }}#giving">Donate</a>
            </div>
            <div>
                <strong>Contact</strong>
                <a href="mailto:{{ config('outreach.contact.email') }}">{{ config('outreach.contact.email') }}</a>
                <a href="tel:{{ config('outreach.contact.phone_uri') }}">{{ config('outreach.contact.phone') }}</a>
                <span>{{ config('outreach.contact.address.0') }}<br>{{ config('outreach.contact.address.1') }}</span>
            </div>
        </div>

        <div class="fine">
            <span>© {{ date('Y') }} {{ config('outreach.organization.name') }} A 501(c)(3) nonprofit organization.</span>
            <span><a href="{{ route('privacy') }}">Privacy Policy</a> · Terms of Use</span>
        </div>
    </div>
</footer>
