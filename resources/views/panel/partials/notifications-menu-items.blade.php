@foreach ($notifications as $notification)
    @include("admin::notifications.{$notification->type}")
@endforeach
