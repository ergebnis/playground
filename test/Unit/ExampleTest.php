<?php

declare(strict_types=1);

/**
 * Copyright (c) 2017-2026 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/playground
 */

namespace Ergebnis\Playground\Test\Unit;

use Ergebnis\Playground;
use PHPUnit\Framework;

#[Framework\Attributes\CoversClass(Playground\Example::class)]
final class ExampleTest extends Framework\TestCase
{
    use Playground\Test\Util\Helper;

    public function testFromNameReturnsExample(): void
    {
        $name = self::faker()->sentence();

        $example = Playground\Example::fromName($name);

        self::assertSame($name, $example->name());
    }
}
