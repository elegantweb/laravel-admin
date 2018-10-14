@php
$dismissible = isset($dismissible) ? (bool) $dismissible : true;
@endphp

<div class="alert alert-{{ $varient }}{{ $dismissible ? ' alert-dismissible' : '' }}">
    @if ($dismissible)<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>@endif
    {{ $slot }}
</div>
