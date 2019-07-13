<?php

namespace Elegant\Admin\Http\Controllers\Panel;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $all = (bool) $request->input('all', 0);

        $notifications = $this->notifications($all);

        $notifications->markAsRead();

        return view('admin::panel.notifications.index', compact('all', 'notifications'));
    }

    protected function notifications($all)
    {
        $user = Auth::user();
        
        if ($all) {
            return $user->notifications()->simplePaginate(15);
        } else {
            return $user->unreadNotifications;
        }
    }
}
