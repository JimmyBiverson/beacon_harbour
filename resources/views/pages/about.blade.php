<section class="page-feature feature">
    <x-photo name="friends" :hero="true"/>
    <div>
        <span class="eyebrow">Our purpose</span>
        <h2>A place to steady.<br><em>A light to steer by.</em></h2>
        <p>Beacon Harbor Youth Outreach Initiative, Inc. is a Quincy-based organization working alongside young people facing homelessness, housing instability or substance-use risk across Greater Boston.</p>
        <p>A beacon offers direction; a harbor offers shelter. We bring those ideas together by making practical support easier to find and giving young people room to decide where they want to go.</p>
        <a class="textlink textlink-dark" href="{{ route('programs') }}">Explore what we do <b>→</b></a>
    </div>
</section>

<section class="story-section section-tint">
    <div class="wrap story-grid section-block">
        <div class="story-copy reveal">
            <span class="eyebrow">Our story</span>
            <h2>Rooted in Quincy.<br><em>Built around possibility.</em></h2>
            <p>Housing instability can make ordinary decisions feel complicated. Finding a safe place to spend the day, keeping up with school or work, and knowing which person to ask for help can all require time and energy.</p>
            <p>Beacon Harbor exists to make those next steps feel more manageable. We bring youth outreach, practical skill-building and community connection into one welcoming approach—one that sees each young person as a whole person, not a problem to solve.</p>
            <p>Our work is shaped by the people who take part in it. Listening to young people, families and local partners helps us understand what is useful, where connections are missing and how support can meet people with respect.</p>
        </div>
        <aside class="story-note reveal">
            <span class="eyebrow">What our name means</span>
            <blockquote>“Direction when you need it. A safe place to gather yourself.”</blockquote>
            <p>Guidance matters most when people have the space and support to choose their own direction.</p>
        </aside>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">How we work</span>
        <div class="split">
            <h2>Listen first. <em>Build together.</em></h2>
        </div>
        <p class="section-lead">We aim to make support clear, practical and shaped by the young people and communities closest to the work.</p>
    </div>
    <div class="approach-cards">
        <article class="approach-card reveal"><span>01</span><h3>Start with voice</h3><p>We make time to hear what young people say matters to them and respect their choices about what they share.</p></article>
        <article class="approach-card reveal"><span>02</span><h3>Make it practical</h3><p>We turn broad goals into useful skills, manageable steps and connections people can return to.</p></article>
        <article class="approach-card reveal"><span>03</span><h3>Strengthen trusted ties</h3><p>We look for ways to work alongside caregivers, schools and community organizations already in a young person's corner.</p></article>
        <article class="approach-card reveal"><span>04</span><h3>Learn as we go</h3><p>We stay open to feedback and use what we learn to make our approach more relevant and welcoming.</p></article>
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
                'Empowerment' => 'Young people set goals that matter to them and gain tools to act on their choices.',
                'Inclusion' => 'Every young person deserves dignity, regardless of race, religion, gender or background.',
                'Integrity' => 'We are open about what we learn and accountable for how we work.',
                'Compassion' => 'We listen before offering advice, and respect each person’s experience.',
                'Collaboration' => 'We build on the trust that schools and community organizations have already earned.',
                'Shared learning' => 'We share practical lessons so other communities can build on them.',
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
            <span class="eyebrow">Get to know the work</span>
            <h2>There is more than one way to make a difference.</h2>
            <p>Learn about our programs, share a community connection or start a conversation with our team.</p>
        </div>
        <div class="actions">
            <a class="pill donate-cta" href="{{ route('programs') }}">What we do <b>↗</b></a>
            <a class="textlink" href="{{ route('contact') }}">Contact us →</a>
        </div>
    </div>
</section>
