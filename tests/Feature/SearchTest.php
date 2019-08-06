<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    use withFaker;

    /** @test */
    public function a_user_can_make_a_search(){
        
        $this->withoutExceptionHandling();
        
        $attributes = [
            'search' => $this->faker->sentence
        ];
        
        $response = $this->post('/search', $attributes);
        
        $response->assertStatus(200);
    }
}
