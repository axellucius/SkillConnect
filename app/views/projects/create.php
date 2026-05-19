<section class="ml-1">
    <article class="bg-white shadow-md px-12 py-2 text-[#333333]">
        <h1 class="text-xl font-bold">Create New Project</h1>
        <p class="text-sm">Start a new project and collaborate with others</p>
    </article>

    <form action="/projects/store" method="POST" enctype="multipart/form-data"
        class="flex flex-col gap-4 mx-12 mt-4 mb-8">
        <div class="flex items-center gap-2">
            <img type="file"  src="/assets/images/default-project.jpg" alt="Default Project Image" class="h-40 w-40 rounded-full object-cover border-2 border-gray-100">
            <div class="flex gap-2 ml-4">
                <label  
                    class="font-semibold bg-[#2A2F5A] text-white py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#454b85] hover:shadow-md transition-all cursor-pointer">
                    Add Image
                    <input type="file" name="icon" class="hidden" accept="image/*">
                </label>
                <button type="button"
                    class="font-semibold bg-[#E8EFF7] text-[#333333] py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#cde1f7] hover:shadow-md transition-all">Delete
                    Image</button>
            </div>
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Project Name</p>
            <input name="name" required
                class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A]"
                type="text" placeholder="Enter your project name...">
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Categories</p>
            <div class="relative mt-1">
                <select name="category_id" required
                    class="w-full p-3 pr-10 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A] bg-white cursor-pointer appearance-none transition-all">
                    <option value="" disabled selected>Select your project category</option>
                    <?php if (!empty($data['categories'])): ?>
                        <?php foreach ($data['categories'] as $category): ?>
                            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Description</p>
            <textarea name="description" rows="3"
                class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A] resize-none"
                placeholder="What is this project about?"></textarea>
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Team Name</p>
            <input name="team_name"
                class="w-full mt-1 p-3 border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A]"
                type="text" placeholder="Enter your team or group name...">
        </div>

        <div class="w-full">
            <p class="text-sm font-semibold">Members</p>
            <div class="relative mt-1">
                <select name="member_ids[]" multiple size="3"
                    class="w-full p-3 bg-[#e8eff7] border border-[#8f8f8f] rounded-md text-[#333333] outline-none focus:border-[#2A2F5A] focus:ring-1 focus:ring-[#2A2F5A] cursor-pointer">

                    <?php if (!empty($data['users'])): ?>
                        <?php foreach ($data['users'] as $user): ?>
                            <option value="<?= $user['id']; ?>" class="p-2 border-b border-gray-100 hover:bg-gray-100">
                                <?= htmlspecialchars($user['name']); ?>
                                <?= isset($user['class']) ? '(' . htmlspecialchars($user['class']) . ')' : '' ?>
                            </option>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <option disabled>No users available...</option>
                    <?php endif; ?>
                </select>
            </div>
            <p class="text-[11px] text-gray-400 mt-1">*Tahan tombol <kbd class="bg-gray-200 px-1 rounded font-bold">Ctrl</kbd>
            </p>
        </div>

        <div class="flex justify-end mt-2 gap-2">
            <a href="/projects"
                class="font-semibold bg-[#E8EFF7] text-[#333333] py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#cde1f7] hover:shadow-md transition-all text-center">Cancel</a>
            <button type="submit"
                class="font-semibold bg-[#2A2F5A] text-white py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#454b85] hover:shadow-md transition-all">Create
                Project</button>
        </div>
    </form>
</section>