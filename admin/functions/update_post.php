<?php 
require_once "db.php";

// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('Location:../login.php');
    exit;
}

if (isset($_POST["submit"])) {
    $post_id = (int)$_POST['post_id'];
    $author = trim($_POST['author']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    
    // Validate input
    if (empty($author) || empty($title) || empty($content)) {
        header('Location:../edit-post.php?id=' . $post_id . '&error=empty_fields');
        exit;
    }
    
    if (strlen($title) < 5 || strlen($title) > 200) {
        header('Location:../edit-post.php?id=' . $post_id . '&error=invalid_title');
        exit;
    }
    
    if (strlen($content) < 10) {
        header('Location:../edit-post.php?id=' . $post_id . '&error=invalid_content');
        exit;
    }
    
    // Update post in database
    $sql = "UPDATE posts SET author = ?, title = ?, content = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    
    try {
        $stmt->execute([$author, $title, $content, $post_id]);
        header('Location:../posts.php?updated');
        exit;
    } catch (Exception $e) {
        error_log("Error updating post: " . $e->getMessage());
        header('Location:../edit-post.php?id=' . $post_id . '&error=database_error');
        exit;
    }
} else {
    header('Location:../posts.php');
    exit;
}
?>

