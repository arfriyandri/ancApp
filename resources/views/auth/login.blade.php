@include('auth.component.head')

<body style="border-radius: 8px">

	<div class="limiter">

		<div class="container-login100">
            <div class="logo-authe">
                    <img src="{{asset('template/assets/img/logo.jpeg')}}" alt="">
                </div>
                <form class="login100-form validate-form" method="POST" action="/auth/loginProcess">
                    @csrf
					<span class="login100-form-title p-b-16">
						Silakan Masuk
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Masuk
						</button>
					</div>
				</form>
        </div>
		</div>
	</div>

</body>
@include('auth.component.foot')
