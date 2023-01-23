<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboarController extends Controller
{
    public function index(){
        return Inertia::render('Admins/Dashbroad');
    }
    public function home(){
        return Inertia::render('Admins/Home');
    }
}
