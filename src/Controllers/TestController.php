<?php

namespace sytou\test\Controllers;

use sytou\test\Models\slug;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class TestController extends Controller {
    public function index() {
        $alldata = slug::get();

        return view('sytou/test::slug', compact('alldata'));
    }
}

