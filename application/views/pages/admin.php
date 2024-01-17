<div class="container">
<div class="row"><div class="col-sm">
<?php if($_SESSION['adminuser']){ ?>
<div class="row text-center"><div class="col-sm"><h4>Users</h4></div></div>
    <div class="row text-center">
        <table class="table">
          <form>
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Mobile</th>
              <th scope="col">Email</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
        <tbody>
        <?php foreach ($user as $value): ?>
          <tr>  
          <th scope="row"><?php echo $value->id; ?></th>
          <td><?php echo $value->name; ?></td>
          <td><?php echo $value->mobile; ?></td>
          <td><?php echo $value->email; ?></td>
          <td><?php echo $value->username; ?></td>
          <td><?php echo $value->password; ?></td>
          <td><?php echo $value->status; ?></td>
          <td><a href="<?php echo base_url(); ?>user/<?php echo $value->id; ?>"><button type="button" class="btn btn-primary p-2">Edit</button></a></td>
          <td><a href="<?php echo base_url(); ?>user/delete/<?php echo $value->id; ?>"><button type="button" class="btn btn-secondary p-2">Delete</button></a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
        </form>
        </table>
        </div>
    </div>
<?php }else{ ?>
<div class="row text-center"><div class="col-sm"><h4>Products</h4></div></div>
    <div class="row">
        <div class="col-sm">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
        <tbody>
        <?php foreach ($product as $value): ?>
          <tr>
          <th scope="row"><?php echo $value->product_id; ?></th>
          <td>
          <img src="<?php echo base_url(); ?>assets/product/<?php echo $value->image; ?>" class="img-thumbnail" alt="<?php echo $value->name; ?>">
          </td>
          <td><?php echo $value->name; ?></td>
          <td><?php echo $value->description; ?></td>
          <td><?php echo $value->price; ?></td>
          <td><?php echo $value->status; ?></td>
          <td><a href="<?php echo base_url(); ?>product/<?php echo $value->product_id; ?>"><button type="button" class="btn btn-primary p-2">Edit</button></a></td>
          <td><a href="<?php echo base_url(); ?>admin/delete/<?php echo $value->product_id; ?>"><button type="button" class="btn btn-secondary p-2">Delete</button></a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        </div>
    </div>
<?php } ?>
</div>
</div>
</div>
