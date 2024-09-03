<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function homePage(){
        return Inertia::render('Home/Index');
    }
    function login(){
        return Inertia::render('Login/Index');
    }
    function registerPage(){
        return Inertia::render('Register/Index');
    }
    function DonerListPage(){
        return Inertia::render('DonerList/Index');
    }
    function BlogPage(){
        return Inertia::render('Blog/Index');
    }
}
