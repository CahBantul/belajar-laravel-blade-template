<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    public function testClass()
    {
        $this->view('class', ["hobbies" => [
            [
                "name" => "coding",
                "love" => true
            ],
            [
                "name" => "gaming",
                "love" => false
            ],
        ]])
            ->assertSee('<li class="red bold">coding</li>', false)
            ->assertSee(' <li class="red">gaming</li>', false);
    }
}
