

<h1 class="text-center mt-2"><?php echo $title?></h1>
<div class="container d-flex justify-content-center">
    <div class="card bg-ligth p-3 my-5" style="width: 40rem;">
        <div class="row" class="image">
            <img src="../assest/images/avatar.png" alt="">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <h6 class="mb-0">First Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <?php echo $info['nom']; ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <h6 class="mb-0">Last Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <?php echo $info['prenom']; ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <h6 class="mb-0">Birthday</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <?php echo $info['date_naissance']; ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <?php echo $info['email']; ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <h6 class="mb-0">Password</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <?php echo $info['password']; ?>
            </div>
        </div>
    </div>
</div>





<style>
    .row img{
        width: 96px;
        height: 90px;
        border-radius: 50%;
        margin:auto;
    }
</style>