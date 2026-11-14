@props(['type','limit'=>null])
<div class="cards">@foreach(array_slice(config('outreach.'.($type==='program'?'programs':'articles')),0,$limit,true) as $slug=>$card)
<a class="card reveal" href="{{ route($type,$slug) }}"><div class="crop"><x-photo :name="$card[2]"/></div><div class="cardtext"><span class="eyebrow">{{ $card[1] }}</span><h3>{{ $card[0] }}</h3><p>{{ $card[3] }}</p><span class="textlink">{{ $type==='program'?'Explore program':'Read field note' }} <b>↗</b></span></div></a>
@endforeach</div>
