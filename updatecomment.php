<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
       
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE comments SET id = ?, name = ?, email = ?, comment = ?WHERE id = ?');
        $stmt->execute([$id, $name, $email, $comment, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM comments WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Data Comments #<?=$contact['id']?></h2>
    <form action="updatecomment.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="name" value="<?=$contact['name']?>" id="name">
        <label for="email">Email</label>
        <label for="comment">Comment</label>
        <input type="text" name="email" value="<?=$contact['email']?>" id="email">
        <input type="text" name="comment" value="<?=$contact['comment']?>" id="comment">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>