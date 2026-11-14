<section class="projects-intro reveal">
    <span class="eyebrow">Our projects</span>
    <h2>Small steps can open <em>new pathways.</em></h2>
    <p>Our projects grow from the everyday priorities young people bring to us. Explore the focus areas below to see how practical learning, wellbeing and community connections come together in our work.</p>
</section>

<section class="wrap section-block">
    <div class="section-header reveal">
        <span class="eyebrow">Current areas of focus</span>
        <div class="split"><h2>Ideas made <em>practical.</em></h2></div>
        <p class="section-lead">Each initiative is an invitation to learn and explore—not a one-size-fits-all path. Select a focus area to read more about what it can involve.</p>
    </div>

    <div class="project-grid">
        @foreach(config('outreach.programs') as $slug => $project)
            <article class="project-card reveal">
                <a class="project-image" href="{{ route('program', $slug) }}">
                    <x-photo :name="$project[2]"/>
                    <span class="project-number">0{{ $loop->iteration }}</span>
                </a>
                <div class="project-copy">
                    <span class="eyebrow">{{ $project[1] }}</span>
                    <h3><a href="{{ route('program', $slug) }}">{{ $project[0] }}</a></h3>
                    <p>{{ $project[3] }}</p>
                    <p>{{ $project[4] }}</p>
                    <a class="textlink textlink-dark" href="{{ route('program', $slug) }}">Explore this focus <b>→</b></a>
                </div>
            </article>
        @endforeach
    </div>
</section>

<section class="section-tint">
    <div class="wrap section-block">
        <div class="section-header reveal">
            <span class="eyebrow">How projects take shape</span>
            <div class="split"><h2>From listening to <em>learning together.</em></h2></div>
        </div>
        <div class="approach-cards project-process">
            <article class="approach-card reveal"><span>01</span><h3>Hear what matters</h3><p>Begin with young people, families and local partners: what is working, and where would useful support make a difference?</p></article>
            <article class="approach-card reveal"><span>02</span><h3>Make a shared plan</h3><p>Connect interests with a practical activity, a trusted relationship or a community resource that can support a next step.</p></article>
            <article class="approach-card reveal"><span>03</span><h3>Reflect and adapt</h3><p>Stay open to feedback and adjust the approach as needs, goals and circumstances change.</p></article>
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
