<section class="ml-1">
    <!-- HEADER START -->
    <article class="bg-white shadow-md px-12 py-2 text-[#333333]">
        <h1 class="text-xl font-bold">Projects</h1>
        <p class="text-sm ">Start a new project and collaborate with others</p>
    </article>
    <!-- HEADER END -->

    <!-- PROJECT HEADER START -->
    <article class="flex justify-between items-center mx-12 pt-4 pb-2 border-b border-[#d9d9d9]">
        <div class="flex items-center gap-2 text-[#ef6c32]">
            <h1 class="">My Projects</h1>
            <p class="px-2 border rounded-sm">2</p>
        </div>

        <button class="bg-[#E8EFF7] p-2 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
    </article>
    <!-- PROJECT HEADER END -->

    <!-- PROJECT LIST START -->
    <article class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mx-12 mt-4">
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-4 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center mb-3">
                    <img src="" class="w-8 h-8 rounded-full object-cover">
                    <!-- SVG default icon -->
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2a10 10 0 100 20A10 10 0 0012 2z" />
                    </svg>
                </div>

                <h2 class="font-semibold text-gray-900 text-sm mb-2"></h2>

                <div class="flex items-center gap-1 text-xs text-gray-500 mb-1">
                    <svg class="w-4 h-4"></svg>
                    <span></span>
                </div>

                <!-- Deadline -->

                <div class="flex items-center gap-1 text-xs text-gray-500 mb-2">
                    <svg class="w-4 h-4"></svg>
                    <span></span>
                </div>

            </div>

            <!-- Avatar Member -->
            <div class="mt-3">
                <p class="text-xs text-gray-400 mb-1">Team Member</p>
                <div class="flex items-center -space-x-2">

                    <img src=""
                        title=""
                        class="w-7 h-7 rounded-full border-2 border-white object-cover">

                    <div class="w-7 h-7 rounded-full bg-gray-200 border-2 border-white
                        flex items-center justify-center text-xs text-gray-500">

                    </div>

                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center mt-4 pt-3 border-t border-gray-100">
                <button onclick="openEdit()" class="text-xs text-blue-500 hover:underline">Edit</button>
                <form method="POST">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="project_id" value="">
                    <button onclick="return confirm('Hapus project ini?')" class="text-xs text-red-400 hover:underline">Hapus</button>
                </form>

                <form method="POST">
                    <input type="hidden" name="action" value="join">
                    <input type="hidden" name="project_id" value="">
                    <button class="text-xs text-green-500 hover:underline">Gabung</button>
                </form>

                <span class="text-xs text-gray-400">✓ Member</span>
            </div>
        </div>

        <!-- <div class="col-span-4 text-center text-gray-400 py-16">
            <p>Belum ada project. Klik <strong>+</strong> untuk membuat yang pertama!</p>
        </div> -->
    </article>
    <!-- PROJECT LIST END -->
</section>