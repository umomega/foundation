@component('mail::layout')
{{-- Header --}}
@slot('header')
<!-- Header -->
@endslot
{{-- App Logo --}}
<div style="text-align: center; margin-bottom: 15px">
    <img src="{{ url('/vendor/app/img/app-logo-color.svg') }}" alt="App Logo">
</div>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
<!-- Footer -->
@endslot
@endcomponent
