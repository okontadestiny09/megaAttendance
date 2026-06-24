<?php
include "connection.php";
include "model.php";

$conversation_id = isset($_GET['conversation_id']) ? intval($_GET['conversation_id']) : 0;
$current_user_id = 1; // Simulating logged-in user

if ($conversation_id === 0) {
    header("Location: index.php");
    exit;
}

$conversation_detail = getConversationDetails($con, $conversation_id);
$detail = mysqli_fetch_assoc($conversation_detail);

$messages = getConversationMessages($con, $conversation_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($detail['contact_name']) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="message-detail-container">
        <div class="message-detail-header">
            <a href="index.php" class="detail-back-btn"><i class="fas fa-arrow-left"></i></a>
            <div class="detail-header-info">
                <div class="detail-contact-name"><?= htmlspecialchars($detail['contact_name']) ?></div>
            </div>
            <div style="display: flex; gap: 12px;">
                <button style="background: none; border: none; font-size: 20px; cursor: pointer; color: #0084ff;"><i class="fas fa-phone"></i></button>
                <button style="background: none; border: none; font-size: 20px; cursor: pointer; color: #0084ff;"><i class="fas fa-ellipsis-v"></i></button>
            </div>
        </div>

        <div class="messages-content">
            <?php while ($msg = mysqli_fetch_assoc($messages)): ?>
                <div class="message-group" style="flex-direction: <?= $msg['sender_id'] == $current_user_id ? 'row-reverse' : 'row' ?>; position: relative;">
                    <div>
                        <?php if ($msg['sender_id'] != $current_user_id): ?>
                            <div class="conversation-avatar" style="background: <?= $msg['avatar_color'] ?? '#ccc' ?>; width: 32px; height: 32px; font-size: 14px;">
                                <?= strtoupper(substr($msg['name'] ?? '', 0, 1)) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div style="flex: 1;">
                        <div style="display: flex; gap: 8px; align-items: flex-end; <?= $msg['sender_id'] == $current_user_id ? 'flex-direction: row-reverse;' : '' ?>">
                            <div class="<?= $msg['sender_id'] == $current_user_id ? 'message-bubble-sender' : 'message-bubble-receiver' ?>">
                                <?= htmlspecialchars($msg['content']) ?>
                            </div>
                        </div>
                        <div class="message-time" style="text-align: <?= $msg['sender_id'] == $current_user_id ? 'right' : 'left' ?>;">
                            <?= date('g:i a', strtotime($msg['timestamp'])) ?>
                            <?php if ($msg['sender_id'] == $current_user_id): ?>
                                &middot; <a href="delete_message.php?message_id=<?= $msg['id'] ?>&conversation_id=<?= $conversation_id ?>" style="color: #ff3b30; text-decoration: none;" onclick="return confirm('Delete this message?');">Delete</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <form class="message-input-container" method="POST" action="send_message.php">
            <input type="hidden" name="conversation_id" value="<?= $conversation_id ?>">
            <input type="text" name="message" class="message-input" placeholder="Aa" required>
            <button type="submit" class="message-send-btn"><i class="fas fa-paper-plane"></i></button>
        </form>
    </div>
</body>
</html>
