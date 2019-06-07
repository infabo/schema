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
 * An emergency service, such as a fire station or ER.
 *
 * schema.org version 3.6
 */
class EmergencyService extends LocalBusiness
{
    public function __construct()
    {
        parent::__construct();
    }
}