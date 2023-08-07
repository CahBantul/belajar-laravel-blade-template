<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("nozami");
    }

    public function testHelloWorld()
    {
        $this->get("/hello-world")
            ->assertSeeText("nozami");
    }

    public function testViewWithoutRoute()
    {
        $this->view("hello", ["name" => "okok"])
            ->assertSeeText("okok");

        $this->view("hello.world", ["name" => "ajitama"])
            ->assertSeeText("ajitama");
    }
}
