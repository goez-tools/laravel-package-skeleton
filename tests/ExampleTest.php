<?php

namespace Tests;

use Ns\Example;
use Ns\ExampleServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [ExampleServiceProvider::class];
    }

    public function testTrue()
    {
        $target = new Example();
        $this->assertInstanceOf(Example::class, $target);
    }
}