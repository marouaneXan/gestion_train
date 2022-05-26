<div class="container mt-2 p-3" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
     <h1 class="text-center"><?php echo $title; ?></h1>
    <form action="<?php echo BURL.'booking/book_now/'.$trip['id']; ?>" method="POST" class="border shadow p-4 mt-4 rounded" style="border: 1px solid red;width:50%;">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First name</label>
        <input type="text" value="<?php if(isset($_SESSION['client_email'])){echo $client['nom'];} ?>" class="form-control" id="exampleInputEmail1" name="nom" required aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last name</label>
        <input type="text" value="<?php if(isset($_SESSION['client_email'])){echo $client['prenom'];} ?>" class="form-control" id="exampleInputEmail1" name="prenom" required aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Date</label>
        <input type="date" value="<?php if(isset($_SESSION['client_email'])){echo $client['date_naissance'];} ?>" class="form-control" id="exampleInputEmail1" name="date_naissance" required aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" value="<?php if(isset($_SESSION['client_email'])){echo $client['email'];} ?>" class="form-control" id="exampleInputEmail1" name="email" required aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Confirm</button>
    </form>
 </div>