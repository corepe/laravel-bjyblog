<?php

namespace Tests\Commands\Upgrade\V6_11_0;

class UpgradeTest extends \Tests\Commands\Upgrade\TestCase
{
    public function testUpgrade()
    {
        $this->artisan('bjyblog:update')->assertExitCode(0);
    }
}