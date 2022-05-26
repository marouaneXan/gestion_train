

  



<?php if(isset($_SESSION['admin_email'])):?>
   <div class="container mt-5 p-2">
      <h1 class="text-center">Dashboard</h1>
      <div class="row row-cols-1 row-cols-md-3 mt-5 g-4">
      <div class="col text-white">
         <div class="card bg-secondary">
            <div class="card-body">
            <h4 class="card-title">Trips<span style="float:right;"><i class="fa-solid fa-train" style="color:black"></i></span></h4>
            <hr>
            <p class="card-text" style="font-size:20px;"><?php echo $number_trips; ?></p>
            </div>
         </div>
      </div>
      <div class="col text-white">
         <div class="card bg-info">
            <div class="card-body">
            <h4 class="card-title">Users<span style="float:right;"><i class="fa-solid fa-users" style="color:black"></i></span></h4>
            <hr>
            <p class="card-text" style="font-size:20px;"><?php echo $number_users; ?></p>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card bg-light">
            <div class="card-body">
            <h4 class="card-title">Clients<span style="float:right;"><i class="fa-solid fa-user-check"></i></span></h4>
            <hr>
            <p class="card-text" style="font-size:20px;"><?php echo $number_clients; ?></p>
            </div>
         </div>
      </div>
      <div class="col text-white mt-3">
         <div class="card bg-success">
            <div class="card-body">
            <h4 class="card-title">Booking Clients<span style="float:right;"><i class="fa-solid fa-ticket" style="color:black"></i></span></h4>
            <hr>
            <p class="card-text" style="font-size:20px;"><?php echo $number_booking_clients; ?></p>
            </div>
         </div>
      </div>
      <div class="col text-white mt-3">
         <div class="card bg-dark">
            <div class="card-body">
            <h4 class="card-title">Booking Users<span style="float:right;"><i class="fa-solid fa-ticket" style="color:black"></i></span></h4>
            <hr>
            <p class="card-text" style="font-size:20px;"><?php echo $number_booking_users; ?></p>
            </div>
         </div>
      </div>
      </div>
      </div>
<?php else:?>
   <div class="pic">
      <img id="home" src="../assest/images/home.png" alt="imaaaaaage" >
      <div class="carousel-caption d-md-block" id="button">
        <h1>ONLINE TICKET RESERVATION SYSTEM</h1>
        <p>WELCOME TO E-TECKITING FOR RAILWAYS</p>
        <a class="btn btn-primary" href="<?php echo url('booking'); ?>">MAKE RESERVATION NOW</a>
      </div>
   </div>
<?php endif; ?>


<style>
#home {
  width: 100%;
  height: 577px;
}
#button{
    bottom: 30%;
}
</style>






