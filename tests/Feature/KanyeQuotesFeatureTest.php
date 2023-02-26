<?php

namespace Heesbeen\KanyeQuotes\Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class KanyeQuotesFeatureTest extends TestCase
{
    /**
     * Test Kanye Quotes page not logged in
     */
    public function test_kanye_quotes_page_not_logged_in_response(): void
    {
        $response = $this->get('/kanye-quotes');
        $response->assertStatus(302);
    }

    /**
     * Test Kanye Quotes page logged in
     */
    public function test_kanye_quotes_page_logged_in_response(): void
    {
        $user = new User;

        $user->password = 'test1234';
        $user->email = 'jan@jansen.nl';
        $user->name = 'Jan Jansen';

        $response = $this->actingAs($user)->get('/kanye-quotes');
        $response->assertStatus(200);
    }


}
