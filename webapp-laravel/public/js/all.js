// shim for console.log in IE
window.console = window.console || { log: function(){} };


// jQuery extensions

$.fn.extend({
    clickOutside: function (callback) {
        var $target = this;
        $(document).mouseup(function (evt) {
            if (!$target.is(evt.target) && !$target.has(evt.target).length) {
                callback.call($target);
            }
        });
    },
    imagePreviewFromFileInput: function (fileInput, callback) {
        var $target = this;
        if (!this.length) {
            return this;
        }
        var $fileInput = $(fileInput).filter('input[type="file"]').eq(0);
        if (!$fileInput.length) {
            throw new Error('fileInput must match input[type="file"]');
        }
        $fileInput.change(function () {
            var fileReader = new FileReader();
            fileReader.onload = function () {
                $target.map(function (i, item) {
                    var $item = $(item);
                    var originalImage;
                    var imageType;
                    if ($item.filter('img').length) {
                        imageType = 'img';
                        originalImage = $item.attr('src');
                        $item.attr('src', fileReader.result);
                    } else {
                        imageType = 'background-image';
                        originalImage = $item.css('background-image');
                        $item.css('background-image', 'url("' + fileReader.result + '")');
                        $item.css('background-size', 'cover');
                    }
                    if (!$target.data('restoreOriginalImage')) {
                        $item.data('restoreOriginalImage', function () {
                            if (imageType === 'img') {
                                $item.attr('src', originalImage);
                            } else {
                                $item.css('background-image', originalImage);
                            }
                        });
                    }
                });
            };
            fileReader.readAsDataURL($fileInput.prop('files')[0]);
            if (typeof callback !== 'undefined') {
                callback.call($target);
            }
        });
        return this;
    }
});

// END jQuery extensions


function processAjaxDialogData(containerId, data){

    $('#' + containerId).html(data);

    $(".dialog-form :input:visible:enabled:first").focus();
}


function handleError(request, textStatus, errorThrown){
    if (request.status === 403){
        window.location.href = "/login_page?redirect=" + window.location.href;
    }
}


function showSimpleDialog(dialogId, opts) {
    opts = opts || {};

    var width = opts.width || 500,
        height = opts.height || 250,
        modalId = opts.modalId || 'simplemodal-container',
        outWidth = width + 2,
        outHeight = height + 2,
        $window = $(window),
        winWidth = $window.width(),
        winHeight = $window.height(),
        dialog = $('#' + dialogId);

    if (height > winHeight) {
        outHeight = winHeight - 60;
    }

    if (width > winWidth) {
        outWidth = winWidth;
    }

    dialog.modal({
        opacity: 60,
        overlayCss: {
            background: '#000'
        },
        onShow: function (dlg) {
            $(dlg.wrap).css('overflow', 'auto');
        },
        minWidth: outWidth,
        minHeight: outHeight,
        maxWidth: outWidth,
        maxHeight: outHeight,
        containerId: modalId,
        persist: true
    });

}

function showAjaxDialog(dialogId, containerId, url, width, height, loaded_callback, modalId){

    width = typeof(width) !== 'undefined' ? width : 500;
    height = typeof(height) !== 'undefined' ? height : 250;
    modalId = typeof(modalId) !== 'undefined' && modalId !== null ? modalId : 'simplemodal-container';
    outHeight = height + 2;
    outWidth = width + 2;
    windowHeight = $(window).height();
    windowWidth = $(window).width();

    if (height > windowHeight) {
        outHeight = windowHeight-60;
    }

    if (width > windowWidth) {
        outWidth = windowWidth;
    }

    $("#" + dialogId).modal({
        opacity: 60,
        overlayCss: {
            background: '#000'
        },
        onShow: function (dlg) {
            $(dlg.wrap).css('overflow', 'auto');
        },
        minWidth: outWidth,
        minHeight: outHeight,
        containerId: modalId
    });

    $("#" + containerId).html("<div id='dialog_loading'><div class='dialog-loading' style='width:" + (outWidth - 24) + "px; height:" + (outHeight - 6) + "px; overflow: auto;'>&nbsp;</div></div>");

    $.ajax({
        type: "GET",
        url: url,
        error: function(request, textStatus, errorThrown){
            handleError(request, textStatus, errorThrown);
        },
        success: function(data, status, request){
            if (data.match("^Location")) {
                old_location = window.location.pathname;
                new_location = data.replace("Location: ", "");
                window.location = new_location;

                if (new_location.indexOf(old_location) == 0 &&
                new_location.indexOf("#") != -1) {
                    window.location.reload(true);
                }
            }
            else {
                processAjaxDialogData(containerId, data);
                if (typeof(loaded_callback) != 'undefined' && loaded_callback !== null) {
                    loaded_callback();
                }
            }
        }
    });
    return false;
}

