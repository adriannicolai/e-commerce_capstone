<?php foreach ($search_results as $search_result) { ?>
    <div class="product_list">
        <div class="card" product_id="<?= $search_result['id'] ?>">
            <img src="<?= base_url('/user_guide/_images/' . $search_result['image']) ?>" alt="" height=150 width=150>
            <p class="price">$<?= $search_result['price'] ?> </p>
            <p><?= $search_result['name'] ?></p>
        </div>
    </div>
<?php        } ?>