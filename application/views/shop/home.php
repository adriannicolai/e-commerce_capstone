<?= print_r($search_results); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display search</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/display_search.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#1').show();
            $(document).on('click', 'a', function() {
                var id = $(this).attr('page_number');
                $('.product_list').hide();
                $('#' + id).show();
            });
            $(document).on('click', '.card', function() {
                window.location = '/shops/show_selected_product/' + $(this).attr('product_id');
            });
        });
    </script>
</head>

<body>
    <?php include('partials/header.php'); ?>
    <form action="display_search.php" method="post">
        <input type="search" name="search">
        <input type="image" src="<?= base_url('/user_guide/_images/search.png'); ?>" height="40" width="40">
    </form>
    <section>
<?php   foreach($search_results as $search_result){?>
        <div class="product_list" id="1"> 
            <div class="card" product_id="1">
                <img src="<?= base_url('/user_guide/_images/reddragon_yama.jpeg') ?>" alt="" height=150 width=150>
                <p class="price">$19.00</p>
                <p>Wow magic</p>
            </div>
        </div>
<?php        }?>
          
    </section>
    <footer>
        <a href="#">Previous</a>
        <a href="#" page_number="1">1</a>
        <a href="#" page_number="2">2</a>
        <a href="#" page_number="3">3</a>
        <a href="#" page_number="4">4</a>
        <a href="#" page_number="5">5</a>
        <a href="#" page_number="6">6</a>
        <a href="#" page_number="7">7</a>
        <a href="#" page_number="8">8</a>
        <a href="#" page_number="9">9</a>
        <a href="#" page_number="10">10</a>
        <a href="#">Next</a>
    </footer>
</body>

</html>