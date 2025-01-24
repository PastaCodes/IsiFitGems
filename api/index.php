<?php
// To use session vars
session_start();
if (isset($_SESSION['username'])) {
    require_once '../util/db.php';
    // Delete notification request
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['delete_notification'])) {
        $database->delete(
            table: 'notification',
            filters: [
                'id' => $_GET['delete_notification'],
                'username' => $_SESSION['username']
            ]
        );
        exit();
    }
    // Create notification request
    if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_POST['title'])) {
        $database->insert(
            table: 'notification',
            data: [
                'title' => $_GET['title'],
                'content' => $_GET['content'],
                'username' => $_SESSION['username']
            ]
        );
        exit();
    }
}
?>
