<article class="article-page">
<div class="feature">
    <x-photo :name="$entry[2]" :hero="true"/>
    <div>
        <span class="eyebrow">{{ $entry[1] }}</span>
        <h2>{{ $entry[0] }}</h2>
        <p>{{ $entry[4] }}</p>
        <p>{{ $entry[5] }}</p>
        <a class="textlink" href="{{ route('journal') }}">All blog posts →</a>
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
