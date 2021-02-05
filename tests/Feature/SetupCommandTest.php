<?php

namespace Tests\Feature;

use App\Console\Commands\SetupCommand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;

class SetupCommandTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_startup_command_test()
    {
        $app = new Application('Setup application');
        $app->add(new SetupCommand());


    }
}
