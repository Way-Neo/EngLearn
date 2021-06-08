<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO comments VALUES (?, ?, ?, ?)');
    $stmt->execute([$id, $name, $email, $comment]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Add Data Comment</h2>
    <form action="createcomment.php" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text"  name="name" id="name">
        <label for="email">Email</label>
        <label for="email">Comment</label>
        <input type="text" name="email" id="email">
        <input type="text" name="comment" id="comment">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>