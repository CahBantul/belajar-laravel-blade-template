<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function test_form()
    {
        $this->view('form', ["user" => [
                "name" => "Nozami",
                "premium" => true,
                "admin" => true
            ]])
                ->assertSee("checked")
                ->assertSee("Nozami")
                ->assertDontSee("readonly");

        $this->view('form', ["user" => [
                "name" => "Nozami",
                "premium" => false,
                "admin" => false
            ]])
                ->assertDontSee("checked")
                ->assertSee("Nozami")
                ->assertSee("readonly");
    }
}
