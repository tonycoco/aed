<?php
  defined("_JEXEC") or die;

  unset($this->_scripts[$this->baseurl."/media/system/js/mootools.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/caption.js"]);
  unset($this->_scripts[$this->baseurl."/media/system/js/validate.js"]);

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

<jdoc:include type="message" />
<jdoc:include type="component" />

<?php include_once(JPATH_ROOT."/templates/".$this->template."/includes/sections/footer.php"); ?>

<?php include_once(JPATH_ROOT."/templates/".$this->template."/includes/sections/scripts.php"); ?>

</body>
</html>
