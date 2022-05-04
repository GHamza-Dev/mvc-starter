<?php

class HomeController extends Controller{

    public function index(){
        $this->data['message'] = 'Welcome to the home page';
        $this->data['alert'] = 'Welcome';
        $this->data['err'] = false;
        $this->response($this->data);
    }
    
    public function test(){
        $this->response($this->request());
    }
}