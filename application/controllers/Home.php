<?php

namespace Application\Controllers;

class Home extends Controller{

    public function index(){
        $this->view('app.index');
    }

    public function create(){
        echo "this is a create method";
    }

}
