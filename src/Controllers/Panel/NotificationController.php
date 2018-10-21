<?php

namespace Elegant\Admin\Controllers\Panel;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $all = $request->input('all', 0);

        if ($all) {
            $notifications = $user->notifications()->simplePaginate(15);
        } else {
            $notifications = $user->unreadNotifications;
        }

        $notifications->markAsRead();

        return view('admin::panel.notifications.index')->with(
            compact('notifications')
        );
    }
}
