@extends('common')


@section('headerScripts')


<script src="{{ asset('/js/index.min.js') }}"></script>

<script>
$(function () {
  var $projectContainer = $('div.featuredprojects-header');
  var $projects = $projectContainer.children('h5');
  $projects.hide();
  var activityIndex = 0;
  var $activity = $projects.eq(0);
  $activity.show();
  var fadeTime = 500;
  var showTime = 5000;
  function rotateActivities() {
    activityIndex += 1;
    if (activityIndex >= $projects.length) {
      activityIndex = 0;
    }
    $activity.fadeOut(fadeTime, function () {
      $activity = $projects.eq(activityIndex);
      $activity.fadeIn(fadeTime);
    });
  }
  setInterval(rotateActivities, showTime);

  $('div.panel-projectcard-container').slick({
    slidesToScroll: 3,
    slidesToShow: 3
  });

  var $causes = $('.hometop-quickfinder-causes');
  var $causeMenu = $causes.children('select');
 var $skills = $('.hometop-quickfinder-skills');
  var $skillMenu = $skills.children('select');

  $causeMenu.chosen({
    placeholder_text_single: "What do you care about?",
    width: '300px'
  });
  $skillMenu.chosen({
    placeholder_text_single: "What are you good at?",
    width: '300px'
  })
  $('.hometop .btn-action').click(function () {
    $(this).parents('form').submit();
  });
});
</script>
@endsection


@section('title')
<title>iVolunteer - Skills-Based Volunteer Matching</title>
@endsection





