<?php
global $data;
include("header_2.php");
?>


<div class="single-welcome-hero" style="margin:0">
<center><form method="post" action="<?=$data['base_path']; ?>/home/loginact">
  <div class="hm-foot-email">
    <div class="foot-email-box">
      <input type="text" class="form-control" placeholder="Username" required/>
    </div>
    <!--/.foot-email-box-->
  </div>
  
  <div class="hm-foot-email">
    <div class="foot-email-box">
      <input type="password" class="form-control" placeholder="Password" required/>
    </div>
    <!--/.foot-email-box-->
  </div>
  
  <button class="btn-cart welcome-add-cart" type="submit">Login</button>
</form></center>
<!-- partial -->
</div>

<?php
include("footer_2.php");
?>