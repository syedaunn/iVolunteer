@extends('common')


@section('headerScripts')

@endsection


@section('title')
<title> <?php echo $ngo->name;?> - iVolunteer</title>
@endsection




@section('content')

<script>
$( "body" ).removeClass( "homepage" );
$( "body" ).addClass( "home" );
$( "body" ).addClass( "dashboard" );
$( "body" ).addClass( "org-profile" );
</script>




<div id="content" class="home dashboard org-profile">

  <div class="main" id="profile-main">






    <header class="profile-header dashboard-block">
      <figure class="profile-pic left">

        <img width="160" height="160" src="{{ asset('/img/')}}<?php echo "/".$ngo->image; ?>">




      </figure>
      <div class="profile-header--content fix-float">
        <hgroup class="below-6">
          <h1 class="font-title-40"> <?php echo strtoupper($ngo->name); ?> </h1>

          <?php if($ngo->website != null){?>
            <p class="bottom-10">
              <a href="http://<?php echo $ngo->website;?>" target="_blank">
                <?php echo $ngo->website;?></a>
              </p>
              <?php }?>


            </h2>

          </hgroup>

          <p class="below-0">
            <?php
            foreach($cause as $c){
              echo "<a href=\"#\" class=\"micro button\">";
              echo str_replace('and','&amp;',$c->cause);
              echo "</a>&nbsp;&nbsp;";

            }

            ?>


          </p>
        </div>
      </header>



      <div class="dashboard-block org-profile">

        <?php if($open != null){?>
          <h1 class="font-title-28 bottom-10">Open projects</h1>



          <?php foreach($open as $prc){       ?>

            <article class="pbm-project-status ">
              <div class="pbm-project-status__status matched volunteer-wrap">
                <a href="/projects/<?php echo $prc->id; ?>/" class="button volunteer">
                  Learn More </a>
                </div>
                <div class="pbm-project-status__desc">
                  <a href="/projects/<?php echo $prc->id; ?>/">
                    <img src="{{ asset('/img') }}/<?php echo $prc->image;?>" height="103px" width="170" alt="<?php echo $prc->title;?>" class="pbm-project-status__pbm-avatar right-20">
                  </a>
                  <div class="pbm-project-status__project-info fix-float">
                    <h1 class="title"><a href="/projects/<?php echo $prc->id; ?>/">
                      <span>We need help</span>
                      <?php echo $prc->title; ?>
                    </a></h1>
                  </div>
                </div>
              </article>




              <?php }
            }
            if($work != null){?>
              <br/><br/><br/>
              <h1 class="font-title-28 bottom-10">Ongoing projects</h1>

              <?php foreach($work as $prc){       ?>

              <article class="pbm-project-status listed-completed-project listed-org">
                <div class="pbm-project-status__status matched">
                  <img class="pbm-project-status__pro-avatar" src="./ngo_files/IMG_0086_100x100_cropped.png" alt="Ramesh L">
                  <div class="pbm-project-status__pro-info">
                    <h1 class="font-title-14">Professional</h1>
                    <p class="font-accent bottom-0">Ramesh L<br><span class="font-dim">Volunteer</span></p>
                  </div>
                </div>
                <div class="pbm-project-status__desc">
                  <img class="pbm-project-status__pbm-avatar right-20" src="./ngo_files/Unmesh Surili Graduation_100x100_cropped.png" height="103px" width="170" alt="Unmesh Sheth">
                  <div class="pbm-project-status__project-info fix-float">
                    <div class="header">
                      <h1 class="font-title-14"><a class="reset-color" href="https://www.catchafire.org/projects/3659/">Business Plan Writing</a></h1>
                      <h2 class="secondary completion">
                        Completed 05/07/2014
                      </h2>
                    </div>
                      </div>
                    </div>
                    <div class="popup-note pending top-arrow">
                      Ramesh has not provided a testimonial.
                    </div>
                  </article>







                  <?php }
                }
                if($close != null){?>


<br/><br/><br/>
                    <h1 class="font-title-28 bottom-10">Completed projects</h1>
                    <?php foreach($close as $prc){       ?>



                    <article class="pbm-project-status listed-completed-project listed-org">

                      <div class="pbm-project-status__status matched">
                        <img class="pbm-project-status__pro-avatar" src="{{ asset('/img') }}/<?php echo $prc['userP']->image; ?>" height="102px" width="102px" alt="Roychelle L">
                        <div class="pbm-project-status__pro-info">
                          <h1 class="font-title-14">Professional</h1>
                          <p class="font-accent bottom-0"><a class="reset-color" href="#"> <?php echo $prc['user']->name." ".$prc['userP']->last_name; ?> </a><br><span class="font-dim">Volunteer</span></p>
                        </div>
                      </div>
                      <div class="pbm-project-status__desc">
                        <img class="pbm-project-status__pbm-avatar right-20" src="{{ asset('/img') }}/<?php echo $prc['project']->image;?>" height="103px" width="170" alt="<?php echo $prc['project']->title; ?>">
                        <div class="pbm-project-status__project-info fix-float">
                          <div class="header">
                            <h1 class="font-title-14"><a class="reset-color" href="/projects/<?php echo $prc['project']->id;?>/" > <?php echo $prc['project']->title; ?> </a></h1>
                            <h2 class="secondary completion">

                              Completed <?php echo date('F/j/Y',strtotime($prc['status']->assigned_on));?>

                            </h2>
                          </div>

                            </div>
                          </div>






                          <div class="popup-note pending top-arrow">
                            <?php  if($prc['status']->testimony != null){
                              echo $prc['status']->testimony;
                              } else{
                                echo $prc['user']->name." has not provided a testimonial.";
                            }?>
                          </div>
                        </article>




                        <?php }
                      } ?>



                      </div>

                    </div>

                    <aside>
                      <header class="bottom-30">
                        <div class="bottom-20">

                          <p class="h-score money-saved">
                            Saved <i class="ir info">(i)</i>
                            <strong>PKR <?php echo $d; ?></strong>
                            <span class="popup-note top-arrow">The amount of money this
                              Organization has saved by completing Catchafire projects.</span>
                            </p>

                          </div>


                          <a href="#" title="Add this to your Favorite Organizations list on your profile page and allow you to get notifications." class="button below-4">Follow&nbsp;</a>
                          <a href="#" title="Post a Project" class="button below-4">&nbsp;&nbsp;&nbsp;Post Project&nbsp;&nbsp;&nbsp;</a>



                        </header>
                        <section class="bottom-30">
                          <h1 class="font-title-14 bottom-10">Mission

                          </h1>
                          <div class="below-4">
                            <?php echo $ngo->mission;?>
                          </div>
                          <br>

                          <h1 class="font-title-14 bottom-10">What we do

                          </h1>
                          <div class="below-4">
                            <?php echo $ngo->whatWeDo;?>


                          </div>


                          <!-- LINKS -->
                          <div class="below-1">
                            <h1 class="font-title-14 below-2">Links </h1>
                            <ul class="below-4">

                              <?php if($ngo->facebook != null){?>
                                <li>
                                  <i class="ir www-bullet-icon top-align"></i>
                                  <span class="bullet-desc">
                                    <a href="http://<?php echo $ngo->facebook; ?>" target="_blank" title="Facebook">Facebook</a>


                                  </span>
                                </li>
                                <?php }?>
                                <?php if($ngo->linkedin != null){?>
                                  <li>
                                    <i class="ir www-bullet-icon top-align"></i>
                                    <span class="bullet-desc">
                                      <a href="http://<?php echo $ngo->linkedin; ?>" target="_blank" title="LinkedIn">LinkedIn</a>

                                    </span>
                                  </li>
                                  <?php }?>
                                  <?php if($ngo->twitter != null){?>
                                    <li>
                                      <i class="ir www-bullet-icon top-align"></i>
                                      <span class="bullet-desc">
                                        <a href="https://<?php echo $ngo->twitter; ?>" target="_blank" title="Twitter">Twitter</a>

                                      </span>
                                    </li>
                                    <?php }?>
                                    <?php if($ngo->website != null){?>
                                      <li>
                                        <i class="ir www-bullet-icon top-align"></i>
                                        <span class="bullet-desc">
                                          <a href="http://<?php echo $ngo->website; ?>" target="_blank" title="Website">Website</a>

                                        </span>
                                      </li>
                                      <?php }?>

                                    </ul>

                                  </div>


                                </section>
                              </aside>



                              <!-- GENERIC DIALOG -->
                              <div id="dialog" class="dialog">
                                <a href="https://www.catchafire.org/organizations/ektta_3889/projects#" class="simplemodal-close close-button" title="Close" hidefocus="hidefocus"></a>
                                <div id="dialog_container">
                                </div>
                              </div>

                              <script type="text/javascript">

                              // this will fire when any of the like widgets are "liked" by the user
                              FB.Event.subscribe('edge.create', function(href, widget) {
                                $('#favorites-suggest').slideDown();
                              });
                              </script>


                              <script src="./ngo_files/nonprofit.js"></script>





                            </div><!-- content -->



                            @endsection
