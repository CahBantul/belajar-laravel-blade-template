<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InlineTest extends TestCase
{
    public function testInlineBlade()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
