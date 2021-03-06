<?php

namespace Yasumi\tests\CzechRepublic;

use DateTime;
use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class for testing the Independent Czechoslovak State Day in Czech republic.
 */
class IndependentCzechoslovakStateDayTest extends CzechRepublicBaseTestCase implements YasumiTestCaseInterface
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'independentCzechoslovakStateDay';

    /**
     * Tests the holiday defined in this test.
     *
     * @dataProvider HolidayDataProvider
     *
     * @param int      $year     the year for which the holiday defined in this test needs to be tested
     * @param DateTime $expected the expected date
     */
    public function testHoliday($year, $expected)
    {
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year, $expected);
    }

    /**
     * Returns a list of random test dates used for assertion of the holiday defined in this test
     *
     * @return array list of test dates for the holiday defined in this test
     */
    public function HolidayDataProvider()
    {
        return $this->generateRandomDates(10, 28, self::TIMEZONE);
    }

    /**
     * Tests type of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::REGION, self::HOLIDAY,
            $this->generateRandomYear(), [self::LOCALE => 'Den vzniku samostatného československého státu']);
    }

    /**
     * Tests type of the holiday defined in this test.
     */
    public function testHolidayType()
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(),
            Holiday::TYPE_NATIONAL);
    }
}
