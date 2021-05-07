<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin_header.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/dashboard.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#1').show();
            $(document).on('click', 'footer a', function() {
                $('.results').hide();
                var page_number = $(this).attr('page_number');
                $('#' + page_number).show();
            });
        });
    </script>
</head>

<body>
    <?php $this->load->view('/admin/partials/header_logged_in'); ?>

    <div class="page_container">
        <form action="" method="post">
            <input type="search" name="search">
            <select name="search_order_status" placeholder="Search">
                <option value="status">status</option>
                <option value="statuss">statuuss</option>
            </select>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Billing Address</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="results" id="1">
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
            </tbody>
            <tbody class="results" id="2">
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href="/admins/show/1">100</a></td>
                    <td>Bob</td>
                    <td><?= date('M j Y H:i:s'); ?></td>
                    <td>Sa puso mo</td>
                    <td>$1000000</td>
                    <td>
                        <form action="#" method="post">
                            <Select name="order_status">
                                <option value="asdsa">dasdsa</option>
                                <option value="sdafsf">sdfds</option>
                            </Select>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
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
    </div>
</body>

</html>