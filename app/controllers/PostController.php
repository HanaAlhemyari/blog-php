<?php
// controllers/PostController.php
require_once '../models/Post.php';

class PostController {
    // عرض جميع المقالات
    public function index(): void {
        $posts = Post::all();
        include '../views/pages/index.php'; // تأكد من مسار ملف عرض صفحة المقالات
    }

    // عرض المقالة المفردة
    public function show(int $id): void {
        $post = Post::find($id);
        if (!$post) {
            echo "Post not found!";
            return;
        }
        include '../views/pages/post.php'; // تأكد من تصحيح المسار إلى ملف عرض المقالة المفردة
    }
}
?>
