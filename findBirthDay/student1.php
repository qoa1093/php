<?php

  class Student {
    public $name;
    public $birthday;
    public $livingPlace;

    function __construct($name, $birthday, $livingPlace) {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->livingPlace = $livingPlace;
    }

    function is_birthday() {
      $today = date('Y/m/d');
      $todayAry = explode('/',$today);

      $birthday = date($this->birthday);
      $birthdayAry = explode('/', $birthday);

      if ((intval($todayAry[1]) === intval($birthdayAry[1]) )
         && (intval($todayAry[2]) === intval($birthdayAry[2]))) {
          //echo "match" . "<br>";
          return true;
     } else {
        return false;
     }

    }
  }