function ajaxDialogSubmit(url, formId, containerId){
    $.ajax({
        type: "POST",
        url: url,
        data: $("#" + formId).serialize(),
        error: function(request, textStatus, errorThrown){
            handleError(request, textStatus, errorThrown);
        },
        success: function(data, status, request){
            if (data.match("^Location")) {
                old_location = window.location.pathname;
                new_location = data.replace("Location: ", "");
                if (new_location.indexOf('javascript') == 0){
                    on_redirect = new_location.replace('javascript:', '');
                    eval(on_redirect);
                    return false;
                }
                window.location = new_location;

                if (new_location.indexOf(old_location) == 0 &&
                new_location.indexOf("#") != -1) {
                    window.location.reload(true);
                }
            }
            else {
                processAjaxDialogData(containerId, data);
            }
        }
    });
    height = $("#" + containerId).height();
    width = $("#" + containerId).width();
    $("#" + containerId).html("<center><div style='width:" + width + "px; height:" + height + "px' class='dialog-loading'>&nbsp;</div></center>");

    return false;
}

function showConfirmDialog(title, message, url, width, height){
    width = typeof(width) != 'undefined' ? width : 300;
    height = typeof(height) != 'undefined' ? height : 150;

    $("#confirm_dialog").modal({
        opacity: 60,
        overlayCss: {
            background: '#000'
        },
        minWidth: width,
        minHeight: height,
        onShow: function(dialog){
            $('#confirm_title', dialog.data[0]).html(title);
            $('#confirm_message', dialog.data[0]).html(message);

            // if the user clicks "yes"
            $('#confirm_yes', dialog.data[0]).click(function(){
                ajaxDialogSubmit(url, "confirm_form", "confirm_container");
                return false;
            });
            $('#confirm_no').click(function(){ $.modal.close(); return false; });
        }
    });

    return false;
}

function ajaxInlineUpdate(url, formData, loadingDivId, successDivId, errorDivId){
    $("#" + successDivId).hide();
    $("#" + errorDivId).hide();
    $("#" + loadingDivId).show();
    $.ajax({
        type: "POST",
        url: url,
        data: formData,
        error: function(request, textStatus, errorThrown){
            if (request.status == 403){
                window.location.href = "/login_page";
            }
        },
        success: function(data, status, request){
            if (data.match("^Location")) {
                window.location = data.replace("Location: ", "");
            }
            else {
                $("#" + loadingDivId).hide();
                $("#" + successDivId).show();
            }
        },
        error: function(request, status, error){
            $("#" + loadingDivId).hide();
            $("#" + errorDivId).show();
        }
    });
}

function paginatorClick(form_id, pageNum){
    $("#page_index").attr("value", pageNum);
    $("#" + form_id).submit();
}

function toggleCheckboxes(source_selector, dest_name_prefix){
    new_value = $(source_selector).is(":checked");
    $("input[name*='" + dest_name_prefix + "']").prop("checked", new_value);
}

function _showLoginDialog(redirect, error) {
    var finishedCallback = null;

    if(error) {
        finishedCallback = function() {
            $("#login_form_ajax .errors").html(error);
        };
    }

    showAjaxDialog(
        "login_dialog", "login_container", "/login?redirect=" + redirect,
        500, 250, finishedCallback
    );
}



// This function attempts to log the user in if they are logged into a supported
// external authentication backend, such as Facebook, and if that fails, then it
// shows the native login modal.
function showLoginDialog(redirect) {
    redirect = window.location.protocol + "//" +
        window.location.host + getRealRedirect(redirect);

    // If Facebook auth fails, show the native login dialog. In the future we
    // could extend this to support, e.g., Twitter logins, with a chain of
    // nextAuthMethod callbacks.
    nextAuthMethod = function() {
        _showLoginDialog(redirect);
    };

    loginFacebook(redirect, nextAuthMethod);
    return false;
}

// Hide all divs except 'show_id' in 'container_id'
function filterContainer(container_id, show_id){
    var text = $('#anchor-'+show_id+'> a').text();
    $('.filter-text').text('');
    $('.filter-anchor').show();

    $('#anchor-'+show_id+' .filter-anchor').hide();
    $('#anchor-'+show_id+' .filter-text').text(text);

    if (show_id === null) {
        $("#" + container_id + " > div").show();
    }
    else {
        $("#" + container_id + " > div").hide();
        $("#" + show_id).show();
    }

    return false;
}

