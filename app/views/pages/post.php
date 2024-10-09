<!-- views/pages/post.php -->
<?php
// Example data, replace this with your database logic
$post = ['id' => 1, 'title' => 'مقال 1', 'content' => 'محتوى المقال 1 ...'];

// Buffer the page content
ob_start();
?>

<h1 class="text-3xl font-bold"><?= $post['title']; ?></h1>
<p><?= $post['content']; ?></p>

<!-- Include comments section -->
<?php include '../partials/comments.php'; ?>

<?php
// Get the page content into a variable
$content = ob_get_clean();

// Include the layout
include '../layouts/layout.php';
?>
