<?php

namespace App;

class BasketBall
{
    public $home;
    public $away;
    public $homeScore = 0;
    public $awayScore = 0;

    public function __construct($home, $away){
        $this->home = $home;
        $this->away = $away;
    }

    public function homeOnePoint() {
        return $this->homeScore +=1;
    }

    public function home(){
        echo $this->home . PHP_EOL;
    }

    public function homeThreePoints() {
        return $this->homeScore +=3;
    }
    public function homeScore(){
        echo $this->homeScore;
    }

    public function away() {
        echo $this->away . PHP_EOL;
    }

    public function awayScore(){
        echo $this->awayScore;
    }

    public function awayTwoPoints() {
        return $this->awayScore +=2;
    }

    public function awayOnePoint() {
        return $this->awayScore +=1;
    }

}
