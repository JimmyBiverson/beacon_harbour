<section class="page-feature feature">
    <x-photo name="friends" :hero="true"/>
    <div>
        <span class="eyebrow">Our name, our purpose</span>
        <h2>What "Beacon Harbor" means to us</h2>
        <p>A beacon represents direction and possibility — a fixed point of light for anyone finding their way through a hard season. A harbor represents safety, belonging, and support — a place to steady before setting out again.</p>
        <p>Together, they describe what we're building for young people across Quincy and Greater Boston: a place to find encouragement, develop real skills, and move toward their future with confidence.</p>
        <a class="textlink textlink-dark" href="{{ route('programs') }}">See Our Programs <b>→</b></a>
    </div>
</section>

<section class="story-section section-tint">
    <div class="wrap story-grid section-block">
        <div class="story-copy reveal">
            <span class="eyebrow">Our Vision</span>
            <h2>Resources and support to <em>reach their potential.</em></h2>
            <p>"That all youth exposed to homelessness and substance abuse receive the resources and support to reach their potential."</p>
        </div>
        <aside class="story-note reveal">
            <span class="eyebrow">What "Beacon Harbor" means to us</span>
            <blockquote>"Every young person deserves a harbor — and a light to steer by."</blockquote>
            <p>A beacon represents direction and possibility; a harbor represents safety, belonging, and support.</p>
        </aside>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Our approach</span>
        <div class="split">
            <h2>Community-centered. <em>Youth-focused.</em></h2>
        </div>
        <p class="section-lead">We take a community-centered, youth-focused approach. Rather than assuming what young people need, we listen first — to youth, families, and the organizations already working in their corner — and build practical programs around the gaps we find together.</p>
    </div>
    <div class="approach-cards">
        <article class="approach-card reveal"><span>01</span><h3>Responsive</h3><p>Responsive to real, current needs rather than fixed assumptions.</p></article>
        <article class="approach-card reveal"><span>02</span><h3>Inclusive</h3><p>Inclusive of youth regardless of race, religion, gender, or immigration background.</p></article>
        <article class="approach-card reveal"><span>03</span><h3>Measurable outcomes</h3><p>Focused on measurable, positive outcomes for the young people we serve.</p></article>
    </div>
</section>

<section class="values-section">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">What we stand for</span>
            <div class="split"><h2>Care is a practice, <em>not a slogan.</em></h2></div>
        </div>
        <div class="tiles">
            @foreach([
                'Empowerment' => 'Young people should have the confidence, knowledge, and resources to shape their own futures.',
                'Inclusion' => 'A welcoming environment where every young person is treated with dignity, regardless of race, religion, gender, or background.',
                'Integrity & transparency' => 'We conduct our work with honesty and accountability, sharing our successes and lessons with the nonprofit community.',
                'Compassion' => 'We approach youth, families, and community members with empathy, understanding, and respect.',
                'Collaboration' => 'We work alongside other Boston organizations addressing homelessness — enhancing the ecosystem rather than competing within it.',
                'Learning & sharing' => 'We commit to sharing what we learn so qualified partners can extend these services to other communities.',
            ] as $title => $text)
                <article class="value-card reveal">
                    <span class="eyebrow">0{{ $loop->iteration }}</span>
                    <h3>{{ $title }}</h3>
                    <p>{{ $text }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="closing-cta">
    <div class="wrap closing-cta-inner reveal">
        <div>
            <span class="eyebrow">Get Involved</span>
            <h2>Help us build a stronger harbor for Boston's youth.</h2>
            <p>Every young person deserves a harbor — and a light to steer by.</p>
        </div>
        <div class="actions">
            <a class="pill donate-cta" href="{{ route('involvement') }}">Get Involved <b>↗</b></a>
            <a class="textlink" href="{{ route('community') }}">Our Focus Area →</a>
        </div>
    </div>
</section>
