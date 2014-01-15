<?php
  defined("_JEXEC") or die;

  unset($this->_scripts[$this->baseurl."/media/jui/js/jquery.min.js"]);
  unset($this->_scripts[$this->baseurl."/media/jui/js/jquery-noconflict.js"]);
  unset($this->_scripts[$this->baseurl."/media/jui/js/jquery-migrate.min.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/tabs-state.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/mootools.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/mootools-core.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/core.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/caption.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/validate.js"]);
  unset($this->_script["text/javascript"]);

  // System
  $app = JFactory::getApplication();
  $doc = JFactory::getDocument();
  $menu = $app->getMenu();
  $template = $app->getTemplate(true);
  $languages = JLanguage::getKnownLanguages();
  $jinput = $app->input;
  $active = $menu->getActive();
  $default = $menu->getDefault();
  $params = $template->params;

  // Params
  $googleanalytics = $params->get("googleanalytics");

  $facebook = $params->get("facebook");
  $linkedin = $params->get("linkedin");
  $youtube = $params->get("youtube");
  $twitter = $params->get("twitter");
  $gplus = $params->get("gplus");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
  <jdoc:include type="head" />

  <meta charset="utf-8">
  <meta content="@aedweb" name="twitter:site">
  <meta content="8937dbf5b38f2e77-fe74d99ac133704e-g0980a9e175ac5409-f" name="google-translate-customization">
  <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">

  <link href="<?php echo JURI::base()."templates/".$this->template; ?>/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
  <link href="<?php echo JURI::base()."templates/".$this->template; ?>/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
  <link href="<?php echo JURI::base()."templates/".$this->template; ?>/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
  <link href="<?php echo JURI::base()."templates/".$this->template; ?>/apple-touch-icon-precomposed.png" rel="apple-touch-icon">
  <link href="<?php echo JURI::base()."templates/".$this->template; ?>/favicon.png" rel="shortcut icon">
  <link href="<?php echo JURI::base()."templates/".$this->template; ?>/favicon.ico" rel="icon" type="image/ico">

  <!--[if (lt IE 9) & (!IEMobile 7)]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
  <![endif]-->

  <link href="<?php echo JURI::base()."templates/".$this->template; ?>/css/application.css" media="screen" rel="stylesheet" type="text/css" />

  <script src="<?php echo JURI::base()."templates/".$this->template; ?>/javascripts/respond.js" type="text/javascript"></script>
</head>

<?php include_once(JPATH_ROOT."/templates/".$this->template."/includes/sections/header.php"); ?>

