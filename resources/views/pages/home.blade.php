<section class="hero-shell">
    <div class="wrap hero-grid">
        <div class="hero-copy reveal">
            <span class="tag"><i></i> Quincy, Massachusetts</span>
            <h1>Stronger youth.<br><em>Brighter</em><br>tomorrows.</h1>
            <p>We connect young people across Greater Boston with the support, skills and opportunities to find their own way forward.</p>
            <div class="actions">
                <a class="pill dark" href="{{ route('programs') }}">Explore programs <b>↗</b></a>
                <a class="textlink" href="{{ route('about') }}">Our story <b>→</b></a>
            </div>
            <ul class="mini-stats">
                <li><strong>6</strong><span>programs</span></li>
                <li><strong>1,200+</strong><span>young people supported</span></li>
                <li><strong>18+</strong><span>community partners</span></li>
            </ul>
        </div>

        <div class="hero-media reveal" data-slider>
            <div class="slide is-active">
                <img src="{{ asset('images/community-800.webp') }}" alt="Youth and community members together outdoors">
            </div>
            <div class="slide">
                <img src="{{ asset('images/friends-800.webp') }}" alt="Young people standing together in a supportive setting">
            </div>
            <div class="slide">
                <img src="{{ asset('images/pathways-800.webp') }}" alt="Students walking together on a learning pathway">
            </div>
            <div class="slide">
                <img src="{{ asset('images/learning-800.webp') }}" alt="Young people learning together at a table">
            </div>

            <div class="slider-overlay">
                <span class="eyebrow">Beacon Harbor</span>
                <h2>Community-first youth support</h2>
            </div>

            <div class="slider-dots" aria-label="Image slider controls">
                <button class="slider-dot is-active" type="button" aria-label="Show slide 1" aria-pressed="true"></button>
                <button class="slider-dot" type="button" aria-label="Show slide 2" aria-pressed="false"></button>
                <button class="slider-dot" type="button" aria-label="Show slide 3" aria-pressed="false"></button>
                <button class="slider-dot" type="button" aria-label="Show slide 4" aria-pressed="false"></button>
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

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">01 / Our programs</span>
        <div class="split">
            <h2>Tools for the <em>next step.</em></h2>
            <a class="textlink" href="{{ route('programs') }}">All six programs →</a>
        </div>
    </div>
    <x-cards type="program" :limit="3"/>
</section>

<section class="impact-spotlight">
    <div class="wrap impact-wrap reveal">
        <span class="eyebrow">The idea behind our name</span>
        <blockquote>“Every young person deserves a harbor — and a light to steer by.”</blockquote>
        <a class="pill light" href="{{ route('about') }}">Meet Beacon Harbor ↗</a>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">02 / Field notes</span>
        <div class="split">
            <h2>From the <em>harbor.</em></h2>
            <a class="textlink" href="{{ route('journal') }}">Visit the journal →</a>
        </div>
    </div>
    <x-cards type="article" :limit="3"/>
</section>
