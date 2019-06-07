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
 * The act of  departing from a place. An agent departs from an fromLocation for a destination, optionally with participants.
 *
 * schema.org version 3.6
 */
class DepartAction extends MoveAction
{
    public function __construct()
    {
        parent::__construct();
    }
}