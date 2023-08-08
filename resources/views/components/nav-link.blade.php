@props(['active'])

@php
$classes = !$active ? 'nav-link' : 'nav-link active';
$classes .= ($active == 'btn') ? ' btn-success': '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
