<?php
namespace gsmOwner;
class Battery
{
    private $batteryModel;
    private $batteryLife;
    private $batteryTalkTime;

    public function setBattery($model,$life,$talkTime){
        $this->batteryModel=$model;
        $this->batteryLife=$life;
        $this->batteryTalkTime=$talkTime;
    }
    public function getBattery(){
        return "Model: {$this->batteryModel}, Life: {$this->batteryLife}, TalkTime: {$this->batteryTalkTime}";
    }
}