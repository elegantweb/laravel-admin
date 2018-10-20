<div class="box box-{{ $varient ?? 'default' }} {{ $class ?? '' }}">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $title ?? '' }}</h3>
        <div class="box-tools pull-right">
            {{ $tools ?? '' }}
        </div>
    </div>
    <div class="box-body {{ $bodyClass ?? '' }}">
        {{ $body ?? '' }}
    </div>
    @unless (empty(trim($footer)))
        <div class="box-footer">
            {{ $footer }}
        </div>
    @endunless
</div>
