<?php
  class TesthelpersController extends AppController{
    public $helpers = array('Lib');//sử dụng helper Lib
    public $components = array('Data','Session');
    function test(){
      $this->render("test"); // load file view test.ctp
    }
  }
