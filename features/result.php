<?php
include("../config.php");
include "../header.php";
include 'template.php';



$kiturl = "https://www.kitbox.org";
$name = $_POST["myname"];
$url = $_POST["myurl"];
$mail = $_POST["mymail"];

?>


<div class='container featurebox'>
  <textarea rows='16' id='copy_textarea' name='TA1' spellcheck='false'>
<?php if ($_POST['intent'] == "privacy") {
 
 

 

 echo  str_replace("kitboxmail@gmail.com", $mail,  str_replace("kitboxurl.com", $$url, str_replace("kitboxname", $name, $privacyPolicyTemplate)));
  
}elseif ($_POST['intent'] == "terms") {
  echo  str_replace("kitboxmail@gmail.com", $mail,  str_replace("kitboxurl.com", $$url, str_replace("kitboxname", $name, $termsAndConditionsTemplate)));

}elseif ($_POST['intent'] == "disclaimer") {
  echo  str_replace("kitboxmail@gmail.com", $mail,  str_replace("kitboxurl.com", $$url, str_replace("kitboxname", $name, $disclimerTemplate)));

}

?>
    </textarea>
  </br>
  <p class='center-wrapper'><button onclick='myFunction()' class='btn btn-outline-primary btn-lg center' type='button' id='copy_button'>Copy Text to Clipboard<span id='copy_tooltip' aria-live='assertive' role='tooltip'></span></button></p>
</div>

<script>
  function myFunction() {
    var copyText = document.getElementById("copy_textarea");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");

  }
</script>




<?php
include "../footer.php";
?>