<!-- views/partials/comments.php -->
<h2 class="text-2xl mt-6 mb-4">التعليقات</h2>
<!-- Comments form -->
<form action="save-comment.php" method="POST" class="bg-base-200 p-4 rounded-lg">
    <div class="mb-4">
        <label for="comment" class="label">
            <span class="label-text">أضف تعليقك</span>
        </label>
        <textarea id="comment" name="comment" required class="textarea textarea-bordered w-full" placeholder="أدخل تعليقك" rows="4"></textarea>
    </div>
    <div class="form-control">
        <button type="submit" class="btn btn-primary">أضف تعليق</button>
    </div>
</form>

<div class="mt-4">
    <h3>التعليقات السابقة:</h3>
    <p><strong>مستخدم 1:</strong> تعليق 1...</p>
    <p><strong>مستخدم 2:</strong> تعليق 2...</p>
</div>
