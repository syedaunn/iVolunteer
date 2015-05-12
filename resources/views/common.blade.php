<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="keywords" content="volunteering, skill-based volunteering, volunteer, nonprofit, social enterprise">

  <meta property="og:title" content="iVolunteer">
  <meta property="og:url" content="https://www.ivolunteer.com/">
  <meta property="og:image" content="https://www.catchafire.org/static/19905/images/200pxSquare.png">
  <meta property="og:description" content="iVolunteer matches professionally-skilled volunteers with nonprofits and social enterprises.">
  <link rel="icon" href="https://www.catchafire.org/static/19905/images/v2/favicon.ico">
  <link rel="shortcut icon" href="https://www.catchafire.org/static/19905/images/v2/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.catchafire.org/static/19905/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.catchafire.org/static/19905/images/apple-touch-icon-72x72-precomposed.png">




  <link rel="stylesheet" href="https://www.catchafire.org/static/19905/gen/screen.css">


  <link rel="stylesheet" href="https://www.catchafire.org/static/19905/stylesheets/blueprint/screen.css">
  <!--[if lt IE 8]>
  <link rel="stylesheet" href="/static/19905/stylesheets/blueprint/ie.css">
  <![endif]-->
  <link rel="stylesheet" href="https://www.catchafire.org/static/19905/stylesheets/all.css">
  <link rel="stylesheet" href="https://www.catchafire.org/static/19905/stylesheets/jquery.countdown.css">


<!--  <script>
  if (!('forEach' in Array.prototype)) {
    Array.prototype.forEach= function(action, that /*opt*/) {
      for (var i= 0, n= this.length; i<n; i++)
      if (i in this)
      action.call(that, this[i], i, this);
    };
  }
  var csrfCookieName = 'caf_default_csrftoken';
</script>-->

<!-- {{ asset('/js/') }} -->
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.watermark.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.simplemodal-1.3.5.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.tools.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.cookie.min.js') }}"></script>
  <script src="{{ asset('/js/all.js') }}"></script>
  <script src="{{ asset('/js/csrf.js') }}"></script>
  <script src="{{ asset('/js/modernizr.js') }}"></script>



  <meta name="description" content="iVolunteer matches professionally-skilled volunteers with nonprofits and social enterprises.  We structure our volunteer opportunities to be short-term, discrete, and individual to cater to the busy lifestyles of high-performing professionals.">


  <link rel="stylesheet" href="https://www.catchafire.org/static/19905/gen/index.min.css">
  <link rel="stylesheet" href="https://www.catchafire.org/static/19905/stylesheets/jquery.simpletextrotator.css">


@yield('headerScripts')

