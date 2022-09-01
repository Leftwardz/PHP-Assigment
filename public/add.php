<?php require_once('../private/initialize.php'); ?>
<?php 
    $page_title = 'Add Product';
    include(SHARED_PATH . '/header.php'); 
?>

<?php 

if (is_post_request()) {
    $test = $_POST['product'];
    $product = new Dvd($test);
    $product->create();
    echo 'post';
}

?>


<header class="header">
    <h1 class="header_title">Add Product</h1>
</header>

<main>
    <form class="form" method="post">
        <section id="form_main">
            <p><label for="sku">SKU</label>
                <input id="sku" type="text" name="product[sku]" value="" required></p>

            <p><label for="name">Name</label>
                <input id="name" type="text" name="product[name]" value="" required></p>

            <p><label for="price">Price</label>
                <input id="price" type="text" name="product[price]" value="" required></p>

            <p>
                <label for="productType">Type Switcher</label>
                <select id="productType" name="product[type]">
                    <option id="DVD">DVD</option>
                    <option id="Furniture">Book</option>
                    <option id="Book">Furniture</option>
                </select>
            </p>
        </section>

        <section id="form_dvd">
            <label for="size">Size (MB)</label>
            <input id="size" type="text" name="product[size]" placeholder="Insert the size in MB">
        </section>

        <section class="form-hide" id="form_furniture">
            <p>
                <label for="height">Height (CM)</label>
                <input id="height" type="text" name="product[height]" placeholder="Insert the heigth in cm">
            </p>

            <p>
                <label for="width">Width (CM)</label>
                <input id="width" type="text" name="product[width]" placeholder="Insert the width in cm">
            </p>
            
            <p>
                <label for="length">Length (CM)</label>
                <input id="length" type="text" name="product[length]" placeholder="Insert the length in cm">
            </p>
        </section>

        <section class="form-hide" id="form_book">
            <label for="weight">Weight (Kg)</label>
            <input id="weight" type="text" name="product[weight]" placeholder="Insert the weight in Kg">
        </section>

        <input type="submit" value="Submit">

    </form>
</main>



<?php include(SHARED_PATH . '/footer.php') ?>