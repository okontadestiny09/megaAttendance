<?php
include "connection.php";
include "model.php";

$current_user_id = 1; // Simulating logged-in user

$conversations = getAllConversations($con, $current_user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="message-list-container">
        <div class="message-header">
            <h1>Messages</h1>
            <div style="display: flex; gap: 12px;">
                <button style="background: none; border: none; font-size: 20px; cursor: pointer; color: #0084ff;"><i class="fas fa-magnifying-glass"></i></button>
                <button style="background: none; border: none; font-size: 20px; cursor: pointer; color: #0084ff;"><i class="fas fa-pen"></i></button>
            </div>
        </div>

        <div class="message-search">
            <input type="text" placeholder="Search conversations...">
        </div>

        <ul class="conversations-list">
            <?php while ($row = mysqli_fetch_assoc($conversations)): ?>
                <li>
                    <a href="message.php?conversation_id=<?= $row['id'] ?>" class="conversation-item" style="text-decoration: none; color: inherit;">
                        <div class="conversation-avatar avatar-<?= abs(crc32($row['contact_name'] ?? '')) % 6 + 1 ?>" style="background: <?= $row['avatar_color'] ?? '#ccc' ?>">
                            <?= strtoupper(substr($row['contact_name'] ?? '', 0, 1)) ?>
                        </div>
                        <div class="conversation-content">
                            <div class="conversation-name"><?= htmlspecialchars($row['contact_name'] ?? '') ?></div>
                            <div class="conversation-preview">
                                <?= htmlspecialchars(substr($row['last_message'] ?? '', 0, 50)) ?>
                                <?php if (strlen($row['last_message'] ?? '') > 50): ?>...<?php endif; ?>
                            </div>
                        </div>
                        <div class="conversation-time">
                            <?php
                                if (!empty($row['last_message_time'])) {
                                    $time = strtotime($row['last_message_time']);
                                    $now = time();
                                    $diff = $now - $time;
                                    
                                    if ($diff < 60) {
                                        echo "now";
                                    } elseif ($diff < 3600) {
                                        echo round($diff / 60) . "m";
                                    } elseif ($diff < 86400) {
                                        echo round($diff / 3600) . "h";
                                    } else {
                                        echo date('M j', $time);
                                    }
                                }
                            ?>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>