@yield('title')






  <style type="text/css"></style><style type="text/css" media="screen">.uv-icon{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;cursor:pointer;position:relative;-moz-transition:all 300ms;-o-transition:all 300ms;-webkit-transition:all 300ms;transition:all 300ms;width:39px;height:39px;position:fixed;z-index:100002;opacity:0.8;-moz-transition:opacity 100ms;-o-transition:opacity 100ms;-webkit-transition:opacity 100ms;transition:opacity 100ms}.uv-icon.uv-bottom-right{bottom:10px;right:12px}.uv-icon.uv-top-right{top:10px;right:12px}.uv-icon.uv-bottom-left{bottom:10px;left:12px}.uv-icon.uv-top-left{top:10px;left:12px}.uv-icon.uv-is-selected{opacity:1}.uv-icon svg{width:39px;height:39px}.uv-popover{font-family:sans-serif;font-weight:100;font-size:13px;color:black;position:fixed;z-index:100001}.uv-popover-content{-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;background:white;position:relative;width:325px;height:325px;-moz-transition:background 200ms;-o-transition:background 200ms;-webkit-transition:background 200ms;transition:background 200ms}.uv-bottom .uv-popover-content{-moz-box-shadow:rgba(0,0,0,0.3) 0 -10px 60px,rgba(0,0,0,0.1) 0 0 20px;-webkit-box-shadow:rgba(0,0,0,0.3) 0 -10px 60px,rgba(0,0,0,0.1) 0 0 20px;box-shadow:rgba(0,0,0,0.3) 0 -10px 60px,rgba(0,0,0,0.1) 0 0 20px}.uv-top .uv-popover-content{-moz-box-shadow:rgba(0,0,0,0.3) 0 10px 60px,rgba(0,0,0,0.1) 0 0 20px;-webkit-box-shadow:rgba(0,0,0,0.3) 0 10px 60px,rgba(0,0,0,0.1) 0 0 20px;box-shadow:rgba(0,0,0,0.3) 0 10px 60px,rgba(0,0,0,0.1) 0 0 20px}.uv-left .uv-popover-content{-moz-box-shadow:rgba(0,0,0,0.3) 10px 0 60px,rgba(0,0,0,0.1) 0 0 20px;-webkit-box-shadow:rgba(0,0,0,0.3) 10px 0 60px,rgba(0,0,0,0.1) 0 0 20px;box-shadow:rgba(0,0,0,0.3) 10px 0 60px,rgba(0,0,0,0.1) 0 0 20px}.uv-right .uv-popover-content{-moz-box-shadow:rgba(0,0,0,0.3) -10px 0 60px,rgba(0,0,0,0.1) 0 0 20px;-webkit-box-shadow:rgba(0,0,0,0.3) -10px 0 60px,rgba(0,0,0,0.1) 0 0 20px;box-shadow:rgba(0,0,0,0.3) -10px 0 60px,rgba(0,0,0,0.1) 0 0 20px}.uv-ie8 .uv-popover-content{position:relative}.uv-ie8 .uv-popover-content .uv-popover-content-shadow{display:block;background:black;content:'';position:absolute;left:-15px;top:-15px;width:100%;height:100%;filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius=15,MakeShadow=true,ShadowOpacity=0.30);z-index:-1}.uv-popover-tail{border:9px solid transparent;width:0;z-index:10;position:absolute;-moz-transition:border-top-color 200ms;-o-transition:border-top-color 200ms;-webkit-transition:border-top-color 200ms;transition:border-top-color 200ms}.uv-top .uv-popover-tail{bottom:-20px;border-top:11px solid white}.uv-bottom .uv-popover-tail{top:-20px;border-bottom:11px solid white}.uv-left .uv-popover-tail{right:-20px;border-left:11px solid white}.uv-right .uv-popover-tail{left:-20px;border-right:11px solid white}.uv-popover-loading{background:white;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;position:absolute;width:100%;height:100%;left:0;top:0}.uv-popover-loading-text{position:absolute;top:50%;margin-top:-0.5em;width:100%;text-align:center}.uv-popover-iframe-container{height:100%}.uv-popover-iframe{-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;overflow:hidden}.uv-is-hidden{display:none}.uv-is-invisible{display:block !important;visibility:hidden !important}.uv-is-transitioning{display:block !important}.uv-no-transition{-moz-transition:none !important;-webkit-transition:none !important;-o-transition:color 0 ease-in !important;transition:none !important}.uv-fade{opacity:1;-moz-transition:opacity 200ms ease-out;-o-transition:opacity 200ms ease-out;-webkit-transition:opacity 200ms ease-out;transition:opacity 200ms ease-out}.uv-fade.uv-is-hidden{opacity:0}.uv-scale-top,.uv-scale-top-left,.uv-scale-top-right,.uv-scale-bottom,.uv-scale-bottom-left,.uv-scale-bottom-right,.uv-scale-right,.uv-scale-right-top,.uv-scale-right-bottom,.uv-scale-left,.uv-scale-left-top,.uv-scale-left-bottom,.uv-slide-top,.uv-slide-bottom,.uv-slide-left,.uv-slide-right{opacity:1;-moz-transition:all 80ms ease-out;-o-transition:all 80ms ease-out;-webkit-transition:all 80ms ease-out;transition:all 80ms ease-out}.uv-scale-top.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateY(-15%);-ms-transform:scale(0.8) translateY(-15%);-webkit-transform:scale(0.8) translateY(-15%);transform:scale(0.8) translateY(-15%)}.uv-scale-top-left.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateY(-15%) translateX(-10%);-ms-transform:scale(0.8) translateY(-15%) translateX(-10%);-webkit-transform:scale(0.8) translateY(-15%) translateX(-10%);transform:scale(0.8) translateY(-15%) translateX(-10%)}.uv-scale-top-right.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateY(-15%) translateX(10%);-ms-transform:scale(0.8) translateY(-15%) translateX(10%);-webkit-transform:scale(0.8) translateY(-15%) translateX(10%);transform:scale(0.8) translateY(-15%) translateX(10%)}.uv-scale-bottom.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateY(15%);-ms-transform:scale(0.8) translateY(15%);-webkit-transform:scale(0.8) translateY(15%);transform:scale(0.8) translateY(15%)}.uv-scale-bottom-left.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateY(15%) translateX(-10%);-ms-transform:scale(0.8) translateY(15%) translateX(-10%);-webkit-transform:scale(0.8) translateY(15%) translateX(-10%);transform:scale(0.8) translateY(15%) translateX(-10%)}.uv-scale-bottom-right.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateY(15%) translateX(10%);-ms-transform:scale(0.8) translateY(15%) translateX(10%);-webkit-transform:scale(0.8) translateY(15%) translateX(10%);transform:scale(0.8) translateY(15%) translateX(10%)}.uv-scale-right.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateX(15%);-ms-transform:scale(0.8) translateX(15%);-webkit-transform:scale(0.8) translateX(15%);transform:scale(0.8) translateX(15%)}.uv-scale-right-top.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateX(15%) translateY(-10%);-ms-transform:scale(0.8) translateX(15%) translateY(-10%);-webkit-transform:scale(0.8) translateX(15%) translateY(-10%);transform:scale(0.8) translateX(15%) translateY(-10%)}.uv-scale-right-bottom.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateX(15%) translateY(10%);-ms-transform:scale(0.8) translateX(15%) translateY(10%);-webkit-transform:scale(0.8) translateX(15%) translateY(10%);transform:scale(0.8) translateX(15%) translateY(10%)}.uv-scale-left.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateX(-15%);-ms-transform:scale(0.8) translateX(-15%);-webkit-transform:scale(0.8) translateX(-15%);transform:scale(0.8) translateX(-15%)}.uv-scale-left-top.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateX(-15%) translateY(-10%);-ms-transform:scale(0.8) translateX(-15%) translateY(-10%);-webkit-transform:scale(0.8) translateX(-15%) translateY(-10%);transform:scale(0.8) translateX(-15%) translateY(-10%)}.uv-scale-left-bottom.uv-is-hidden{opacity:0;-moz-transform:scale(0.8) translateX(-15%) translateY(10%);-ms-transform:scale(0.8) translateX(-15%) translateY(10%);-webkit-transform:scale(0.8) translateX(-15%) translateY(10%);transform:scale(0.8) translateX(-15%) translateY(10%)}.uv-slide-top.uv-is-hidden{-moz-transform:translateY(-100%);-ms-transform:translateY(-100%);-webkit-transform:translateY(-100%);transform:translateY(-100%)}.uv-slide-bottom.uv-is-hidden{-moz-transform:translateY(100%);-ms-transform:translateY(100%);-webkit-transform:translateY(100%);transform:translateY(100%)}.uv-slide-left.uv-is-hidden{-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-webkit-transform:translateX(-100%);transform:translateX(-100%)}.uv-slide-right.uv-is-hidden{-moz-transform:translateX(100%);-ms-transform:translateX(100%);-webkit-transform:translateX(100%);transform:translateX(100%)}
  </style><script type="text/javascript" src="{{ asset('/js/tab.js') }}"></script>
  <!--<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}
    .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
    .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style><style type="text/css" media="screen">    #uservoice-dialog {      z-index: 100003;      display: block;      text-align: left;      margin: -2em auto 0 auto;      position: fixed;     }        #uservoice-overlay {      position: fixed;      z-index:100002;      width: 100%;      height: 100%;      left: 0;      top: 0;      background-color: #000;      opacity: 0.7;    }      html.dialog-open object,    html.dialog-open embed {      visibility: hidden;    }    a#uservoice-dialog-close { background-image: url(https://assets.uvcdn.com/images/widgets/close.png); }</style><style type="text/css" media="screen">    body a#uservoice-feedback-tab,    body a#uservoice-feedback-tab:link {      background-position: 2px 50% !important;      position: fixed !important;      top: 45% !important;      display: block !important;      width: 25px !important;      height: 98px !important;      margin: -45px 0 0 0 !important;      padding: 0 !important;      z-index: 100001 !important;      background-position: 2px 50% !important;      background-repeat: no-repeat !important;      text-indent: -9000px;    }        body a#uservoice-feedback-tab:hover {      cursor: pointer;    }        a#uservoice-feedback-tab {       left: 0;       background-repeat: no-repeat;       background-color: #E03C23;       background-image: url(https://assets.uvcdn.com/images/widgets/en/feedback_tab_white.png);       border: outset 1px #E03C23;       border-left: none;     }        a#uservoice-feedback-tab:hover {       background-color: #F25E38;       border: outset 1px #F25E38;       border-left: none;     }
    </style>-->
    </head>



    <body class="homepage">

        <aside id="top_messages"></aside>


        <div id="page" class="clear">

          <!-- Dynamic site header based on subdomain-->








          <header class="header-main">
            <div class="container">
              <h1 id="logo-catchafire"><a href="./Catchafire - Skills-Based Volunteer Matching_files/Catchafire - Skills-Based Volunteer Matching.html">Catchafire</a></h1>
              <ul class="nav-main">
                <li>
                  <a href="https://www.catchafire.org/howitworks/organizations">
                    <h3>How it works</h3>
                    <h4>Get the skinny.</h4>
                  </a>
                </li>

                <li>
                  <a href="https://www.catchafire.org/projects/">
                    <h3>Professionals</h3>
                    <h4>Find a project.</h4>
                  </a>
                </li>

                <li>
                  <a href="https://www.catchafire.org/project_menu/">
                    <h3>Organizations</h3>
                    <h4>List a project.</h4>
                  </a>
                </li>

                <li>
                  <a class="help" href="http://help.catchafire.org/">
                    <h3>Help</h3>
                  </a>
                </li>

                <li class="login anonymous">



                  <p class="logged-out-text">
                    <i></i>
                    <a class="linkjoin" href="{{ url('/auth/register') }}">Join</a>
                    <a class="linklogin" href="{{ url('/auth/login') }}">Login</a>
                  </p>



                </li>
              </ul><!-- nav-main -->
            </div><!-- container -->
          </header><!-- header-main -->


          @yield('content')



            </div><!-- page -->




            <div id="footer">
              <section class="quotes">
                <div class="container">
                  <div class="quote">
                    <blockquote style="display: inline-block;">Here you’re meeting people who have a passion for what they do... you feel you’re helping make a change.</blockquote>
                    <div class="arrow" style="left: 66px;"></div>
                  </div>

                  <ul>
                    <li class="NewYorkTimes">
                      <q>Here you’re meeting people who have a passion for what they do... you feel you’re helping make a change.</q>
                      <a href="http://www.nytimes.com/2011/11/02/giving/volunteer-work-gains-stature-on-a-resume.html?_r=3&pagewanted=1">The New York Times</a>
                    </li>
                    <li class="FastCompany">
                      <q>What amounts to an eHarmony for not-for-profits.</q>
                      <a href="http://www.fastcompany.com/most-creative-people/2012/rachael-chong">Fast Company</a>
                    </li>
                    <li class="NPR">
                      <q>The problem is, [professionals and nonprofits] have no way to connect. Enter Catchafire.</q>
                      <a href="http://www2.kuow.org/program.php?id=24357">NPR</a>
                    </li>
                    <li class="Forbes">
                      <q>An innovative for-profit company that excels in corporate and non-profit volunteer matchmaking.</q>
                      <a href="http://www.forbes.com/sites/elmirabayrasli/2011/03/07/in-entrepreneurship-there-are-no-rules-ladies/">Forbes</a>
                    </li>
                    <li class="TechCrunch">
                      <q>The company surveyed 1,000s of people in charitable fields to derive its project descriptions.</q>
                      <a href="http://techcrunch.com/2010/09/23/nyc-startup-catchafire-org-launches-site-to-match-skilled-volunteers-and-charities/">TechCrunch</a>
                    </li>
                    <li class="Mashable">
                      <q>You can build your resume, hone your abilities and help a worthy cause, all at the same time.</q>
                      <a href="http://mashable.com/2012/01/22/social-good-sites/">Mashable</a>
                    </li>
                    <li class="CNN">
                      <q>Alleviate your soul-crushing guilt by giving back.</q>
                      <a href="http://www.cnn.com/2011/TECH/social.media/08/10/7.sins.netiquette/">CNN</a>
                    </li>
                    <li class="FoxBusiness">
                      <q>9 to 5ers who want to give back to their local community in a non-labor-intensive fashion will want to check out Catchafire.</q>
                      <a href="http://www.foxbusiness.com/personal-finance/2011/08/10/workout-playlists-and-ipods-by-pool/#ixzz1xbMZnf7J">Fox Business</a>
                    </li>
                    <li class="GOOD">
                      <q>Helps professionals go beyond the sorting, shuffling and lugging that typifies classic volunteering.</q>
                      <a href="http://www.good.is/post/a-new-way-to-match-nonprofits-with-skilled-volunteers/">GOOD</a>
                    </li>
                  </ul>
                </div>
              </section>

              <footer>
                <div class="container">
                  <nav class="internal">
                    <hgroup>
                      <h1>Catchafire</h1>
                      <h2>Talent × purpose.</h2>
                    </hgroup>
                    <ol>
                      <li><a href="https://www.catchafire.org/about/">About</a></li>
                      <li><a href="http://blog.catchafire.org/" target="_blank">Blog</a></li>
                      <li><a href="https://www.catchafire.org/about/careers/">Careers</a></li>
                      <li><a href="https://www.catchafire.org/about/contact/">Contact</a></li>
                      <li><a href="http://help.catchafire.org/">Help</a></li>
                      <li><a href="https://www.catchafire.org/about/press/">Press</a></li>
                    </ol>
                  </nav>

                  <nav class="social">
                    <div class="logo"></div>
                    <a href="https://www.facebook.com/Catchafire.org" class="facebook" target="_blank">Facebook</a>
                    <a href="https://twitter.com/catchafire" class="twitter" target="_blank">Twitter</a>
                    <a href="http://www.linkedin.com/company/catchafire" class="linkedin" target="_blank">LinkedIn</a>
                    <a href="http://www.youtube.com/user/TeamCatchafire" class="youtube" target="_blank">YouTube</a>
                  </nav>

                  <section class="newsletter">
                    <hgroup>
                      <h1>Newsletter</h1>
                      <h2>An occasional dose of pure inspiration.</h2>
                    </hgroup>


                    <form id="newsletter" method="POST" action="https://www.catchafire.org/newsletter/signup">

                      <input type="hidden" name="csrfmiddlewaretoken" value="z3nos6tpU1o94R1noH8qIZeKDllujUfi">

                      <div class="right news-submit left-5"><button tabindex="2" class="small" id="newsletter_signup_submit">Sign up</button></div>
                      <div class="fix-float full news-email"><input tabindex="1" type="email" name="email" id="id_email" placeholder="Enter email…"></div>

                      <div class="form-feedback clear">



                      </div>


                    </form>

                  </section>

                  <section class="team">
                    <hgroup>
                      <h1>Live from NYC</h1>
                      <h2>and beyond…</h2>
                    </hgroup>

                    <a href="https://www.catchafire.org/about/team/" class="button small">Meet the team</a>

                    <div class="avatars">


                      <a href="https://www.catchafire.org/about/team/#jose-penarrieta"><img src="./Catchafire - Skills-Based Volunteer Matching_files/jose.jpg" width="60" height="60" alt=""></a>

                      <a href="https://www.catchafire.org/about/team/#paolo-campos"><img src="./Catchafire - Skills-Based Volunteer Matching_files/team-paolocampos.jpg" width="60" height="60" alt=""></a>

                      <a href="https://www.catchafire.org/about/team/#adrienne-schmoeker"><img src="./Catchafire - Skills-Based Volunteer Matching_files/adrienne.jpg" width="60" height="60" alt=""></a>

                      <a href="https://www.catchafire.org/about/team/#hayley-samuelson"><img src="./Catchafire - Skills-Based Volunteer Matching_files/hayley.jpg" width="60" height="60" alt=""></a>


                    </div>

                    <p class="copyright">
                      <a href="http://www.bcorporation.net/community/catchafire" class="footerlink-bcorporation">B Corporation</a>
                      <a href="http://wearemadeinny.com/" class="footerlink-madeinny">Made in NY</a>
                      © 2015 Catchafire, Inc.
                      <a href="https://www.catchafire.org/about/terms/privacy/">Privacy</a>
                      <a href="https://www.catchafire.org/about/terms/">Terms</a></p>
                      <p></p>
                    </section>
                  </div>
                </footer>
              </div>



              <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./Catchafire - Skills-Based Volunteer Matching_files/KTWTb9MY5lw.html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
              <!-- LOGIN OR SIGNUP DIALOG -->
              <div id="login_or_signup_dialog" class="dialog">
                <a href="https://www.catchafire.org/#" class="simplemodal-close close-button" title="Close" hidefocus="hidefocus"></a>
                <div id="login_or_signup_dialog_container"></div>
              </div><!-- login_or_signup_dialog -->

              <!-- LOGIN DIALOG -->
              <div id="login_dialog" class="dialog">
                <a href="https://www.catchafire.org/#" class="simplemodal-close close-button" title="Close" hidefocus="hidefocus"></a>
                <div id="login_container"></div>
              </div><!-- login_dialog -->

              <!-- CONFIRM_DIALOG -->
              <div id="confirm_dialog" class="dialog">
                <a href="https://www.catchafire.org/#" class="simplemodal-close close-button" title="Close" hidefocus="hidefocus"></a>
                <div id="confirm_container">
                  <h2 id="confirm_title" class="below-2"></h2>
                  <div id="confirm_message" class="below-4"></div>
                  <form id="confirm_form">
                    <center>
                      <button id="confirm_yes" type="submit">Yes</button>&nbsp;&nbsp;&nbsp;
                      <button id="confirm_no" type="submit">No</button>
                    </center>
                  </form>
                </div><!-- confirm_container -->
              </div><!-- confirm_dialog -->

              <div id="ie_warning_content" style="display:none">
                <div class="span-4">&nbsp;</div>
                <div class="notice span-16">
                  You appear to running an older version of Internet Explorer.  We do not
                  support Internet Explorer versions less than 7.0 and some features may
                  be unavailable.  If you want to use the full functionality of
                  the Catchafire site, <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">please upgrade</a>.
                </div>
                <div class="span-4 last">&nbsp;</div>
              </div><!-- ie_warning_content -->








              <script src="{{ asset('/js/site.min.js') }}"></script>
              <script src="{{ asset('/js/footer.js') }}"></script>
<!--              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
-->

            </body></html>
