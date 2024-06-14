<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Students;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function create_students (): void {
        $student = Students::create([
            'name' => 'John Doe',
            'email' => 'ousa@itc.edu.kh',
            'phone' => '012 345 678',
            'dob' => '2003-10-01'
        ]);
    }
    
}