<?php  require_once '../template/header.php'?>
    <div class="add-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-lg-6 offset-sm-1 offset-lg-3">        
            <div class="form-bg">
              <h2>Add Product</h2>
              <form method="POST" action='/Product/app/productProcess.php' enctype="multipart/form-data">
                <div class="form-group my-4">
                  <input type="text" name="name" class="form-control" placeholder="Name Product" >
                </div>
                <div class="form-group my-4">
                  <input type="number" name="price" class="form-control" placeholder="Price" >
                </div>
              
                <div class="form-group my-4">
                  <input type="text" name="description" class="form-control" placeholder="Description" >
                </div>
                <div class="mb-3 my-4">
                    <input class="form-control" type="file" name="img" id="formFile"  placeholder="Image" >
                  </div>
                <div class="form-group my-4">
                  <button name="submit" class="add-btn">Add Item</button>
                </div>
                
              </form>       
          </div>
        </div>
      </div>
    </div>
    <?php  require_once '../template/footer.php'?>
