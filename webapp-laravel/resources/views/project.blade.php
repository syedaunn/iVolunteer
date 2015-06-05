@extends('common')


@section('headerScripts')

<script src="{{ asset('/js/project_search.min.js') }}"></script>

<style>
.panel-projectcard {
  display: inline-block;
  vertical-align: top;
  margin-left: 10px;
}
.panel-projectcard a:hover {
  text-decoration: none;
}
h1.page-title {
  text-transform: none !important;
  font-weight: normal !important;
  font-size: 28px !important;
}
.opportunities-filters > div {
  position: relative;
}
.opportunities-filters h2 {
  text-transform: none !important;
  font-weight: normal !important;
  font-size: 20px !important;
  display: inline;
  margin-left: 25px;
}
.opportunities-filters section > i {
  display: block;
  position: absolute;
  height: 20px;
  width: 20px;
  left: 0;
  top: 20px;
  opacity: 0.15;
}
.opportunities-filters .chosen-choices {
  border: none;
  background-image: none;
}
.opportunities-filters .chosen-drop {
  background-color: #000000;
}
.opportunities-filters .chosen-results {
  color: #ffffff;
}
.opportunities-filters .chosen-container {
  position: absolute;
}
.opportunities-filters .chosen-container.chosen-container-empty {
  display: none;
}
.opportunities-filters .chosen-container.chosen-container-active {
  display: inline-block;
}
.opportunities-filters .chosen-container.chosen-without-drop {
  width: inherit !important;
}
.opportunities-filters .chosen-container.chosen-without-drop .search-field {
  display: none;
}
.opportunities-filters .chosen-container.chosen-without-drop .search-choice {
  text-align: center;
}
.opportunities-filters .chosen-container.chosen-without-drop .search-choice.delete {
  background-color: #ff0000;
  background-image: none;
  color: #ffffff;
  font-weight: bold;
}

.opportunities-filters .filter-add,
.opportunities-filters .filter-selected {
  display: inline-block;
  position: relative;
}
.opportunities-filters .filter-clear {
  margin-left: 10px;
  display: none;
}
.opportunities-filters .filter-clear.show {
  display: inline-block;
}

.opportunities-filters .filter-edit {
  margin-right: 10px;
}

/* FIXING OVERFLOW ISSUE. OTHERWISE BADGE CAN'T RENDER OUTSIDE THE PANEL */
.panel-projectcard {
  overflow: visible;
}

/* HIDING BADGE IF THERE'S NO CLASS "BADGE" */
.panel-projectcard .badgeplaceholder {
  display: none;
}

/* SHOWING BADGE WHEN CLASS "BADGE" IS FOUND */
.panel-projectcard.badge .badgeplaceholder {
  display: block;
}

/* ACTUAL BADGE CSS STUFF */
.panel-projectcard.badge header {
  padding: 24px 64px 16px 62px
}

.badgeplaceholder {
  background: white;
  border: 1px solid #eaeaea;
  padding: 6px;
  display: block;
  position: absolute;
  top: 14px;
  right: -8px;
  border-radius: 4px 0 0 4px;
  box-shadow: 0 1px 2px rgba(0,0,0,0.06);
}

.badgeplaceholder img {
  display: block;
  height: 32px;
}

.badgeplaceholder:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  content: "";
  border-top: 4px solid #DDDDDD;
  border-left: 4px solid #ddd;
  bottom: -8px;
  right: -1px;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
}



</style>









