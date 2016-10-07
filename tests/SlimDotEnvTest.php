<?php

/**
 * Author: Roger Creasy
 * Email: roger@rogercreasy.com
 * Date: 10/7/16
 * Time: 2:18 PM
 */

use RogerCreasy\SlimDotEnv\SlimDotEnv;

class SlimDotEnvTest extends PHPUnit_Framework_TestCase
{
    private $fixturesFolder;

    public function setUp()
    {
        $this->fixturesFolder = dirname(__DIR__).'/tests/fixtures';
    }

    public function testEnvReturnsVar()
    {
        $dotEnv = new SlimDotEnv($this->fixturesFolder , '.env');
        $dotEnv->load();
        $this->assertSame('true', $dotEnv->env('PACKAGE_TEST'));
    }
}
