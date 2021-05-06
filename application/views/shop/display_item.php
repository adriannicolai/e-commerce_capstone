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
            // quantity.parseInt();
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
        })
    });
</script>

<body>
    <?php include('partials/header.php'); ?>
    <div class="page_container">
        <aside>
            <img src="<?= base_url('/user_guide/_images/cart.png'); ?>" class="main">
            <img src="<?= base_url('/user_guide/_images/laptop.png'); ?>" class="sub">
            <img src="<?= base_url('/user_guide/_images/mouse.png'); ?>" class="sub">
            <img src="<?= base_url('/user_guide/_images/dress.png'); ?>" class="sub">
            <img src="<?= base_url('/user_guide/_images/heels.png'); ?>" class="sub">
            <img src="<?= base_url('/user_guide/_images/computers.png'); ?>" class="sub">
        </aside>
        <section>
            <h1>Red Dragon Yama K550 purple switch mechanical keyboard</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pulvinar, enim sit amet malesuada sagittis, elit odio feugiat dolor, non cursus nibh nulla at erat. Fusce finibus et sapien eget sagittis. Morbi hendrerit commodo libero, ac lobortis velit scelerisque non. Cras iaculis quis velit quis aliquam. Mauris vel nulla lacus. Phasellus risus velit, faucibus ac ipsum quis, euismod ornare sapien. Nulla eu sapien lectus. Aenean consequat tellus eu dolor fringilla, lacinia accumsan felis venenatis. Donec hendrerit arcu mi, in aliquet odio placerat vitae. Donec lorem nulla, suscipit eu lacinia sed, commodo a tortor. Sed semper orci velit, id condimentum dolor consectetur eget. Cras vehicula ante massa, quis consectetur enim blandit eu. Proin pellentesque molestie libero, nec mollis tellus. Vestibulum aliquam neque sem.</p>
            <form action="">
                <button>-</button>
                <input type="text" name="quantity" value="1" id="quantity">
                <button>+</button>
                <input type="submit" value="Buy Now">
            </form>
        </section>
        <h1>Similar Items</h1>
        <footer>
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
            <img src="<?= base_url('/user_guide/_images/reddragon_mitra.jfif'); ?>" class="recommendation" product_id="2">
        </footer>
    </div>

</body>

</html>