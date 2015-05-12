@extends('common')
@section('headerScripts')
<!--This is header from login.blade.php -->
@endsection

@section('title')
<title>iVolunteer - Recover Password</title>
<!--This is title from login.blade.php -->
@endsection

@section('content')
<!--This is content from login.blade.php -->
<script>
$( "body" ).removeClass( "homepage" );

</script>

<div id="content" class="">

  <div class="container below-12">
    <div class="span-24 last main">

      <div class="span-24">

        <h2>Forgot Password</h2>
        <p>
          Please enter your email address.  We will send an email to that address with
          a link to reset the password on the account.
        </p>

        <form class="form-container" role="form" method="POST" action="{{ url('/password/email') }}">


          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="errors below-4">
            @if (count($errors) > 0)
<!--              <div class="alert alert-danger"> -->
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              <!--/div-->
            @endif

          </div>

          <div class="below-4">

            <div class="field-container" id="id_email_container">


              <label id="label-id_email" for="id_email">
                <h3 class="below-1">Email:</h3>
                </label>


              <div class="errors">

              </div>

              <input id="id_email" maxlength="250" value="{{ old('email') }}" name="email" type="email">
              <div class="help-text" id="help-text-id_email"></div>
            </div>
          </div>




          <button type="submit">Submit</button>
        </form>


      </div><!-- span-24 -->
    </div><!-- span-24 last main -->
  </div><!-- container -->

</div><!-- content -->



@endsection
