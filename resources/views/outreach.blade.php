<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>{{ $title }}{{ $page === 'home' ? ' | Greater Boston' : ' | Beacon Harbor' }}</title>
        <meta name="description" content="{{ $description }}">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:title" content="{{ $title }} | Beacon Harbor">
        <meta property="og:type" content="{{ $page === 'article' ? 'article' : 'website' }}">
        <meta property="og:site_name" content="Beacon Harbor Youth Outreach Initiative">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ secure_asset('images/beacon-harbor-social.png') }}">
        <meta property="og:image:secure_url" content="{{ secure_asset('images/beacon-harbor-social.png') }}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Beacon Harbor Youth Outreach Initiative emblem: a lighthouse over a wave, held by two open hands">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $title }} | Beacon Harbor">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ secure_asset('images/beacon-harbor-social.png') }}">
        <meta name="twitter:image:alt" content="Beacon Harbor Youth Outreach Initiative emblem: a lighthouse over a wave, held by two open hands">
        <meta name="theme-color" content="#173f4b">
        <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
        <link rel="icon" type="image/png" sizes="640x640" href="{{ asset('images/beacon-harbor-logo.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/beacon-harbor-logo.png') }}">
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => config('outreach.organization.name'),
                'url' => route('home'),
                'logo' => asset('images/beacon-harbor-logo.png'),
                'email' => config('outreach.contact.email'),
                'telephone' => config('outreach.contact.phone_uri'),
                'areaServed' => 'Greater Boston, Massachusetts',
            ], JSON_HEX_TAG | JSON_UNESCAPED_SLASHES) !!}
        </script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <a class="skip" href="#main">Skip to content</a>

        <canvas id="particle-field" aria-hidden="true"></canvas>
        <div id="scroll-progress" aria-hidden="true"></div>

        @include('partials.site-header')

        <main id="main">
            @if($page === 'home')
                @include('pages.home')
            @else
                @php
                    $pageHeroImage = match ($page) {
                        'about' => 'community',
                        'programs' => 'learning',
                        'community' => 'friends',
                        'journal' => 'pathways',
                        'projects' => 'community',
                        'involvement' => 'learning',
                        'contact' => 'friends',
                        'privacy' => 'pathways',
                        'program', 'article' => match ($entry[2] ?? '') {
                            'community' => 'friends',
                            'friends' => 'learning',
                            'learning' => 'pathways',
                            'pathways' => 'community',
                            default => 'community',
                        },
                        default => 'community',
                    };
                @endphp

                <div class="page-shell">
                    <section class="page-hero page-hero--{{ $page }}">
                        <x-photo :name="$pageHeroImage" :hero="true" class="page-hero-image"/>
                        <div class="page-hero-scrim" aria-hidden="true"></div>
                        <div class="wrap page-hero-inner">
                            <nav class="page-breadcrumb page-hero-breadcrumb" aria-label="Breadcrumb">
                                <a class="crumb" href="{{ route('home') }}">Home</a>
                                <span aria-hidden="true"> / </span>
                                @if(isset($entry))
                                    <a class="crumb" href="{{ route($page === 'program' ? 'programs' : 'journal') }}">{{ $page === 'program' ? 'Programs' : 'Blog' }}</a>
                                    <span aria-hidden="true"> / </span>
                                @endif
                                <span>{{ $entry[1] ?? $title }}</span>
                            </nav>

                            <div class="page-hero-copy reveal">
                                <span class="eyebrow">{{ $entry[1] ?? 'Beacon Harbor / Youth Outreach' }}</span>
                                <h1>{{ $title }}<em>.</em></h1>
                                <p>{{ $description }}</p>
                                <div class="page-hero-actions">
                                    <a class="pill donate-cta" href="{{ $page === 'contact' ? route('contact').'#message' : route('contact') }}">
                                        {{ $page === 'contact' ? 'Send us a message' : 'Talk with our team' }} <b>↗</b>
                                    </a>
                                    <a class="textlink" href="{{ route($page === 'programs' ? 'projects' : 'programs') }}">
                                        {{ $page === 'programs' ? 'Explore our projects' : 'Explore our programs' }} <b>→</b>
                                    </a>
                                </div>
                            </div>

                            <div class="page-hero-brand reveal" aria-hidden="true">
                                <img src="{{ asset('images/beacon-harbor-logo.png') }}" alt="" width="68" height="68">
                                <span><strong>Beacon Harbor</strong><small>Quincy, Massachusetts</small></span>
                            </div>
                        </div>
                    </section>

                    <div class="wrap page-content">
                        @include('outreach-content')
                    </div>
                </div>
            @endif
        </main>

        @include('partials.site-footer')
    </body>
</html>

