<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 text-center">
        <div class="row"><div class="col-sm"><h2>Edit User Detail</h2></div</div>
        <form action="<?php echo base_url(); ?>user/edit/<?php echo $user['0']->id; ?>" method="post" caption="Login Page">
            <div class="row">
                <div class="col-sm-12">
                    <label for="Enter text">Name <span style="color: red;"> *</span></label>
                    <input type="text" name="name" value="<?php echo $user[0]->name; ?>" class="form-control">
                    <label for="Enter text">Username <span style="color: red;"> *</span></label>
                    <input type="text" name="username" value="<?php echo $user[0]->username; ?>" class="form-control">
                    <label for="Enter text">Password <span style="color: red;"> *</span></label>
                    <input type="text" name="password" value="<?php echo $user[0]->password; ?>" class="form-control">
                    <input type="submit" name="Edit" value="Update" class="btn btn-success">
                </div>  
            </div> 
        </form>  
        </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>