<?php snippet('header') ?>
<?php snippet('share') ?>
<!-- begin default -->
<div id="articleint">
  <div class="title"><h3><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></h3></div>
  <div class="articlecontent">
    <div class="articletext">
      <p><?php echo $page->text()->kirbytext() ?></p>
    </div>
    <div id="homewelcome" class="left clearfix">
      <!-- Begin Google Signup Form -->
      <div id="mc_embed_signup">
        <div id="sign_confirm" class="hidden">
          <h2>Merci de votre engagement !</h2>
          <p>Votre signature est bien enregistrée. Diffusez l'appel autour de vous et faites signer vos amis, voisins, collègues, partenaires, élus, etc.
          <div class="clear">
            <input type="submit" name="new" value="Nouvelle signature" id="ss-submit-new" class="button">
          </div>
        </div>
        <form id="signup" action="https://docs.google.com/forms/d/15PW7jBiQUaSyOzohxgvizi9TwLI50Nor9ACeexHyKYc/formResponse" method="POST" novalidate="">
          <input type="hidden" name="draftResponse" value="[,,&quot;7657158251894383874&quot;]">
          <input type="hidden" name="pageHistory" value="0">
          <input type="hidden" name="fvv" value="0">
          <input type="hidden" name="fbzx" value="7657158251894383874">
          <div id="mc_embed_signup_scroll">
            <h2>Signez l'appel</h2>
            <div class="mc-field-group">
              <label for="entry.292069858">Pr&eacute;nom<span class="asterisk">*</span></label>
              <!--<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">-->
              <input type="text" name="entry.292069858" value="" id="entry_292069858">
            </div>
            <div class="mc-field-group">
              <label for="entry.200163565">Nom<span class="asterisk">*</span></label>
              <!--<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">-->
              <input type="text" name="entry.200163565" value="" id="entry_200163565">
            </div>
            <div class="mc-field-group">
              <label for="entry.1335922993">Code postal<span class="asterisk">*</span></label>
              <!-- <input type="text" value="" name="ZIP" class="required" id="mce-ZIP"> -->
              <input type="text" name="entry.1335922993" value="" id="entry_1335922993">
            </div>
            <div class="mc-field-group">
              <label for="entry.1335922993">Organisation</label>
              <input type="text" name="entry.1841708563" value="" id="entry_1841708563">
            </div>
            <div class="mc-field-group">
              <label for="entry_62103730">Email</label>
              <!--<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">-->
              <input type="text" name="entry.62103730" value="" id="entry_62103730">
            </div>
            <div class="mc-field-group" style="padding-top:25px">
              <!--<input type="checkbox" value="1" name="group[457][1]" id="mce-group[457]-457-0">-->
              <input type="checkbox" name="entry.357639412" value="Me tenir informé de la campagne" id="entry_357639412" role="checkbox" style="margin-top:4px">
              <label for="entry_357639412">Me tenir inform&eacute; de la campagne</label>
            </div>
            <div class="clear">
              <!--<input type="submit" value="Je signe" name="subscribe" id="mc-embedded-subscribe" class="button">-->
              <input type="submit" name="submit" value="Je signe" id="ss-submit" class="button">
            </div>
          </div>
        </form>
      </div>
      <!--End Google form signup-->
    </div>
  </div>
</div>
<!-- end default -->
<?php snippet('footer') ?>