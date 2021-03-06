<?php
    include "header.php";
?>
    <?php if(isset($_GET["rest_id"])) : ?>

        <div class="menu-preview">
                
                <div class="banner-area">
                    <div class="img"></div>
                    <h1 class="restaurant-name"><?php echo $userDetails['rest_name'] ?></h1>
                </div>

                <?php foreach($categories as $category) {?>
                    <h5 style=" font-size: 24px; text-align: center; text-decoration: underline; color: #111;" class="category-heading">
                        <?php echo $category['food_category'] ?>
                    </h5>
                    <?php $foods = fetchItemsViaCategories($pdo, $_GET["rest_id"], $category['food_category']); ?>
                    <?php foreach ($foods as $food) { ?>
                        <div class="menu-area">
                            <div class="name-price">
                                <h3 class="menu-food-title"><?php echo $food['food_name'] ?></h3>
                                <p class="menu-food-price">Tsh <?php echo $food['food_price'] ?></p>
                            </div>
                            <p class="menu-food-desc"><?php echo $food['food_desc'] ?></p>
                        </div>
                    <?php }?>
                <?php } ?>

            </div>
                </div>
            </div>
    <?php else : ?>  
        <h3>Something went wrong</h3>
    <?php endif ;?>

