<?php

declare(strict_types=1);

namespace Ergebnis\Playground\Test\AutoReview;

use Ergebnis\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @coversNothing
 */
final class SrcCodeTest extends Framework\TestCase
{
    use Helper;

    public function testSrcClassesHaveUnitTests(): void
    {


        self::assertClassesHaveTests(
            __DIR__ . '/../../src',
            'Ergebnis\\Playground\\',
            'Ergebnis\\Playground\\Test\\Unit\\'
        );

    }
}
