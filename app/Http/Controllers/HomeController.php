<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function helpDesk()
    {
        return view('helpdesk');
    }
    public function purchasing()
    {
        return view('purchasing');
    }
    public function employeeform()
    {
        return view('employeeform');
    }
    public function testdrive()
    {
        return view('testdrive');
    }
    public function costumercard()
    {
        return view('costumercard');
    }
    public function kpi()
    {
        return view('kpi');
    }
}