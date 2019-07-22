<?php 
$PHPtext = "Your PHP alert!";
?>

var JavaScriptAlert = <?php echo json_encode($PHPtext); ?>;
alert(JavaScriptAlert); // Your PHP alert!