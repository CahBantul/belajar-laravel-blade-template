<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function test_each()
    {
        $this->view("each", [
                "users" => [
                    [
                        "name" => "Nozami",
                        "hobbies" => ["gaming", "coding"]
                    ],
                    [
                        "name" => "Ajitama",
                        "hobbies" => ["gaming", "coding"]
                    ],
            ]
            ])->assertSeeInOrder([
                ".red",
                "Nozami",
                "gaming",
                "coding",
                "Ajitama",
                "gaming",
                "coding",
            ]);
    }
}
