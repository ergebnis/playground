<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2020 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/localheinz/playground
 */

namespace Localheinz\Playground\Test\Unit;

use Ergebnis\Test\Util\Helper;
use Localheinz\Playground\Example;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @covers \Localheinz\Playground\Example
 */
final class ExampleTest extends Framework\TestCase
{
    use Helper;

    public function testFromNameReturnsExample(): void
    {
        $name = self::faker()->sentence;

        $example = Example::fromName($name);

        self::assertSame($name, $example->name());
    }
}
