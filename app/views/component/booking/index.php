


  <h1 class="text-center my-2 py-2"><?php echo $title;?></h1>
  <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <?php if(isset($warning)): ?>
                    <h3 class="alert alert-warning text-center"><?php echo $warning; ?></h3>
                <?php endif; ?> 
                <form class="p-5 border mb-5" method="POST" action="<?php url('booking');?>">
                    <div class="form-group">
                        <label for="ville_depart">My departure station</label>
                        <input type="text" required name="ville_depart" class="form-control" id="ville_depart" >
                    </div>
                    <div class="form-group">
                        <label for="ville_arrivee">My arrival station</label>
                        <input type="text" required class="form-control" name="ville_arrivee" id="ville_arrivee">
                    </div>
                    <div class="form-group">
                        <label for="date_depart">My departure date</label>
                        <input type="date" required class="form-control" name="date_depart" id="date_depart" min="<?=date('Y-m-d')?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>



    