@extends('common')
@section('headerScripts')
<!--This is header from login.blade.php -->
@endsection

@section('title')
<title>iVolunteer Login</title>
<!--This is title from login.blade.php -->
@endsection

@section('content')
<!--This is content from login.blade.php -->
<script>
$( "body" ).removeClass( "homepage" );

</script>

<div id="content" class="register-login-page">



	<header class="main-header">

	    <img src="{{ asset('img/header_image_login_register.jpg') }}" alt="">
	    <div>
	        <h1>Join a community of people who care as much as you do.</h1>

	    </div>
	</header>




    <section class="register-login">
        <div class="forms">
            <div class="register">
                <h2 class="header">New to iVolunteer?</h2>


                <p>Create a iVolunteer account to join a community focused on skilled volunteers and the causes that drive them.</p>


                <p class="text-center">
                <a href="/auth/register" class="button">Create account</a>
                </p>
            </div>


            <div class="login">
                <h2 class="header">Existing users</h2>
                <form onsubmit="return integrateAxes();" method="POST" id="login-form" action="https://www.catchafire.org/account/login/" class="js-disable-on-submit" autocomplete="off">
               		<!-- Making your life easier with already set forms variables ;) -->
                    <input id="id_username" name="username" type="hidden">
                    <input type="hidden" name="csrfmiddlewaretoken" value="z3nos6tpU1o94R1noH8qIZeKDllujUfi">

                    <p>Log into your Catchafire account to continue.</p>




                    <p class="form-field">

                             <label for="email">Email</label>
                        <input id="id_email" maxlength="200" name="email" type="email">
                    </p>

                    <div class="form-field">

                         <label for="pass">Password</label>
                        <input id="id_password" maxlength="100" name="password" type="password">
                    </div>
                    <div class="login-buttons">
                    	<button>Log in</button>
			            <br>
			            <a href="https://www.catchafire.org/forgot_password">Forgot your password?</a>
                        <br><br>

                    	<div class="external-sites">
                            <!--<a class="fb" href="javascript:loginFacebook();">-->
                    			<img style="vertical-align:middle" src="{{ asset('img/btn-fb-login.png') }}">
                    		</a>
                            <!--<a href="https://www.linkedin.com/uas/oauth2/authorization?scope=&state=97e5ba46c0575546787eff90fa900ba0&redirect_uri=https%3A//www.catchafire.org/account/linkedin_login/&response_type=code&client_id=RnSct6_cztKo_lHiWRtGaSKgTN5Ev4HYLeX1DyR6Qhp0JcpBVGxPa-cMpyZuljzC">-->
                    		<img style="vertical-align:middle" src="{{ asset('img/signin_with_linkedin.png') }}" alt="">
                        </a>
                </div>

        </div></form>
    </div></div></section>

        </div><!-- content -->

@endsection
