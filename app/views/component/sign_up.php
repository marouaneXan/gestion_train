

<div class="container mt-2" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
<h1 class="text-center"><?php echo $title; ?></h1>
   <?php if(isset($errorEmail)): ?>
      <div class="alert alert-danger text-center w-50"  role="alert">
          <?php echo $errorEmail; ?>
      </div>
   <?php elseif(isset($success)): ?>
      <div class="alert alert-success text-center w-50"  role="alert">
          <?php echo $success; ?>
      </div>
   <?php endif; ?>
 <form action="<?php url('sign_up'); ?>" method="POST"  class="border shadow p-4 mt-4 rounded" style="width:50%;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Date of birth</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date_naissance">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
 </form>
</div>

  