var facebookInitialized = false;
function initFacebook() {
    // XXXie7: clear interval eventually
    setInterval(function () { if (!facebookInitialized) {
        try {
            FB.init({
                appId: FACEBOOK_APP_ID,
                status: true,
                cookie: true,
                xfbml: true,
                oauth: true
            });

            facebookInitialized = true;
        } catch(e) {
            // Pass.
        }
    }
}, 100);
}

// Prepend a Facebook API command with an initialization step. 'tryLogin'
// will attempt to log the user in before running the command, and only run
// the command if login succeeded. On success we'll get an authResponse value.
//
// For more details on the response and authResponse values, see:
// https://developers.facebook.com/blog/post/525/
function facebookDo(doFunc, tryLogin) {
    initFacebook();
    params = { scope: 'email' };
    try{
      if (tryLogin) {
          FB.login(function(response) {
              // If the user is authenticated with Facebook and has authorized our
              // site, then the response will contain an 'authResponse' value.
              if (response.authResponse) {
                  doFunc(response);
              }
          }, params);
      }
      else {
          FB.getLoginStatus(function(response) {
              // The Facebook response contains the status of the user's FB
              // authenticateion.
              if (response) {
                  doFunc(response);
              }
          }, params);
      }
    } catch(e) {
      console.log(e);
      alert("Sorry, your browser is unable to support Facebook login at this time");
    }
}

// Notify our server that the Facebook user logged in. The server responds
// with 'OK' if a matching UserProfile was found for the Facebook user ID.
// Will call errCallback if login failed.
function doFacebookLogin(response) {
    var form = $('#login-form');
    form.addClass('disabled');
    if(response.authResponse) {
        $.ajax({
            // XXX: If this call is async, the user won't be authenticated
            // properly in Chrome.
            async: false,
            url: "/account/facebook_login/",
            success: function(data, status, request) {
                if (data.success) {
                    window.location = data.redirect ? data.redirect : redirect;
                } else {
                    form.removeClass('disabled');
                    alert("Sorry, we were unable to log you in with your Facebook account.");
                }
            }
        });
    }
}
function doFacebookSignin(response, profile_callback, image_callback){
    fields = ['id', 'name', 'first_name', 'middle_name', 'last_name', 'bio',
	      'email'];
    if (response.authResponse){
	FB.api('/me', {fields: fields}, function(details){
	    profile_callback(details);
	});
	FB.api('me/picture', {height: 200, width: 200}, function(details){
	    image_callback(details);
	});
    }
}

function createAccountFacebook() {
    facebookDo(function() {
        window.location = "/user_reg?use_facebook=1";
    }, true);
}

/**
 * Attempt to log the user in with Facebook.
 *
 * This function can be called as part of the automatic login process or as a
 * user-initiated action, such as clicking the "Log in with Facebook" button.
 *
 * If this is an automatic login and we couldn't find a Facebook account, or the
 * user isn't logged into Facebook, then try the next authentication method.
 *
 * If the user initiated login, but we can't find an account, then display the
 * native login dialog with an form error.
 */
function loginFacebook() {
    // This is a user-initiated action if we didn't get a nextAuthMethod to try.

    initFacebook();
    function tryFacebookLogin(response) {
        if (response.authResponse) {
            doFacebookLogin(response);
        }
    }
    facebookDo(tryFacebookLogin, true);
}

function registerFacebook(profile_callback, image_callback){
    initFacebook();
    function tryFacebookRegister(response) {
	if (response.authResponse){
	    doFacebookSignin(response, profile_callback, image_callback);
	}
    }
    facebookDo(tryFacebookRegister, true);
}

function shareLinkFacebook(options) {
    facebookDo(function() {
        // calling the API ...
        var obj = {
          method: 'feed'
        };

        $.extend(obj, options);

        FB.ui(obj);
    }, true);
}


function shareHolidayNomination() {
    var logo_url = 'http://' + window.location.hostname +
        '/media/1/images/logo_notext.png';

    var description = 'Every professional that registers on Catchafire ' +
        'between 12/1/2011 and 1/31/2012 can nominate an organization ' +
        'of their choice to win $2012.00. http://bit.ly/urMOjP';

    shareLinkFacebook({
      link: 'http://blog.catchafire.org/2011/12/07/catchafire-2012-holiday-campaign/',
      picture: logo_url,
      name: 'Catchafire Holiday Campaign',
      caption: "Give what you're good at this holiday season",
      description: description
    });
}

function renderProfileLink(linkData) {

    var newDiv = $("#profile-link-prototype").clone();
    var id_string = 'profile-link-' + linkData.id;

    newDiv.attr('id', id_string);

    newDiv.find('.profile-link-edit-type').html(linkData.title);
    newDiv.find('.profile-link-edit-url').html(linkData.url);

    $('#profile-links-edit-container').append(newDiv);

    newDiv.show();
}

