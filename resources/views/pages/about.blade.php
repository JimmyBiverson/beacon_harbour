<div class="feature">
    <x-photo name="friends" :hero="true"/>
    <div>
        <span class="eyebrow">Our purpose</span>
        <h2>A place to steady.<br><em>A light to steer by.</em></h2>
        <p>Beacon Harbor Youth Outreach Initiative, Inc. is based in Quincy, Massachusetts. We focus on young people facing homelessness, housing instability or substance-use risk across Greater Boston.</p>
        <p>Our vision is for every young person facing those challenges to have the resources and support to reach their potential.</p>
    </div>
</div>

<h2 class="subhead">What we stand for</h2>
<div class="tiles">
    @foreach([
        'Empowerment' => 'Young people set goals that matter to them and gain tools to act on their choices.',
        'Inclusion' => 'Every young person deserves dignity, regardless of race, religion, gender or background.',
        'Integrity' => 'We are open about what we learn and accountable for how we work.',
        'Compassion' => 'We listen before offering advice, and respect each person’s experience.',
        'Collaboration' => 'We build on the trust that schools and community organizations have already earned.',
        'Shared learning' => 'We share practical lessons so other communities can build on them.',
    ] as $title => $text)
        <div>
            <span class="eyebrow">0{{ $loop->iteration }}</span>
            <h3>{{ $title }}</h3>
            <p>{{ $text }}</p>
        </div>
    @endforeach
</div>
