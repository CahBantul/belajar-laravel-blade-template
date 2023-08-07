<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{

    public function testIncludeCondition()
    {
        $this->view("include-condition", [ "user" => [
                "name" => "Nozami",
                "owner" => true
            ]])->assertSeeText(" Selamat datang owner")
            ->assertSeeText("selamat datang Nozami");

        $this->view("include-condition", [ "user" => [
                "name" => "Ajitama",
                "owner" => false
            ]])->assertDontSeeText(" Selamat datang owner")
            ->assertSeeText("selamat datang Ajitama");
    }
}
