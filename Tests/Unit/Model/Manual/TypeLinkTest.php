<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Tests\Unit\Model\Manual;

use Brotkrueml\Schema\Model\Manual\TypeLink;
use PHPUnit\Framework\TestCase;

final class TypeLinkTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProviderWithInvalidUrls
     */
    public function exceptionThrownOnInvalidUrl(string $link): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(1620237735);
        $this->expectExceptionMessage(\sprintf(
            'The given link "%s" ist not a valid URL!',
            $link,
        ));

        new TypeLink($link, '', '');
    }

    public function dataProviderWithInvalidUrls(): iterable
    {
        yield [
            'no-link',
        ];

        yield [
            'https://example.org/Some Type',
        ];
    }

    /**
     * @test
     */
    public function exceptionThrownOnInvalidWebUrl(): void
    {
        $link = 'ftp://some.host/';

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionCode(1620237736);
        $this->expectExceptionMessage(\sprintf(
            'The given link "%s" ist not a valid web URL!',
            $link,
        ));

        new TypeLink($link, '', '');
    }
}
