
<h1 class="text-center p-3"><?php echo $title;?> </h1>
<div class="container" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
    <form action="<?php echo url('trips/edit/'.$row['id']); ?>" method="POST" class="border shadow p-4 mt-4 rounded" style="border: 1px solid red;width:50%;">
        <div class="mb-3">
            <label for="ville_depart" class="form-label">Departure</label>
            <input type="text" value="<?php echo $row['ville_depart']; ?>" class="form-control" id="ville_depart" name="ville_depart" required aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="ville_arrivee" class="form-label">Arrival</label>
            <input type="text" value="<?php echo $row['ville_arrivee']; ?>" class="form-control" id="ville_arrivee" name="ville_arrivee" required aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="heure_depart" class="form-label">Departure date</label>
            <input type="time" value="<?php echo $row['heure_depart']; ?>" class="form-control" id="heure_depart" name="heure_depart" required aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="heure_depart" class="form-label">Train Name</label>
        <select name="n_train" class="form-control" aria-label="Default select example">
            <option disabled>Select Name of The Train</option>
            <?php foreach($train as $name_trains):?>
            <option value="<?php echo $name_trains['id'];?>"><?php echo $name_trains['nom']; ?></option>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" value="<?php echo $row['price']; ?>" id="price" name="price" required aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="statut" class="form-label">Statut</label>
            <input type="text" value="<?php echo $row['statut']; ?>" class="form-control" id="statut" name="statut" required aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
                    