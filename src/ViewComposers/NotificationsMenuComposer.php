<?php

namespace Elegant\Admin\ViewComposers;

use Auth;
use Illuminate\View\View;

class NotificationsMenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('notifications', Auth::user()->unreadNotifications);
    }
}
