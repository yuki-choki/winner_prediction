@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'shadow-sm', 'style' => 'background-color: #393c3d;']) !!}>
