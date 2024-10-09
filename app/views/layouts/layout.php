<?php
// Start output buffering
ob_start();
?>

<!-- Header -->
<?php include 'header.php'; ?>

<!-- Main content -->
<div class="container mx-auto p-6">
  <?php
  // Include the content of the specific page
  echo $content;
  ?>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<?php
// Get the contents of the buffer and clean the output buffer
ob_end_flush();
?>