<?php if ($active == $default && $jinput->get("option") == $default->query["option"] && $jinput->get("view") == $default->query["view"] && $jinput->get("id") == $default->query["id"]) : ?>
  <div class="hero">
    <div class="inner">
      <div id="slider">
        <?php if ($this->countModules("slideshow")) : ?>
          <jdoc:include type="modules" name="slideshow" />
        <?php endif; ?>
      </div>
      <section class="main">
        <div class="slider-overlay">
          <p id="slider-overlay-text"></p>
          <div id="slider-pager"></div>
        </div>
      </section>
      <aside class="sidebar">
        <div class="find-a-professional">
          <div class="inner">
            <h4>Find a Professional</h4>
            <form class="finder">
              <div class="input">
                <input placeholder="Zip Code" type="text">
              </div>
              <div class="actions">
                <input class="button" type="submit" value="Search">
              </div>
            </form>
            <div class="title">
              <h4>Find a Professional</h4>
              <p>Search for a professional to help you in your area...</p>
            </div>
          </div>
        </div>
        <ul class="panels">
          <?php if ($this->countModules("panels")) : ?>
            <jdoc:include type="modules" name="panels" />
          <?php endif; ?>
        </ul>
      </aside>
    </div>
  </div>

  <div class="content">
    <div class="inner">
      <section class="main accordion">
        <?php if ($this->countModules("tabs-news")) : ?>
          <h3><a href="#news"><i class="icon-news"></i> News</a></h3>
          <div id="news">
            <ul>
              <jdoc:include type="modules" name="tabs-news" />
            </ul>
          </div>
        <?php endif; ?>
        <?php if ($this->countModules("tabs-publications")) : ?>
          <h3><a href="#news"><i class="icon-publications"></i> Publications</a></h3>
          <div id="publications">
            <ul>
              <jdoc:include type="modules" name="tabs-publications" />
            </ul>
          </div>
        <?php endif; ?>
        <?php if ($this->countModules("tabs-resources")) : ?>
          <h3><a href="#news"><i class="icon-resources"></i> Resources</a></h3>
          <div id="resources">
            <ul>
              <jdoc:include type="modules" name="tabs-resources" />
            </ul>
          </div>
        <?php endif; ?>
        <?php if ($this->countModules("tabs-bookstore")) : ?>
          <h3><a href="#bookstore"><i class="icon-bookstore"></i> AED Bookstore</a></h3>
          <div id="bookstore">
            <ul>
              <jdoc:include type="modules" name="tabs-bookstore" />
            </ul>
          </div>
        <?php endif; ?>
      </section>
      <section class="main tabs">
        <ul>
          <?php if ($this->countModules("tabs-news")) : ?>
            <li><a href="#news"><i class="icon-news"></i> News</a></li>
          <?php endif; ?>
          <?php if ($this->countModules("tabs-publications")) : ?>
            <li><a href="#publications"><i class="icon-publications"></i> Publications</a></li>
          <?php endif; ?>
          <?php if ($this->countModules("tabs-resources")) : ?>
            <li><a href="#resources"><i class="icon-resources"></i> Resources</a></li>
          <?php endif; ?>
          <?php if ($this->countModules("tabs-bookstore")) : ?>
            <li><a href="#bookstore"><i class="icon-bookstore"></i> AED Bookstore</a></li>
          <?php endif; ?>
        </ul>
        <div class="inner">
          <?php if ($this->countModules("tabs-news")) : ?>
            <div id="news">
              <ul>
                <jdoc:include type="modules" name="tabs-news" />
              </ul>
            </div>
          <?php endif; ?>
          <?php if ($this->countModules("tabs-publications")) : ?>
            <div id="publications">
              <ul>
                <jdoc:include type="modules" name="tabs-publications" />
              </ul>
            </div>
          <?php endif; ?>
          <?php if ($this->countModules("tabs-resources")) : ?>
            <div id="resources">
              <ul>
                <jdoc:include type="modules" name="tabs-resources" />
              </ul>
            </div>
          <?php endif; ?>
          <?php if ($this->countModules("tabs-bookstore")) : ?>
            <div id="bookstore">
              <ul>
                <jdoc:include type="modules" name="tabs-bookstore" />
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </section>

      <aside class="sidebar">
        <?php if ($this->countModules("sidebar-frontpage")) : ?>
          <jdoc:include type="modules" name="sidebar-frontpage" />
        <?php endif; ?>
      </aside>
    </div>
  </div>
<?php else : ?>
  <?php if ($this->countModules("breadcrumb")) : ?>
    <jdoc:include type="modules" name="breadcrumb" />
  <?php endif; ?>

  <div class="title-bar">
    <div class="inner">
      <div class="other-links-heading">
        <h4>Other Links</h4>
      </div>
      <div class="heading">
        <h1>
          <?php echo str_replace(" - Academy for Eating Disorders", "", $doc->getTitle()); ?>
        </h1>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="inner">
      <div class="main-article">
        <aside class="other-links">
          <ul>
            <li><a href="#">Test</a></li>
            <li><a href="#">Test</a></li>
            <li><a href="#">Test</a></li>
            <li><a href="#">Test</a></li>
          </ul>
        </aside>

        <div class="inner">
          <jdoc:include type="component" />
        </div>
      </div>

      <aside class="sidebar-article">
        <?php if ($this->countModules("sidebar-article")) : ?>
          <jdoc:include type="modules" name="sidebar-article" />
        <?php endif; ?>
      </aside>
    </div>
  </div>
<?php endif; ?>

<?php include_once(JPATH_ROOT."/templates/".$this->template."/includes/sections/footer.php"); ?>

<?php include_once(JPATH_ROOT."/templates/".$this->template."/includes/sections/scripts.php"); ?>

</body>
</html>
