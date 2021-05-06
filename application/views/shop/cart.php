<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Item</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css')?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/cart.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.sub', function() {
                $('.main').attr('src', $(this).attr('src'));
            });
            $(document).on('click', 'footer img', function() {
                window.location = 'display_item.php?product-id=' + $(this).attr('product_id');
            });
        });
    </script>
</head>

<body>
    <?php include('partials/header.php'); ?>
    <div class="page_container">
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Red Dragon Yama</td>
                    <td>$19.99</td>
                    <td class="quantity">1 <a href="#"><img src="../images/edit.png" alt="" height="20" width="20"></a><a href="#"><img src="../images/delete_trash.png" alt="" height="20" width="20"></a></td>
                    <td>$19.99</td>
                </tr>
                <tr>
                    <td>Red Dragon Yama</td>
                    <td>$19.99</td>
                    <td class="quantity">1 <a href="#"><img src="../images/edit.png" alt="" height="20" width="20"></a><a href="#"><img src="../images/delete_trash.png" alt="" height="20" width="20"></a></td>
                    <td>$19.99</td>
                </tr>
            </tbody>
        </table>
        <section>
            <div>
                <form action="#">
                    <h1>Shipping Information</h1>
                    <label for="first_name_shipping">First name:</label>
                    <input type="text" name="first_name_shipping">
                    <label for="last_name_shipping">Last name:</label>
                    <input type="text" name="last_name_shipping">

                    <label for="address_shipping">Address:</label>
                    <input type="text" name="address_shipping">
                    <label for="address2_shipping">Address 2:</label>
                    <input type="text" name="address2_shipping">

                    <label for="state_shipping">State:</label>
                    <input type="text" name="state_shipping">
                    <label for="zipcode_shipping">Address 2:</label>
                    <input type="text" name="zipcode_shipping">
            </div>
            <div>
                <h1>Billing Information</h1>
                <label for="first_name_billing">First name:</label>
                <input type="text" name="first_name_billing">
                <label for="last_name_billing">Last name:</label>
                <input type="text" name="last_name_billing">

                <label for="address_billing">Address:</label>
                <input type="text" name="address_billing">
                <label for="address2_billing">Address 2:</label>
                <input type="text" name="address2_billing">

                <label for="state_billing">State:</label>
                <input type="text" name="state_billing">
                <label for="zipcode_billing">Address 2:</label>
                <input type="text" name="zipcode_billing">
                <input type="checkbox" name="checkbox" id=""> Same as Shipping
            </div>
            <div>
                <h1>Payment Information</h1>
                <input type="submit" value="Pay now">
                </form>
            </div>

        </section>
    </div>

</body>

</html>