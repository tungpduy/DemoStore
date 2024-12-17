<?php require "function/functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We have a wide collection of electronics, phones, book, and games">
    <meta name="keywords" content="phones, books, games">
    <title>My Store</title>
    <link href="style.css" rel="stylesheet">
</head>
<body id="index">
    <?php include "includes/nav.php"?>
    <?php include "includes/header.php"?>
   
    <main>
        <div class ="left">
            <div class="section-title">Product Categories</div>
            <?php $categories = getCategories() ?>
            <?php
                foreach($categories as $category){
            ?>
            <a href="category.php?category=<?php echo urldecode ($category['category'])?>">
                <?php echo ucfirst($category['category']) ?>
            </a>
        <?php
    }
?>

        </div>

        <div class ="right">
            <div class="section-title">Home Page</div>
            <?php $products_2 = getHomePageProducts(10) ?>

            <div class="product">
                <?php
                    foreach($products_2 as $product){
                ?>    
                    <div class="product-left">
                        <img src="<?php echo "products/{$product['image']}"?>" alt="">
                    </div>  
                    <div class="product-right">
                        <p class="title">
                            <a href="product.php?title=<?php echo urlencode ($product[ 'title']) ?>">
                                <?php echo $product['title'] ?>
                            </a>
                        </p>
                        <p class="description">
                            <?php echo $product['description']?>
                        </p>
                        <p class="price">
                            <?php echo $product['price']?>€
                        </p>
                    </div>
                <?php
                    }
                ?>

                
            </div>
        </div>
    </div>
    </main>

    <script src="script.js" ></script>
    <?php include"includes/footer.php"?>
</body>
</html>
