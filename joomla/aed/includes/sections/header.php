<body class="homepage">
  <div id="viewport">
    <div id="menu">
      <h3><a class="menu-icon" href="#"><i class="icon-menu"></i> Menu</a></h3>
      <?php if ($this->countModules("top-links")) : ?>
        <jdoc:include type="modules" name="top-links" />
      <?php endif; ?>
    </div>
    <div id="page">
      <header class="header">
        <div class="inner">
          <a class="logo" href="<?php echo JURI::base(); ?>"><?php echo $app->getCfg("sitename"); ?></a>
          <div class="top">
            <div class="left">
              <h2 class="heading">
                <a href="<?php echo JURI::base(); ?>"><img alt="<?php echo $app->getCfg("sitename"); ?>" src="<?php echo JURI::base()."templates/".$this->template; ?>/images/heading.png" /></a>
              </h2>
              <p class="slogan"><img alt="Prevention. Treatment. Research. Education." src="<?php echo JURI::base()."templates/".$this->template; ?>/images/slogan.png" /></p>
              <a class="menu-icon" href="#">
                Menu <i class="icon-menu"></i>
              </a>
            </div>
            <div class="right">
              <div class="action-bar">
                <div id="google_translate_element"></div>
                <?php if ($this->countModules("search-bar")) : ?>
                  <jdoc:include type="modules" name="search-bar" />
                <?php endif; ?>
              </div>
              <ul class="social-badges">
                <li><a class="badge icons-gplus" href="<?php echo htmlspecialchars($gplus); ?>">Google+</a></li>
                <li><a class="badge icons-facebook" href="<?php echo htmlspecialchars($facebook); ?>">Facebook</a></li>
                <li><a class="badge icons-linkedin" href="<?php echo htmlspecialchars($linkedin); ?>">LinkedIn</a></li>
                <li><a class="badge icons-youtube" href="<?php echo htmlspecialchars($youtube); ?>">YouTube</a></li>
                <li><a class="badge icons-twitter" href="<?php echo htmlspecialchars($twitter); ?>">Twitter</a></li>
              </ul>
            </div>
          </div>
          <nav class="nav">
            <a class="account" href="#"><span><i class="icon-account"></i> Members</span></a>
            <?php if ($this->countModules("top-links")) : ?>
              <jdoc:include type="modules" name="top-links" />
            <?php endif; ?>
          </nav>
        </div>
      </header>
