<section class="page-feature feature">
    <x-photo name="friends" :hero="true"/>
    <div>
        <span class="eyebrow">About us</span>
        <h2>Empowering young people. Building stronger communities.</h2>
        <p>Beacon Harbor Youth Outreach Initiative, Inc. is a nonprofit organization based in Quincy, Massachusetts, committed to supporting young people through youth outreach, mentorship, education, personal development, and community engagement.</p>
        <p>We believe every young person deserves a safe and supportive environment, access to meaningful opportunities, and the resources needed to build a positive and fulfilling future.</p>
        <a class="textlink textlink-dark" href="{{ route('programs') }}">See Our Programs <b>→</b></a>
    </div>
</section>

<section class="story-section section-tint">
    <div class="wrap story-grid section-block">
        <div class="story-copy reveal">
            <span class="eyebrow">Our Mission</span>
            <h2>Guidance, resources, and <em>tailored support.</em></h2>
            <p>To connect at-risk and homeless youth in Greater Boston to tailored services that address mental, socioeconomic, and psychological barriers and challenges in a safe and supportive environment.</p>
        </div>
        <aside class="story-note reveal">
            <span class="eyebrow">Our Vision</span>
            <blockquote>"That all youth exposed to homelessness and substance abuse receive the resources and support to reach their potential."</blockquote>
            <p>We envision communities where young people are valued, supported, included, and empowered to pursue their aspirations.</p>
        </aside>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Who We Are</span>
        <div class="split"><h2>Holistic support. <em>Young people at the center.</em></h2></div>
        <p class="section-lead">We recognize that young people encounter unique circumstances and barriers to education, employment, mentorship, social support, and community resources. Our holistic, inclusive approach builds confidence, life skills, healthy decision-making, personal responsibility, and pathways to long-term opportunity.</p>
    </div>
    <div class="approach-cards">
        <article class="approach-card reveal"><span>01</span><h3>Youth Outreach & Support</h3><p>Understanding individual needs, building supportive connections, and helping young people access appropriate resources.</p></article>
        <article class="approach-card reveal"><span>02</span><h3>Mentorship & Guidance</h3><p>Encouraging personal growth, confidence, responsibility, positive decision-making, and goal-setting.</p></article>
        <article class="approach-card reveal"><span>03</span><h3>Resource Connection</h3><p>Connecting young people and families with educational, social, recreational, employment, and community resources.</p></article>
    </div>
</section>

<section class="values-section">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">What we stand for</span>
            <div class="split"><h2>Our core <em>values.</em></h2></div>
        </div>
        <div class="tiles">
            @foreach([
                'Empowerment' => 'Young people should have the confidence, knowledge, and resources to shape their own futures.',
                'Inclusion' => 'Every young person is welcomed with dignity. We consider racial, religious, gender, immigrant, linguistic, cultural, and LGBTQIA identities.',
                'Integrity & transparency' => 'We conduct our work with honesty, accountability, transparency, and professionalism, sharing successes, challenges, failures, and lessons.',
                'Compassion' => 'We approach youth, families, and community members with empathy, understanding, and respect.',
                'Collaboration' => 'We strengthen Boston’s existing youth-support ecosystem rather than compete with organizations doing similar work.',
                'Learning & sharing' => 'We continuously learn and share resources and experience so qualified programs and people can adapt and expand proven approaches.',
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

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">Our Approach</span>
            <div class="split"><h2>Community-centered. <em>Impact-focused.</em></h2></div>
            <p class="section-lead">We listen to young people and communities, understand needs, identify gaps, develop practical initiatives, and collaborate with stakeholders.</p>
        </div>
        <div class="approach-cards">
            <article class="approach-card reveal"><span>01</span><h3>Responsive</h3><p>Recognizing changing needs and circumstances.</p></article>
            <article class="approach-card reveal"><span>02</span><h3>Inclusive</h3><p>Respecting individual identities, experiences, and backgrounds.</p></article>
            <article class="approach-card reveal"><span>03</span><h3>Collaborative</h3><p>Working with community partners to expand opportunities.</p></article>
            <article class="approach-card reveal"><span>04</span><h3>Sustainable</h3><p>Supporting initiatives that create lasting positive contributions.</p></article>
            <article class="approach-card reveal"><span>05</span><h3>Impact-focused</h3><p>Working toward measurable improvements in youth development and community well-being.</p></article>
        </div>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Where We Work</span>
        <div class="split"><h2>Based in Quincy. <em>Serving Greater Boston.</em></h2></div>
        <p class="section-lead">Beacon Harbor is established under the laws of the Commonwealth of Massachusetts and focuses on supporting young people and communities in Greater Boston. Where appropriate and consistent with our mission, we seek partnerships beyond our immediate area.</p>
    </div>
    <div class="approach-cards">
        @foreach([
            'Schools and educational institutions',
            'Youth-serving and community organizations',
            'Municipal and public agencies',
            'Families and caregivers',
            'Local businesses',
            'Foundations and philanthropic organizations',
            'Faith-based and community organizations',
            'Volunteers and individual supporters',
        ] as $partner)
            <article class="approach-card reveal"><span>—</span><h3>{{ $partner }}</h3></article>
        @endforeach
    </div>
</section>

<section class="story-section section-tint">
    <div class="wrap story-grid section-block">
        <div class="story-copy reveal">
            <span class="eyebrow">Why Beacon Harbor</span>
            <h2>A beacon. <em>A harbor.</em></h2>
            <p>A beacon represents guidance, direction, possibility, and hope. A harbor represents safety, belonging, connection, and support.</p>
        </div>
        <aside class="story-note reveal">
            <span class="eyebrow">Our aspiration</span>
            <blockquote>Every young person deserves a place where they feel valued, supported, and encouraged to realize their potential.</blockquote>
        </aside>
    </div>
</section>

<section class="closing-cta">
    <div class="wrap closing-cta-inner reveal">
        <div>
            <span class="eyebrow">Get Involved</span>
            <h2>Help us build a stronger harbor for Greater Boston's youth.</h2>
            <p>Every young person deserves a harbor — and a light to steer by.</p>
        </div>
        <div class="actions">
            <a class="pill donate-cta" href="{{ route('involvement') }}">Get Involved <b>↗</b></a>
            <a class="textlink" href="{{ route('community') }}">Our Focus Area →</a>
        </div>
    </div>
</section>
