<?php

class Date
{
    private $startDate;
    private $endDate;

    public function __construct($startDate,$endDate)
    {
        $this->startDate=$startDate;
        $this->endDate=$endDate;
    }
    public function getStartDate(){
        return $this->startDate;
    }
    public function getEndDate(){
        return $this->endDate;
    }
}