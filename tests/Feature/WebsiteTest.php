<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebsiteTest extends TestCase
{
    use RefreshDatabase;

    public function test_sitemap_discloses_working_public_pages(): void
    {
        $sitemap = simplexml_load_string($this->get('/sitemap.xml')->assertOk()->getContent());
        $this->assertCount(18, $sitemap->url);
        foreach ($sitemap->url as $url) {
            $this->get(parse_url((string) $url->loc, PHP_URL_PATH) ?: '/')->assertOk()->assertSee('rel="canonical"', false);
        }
        $this->get('/programs/unknown')->assertNotFound();
        $this->get('/journal/unknown')->assertNotFound();
    }

    public function test_inquiry_is_validated_and_saved(): void
    {
        $this->post('/contact', [])->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
        $fields = ['name' => 'Test visitor', 'email' => 'visitor@example.org', 'subject' => 'Partnership', 'message' => 'How can our school participate?'];
        $this->post('/contact', $fields)->assertRedirect(route('contact').'#message')->assertSessionHas('received');
        $this->assertDatabaseHas('inquiries', $fields);
    }
}
