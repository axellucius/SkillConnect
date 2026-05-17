<section class="ml-1">
    <article class="bg-white shadow-md px-12 py-2 text-[#333333]">
        <h1 class="text-xl font-bold">Project</h1>
        <p class="text-sm">Manage your ongoing creative works and track your team's progress</p>
    </article>

    <article class="px-12 my-4 flex items-center gap-5">
        <?php $projectIcon = (!empty($data['project']['icon'])) ? $data['project']['icon'] : 'default-project.jpg'; ?>

        <img src="/assets/uploads/projects/<?= htmlspecialchars($projectIcon) ?>" alt="<?= htmlspecialchars($data['project']['name']) ?>" class="h-36 w-36 rounded-full object-cover border border-gray-200 shadow-sm">

        <div class="flex flex-col gap-5">
            <div>
                <h1 class="font-bold text-xl"><?= htmlspecialchars($project['name']) ?></h1>
                <div class="flex gap-1 text-[#8f8f8f]">
                    by 
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($project['team_name']) ?> Team</p> 
                </div>
            </div>

            <div class="flex gap-10">
                <div>
                    <p class="text-[#8f8f8f]">Created</p>
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($project['created_at']) ?></p>
                </div>

                <div>
                    <p class="text-[#8f8f8f]">Owner</p>
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($project['owner_id']) ?></p>
                </div>

                <div>
                    <p class="text-[#8f8f8f]">Members Active</p>
                    <p class="text-[#ef6c00] font-semibold"><?= htmlspecialchars($project['member_count']) ?></p>
                </div>

            </div>

        </div>
    </article>
</section>