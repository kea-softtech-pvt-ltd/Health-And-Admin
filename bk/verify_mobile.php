<?php
include_once('../class/registration.php');
$reg  = new Registration();
$reg->verifyMobile()

?>

<form type="post" id="verify_mobile" name="verify_mobile">
	<lable>	Enter OTP for <?php ?></lable>
	<input type="text" id="verify_mobile"  name="verify_mobile"/>

</form>