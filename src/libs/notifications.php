<?php
    function create_notification($message, $target) {
        global $conn;
        $conn->query("INSERT INTO Notification VALUES (NULL, '$message', FALSE, $target)");
    }

    function read_all_notifications($target) {
        global $conn;
        $conn->query("UPDATE Notification SET `Read`=TRUE WHERE `Read`=FALSE AND UserID=$target");
    }
    // read all notifications
    if (isset($_GET["read-notifs"])) {
        read_all_notifications($userid);
    }

?>