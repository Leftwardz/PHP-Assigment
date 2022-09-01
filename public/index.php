<?php require_once('../private/initialize.php'); ?>

<?php 
    $page_title = 'Product List';
    include(SHARED_PATH . '/header.php'); 
?>

<header class="header">
    <h1 class="header_title">Product List</h1>
</header>

<main>
    <a class='btn-add' href="<?php echo url_for('add.php') ?>">Add</a>
    <form action="<?php echo url_for('/delete.php') ?>" method="post">
    <ul class="product-list">
    <?php 
    $object = new Product;

    $products = $object->find_all();


    foreach($products as $product) { ?>
        <li class="product">
            <input type="checkbox" name="<?php echo $product->id; ?>" class="delete-checkbox">
            <h3 class="product_title"><?php echo $product->sku; ?></h3> 
            <p class="product_name" ><?php echo $product->name; ?></p>
            <p class="product_price">$<?php echo $product->price; ?></p>
            <p class="product_attr"><?php echo $product->attr(); ?></p>
        </li>
        <?php }?>
    </ul>
    <input class='btn-massdelete' type="submit" value="Mass Delete">
    </form>
</main>


<?php include(SHARED_PATH . '/footer.php') ?>