
<div class="container mt-5 p-3" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
     <?php if(isset($success)): ?>
        <?php echo $success; ?>
     <?php endif;?>
     <h1 class="text-center"><?php echo $title ?></h1>
    <form action="<?php echo BURL.'sign_in'; ?>" method="POST" class="border shadow p-4 mt-4 rounded" style="border: 1px solid red;width:50%;">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" required aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required id="exampleInputPassword1">
        <span class="feedback text-danger">
            <?php echo $error; ?>
        </span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 </div>