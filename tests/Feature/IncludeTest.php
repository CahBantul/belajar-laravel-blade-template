<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include')
            ->assertSeeText("Nozami")
            ->assertSeeText("Selamat Datang di Web");

        $this->view('include', ["title" => "Ajitama"])
            ->assertSeeText("Ajitama")
            ->assertSeeText("Selamat Datang di Web");
    }
}
