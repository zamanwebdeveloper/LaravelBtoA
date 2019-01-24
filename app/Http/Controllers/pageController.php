<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function services() {
    	return view('services');
	}
	public function features() {
    	return view('features');
	}
	public function portfolios() {
    	return view('portfolios');
	}
	public function pricing() {
    	return view('pricing');
	}
	public function team() {
    	return view('team');
	}
	public function subscribe() {
    	return view('subscribe');
	}
	public function blog() {
    	return view('blog');
	}
	public function contact() {
    	return view('contact');
	}
}
