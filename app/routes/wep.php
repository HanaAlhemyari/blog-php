<?php
// routes/web.php
require_once '../controllers/PostController.php';

$postController = new PostController();

$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri === '/my-blog/public/' || $requestUri === '/my-blog/public/index.php') {
    $postController->index(); // عرض جميع المقالات
} elseif (preg_match('/^\/my-blog\/public\/post\/(\d+)$/', $requestUri, $matches)) {
    $postController->show((int)$matches[1]); // عرض مقالة محددة
} else {
    echo "404 Not Found"; // رسالة الخطأ
}
?>
