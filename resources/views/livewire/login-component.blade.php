<div>
	@include('backend.includes.alert')
	<div class="p-2">
    <form class="form-horizontal" action="#" method="POST" wire:submit.prevent="loginAttempt">
        @csrf
        <div class="form-group">
            <label for="username">Email</label>
            <input type="email" class="form-control" id="username" 
            placeholder="Enter email" 
            name="email" 
            wire:model.lazy='email'
            value="{{ old('email') }}" required autocomplete="email" autofocus>
        
            @error('email')
                <div class="invalid-feedback" style="display: block;">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="userpassword">Password</label>
            <input type="password" class="form-control" id="userpassword" placeholder="Enter password" 
            name="password" 
            wire:model.lazy='password'
            required autocomplete="current-password">
            @error('password')
                <div class="invalid-feedback" style="display: block;">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" id="customControlInline" 
            wire:model='rememberMe'
            {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="customControlInline">Remember me</label>
        </div>
        
        <div class="mt-3">
            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('password.request') }}" class="text-muted">
               Forgot your password?</a>
        </div>
    </form>
	</div>
</div>
