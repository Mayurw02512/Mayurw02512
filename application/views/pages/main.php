<div class="container">
  <div class="row text-center"><div class="col-sm-9"><h4>Products</h4></div></div>
	<div><iframe src="https://webchat.botframework.com/embed/mynbot-kblang-bot?s=tJpXvCwD25A.aR8W4a8gMEBG4w_FQz0bXG82IiGvwyN03uG5KedHv4c" style="height: 450px; max-height: 450px;"></iframe>
	</div>	
  <div class="row text-center">
      <?php foreach ($product as $value): ?>
        <div class="col-sm-3">
          <div class="row p-3"><div class="col-sm">
            <a href="<?php echo base_url(); ?>index.php/product/<?php echo $value->product_id; ?>"><img src="<?php echo base_url(); ?>assets/product/<?php echo $value->image; ?>" class="img-thumbnail" alt="<?php echo $value->name; ?>"></a>
          </div></div>
          <div class="row p-3"><div class="col-sm">
            <strong><?php echo $value->name; ?></strong></br>
              Price : <strong><?php echo $value->price; ?></strong>
          </div></div>
        </div>
      <?php endforeach; ?>
  </div>
	<div class="row"><div class="col-sm-6">
		
	</div>
	</div>
</div>
