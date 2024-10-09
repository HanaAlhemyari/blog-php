<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>مدونتي باستخدام DaisyUI</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" />
  <link href="output.css" rel="stylesheet"> <!-- تأكد من أن لديك ملف CSS تم تجميعه باستخدام Tailwind -->
</head>
<body>

  <!-- Header -->
  <div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
          <li><a href="index.php">الرئيسية</a></li>
          <li><a href="about.php">حول المدونة</a></li>
          <li><a href="contact.php">اتصل بنا</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl">مدونتي</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="about.php">حول المدونة</a></li>
        <li><a href="contact.php">اتصل بنا</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a href="add-post.php" class="btn">إضافة مقال جديد</a>
    </div>
  </div>

  <!-- محتوى المدونة يمكن إضافته هنا -->
