<?php
foreach ($categories as $category) {
?>
    <div class="card" category_id="<?= $category['category_id'] ?>">
        <img src="<?= base_url('/user_guide/_images/'.$category['image_url'].''); ?>" alt="" height="70" width="70">
        <p><?= $category['name'] ?></p>
    </div>
<?php
}
?>