<script>
function _normalizeQueryDataToList(value) {
  var type = typeof value;
  if (type === 'undefined') {
    return [];
  }
  if (type === 'string') {
    return [value];
  }
  return value;
}
function normalizedFilterData() {
  var query = URI().query(true);
  return {
    causes: _normalizeQueryDataToList(query.cause_filter),
    skills: _normalizeQueryDataToList(query.skill_filter)
  };
}
var userChoices = {
  causes: [29],
  skills: [30, 33, 34]
};
$(function () {
  var filterQuery = normalizedFilterData();
  var choiceMaps = {'causes': {}, 'skills': {}};
  var currentXHR = [];
  var $searchSection = $('.filters-search');
  var $causesSection = $('.filters-causes');
  var $skillsSection = $('.filters-skills');
  var $currentCardContainer = $('.project-card-list');
  var $choiceButton = $('.btn-skillscauses');
  var $smallSearchForm = $('#search-form');
  var $largeSearchForm = $('#search-form-large');
  var $noProjectsBanner = $('.opportunities-noprojects');
  var $noProjectsChoiceText = $noProjectsBanner.find('span.choices-text');
  var $noProjectsSearchText = $noProjectsBanner.find('span.search-text');

  $.each(['all', 'choices', 'search'], function (i, name) {
    if ($('.project-card-list-' + name).length) {
      return;
    }
    var $div = $('<div style="display: none;">');
    $div.addClass('project-card-list');
    $div.addClass('project-card-list-' + name);
    $currentCardContainer.after($div);
  });

  var $allCardContainer = $('.project-card-list-all');
  var $choiceCardContainer = $('.project-card-list-choices');
  var $searchCardContainer = $('.project-card-list-search');

  function choiceMode(query) {

    $searchSection.hide();
    $largeSearchForm.hide();
    $choiceButton.hide();
    $smallSearchForm.show();
    $causesSection.show();
    $skillsSection.show();
    $noProjectsChoiceText.show();
    $noProjectsSearchText.hide();
    if ($.isEmptyObject(choiceMaps.causes) && $.isEmptyObject(choiceMaps.skills)) {
      if ($allCardContainer.children().length) {
        $allCardContainer.fadeTo(0, 1);
        $allCardContainer.show();
        $choiceCardContainer.hide();
        $searchCardContainer.hide();
        $currentCardContainer = $allCardContainer;
      } else {
        $currentCardContainer.fadeTo('fast', 0.2);
        $.get('/searchProject', [{name: 'filter_state', value: 'init'}], function (data, textStatus, jqXHR) {
          $allCardContainer.html(data);
          $allCardContainer.fadeTo(0, 1);
          $allCardContainer.show();
          $choiceCardContainer.hide();
          $searchCardContainer.hide();
          $currentCardContainer = $allCardContainer;
        });
      }
    } else if (!!query) {
      query.push({name: 'filter_state', value: 'init'});
      $currentCardContainer.fadeTo('fast', 0.2);

      $.get('/searchProject', query, function (data, textStatus, jqXHR) {
        $choiceCardContainer.html(data);
        $choiceCardContainer.fadeTo(0, 1);
        $choiceCardContainer.show();
        $allCardContainer.hide();
        $searchCardContainer.hide();
        $currentCardContainer = $choiceCardContainer;
      });
    } else {
      $choiceCardContainer.fadeTo(0, 1);
      $choiceCardContainer.show();
      $allCardContainer.hide();
      $searchCardContainer.hide();
      $currentCardContainer = $choiceCardContainer;
    }
    return false;
  }

  function choiceModeHandler() {
    choiceMode();
    return false;
  }

  function searchMode(query) {
    $currentCardContainer.fadeTo('fast', 0.2);
    query.push({name: 'filter_state', value: 'init'});
    //TODO: SEARCH RESULT HERE
    $.get('/searchProject', query, function (data, textStatus, jqXHR) {
      $searchCardContainer.html(data);
      $searchCardContainer.fadeTo(1, 1.0);
      $allCardContainer.hide();
      $choiceCardContainer.hide();
      $searchCardContainer.show();
      $currentCardContainer = $searchCardContainer;
    });
    $searchSection.show();
    $largeSearchForm.show();
    $choiceButton.show();
    $smallSearchForm.hide();
    $causesSection.hide();
    $skillsSection.hide();
    $noProjectsChoiceText.hide();
    $noProjectsSearchText.show();
    return false;
  }

  $currentCardContainer.parent().on('click', '.opportunities-noprojects a', choiceModeHandler);
  $choiceButton.click(choiceModeHandler);

  function triggerSearch($form) {
    var query = [{name: 'name_filter', value: $form.find('input').val()}];
    searchMode(query);
    return false;
  }

  $searchSection.find('.btn-action').click(function () {
    triggerSearch($largeSearchForm);
    $smallSearchForm.find('input').val($largeSearchForm.find('input').val());
    return false;
  });
  $smallSearchForm.submit(function () {
    triggerSearch($smallSearchForm);
    $largeSearchForm.find('input').val($smallSearchForm.find('input').val());
    return false;
  });
  $largeSearchForm.submit(function () {
    triggerSearch($largeSearchForm);
    $smallSearchForm.find('input').val($largeSearchForm.find('input').val());
    return false;
  });

  $.each(['causes', 'skills'], function (_, filterName) {
    var choiceMap = choiceMaps[filterName];
    var $section = $('.opportunities-filters section.filters-' + filterName);
    var $select = $section.find('select');
    var $addLinkLabel = $section.find('.filter-add');
    var $addLinkText = $addLinkLabel.children('a').children('span');
    var $clearLink = $section.find('.filter-clear');
    var $selected = $section.find('.filter-selected');
    var $dropdown = $section.find('.filter-dropdown');
    var $items = $dropdown.find('li');
    var currentFilterPks = filterQuery[filterName];

    function handleChoiceChange() {
      var query = [];

      skillCount=0;
      causeCount=0;

      $.each(choiceMaps.causes, function (key, value) {
        causeCount = ++causeCount || 1;
        str = 'cause_filter_' + causeCount;
        query.push({name: str, value: key});
      });
      $.each(choiceMaps.skills, function (key, value) {
        skillCount = ++skillCount || 1;
        strr = 'skill_filter_' + skillCount;
        query.push({name: strr, value: key});
      });
      //console.log("b  "+handleChoiceChange.causeCount);
      //console.log("c  "+handleChoiceChange.skillCount);
      choiceMode(query);
      if (!$.isEmptyObject(choiceMap)) {
        $clearLink.addClass('show');
        $addLinkText.text('add');
      } else {
        $clearLink.removeClass('show');
        $addLinkText.text('filter');
      }
    }

    function addChoiceLabel(pk, name) {
      var $choiceLabel = $('<div class="filter-edit">');
      var $remove = $('<a>Remove</a>');
      $remove.attr('href', '#' + pk);
      $choiceLabel.text(name);
      $choiceLabel.append($remove);
      $choiceLabel.append($('<i></i>'));
      choiceMap[pk] = $choiceLabel;
      $selected.append($choiceLabel);
      return $choiceLabel;
    }

    $addLinkLabel.click(function () {
      $dropdown.show();
      return false;
    });

    $clearLink.click(function () {
      $selected.children().remove();
      choiceMap = {};
      choiceMaps[filterName] = choiceMap;
      handleChoiceChange();
      return false;
    });

    $section.on('click', '.filter-edit', function (evt) {
      var $this = $(this);
      var pk = $this.find('a').attr('href').slice(1);
      var $choice = choiceMap[pk];
      delete choiceMap[pk];
      if (typeof $choice === 'undefined') {
        // this shouldn't happen
        return;
      }
      $choice.remove();
      handleChoiceChange();
      return false;
    });

    $items.click(function () {
      var $link = $(this).find('a');
      var pk = $link.attr('href').slice(1);
      if (typeof choiceMap[pk] !== 'undefined') {
        return;
      }
      var name = $link.text();
      addChoiceLabel(pk, name);
      $dropdown.hide();
      handleChoiceChange();
      return false;
    });

    $dropdown.clickOutside(function () {
      $dropdown.hide();
    });

    function initialChoiceLabelSetup() {
      var $link = $dropdown.find('a[href="#' + this + '"]');
      if (!$link.length) {
        return;
      }
      var name = $link.text();
      if (!name) {
        return;
      }
      addChoiceLabel(this, name);
      $clearLink.addClass('show');
      $addLinkText.text('add');
    }

    $.each(currentFilterPks, initialChoiceLabelSetup);
    $.each(userChoices[filterName], initialChoiceLabelSetup);
  });
  // end $.each
});
</script>

