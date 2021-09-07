<!DOCTYPE html>
<html lang="en">

<?php $headTitle = "Builder Homepage - Choose Category"; include('./components/layouts/Header.php'); ?>

<body>


   
    <header class="header-custom">
            <?php include('.//components/layouts/header-custom.php'); ?>


    </header>


    <main class="main-wrapper">

    
      

        <section class="workspace">

            <div class="workspace__left">
                <?php include('.//components/layouts/tab-section.php'); ?>
            </div>

            <div class="workspace__main-canvas">
                canvas
            </div>

            <div class="workspace__right">
               <div class="workspace__preview-thumbnail">
                        <div class="workspace__preview-item workspace__preview-item--active"> 
                            <div class="workspace__preview-item-box"><img src="assets/images/front_large.png"/></div>
                            Front
                        </div>
                        <div class="workspace__preview-item"> 
                            <div class="workspace__preview-item-box"><img src="assets/images/back_large.png"/></div>
                            Back
                        </div>
               </div>
            </div>

            
        </section>

        
        <section class="bottom-navigation">
            <?php include('.//components/layouts/bottom-navigation.php'); ?>
        </section>

    </main>

</body>



<?php include('./scripts/index-scripts.php'); ?>
<script src="assets/js/bootstrap.min.js"> </script>



</html>