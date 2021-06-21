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
            $.get('/shops/fetch_categories', function(categories) {
                $('nav').html(categories);
            });
        });
    </script>
</head>

<body>
    <?php $this->load->view('/shop/partials/header'); ?>
    <nav></nav>
    <!-- this form is exempted from csrf protection because refreshing the reult page will have an error -->
    <form action="/shops/get_search" method="post">
        <input type="search" name="search">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <input type="image" src="<?= base_url('/user_guide/_images/search.png'); ?>" height="40" width="40">
    </form>
    <section>
        <img src="<?= base_url('/user_guide/_images/sale.jfif'); ?>" alt="" class="sale">
    </section>
</body>