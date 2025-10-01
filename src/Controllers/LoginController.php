<?php

namespace App\Controllers;

use App\Utils\AbstractController;
use App\Models\User;

class LoginController extends AbstractController
{
    public function index()
    {
       
        require_once(__DIR__ . '/../Views/login.view.php');
    }
    
}

