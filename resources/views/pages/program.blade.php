<div class="feature detail-feature">
    <x-photo :name="$entry[2]"/>
    <div>
        <span class="eyebrow">Inside the program</span>
        <h2>What this looks like</h2>
        <p>{{ $entry[4] }}</p>

        <h3>Areas of focus</h3>
        <ul>
            @foreach(explode(' · ', $entry[5]) as $focus)
                <li>{{ $focus }}</li>
            @endforeach
        </ul>

        <a class="pill dark" href="{{ route('contact', ['topic' => 'Youth programs']) }}#message">Ask about this program ↗</a>
    </div>

    <section class="section-tint detail-support">
        <div class="wrap section-block">
            <div class="section-header reveal">
                <span class="eyebrow">A useful place to begin</span>
                <div class="split"><h2>Make the next step <em>your own.</em></h2></div>
                <p class="section-lead">There is no single right way to take part. A conversation can help you decide whether this focus area fits your interests and what kind of support would be useful.</p>
            </div>
            <div class="approach-cards">
                <article class="approach-card reveal"><span>01</span><h3>Ask a question</h3><p>Tell us what you want to understand or what you would like to try.</p></article>
                <article class="approach-card reveal"><span>02</span><h3>Talk it through</h3><p>Explore the focus, your goals and any questions about getting involved.</p></article>
                <article class="approach-card reveal"><span>03</span><h3>Choose a next step</h3><p>Decide what feels useful now. You can revisit your plans as things change.</p></article>
            </div>
        </div>
    </section>

    <x-pinned-cta
        eyebrow="Want to know more?"
        title="Talk with Beacon Harbor about this program."
        href="{{ route('contact', ['topic' => 'Youth programs']) }}#message"
        label="Ask a question"
        :image="$entry[2]"
    />
</div>
