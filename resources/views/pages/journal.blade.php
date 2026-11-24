<section class="wrap section-block blog-layout">
    <div class="blog-main">
        <div class="section-header reveal">
            <span class="eyebrow">Our blog</span>
            <div class="split"><h2>Stories, insight, and <em>change in action.</em></h2></div>
        </div>
        <x-cards type="article"/>
    </div>
    <aside class="blog-sidebar reveal">
        <span class="eyebrow">Our blog</span>
        <h2>Stories, insight, and <em>change in action.</em></h2>
        <ul class="topic-list">
            <li><span>01</span> Founding story</li>
            <li><span>02</span> Partnerships</li>
            <li><span>03</span> Programs</li>
            <li><span>04</span> Mental health</li>
        </ul>
        <p>Updates from Beacon Harbor as we build our programs, our partnerships, and our presence across Quincy and Massachusetts.</p>
        <a class="textlink textlink-dark" href="{{ route('contact') }}">Contact us →</a>
    </aside>
</section>

<section class="section-tint">
    <div class="wrap section-block blog-callout reveal">
        <div>
            <span class="eyebrow">Our blog</span>
            <h2>Get updates from <em>Beacon Harbor.</em></h2>
        </div>
        <p>Updates from Beacon Harbor as we build our programs, our partnerships, and our presence across Quincy and Massachusetts.</p>
        <a class="pill donate-cta" href="mailto:{{ config('outreach.contact.email') }}?subject=Beacon%20Harbor%20blog%20subscription">Subscribe <b>↗</b></a>
    </div>
</section>
