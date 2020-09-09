<?php

namespace Elegant\Admin\Http\Controllers;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        return view('admin::dashboard.show');
    }
}
