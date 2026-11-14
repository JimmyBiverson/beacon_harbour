<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    public function page(string $page): View
    {
        [$title,$description] = config('outreach.pages')[$page];

        return view('outreach', compact('page', 'title', 'description'));
    }

    public function program(string $slug): View
    {
        return $this->detail('programs', $slug);
    }

    public function article(string $slug): View
    {
        return $this->detail('articles', $slug);
    }

    private function detail(string $section, string $slug): View
    {
        $entry = config("outreach.$section")[$slug] ?? null;
        abort_if(! $entry, 404);

        return view('outreach', ['page' => $section === 'programs' ? 'program' : 'article', 'title' => $entry[0], 'description' => $entry[3], 'entry' => $entry]);
    }

    public function inquire(Request $request): RedirectResponse
    {
        $fields = $request->validate(['name' => 'required|string|max:120', 'email' => 'required|email|max:254', 'subject' => 'required|in:Youth programs,Partnership,Volunteering,Giving,General inquiry', 'message' => 'required|string|max:3000']);
        DB::table('inquiries')->insert([...$fields, 'created_at' => now(), 'updated_at' => now()]);

        return redirect(route('contact').'#message')->with('received', true);
    }

    public function sitemap(): Response
    {
        $urls = array_map(fn (string $page) => route($page), array_keys(config('outreach.pages')));
        foreach (['programs' => 'program', 'articles' => 'article'] as $group => $name) {
            foreach (array_keys(config("outreach.$group")) as $slug) {
                $urls[] = route($name, $slug);
            }
        }

        return response()->view('sitemap', compact('urls'))->header('Content-Type', 'application/xml');
    }
}
