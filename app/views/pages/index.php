<?php
// ملف الإدخال الرئيسي للطلب

//require_once '../../modles/Post.php';

// احصل على المقالات (يمكنك استبداله بمنطق قاعدة البيانات)
$posts = [
    ['id' => 1, 'title' => 'مقال 1', 'content' => 'محتوى المقال 1 ...'],
    ['id' => 2, 'title' => 'مقال 2', 'content' => 'محتوى المقال 2 ...'],
];

// Buffer the page content
ob_start();
?>

<div class="bg-white min-h-screen p-6">
    <h1 class="text-3xl font-bold mb-4 text-center">أحدث المقالات</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($posts as $post) { ?>
            <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-bold"><?= htmlspecialchars($post['title']); ?></h2>
                <p><?= htmlspecialchars(substr($post['content'], 0, 150)); ?>...</p>
                <a href="post.php?id=<?= htmlspecialchars($post['id']); ?>" class="text-blue-500 hover:underline">اقرأ المزيد</a>
            </div>
        <?php } ?>
    </div>
</div>

<?php
// Get the page content into a variable
$content = ob_get_clean();

// Include the layout
include '../layouts/layout.php'; 
?>
