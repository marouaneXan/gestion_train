<h1 class="text-center my-2 py-2"><?php echo $title;?></h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col" class="text-center">First name</th>
                    <th scope="col" class="text-center">Departure</th>
                    <th scope="col" class="text-center">Arrival</th>
                    <th scope="col" class="text-center">departure date</th>
                    <th scope="col" class="text-center">Train name</th>
                    <th scope="col" class="text-center">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($booking_clients as $row) :?>
                    <tr>
                        <td scope="col" class="text-center"><?php echo $row['nom'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['ville_depart'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['ville_arrivee'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['heure_depart'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['Nom_Train'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['price'];?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
            </div>
            </div>
    </div>
</div>
</div>