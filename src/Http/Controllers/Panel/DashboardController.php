<?php

namespace Elegant\Admin\Http\Controllers\Panel;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin::panel.dashboard.index');
    }
}
