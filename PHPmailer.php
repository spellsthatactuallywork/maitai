<?php
use google\appengine\api\mail\Message;

$mail_options=[
  "sender" => "thomashsouthern@yahoo.com",
  "to" => "spellsthatactuallywork@gmail.com",
  "subject" => "test subject",
  "textBody" => "test success"];
try {
  $message = new Message;
  Message($mail_options);
  $message->send();
} catch(InvalidArgumentException $e) {
  print($e);
}
?>
