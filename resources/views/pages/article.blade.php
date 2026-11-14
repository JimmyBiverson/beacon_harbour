<article class="article-page">
<div class="feature">
    <x-photo :name="$entry[2]" :hero="true"/>
    <div>
        <span class="eyebrow">Field notes / Beacon Harbor</span>
        <h2>A closer look</h2>
        <p>{{ $entry[4] }}</p>
        <p>{{ $entry[5] }}</p>
        <a class="textlink" href="{{ route('journal') }}">All field notes →</a>
    </div>

    <div class="article-reflection reveal">
        <span class="eyebrow">A thought to carry forward</span>
        <blockquote>Good support begins with curiosity about what a young person already knows, values and hopes to do.</blockquote>
        <p>These field notes are a starting point for conversation. Every young person and community is different, so practical support should leave room for their priorities and context.</p>
    </div>

    <section class="section-tint article-related">
        <div class="wrap section-block">
            <div class="section-header reveal">
                <span class="eyebrow">Keep exploring</span>
                <div class="split"><h2>More notes from <em>the harbor.</em></h2></div>
            </div>
            <x-cards type="article" :limit="3"/>
        </div>
    </section>
    </article>
</div>
