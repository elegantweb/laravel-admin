<?php

namespace Elegant\Admin\Controllers\Panel;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserNotificationController extends Controller
{
    public function index(Request $request, User $user)
    {
        abort_unless(Auth::user()->id === $user->id, 403);

        $all = $request->input('all', 0);

        if ($all) {
            $query = $user->notifications();
        } else {
            $query = $user->unreadNotifications();
        }

        $notifications = $query->simplePaginate(15);

        $notifications->markAsRead();

        return view('admin::panel.users.notifications.index')->with(
            compact('notifications')
        );
    }
}
