<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/product_page.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.card', function() {
                // window.location='/show.php?id='+$(this).attr('category_id');
            });
        });
    </script>
</head>

<body>
    <?php $this->load->view('/shop/partials/header'); ?>
    <nav>
        <div class="card" category_id="1">
            <img src="<?= base_url('/user_guide/_images/computers.png'); ?>" alt="" height="70" width="70">
            <p>Computers</p>
        </div>
        <div class="card" category_id="2">
            <img src="<?= base_url('/user_guide/_images/laptop.png'); ?>" alt="" height="70" width="70">
            <p>Laptops</p>
        </div>
        <div class="card" category_id="3">
            <img src="<?= base_url('/user_guide/_images/mouse.png'); ?>" alt="" height="70" width="70">
            <p>Mouse</p>
        </div>
        <div class="card" category_id="4">
            <img src="<?= base_url('/user_guide/_images/printer.png'); ?>" alt="" height="70" width="70">
            <p>Printers</p>
        </div>
        <div class="card" category_id="5">
            <img src="<?= base_url('/user_guide/_images/dress.png'); ?>" alt="" height="70" width="70">
            <p>Dresses</p>
        </div>
        <div class="card" category_id="6">
            <img src="<?= base_url('/user_guide/_images/shirt.png'); ?>" alt="" height="70" width="70">
            <p>Shirt</p>
        </div>
        <div class="card" category_id="7">
            <img src="<?= base_url('/user_guide/_images/short.png'); ?>" alt="" height="70" width="70">
            <p>Shorts</p>
        </div>
        <div class="card" category_id="8">
            <img src="<?= base_url('/user_guide/_images/shoes.png'); ?>" alt="" height="70" width="70">
            <p>Shoes</p>
        </div>
        <div class="card" category_id="9">
            <img src="<?= base_url('/user_guide/_images/heels.png'); ?>" alt="" height="70" width="70">
            <p>Heels</p>
        </div>
        <div class="card" category_id="10">
            <img src="<?= base_url('/user_guide/_images/necklace.png'); ?>" alt="" height="70" width="70">
            <p>Jewelry</p>
        </div>
    </nav>
    <form action="/shops/get_search" method="post">
        <input type="search" name="search">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <input type="image" src="<?= base_url('/user_guide/_images/search.png'); ?>" height="40" width="40">
    </form>
    <section>
        <img src="<?= base_url('/user_guide/_images/sale.jfif'); ?>" alt="" class="sale">
        <div class="section-product">
            <h1>sdsad</h1>
        </div>
    </section>
</body>