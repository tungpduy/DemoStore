<?php require "php/functions.php" ?>
<?php
    if(isset($_GET['title'])){
        $title = urldecode($_GET['title']);
        $product = getProductsByTitle($title);
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $product[0]['meta_description']?>">
    <meta name="keywords" content="<?php echo $product[0]['meta_keywords']?>">
    <title><?php echo $title?></title>
    <link href="style.css" rel="stylesheet">
<body>
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
            <div class="section-title">Product details</div>
            <div class="product">
                    <div class="product-left">
                        <img src="<?php echo "products/{$product[0]['image']}"?>" alt="">
                    </div>  
                    <div class="product-right">
                        <p class="title">
                                <?php echo $product[0]['title'] ?>
                        </p>
                        <p class="description">
                            <?php echo $product[0]['description']?>
                        </p>
                        <p class="price">
                            <?php echo $product[0]['price']?>&euro;
                        </p>
                    </div>
            </div>
        </div>
    </div>
    </main>
       
    <script src="" ></script>
    <?php include"includes/footer.php"?>
</body>
</html>
