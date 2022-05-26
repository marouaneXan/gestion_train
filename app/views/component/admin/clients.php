<h1 class="text-center p-3"><?php echo $title;?> </h1>
<div class="container">
<a href="<?php url('home');?>" class="btn btn-sm btn-dark mb-2"><i class="fa-solid fa-house"></i></a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">First name</th>
                        <th scope="col" class="text-center">Last name</th>
                        <th scope="col" class="text-center">Age</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clients as $row):?>
                        <tr>
                            <td scope="col" class="text-center"><?php echo $row['nom'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['prenom'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['date_naissance'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['email'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['password'];?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
</div>