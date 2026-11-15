<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Our projects</span>
        <div class="split"><h2>Programs that create <em>opportunity.</em></h2></div>
        <p class="section-lead">Our initiatives are designed to meet the real needs of young people across Greater Boston — today, and as our organization grows.</p>
    </div>

    <div class="project-grid">
        @foreach(config('outreach.projects') as $project)
            <article class="project-card reveal">
                <div class="project-image">
                    <x-photo :name="$project[2]"/>
                    <span class="project-number">0{{ $loop->iteration }}</span>
                </div>
                <div class="project-copy">
                    <span class="eyebrow">{{ $project[1] }}</span>
                    <h3>{{ $project[0] }}</h3>
                    <p>{{ $project[3] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">How we sustain this work</span>
            <div class="split"><h2>Diversified, <em>responsible support.</em></h2></div>
            <p class="section-lead">We're building a sustainable organization through a mix of community partnerships, individual giving, and institutional support — while staying focused on programs that create real impact.</p>
        </div>
        <div class="approach-cards project-process">
            @foreach(config('outreach.funding_sources') as $source)
                <article class="approach-card reveal">
                    <span>0{{ $loop->iteration }}</span>
                    <h3>{{ $source }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="closing-cta">
    <div class="wrap closing-cta-inner reveal">
        <div>
            <span class="eyebrow">Have a project idea?</span>
            <h2>Bring us a question your community is working through.</h2>
            <p>We welcome thoughtful introductions from schools, youth organizations, caregivers and other community partners.</p>
        </div>
        <a class="pill donate-cta" href="{{ route('contact', ['topic' => 'Partnership']) }}#message">Start a conversation <b>↗</b></a>
    </div>
</section>
