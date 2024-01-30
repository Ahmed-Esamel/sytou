<?php

namespace sytou\test\Controllers;

use wdd\slug\src\Models\slug;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class TestController extends Controller {
    public function index() {
        $slug = Str::slug('Hello Laravel');

        return view('wdd.slug::slug', compact('slug'));
    }
}
