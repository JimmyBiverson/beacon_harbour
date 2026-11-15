<section class="hero-shell">
    <x-photo name="community" :hero="true" class="hero-backdrop" aria-hidden="true"/>
    <div class="wrap hero-grid">
        <div class="hero-copy reveal">
            <span class="tag"><i></i> Greater Boston, Massachusetts</span>
            <h1>Stronger youth.<br><em>Brighter</em><br>tomorrows.</h1>
            <p>Beacon Harbor connects at-risk and homeless youth across Greater Boston to the mental health, life-skills, and career support they need — in a space built on safety and respect.</p>
            <div class="actions">
                <a class="pill donate-cta" href="{{ route('involvement') }}">Get Involved <b>↗</b></a>
                <a class="textlink" href="{{ route('programs') }}">See Our Programs <b>→</b></a>
            </div>
            <ul class="mini-stats source-pillars" aria-label="Beacon Harbor at a glance">
                <li><strong>Support</strong><span>Safe, supportive spaces where young people can stabilize and be heard.</span></li>
                <li><strong>Empower</strong><span>Life skills, education, and mentorship that build lasting confidence.</span></li>
                <li><strong>Strengthen</strong><span>Partnerships across Greater Boston that make communities more resilient.</span></li>
            </ul>
        </div>

        <div class="hero-media reveal" data-slider aria-label="Beacon Harbor youth outreach images">
            <div class="slide is-active">
                <img src="{{ asset('images/community-800.webp') }}" alt="Young people and community members together outdoors">
            </div>
            <div class="slide">
                <img src="{{ asset('images/friends-800.webp') }}" alt="Young people sharing time and building connection">
            </div>
            <div class="slide">
                <img src="{{ asset('images/pathways-800.webp') }}" alt="Students walking together across a campus">
            </div>
            <div class="slide">
                <img src="{{ asset('images/learning-800.webp') }}" alt="Young people gathered around a study table">
            </div>

            <div class="slider-overlay">
                <span class="eyebrow">Beacon Harbor</span>
                <h2>Every young person deserves a harbor — and a light to steer by.</h2>
            </div>
            <div class="slider-dots" aria-label="Choose an image">
                <button class="slider-dot is-active" type="button" aria-label="Show image 1" aria-pressed="true"></button>
                <button class="slider-dot" type="button" aria-label="Show image 2" aria-pressed="false"></button>
                <button class="slider-dot" type="button" aria-label="Show image 3" aria-pressed="false"></button>
                <button class="slider-dot" type="button" aria-label="Show image 4" aria-pressed="false"></button>
            </div>
        </div>
    </div>
</section>

<div class="ribbon">
    <div class="wrap ribbon-inner">
        <span>01 <strong>Support</strong></span>
        <span>02 <strong>Empower</strong></span>
        <span>03 <strong>Strengthen</strong></span>
    </div>
</div>

<section class="wrap section-block home-intro">
    <div class="home-intro-copy reveal">
        <span class="eyebrow">Our name, our purpose</span>
        <h2>What "Beacon Harbor" means to us</h2>
        <p>A beacon represents direction and possibility — a fixed point of light for anyone finding their way through a hard season. A harbor represents safety, belonging, and support — a place to steady before setting out again.</p>
        <p>Together, they describe what we're building for young people across Quincy and Greater Boston: a place to find encouragement, develop real skills, and move toward their future with confidence.</p>
        <a class="textlink textlink-dark" href="{{ route('about') }}">What we stand for <b>→</b></a>
    </div>
    <div class="home-intro-image reveal">
        <x-photo name="friends" :hero="true"/>
        <div class="image-note"><span class="dot"></span> A harbor represents safety, belonging, and support.</div>
    </div>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">What we do</span>
            <div class="split">
                <h2>Real support. <em>Lasting change.</em></h2>
                <a class="textlink textlink-dark" href="{{ route('programs') }}">See Our Programs →</a>
            </div>
            <p class="section-lead">We provide holistic, youth-centered programs that educate, empower, and create opportunity for at-risk and homeless youth across Greater Boston.</p>
        </div>
        <x-cards type="service" :limit="3"/>
    </div>
</section>

<section class="approach-band">
    <div class="wrap approach-band-grid">
        <div class="reveal">
            <span class="eyebrow">Our approach</span>
            <h2>Community-centered. <em>Youth-focused.</em></h2>
            <p>We take a community-centered, youth-focused approach. Rather than assuming what young people need, we listen first — to youth, families, and the organizations already working in their corner — and build practical programs around the gaps we find together.</p>
            <p>We work collaboratively with other organizations addressing youth homelessness and development in Boston — enhancing the ecosystem rather than competing with existing groups.</p>
            <a class="pill light" href="{{ route('contact') }}">Partner With Us <b>↗</b></a>
        </div>
        <div class="approach-steps">
            <article class="approach-step reveal">
                <span>01</span>
                <div><h3>Responsive</h3><p>Responsive to real, current needs rather than fixed assumptions.</p></div>
            </article>
            <article class="approach-step reveal">
                <span>02</span>
                <div><h3>Inclusive</h3><p>Inclusive of youth regardless of race, religion, gender, or immigration background.</p></div>
            </article>
            <article class="approach-step reveal">
                <span>03</span>
                <div><h3>Measurable outcomes</h3><p>Focused on measurable, positive outcomes for the young people we serve.</p></div>
            </article>
        </div>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Our blog</span>
        <div class="split">
            <h2>Stories, insight, and <em>change in action.</em></h2>
            <a class="textlink textlink-dark" href="{{ route('journal') }}">Read the blog →</a>
        </div>
        <p class="section-lead">Updates from Beacon Harbor as we build our programs, our partnerships, and our presence across Greater Boston.</p>
    </div>
    <x-cards type="article" :limit="3"/>
</section>

<section class="closing-cta">
    <div class="wrap closing-cta-inner reveal">
        <div>
            <span class="eyebrow">Get Involved</span>
            <h2>Help us build a stronger harbor for Boston's youth.</h2>
            <p>Partnerships across Greater Boston that make communities more resilient.</p>
        </div>
        <div class="actions">
            <a class="pill donate-cta" href="{{ route('involvement') }}">Get Involved <b>↗</b></a>
            <a class="textlink" href="{{ route('community') }}">Our Focus Area →</a>
        </div>
    </div>
</section>
