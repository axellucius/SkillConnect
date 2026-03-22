<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillConnect</title>
</head>
<body class="flex">
    <?php require_once '../app/views/layout/partials/sidebar.php'; ?>

    <!-- MAIN CONTENT START -->
    <main class="flex-1 pl-58 pb-10">

        <!-- HEADER START -->
        <header class="flex items-center bg-white shadow-md gap-4 px-4 py-4">
            <a href="/list-skills" class="flex items-center justify-center px-1 py-2 rounded-[10%] hover:bg-gray-200 transition">
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

        <!-- SKILL DETAIL START -->
        <section class="flex flex-col gap-4 mx-8 mt-6">
            <!-- SKILL NAME START -->
            <div class="flex items-center gap-4 bg-white border border-gray-300 rounded-xl px-6 py-6 hover:bg-gray-100 transition">
                <img class="w-16 h-16" src="/assets/images/web-dev.png" alt="Skill Icon">

                <div>
                    <p class="text-lg font-medium tracking-[2px]">TECHNOLOGY</p>
                    <h1 class="text-3xl font-bold">Web Development</h1>
                </div>
            </div>
            <!-- SKILL NAME END -->

            <!-- EXPERIENCE START -->
            <div class="flex flex-col gap-2 bg-white border border-gray-300 rounded-xl px-6 py-6 hover:bg-gray-100 transition">
                <h1 class="text-3xl font-bold">EXPERIENCE</h1>
                <p class="text-lg">Experienced in web development with a strong foundation in front-end technologies such as HTML, CSS, and JavaScript. Able to build responsive and user-friendly web interfaces using techniques like Flexbox and Tailwind CSS. Has worked on several small projects, including developing a simple login and registration system using local storage and designing clean and modern user interfaces. Currently learning the basics of back-end development and version control using Git and GitHub. Accustomed to project-based tasks that enhance problem-solving skills, attention to detail, and the ability to develop functional websites.</p>
            </div>
            <!-- EXPERIENCE END -->

            <!-- PROJECTS START -->
            <div class="grid grid-cols-4 gap-4">
                <!-- PROJECTS JOINED -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 pl-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <p class="text-lg font-semibold">PROJECTS JOINED</p>
                    <h1 class="text-5xl font-bold pb-1">5</h1>

                    <div class="flex items-center gap-1">
                        <svg class="w-4 h-4 fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-400">Active Projects</p>
                    </div>
                </div>

                <!-- PROJECTS COMPLETED -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 pl-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <p class="text-lg font-semibold">PROJECTS COMPLETED</p>
                    <h1 class="text-5xl font-bold pb-1">3</h1>

                    <div class="flex items-center gap-1">
                        <svg class="w-4 h-4 fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-400">Finished</p>
                    </div>
                </div>

                <!-- PROJECTS ONGOING -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 pl-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <p class="text-lg font-semibold">PROJECTS ONGOING</p>
                    <h1 class="text-5xl font-bold pb-1">2</h1>

                    <div class="flex items-center gap-1">
                        <svg class="w-4 h-4 fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-400">In Progress</p>
                    </div>
                </div>

                <!-- STUDENTS HELPED -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 pl-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <p class="text-lg font-semibold">STUDENTS HELPED</p>
                    <h1 class="text-5xl font-bold pb-1">2</h1>

                    <div class="flex items-center gap-1">
                        <svg class="w-4 h-4 fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-gray-400">Helped</p>
                    </div>
                </div>
            </div>
            <!-- PROJECTS END -->

            <!-- TOOLS START -->
            <div class="grid grid-cols-4 gap-4">
                <!-- SKILL SET -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 pl-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <h1 class="text-lg font-semibold">SKILL SET</h1>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/html.png" alt="Image Icon">
                        <p class="font-medium">HTML</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/css.png" alt="Image Icon">
                        <p class="font-medium">CSS</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/js.png" alt="Image Icon">
                        <p class="font-medium">JavaScript</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/php.png" alt="Image Icon">
                        <p class="font-medium">PHP</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/mysql.png" alt="Image Icon">
                        <p class="font-medium">MySQL</p>
                    </div>
                </div>

                <!-- TOOLS -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 pl-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <h1 class="text-lg font-semibold">TOOLS</h1>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/vscode.png" alt="Image Icon">
                        <p class="font-medium">Visual Studio Code</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/figma.png" alt="Image Icon">
                        <p class="font-medium">Figma</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/github.png" alt="Image Icon">
                        <p class="font-medium">Github</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/xampp.png" alt="Image Icon">
                        <p class="font-medium">XAMPP</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/chrome.png" alt="Image Icon">
                        <p class="font-medium">Chrome</p>
                    </div>
                </div>

                <!-- TECHNOLOGIES -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 pl-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <h1 class="text-lg font-semibold">TECHNOLOGIES</h1>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/tailwind.png" alt="Image Icon">
                        <p class="font-medium">Tailwind CSS</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/bootstrap.png" alt="Image Icon">
                        <p class="font-medium">Bootstrap</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/laravel.png" alt="Image Icon">
                        <p class="font-medium">Laravel</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/json.png" alt="Image Icon">
                        <p class="font-medium">JSON</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img class="w-8 h-8" src="/assets/images/jquery.png" alt="Image Icon">
                        <p class="font-medium">jQuery</p>
                    </div>
                </div>

                <!-- FEATURES -->
                <div class="flex flex-col gap-2 bg-white border border-gray-300 px-6 py-4 w-full rounded-lg hover:bg-gray-100 transition">
                    <h1 class="text-lg font-semibold">FEATURES</h1>

                    <div class="bg-[#E8EFF7] p-2 border rounded-lg">Responsive Layout</div>
                    <div class="bg-[#E8EFF7] p-2 border rounded-lg">Form Validation</div>
                    <div class="bg-[#E8EFF7] p-2 border rounded-lg">API Integration</div>
                    <div class="bg-[#E8EFF7] p-2 border rounded-lg">Database</div>
                </div>
            </div>
            <!-- TOOLS END -->
            
        </section>
        <!-- SKILL DETAIL END -->

    </main>
    <!-- MAIN CONTENT END -->
</body>
</html>