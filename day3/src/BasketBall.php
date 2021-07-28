<?php

namespace App;

class BasketBall
{
    public $home;
    public $away;

    public function __construct(){
        $this->home = $home;
        $this->away = $away;
    }

    public function home(){
        return $this->home;
    }

    public function away() {
        return $this->away;
    }

}
