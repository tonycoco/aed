<?php
  defined("_JEXEC") or die;

  // System
  $app = JFactory::getApplication();
  $doc = JFactory::getDocument();
  $params = JFactory::getApplication()->getTemplate(true)->params;

  // Params
  $googleanalytics = $params->get("googleanalytics");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
  <head>
    <jdoc:include type="head" />

    <meta charset="utf-8">
    <meta content="@aedweb" name="twitter:site">
    <meta content="71cb5c013695f93d-fe74d99ac133704e-g0980a9e175ac5409-e" name="google-translate-customization">
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">

    <link href="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/apple-touch-icon-precomposed.png" rel="apple-touch-icon">
    <link href="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/favicon.png" rel="shortcut icon">
    <link href="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/favicon.ico" rel="icon" type="image/ico">

    <!--[if (lt IE 9) & (!IEMobile 7)]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->

    <link href="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/css/application.css" media="screen" rel="stylesheet" type="text/css" />

    <script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/javascripts/respond.js" type="text/javascript"></script>
  </head>

  <body class="homepage">
    <div id='viewport'>
      <div id='menu'>
        <h3><a class="menu-icon" href="#"><i class="icon-menu"></i> Menu</a></h3>
        <ul class='links'>
          <li><a href="#">Link</a></li>
          <!-- REPEAT -->
        </ul>
      </div>
      <div id='page'>
        <header class='header'>
          <div class='inner'>
            <a class="logo" href="<?php echo $this->baseurl; ?>"><?php echo $app->getCfg("sitename"); ?></a>
            <div class='top'>
              <div class='left'>
                <h2 class='heading'>
                  <a href="<?php echo $this->baseurl; ?>"><img alt="<?php echo $app->getCfg("sitename"); ?>" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/images/heading.png" /></a>
                </h2>
                <p class='slogan'><img alt="Prevention. Treatment. Research. Education." src="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/images/slogan.png" /></p>
                <a class="menu-icon" href="#">
                  Menu <i class="icon-menu"></i>
                </a>
              </div>
              <div class='right'>
                <div class='action-bar'>
                  <div id='google_translate_element'></div>
                  <form class='form'>
                    <div class='input'>
                      <i class='icon-search'></i>
                      <input placeholder='Search' type='text'>
                    </div>
                  </form>
                </div>
                <ul class='social-badges'>
                  <li><a class="badge icons-gplus" href="#">Google+</a></li>
                  <li><a class="badge icons-facebook" href="https://www.facebook.com/pages/Academy-for-Eating-Disorders/56454591652">Facebook</a></li>
                  <li><a class="badge icons-linkedin" href="http://www.linkedin.com/groups?gid=1208317">LinkedIn</a></li>
                  <li><a class="badge icons-youtube" href="http://www.youtube.com/channel/UCJdjVELGnfTYYCX5bCZ920A">YouTube</a></li>
                  <li><a class="badge icons-twitter" href="https://twitter.com/aedweb">Twitter</a></li>
                </ul>
              </div>
            </div>
            <nav class='nav'>
              <ul class='top-links'>
                <li><a href="#subnav-1"><span>About AED</span></a></li>
                <li><a href="#subnav-2"><span>Eating Disorders Information</span></a></li>
                <li><a href="#subnav-3"><span>Conference &amp; Education</span></a></li>
                <li><a href="#subnav-4"><span>Get Involved</span></a></li>
              </ul>
              <a class="account" href="#"><span><i class="icon-account"></i> Members</span></a>
              <div class='subnav'>
                <div class='inner' id='subnav-1'>
                  <h4>About AED</h4>
                  <ul>
                    <li><a href="#">Link</a></li>
                    <!-- REPEAT -->
                  </ul>
                </div>
                <div class='inner' id='subnav-2'>
                  <h4>Eating Disorders Information</h4>
                  <ul>
                    <li><a href="#">Link</a></li>
                    <!-- REPEAT -->
                  </ul>
                </div>
                <div class='inner' id='subnav-3'>
                  <h4>Conference &amp; Education</h4>
                  <ul>
                    <li><a href="#">Link</a></li>
                    <!-- REPEAT -->
                  </ul>
                </div>
                <div class='inner' id='subnav-4'>
                  <h4>Get Involved</h4>
                  <ul>
                    <li><a href="#">Link</a></li>
                    <!-- REPEAT -->
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <div class='hero'>
          <div class='inner'>
            <div id='slider'>
              <img data-title="First lorem ipsum dolor sit amet, consectetur amet adipiscing elit. Adipiscing elit yet dolor." src="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/images/placeholder/slider-1.jpg" />
              <!-- REPEAT -->
            </div>
            <section class='main'>
              <div class='slider-overlay'>
                <p id='slider-overlay-text'></p>
                <div id='slider-pager'></div>
              </div>
            </section>
            <aside class='sidebar'>
              <div class='find-a-professional'>
                <div class='inner'>
                  <h4>Find a Professional</h4>
                  <form class='finder'>
                    <div class='input'>
                      <input placeholder='Zip Code' type='text'>
                    </div>
                    <div class='actions'>
                      <input class='button' type='submit' value='Search'>
                    </div>
                  </form>
                  <div class='title'>
                    <h4>Find a Professional</h4>
                    <p>Search for a professional to help you in your area...</p>
                  </div>
                </div>
              </div>
              <ul class='panels'>
                <li>
                  <a class="button" href="#">Join Now!</a>
                  <p>Learn more about member benefits<span class="not-needed"> and networking</span>!</p>
                </li>
                <li>
                  <a class="button" href="#">Donate</a>
                  <p><span class="not-needed">Help make a difference.</span> Make a donation today!</p>
                </li>
                <li>
                  <a class="button" href="#">Career Center</a>
                  <p>Full-service online resource.</p>
                </li>
              </ul>
            </aside>
          </div>
        </div>
        <div class='content'>
          <div class='inner'>
            <section class='main accordion'>
              <h3><a href="#news"><i class="icon-news"></i> News</a></h3>
              <div id='news'>
                <ul>
                  <li>
                    <h4><a href="#">Test Title - News</a></h4>
                    <p>Lorem ipsum dolor sit amet. Facilisis dignissim. Mauris at purus sagittis felis elementum sagittis sed nec nibh. Donec non ultrices sapien.</p>
                  </li>
                  <!-- REPEAT -->
                </ul>
              </div>
              <h3><a href="#publications"><i class="icon-publications"></i> Publications</a></h3>
              <div id='publications'>
                <ul>
                  <li>
                    <h4><a href="#">Test Title - Publications</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod velit aliquam elit facilisis. Donec non ultrices sapien.</p>
                  </li>
                  <!-- REPEAT -->
                </ul>
              </div>
              <h3><a href="#resources"><i class="icon-resources"></i> Resources</a></h3>
              <div id='resources'>
                <ul>
                  <li>
                    <h4><a href="#">Test Title - Resources</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod velit aliquam elit facilisis dignissim. Mauris at purus sagittis felis elementum sagittis sed nec nibh.</p>
                  </li>
                  <!-- REPEAT -->
                </ul>
              </div>
              <h3><a href="#bookstore"><i class="icon-bookstore"></i> AED Bookstore</a></h3>
              <div id='bookstore'>
                <ul>
                  <li>
                    <h4><a href="#">Test Title - Bookstore</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod velit aliquam elit facilisis dignissim. Mauris at purus sagittis felis elementum sagittis sed nec nibh. Donec non ultrices sapien.</p>
                  </li>
                  <!-- REPEAT -->
                </ul>
              </div>
            </section>
            <section class='main tabs'>
              <ul>
                <li><a href="#news"><i class="icon-news"></i> News</a></li>
                <li><a href="#publications"><i class="icon-publications"></i> Publications</a></li>
                <li><a href="#resources"><i class="icon-resources"></i> Resources</a></li>
                <li><a href="#bookstore"><i class="icon-bookstore"></i> AED Bookstore</a></li>
              </ul>
              <div class='inner'>
                <div id='news'>
                  <ul>
                    <li>
                      <h4><a href="#">Test Title - News</a></h4>
                      <p>Lorem ipsum dolor sit amet. Facilisis dignissim. Mauris at purus sagittis felis elementum sagittis sed nec nibh. Donec non ultrices sapien.</p>
                    </li>
                    <!-- REPEAT -->
                  </ul>
                </div>
                <div id='publications'>
                  <ul>
                    <li>
                      <h4><a href="#">Test Title - Publications</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod velit aliquam elit facilisis. Donec non ultrices sapien.</p>
                    </li>
                    <!-- REPEAT -->
                  </ul>
                </div>
                <div id='resources'>
                  <ul>
                    <li>
                      <h4><a href="#">Test Title - Resources</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod velit aliquam elit facilisis dignissim. Mauris at purus sagittis felis elementum sagittis sed nec nibh.</p>
                    </li>
                    <!-- REPEAT -->
                  </ul>
                </div>
                <div id='bookstore'>
                  <ul>
                    <li>
                      <h4><a href="#">Test Title - Bookstore</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod velit aliquam elit facilisis dignissim. Mauris at purus sagittis felis elementum sagittis sed nec nibh. Donec non ultrices sapien.</p>
                    </li>
                    <!-- REPEAT -->
                  </ul>
                </div>
              </div>
            </section>
            <aside class='sidebar'>
              <section class='widget event-calendar'>
                <h4>
                  <i class='icon-calendar'></i>
                  Event Calendar
                </h4>
                <div class='inner'>
                  <ul>
                    <li>
                      <span class='date'>10/14</span>
                      <a href="#">Test content goes here.</a>
                    </li>
                    <!-- REPEAT -->
                  </ul>
                  <div class='bottom'>
                    <a class="view-more" href="#">View More</a>
                  </div>
                </div>
              </section>

              <section class='widget twitter'>
                <h4>
                  <i class='icon-twitter'></i>
                  Twitter
                  <a class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" href="https://twitter.com/aedweb">Follow @aedweb</a>
                </h4>
                <div class='inner'>
                  <div class='tweet-bubble'>
                    <a class="twitter-timeline" data-widget-id="408482288276475904" data-chrome="nofooter noborders noheader transparent" data-tweet-limit="1" href="https://twitter.com/aedweb">Loading...</a>
                  </div>
                  <div class='bottom'>
                    <a class="handle" href="https://twitter.com/aedweb">@aedweb</a>
                    <a class="view-more" href="https://twitter.com/aedweb">View More</a>
                  </div>
                </div>
              </section>

              <section class='widget dark youtube'>
                <h4>
                  <i class='icon-youtube'></i>
                  Latest Videos
                </h4>
                <div class='inner'>
                  <div id='youtube-feed'></div>
                  <div class='bottom'>
                    <a class="view-more" href="http://www.youtube.com/channel/UCJdjVELGnfTYYCX5bCZ920A">View More</a>
                  </div>
                </div>
              </section>
            </aside>
          </div>
        </div>
        <footer class='footer'>
          <div class='inner'>
            <ul class='social-badges'>
              <li><a class="badge icons-gplus-dark" href="#">Google+</a></li>
              <li><a class="badge icons-facebook-dark" href="https://www.facebook.com/pages/Academy-for-Eating-Disorders/56454591652">Facebook</a></li>
              <li><a class="badge icons-linkedin-dark" href="http://www.linkedin.com/groups?about=&amp;gid=1208317&amp;trk=anet_ug_grppro">LinkedIn</a></li>
              <li><a class="badge icons-youtube-dark" href="http://www.youtube.com/channel/UCJdjVELGnfTYYCX5bCZ920A">YouTube</a></li>
              <li><a class="badge icons-twitter-dark" href="https://twitter.com/aedweb">Twitter</a></li>
            </ul>
            <nav class='links'>
              <ul class='column'>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Join AED</a></li>
                <li><a href="#">AED Forum</a></li>
                <li><a href="#">Newsletter</a></li>
              </ul>
              <!-- REPEAT -->
            </nav>
          </div>
        </footer>
      </div>
    </div>

    <?php if ($this->countModules("search")) : ?>
      <jdoc:include type="modules" name="search" style="none" />
    <?php endif; ?>

    <?php if ($this->countModules("menu")) : ?>
      <jdoc:include type="modules" name="menu" style="none" />
    <?php endif; ?>

    <?php if ($this->countModules("content")) : ?>
      <jdoc:include type="modules" name="content" style="none" />
    <?php endif; ?>

    <?php if ($this->countModules("sidebar")) : ?>
      <jdoc:include type="modules" name="sidebar" style="none" />
    <?php endif; ?>

    <?php if ($this->countModules("footer")) : ?>
      <jdoc:include type="modules" name="footer" style="none" />
    <?php endif; ?>

    <jdoc:include type="modules" name="debug" />

    <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template; ?>/javascripts/application.js" type="text/javascript"></script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(["_setAccount", "<?php echo htmlspecialchars($googleanalytics); ?>"]);
      _gaq.push(["_trackPageview"]);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
</html>
