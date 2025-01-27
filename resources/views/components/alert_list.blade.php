@props(['type' => 'info'])

@php
    switch ($type) {
        case 'danger':
            $class = 'alert alert-danger';
            break;

        case 'success':
            $class = 'alert alert-success';
            break;

        case 'warning':
            $class = 'alert alert-warning';
            break;

        default:
            $class = 'alert alert-primary';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => $class]) }} role="alert">
    <ul class="m-0">
        {{ $title ?? 'Info Alert' }}
    </ul>
</div>
