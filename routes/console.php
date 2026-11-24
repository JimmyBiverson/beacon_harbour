<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('outreach:inquiries {--limit=20}', function (): void {
    $rows = DB::table('inquiries')->latest('id')
        ->limit(max(1, min(100, (int) $this->option('limit'))))
        ->get(['id', 'created_at', 'subject', 'name', 'email', 'message']);
    $this->table(['ID', 'Received', 'Topic', 'Name', 'Reply to', 'Message'], $rows->map(fn ($row) => (array) $row)->all());
})->purpose('Review recent website inquiries from the staff console');
