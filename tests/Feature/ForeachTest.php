<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForeachTest extends TestCase
{
    public function testForeach()
    {
        $this->view("foreach", ["hobbies" => ["gaming", "coding", "hiking"]])
            ->assertSeeText("gaming")
            ->assertSeeText("coding")
            ->assertSeeText("hiking");
    }

    public function testForelse()
    {
        $this->view("forelse", ["hobbies" => ["gaming", "coding", "hiking"]])
            ->assertSeeText("gaming")
            ->assertSeeText("coding")
            ->assertSeeText("hiking")
            ->assertDontSeeText(" Tidak punya hobi");

        $this->view("forelse", ["hobbies" => []])
            ->assertDontSeeText("gaming")
            ->assertDontSeeText("coding")
            ->assertDontSeeText("hiking")
            ->assertSeeText(" Tidak punya hobi");
    }
}
