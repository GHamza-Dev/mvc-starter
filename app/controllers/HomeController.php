<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $this->res['message'] = 'Welcome to the home page';
        $this->res['alert'] = 'Welcome';
        $this->res['err'] = false;
        $this->res['code'] = 200;
        $this->res['data'] = ["hamza", "yassine", "ayoub"];
        $this->response();
    }

    public function hello()
    {
        // echo "Hello world!";
        $this->response();
    }
}
