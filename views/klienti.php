<?php
 $klientiSql = "SELECT * FROM klienti";
 $klientiResults = $conn->query($klientiSql);
 $klienti = mysqli_fetch_array($klientiResults);
?>

<div class="content row">
    <!-- ------------ -->
    <!-- News Edit Info -->
    <!-- ------------ -->
    <div class="row">
        <div class="col-md-8 mb-3">
            <input class="form-control" id="filterInput" type="text" placeholder="Search..">
        </div>
    </div>
   
    <div class="row">
        <div class="col-md-8">
            <form method="post" name="klienti-form">
                <div class="card row bg-secondary-subtle">
                    <h5 class="card-header bg-secondary">Klienti</h5>

                        <!-- selector -->

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Vārds</th>
                            <th scope="col">Uzvārds</th>
                            <th scope="col">E-pasts</th>
                            <th scope="col">Numurs</th>
                            <th scope="col">Nodrabošanās</th>
                            <th scope="col">Izsūtīta Reklāma</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="filter">
                            
                            <?php
                                foreach ($klientiResults as $klients){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $klients['client_id']; ?></th>
                                <td><?php echo $klients['firstName']; ?></td>
                                <td><?php echo $klients['lastName']; ?></td>
                                <td><?php echo $klients['email']; ?></td>
                                <td><?php echo $klients['phone']; ?></td>
                                <td><?php echo $klients['occupation']; ?></td>
                                <td><?php echo $klients['lastSentAdDate']; ?></td>
                                <td><a class="btn btn-success" href="?klienti_form&client_id=<?php echo $klients['client_id'];?>" role="button"><i class="fa-solid fa-pencil"></i></a></td>
                                <td><a href="?klienti&deleteID=<?php echo $klients['client_id'];?>" onClick="return confirm('Are you sure you want to delete this?');" class="btn btn-danger" role="button" ><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                            <?php
                                }?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div> 
    <div class="row">
        <a class="btn btn-secondary" style="width:100px" href="?klienti_form" role="button">Add New</a>
    </div>
</div>