var CAF = CAF || {};
CAF.ProjectSearch = CAF.ProjectSearch || {};

CAF.ProjectSearch = function () {

  var self = this,
    filterDescTmpl = _.template($('#filter-desc-tmpl').html()),
    isRotatingSkills = true,
    initalSkills = new Array('Communications', 'Accounting', 'Marketing', 'Research', 'Writing', 'Fundraising', 'Recruiting', '');

  $("#filter_form").submit(function(event) {
    if ($('input[name="skill_filter"]:checked').length === 0 &&
        $('input[name="cause_filter"]:checked').length === 0) {
      if ($('input[name="filter_state"]').val() === 'none') {
        event.preventDefault();
        $('#filter_submit_msg').show().delay(5000).fadeOut('slow');
      }
    } else {
      if ($("#filter_submit_btn").html() === "Update") {
        $('input[name="filter_state"]').prop("value", "session");
      } else {
        $('input[name="filter_state"]').prop("value", "init");
      }
    }
  });

  $("#filter_cancel_link").click(function(event) {
    event.preventDefault();

    // Restore the submitted state of each checkbox.
    $('input[name="cause_filter"]').each(function() {
      $(this).attr('checked', $(this).data("submitValue"))
    });
    $('input[name="skill_filter"]').each(function() {
      $(this).attr('checked', $(this).data("submitValue"))
    });

    self.updateSkills();
    self.updateCauses();

    $("#edit_filters").hide();
    $("#results_headline").show();
    $("#show_edit_filters").show();
  });

  $("#search-form").submit(function(event) {
    if (!$('#search').val()) {
      event.preventDefault();
    }
  });

  $(document).keydown(function(event) {
    // Esc key cancels popups.
    if (event.which === 27) {
      $("#cancel_causes").trigger("click");
      $("#cancel_skills").trigger("click");
    }
  });

  $("#skills_content").click(function(event) {
    event.preventDefault();
    isRotatingSkills = false;
    $("fieldset#skills").show();
    $("fieldset#causes").hide();
  });

  self.updateSkills = function () {
    var names = [];
    self.isRotatingSkills = false;
    // Store the original state of each checkbox in the DOM.
    $('input[name="skill_filter"]').each(function() {
      $(this).data("oldValue", $(this).is(":checked"));
    });
    $('input[name="skill_filter"]:checked').map(function() {
      names.push(self.all_skills[$(this).val()]);
    });
    if (names.length) {
      var tmplData = {
        filter_items: names,
        // the template will generate 'any kind of' if filter_items
        // count equals the all_items count, so prevent this for skills.
        all_items: {}
      };
      $("#skills_content").html(filterDescTmpl(tmplData));
      $("#skills_content").removeClass('empty');
    } else {
      $("#skills_content").html('');
      $("#skills_content").addClass('empty');
    }
    $("fieldset#skills").hide();
  }

  $("#update_skills").click(function(event) {
    event.preventDefault();
    self.updateSkills();
  });

  $("#cancel_skills").click(function(event) {
    event.preventDefault();
    // Restore the original state of each checkbox.
    $('input[name="skill_filter"]').each(function() {
      $(this).attr('checked', $(this).data("oldValue"))
    });
    $("fieldset#skills").hide();
  });

  $("#causes_content").click(function(event) {
    event.preventDefault();
    $("fieldset#causes").show();
    $("fieldset#skills").hide();
  });

  self.updateCauses = function () {
    var names = [];
    // Store the original state of each checkbox in the DOM.
    $('input[name="cause_filter"]').each(function() {
      $(this).data("oldValue", $(this).is(":checked"));
    });
    $('input[name="cause_filter"]:checked').map(function() {
      names.push(self.all_causes[$(this).val()]);
    });
    var tmplData = {
      filter_items: names,
      all_items: self.all_causes
    };
    $("#causes_content").html(filterDescTmpl(tmplData));
    $("fieldset#causes").hide();
  }

  self.saveSubmittedValues = function () {
    // Store the submitted state of each checkbox in the DOM for form cancel.
    $('input[name="cause_filter"]').each(function() {
      $(this).data("submitValue", $(this).is(":checked"));
    });
    $('input[name="skill_filter"]').each(function() {
      $(this).data("submitValue", $(this).is(":checked"));
    });
  }

  $("#update_causes").click(function(event) {
    event.preventDefault();
    self.updateCauses();
  });

  $("#cancel_causes").click(function(event) {
    event.preventDefault();
    // Restore the original state of each checkbox.
    $('input[name="cause_filter"]').each(function() {
      $(this).attr('checked', $(this).data("oldValue"))
    });
    $("fieldset#causes").hide();
  });

  $("#show_edit_filters").click(function(event) {
    event.preventDefault();
    $("#filter_submit_btn").html("Update");
    $("#filter_cancel_link").show();
    $("#filter_cancel_link > a").show();
    $("#recent_opps_header").hide();
    $("#edit_filters").show();
    $(this).hide();
  });

  self.rotateSkills = function(pos){
    if(pos == initalSkills.length)
      return;
    
    var tmplData = {
        filter_items: [initalSkills[pos]],
        all_items: {}
      };
    $("#skills_content").html(filterDescTmpl(tmplData));

    setTimeout(function(){
      if(isRotatingSkills)
        self.rotateSkills(++pos);
    }, 500);
  };

};
