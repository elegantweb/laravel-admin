<div class="box box-{{ $varient ?? 'default' }} {{ $class ?? '' }}">
    <div class="box-header {{ (!isset($headerWithBorder) || $headerWithBorder) ? 'with-border' : '' }}">
        <h3 class="box-title">{{ $title ?? '' }}</h3>
        <div class="box-tools pull-right">
            {{ $tools ?? '' }}
        </div>
    </div>
    <div class="box-body {{ $bodyClass ?? '' }}">
        {{ $body ?? '' }}
    </div>
    @if (isset($footer))
    <div class="box-footer">
        {{ $footer }}
    </div>
    @endif
</div>
