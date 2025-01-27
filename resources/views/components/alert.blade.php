@props(['type' => 'info'])

@php
    switch ($type) {
        case 'danger':
            $class = 'alert alert-danger alert-dismissible fade show';
            break;

        case 'success':
            $class = 'alert alert-success alert-dismissible fade show';
            break;

        case 'warning':
            $class = 'alert alert-warning alert-dismissible fade show';
            break;

        default:
            $class = 'alert alert-primary alert-dismissible fade show';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => $class]) }} role="alert">
    <strong> {{ $title ?? 'Info Alert' }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
