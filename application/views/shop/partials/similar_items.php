<?php
foreach ($similar_items as $similar_item) {
?>
    <img src="<?= base_url('/user_guide/_images/'. $similar_item['image']); ?>" class="recommendation" product_id="<?= $similar_item['id'] ?>">
<?php
}
?>