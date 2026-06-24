<?php

function executeQuery($con, $statement) {
    $prepare = mysqli_prepare($con, $statement);
    mysqli_stmt_execute($prepare);
    $results = mysqli_stmt_get_result($prepare);
    mysqli_stmt_close($prepare);
    
    return $results;
}

function getAllConversations($con, $user_id) {
    $statement = "SELECT 
                    c.id, 
                    u.name as contact_name,
                    u.avatar_color,
                    m.content as last_message,
                    m.timestamp as last_message_time
                  FROM conversations c
                  JOIN users u ON u.id = IF(c.user1_id = $user_id, c.user2_id, c.user1_id)
                  LEFT JOIN messages m ON m.id = (
                    SELECT id FROM messages WHERE conversation_id = c.id ORDER BY timestamp DESC LIMIT 1
                  )
                  WHERE c.user1_id = $user_id OR c.user2_id = $user_id
                  ORDER BY m.timestamp DESC";
    return executeQuery($con, $statement);
}

function getConversationMessages($con, $conversation_id) {
    $statement = "SELECT 
                    m.id, 
                    m.content, 
                    m.timestamp,
                    u.name,
                    u.avatar_color,
                    u.id as sender_id
                  FROM messages m
                  LEFT JOIN users u ON m.sender_id = u.id
                  WHERE m.conversation_id = $conversation_id
                  ORDER BY m.timestamp ASC";
    return executeQuery($con, $statement);
}

function getConversationDetails($con, $conversation_id) {
    $statement = "SELECT 
                    c.id,
                    u.name as contact_name,
                    u.avatar_color
                  FROM conversations c
                  JOIN users u ON u.id = IF(c.user1_id = 1, c.user2_id, c.user1_id)
                  WHERE c.id = $conversation_id";
    return executeQuery($con, $statement);
}

function createMessage($con, $conversation_id, $sender_id, $content) {
    $statement = "INSERT INTO messages (conversation_id, sender_id, content, timestamp) 
                  VALUES ($conversation_id, $sender_id, '$content', NOW())";
    return mysqli_query($con, $statement);
}

function deleteMessage($con, $message_id) {
    $statement = "DELETE FROM messages WHERE id = $message_id";
    return mysqli_query($con, $statement);
}

?>
