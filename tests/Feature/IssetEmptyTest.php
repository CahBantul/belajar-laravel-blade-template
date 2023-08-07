<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view("issetempty", [])
            ->assertDontSeeText("hello")
            ->assertSeeText("I don't have any hobbies.", false);

        $this->view("issetempty", ["name" => "Ajitama"])
            ->assertSeeText("Hello, my name is Ajitama")
            ->assertSeeText("I don't have any hobbies.", false);

        $this->view("issetempty", ["name" => "Ajitama", "hobbies" => ["hiking", "coding"]])
            ->assertSeeText("Hello, my name is Ajitama")
            ->assertDontSeeText("I don't have any hobbies.", false);
    }
}
