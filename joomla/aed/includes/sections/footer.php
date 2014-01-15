    <footer class="footer">
      <div class="inner">
        <ul class="social-badges">
          <li><a class="badge icons-gplus-dark" href="<?php echo htmlspecialchars($gplus); ?>">Google+</a></li>
          <li><a class="badge icons-facebook-dark" href="<?php echo htmlspecialchars($facebook); ?>">Facebook</a></li>
          <li><a class="badge icons-linkedin-dark" href="<?php echo htmlspecialchars($linkedin); ?>">LinkedIn</a></li>
          <li><a class="badge icons-youtube-dark" href="<?php echo htmlspecialchars($youtube); ?>">YouTube</a></li>
          <li><a class="badge icons-twitter-dark" href="<?php echo htmlspecialchars($twitter); ?>">Twitter</a></li>
        </ul>
        <nav class="links">
          <?php if ($this->countModules("footer-links")) : ?>
            <jdoc:include type="modules" name="footer-links" />
          <?php endif; ?>
        </nav>
      </div>
    </footer>
  </div>
</div>
