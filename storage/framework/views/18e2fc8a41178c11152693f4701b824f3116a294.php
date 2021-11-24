<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
          
              </div>
            </header>
            <main class="max-w-6xl mx-auto">
            <?php echo e($slot); ?>

        </main>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\pgmc_doc_tracking\resources\views/layouts/app.blade.php ENDPATH**/ ?>