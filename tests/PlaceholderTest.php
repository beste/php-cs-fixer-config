<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer\Tests;

use Beste\PhpCsFixer\Placeholder;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers \Beste\PhpCsFixer\Placeholder
 */
final class PlaceholderTest extends TestCase
{
    private Placeholder $placeholder;

    protected function setUp(): void
    {
        $this->placeholder = new Placeholder('Jérôme Gamez says: ');
    }

    public function testItEchoesAValue(): void
    {
        self::assertSame('Jérôme Gamez says: Hello', $this->placeholder->echo('Hello'));
    }
}
