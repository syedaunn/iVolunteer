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
<!--<script src="./Catchafire - Dashboard_files/notifications.js"></script>
<script>
  $(function () {
  var interviewNotifications = new CAF.InterviewDashboardNotifications();
  interviewNotifications.accept_time_slot_url = "/scheduling/calendar/accept/";
  interviewNotifications.change_phone_number_url = "/scheduling/calendar/phone/update/";
  });
</script> -->


<script src="{{ asset('/js/jquery.mask.min.js') }}"></script>




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
        <h1 class="font-title-14">Status <a id="change-status"  class="font-body small change-status">[ change ]</a></h1>
    <p id="current-status">
      <?php
        $status = $profile->status;
        if($status == "available")
          echo "Ready to Volunteer";
        if($status == "busy")
            echo "Working on a project until $profle->status_until";
        if($status == "away")
              echo "Not looking for a project until $profle->status_until";

      ?>
    </p>
    </header>
      </section>






  <section>
    <header class="bottom-10">
      <h1 class="font-title-14">Recommended Projects</h1>
    </header>

<!--
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

-->
  </section>

</aside>

        </div><!-- content -->




              <div id="simplemodal-overlay" class="simplemodal-overlay" style="opacity: 0.6; height: 7645px; width: 1349px; position: fixed; left: 0px; top: 0px; z-index: 1001; background: rgb(0, 0, 0);"></div>
              <div id="simplemodal-container" class="simplemodal-container" style="position: fixed; z-index: 1002; height: 280px; width: 502px; left: 383.5px; top: 43px;"><a class="modalCloseImg simplemodal-close" title="Close"></a><div tabindex="-1" class="simplemodal-wrap" style="height: 100%; outline: 0px; width: 100%; overflow: auto;">
                <div id="dialog" class="dialog simplemodal-data" style="display: block;">
                <a id="close-status-modal" href="#" class="simplemodal-close close-button" title="Close" hidefocus="hidefocus"></a>
                <div id="dialog_container"><h2 style="margin-bottom:2px">Availability Status</h2>
                  <form class="dialog-form" id="edit_vol_availability_form" method="POST" action="/profiles/edit_vol_availability/">
                    <input type="hidden" name="redirect_to" class="redirect-to" value="/dashboard">

                    <div class="form-container below-4">
                      <label><input checked="checked" name="status" type="radio" value="0"> I'm ready to volunteer for new projects</label>
                    </div>

                    <div class="form-container below-4">
                      <label><input name="status" type="radio" value="1"> I'm busy working on volunteer projects until:</label><br>

                      <input id="id_busy_until_busy" name="busy_until_busy" type="text" class="hasDatepicker">
                    </div>

                    <div class="form-container below-4">
                      <label><input name="status" type="radio" value="2"> I'm not currently looking for a project. I hope to be ready by:</label>

                      <input id="id_busy_until_inactive" name="busy_until_inactive" type="text" class="hasDatepicker">
                    </div>
                    <button onclick="" type="submit">Submit</button>
                  </form>
                </div>
              </div></div></div>

<style>
#simplemodal-overlay,#simplemodal-container{
  display:none;

}
</style>
<script>

$("#change-status").click(function(){
  $("#simplemodal-overlay").css("display","initial");
  $("#simplemodal-container").css("display","initial");


});

$("#close-status-modal").click(function(){
  $("#simplemodal-overlay").css("display","none");
  $("#simplemodal-container").css("display","none");


});



</script>

@endsection
