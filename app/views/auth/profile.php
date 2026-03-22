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
    <main style="flex:1; min-width:0;">

        <!-- BANNER START -->
        <div style="width:100%; height:170px; overflow:hidden; background:#0d0f1a;">
            <img src="/assets/images/Banner.png" style="width:100%; height:100%; object-fit:cover; display:block;" onerror="this.style.display='none';" />
        </div>

        <!-- Content area -->
        <div style="padding:0 24px 24px; position:relative; z-index:10;">

            <!-- Top layout -->
            <div style="display:flex; gap:16px; margin-top:-60px;">

                <!-- Profile Card -->
                <div style="background:#fff; border-radius:16px; box-shadow:0 4px 16px rgba(0,0,0,0.08); overflow:hidden; display:flex; flex-direction:column; width:300px; flex-shrink:0; align-self:flex-start;">
                    <div style="display:flex; justify-content:center; padding:20px 16px 8px;">
                        <div style="width:80px; height:80px; border-radius:50%; overflow:hidden; border:4px solid #fff; box-shadow:0 2px 8px rgba(0,0,0,0.12); flex-shrink:0;">
                            <img src="https://ui-avatars.com/api/?name=Lucas+Alexandro&background=6c63ff&color=fff&size=80&bold=true" alt="Lucas Alexandro" style="width:100%; height:100%; object-fit:cover; display:block;" />
                        </div>
                    </div>
                    <div style="display:flex; flex-direction:column; align-items:center; text-align:center; padding:0 20px 20px;">
                        <p style="font-size:14px; font-weight:600; color:#1f2937; margin:4px 0 2px;">Lucas Alexandro</p>
                        <p style="font-size:12px; font-weight:500; color:#6c63ff; margin:0 0 6px;">XI TKJ 3</p>
                        <p style="font-size:12px; color:#9ca3af; line-height:1.6; margin:0 0 12px;">
                            Learning, creating, and sharing skills in technology.
                        </p>
                        <div style="display:flex; width:100%; border-top:1px solid #f3f4f6; padding-top:12px; margin-bottom:12px;">
                            <div style="flex:1; text-align:center;">
                                <p style="font-size:14px; font-weight:600; color:#1f2937; margin:0;">2</p>
                                <p style="font-size:11px; color:#9ca3af; margin:0;">Projects</p>
                            </div>
                            <div style="width:1px; background:#f3f4f6;"></div>
                            <div style="flex:1; text-align:center;">
                                <p style="font-size:14px; font-weight:600; color:#1f2937; margin:0;">23</p>
                                <p style="font-size:11px; color:#9ca3af; margin:0;">Friends</p>
                            </div>
                        </div>
                        <button style="width:100%; padding:8px; background:#6c63ff; color:#fff; border:none; border-radius:10px; font-size:13px; font-weight:500; cursor:pointer; margin-bottom:8px; font-family:Outfit,sans-serif;"
                            onmouseover="this.style.background='#5a52e0'"
                            onmouseout="this.style.background='#6c63ff'">Chat</button>
                        <button style="width:100%; padding:8px; background:transparent; color:#4b5563; border:1px solid #e5e7eb; border-radius:10px; font-size:13px; font-weight:500; cursor:pointer; font-family:Outfit,sans-serif;"
                            onmouseover="this.style.background='#f9fafb'"
                            onmouseout="this.style.background='transparent'">+ Add Friend</button>
                    </div>
                </div>

                <!-- Kolom kanan -->
                <div style="display:flex; flex-direction:column; flex:1; min-width:0; gap:16px; margin-top:90px;">

                    <!-- Skills + Trophy -->
                    <div style="display:flex; gap:16px;">

                        <!-- Top Skills -->
                        <div style="background:#fff; border-radius:16px; box-shadow:0 1px 4px rgba(0,0,0,0.06); padding:16px; flex:1; min-width:0; min-height:180px;">
                            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px;">
                                <p style="font-size:14px; font-weight:600; color:#1f2937; margin:0;">Top Skills</p>
                                <a href="#" style="font-size:12px; color:#6c63ff; text-decoration:none;">See All</a>
                            </div>
                            <div style="display:flex; flex-wrap:wrap; gap:8px;">
                                <span style="padding:4px 10px; border-radius:8px; font-size:12px; font-weight:500; background:#ede9ff; color:#6c63ff;">Web Design</span>
                                <span style="padding:4px 10px; border-radius:8px; font-size:12px; font-weight:500; background:#f3e8ff; color:#9333ea;">Science Analytic</span>
                                <span style="padding:4px 10px; border-radius:8px; font-size:12px; font-weight:500; background:#dbeafe; color:#2563eb;">Web Development</span>
                                <span style="padding:4px 10px; border-radius:8px; font-size:12px; font-weight:500; background:#fce7f3; color:#db2777;">Drawing</span>
                            </div>
                        </div>

                        <!-- Trophy -->
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
                            ['rank'=>1,'name'=>'Alexandra',    'projects'=>5, 'helped'=>12,'medal'=>'🥇','bg'=>'#fef3c7','color'=>'#d97706','initials'=>'AL'],
                            ['rank'=>2,'name'=>'Guinevere',    'projects'=>3, 'helped'=>10,'medal'=>'🥈','bg'=>'#f1f5f9','color'=>'#64748b','initials'=>'GU'],
                            ['rank'=>3,'name'=>'Axel Lucius E','projects'=>2, 'helped'=>10,'medal'=>'🥉','bg'=>'#ffedd5','color'=>'#c2410c','initials'=>'AX'],
                            ['rank'=>4,'name'=>'Vincent G',    'projects'=>1, 'helped'=>10,'medal'=>'',  'bg'=>'#ede9ff','color'=>'#6c63ff','initials'=>'VG'],
                            ['rank'=>5,'name'=>'Harry Wang',   'projects'=>1, 'helped'=>9, 'medal'=>'',  'bg'=>'#dbeafe','color'=>'#2563eb','initials'=>'HW'],
                        ];
                        foreach ($students as $i => $s):
                            $borderTop = $i > 0 ? 'border-top:1px solid #f9fafb;' : '';
                        ?>
                        <div style="display:flex; align-items:center; padding:10px 20px; gap:12px; <?= $borderTop ?>"
                             onmouseover="this.style.background='#f8f9ff'"
                             onmouseout="this.style.background='transparent'">

                            <!-- Rank -->
                            <div style="width:28px; text-align:center; flex-shrink:0;">
                                <?php if ($s['medal']): ?>
                                    <span style="font-size:16px;"><?= $s['medal'] ?></span>
                                <?php else: ?>
                                    <span style="font-size:12px; font-weight:600; color:#9ca3af;">#<?= $s['rank'] ?></span>
                                <?php endif; ?>
                            </div>

                            <!-- Avatar + Name -->
                            <div style="display:flex; align-items:center; gap:10px; flex:1; min-width:0;">
                                <div style="width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:600; flex-shrink:0; background:<?= $s['bg'] ?>; color:<?= $s['color'] ?>;">
                                    <?= $s['initials'] ?>
                                </div>
                                <span style="font-size:13px; font-weight:500; color:#1f2937; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?= htmlspecialchars($s['name']) ?></span>
                            </div>

                            <!-- Projects -->
                            <div style="font-size:12px; color:#9ca3af; width:80px; text-align:center; flex-shrink:0;">
                                <?= $s['projects'] ?> Project<?= $s['projects'] > 1 ? 's' : '' ?>
                            </div>

                            <!-- Helped -->
                            <div style="font-size:12px; color:#9ca3af; width:130px; text-align:center; flex-shrink:0;">
                                <?= $s['helped'] ?> Students Helped
                            </div>

                            <!-- Actions -->
                            <div style="display:flex; align-items:center; gap:4px; flex-shrink:0;">
                                <button title="Chat" style="width:26px; height:26px; display:flex; align-items:center; justify-content:center; border-radius:8px; background:transparent; border:none; cursor:pointer; color:#9ca3af;"
                                    onmouseover="this.style.background='#f3f4f6'"
                                    onmouseout="this.style.background='transparent'">
                                    <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                </button>
                                <button title="Settings" style="width:26px; height:26px; display:flex; align-items:center; justify-content:center; border-radius:8px; background:transparent; border:none; cursor:pointer; color:#9ca3af;"
                                    onmouseover="this.style.background='#f3f4f6'"
                                    onmouseout="this.style.background='transparent'">
                                    <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>

        </div>

    </main>

</body>
</html>