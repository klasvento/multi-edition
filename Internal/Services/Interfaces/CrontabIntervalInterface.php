<?php namespace ZN\Services;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

interface CrontabIntervalInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Hourly
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string void
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function hourly() : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Daily
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string void
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function daily() : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Midnight
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string void
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function midnight() : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Monthly
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string void
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function monthly() : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Weekly
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string void
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function weekly() : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Yearly
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string void
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function yearly() : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Annualy
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string void
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function annualy() : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Clock
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $clock: 24:59
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function clock(String $clock) : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Minute
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $minute: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function minute(String $minute) : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Per Minute
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $minute: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function perMinute(String $minute = '*') : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Hour
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $hour: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function hour(String $hour) : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Per Hour
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $hour: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function perHour(String $hour = '*') : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Day Number
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $dayNumber: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function dayNumber(String $dayNumber) : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Month Number
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $monthNumber: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function month(String $monthNumber) : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Per Month
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $monthNumber: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function perMonth(String $month = '*') : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Day
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $day: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function day(String $day) : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Per Day
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $day: *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function perDay(String $day = '*') : Crontab;

    //--------------------------------------------------------------------------------------------------------
    // Interval
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $interval: * * * * *
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function interval(String $interval) : Crontab;
}
