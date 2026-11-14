<div class="tiles">
    @foreach([
        'Volunteering' => ['Give your time', 'Tell us about the skills you enjoy sharing, your availability and the kind of youth outreach you would like to support.'],
        'Partnership' => ['Open a door', 'Schools, businesses and community groups can help connect young people with learning opportunities, career conversations and local resources.'],
        'Giving' => ['Support the work', 'Ask about individual donations, grants or institutional support. Contact the team for current giving options before sending funds.'],
    ] as $topic => [$heading, $body])
        <div>
            <span class="eyebrow">0{{ $loop->iteration }} / {{ $topic }}</span>
            <h2>{{ $heading }}</h2>
            <p>{{ $body }}</p>
            <a class="textlink" href="{{ route('contact', ['topic' => $topic]) }}#message">Get in touch →</a>
        </div>
    @endforeach
</div>
