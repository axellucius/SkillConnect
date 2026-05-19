<section class="ml-1">
    <article class="bg-white shadow-md px-12 py-2 text-[#333333]">
        <h1 class="text-xl font-bold">Project</h1>
        <p class="text-sm">Manage your ongoing creative works and track your team's progress</p>
    </article>

    <article class="mx-12 my-4 flex items-center gap-5 border-b border-[#8f8f8f] pb-4">
        <?php 
            $projectIcon = (!empty($data['project']['icon'])) ? $data['project']['icon'] : 'default-project.jpg';

            $dateString = $data['project']['created_at'];
            $date = new DateTime($dateString);
            $formattedDate = $date->format('M j, Y');
        ?>

        <img src="/assets/uploads/projects/<?= htmlspecialchars($projectIcon) ?>" alt="<?= htmlspecialchars($data['project']['name']) ?>" class="h-36 w-36 rounded-full object-cover border border-gray-200 shadow-sm">

        <div class="flex flex-col gap-5">
            <div>
                <h1 class="font-bold text-2xl"><?= htmlspecialchars($data['project']['name']) ?></h1>
                <div class="flex gap-1 text-[#8f8f8f] text-lg">
                    by 
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($data['project']['team_name']) ?> Team</p> 
                </div>
            </div>

            <div class="flex gap-10">
                <div>
                    <p class="text-[#8f8f8f]">Created</p>
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($formattedDate) ?></p>
                </div>

                <div>
                    <p class="text-[#8f8f8f]">Owner</p>
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($data['project']['owner_name']) ?></p>
                </div>

                <div>
                    <p class="text-[#8f8f8f]">Members Active</p>
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($data['project']['member_count']) ?></p>
                </div>
            </div>
        </div>
    </article>

    <article class="mx-12 mb-4 pb-4 border-b border-[#8f8f8f]">
        <h1 class="text-xl font-bold">Description</h1>
        <p class="text-[#8f8f8f]"><?= htmlspecialchars($data['project']['description']) ?></p>
    </article>

    <article class="mx-12 mb-4 pb-4 border-b border-[#8f8f8f]">
        <h1 class="text-xl font-bold pb-1">Categories</h1>
        <p class="text-white bg-[#2A2F5A] py-1 px-3 rounded-sm inline-block"><?= htmlspecialchars($data['project']['category_name'] ?? 'Uncategorized') ?></p>
    </article>

    <article class="mx-12 mb-4 pb-4 border-b border-[#8f8f8f]">
        <h1 class="text-xl font-bold pb-1">Members</h1>
        <p class="text-white bg-[#2A2F5A] py-1 px-3 rounded-sm inline-block"><?= htmlspecialchars($data['project']['member_name'] ?? 'No members') ?></p>
    </article>

    <article class="flex justify-end gap-2 mx-12 mb-8">
        <a href="/projects" class="font-semibold bg-[#E8EFF7] text-[#333333] py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#cde1f7] hover:shadow-md transition-all text-center">Back</a>
        <a type="submit" class="font-semibold bg-[#2A2F5A] text-white py-3 px-5 rounded-lg hover:-translate-y-0.5 hover:bg-[#454b85] hover:shadow-md transition-all">Edit Project</a>
    </article>
</section>