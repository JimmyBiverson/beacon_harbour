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
        $this->assertCount(19, $sitemap->url);
        foreach ($sitemap->url as $url) {
            $this->get(parse_url((string) $url->loc, PHP_URL_PATH) ?: '/')->assertOk()->assertSee('rel="canonical"', false);
        }
        $this->get('/programs/unknown')->assertNotFound();
        $this->get('/blog/unknown')->assertNotFound();
        $this->get('/journal/why-beacon-harbor')->assertRedirect('/blog/why-beacon-harbor');
    }

    public function test_primary_site_sections_render_their_content(): void
    {
        $this->get('/what-we-do')
            ->assertOk()
            ->assertSee('Real support. Lasting change')
            ->assertSee('Substance abuse education')
            ->assertSee('Mental health awareness');

        $this->get('/where-we-work')
            ->assertOk()
            ->assertSee('Greater Boston. Stronger together')
            ->assertSee('Based in Quincy')
            ->assertSee('Deeper collaboration among organizations serving young people');

        $this->get('/projects')
            ->assertOk()
            ->assertSee('Programs that create opportunity')
            ->assertSee('Youth Empowerment Workshops')
            ->assertSee('Individual donations');

        $this->get('/blog')
            ->assertOk()
            ->assertSee('Stories, insight, and change in action')
            ->assertSee('Building Beacon Harbor: why we started here')
            ->assertSee('Making mental health support feel approachable');

        $this->get('/contact')
            ->assertOk()
            ->assertSee('info@beaconharboryouth.org')
            ->assertSee('(617) 555-0123')
            ->assertSee('Contact person: Sumaya')
            ->assertSee('We usually reply within a few days');

        $this->get('/programs/career-pathways')
            ->assertOk()
            ->assertSee('Career development')
            ->assertSee('Job readiness, resume building, and career exploration designed to open doors to real, sustainable opportunity.')
            ->assertDontSee('Choose an interest, identify skills you already use');

        $this->get('/journal')->assertRedirect('/blog');
    }

    public function test_social_sharing_uses_a_branded_large_preview_image(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('images/beacon-harbor-social.png', false)
            ->assertSee('property="og:image:width" content="1200"', false)
            ->assertSee('property="og:image:height" content="630"', false)
            ->assertSee('name="twitter:card" content="summary_large_image"', false)
            ->assertSee('favicon.ico', false);
    }

    public function test_inquiry_is_validated_and_saved(): void
    {
        $this->post('/contact', [])->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
        $fields = ['name' => 'Test visitor', 'email' => 'visitor@example.org', 'subject' => 'Partnership', 'message' => 'How can our school participate?'];
        $this->post('/contact', $fields)->assertRedirect(route('contact').'#message')->assertSessionHas('received');
        $this->assertDatabaseHas('inquiries', $fields);
    }
}
