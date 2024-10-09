<!-- views/pages/add-post.php -->
<?php
// Buffer the page content
ob_start();
?>

<h1 class="text-3xl font-bold mb-4">إضافة مقال جديد</h1>

<form action="save-post.php" method="POST" class="bg-base-200 p-6 rounded-lg shadow">
    <div class="mb-4">
        <label for="title" class="label">
            <span class="label-text">عنوان المقال</span>
        </label>
        <input type="text" id="title" name="title" required class="input input-bordered w-full" placeholder="أدخل عنوان المقال">
    </div>
    
    <div class="mb-4">
        <label for="content" class="label">
            <span class="label-text">محتوى المقال</span>
        </label>
        <textarea id="content" name="content" required class="textarea textarea-bordered w-full" placeholder="أدخل محتوى المقال" rows="6"></textarea>
    </div>

    <div class="form-control">
        <button type="submit" class="btn btn-primary">حفظ المقال</button>
    </div>
</form>

<?php
// Get the page content into a variable
$content = ob_get_clean();

// Include the layout
include '../layouts/layout.php';
?>
