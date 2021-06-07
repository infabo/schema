<?php

declare(strict_types=1);

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\Schema\Tests\Unit\Core\Model;

use Brotkrueml\Schema\Core\Model\NodeIdentifier;
use Brotkrueml\Schema\Core\Model\NodeIdentifierInterface;
use PHPUnit\Framework\TestCase;

class NodeIdentifierTest extends TestCase
{
    /**
     * @test
     */
    public function subjectIsInstanceOfNodeIdentifierInterface(): void
    {
        self::assertInstanceOf(NodeIdentifierInterface::class, new NodeIdentifier('some-id'));
    }

    /**
     * @test
     */
    public function subjectIsInstanceOfStringableInterface(): void
    {
        self::assertInstanceOf(\Stringable::class, new NodeIdentifier('some-id'));
    }

    /**
     * @test
     */
    public function getIdReturnsCorrectId(): void
    {
        $subject = new NodeIdentifier('some-id');

        self::assertSame('some-id', $subject->getId());
    }

    public function toStringReturnsBlankIdentifier(): void
    {
        $subject = new NodeIdentifier('some-id');

        self::assertSame('some-id', $subject->__toString());
    }
}
