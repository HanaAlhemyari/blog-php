/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './views/**/*.{php,html}', // تضمين مجلد views
    './layouts/**/*.{php,html}', // تضمين مجلد layouts إذا كان لديك
    './*.php', // لتضمين أي ملف PHP في الجذر
    './app/views/**/*.{php,html}', // لتضمين الملفات في app/views

  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
