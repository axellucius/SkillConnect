<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/output.css">
    <title><?= $title ?? 'SkillConnect'?></title>
</head>

<body class="min-h-screen flex">
    <!-- SIDEBAR START -->
    <?php require_once '../app/views/layout/partials/sidebar.php'?>
    <!-- SIDEBAR END -->

    <!-- MAIN START -->
    <main class="ml-58 flex flex-col flex-1 justify-between">
        <?php require_once $content?>
        
        <!-- FOOTER START -->
        <?php require_once '../app/views/layout/partials/footer.php'?>
        <!-- FOOTER END -->
        
    </main>
    <!-- MAIN END -->

    <script src="/js/script.js"></script>
</body>
</html>