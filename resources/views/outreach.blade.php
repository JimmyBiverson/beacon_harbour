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
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/'.($entry[2] ?? 'community').'-800.webp') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="theme-color" content="#112f2c">
        <link rel="icon" href="{{ asset('images/emblem-400.webp') }}">
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => 'Beacon Harbor Youth Outreach Initiative, Inc.',
                'url' => route('home'),
                'logo' => asset('images/emblem-400.webp'),
                'email' => 'info@bhyoi.org',
                'telephone' => '+14013763109',
                'areaServed' => 'Greater Boston, Massachusetts',
            ], JSON_HEX_TAG | JSON_UNESCAPED_SLASHES) !!}
        </script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <a class="skip" href="#main">Skip to content</a>

        @include('partials.site-header')

        <main id="main">
            @if($page === 'home')
                @include('pages.home')
            @else
                <div class="wrap inner page-shell">
                    <div class="page-breadcrumb reveal">
                        <a class="crumb" href="{{ route('home') }}">Home</a>
                        <span aria-hidden="true"> / </span>
                        @if(isset($entry))
                            <a class="crumb" href="{{ route($page === 'program' ? 'programs' : 'journal') }}">{{ $page === 'program' ? 'Programs' : 'Field notes' }}</a>
                            <span aria-hidden="true"> / </span>
                        @endif
                        <span>{{ $entry[1] ?? $title }}</span>
                    </div>

                    <div class="intro reveal">
                        <span class="eyebrow">{{ $entry[1] ?? 'Beacon Harbor / Youth Outreach' }}</span>
                        <h1>{{ $title }}<em>.</em></h1>
                        <p>{{ $description }}</p>
                    </div>

                    @include('outreach-content')
                </div>
            @endif
        </main>

        @include('partials.site-footer')
    </body>
</html>

