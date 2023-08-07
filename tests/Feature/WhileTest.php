<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function test_while()
    {
        $this->view("while", ["i" => 5])
            ->assertSeeText('the current value is 5')
            ->assertSeeText('the current value is 6')
            ->assertSeeText('the current value is 7')
            ->assertSeeText('the current value is 8')
            ->assertSeeText('the current value is 9');
    }
}
