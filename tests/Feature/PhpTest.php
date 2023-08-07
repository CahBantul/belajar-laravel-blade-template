<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PhpTest extends TestCase
{
    public function testRawPhp()
    {
        $this->view('php')
            ->assertSeeText("nozami")
            ->assertSeeText("surabaya");
    }
}
