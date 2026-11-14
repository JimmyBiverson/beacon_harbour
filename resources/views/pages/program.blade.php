<div class="feature">
    <x-photo :name="$entry[2]" :hero="true"/>
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
</div>
