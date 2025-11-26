@props(['title' => 'Panel', 'subtitle' => null, 'id' => null])

<div id="{{ $id }}" class="panel">
    <div class="panel-hdr">
        <h2>
            {!! $title !!}
        </h2>
        <div class="panel-toolbar">
            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
        </div>
    </div>
    <div class="panel-container show">
        <div class="panel-content">
            {{ $slot }}
        </div>
    </div>
</div>
