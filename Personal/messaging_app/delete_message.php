<?php
include "connection.php";
include "model.php";

$message_id = isset($_GET['message_id']) ? intval($_GET['message_id']) : 0;
$conversation_id = isset($_GET['conversation_id']) ? intval($_GET['conversation_id']) : 0;

if ($message_id > 0) {
    deleteMessage($con, $message_id);
}

header("Location: message.php?conversation_id=" . $conversation_id);
exit;
?>
