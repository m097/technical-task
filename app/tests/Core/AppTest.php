<?php

namespace Core;

use Tests\BaseTestCase;

class AppTest extends BaseTestCase
{
    public function testRun()
    {
        $app = new App();
        ob_start();
        $app->run();
        $content = ob_get_clean();
        $this->assertNotContains('Application error', $content);
    }
}
