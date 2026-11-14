<section class="hero-shell">
    <div class="wrap hero-grid">
        <div class="hero-copy reveal">
            <span class="tag"><i></i> Quincy, Massachusetts</span>
            <h1>Stronger youth.<br><em>Brighter</em><br>tomorrows.</h1>
            <p>Every young person deserves people in their corner, practical tools for the next step and room to shape a future on their own terms.</p>
            <div class="actions">
                <a class="pill donate-cta" href="{{ route('programs') }}">Explore what we do <b>↗</b></a>
                <a class="textlink" href="{{ route('about') }}">Meet Beacon Harbor <b>→</b></a>
            </div>
            <ul class="mini-stats" aria-label="Beacon Harbor at a glance">
                <li><strong>Six</strong><span>connected program areas</span></li>
                <li><strong>Local</strong><span>roots in Quincy</span></li>
                <li><strong>Youth voice</strong><span>comes first</span></li>
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
                <h2>Support that starts with listening.</h2>
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
        <span>01 <strong>Listen</strong></span>
        <span>02 <strong>Build skills</strong></span>
        <span>03 <strong>Open pathways</strong></span>
    </div>
</div>

<section class="wrap section-block home-intro">
    <div class="home-intro-copy reveal">
        <span class="eyebrow">A steady place to begin</span>
        <h2>Young people already have strengths. <em>We help them use them.</em></h2>
        <p>Beacon Harbor Youth Outreach Initiative works alongside young people facing housing instability and other barriers to stability. We make space for their priorities, then connect those priorities with practical learning, trusted relationships and community resources.</p>
        <p>Our work begins with a conversation, not assumptions. A young person can explore what is available, choose what feels useful and take a next step at a pace that makes sense to them.</p>
        <a class="textlink textlink-dark" href="{{ route('about') }}">How we work <b>→</b></a>
    </div>
    <div class="home-intro-image reveal">
        <x-photo name="friends" :hero="true"/>
        <div class="image-note"><span class="dot"></span> A harbor offers room to pause and plan.</div>
    </div>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">Practical support, connected around you</span>
            <div class="split">
                <h2>Six ways to find <em>your next step.</em></h2>
                <a class="textlink textlink-dark" href="{{ route('programs') }}">Explore all programs →</a>
            </div>
            <p class="section-lead">From everyday life skills to career exploration, each program is designed to meet young people with useful tools and respectful support.</p>
        </div>
        <x-cards type="program" :limit="3"/>
    </div>
</section>

<section class="approach-band">
    <div class="wrap approach-band-grid">
        <div class="reveal">
            <span class="eyebrow">Our approach</span>
            <h2>Support works best when it is <em>built together.</em></h2>
            <p>Young people, caregivers and community partners bring knowledge that matters. We listen first, make plans together and leave room for each person to decide what comes next.</p>
            <a class="pill light" href="{{ route('community') }}">Meet our community <b>↗</b></a>
        </div>
        <div class="approach-steps">
            <article class="approach-step reveal">
                <span>01</span>
                <div><h3>Listen</h3><p>Start with what a young person says they need, value or want to change.</p></div>
            </article>
            <article class="approach-step reveal">
                <span>02</span>
                <div><h3>Explore</h3><p>Make options understandable and connect people with trusted resources.</p></div>
            </article>
            <article class="approach-step reveal">
                <span>03</span>
                <div><h3>Take a next step</h3><p>Build a manageable plan and recognize progress along the way.</p></div>
            </article>
        </div>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Stories and useful ideas</span>
        <div class="split">
            <h2>Notes from the <em>harbor.</em></h2>
            <a class="textlink textlink-dark" href="{{ route('journal') }}">Read the blog →</a>
        </div>
        <p class="section-lead">Reflections on youth outreach, everyday skills, wellbeing and the partnerships that make support more approachable.</p>
    </div>
    <x-cards type="article" :limit="3"/>
</section>

<section class="closing-cta">
    <div class="wrap closing-cta-inner reveal">
        <div>
            <span class="eyebrow">A conversation can be a first step</span>
            <h2>Have a question, an idea or a door to open?</h2>
            <p>Whether you are a young person, caregiver or community partner, we would be glad to hear what matters to you.</p>
        </div>
        <div class="actions">
            <a class="pill donate-cta" href="{{ route('contact') }}">Contact us <b>↗</b></a>
            <a class="textlink" href="{{ route('projects') }}">See our projects →</a>
        </div>
    </div>
</section>
