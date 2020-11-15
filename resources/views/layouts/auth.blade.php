@extends('foundation::layouts.base')

@section('body')
    <div class="dialog-container">
        <div class="dialog is-narrow auth-dialog">
            <div class="has-text-centered mb-md">
                <img src="/vendor/app/img/app-logo-color.svg" alt="App Logo">
                <h1 class="is-size-3">@yield('pageTitle')</h1>
            </div>
            @yield('content')
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha256-0rguYS0qgS6L4qVzANq4kjxPLtvnp5nn2nB5G1lWRv4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cash/7.0.0/cash.min.js" integrity="sha256-Bi87/uV9cGzGUPsW2Wo5du99wgc+OS1W9VHDVbwfUJA=" crossorigin="anonymous"></script>
<script>
// UI Elements
$(document).ready(function() {

	// Password fields
	$('button.password-toggle').each(function() {
		var self = $(this),
		input = self.closest('div.field').find('input.input');

		self.on('click', function(e) {
			e.preventDefault();

			if(input.attr('type') == 'password') {
				input.attr('type', 'text');
				self.find('i.icon').removeClass('fa-eye').addClass('fa-eye-slash');
			} else {
				input.attr('type', 'password');
				self.find('i.icon').removeClass('fa-eye-slash').addClass('fa-eye');
			}
		});
	});

});
</script>
@endsection