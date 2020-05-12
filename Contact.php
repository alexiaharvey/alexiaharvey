<?php
if($_POST["message"]) {
    mail("alexiaharvey@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>