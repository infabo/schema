<?php
declare(strict_types = 1);

namespace Brotkrueml\Schema\Model\Type;

/**
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.
 *
 * schema.org version 3.6
 */
class Action extends Thing
{
    public function __construct()
    {
        parent::__construct();

        $this->addProperties('actionStatus', 'agent', 'endTime', 'error', 'instrument', 'location', 'object', 'participant', 'result', 'startTime', 'target');
    }
}