<?php require_once('../private/initialize.php') ?>

<?php  

if (!is_post_request()) {
    redirect_to(url_for('index.php'));
}
?>

<h1>This is a Post Request</h1>