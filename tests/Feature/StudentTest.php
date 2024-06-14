<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Students; // Adjust the namespace based on your actual model location

class StudentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_student()
    {
        $student = Students::create([
            'name' => 'John Doe',
            'email' => 'ousa@itc.edu.kh',
            'phone' => '012 345 678',
            'dob' => '2003-10-01'
        ]);

        $this->assertTrue($student->exists);
    }
}