<body>
    <nav class="navbar navbar-expand navbar-light bg-secondary-subtle sticky-top">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>"><img class="rounded-circle" src="<?php echo base_url(); ?>assets/product/1krbayca.png" alt="produser" height="50%" width="50%"></a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <?php if (!$_SESSION['login']){ ?>
              <li class="nav-item" data-bs-toggle="modal" data-bs-target=".Login"><a class="nav-link" href="#">Login</a></li>
              <li class="nav-item" data-bs-toggle="modal" data-bs-target=".Register"><a class="nav-link" href="#">Register</a></li>
              <?php }elseif (isset($_SESSION['admin'])){ ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/product">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/admin/user">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/login">Logout</a></li>
              <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/login">Logout</a></li>
              <?php }  ?>
            </ul>
            <!-- <ul class="navbar-nav ms-auto">
              <li class="nav-item align"><input class="form-control" type="search" placeholder="Search" aria-label="Search"></li>
              <li class="nav-item"><button class="btn btn-outline-success" type="submit">Search</button></li>
            </ul> -->
          </div>
        </div>
    </nav>
    <div class="modal Login">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>index.php/login" method="post" caption="Login Page">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" name="username" id="username" placeholder="Enter Username" class="form-control">
                            <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">  
                            <input type="submit" name="login" value="login" class="btn btn-success">
                            <input type="button" name="register" value="register" class="btn btn-success" data-bs-toggle="modal" data-bs-target=".Register">
                        </div>  
                    </div> 
                </form>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
    </div>
    <div class="modal Register">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Register</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url(); ?>index.php/register" method="post" caption="Registration Page">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="Enter text">Name <span style="color: red;"> *</span></label>
                        <input type="text" name="name" placeholder="Enter name here" class="form-control">
                        <label for="Enter number">Mobile No. <span style="color: red;"> *</span></label>
                        <input type="number" name="mobile" id="mobile" placeholder="Enter mobile no. here" class="form-control">
                        <label for="Enter text">Email Id <span style="color: red;"> *</span></label>
                        <input type="text" name="email" placeholder="Enter Email Id here" class="form-control">
                        <label for="Enter text">Username <span style="color: red;"> *</span></label>
                        <input type="text" name="username" placeholder="Enter Username here" class="form-control">
                        <label for="Enter text">Password <span style="color: red;"> *</span></label>
                        <input type="text" name="password" placeholder="Enter Password here" class="form-control">
                        <input type="submit" name="Register" value="Register" class="btn btn-success">
                        <input type="button" name="Login" value="Login" class="btn btn-success pt-2" data-bs-toggle="modal" data-bs-target=".Login">
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>