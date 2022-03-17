<?php
  require_once "../init.php";
  require_once '../template/header.php'?>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box no-header clearfix">
                    <div class="main-box-body clearfix">
                        <div class="table-responsive">
                        <div class="text-center">
                          <form action="insert.php" method="get">
                            <button type="submit" class="my-5 btn btn-primary" >Craete Product</button>
                          </form>
                        </div>
                           
                            <table style="margin-top: 10px;" class="table user-list">
                                <thead>
                                    <tr>
                                    <th><span>Product Name</span></th>
                                    <th><span>Pric</span></th>
                                    <th class="text-center"><span>Description</span></th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                      $products = new Item();
                                      if($products->getIems()) {
                                      foreach($products->getIems() as$product) { ?>   
                                    <tr>
                                        <td>
                                            <img src="../public/img/<?=$product['img']?> " width="100">
                                            <span class="user-subhead"><?= $product['name']?></span>
                                        </td>
                                        <td>$<?= $product['price']?></td>
                                        <td class="text-center">
                                            <span class="label label-default"><?= $product['description']?></span>
                                        </td>
                                
                                        <td style="width: 20%;">
                                            <a href="edit.php/?id=<?= $product['id']?>" class="btn btn-warning">Edit</a>
                                            <a href="/Product/app/productProcess.php?send=del&id=<?= $product['id'] ?>"  class="btn btn-danger">Delet</a>
                                        </td>
                                    </tr>

                                    <?php  }
                                  }  else {
                                    echo "<p class='mt-5 mx-auto'>no items</p>";
                                  }?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php  require_once '../template/footer.php'?>
