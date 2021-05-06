<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin_header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/user_guide/_css/admin_product.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Products</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            function previewImages() {

                var $preview = $('#preview');
                if (this.files) $.each(this.files, readAndPreview);

                function readAndPreview(i, file) {

                    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                        return alert(file.name + " is not an image");
                    } // else...

                    var reader = new FileReader();

                    $(reader).on("load", function() {
                        $preview.prepend($("<img/>", {
                            src: this.result,
                            height: 100,
                            class: "preview_image"
                        }));
                        $('.preview_image').draggable();
                    });

                    reader.readAsDataURL(file);

                }

            }
            $('#file-input').on("change", previewImages);

            $(document).on('click', '#add_product', function() {
                return false;
            });
        });
    </script>
</head>

<body>
    <?php include('partials/header_logged_in.php'); ?>
    <form action="#" method="post">
        <input type="search" name="">
        <button id="add_product" data-toggle="modal" data-target="#add_product_modal">Add new product</button>
    </form>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Inventory Count</th>
                    <th>Quantity Sold</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
                <tr>
                    <td class=" picture"><img src="<?= base_url('/user_guide/_images/cart.png') ?>"></td>
                    <td>1</td>
                    <td>T-Shirt</td>
                    <td>123</td>
                    <td>1000</td>
                    <td class="navigation"><button data-toggle="modal" data-target="#update_product_modal">Update</button><button data-toggle="modal" data-target="#delete_product_modal">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
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
    <!-- modals here -->
    <!-- add products modal -->

    <div class=" container">
        <style scoped>
            @import url('<?= base_url('/user_guide/_css/modal.css'); ?>');
        </style>
        <!-- Add product Modal -->
        <div class="modal fade" id="add_product_modal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add a new product</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <label for="name">Name:</label>
                            <input type="text" name="name">
                            <label for="description">Description</label>
                            <textarea name="description"></textarea>
                            <select name="categories">
                                <option value="shirt">Shirt</option>
                                <option value="mug">mug</option>
                            </select>
                            <label for="category_added">Or Add a new Category</label>
                            <input type="text" name="category_added">
                            <input id="file-input" type="file" multiple>
                            <div id="preview"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" value="Add Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- update modal -->
    <div class=" container">
        <!-- Add product Modal -->
        <div class="modal fade" id="update_product_modal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <label for="name">Name:</label>
                            <input type="text" name="name">
                            <label for="description">Description</label>
                            <textarea name="description"></textarea>
                            <select name="categories">
                                <option value="shirt">Shirt</option>
                                <option value="mug">mug</option>
                            </select>
                            <label for="category_added">Or Add a new Category</label>
                            <input type="text" name="category_added">
                            <input id="file-input" type="file" multiple>
                            <div id="preview"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" value="Add Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delete modal -->
    <div class=" container">
        <!-- Add product Modal -->
        <div class="modal fade" id="delete_product_modal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header delete">
                        <h4 class="modal-title">Are you sure you want to delete the Product?</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="text" name="1" value="1">
                    </div>
                    <div class="modal-footer delete">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" value="Add Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>