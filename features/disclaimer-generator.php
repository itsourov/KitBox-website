<?php
include("../config.php"); 
include "../header.php";

?>
<div class="container featurebox">
<form name="gen" method="post" action="result.php">
<h3 class="center-wrapper"><span  class="center headingtext">GDPR Disclaimer Generator By KitBox.org</h3>
<label><span style="color: yellow;">Website Name</label>
<br>
<input  type="text" name="myname" id="T1" placeholder="Website Name" required><br>
<label><span style="color: yellow;">Website Url</label>
<br>
<input type="text" id="T2" name="myurl" placeholder="Website Url" required><br>
<label><span style="color: yellow;">Emali Id</label>
<br>
<input type="text" id="T3" placeholder="Emali Id" name="mymail" required>
<input type="hidden"  name="intent" value="privacy" required>
<br>

<p class="center-wrapper"><button class="btn btn-outline-primary btn-lg center" type="submit" >Generate Page</button></p>


</form>


<?php 
include "../footer.php";
?>

