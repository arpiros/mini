<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Mini\App;

class AppTest extends TestCase
{
    /**
     * @return void
     */
    public function testHelloWorld(): void
    {
        $app = new App();
        $this->assertEquals("hello world", $app->helloWorld());
    }
}
