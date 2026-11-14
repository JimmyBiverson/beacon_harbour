<header id="site-header" class="site-header">
    <div class="wrap header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Beacon Harbor home">
            <img src="{{ asset('images/emblem-400.webp') }}" alt="" width="48" height="48">
            <span>
                Beacon Harbor
                <small>Youth Outreach Initiative</small>
            </span>
        </a>

        <nav id="nav" class="nav" aria-label="Main navigation">
            @foreach(['about' => 'Our story', 'programs' => 'Programs', 'community' => 'Where we work', 'journal' => 'Field notes', 'contact' => 'Contact'] as $key => $label)
                <a @if($key === $page || ($key === 'programs' && $page === 'program') || ($key === 'journal' && $page === 'article')) aria-current="page" @endif href="{{ route($key) }}">{{ $label }}</a>
            @endforeach
        </nav>

        <a class="pill dark header-cta" href="{{ route('involvement') }}">Get involved <b>↗</b></a>
        <button id="toggle" hidden aria-expanded="false" aria-controls="nav">Menu ☰</button>
    </div>
</header>
