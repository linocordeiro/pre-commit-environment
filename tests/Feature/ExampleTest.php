<?php

declare(strict_types=1);

it('teste de home page')->get('/')
->assertOk();

// namespace Tests\Feature;

// // use Illuminate\Foundation\Testing\RefreshDatabase;
// use Tests\TestCase;

// class ExampleTest extends TestCase
// {
//     /**
//      * A basic test example.
//      *
//      * @return void
//      */
//     public function test_the_application_returns_a_successful_response()
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200);
//     }
// }
