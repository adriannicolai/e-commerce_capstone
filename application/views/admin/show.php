<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Order</title>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin_header.css') ?>">
    <link rel="stylesheet" href="<?= base_url(('/user_guide/_css/show.css')) ?>">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php include('partials/header_logged_in.php'); ?>
    <div class="container_show">
        <div>
            <h1>Order ID: <?= $id; ?></h1>
            <h2>Customer Shipping Info:</h2>
            <h3>Name: Bob</h3>
            <h3>Address: Sa puso mo</h3>
            <h3>City: Seattlel</h3>
            <h3>Zipcode: 694200</h3>

            <h2>Customer Billing Info</h2>
            <h3>Name: Bob</h3>
            <h3>Address: Sa puso mo</h3>
            <h3>City: Seattlel</h3>
            <h3>Zipcode: 694200</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>32</td>
                    <td>Cup</td>
                    <td>$9.99</td>
                    <td>1</td>
                    <td>$9.99</td>
                </tr>
            </tbody>
        </table>
        <footer>
            <h1 class="shipping_status">Shipped</h1>
            <h1 class="shipping_status">Shipping</h1>
            <h1 class="shipping_status">Cancelled</h1>
            <div class="receipt">
                <h1>Subtotal: $100</h1>
                <h1>Shipping: $100</h1>
                <h1>Total: $100</h1>
            </div>
        </footer>
    </div>
</body>

</html>