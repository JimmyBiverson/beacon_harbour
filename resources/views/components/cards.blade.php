@props(['type','limit'=>null])
@php
    $cards = match ($type) {
        'service' => config('outreach.services'),
        'program' => config('outreach.programs'),
        default => config('outreach.articles'),
    };
@endphp

<div class="cards">
    @foreach(array_slice($cards, 0, $limit, true) as $slug => $card)
        @if($type === 'service')
            <article class="card reveal">
        @else
            <a class="card reveal" href="{{ route($type, $slug) }}">
        @endif
            <div class="crop"><x-photo :name="$card[2]"/></div>
            <div class="cardtext">
                <span class="eyebrow">{{ $card[1] }}</span>
                <h3>{{ $card[0] }}</h3>
                <p>{{ $card[3] }}</p>
                @if($type !== 'service')
                    <span class="textlink">{{ $type === 'program' ? 'Explore program' : 'Read the story' }} <b>↗</b></span>
                @endif
            </div>
        @if($type === 'service')
            </article>
        @else
            </a>
        @endif
    @endforeach
</div>
