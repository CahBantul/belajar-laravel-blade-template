<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledTest extends TestCase
{
public function testDisabled()
    {
        $response = $this->view('disabled', ["name" => "Ajitama"]);

        $response->assertSeeText('hello {{ $name }}');
        $response->assertSeeText('{{ $name }}');
        $response->assertDontSeeText("Ajitama");
    }
}
