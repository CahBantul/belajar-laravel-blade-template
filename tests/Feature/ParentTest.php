<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParentTest extends TestCase
{
    public function testChild()
    {
        $this->view("child")
            ->assertSeeText("Nama Aplikasi - Halaman utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("deskripsi header")
            ->assertSeeText("ini adalah halam utama")
            ->assertDontSeeText("Default content");
    }

    public function testChildDefault()
    {
        $this->view("child-default")
            ->assertSeeText("Nama Aplikasi - Halaman utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default content")
            ->assertDontSeeText("deskripsi header")
            ->assertDontSeeText("ini adalah halam utama");
    }
}
