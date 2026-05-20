<aside
    class="flex flex-col fixed h-screen w-58 px-4 py-6 bg-linear-to-b from-[#292D4A] to-[#000000] border-r border-gray-600">

    <!-- LOGO -->
    <h1 class="text-white text-2xl font-bold tracking-tight mb-8">SkillConnect</h1>

    <!-- MENU START -->
    <div class="mb-6">
        <p class="text-white text-[11px] font-semibold uppercase tracking-widest mb-2">Menu</p>
        <nav class="flex flex-col gap-1">
            <a href="/"
                class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-gray-500 text-sm font-medium transition-colors <?= ($active_page == 'home') ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#202853] hover:text-[#a0a8d0]' ?>">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                </svg>
                Home
            </a>

            <a href="#"
                class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-gray-500 text-sm font-medium transition-colors <?= ($active_page == 'skills') ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#202853] hover:text-[#a0a8d0]' ?>">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                Skills
            </a>

            <a href="#"
                class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-gray-500 text-sm font-medium transition-colors <?= ($active_page == 'friends') ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#202853] hover:text-[#a0a8d0]' ?>">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                </svg>
                Friends
            </a>

            <a href="/projects"
                class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-gray-500 text-sm font-medium transition-colors <?= ($active_page == 'projects') ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#202853] hover:text-[#a0a8d0]' ?>">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                </svg>
                Projects
            </a>

            <a href="#"
                class="flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-gray-500 text-sm font-medium transition-colors <?= ($active_page == 'history') ? 'bg-[#2a2f5a] text-white' : 'text-gray-500 hover:bg-[#202853] hover:text-[#a0a8d0]' ?>">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                </svg>
                History
            </a>
        </nav>
    </div>
    <!-- MENU END -->

    <!-- USER PROFILE START -->
    <a href="#"
        class="mt-auto p-2 rounded-lg flex items-center gap-2.5 hover:bg-[#1a1f3a] hover:text-[#202853] transition-colors">
        <div class="w-9 h-9 flex items-center justify-center">
            <?php 
            
            $current_user_name = $_SESSION['user_name'] ?? 'Guest';
            $initial_sidebar = strtoupper(substr(trim($current_user_name), 0, 1));

            if (!empty($_SESSION['user_avatar'])): ?>
                <img src="/assets/uploads/avatars/<?= htmlspecialchars($_SESSION['user_avatar']) ?>" alt="Photo Profile" class="w-full h-full rounded-full object-cover">
            <?php else: ?>
                <div class="w-full h-full rounded-full bg-[#ef6c32] text-white flex items-center justify-center text-sm font-bold shadow-sm">
                    <?= $initial_sidebar ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="flex flex-col gap-1">
            <p class="text-white text-sm font-medium leading-tight">
                <?= htmlspecialchars($_SESSION['user_name'] ?? 'Guest') ?>
            </p>
            <p class="text-[#4a5180] text-[12px] leading-tight">
                <?= htmlspecialchars($_SESSION['user_class'] ?? 'Unknown Class') ?>
            </p>
        </div>
    </a>
    <!-- USER PROFILE END -->
</aside>