<section class="page-feature feature">
    <x-photo name="pathways"/>
    <div>
        <span class="eyebrow">Where we work</span>
        <h2>Quincy & Massachusetts. Stronger together.</h2>
        <p>Beacon Harbor Youth Outreach Initiative, Inc. is organized under the laws of the Commonwealth of Massachusetts and based in Quincy. We primarily serve young people across Quincy and Massachusetts, while engaging families, caregivers, schools, and community organizations as partners in that work.</p>
        <p>As our programs and partnerships develop, we may extend collaborations beyond our immediate geographic area — wherever it's consistent with our mission.</p>
        <a class="pill donate-cta" href="{{ route('contact', ['topic' => 'Partnership']) }}#message">Partner With Us ↗</a>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Our focus area</span>
        <div class="split"><h2>Based in Quincy, <em>serving Massachusetts.</em></h2></div>
        <p class="section-lead">Stronger communities, brighter futures.</p>
    </div>
    <div class="approach-cards">
        <article class="approach-card reveal">
            <span>01</span>
            <h3>Youth</h3>
            <p>Young people navigating homelessness, housing instability, or substance-use risk across Quincy and Massachusetts.</p>
        </article>
        <article class="approach-card reveal">
            <span>02</span>
            <h3>Families &amp; caregivers</h3>
            <p>Households we engage alongside youth, recognizing the role they play in long-term stability.</p>
        </article>
        <article class="approach-card reveal">
            <span>03</span>
            <h3>Schools &amp; community orgs</h3>
            <p>Partners already working with young people, whose reach and trust we build on rather than duplicate.</p>
        </article>
    </div>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">Who we partner with</span>
            <div class="split"><h2>Building a wider circle of <em>support.</em></h2></div>
        </div>
        <div class="approach-cards">
            @foreach([
                'Schools & educational institutions',
                'Youth-serving organizations',
                'Municipal & public agencies',
                'Local businesses',
                'Foundations & philanthropy',
                'Faith & community groups',
                'Families & caregivers',
                'Volunteers & supporters',
            ] as $partner)
                <article class="approach-card reveal">
                    <span>0{{ $loop->iteration }}</span>
                    <h3>{{ $partner }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Expected impact</span>
        <div class="split"><h2>Building stronger, <em>healthier communities.</em></h2></div>
        <p class="section-lead">Through partnerships and community-based initiatives, we aim to connect youth with resources, guidance, and supportive networks.</p>
    </div>
    <div class="approach-cards">
        @foreach([
            'Increased access to positive opportunities for youth',
            'Stronger mentoring and support networks',
            'Better connections between families and community resources',
            'Deeper collaboration among organizations serving young people',
        ] as $impact)
            <article class="approach-card reveal">
                <span>—</span>
                <h3>{{ $impact }}</h3>
            </article>
        @endforeach
    </div>
</section>

<x-pinned-cta
    eyebrow="Quincy, Massachusetts"
    title="Stronger communities, brighter futures."
    href="{{ route('contact', ['topic' => 'Partnership']) }}#message"
    label="Partner With Us"
    image="community"
/>
