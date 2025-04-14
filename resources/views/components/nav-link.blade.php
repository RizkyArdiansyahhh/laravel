@php
    $classes = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';

    $classes .= ' px-3 py-2 text-sm font-medium rounded-md';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>

{{-- <a href = "{{ $attributes->get('href') }}"
    class="{{$attributes->merge(['class' => '$active ? ' bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  px-3 py-2 text-sm font-medium rounded-md']) "
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a> --}}
