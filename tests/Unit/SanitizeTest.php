<?php

namespace Tests\Unit;

use App\Libraries\Sanitize;
use PHPUnit\Framework\TestCase;

class SanitizeTest extends TestCase
{
    public function test_post_title_is_sanitized(): void
    {
        $this->assertEquals('This-Is-a-weird-title', Sanitize::clean('This! Is* a weird title'));
    }
}
