<header id="site-header" class="site-header">
    <div class="wrap header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Beacon Harbor home">
            <img src="{{ asset('images/beacon-harbor-logo.png') }}" alt="" width="48" height="48">
            <span>
                Beacon Harbor
                <small>Youth Outreach Initiative</small>
            </span>
        </a>

        <nav id="nav" class="nav" aria-label="Main navigation">
            <a @if($page === 'about') aria-current="page" @endif href="{{ route('about') }}">About us</a>
            <div class="nav-group">
                <a @if(in_array($page, ['programs', 'program', 'community'], true)) aria-current="page" @endif href="{{ route('what-we-do') }}">What we do <span aria-hidden="true">⌄</span></a>
                <div class="nav-submenu">
                    <a href="{{ route('programs') }}">Our programs</a>
                    <a href="{{ route('community') }}">Where we work</a>
                </div>
            </div>
            <a @if($page === 'projects') aria-current="page" @endif href="{{ route('projects') }}">Our projects</a>
            <a @if(in_array($page, ['journal', 'article'], true)) aria-current="page" @endif href="{{ route('journal') }}">Blogs</a>
            <a @if($page === 'contact') aria-current="page" @endif href="{{ route('contact') }}">Contact us</a>
            <a class="pill donate-cta mobile-donate" href="{{ route('involvement') }}#giving">Donate <b>↗</b></a>
        </nav>

        <a class="pill donate-cta header-cta" href="{{ route('involvement') }}#giving">Donate <b>↗</b></a>
        <button id="toggle" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="nav">Menu <span aria-hidden="true">☰</span></button>
    </div>
</header>
