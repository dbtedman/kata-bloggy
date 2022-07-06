<?php

declare(strict_types=1);

namespace Bloggy\Plugin;

use PHPUnit\Framework\TestCase;

class PluginTest extends TestCase
{
    public function testCanBeConstructed(): void
    {
        static::assertNotNull(new Plugin());
    }
}
