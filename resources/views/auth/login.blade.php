@include('auth.component.head')

<body style="border-radius: 8px">

	<div class="limiter">

		<div class="container-login100">
            <div class="logo-authe">
                    <img src="{{asset('template/assets/img/logo.jpeg')}}" alt="">
                </div>
                <form class="login100-form validate-form" method="POST" action="/loginProcess">
                    @csrf
					<span class="login100-form-title p-b-16">
						Single Sign On
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ingat Saya
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Masuk
						</button>
					</div>

					<div class="text-center p-t-18 p-b-20">
						<a href="/verifikasi">
							<span class="txt2">
								Belum Memiliki Akun
							</span>
						</a>
					</div>
				</form>
        </div>
		</div>
	</div>

</body>
@include('auth.component.foot')
