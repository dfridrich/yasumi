<?php

namespace Yasumi\tests\CzechRepublic;

use PHPUnit_Framework_TestCase;
use Yasumi\tests\YasumiBase;

/**
 * Base class for test cases of the Czech republic holiday provider.
 * 
 * Class CzechRepublicBaseTestCase
 * @package Yasumi\tests\Germany
 * @author Dennis Fridrich <fridrich.dennis@gmail.com>
 */
abstract class CzechRepublicBaseTestCase extends PHPUnit_Framework_TestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested
     */
    const REGION = 'CzechRepublic';

    /**
     * Timezone in which this provider has holidays defined
     */
    const TIMEZONE = 'Europe/Prague';

    /**
     * Locale that is considered common for this provider
     */
    const LOCALE = 'cs_CZ';
}
