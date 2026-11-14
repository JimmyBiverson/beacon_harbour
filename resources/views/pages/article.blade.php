<div class="feature">
    <x-photo :name="$entry[2]" :hero="true"/>
    <div>
        <span class="eyebrow">Field notes / Beacon Harbor</span>
        <h2>A closer look</h2>
        <p>{{ $entry[4] }}</p>
        <p>{{ $entry[5] }}</p>
        <a class="textlink" href="{{ route('journal') }}">All field notes →</a>
    </div>
</div>
