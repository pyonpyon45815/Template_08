<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <h1 class="text-6xl mt-[113px] text-red-600 hover:bg-red-500 font-bold">Hello,Tailwind CSS!</h1>
    <h2 class="text-4xl bg bg-green-300 mt-7 text-center">こんにちは</h2>
    <h3 class="text-center mt-4 text-7xl text-blue-900 bg-yellow-500 ">HELLO World!!</h3>
    <h4 class="font-bold text-7xl mt-4 text-right text-red-200 bg-green-300">おはこんにちは</h4>
    <button class="button-action text-right mt-5 text-red-600 text-6xl hover:bg-yellow-500">ここ押してみて</button>
    <h5 class="text-red-500 hover:bg-green-300 text-5xl mt-5 text-center font-bold">なんで色が変わらない？？</h5>


    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <?php wp_footer(); ?>
</body>

</html>