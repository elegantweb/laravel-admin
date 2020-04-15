@if (session('status'))
    @component('admin::components.alert', ['varient' => 'success'])
        {{ session('status') }}
    @endcomponent
@endif

@if (session('status:success'))
    @component('admin::components.alert', ['varient' => 'success'])
        {{ session('status:success') }}
    @endcomponent
@endif

@if (session('status:failure'))
    @component('admin::components.alert', ['varient' => 'danger'])
        {{ session('status:failure') }}
    @endcomponent
@endif

@if (session('status:info'))
    @component('admin::components.alert', ['varient' => 'info'])
        {{ session('status:info') }}
    @endcomponent
@endif

@if (session('status:warning'))
    @component('admin::components.alert', ['varient' => 'warning'])
        {{ session('status:warning') }}
    @endcomponent
@endif
