<section class="wrap section-block" id="giving">
    <div class="section-header reveal">
        <span class="eyebrow">How we sustain this work</span>
        <div class="split"><h2>Diversified, <em>responsible support.</em></h2></div>
        <p class="section-lead">We're building a sustainable organization through a mix of community partnerships, individual giving, and institutional support — while staying focused on programs that create real impact.</p>
    </div>
    <div class="involvement-grid">
        @foreach(config('outreach.funding_sources') as $source)
            <article class="involvement-card reveal">
                <span class="eyebrow">0{{ $loop->iteration }}</span>
                <h3>{{ $source }}</h3>
                <a class="textlink textlink-dark" href="{{ route('contact') }}">Get Involved →</a>
            </article>
        @endforeach
    </div>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="program-note reveal">
            <div>
                <span class="eyebrow">Get Involved</span>
                <h2>Help us build a stronger harbor for Greater Boston's youth.</h2>
            </div>
            <p>Have questions, want to get involved, or interested in a partnership? We'd love to hear from you.</p>
            <a class="pill donate-cta" href="{{ route('contact') }}">Contact us <b>↗</b></a>
        </div>
    </div>
</section>
