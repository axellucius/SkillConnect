<section class="ml-1">
    <!-- HEADER START -->
    <article class="bg-white shadow-md px-12 py-2 text-[#333333]">
        <h1 class="text-xl font-bold">Projects</h1>
        <p class="text-sm">Manage your ongoing creative works and track your team's progress</p>
    </article>
    <!-- HEADER END -->

    <!-- PROJECT HEADER START -->
    <article class="flex justify-between items-center mx-12 pt-4 pb-2 border-b border-[#d9d9d9]">
        <div class="flex items-center gap-2 text-[#ef6c32]">
            <h1 class="font-semibold">My Projects</h1>
            <p class="px-2 border rounded-sm"><?= count($data['projects']); ?></p>
        </div>

        <!-- CREATE & DELETE PROJECT START -->
        <div class="flex gap-2">
            <button class="bg-[#E01014] p-3 rounded-md hover:bg-[#ff2e31] transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>

            <a href="/projects/create" class="bg-[#2A2F5A] p-3 rounded-md hover:bg-[#323b91] transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </a>
        </div>
        <!-- CREATE & DELETE PROJECT END -->
    </article>
    <!-- PROJECT HEADER END -->

    <!-- PROJECT LIST START -->
    <article class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mx-12 mt-4">
        <?php if (!empty($data['projects'])): ?>
            <?php foreach ($data['projects'] as $project): ?>

                <!-- CARD PROJECT START -->
                <a href="/projects/detail/<?= $project['id']; ?>"
                    class="bg-white rounded-xl border border-gray-100 shadow-sm p-4 flex flex-col justify-between hover:translate-y-1 hover:shadow-md transition-all"
                    data-id="<?= $project['id']; ?>">
                    <div>
                        <div class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center mb-3 overflow-hidden">
                            <img src="/assets/uploads/projects/<?= $project['icon']; ?>" class="w-full h-full object-cover"
                                onerror="this.src='/assets/images/default-project.jpg'">
                        </div>

                        <h2 class="font-medium text-[#333333] text-xl mb-3"><?= $project['name']; ?></h2>

                        <div class="flex flex-col gap-2 text-xs text-gray-500 pb-3 border-b border-[#d9d9d9]">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-5 text-[#ecd718]">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-[#333333]"><?= $project['team_name'] ?: 'No Team'; ?></p>
                            </div>

                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-5 text-[#333333]">
                                    <path
                                        d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                                </svg>
                                <p class="text-[#333333]"><?= $project['total_members']; ?> Members</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="text-xs text-[#333333] mb-1">Team Member</p>
                        <div class="flex items-center -space-x-2 mt-1.5">
                            <?php
                            if (!empty($project['member_data'])) {
                                $members_raw = explode(',', $project['member_data']);
                                $total = count($members_raw);
                                $display_members = array_slice($members_raw, 0, 3);

                                $bg_colors = ['bg-orange-500', 'bg-blue-500', 'bg-emerald-500', 'bg-purple-500', 'bg-indigo-500'];

                                foreach ($display_members as $index => $member_string):
                                    $parts = explode(':', $member_string);
                                    $user_name = isset($parts[0]) ? trim($parts[0]) : 'User';
                                    $avatar = isset($parts[1]) ? trim($parts[1]) : '';

                                    $initial = strtoupper(substr($user_name, 0, 1));

                                    $current_bg = $bg_colors[$index % count($bg_colors)];

                                    if (!empty($avatar)): ?>
                                        <img src="/assets/uploads/avatars/<?= $avatar ?>"
                                            class="w-8 h-8 rounded-full border-2 border-white object-cover shadow-sm"
                                            title="<?= htmlspecialchars($user_name) ?>">
                                    <?php else: ?>
                                        <div class="w-8 h-8 rounded-full border-2 border-white <?= $current_bg ?> text-white flex items-center justify-center text-xs font-bold shadow-sm"
                                            title="<?= htmlspecialchars($user_name) ?>">
                                            <?= $initial ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach;

                                if ($total > 3): ?>
                                    <div
                                        class="w-8 h-8 rounded-full bg-[#E8EFF7] border-2 border-white flex items-center justify-center text-[10px] text-[#2A2F5A] font-bold shadow-sm">
                                        +<?= $total - 3 ?>
                                    </div>
                                <?php endif;

                            } else {
                                echo '<p class="text-[10px] text-gray-400 italic pl-2">No members yet</p>';
                            }
                            ?>
                        </div>
                    </div>
                </a>
                <!-- CARD PROJECT END -->
            <?php endforeach; ?>

        <?php else: ?>
            <div class="col-span-full text-center text-gray-400 py-16">
                <p>No projects found yet. Click <strong>+</strong> to get started!</p>
            </div>
        <?php endif; ?>

    </article>
    <!-- PROJECT LIST END -->
</section>