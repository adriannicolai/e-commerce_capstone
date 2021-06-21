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
            $(document).on('click', 'a', function() {
                var id = $(this).attr('page_number');
                $('#' + id).show();
            });
            $(document).on('click', '.card', function() {
                window.location = '/shops/show_selected_product/' + $(this).attr('product_id');
            });
            $(document).on('submit', 'form', function() {
                $.post($(this).attr('action'), $(this).serialize(), function(res) {
                    $('section').html(res)
                });
                return false;
            });
        });
    </script>
</head>

<body>
    <?php include('partials/header.php'); ?>
    <form action="/shops/search_product" method="post">
        <input type="search" name="search">
        <input type="image" src="<?= base_url('/user_guide/_images/search.png'); ?>" height="40" width="40">
    </form>
    <section>
        <?php foreach ($search_results as $search_result) { ?>
            <div class="product_list">
                <div class="card" product_id="<?= $search_result['id'] ?>">
                    <img src="<?= base_url('/user_guide/_images/' . $search_result['image']) ?>" alt="" height=150 width=150>
                    <p class="price">$<?= $search_result['price'] ?> </p>
                    <p><?= $search_result['name'] ?></p>
                </div>
            </div>
        <?php } ?>

    </section>
</body>

</html>