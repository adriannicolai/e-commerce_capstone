<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Item</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/display_item.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
</style>
<script>
    $(document).ready(function() {
        $(document).on('click', '.sub', function() {
            $('.main').attr('src', $(this).attr('src'));
        });
        $(document).on('click', 'footer img', function() {
            window.location = '/shops/show_selected_product/' + $(this).attr('product_id');
        });
        $(document).on('click', 'button', function() {
            var quantity = parseInt($('input[name=quantity]').val());
            if ($(this).text() == '+') {
                quantity++;
            } else if ($(this).text() == '-' && quantity != 1) {
                quantity--;
            }
            $('input[name=quantity]').val(quantity);
            return false;
        });
        $(document).on('keyup', '#quantity', function() {
            var added_item = $(this).val();
            if (!$.isNumeric(added_item)) {
                $('#quantity').val(1);
            }
        });
        var product_info = <?= json_encode($product_info[0]) ?>;
        $.post('/shops/get_similar_items', { category_id: product_info.category_id, product_id: product_info.id }, function(res){
            $('footer').html(res);
        });
    });
</script>

<body>
    <?php include('partials/header.php'); ?>
    <div class="page_container">
        <?php foreach ($product_info as $product_infos) { ?>
            <aside>
                <img src="<?= base_url('/user_guide/_images/' . $product_infos['image']); ?>" class="main">
            </aside>
            <section>
                <h1><?= $product_infos['name'] ?></h1>
                <p><?= $product_infos['description'] ?></p>
                <form action="">
                    <button>-</button>
                    <input type="text" name="quantity" value="1" id="quantity">
                    <button>+</button>
                    <input type="submit" value="Buy Now">
                </form>
            </section>
            <form action="get_similar_items" method="post" id="categories_form">
                <input type="hidden" name="category" value="<?= $product_infos['category_id'] ?>">
            </form>
        <?php } ?>
        <h1>Similar Items</h1>
        <footer></footer>
    </div>

</body>

</html>