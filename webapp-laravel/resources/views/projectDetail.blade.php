@extends('common')


@section('headerScripts')

@endsection


@section('title')
<title> <?php echo "$project->title"; ?> - iVolunteer</title>
@endsection




@section('content')

<script>
$( "body" ).removeClass( "homepage" );

</script>


<style>
#page>header #logo-catchafire a {
  background: url('../../img/logo.png') no-repeat 0 0;
  width: 220px;
  height: 55px;
}
</style>



<div id="content" class="home dashboard project-page">

  <div class="main dashboard-segment">

    <header class="clear bottom-15">
      <a href="#" class="frame-media-c left">
        <img src="{{ asset('/img/')}}<?php echo "/".$project->image; ?>" style="height:175px; width:175px;" ></a>
        <div class="project-page-header left">
          <div class="project-page-header__content">

            <h1 class="font-beta bottom-20"><span class="no-uppercase">We need help</span> <strong> <?php echo $project->title; ?> </strong></h1>

            <p class="font-accent font-delta bottom-0"><span class="font-dim">&nbsp;</a></p>
            </div>
          </div>
        </header>

        <p class="project-page-tooltip">

          This project will save us $<?php echo $mon;?>, allowing us to <strong> <?php echo $project->impact;  ?> </strong>

        </p>






        <section class="clear bottom-20">

          <div class="project-page-col-a left text-right">
            <h3 class="section-title">Estimated Time</h3>
            <h4 class="font-title-24"> <?php echo $project->timeFrom; ?>-<?php echo $project->timeTo; ?> hours</h4>
            <div class="project-page-timespan">Over <?php echo $project->Duration; ?> weeks</div>
          </div>

          <div class="project-page-col-b right user-gen-content">

            <p class="button-list bottom-20 clear">


              <a href="#" class="button arrow applyNowButton">Apply now</a>



              <br><a class="button black small"  onclick="showAjaxDialog(&#39;dialog&#39;, &#39;dialog_container&#39;, &#39;/recommend_friend/9795&#39;, 500, 500);">Recommend a friend</a>

            </p>

          </div>
        </section>
        <div class="project-page-col-a left">
          <nav class="vertical-menu">


            <a href="#" class="current">Details</a>

          </nav>
        </div>
        <div class="project-page-col-b right user-gen-content">



          <section class="bottom-50">
            <section class="bottom-30">

              <div class="panel-whitebox">
                <h3 class="font-title-14">What we need
                </h3>
                <ul>
                  <?php
                  $tok = strtok($project->WhatWeNeed, "\\");

                  while ($tok !== false) {
                    echo "<li>".$tok."</li>";
                    $tok = strtok("\\");
                  }
                  ?>

                </ul>
              </div>

              </section>




              <section class="bottom-30">
                <h3 class="font-title-14">How this will help</h3>
                <p> <?php echo $project->howWillThisHelp; ?> <br><br></p>
              </section>

              <section class="bottom-30">
                <h3 class="font-title-14">What we have in place</h3>
                <p> <?php echo $project->whatWeHaveInPlace; ?> </p>
              </section>
              <section class="bottom-30">
                <h3 class="font-title-14">Fun fact about us</h3>
                <p> <?php echo $project->FunFacts; ?> </p>
              </section>
            </section>




            <p class="button-list top-20 clear">
              <a href="" class="button arrow applyNowButton" >Apply now</a>
              <br><a class="button black small"  onclick="showAjaxDialog(&#39;dialog&#39;, &#39;dialog_container&#39;, &#39;/recommend_friend/9795&#39;, 500, 500);">Recommend a friend</a>
            </p>

          </div>
        </div>


        <aside>
          <a href="/ngo/<?php echo $ngo->name; ?> " class="shadowed-media bottom-20">
            <img src="{{ asset('/img/')}}<?php echo "/".$ngo->image; ?>" alt="Ektta"></a>
          <h3 class="font-title-14"> <?php echo $ngo->name; ?> </h3>

          <p class="button-list">

            <?php
            foreach($cause as $c){
              echo "<a href=\"/searchProject?cause_filter_1=$c->id\" class=\"micro button\">";
              echo str_replace('and','&amp;',$c->cause);
              echo "</a><br>";

            }

            ?>
          </p>

          <p class="bottom-30"> <?php echo $ngo->mission; ?> .<br>.<br></p>

          <ul class="no-bullets font-title-14 bottom-30">




          </ul>


          <h3 class="font-title-14 font-dim">What we do</h3>
          <?php echo $ngo->whatWeDo;?>
          <br>


          <p><a href="/ngo/<?php echo $ngo->name; ?>">Learn more</a></p>



        </aside>








        <!-- GENERIC DIALOG -->

        <div id="dialog" class="dialog">
          <a href="" class="simplemodal-close close-button" title="Close" hidefocus="hidefocus"></a>
          <div class="bottom-20">
            <h2>INVITE A FRIEND TO HELP</h2>
          </div>

          <form id="invite_form">
            <h3 class="bottom-10">FRIEND'S EMAIL ADDRESS</h3>
            <p id="error_container"></p>
            <div class="bottom-30" style="width: 300px">
              <input type="email" name="invite_mail" id="invite_mail" class="wide">
              <input type="hidden" id="project_id" value="<?php echo $project->id; ?>>">
            </div>

            <p>We'll send your friend an email, inviting them to join you on this project. If they accept, they'll be listed on the project's summary page as a contributor</p>

            <a href="" class="button" id="invite_modal_button">Invite</a>
          </form>

        </div>

        <!-- GENERIC DIALOG -->
        <div id="apply_dialog" class="dialog">
          <a href="" class="simplemodal-close close-button" title="Close" hidefocus="hidefocus"></a>
          <div class="bottom-20">
            <h2>Apply for <?php echo $project->title; ?></h2>
          </div>
          @if (Auth::guest())
            <br>
            <br>
            <h3>Please <a href="/auth/login">log in</a> to apply or <a href="/auth/register">Sign up</a> to start volunteering. </h3>

          @else

          <form id="apply_form">

            <p id="error_container"></p>
            <div class="bottom-30" style="width: 300px">
              <input required type="text" name="skype" id="skype" class="wide" placeholder="Skype ID">
              <br>
              <input required type="text" name="cover" id="cover" class="wide" placeholder="Impress the NGO and tell them this is meant for you!">
              <input type="hidden" id="project_id" value="<?php echo $project->id; ?>">
            </div>

            <p>We'll present your application to <b> <?php echo $ngo->name; ?>, As soon they decided to select you, we will notify you immediately!. </b></p>

            <a href="" class="button" id="apply_modal_button">Apply</a>
          </form>

          @endif


        </div>





      </div><!-- content -->
<script>
$(".applyNowButton").click(function(){
  if ($(event.currentTarget).hasClass('dim')) {
        return;
      }
      $('#apply_dialog').modal({
        minHeight: 250,
        onClose: function() {
          $.modal.close();
          window.location.reload(true);
        }
      });

});


$("#apply_modal_button").click(function(){

  in1 = $('input[name="skype"]').val();
  in2 = $('input[name="cover"]').val();
  in3 =$("#project_id").val();

  $.ajax({
    type: "POST",
    url: "/projects",
    data:  { skype: in1, cover: in2, pid: in3 }

  });


  // /projects
  event.preventDefault();
});
</script>

      @endsection
