@props(['eyebrow', 'title', 'copy' => null, 'href', 'label', 'image' => 'community'])
@php($headingId = 'pinned-cta-'.Illuminate\Support\Str::slug($title))
<section {{ $attributes->merge(['class' => 'pinned-cta-scroll']) }} data-pinned-cta-scroll>
    <section class="pinned-cta" data-pinned-cta aria-labelledby="{{ $headingId }}">
        <div class="pinned-cta__media" data-pinned-cta-media aria-hidden="true">
            <x-photo :name="$image" class="pinned-cta__image"/>
        </div>
        <svg class="pinned-cta__ring" data-pinned-cta-ring viewBox="0 0 100 100" aria-hidden="true" focusable="false">
            <circle cx="50" cy="50" r="46" fill="none" stroke="currentColor" stroke-width="1.1"></circle>
        </svg>
        <div class="pinned-cta__content" data-pinned-cta-content>
            <span class="eyebrow">{{ $eyebrow }}</span>
            <h2 id="{{ $headingId }}">{{ $title }}</h2>
            @if($copy)
                <p>{{ $copy }}</p>
            @endif
            <a class="pill donate-cta" href="{{ $href }}">{{ $label }} <b>↗</b></a>
        </div>
    </section>
</section>
