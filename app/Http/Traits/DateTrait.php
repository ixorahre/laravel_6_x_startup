<?php


namespace App\Http\Traits;

use DateInterval;
use DatePeriod;
use DateTime;


/**
 * This is a trait file having some utility methods for reusing
 *
 * @package     App\Http\Traits
 * @author     Habibur Rahman (Senior Software Engineer)
 * @copyright  Copyright © 2019 ixora solution
 * @license    https://ixorasolution.com/
 * @version    0.0.1
 *
 * FileName DateTrait.php
 *
 */

trait DateTrait
{

    /**
     * Token validity time
     * @param $hour
     * @return string
     * @author Habibur Rahman
     */
    public function validiteTokenDeadlineHourly($hour)
    {
        $today              = date('Y-m-d H:i:s');
        $different           = date('Y-m-d H:i:s', strtotime($today. ' + '.$hour.' hours'));
        return $different;

    }

    /**
     * Token validity time
     * @param $hour
     * @param $sentTime
     * @return string
     * @author Habibur Rahman
     */
    public function validiteTokenDeadlineHourlyDynamicStartTime($hour, $sentTime)
    {
        $today              = date('Y-m-d H:i:s', strtotime($sentTime));
        $different           = date('Y-m-d H:i:s', strtotime($today. ' + '.$hour.' hours'));
        return $different;

    }

    /**
     * Token validity time
     * @param $days
     * @return string
     * @author Habibur Rahman
    */
    public function validiteTokenDeadline($days)
    {
        $today              = date('Y-m-d');
       $different           = date('Y-m-d', strtotime($today. ' + '.$days.' days'));
       return $different;

    }

    /**
     * Get last hundred years
     * @param $fromYear
     * @param $toYear
     * @return array
     * @throws \Exception
     * @author Habibur Rahman
     */
    public function getLastHundredYears(string $fromYear, string $toYear)
    {
        $backHundredYears    = date('Y', strtotime('-100 year'));
        $begin              = new DateTime($backHundredYears.'-01-01');
        $end                = new DateTime($toYear);

        $years =array();

        $interval           = DateInterval::createFromDateString('1 year');
        $period             = new DatePeriod($begin, $interval, $end);

        foreach ($period as $year) {

            $years[]         = $year->format("Y");
        }

        return $years;
    }


    /**
     * Get the years from prest date to given parameter
     * @param $duration
     * @return array
     * @throws \Exception
     * @author Habibur Rahman
     */
    public function getYearsBetween(string $duration = '-10 years')
    {
        $start              = date('Y/m/d', strtotime('+1 years'));
        $begin              = new DateTime(date('Y/m/d', strtotime($duration)));
        $end                = new DateTime($start);


        $years =array();

        $interval           = DateInterval::createFromDateString('1 year');
        $period             = new DatePeriod($begin, $interval, $end);

        foreach ($period as $year) {

            $years[]         = $year->format("Y");
        }

        return $years;
    }

    /**
     * Get current year
     * @return string
     * @author Habibur Rahman
    */
    public function getCurrentYear()
    {
        return date('Y', strtotime('+1 year'));
    }

    /**
     * Get server current time
     * @throws \Exception
     * @return date
     * @author Habibur Rahman
     */
    public function getServerCurrentTime()
    {
        return now();
    }


}
