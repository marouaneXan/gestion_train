<?php if(!empty($trips)):?>
    <h1 class="text-center"><?php echo $title;?></h1>
<?php endif?>
<div class="container">
        <?php
            if(isset($success)){
                echo '<div class="alert alert-success text-center" role="alert">
                            '.$success.'
                        </div>';
            }
        ?>
        <div class="col-10 mx-auto p-4 border mb-5 mt-5">
            <button type="button" data-bs-toggle="modal" data-bs-target="#addTrip"  class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus"></i></button>
            <!-- Modal for add trip -->
            <div class="modal fade" id="addTrip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Trip</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo url('trips'); ?>" method="POST" >
                            <div class="mb-3">
                                <label for="ville_depart" class="form-label">Departure</label>
                                <input type="text" class="form-control" id="ville_depart" name="ville_depart" required aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="ville_arrivee" class="form-label">Arrival</label>
                                <input type="text" class="form-control" id="ville_arrivee" name="ville_arrivee" required aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="heure_depart" class="form-label">Departure date</label>
                                <input type="time" class="form-control" id="heure_depart" name="heure_depart" required aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                            <label for="heure_depart" class="form-label">Train Name</label>
                            <select name="n_train" class="form-control" aria-label="Default select example">
                                <option  selected>Select Name of The Train</option>
                                <?php foreach($trains as $name_trains):?>
                                <option value="<?php echo $name_trains['id']; ?>"><?php echo $name_trains['nom']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" required aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="statut" class="form-label">Statut</label>
                                <input type="text" class="form-control" id="statut" name="statut" required aria-describedby="emailHelp">
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name='add' class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
              </div>
            </div>
            <!-- end of modal-->
            <?php if(empty($trips)):?>
                <h1 class="text-center">There is no Trips Yet</h1>
            <?php else:?>
            <a href="<?php url('home');?>" class="btn btn-sm btn-dark mb-2"><i class="fa-solid fa-house"></i></a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Departure</th>
                        <th scope="col" class="text-center">Arrival</th>
                        <th scope="col" class="text-center">Departure date</th>
                        <th scope="col" class="text-center">Train name</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Statut</th>
                        <th scope="col" colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($trips as $row):?>
                        <tr>
                            <td scope="col" class="text-center"><?php echo $row['ville_depart'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['ville_arrivee'];?></td>
                            <td scope="col" class="text-center"><?php echo date("H:i", strtotime($row['heure_depart']));?></td>
                            <td scope="col" class="text-center"><?php echo $row['nom'];?></td>
                            <td class="text-center"><?php echo $row['price'];?></td>
                            <td class="text-center">
                                    <?php if($row['statut']==1):?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else:?>
                                        <span class="badge badge-danger">Hors service</span>
                                    <?php endif;?>
                            </td>
                            <td scope="col" >
                                <a href="<?php url('trips/updateTrip/'.$row['id']); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            </td>
                            <td scope="col">
                                    <!-- Vertically centered modal -->
                                    <a href="<?php url('trips/deleteTrip/'.$row['id']); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <?php endif?>
        </div>
    </div>
</div>