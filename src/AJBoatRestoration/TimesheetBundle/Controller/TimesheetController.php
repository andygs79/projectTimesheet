<?php
/**
 * Created by PhpStorm.
 * User: AGrandScrutton
 * Date: 27/10/2016
 * Time: 11:43
 */

namespace AJBoatRestoration\TimesheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class TimesheetController
 * @package AJBoatRestoration\TimesheetBundle\Controller
 * @Route("/")
 */
class TimesheetController extends Controller
{
    private $now;
    private $week;
    private $day;
    private $date;
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->now = date('d/m/y H:i');
        $this->week = date('W');
        $this->days = array(
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursdsy',
            'Friday',
            'Saturday',
            'Sunday'
        );
    }

    public function setNow($now)
    {
        $this->now = $now;
    }

    public function setWeek($week)
    {
        $this->week = $week;
    }

    public function setDay(array $day)
    {
        $this->day = $day;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getNow()
    {
        return $this->now;
    }

    public function getWeek()
    {
        return $this->week;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("timesheet", name="timesheet_index")
     */
    public function indexAction()
    {
        return $this->render(
            'TimesheetBundle:Timesheet:index.html.twig',
            array(
                'now' => $this->now,
                'week' => $this->week,
                'days' => $this->days,
            )
        );
    }
}