@endsection


@section('title')
<title>Project Listing - iVolunteer</title>
@endsection


@section('content')


<script>

$("body").removeClass( "homepage" );
$( "body" ).addClass( "page-wide" );
$( "body" ).addClass( "page-opportunities" );

</script>







<div id="content" class="opportunities">

  <div class="container below-12">
    <div class="span-24 last main">

      <div class="span-24">

        <div class="opportunities-filters">
          <header class="clearfix">
            <h1 class="page-title">Find a Project</h1>

            <a class="btn-skillscauses" href="#" style="display: none;">Search by causes/skills</a>
            <form method="GET" id="search-form" action="#" class="search-wrap">
              <input type="text" class="search" placeholder="Search" name="name_filter" id="search" autocomplete="off" value="">
            </form>

          </header>

          <section class="filters-search clearfix" style="display: none;">
            <a class="btn-action" href="#">Search</a>
            <form method="GET" id="search-form-large" action="#">
              <input type="text" name="name_filter" autocomplete="off" value="">
            </form>
          </section>
          <section class="filters-causes">
            <i></i>
            <span style="font-size:90%;">What do you care about?</span>
            <div class="filter-selected">
              </div>
              <label class="filter-add">
                <a href="#"><span>add</span> causes</a>
                <div class="filter-dropdown" style="display: none;">
                  <ul>
                    <?php
                      foreach($causes as $cause)
                        echo "<li><a href=\"#$cause->id\">$cause->cause</a></li>";

                    ?>

                  </ul>
                </div>
              </label>
              <label class="filter-clear show">
                <a href="#">clear</a>
              </label>
            </section>
            <section class="filters-skills">
              <i></i>
              <span style="font-size:90%;">What are you good at?</span>
              <div class="filter-selected">
                </div>
                <label class="filter-add">
                  <a href="#"><span>add</span> skills</a>
                  <div class="filter-dropdown" style="display: none;">
                    <ul>
                      <?php
                        foreach($skills as $skill)
                          echo "<li><a href=\"#$skill->id\">$skill->skill</a></li>";

                      ?>


                    </ul>
                  </div>
                </label>
                <label class="filter-clear show">
                  <a href="#">clear</a>
                </label>
              </section>

            </div>
            <div class="project-card-list project-card-list-choices">


              <div class="opportunities-results">


                <h3>1 projects found</h3>


              </div><!-- opportunities-results -->

              <article class="pbm-project-status">



                <div class="panel-projectcard ">
                  <div class="inner">
                    <header>
                      <div style="background-image: url(&#39;/static/19998/images/project_types/website_design_40x40.png&#39;)"></div>
                      <h2><a href="">WordPress Website Construction</a></h2>
                      <h5><a href="">
                        35-45 hours
                        over 1-2 months
                      </a></h5>




                    </header>
                    <a href="#">
                      <figure style="background-image: url(&#39;//www.catchafire.org/media/19998/images/np_covers/86cfce4b938e46a59a06ee38ad1422c6_300x180_cropped.png&#39;)" class="hasimage">
                        <i></i>
                        <figcaption>
                          <p>
                            This project will save us $6,750, allowing us to <strong>demonstrate social impact to 100 s of nonprofits.</strong>
                          </p>
                          <div>
                            <h4>Unmesh S</h4>
                            <h5>Co Founder of Ektta and SoPact</h5>


                            <img height="32" width="32" src="./Catchafire - Projects_files/Unmesh Surili Graduation_45x45_cropped.png">

                          </div>
                        </figcaption>
                      </figure>
                    </a>
                    <section>
                      <div class="organizationinfo">



                        <a href="#"></a>


                        <h3><a href="#">Ektta</a></h3>
                        <h4>&nbsp;</h4>
                      </div><!-- organizationinfo -->
                      <a class="btn-action btn-volunteer" href="https://www.catchafire.org/projects/9795/">Volunteer</a>
                    </section>
                  </div><!-- inner -->
                </div><!-- panel-projectcard panel-whitebox -->







              </article>

            </div><div style="display: none;" class="project-card-list project-card-list-search"></div><div style="display: none;" class="project-card-list project-card-list-all"></div>

            <script>
            $(function () {
              var projectSearch = new CAF.ProjectSearch();

              projectSearch.all_skills = {"2": "Accounting", "4": "Communications", "5": "Graphic Design", "6": "Finance", "7": "Human Resources", "9": "Marketing", "11": "Photography & Video", "12": "Public Relations", "13": "Social Media", "14": "Strategy Consulting", "16": "Fundraising", "19": "Business Development", "21": "Branding", "23": "Writing", "24": "Digital Marketing", "26": "Entrepreneurship", "27": "Coaching", "28": "Data Analysis", "29": "Database Administration", "30": "Information Technology", "31": "Management", "33": "Web Design", "34": "Web Development", "35": "Legal", "36": "Research"};
              projectSearch.all_causes = {"33": "Animals", "34": "Arts & Culture", "35": "Civil Rights", "36": "Justice & Legal Services", "37": "Human Services", "38": "Religion & Spirituality", "39": "Philanthropy & Capacity Building", "8": "Education", "41": "Disaster Relief", "42": "Disease & Medical Research", "43": "Employment Services", "44": "Youth Development", "45": "Community & Economic Development", "46": "Black Male Achievement", "13": "Housing & Homelessness", "27": "Women's Issues ", "40": "Health & Nutrition", "21": "International Affairs", "9": "Environment", "47": "Maternal Health", "29": "Science & Technology"};
              projectSearch.opportunities_url = '/projects/';

              projectSearch.saveSubmittedValues();
              projectSearch.updateSkills();
              projectSearch.updateCauses();

              $(window).load(function(){

              });

            });
            </script>

          </div><!-- span-24 -->
        </div><!-- span-24 last main -->
      </div><!-- container -->

    </div><!-- content -->



    @endsection
