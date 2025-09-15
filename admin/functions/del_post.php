<?php 
require_once "db.php";

// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('Location:../login.php');
    exit;
}

if (isset($_POST["id"])) {
    $id = (int)$_POST["id"];
    
    if ($id <= 0) {
        header('Location:../posts.php?del_error=invalid_id');
        exit;
    }
    
    // First delete related comments
    $sql_comments = "DELETE FROM comments WHERE blogid = ?";
    $stmt_comments = $db->prepare($sql_comments);
    
    try {
        $stmt_comments->execute([$id]);
    } catch (Exception $e) {
        error_log("Error deleting comments: " . $e->getMessage());
    }
    
    // Then delete the post
    $sql_post = "DELETE FROM posts WHERE id = ?";
    $stmt_post = $db->prepare($sql_post);
    
    try {
        $stmt_post->execute([$id]);
        header('Location:../posts.php?deleted');
        exit;
    } catch (Exception $e) {
        error_log("Error deleting post: " . $e->getMessage());
        header('Location:../posts.php?del_error=database_error');
        exit;
    }
} else {
    header('Location:../posts.php?del_error=no_id');
    exit;
}
?>