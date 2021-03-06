<?php

namespace Yasumi\tests\CzechRepublic;

use DateTime;
use DateTimeZone;
use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class for testing Good Friday in Czech republic.
 * 
 * Class GoodFridayTest
 * @package Yasumi\tests\Germany
 * @author Dennis Fridrich <fridrich.dennis@gmail.com>
 */
class GoodFridayTest extends CzechRepublicBaseTestCase implements YasumiTestCaseInterface
{
    /**
     * The name of the holiday to be tested
     */
    const HOLIDAY = 'goodFriday';

    /**
     * Tests Good Friday.
     */
    public function testGoodFriday()
    {
        $year = 1876;
        $this->assertHoliday(self::REGION, 'goodFriday', $year,
            new DateTime("$year-4-14", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests translated name of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::REGION, self::HOLIDAY, $this->generateRandomYear(),
            [self::LOCALE => 'Velký pátek']);
    }

    /**
     * Tests type of the holiday defined in this test.
     */
    public function testHolidayType()
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(), Holiday::TYPE_NATIONAL);
    }
}
