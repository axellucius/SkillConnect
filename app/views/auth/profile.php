<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - SkillConnect</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="font-sans flex min-h-screen" style="background:#f0f2f8; margin:0; padding:0;">

    <!-- SIDEBAR -->
    <?php require_once '../app/views/layout/partials/sidebar.php'; ?>

    <!-- MAIN CONTENT START -->
    <main class="flex-1 pl-58 pb-10">

        <!-- BANNER START -->
        <div class="w-full h-45 relative">
            <img src="/assets/images/Banner.png" class="object-cover block w-full h-45"/>
        </div>
        <!-- BANNER END -->

        <!-- PROFILE CONTENT START -->
        <div class="flex px-8 gap-6">

            <!-- PROFILE CARD START -->
            <div class="bg-white rounded-lg shadow-md flex flex-col w-80 h-full items-center justify-center h-100 gap-2 px-5 py-5">

                <!-- PHOTO PROFILE START -->
                <img src="/assets/images/user1.jpg" class="w-40 h-40 rounded-full border-white border-4 shadow-md">
                <!-- PHOTO PROFILE END -->
                
                <!-- PROFILE INFO START -->
                <div class="flex flex-col items-center">

                    <!-- USERNAME -->
                    <p class="font-semibold text-lg">Lucas Alexandro</p>

                    <!-- CLASS -->
                    <p class="font-semibold text-sm text-gray-400">XI TKJ 3</p>

                    <!-- BIOGRAPHY -->
                    <p class="text-sm text-center text-gray-400">Learning, creating, and sharing skills in technology.</p>

                    <!-- STATS -->
                    <div class="flex gap-10 my-5">
                        <div class="flex flex-col text-center">
                            <p class="font-bold text-xl">2</p>
                            <p class="font-semibold text-gray-400">Projects</p>
                        </div>

                        <div class="w-px bg-gray-400"></div>

                        <div class="flex flex-col text-center">
                            <p class="font-bold text-xl">23</p>
                            <p class="font-semibold text-gray-400">Friends</p>
                        </div>
                    </div>

                    <!-- BUTTONS -->
                    <!-- CHAT BUTTON -->
                    <a href="#" class="bg-[#E8EFF7] w-full flex items-center justify-center h-10 rounded-lg text-lg font-semibold hover:bg-[#c6d4e4] transition">Chat</a>

                    <!-- ADD FRIEND BUTTON -->
                    <button class="bg-[#E8EFF7] w-full flex items-center justify-center h-10 rounded-lg text-lg font-semibold hover:bg-[#c6d4e4] transition mt-2">+ Add Friend</button>

                </div>
                <!-- PROFILE INFO END -->
                
            </div>
            <!-- PROFILE CARD END -->

            <!-- PROFILE RIGHT START -->
            <div class="flex flex-col flex-1 gap-2">

                <!-- TOP SKILLS & TOP PROJECT AWARD -->
                <div class="flex gap-5">

                    <!-- TOP SKILLS -->
                    <div class="bg-white rounded-lg shadow-md p-3 flex-1">
                        <div class="flex items-center justify-between pb-2">
                            <p class="text-lg font-semibold">Top Skills</p>
                            <a href="#" class="text-small text-gray-500 px-2 py-1 rounded-sm hover:bg-gray-200 transition">See All</a>
                        </div>

                        <div class="flex flex-wrap gap-2">
                            <div class="py-1 px-2 rounded-sm bg-[#E8EFF7] border ">iOS App Development</div>
                            <div class="py-1 px-2 rounded-sm bg-[#E8EFF7] border ">UI/UX Design</div>
                            <div class="py-1 px-2 rounded-sm bg-[#E8EFF7] border ">Web Development</div>
                            <div class="py-1 px-2 rounded-sm bg-[#E8EFF7] border ">Basketball</div>
                            <div class="py-1 px-2 rounded-sm bg-[#E8EFF7] border ">Android Development</div>
                            <div class="py-1 px-2 rounded-sm bg-[#E8EFF7] border ">Cyber Secuity</div>
                        </div>
                    </div>

                    <!-- TOP PROJECT AWARD -->
                    <div style="border-radius:16px; box-shadow:0 1px 4px rgba(0,0,0,0.06); padding:16px; flex:1; min-width:0; min-height:180px; background:linear-gradient(135deg,#1e2130 0%,#2d3250 100%); display:flex; flex-direction:column; justify-content:space-between;">
                        <div>
                            <p style="font-size:14px; font-weight:600; color:#fff; margin:0 0 4px;">Top Project Award</p>
                            <p style="font-size:11px; color:#9ca3af; text-transform:uppercase; letter-spacing:0.08em; margin:0;">March 2026</p>
                        </div>
                        <div style="display:flex; align-items:flex-end; justify-content:space-between;">
                            <span style="font-size:36px; line-height:1;">🏆</span>
                            <button style="padding:4px 14px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.18); color:#fff; border-radius:8px; font-size:12px; font-weight:500; cursor:pointer; font-family:Outfit,sans-serif;"
                                onmouseover="this.style.background='rgba(255,255,255,0.22)'"
                                onmouseout="this.style.background='rgba(255,255,255,0.12)'">Share</button>
                        </div>
                    </div>

                </div>

                <!-- Top Active Students -->
                <div style="background:#fff; border-radius:16px; box-shadow:0 1px 4px rgba(0,0,0,0.06); overflow:hidden;">
                    <div style="padding:14px 20px; border-bottom:1px solid #f3f4f6;">
                        <p style="font-size:14px; font-weight:600; color:#1f2937; margin:0;">Top Active Students</p>
                        <p style="font-size:12px; color:#9ca3af; margin:2px 0 0;">Students with the highest activity this month.</p>
                    </div>

                    <?php
                    $students = [
                        ['rank' => 1, 'name' => 'Alexandra', 'projects' => 5, 'helped' => 12, 'medal' => '🥇', 'bg' => '#fef3c7', 'color' => '#d97706', 'initials' => 'AL'],
                        ['rank' => 2, 'name' => 'Guinevere', 'projects' => 3, 'helped' => 10, 'medal' => '🥈', 'bg' => '#f1f5f9', 'color' => '#64748b', 'initials' => 'GU'],
                        ['rank' => 3, 'name' => 'Axel Lucius E', 'projects' => 2, 'helped' => 10, 'medal' => '🥉', 'bg' => '#ffedd5', 'color' => '#c2410c', 'initials' => 'AX'],
                        ['rank' => 4, 'name' => 'Vincent G', 'projects' => 1, 'helped' => 10, 'medal' => '', 'bg' => '#ede9ff', 'color' => '#6c63ff', 'initials' => 'VG'],
                        ['rank' => 5, 'name' => 'Harry Wang', 'projects' => 1, 'helped' => 9, 'medal' => '', 'bg' => '#dbeafe', 'color' => '#2563eb', 'initials' => 'HW'],
                    ];
                    foreach ($students as $i => $s):
                        $borderTop = $i > 0 ? 'border-top:1px solid #f9fafb;' : '';
                    ?>
                        <div style="display:flex; align-items:center; padding:10px 20px; gap:12px; <?php echo $borderTop ?>"
                            onmouseover="this.style.background='#f8f9ff'"
                            onmouseout="this.style.background='transparent'">

                            <!-- Rank -->
                            <div style="width:28px; text-align:center; flex-shrink:0;">
                                <?php if ($s['medal']): ?>
                                    <span style="font-size:16px;"><?php echo $s['medal'] ?></span>
                                <?php else: ?>
                                    <span style="font-size:12px; font-weight:600; color:#9ca3af;">#<?php echo $s['rank'] ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Avatar + Name -->
                            <div style="display:flex; align-items:center; gap:10px; flex:1; min-width:0;">
                                <div style="width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:600; flex-shrink:0; background:<?php echo $s['bg'] ?>; color:<?php echo $s['color'] ?>;">
                                    <?php echo $s['initials'] ?>
                                </div>
                                <span style="font-size:13px; font-weight:500; color:#1f2937; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?php echo htmlspecialchars($s['name']) ?></span>
                            </div>

                            <!-- Projects -->
                            <div style="font-size:12px; color:#9ca3af; width:80px; text-align:center; flex-shrink:0;">
                                <?php echo $s['projects'] ?> Project<?php echo $s['projects'] > 1 ? 's' : '' ?>
                            </div>

                            <!-- Helped -->
                            <div style="font-size:12px; color:#9ca3af; width:130px; text-align:center; flex-shrink:0;">
                                <?php echo $s['helped'] ?> Students Helped
                            </div>

                            <!-- Actions -->
                            <div style="display:flex; align-items:center; gap:4px; flex-shrink:0;">
                                <button title="Chat" style="width:26px; height:26px; display:flex; align-items:center; justify-content:center; border-radius:8px; background:transparent; border:none; cursor:pointer; color:#9ca3af;"
                                    onmouseover="this.style.background='#f3f4f6'"
                                    onmouseout="this.style.background='transparent'">
                                    <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </button>
                                <button title="Settings" style="width:26px; height:26px; display:flex; align-items:center; justify-content:center; border-radius:8px; background:transparent; border:none; cursor:pointer; color:#9ca3af;"
                                    onmouseover="this.style.background='#f3f4f6'"
                                    onmouseout="this.style.background='transparent'">
                                    <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
            <!-- PROFILE RIGHT END -->

        </div>
        <!-- PROFILE CONTENT END -->
    </main>

</body>

</html>