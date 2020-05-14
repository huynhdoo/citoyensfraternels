        <!-- stay connected -->
        <div id="homeconnect" class="clearfix">
          <div class="title"><h3>Nous suivre</h3></div>
          <div class="left clearfix">
            Inscrivez-vous à la newsletter :
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <!--<form id="signup" action="https://docs.google.com/forms/d/15PW7jBiQUaSyOzohxgvizi9TwLI50Nor9ACeexHyKYc/formResponse" method="POST" novalidate="">-->
              <form action="<?php echo $site->mailchimp()?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="mc-field-group">
                  <label for="mce-EMAIL">Email Address</label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Votre adresse mél">
                  <!--<input type="email" name="entry.62103730" value="" id="entry_62103730" placeholder="Votre adresse mél">-->
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_3dd956809e3eea85e6aa5ba61_bf60be522e" value=""></div>
                <input type="submit" value="ok" name="subscribe" id="mc-embedded-subscribe" class="button">
                <!--<input type="submit" name="submit" value="ok" id="mc-embedded-subscribe" class="button">-->
              </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
          <div class="right">
            <a class="email" href="mailto:<?php echo $site->email()?>" target="_blank"><i class="fa fa-envelope"></i></a>
            <a class="facebook" href="http://facebook.com/<?php echo $site->facebook()?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a class="twitter" href="http://twitter.com/<?php echo $site->twitter()?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="vimeo" href="http://vimeo.com/<?php echo $site->vimeo()?>" target="_blank"><i class="fa fa-vimeo"></i></a>
            <!--<a class="instagram" href="http://instagram.com/<?php echo $site->instagram()?>" target="_blank"><i class="fa fa-instagram"></i></a>-->
            <div class="hashtag">#<?php echo $site->hashtag()?></div>
          </div>
        </div>
        <!-- end stay connected -->
      </div>
    </div>
  </div>
  <footer id="footer" class="clearfix">
    <div id="footer-wrapper">
      <div class="container">
        <div class="content">
          <?php echo $site->copyright()->kt() ?>
        </div>
      </div>
    </div>
  </footer>

        <div class="hidden">
            <img src="<?php echo $site->url() ?>/assets/images/featarrow.png">
            <img src="<?php echo $site->url() ?>/assets/images/menu-corner-hover.png">
        </div>

        <script src=""></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery</script>
        <script src="<?php echo $site->url() ?>/assets/js/vendor/jquery.sticky.js"></script>
        <script src="<?php echo $site->url() ?>/assets/js/vendor/jquery.fancybox.pack.js"></script>
        <script src="<?php echo $site->url() ?>/assets/js/plugins.js"></script>
        <script src="<?php echo $site->url() ?>/assets/js/main.js"></script>
    </body>
</html>