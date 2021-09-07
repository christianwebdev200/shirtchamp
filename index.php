<!DOCTYPE html>
<html lang="en">

<?php $headTitle = "Builder Homepage - Choose Category"; include('./components/layouts/Header.php'); ?>

<body>

    <main>
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <?php include('./components/carousel/BuilderCarousel.php'); ?>
                </div>
                
                <div class="col-12 mt-1">
                    <div class="category-rows">
                        <div class=" category-col category-col--big">
                            <?php 
                            $_isBig=true;
                            $_isRight=false;
                            $_title="T-Shirts";
                            $_image="./assets/images/builder/categories/t-shirts.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Sweatshirts";
                            $_image="./assets/images/builder/categories/sweatshirts.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Hoodies";
                            $_image="./assets/images/builder/categories/hoodies.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Long Sleeves";
                            $_image="./assets/images/builder/categories/long-sleeves.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Tanks";
                            $_image="./assets/images/builder/categories/tanks.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="V-Necks";
                            $_image="./assets/images/builder/categories/v-necks.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Tri-Blends";
                            $_image="./assets/images/builder/categories/tri-blends.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Women Tees";
                            $_image="./assets/images/builder/categories/women-tees.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Contractor & 
                            Landscapers";
                            $_image="./assets/images/builder/categories/contruction-landscapers.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Bags";
                            $_image="./assets/images/builder/categories/bags.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Hats & Caps";
                            $_image="./assets/images/builder/categories/cap.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--small">
                            <?php 
                            $_isBig=false;
                            $_isRight=false;
                            $_title="Face Masks &
                            more";
                            $_image="./assets/images/builder/categories/mask.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                        <div class="category-col category-col--big">
                            <?php 
                            $_isBig=true;
                            $_isRight=true;
                            $_title="Featured Brands";
                            $_image="./assets/images/builder/categories/brands.jpg";
                            include('./components/cards/CategoryCard.php'); ?>
                        </div>
                      
                        
                   </div>
                </div>
            </div>


            
        </div>
    </main>

</body>

<script src="./assets/js/swiper-bundle.min.js"></script>

<?php include('./scripts/index-scripts.php'); ?>

<?php include('./components/layouts/Footer.php'); ?>

</html>