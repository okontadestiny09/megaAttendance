<?php
include "connection.php";
include "model.php";

$conversation_id = isset($_POST['conversation_id']) ? intval($_POST['conversation_id']) : 0;
$message = isset($_POST['message']) ? $_POST['message'] : '';
$current_user_id = 1;

if ($conversation_id > 0 && !empty($message)) {
    createMessage($con, $conversation_id, $current_user_id, $message);
}

header("Location: message.php?conversation_id=" . $conversation_id);
exit;
?>
