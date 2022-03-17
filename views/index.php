<?php 
  require_once "../init.php";
  require_once '../template/header.php';?>
   <div class="container">
        <div class="row text-center py-5">
            <?php 
                $products = new Item();
                if($products->getIems()) {
                foreach($products->getIems() as $product) {
                     ?>   
                    <div class="col-md-3 col-sm-6 my-3 my-md-2">
                    <form action="index.php" method="post">
                        <div class="card shadow">
                            <div>
                            <img src="../public/img/<?=$product['img']?> " alt="Image1" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?=$product['name']?></h5>
                                <p class="card-text">
                                <?=$product['description']?>
                                </p>
                                <h5>
                                    <span class="price">$<?=$product['price']?></span>
                                </h5>
                                <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                                 <input type='hidden' name='product_id' value='<?=$product['id']?>'>
                            </div>
                        </div>
                    </form>
                </div>
           <?php  }
    }  else {
      echo "<p class='mt-5 mx-auto'>Post is empty...</p>";
    }
  ?>
            </div>
        </div>

    <?php  require_once '../template/footer.php'?>
