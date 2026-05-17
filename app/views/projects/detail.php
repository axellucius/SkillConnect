<section class="ml-1">
    <article class="bg-white shadow-md px-12 py-2 text-[#333333]">
        <h1 class="text-xl font-bold">Project</h1>
        <p class="text-sm">Manage your ongoing creative works and track your team's progress</p>
    </article>

    <article class="px-12 my-4">
        <?php 
            $projectIcon = (!empty($data['project']['icon'])) ? $data['project']['icon'] : 'default-project.jpg'; 
        ?>

        <img src="/assets/uploads/projects/<?= htmlspecialchars($projectIcon) ?>" alt="<?= htmlspecialchars($data['project']['name']) ?>" class="h-24 w-24 rounded-full object-cover border border-gray-200 shadow-sm">

        <div>
            <h1><?= htmlspecialchars($project['name']) ?></h1>
            <p>by <?= htmlspecialchars($project['team_name']) ?> Team</p>
        </div>
    </article>
</section>