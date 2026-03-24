<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillConnect</title>
</head>
<body class="flex">
    <?php require_once '../app/views/layout/partials/sidebar.php'; ?>

    <!-- SKILLS CONTENT START -->
    <main class="flex-1 pl-58 pb-10">

        <!-- HEADER START -->
        <header class="flex items-center gap-3 bg-white shadow-md px-6 py-4">

            <!-- SEARCH START -->
            <div class="relative flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.85-5.65a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>

                <input type="text" placeholder="Search" class="w-full pl-12 pr-4 py-2 border border-gray-300 rounded-lg bg-transparent focus:outline-none focus:ring-1 focus:ring-gray-400">
            </div>
            <!-- SEARCH END --> 

            <!-- FILTER BUTTON START -->
            <button class="flex items-center gap-2 px-4 py-2.5 border border-gray-300 rounded-lg bg-transparent hover:bg-[#E8EFF7] transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2l-7 7v5l-4 2v-7L3 6V4z"/>
                </svg>

                <span class="text-sm text-gray-700">Filter</span>
            </button>
            <!-- FILTER BUTTON END -->
            
        </header>
        <!-- HEADER END -->

        <!-- MAIN CONTENT START -->
        <section>

        </section>
        <!-- MAIN CONTENT END -->
        
    </main>
    <!-- SKILLS CONTENT END -->
</body>
</html>