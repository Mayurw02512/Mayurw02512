<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 text-center">
    <?php if(isset($_SESSION['admin'])){ ?>
      <form action="<?php echo base_url(); ?>admin/edit/<?php echo $product->product_id; ?>" method="post">
      <div class="row">
        <div class="col-sm p-4">
          <div class="row"><div class="col-sm">
          <img src="<?php echo base_url(); ?>assets/product/<?php echo $product->image; ?>" class="img-thumbnail" alt="<?php echo $product->name; ?>">
          </div></div>
        </div> 
      </div>
      <div class="row">
        <div class="col-sm p-4">
          <div class="row pt-3 text-center"><div class="col-sm"><h4>
          <?php echo $product->name; ?> bouquet</h4>
          </div></div>           
          
          <div class="row pt-3 justify"><div class="col-sm">
              <input type="text" name="description" value="<?php echo $product->description; ?>" class="form-control">
          </div></div>
          <div class="row pt-3"><div class="col-sm">
            Flower Qty: <strong>10 Nos.</strong>
          </div></div>
          <div class="row pt-3"><div class="col-sm"><strong>Price:  Rs <input type="number" name="price" value="<?php echo $product->price; ?>" class="form-control"></strong>
          </div></div>
          <div class="row pt-3"><div class="col-sm">
          <input type="submit" name="Edit" value="Update" class="btn btn-success">
          </div>
        </div>
      </form>
    <?php }else{ ?>
      <div class="row">
        <div class="col-sm p-4">
          <div class="row"><div class="col-sm">
          <img src="<?php echo base_url(); ?>assets/product/<?php echo $product->image; ?>" class="img-thumbnail" alt="<?php echo $product->name; ?>">
          </div></div>
        </div> 
      </div>
      <div class="row">
        <div class="col-sm p-4">
          <div class="row pt-3 text-center"><div class="col-sm"><h4>
          <?php echo $product->name; ?> bouquet</h4>
          </div></div>           
          
          <div class="row pt-3 justify"><div class="col-sm">
              <?php echo $product->description; ?>
          </div></div>
          <div class="row pt-3"><div class="col-sm">
            Flower Qty: <strong>10 Nos.</strong>
          </div></div>
          <div class="row pt-3"><div class="col-sm"><strong>Price:  Rs <?php echo $product->price; ?></strong>
          </div></div>
          </div>
        </div>
      <?php }; ?>
      </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>