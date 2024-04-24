@props(['active'])
@php
    $classes = ($active ?? false)
                ? 'sidebar-button-active sidebar-button'
                : 'sidebar-button';
@endphp
<div {{ $attributes->merge(['class' => $classes, ]) }}>
    {{ $slot }}
</div>

