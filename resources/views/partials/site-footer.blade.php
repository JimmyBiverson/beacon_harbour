<footer class="site-footer">
    <div class="wrap">
        <div class="footergrid">
            <div class="footer-brand-block">
                <x-brand/>
                <p>A place to steady. A light to steer by.</p>
            </div>
            <div>
                <strong>Explore</strong>
                @foreach(['programs' => 'Programs', 'community' => 'Where we work', 'involvement' => 'Giving & volunteering'] as $key => $label)
                    <a href="{{ route($key) }}">{{ $label }}</a>
                @endforeach
            </div>
            <div>
                <strong>Contact</strong>
                <a href="mailto:info@bhyoi.org">info@bhyoi.org</a>
                <a href="tel:+14013763109">+1(401)376-3109</a>
                <span>2 Hancock Street, Unit 807<br>Quincy, MA 02170</span>
            </div>
        </div>

        <div class="fine">
            © {{ date('Y') }} Beacon Harbor Youth Outreach Initiative, Inc. <a href="{{ route('privacy') }}">Privacy</a>
        </div>
    </div>
</footer>
