<section class="hero-shell home-hero">
    <x-photo name="community" :hero="true" class="hero-backdrop" aria-hidden="true"/>
    <div class="wrap hero-grid">
        <div class="hero-copy reveal">
            <span class="tag"><i></i> Quincy, Massachusetts</span>
            <h1>Beacon Harbor Youth Outreach Initiative, Inc.</h1>
            <p class="hero-tagline">Empowering At-Risk Youth. Creating Opportunities. Building Stronger Communities.</p>
            <p>Beacon Harbor Youth Outreach Initiative, Inc. is a Massachusetts nonprofit connecting at-risk and homeless youth in Greater Boston with tailored support, mentorship, life-skills development, educational opportunities, and community resources.</p>
            <div class="actions">
                <a class="pill dark" href="{{ route('about') }}">Learn More About Us <b>→</b></a>
                <a class="pill donate-cta" href="{{ route('involvement') }}">Get Involved <b>→</b></a>
            </div>
        </div>

        <div class="hero-media reveal" data-slider aria-label="Beacon Harbor youth outreach images">
            <div class="slide is-active">
                <img src="{{ asset('images/community-800.webp') }}" alt="Young people and community members together outdoors" width="800" height="600" loading="eager" decoding="async">
            </div>
            <div class="slide">
                <img src="{{ asset('images/friends-800.webp') }}" alt="Young people sharing time and building connection" width="800" height="600" loading="lazy" decoding="async">
            </div>
            <div class="slide">
                <img src="{{ asset('images/pathways-800.webp') }}" alt="Students walking together across a campus" width="800" height="600" loading="lazy" decoding="async">
            </div>
            <div class="slide">
                <img src="{{ asset('images/learning-800.webp') }}" alt="Young people gathered around a study table" width="800" height="600" loading="lazy" decoding="async">
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

<section class="home-pillars" aria-label="Our mission, vision, values, and approach">
    <div class="wrap home-pillars-grid">
        <article class="home-pillar">
            <span class="home-pillar-icon" aria-hidden="true">M</span>
            <h2>Our Mission</h2>
            <p>Connect at-risk and homeless youth in Greater Boston with tailored services and support.</p>
        </article>
        <article class="home-pillar">
            <span class="home-pillar-icon" aria-hidden="true">V</span>
            <h2>Our Vision</h2>
            <p>Every young person has the resources and support to reach their potential.</p>
        </article>
        <article class="home-pillar">
            <span class="home-pillar-icon" aria-hidden="true">♥</span>
            <h2>Our Values</h2>
            <p>Empowerment, inclusion, integrity, compassion, collaboration, and learning.</p>
        </article>
        <article class="home-pillar">
            <span class="home-pillar-icon" aria-hidden="true">↗</span>
            <h2>Our Approach</h2>
            <p>A community-centered, youth-focused approach that creates lasting change.</p>
        </article>
    </div>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">What We Do</span>
            <div class="split">
                <h2>Programs and resources to help young people thrive.</h2>
                <a class="textlink textlink-dark" href="{{ route('programs') }}">Explore Our Programs →</a>
            </div>
            <p class="section-lead">From mentorship and life skills to education, career development, and wellness, we connect young people with opportunities to build a brighter future.</p>
        </div>
        <x-cards type="service" :limit="6"/>
    </div>
</section>

<section class="wrap section-block impact-section">
    <div class="impact-image reveal">
        <x-photo name="community"/>
    </div>
    <div class="impact-copy reveal">
        <span class="eyebrow">Our Impact</span>
        <h2>Together, we can create more opportunities for young people.</h2>
        <p>By listening, building trusted partnerships, and offering practical support, we work toward stronger, more inclusive communities in Greater Boston.</p>
        <a class="pill donate-cta" href="{{ route('contact') }}">Partner With Us <b>→</b></a>
    </div>
    <ul class="impact-points">
        <li>Youth empowerment</li>
        <li>Community partnerships</li>
        <li>Brighter futures</li>
    </ul>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">Our name, our purpose</span>
            <div class="split">
                <h2>A beacon of hope. <em>A harbor of support.</em></h2>
                <a class="textlink textlink-dark" href="{{ route('about') }}">More About Us →</a>
            </div>
            <p class="section-lead">A beacon represents direction and possibility. A harbor represents safety, belonging, and support. Together, they describe the future we want every young person to be able to navigate.</p>
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
        <p class="section-lead">Updates from Beacon Harbor as we build our programs, our partnerships, and our presence across New England.</p>
    </div>
    <x-cards type="article" :limit="3"/>
</section>

<x-pinned-cta
    eyebrow="Get Involved"
    title="Join us in empowering young people."
    copy="Whether you volunteer, partner, or support our mission, you can help build brighter futures."
    href="{{ route('involvement') }}"
    label="Get Involved"
    image="friends"
/>
