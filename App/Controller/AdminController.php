<?php


namespace App\Controller;
use App\Mvc\Controller;


class AdminController extends Controller
{
    public function index(){
        $this->view->setTitle('Gestão do App');
        $this->view->Render('Admin/Home-admin');

    }

}