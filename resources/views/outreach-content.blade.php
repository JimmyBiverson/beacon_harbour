@php
    $contentView = match ($page) {
        'home' => 'pages.home',
        'about' => 'pages.about',
        'programs' => 'pages.programs',
        'community' => 'pages.community',
        'journal' => 'pages.journal',
        'involvement' => 'pages.involvement',
        'contact' => 'pages.contact',
        'privacy' => 'pages.privacy',
        'program' => 'pages.program',
        'article' => 'pages.article',
        default => 'pages.home',
    };
@endphp

@include($contentView)
