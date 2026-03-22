<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillConnect</title>
</head>
<body class="flex">
    <!-- SIDEBAR -->
    <?php require_once '../app/views/layout/partials/sidebar.php'; ?>

    <!-- MAIN CONTENT START -->
    <main class="flex-1 pl-58">

        <!-- HEADER START -->
        <header class="flex items-center bg-white shadow-md gap-4 px-4 py-4">
            <a href="/profile" class="flex items-center justify-center px-1 py-2 rounded-[10%] hover:bg-gray-200 transition">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </a>

            <div>
                <h1 class="text-2xl font-bold">SKILLS & EXPERTISE</h1>
                <p class="text-sl">A summary of technical and personal strengths</p>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- LIST SKILLS START -->
        <section class="flex flex-col gap-2 mx-8 mt-6">
            <a href="/skill-detail" class="flex items-center gap-4 bg-white border border-gray-300 rounded-xl px-6 py-6 hover:bg-gray-100 transition">
                <img class="w-16 h-16" src="/assets/images/ios-app.png" alt="Skill Icon">

                <div>
                    <p class="text-lg font-medium tracking-[2px]">TECHNOLOGY</p>
                    <h1 class="text-3xl font-bold">iOS App Development</h1>
                </div>
            </a>

            <a href="/skill-detail" class="flex items-center gap-4 bg-white border border-gray-300 rounded-xl px-6 py-6 hover:bg-gray-100 transition">
                <img class="w-16 h-16" src="/assets/images/ui-ux.png" alt="Skill Icon">

                <div>
                    <p class="text-lg font-medium tracking-[2px]">TECHNOLOGY</p>
                    <h1 class="text-3xl font-bold">UI/UX Design</h1>
                </div>
            </a>

            <a href="/skill-detail" class="flex items-center gap-4 bg-white border border-gray-300 rounded-xl px-6 py-6 hover:bg-gray-100 transition">
                <img class="w-16 h-16" src="/assets/images/basketball.png" alt="Skill Icon">

                <div>
                    <p class="text-lg font-medium tracking-[2px]">SPORT</p>
                    <h1 class="text-3xl font-bold">Basketball</h1>
                </div>
            </a>

            <a href="/skill-detail" class="flex items-center gap-4 bg-white border border-gray-300 rounded-xl px-6 py-6 hover:bg-gray-100 transition">
                <img class="w-16 h-16" src="/assets/images/web-dev.png" alt="Skill Icon">

                <div>
                    <p class="text-lg font-medium tracking-[2px]">TECHNOLOGY</p>
                    <h1 class="text-3xl font-bold">Web Development</h1>
                </div>
            </a>
        </section>
        <!-- LIST SKILLS END -->

    </main>
    <!-- MAIN CONTENT END -->
</body>
</html>