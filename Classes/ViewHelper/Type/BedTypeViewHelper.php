<?php
declare(strict_types = 1);

namespace Brotkrueml\Schema\ViewHelper\Type;

/**
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * A type of bed. This is used for indicating the bed or beds available in an accommodation.
 *
 * schema.org version 3.6
 */
class BedTypeViewHelper extends QualitativeValueViewHelper
{
    public function initializeArguments()
    {
        parent::initializeArguments();
    }
}