function renderProfileLinks(linkArray){
    for (var index in linkArray) {
        renderProfileLink(linkArray[index]);
    }
}

function toggleHelp(help_type){
    $("#" + help_type + "_help").toggle();
    $("#" + help_type + "_show_help").toggle();

    ajaxInlineUpdate("/help_pref/" + help_type + "/" + ($("#" + help_type + "_help").is(":visible") ? "1" : "0"), {}, "a", "a", "a");

    return false;
}

function getRealRedirect(redirect){
    switch (redirect) {
        case "/":
        case "/user_reg_done":
        case "/verify_email":
            return "/dashboard";
        default:
            return redirect;
    }
}

function getInternetExplorerVersion(){
    var rv = -1; // Return value assumes failure.
    if (navigator.appName == 'Microsoft Internet Explorer') {
        var ua = navigator.userAgent;
        var re = new RegExp("MSIE ([0-9]{1,}[\\.0-9]{0,})");
        if (re.exec(ua) != null) {
            rv = parseFloat(RegExp.$1);
        }
    }
    return rv;
}

function showLoginOrSignupDialog(redirect){

    // if the user is logged in, we can redirect to the final url;
    // otherwise, find out if they'd like to sign in or register
    $.getJSON('/login_data', function (data) {
        if(data.is_logged_in) {
            window.location.href = redirect;
        } else {
            url = "/login_or_signup?redirect=" + encodeURIComponent(redirect);
            return showAjaxDialog("login_or_signup_dialog", "login_or_signup_dialog_container", url, 500, 300, null);
        }

    });
}


(function(){
    // capture all errors and dispatch to /jserror/ view

    var prevOnError = window.onerror;

    window.onerror = function(errorMsg, url, lineNumber){
        if (typeof(jQuery) != 'undefined') {
            jQuery.ajax({
                url : '/jserror/',
                type : 'POST',
                data : {
                    message : errorMsg,
                    url : url,
                    lineNumber : lineNumber,
                    browser : navigator.appName,
                    userAgent : navigator.userAgent
                }
            });
            if (prevOnError) {
                return prevOnError(errorMsg, url, lineNumber);
            }
            return false;
        }
    }
})();

// TODO: find a jquery plugin, or make this into one
function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

// TODO: find a jquery plugin, or make this into one
// REFACTOR: use this on error scroll to
function scrollIntoView(elem) {
  $('html,body').animate({
    scrollTop: $(elem).offset().top }, 500)
}

// Put django username in POST for django-axes integration.
function integrateAxes() {
    email = $('input[name="email"]').val();
    if (email) {
        email = email.replace(/@/g, "-");
        $('input[name="username"]').prop("value", email);
    }
}

function addBusinessDays(date, days){
  var sum = 0;
  var count = 0;
  while(sum < days || count == 100){
    if(date.getDay() !== 0 && date.getDay() !== 6){
        sum++;
    }
    date.setDate(date.getDate() + 1);
  }

  return date;
}

var Catchafire = {
    dropdowns: function(){
        var triggers = $('.dropdown-trigger'),
            dropdownMenues = $('.dropdown-menu');
        dropdownMenues.hide();
        triggers.each(function(){
            var self         = $(this),
                target       = $(self.attr('href')),
                target_shown = false;

            $(window).click(function(){
                dropdownMenues.hide();
                target.hide();
                target_shown = false
            });

            self.click(function(e){
                e.preventDefault();
                e.stopPropagation();

                dropdownMenues.hide();

                target_shown? target.hide() : target.show();
                target_shown = !target_shown;

                triggers.removeClass('active');
                self.addClass('active');
            });

            target.click(function(e){
                e.stopPropagation();
            })
        });
    },
    accordions: function (){
        var titles       = $('.accordion-title'),
            items        = $('.accordion-item'),
            active_class = 'active',
            attr_scope   = 'rel';

        // Hides all accordion items
        items.hide();

        var first_title = titles.first(),
            first_item  = $(first_title.attr(attr_scope));

        // Shows and set active the first item/title
        first_title.addClass(active_class);
        first_item.show();

        titles.click(function(){
            var title = $(this);

            // Only hides the non-active items
            if (!title.hasClass(active_class)) {
                var item = $(title.attr(attr_scope));

                titles.removeClass(active_class);
                title.addClass(active_class);

                items.slideUp();
                item.slideDown(function () {
                  if(!isScrolledIntoView(title)){
                    scrollIntoView(title);
                  }
                });
            }
        })
    }
}
