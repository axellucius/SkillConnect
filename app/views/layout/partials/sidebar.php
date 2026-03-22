<!-- Sidebar SkillConnect -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/output.css">
</head>

<body>
  <aside class="flex flex-col w-56 min-h-screen px-4 py-6 bg-[#0f1123] sticky top-0 self-start"
    style="height:100vh; flex-shrink:0;">

    <!-- Logo -->
    <h1 class="text-white text-lg font-semibold tracking-tight mb-8">SkillConnect</h1>

    <!-- Menu -->
    <div class="mb-6">
      <p class="text-[#4a5180] text-[11px] font-semibold uppercase tracking-widest mb-2">Menu</p>
      <nav class="flex flex-col gap-1">

        <a href="/home"
          class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
        <?= $current === 'home' ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#1a1f3a] hover:text-[#a0a8d0]' ?>">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
          </svg>
          Home
        </a>

        <a href="/skills"
          class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
        <?= $current === 'skills' ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#1a1f3a] hover:text-[#a0a8d0]' ?>">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
          </svg>
          Skills
        </a>

        <a href="/friends"
          class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
        <?= $current === 'friends' ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#1a1f3a] hover:text-[#a0a8d0]' ?>">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
          </svg>
          Friends
        </a>

        <a href="/projects"
          class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
        <?= $current === 'projects' ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#1a1f3a] hover:text-[#a0a8d0]' ?>">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M20 6h-2.18c.07-.44.18-.88.18-1.36C18 2.5 15.5 0 12.36 0c-1.7 0-3.21.94-4.1 2.34L12 5.95l3.74-3.74c.38.22.76.48 1.08.79L12 7.76 7.18 2.99C6.86 2.68 6.5 2.43 6.12 2.21A4.358 4.358 0 0 0 5 4.64c0 .48.09.92.18 1.36H3c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h17c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2z" />
          </svg>
          Projects
        </a>

      </nav>
    </div>

    <!-- General -->
    <div class="mb-4">
      <p class="text-[#4a5180] text-[11px] font-semibold uppercase tracking-widest mb-2">General</p>
      <nav>
        <a href="/settings"
          class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
        <?= $current === 'settings' ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#1a1f3a] hover:text-[#a0a8d0]' ?>">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z" />
          </svg>
          Settings
        </a>
      </nav>
    </div>

    <!-- User Profile -->
    <div class="mt-auto pt-4 border-t border-[#1e2340] flex items-center gap-2.5">
      <div
        class="w-9 h-9 rounded-full bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center text-white text-xs font-semibold shrink-0">
        VG
      </div>
      <div>
        <p class="text-slate-200 text-sm font-medium leading-tight">Vincent Genesius</p>
        <p class="text-[#4a5180] text-[11px] leading-tight">111K 3</p>
      </div>
    </div>

  </aside>
</body>

</html>