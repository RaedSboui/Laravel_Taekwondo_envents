
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<title>Register</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{asset('../theme/html/demo1/dist/assets/css/pages/login/classic/login-549d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('../theme/html/demo1/dist/assets/plugins/global/plugins.bundle49d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('../theme/html/demo1/dist/assets/css/style.bundle49d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('../theme/html/demo1/dist/assets/css/themes/layout/header/base/light49d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('../theme/html/demo1/dist/assets/css/themes/layout/header/menu/light49d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('../theme/html/demo1/dist/assets/css/themes/layout/brand/dark49d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('../theme/html/demo1/dist/assets/css/themes/layout/aside/dark49d8.css?v=7.2.8')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
		<script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="justify-content: left;background-image: url(../../../../../theme/html/demo1/dist/assets/media/bg/bg.jpg);">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-5">
							<a href="#">
								<img src="{{asset('../theme/html/demo1/dist/assets/media/logos/logo-letter-13.png')}}" class="max-h-75px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-5"> 
								<h3 class="opacity-40 font-weight-normal" style="color:black">Sign Up To User</h3>
								<p class="opacity-40" style="color:black">Enter your details to create your account:</p>
							</div>
							<form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">

                      
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group ">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">

                                <input id="password-confirm" type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group ">

                                <input id="team" type="text" placeholder="Team" class="form-control @error('team') is-invalid @enderror" name="team" value="{{ old('team') }}" required autocomplete="team" autofocus>

                                @error('team')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">

                                <input id="phone" type="text" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">

                                <input id="adress" type="text" placeholder="Adress" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus>

                                @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">

                                <select name="country"  id="country"  class="form-control @error('country') is-invalid @enderror" role="listbox" >           
                                <option value="Tunisie" selected>Tunisie</option>
                                <option value="Arabie_Saoudite">Arabie Saoudite </option>
                                <option value="Algerie">Algerie </option>
                                <option value="Bahrein">Bahrein </option>
                                <option value="Egypte">Egypte </option>
                                <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
                                <option  value="France">France</option>
                                </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group  mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>

                           
							
						</div>
						<!--end::Login Sign in form-->
			
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('../theme/html/demo1/dist/assets/plugins/global/plugins.bundle49d8.js?v=7.2.8')}}"></script>
		<script src="{{asset('../theme/html/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle49d8.js?v=7.2.8')}}"></script>
		<script src="{{asset('../theme/html/demo1/dist/assets/js/scripts.bundle49d8.js?v=7.2.8')}}"></script>
		<script src="{{asset('../keenthemes.com/metronic/assets/js/engage_code.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('../theme/html/demo1/dist/assets/js/pages/custom/login/login-general49d8.js?v=7.2.8')}}"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->

</html>