@section('content')

          <div id="content" class="home">


            <div class="hometop">
              <div class="container">
                <h2>Use your professional skills to <span><a href="https://www.catchafire.org/projects/">make a difference</a></span></h2>
                <!-- SPAN LINKS TO HOW IT WORKS PAGE -->

                <form action="https://www.catchafire.org/projects/" method="GET">
                  <input type="hidden" name="filter_state" value="init">
                  <div class="hometop-quickfinder">
                    <div class="hometop-quickfinder-causes">
                      <i></i>
                      <select name="cause_filter" style="display: none;">
                        <option value=""></option>

                        <option value="">Any Cause</option>
                        <?php
                          foreach($causes as $cause)
                            echo "<option value=\"$cause->id\">$cause->cause</option>";
                        ?>

                      </select>


                      <!-- Cause Selection through JQUERY-->

                    </div><!-- hometop-quickfinder-causes -->
                    <div class="hometop-quickfinder-skills">
                      <i></i>
                      <select name="skill_filter" style="display: none;">
                        <option value=""></option>

                        <?php
                          foreach($skills as $skill)
                            echo "<option value=\"$skill->id\">$skill->skill</option>";
                        ?>

                      </select>
                      <!-- Coming through JQUERY-->
                    </div><!-- hometop-quickfinder-skills -->
                  </div><!-- hometop-quickfinder -->
                  <a class="btn-action">Find a Project</a>
                </form>

              </div><!-- container -->
            </div><!-- hometop -->

            <div class="featuredprojects">
              <div class="container">

                <div class="featuredprojects-header clearfix">
                  <h3>Featured projects</h3>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/open-hands-legal-services_6810">Open Hands Legal Services</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9785/">Public Speaking Coach project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/care-for-the-homeless_6727">Care for the Homeless</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9784/">Print Materials Design project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/modern-quilt-guild_8818">Modern Quilt Guild</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9783/">Press Kit project</a>.
                  </h5>

                  <h5 style="display: block;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/profiles/60864/posts/">Jason Fox</a> just
                    got matched for
                    a
                    <a href="https://www.catchafire.org/projects/9658/">Website Copywriting project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/profiles/59707/posts/">Johnathan White</a> just
                    got matched for
                    a
                    <a href="https://www.catchafire.org/projects/9707/">Print Materials Design project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/literacy-inc-_3559">Literacy Inc.</a> just
                    listed
                    an
                    <a href="https://www.catchafire.org/projects/9781/">Illustration project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/northeast-passage_8413">Northeast Passage</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9780/">Print Materials Design project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/literacy-inc-_3559">Literacy Inc.</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9779/">Pitch Deck Creation project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/indigenous-education-foundation-of-tanzania_4776">Indigenous Education Foundation of Tanzania</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9778/">Salesforce Database Customization project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/profiles/57819/posts/">Vino Antony</a> just
                    got matched for
                    a
                    <a href="https://www.catchafire.org/projects/9693/">Salesforce Database Customization project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/literacy-inc-_3559">Literacy Inc.</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9777/">Print Materials Design project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/open-hands-legal-services_6810">Open Hands Legal Services</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9776/">Facilitated Strategy Session project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/tender-steps-of-new-york--inc-_7981">Tender Steps of New York, ...</a> just
                    listed
                    an
                    <a href="https://www.catchafire.org/projects/9775/">Accounting System project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/mission-possible_7795">Mission Possible</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9774/">Facebook Campaign Strategy &amp; Evaluation project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/mission-possible_7795">Mission Possible</a> just
                    listed
                    an
                    <a href="https://www.catchafire.org/projects/9773/">E-Newsletter project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/march-of-dimes_8845">March of Dimes</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9771/">Talent Recruitment Strategy project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/spark-microgrants_3052">Spark MicroGrants</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9770/">WordPress Website Construction project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/global-student-embassy_6765">Global Student Embassy</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9769/">Talent Recruitment Strategy project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/global-student-embassy_6765">Global Student Embassy</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9768/">Pricing Strategy project</a>.
                  </h5>

                  <h5 style="display: none;">
                    <span>Activity</span>
                    <a href="https://www.catchafire.org/organizations/food-link_8487">Food Link</a> just
                    listed
                    a
                    <a href="https://www.catchafire.org/projects/9767/">Google Apps Setup project</a>.
                  </h5>

                </div><!-- featuredprojects-header clearfix -->


                <div class="panel-projectcard-container clearfix slick-initialized slick-slider">




                  <div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 4800px; transform: translate3d(-960px, 0px, 0px);"><div class="panel-projectcard  slick-slide slick-cloned" index="-3" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/earned_income_plan_40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9186/">Earned Income Plan</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9186/">
                          30-40 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9186/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/f797d668aff14e52bbe9e5ce8292406f_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $8,000, allowing us to <strong>serve  10,000 deserving children as well as help sustain our environment..</strong>
                            </p>
                            <div>
                              <h4>Shelly L</h4>
                              <h5>Business Developer/Board Member</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/IMG_0619_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/second-chance-toys_984"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/SCT-Logo-Color_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/second-chance-toys_984">Second Chance Toys</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/second-chance-toys_984">Environment</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9186/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-cloned" index="-2" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/donor_relations_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/8255/">Donor Relations</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/8255/">
                          35-45 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/8255/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/c4c5e228ba1b40d99b1f892bd236b08e_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,750, allowing us to <strong>provide  450 food-bearing trees to feed over 1,800 individuals for a lifetime..</strong>
                            </p>
                            <div>
                              <h4>Theresa C</h4>
                              <h5>Trees That Feed Foundation Manager</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/eda0e419bff64eb2a42fea00770831c5_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/trees-that-feed-foundation_7959"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/a66fe90ae28949949db48864aa168121_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/trees-that-feed-foundation_7959">Trees That Feed Foundation</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/trees-that-feed-foundation_7959">Environment</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/8255/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-cloned" index="-1" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/marketing_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/8808/">Brand Messaging</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/8808/">
                          20-30 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/8808/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/515fd480765d4dd9a814a589bc697cf2_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,000, allowing us to <strong>send 5 underserved young people to camp this summer.</strong>
                            </p>
                            <div>
                              <h4>josh b</h4>
                              <h5>Volunteer manager</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/863779f328a34150abed97a7e523fef4_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/steve-s-camp-at-horizon-farms_8099"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/3cb9851532de408581e194faf16dc996_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/steve-s-camp-at-horizon-farms_8099">Steve's Camp at Horizon Farms</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/steve-s-camp-at-horizon-farms_8099">Youth Development</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/8808/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-active" index="0" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/website_design_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9738/">WordPress Website Construction</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9738/">
                          35-45 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9738/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/14583871e48f495e8c6dce22d3065dde_300x180_cropped.JPG&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,750, allowing us to <strong>connect resources to 5,000  people impacted by disabilities.</strong>
                            </p>
                            <div>
                              <h4>Brittany M</h4>
                              <h5>Founder &amp; Executive Director</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/b96080ead7cf4e9d900743bdb561c4c9_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/ablethrive_7990"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/4af5ec8e33534a61b857ffb212e1a285_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/ablethrive_7990">AbleThrive</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/ablethrive_7990">Health &amp; Nutrition</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9738/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-active" index="1" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/donor_recruitment_plan_40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9620/">Donor Recruitment Plan</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9620/">
                          30-40 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9620/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/d59ad544fc894d89893c62a2a83e1f57_300x180_cropped.JPG&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $8,000, allowing us to <strong>train-up and support 10 Mothers Schools in Europe.</strong>
                            </p>
                            <div>
                              <h4>Edit S</h4>
                              <h5>Volunteer manager</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/54ab8e1730d04361b12f2752811b71f1_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/women-without-borders_8734"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/33761d92699d43b1a602eeafe665ff1f_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/women-without-borders_8734">Women without Borders</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/women-without-borders_8734">Women's Issues </a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9620/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-active" index="2" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/website_design_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9654/">Website Visual Design</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9654/">
                          35-45 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9654/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/fe865813397641cc91ea27141c7aa0a6_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,750, allowing us to <strong>enroll approximately 25 students in school.</strong>
                            </p>
                            <div>
                              <h4>Jolinda H</h4>
                              <h5>Executive Director</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/64031244365441b380f4b3cfd453760f_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/goals-haiti_3841"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/tree.green_white_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/goals-haiti_3841">GOALS Haiti</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/goals-haiti_3841">Youth Development</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9654/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide" index="3" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/marketing_40x40_3.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9643/">Pitch Deck Creation</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9643/">
                          20-30 hours
                          over 2-4 weeks
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9643/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/1ecb4a3930394503a662aae963adfe53_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,000, allowing us to <strong>lead 1 training trip to our partners around the world.</strong>
                            </p>
                            <div>
                              <h4>Molly P</h4>
                              <h5>Founder/CEO of the Global Autism Project</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/41ae535e9e684f5a978da1fc22712393_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/global-autism-project_8664"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/3d1091dd39274f77a3a85a7d6a57bc2b_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/global-autism-project_8664">Global Autism Project</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/global-autism-project_8664">Education</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9643/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide" index="4" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/marketing_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9464/">Brand Messaging</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9464/">
                          20-30 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9464/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/474a194a69ac47bead9c3d8346b57e63_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,000, allowing us to <strong>provide a picture of our value to 500 members that support the health and welfare of 7 million people in Dallas-Fort Worth.</strong>
                            </p>
                            <div>
                              <h4>Shawn C</h4>
                              <h5>Deputy Director</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/c51314b1990f407fa22f572190188114_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/north-central-texas-trauma-regional-advisory-council_7358"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/7b48ba105f53437a9e09f5e3100a4cd3_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/north-central-texas-trauma-regional-advisory-council_7358">North Central Texas Trauma Regional Advisory Council</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/north-central-texas-trauma-regional-advisory-council_7358">Health &amp; Nutrition</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9464/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide" index="5" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/brochure_graphic_design_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9560/">Brochure Graphic Design</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9560/">
                          10-20 hours
                          over 1-2 weeks
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9560/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/b4068f0b28264d76bb492d3ff3b442ad_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $3,000, allowing us to <strong>catalyze support among potential constituents, to the benefit of over 450 families annually.</strong>
                            </p>
                            <div>
                              <h4>Anne Marie C</h4>
                              <h5>Executive Director</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/4d3d8a483c9c4e08be74efac8d754513_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/drueding-center_7657"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/288d6f024f594e6992c136c2d4da55dd_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/drueding-center_7657">Drueding Center</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/drueding-center_7657">Housing &amp; Homelessness</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9560/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide" index="6" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/earned_income_plan_40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9186/">Earned Income Plan</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9186/">
                          30-40 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9186/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/f797d668aff14e52bbe9e5ce8292406f_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $8,000, allowing us to <strong>serve  10,000 deserving children as well as help sustain our environment..</strong>
                            </p>
                            <div>
                              <h4>Shelly L</h4>
                              <h5>Business Developer/Board Member</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/IMG_0619_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/second-chance-toys_984"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/SCT-Logo-Color_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/second-chance-toys_984">Second Chance Toys</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/second-chance-toys_984">Environment</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9186/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide" index="7" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/donor_relations_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/8255/">Donor Relations</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/8255/">
                          35-45 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/8255/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/c4c5e228ba1b40d99b1f892bd236b08e_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,750, allowing us to <strong>provide  450 food-bearing trees to feed over 1,800 individuals for a lifetime..</strong>
                            </p>
                            <div>
                              <h4>Theresa C</h4>
                              <h5>Trees That Feed Foundation Manager</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/eda0e419bff64eb2a42fea00770831c5_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/trees-that-feed-foundation_7959"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/a66fe90ae28949949db48864aa168121_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/trees-that-feed-foundation_7959">Trees That Feed Foundation</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/trees-that-feed-foundation_7959">Environment</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/8255/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide" index="8" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/marketing_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/8808/">Brand Messaging</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/8808/">
                          20-30 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/8808/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/515fd480765d4dd9a814a589bc697cf2_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,000, allowing us to <strong>send 5 underserved young people to camp this summer.</strong>
                            </p>
                            <div>
                              <h4>josh b</h4>
                              <h5>Volunteer manager</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/863779f328a34150abed97a7e523fef4_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/steve-s-camp-at-horizon-farms_8099"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/3cb9851532de408581e194faf16dc996_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/steve-s-camp-at-horizon-farms_8099">Steve's Camp at Horizon Farms</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/steve-s-camp-at-horizon-farms_8099">Youth Development</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/8808/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-cloned" index="9" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/website_design_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9738/">WordPress Website Construction</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9738/">
                          35-45 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9738/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/14583871e48f495e8c6dce22d3065dde_300x180_cropped.JPG&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,750, allowing us to <strong>connect resources to 5,000  people impacted by disabilities.</strong>
                            </p>
                            <div>
                              <h4>Brittany M</h4>
                              <h5>Founder &amp; Executive Director</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/b96080ead7cf4e9d900743bdb561c4c9_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/ablethrive_7990"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/4af5ec8e33534a61b857ffb212e1a285_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/ablethrive_7990">AbleThrive</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/ablethrive_7990">Health &amp; Nutrition</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9738/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-cloned" index="10" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/donor_recruitment_plan_40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9620/">Donor Recruitment Plan</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9620/">
                          30-40 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9620/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/d59ad544fc894d89893c62a2a83e1f57_300x180_cropped.JPG&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $8,000, allowing us to <strong>train-up and support 10 Mothers Schools in Europe.</strong>
                            </p>
                            <div>
                              <h4>Edit S</h4>
                              <h5>Volunteer manager</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/54ab8e1730d04361b12f2752811b71f1_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/women-without-borders_8734"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/33761d92699d43b1a602eeafe665ff1f_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/women-without-borders_8734">Women without Borders</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/women-without-borders_8734">Women's Issues </a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9620/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div><div class="panel-projectcard  slick-slide slick-cloned" index="11" style="width: 300px;">
                    <div class="inner">
                      <header>
                        <div style="background-image: url(&#39;/static/19905/images/project_types/website_design_40x40.png&#39;)"></div>
                        <h2><a href="https://www.catchafire.org/projects/9654/">Website Visual Design</a></h2>
                        <h5><a href="https://www.catchafire.org/projects/9654/">
                          35-45 hours
                          over 1-2 months
                        </a></h5>




                      </header>
                      <a href="https://www.catchafire.org/projects/9654/">
                        <figure style="background-image: url(&#39;//www.catchafire.org/media/19905/images/np_covers/fe865813397641cc91ea27141c7aa0a6_300x180_cropped.jpg&#39;)" class="hasimage">
                          <i></i>
                          <figcaption>
                            <p>
                              This project will save us $6,750, allowing us to <strong>enroll approximately 25 students in school.</strong>
                            </p>
                            <div>
                              <h4>Jolinda H</h4>
                              <h5>Executive Director</h5>


                              <img height="32" width="32" src="./Catchafire - Skills-Based Volunteer Matching_files/64031244365441b380f4b3cfd453760f_45x45_cropped.png">

                            </div>
                          </figcaption>
                        </figure>
                      </a>
                      <section>
                        <div class="organizationinfo">



                          <a href="https://www.catchafire.org/organizations/goals-haiti_3841"><img style="height: 32px; width: 32px;" src="./Catchafire - Skills-Based Volunteer Matching_files/tree.green_white_50x50_cropped.png"></a>


                          <h3><a href="https://www.catchafire.org/organizations/goals-haiti_3841">GOALS Haiti</a></h3>
                          <h4><a href="https://www.catchafire.org/organizations/goals-haiti_3841">Youth Development</a></h4>
                        </div><!-- organizationinfo -->
                        <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9654/">Volunteer</a>
                      </section>
                    </div><!-- inner -->
                  </div></div></div><!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->






                  <!-- panel-projectcard panel-whitebox -->



                  <button type="button" data-role="none" class="slick-prev" style="display: block;">Previous</button><button type="button" data-role="none" class="slick-next" style="display: block;">Next</button></div><!-- panel-projectcard-container clearfix -->


                  <div class="panel-organizationcall">
                    <i></i>
                    <p>Are you a nonprofit or social enterprise? <a href="https://www.catchafire.org/project_menu/project_listing/select_project/">List a project</a> or <a href="https://www.catchafire.org/tour/nonprofits/">learn more</a></p>
                  </div><!-- panel-organizationcall -->


    <!--              <section class="case-studies block clear">
                    <h1>Success stories</h1>
                    <a class="options link" href="https://www.catchafire.org/case_studies/">[ See all ]</a>
                    <article class="featured side-block">



                      <a class="banner" href="https://www.catchafire.org/case_studies/41">
                        <img src="./Catchafire - Skills-Based Volunteer Matching_files/Screen_Shot_2014-09-29_at_12.43.21_PM.png" alt="">
                      </a>

                      <div class="fix-float">
                        <div class="impact-statement">
                          <p>Nicole's 35 hour website construction project saved Gardens For Health International $7,000! </p>
                          <a href="https://www.catchafire.org/case_studies/41" class="button">
                            Read more</a>
                          </div>
                        </div>
                      </article>

                      <div class="other-case-studies side-block">


                        <article class="listed-case-study">
                          <figure>

                            <img src="./Catchafire - Skills-Based Volunteer Matching_files/a0b3e9580d6e4ba59a79a1a5e8fe3dc6_140x140_cropped.png" height="110" alt="" class="pbm">
                            <img src="./Catchafire - Skills-Based Volunteer Matching_files/273f90ae550848efb4267c322d6a072b_130x130_cropped.png" height="110" alt="" class="pro">
                            <figcaption class="plus-sign">
                              Vote Solar and Serif Cinar
                            </figcaption>

                          </figure>
                          <div class="fix-float">
                            <h1 class="title">
                              <a href="https://www.catchafire.org/case_studies/42">

                                Vote Solar
                                <span class="and-word">and</span>
                                Serif Cinar

                              </a>
                            </h1>

                            <p class="project-type">
                              <img src="./Catchafire - Skills-Based Volunteer Matching_files/promotional_apparel_40x40.png" alt="">
                              <span class="fix-float">Merchandising</span>
                            </p>

                          </div>
                        </article>

                        <article class="listed-case-study">
                          <figure>

                            <img src="./Catchafire - Skills-Based Volunteer Matching_files/Avatar._1_140x140_cropped.png" height="110" alt="" class="pbm">
                            <img src="./Catchafire - Skills-Based Volunteer Matching_files/d1a968242fbb43e6a90e22e0dca5e670_130x130_cropped.png" height="110" alt="" class="pro">
                            <figcaption class="plus-sign">
                              KiiLN and Larry Chaityn
                            </figcaption>

                          </figure>
                          <div class="fix-float">
                            <h1 class="title">
                              <a href="https://www.catchafire.org/case_studies/40">

                                KiiLN
                                <span class="and-word">and</span>
                                Larry Chaityn

                              </a>
                            </h1>

                            <p class="project-type">
                              <img src="./Catchafire - Skills-Based Volunteer Matching_files/marketing_40x40_3.png" alt="">
                              <span class="fix-float">Pitch Deck Creation</span>
                            </p>

                          </div>
                        </article>

                        <article class="listed-case-study">
                          <figure>

                            <img src="./Catchafire - Skills-Based Volunteer Matching_files/GSN_Logo_13_02_140x140_cropped.png" height="110" alt="" class="pbm">
                            <img src="./Catchafire - Skills-Based Volunteer Matching_files/29c2b8906df741ce88e92809d9f7c456_130x130_cropped.png" height="110" alt="" class="pro">
                            <figcaption class="plus-sign">
                              Generation Schools and Ron Schulhof
                            </figcaption>

                          </figure>
                          <div class="fix-float">
                            <h1 class="title">
                              <a href="https://www.catchafire.org/case_studies/39">

                                Generation Schools
                                <span class="and-word">and</span>
                                Ron Schulhof

                              </a>
                            </h1>

                            <p class="project-type">
                              <img src="./Catchafire - Skills-Based Volunteer Matching_files/strategic_plan_40x40.png" alt="">
                              <span class="fix-float">Strategic Plan</span>
                            </p>

                          </div>
                        </article>

                      </div>
                    </section>
-->
<!--                    <div class="banner-home-enterprisesolution">
                      <h1>Catchafire Enterprise Solution</h1>
                      <h2><span class="rotate"><span class="rotating flip up" style="display: block; -webkit-transform: rotateX(-180deg); transform: rotateX(-180deg);"><span class="front">Take your cause campaign to the next level with an action platform.</span><span class="back">Increase employee engagement, happiness, retention and attraction.</span></span></span></h2>
                      <img src="./Catchafire - Skills-Based Volunteer Matching_files/banner-enterprisesolution.jpg">
                      <a class="btn-action big" href="https://www.catchafire.org/howitworks/enterprises">Learn more</a>
                    </div>-->
                    <!-- banner-home-enterprisesolution -->



                  </div><!-- container -->

                </div><!-- featuredprojects -->
                <script type="text/javascript" src="{{ asset('/js/jquery.simpletextrotator.js') }}"></script>
                <script>
                  $(".rotate").textrotator({
                    animation: "flipUp",
                    separator: ";",
                    speed: 4000
                  });
                </script>

              </div><!-- content -->


@endsection
