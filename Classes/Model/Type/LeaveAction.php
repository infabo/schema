<?php
declare(strict_types=1);

namespace Brotkrueml\Schema\Model\Type;

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * An agent leaves an event / group with participants/friends at a location.
 */
final class LeaveAction extends AbstractType
{
    protected $properties = [
        'actionStatus' => null,
        'additionalType' => null,
        'agent' => null,
        'alternateName' => null,
        'description' => null,
        'disambiguatingDescription' => null,
        'endTime' => null,
        'error' => null,
        'event' => null,
        'identifier' => null,
        'image' => null,
        'instrument' => null,
        'location' => null,
        'mainEntityOfPage' => null,
        'name' => null,
        'object' => null,
        'participant' => null,
        'potentialAction' => null,
        'result' => null,
        'sameAs' => null,
        'startTime' => null,
        'subjectOf' => null,
        'target' => null,
        'url' => null,
    ];
}
