@extends('common')
@section('headerScripts')
<!--This is header from login.blade.php -->
@endsection

@section('title')
<title>{{ Auth::user()->name }} - Dashboard</title>
<!--This is title from login.blade.php -->
@endsection

@section('content')
<!--This is content from login.blade.php -->
<script>
$( "body" ).removeClass( "homepage" );

</script>



        <div id="content" class="home dashboard">



<div class="dashboard-notifications clear">


</div>
<script src="./Catchafire - Dashboard_files/notifications.js"></script>
<script>
  $(function () {
  var interviewNotifications = new CAF.InterviewDashboardNotifications();
  interviewNotifications.accept_time_slot_url = "/scheduling/calendar/accept/";
  interviewNotifications.change_phone_number_url = "/scheduling/calendar/phone/update/";
  });
</script>


<div id="number-modal" class="number-modal" style="display: none;">
  <h1>My U.S. number for this call is</h1>
  <input id="number" type="text" class="phone-input" name="phone" value="None" maxlength="18" autocomplete="off">
   <span>X</span>
   <input id="extension" type="text" class="extension-input" placeholder="Ext" maxlength="7" name="extension" value="None" autocomplete="off">
  <input id="slot-id" type="hidden" value="">
  <input id="interview-id" name="interview-id" type="hidden" value="">
  <p id="number-lt-error" class="number-lt-error" style="">Your phone number should be at least 10 digits. Are you forgetting the area code?</p><p>
  </p><p id="number-overseas-error" class="number-overseas-error" style="display: none;">Your phone number isn’t a valid U.S. number, are you overseas?</p><p>

  <label>
    <input type="checkbox" id="not-us" class="outside_us" name="is_outside_the_us">
       I'm not in the U.S.
  </label>

    <button id="submit-button" type="submit" class="dim phone-dialog-submit-button" disabled="disabled">Submit</button>
</p></div>

<script src="./Catchafire - Dashboard_files/phone_dialog.js"></script>
<script src="./Catchafire - Dashboard_files/jquery.mask.min.js"></script>
<script>
$(function () {
  var interviewPhoneDialog = new CAF.InterviewPhoneDialog();
  interviewPhoneDialog.bind();
  window.interviewPhoneDialog = interviewPhoneDialog;
});
</script>




<div class="main">

<h2>hello</h2>
</div>

<aside>
  <header class="bottom-30">
    <div class="clear">
      <h1 class="font-title-14 hide-text bottom-10">Profile</h1>
      <a href="#"><img src="{{ asset('/img/') }}/{{Auth::user()->profile->image}}" height="60" width="60" class="left right-20"></a>
      <p class="bottom-0">
      <strong>{{ $user->name}} {{$profile->last_name}}</strong>
      <br><a href="#" class="small">[ edit profile ]</a>
      </p>
    </div>
    <div class="two-cols small-divisions top-10 clear">
      <div class="col _one-half">
        <mark class="islet score-box">
          <span class="score-name font-title-11 bottom-5">Total impact</span>
          <span id="total_impact" class="score-points font-title-24">${{$profile->impact}}</span>
        </mark>
      </div>
      <div class="col _one-half">
        <mark class="islet score-box">
          <span class="score-name font-title-11 bottom-5">Followers</span>
          <span id="num_followers" class="score-points font-title-24">${{$profile->followers}}</span>
        </mark>
      </div>
    </div>
  </header>







 <section class="bottom-30">

 </section>









  <section class="bottom-30">
    <header class="bottom-5">
      <h1 class="font-title-14">Complete your profile</h1>
    </header>
    <ul>

    <li><a href="https://www.catchafire.org/todo_popup/Biography" class="todo-popup">Write My Biography</a></li>

    <li><a href="https://www.catchafire.org/todo_popup/TellYourFriends" class="todo-popup">Tell My Friends</a></li>

    <li><a href="https://www.catchafire.org/todo_popup/Experience" class="todo-popup">Add My Resume</a></li>

    <li><a href="https://www.catchafire.org/todo_popup/Interests" class="todo-popup">Add My Interests</a></li>

    </ul>
  </section>

  <section class="bottom-30">
    <header class="bottom-5">
        <h1 class="font-title-14">Status <a href="https://www.catchafire.org/dashboard/#" data-url="/profiles/edit_vol_availability/" data-redirect-to="/dashboard/" class="font-body small change-status">[ change ]</a></h1>
    <p id="current-status">


    Ready to volunteer




    </p>
    </header>
      </section>






  <section>
    <header class="bottom-10">
      <h1 class="font-title-14">Projects that need you</h1>
    </header>


    <article class="bottom-30">

      <a href="https://www.catchafire.org/projects/9770/?src=dashboard&match_id=1768245"><img src="./Catchafire - Dashboard_files/220x160_0000_website_using_wordpress.jpg" class="bottom-10"></a>

      <header>
        <hgroup>
        <h1 class="font-body-small"><strong><a href="https://www.catchafire.org/projects/9770/?src=dashboard&match_id=1768245">WordPress Website Construction</a></strong></h1>
          <h2 class="font-body-small">
              <a href="https://www.catchafire.org/organizations/spark-microgrants_3052" class="reset-color">
              <span class="for">for</span>
              Spark MicroGrants
            </a>
          </h2>
        </hgroup>
      </header>
    </article>



    <article class="bottom-30">

      <header>
        <hgroup>
        <h1 class="font-body-small"><strong><a href="https://www.catchafire.org/projects/9746/?src=dashboard&match_id=1768246">Website Audit</a></strong></h1>
          <h2 class="font-body-small">
              <a href="https://www.catchafire.org/organizations/heal-initiative_8711" class="reset-color">
              <span class="for">for</span>
              HEAL Initiative
            </a>
          </h2>
        </hgroup>
      </header>
    </article>



    <article class="bottom-30">

      <a href="https://www.catchafire.org/projects/9672/?src=dashboard&match_id=1768247"><img src="./Catchafire - Dashboard_files/220x160_0060_website_visual_design.jpg" class="bottom-10"></a>

      <header>
        <hgroup>
        <h1 class="font-body-small"><strong><a href="https://www.catchafire.org/projects/9672/?src=dashboard&match_id=1768247">Website Visual Design</a></strong></h1>
          <h2 class="font-body-small">
              <a href="https://www.catchafire.org/organizations/trek-medics-international_8453" class="reset-color">
              <span class="for">for</span>
              Trek Medics International
            </a>
          </h2>
        </hgroup>
      </header>
    </article>


  </section>

</aside>

        </div><!-- content -->


@endsection
