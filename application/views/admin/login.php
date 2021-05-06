<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin_header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/login.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('/admin/partials/header'); ?>

    <form action="/admins/verify_login" method="post">
    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
        <h1>login</h1>
        <label for="email">Email:</label>
        <input type="text" name="email">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>

</html>