<div class="container py-4 ms-4" id="posts-dashboard">
            <h2>rents Management</h2>
        
            <table class="table  table-striped">
                <thead>
                    <tr style="background-color: black;color:white;">
                        <th>id</th>
                        <th>car_id</th>
                        <th>customer_id</th>
                        <th style="width: 100px ;">created</th>
                        <th>started</th>
                        <th>ended</th>
                        <th>total</th>
                        <th style="width: 250px ;"></th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                    $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);

                    $rent = db_select($connection, 'rents');

                    foreach ($rent as $rents){?>
                    <tr>
                        <td><?php echo $rents['id']?></td>
                        <td><?php echo $rents['car_id']?></td>
                        <td><?php echo $rents['customer_id']?></td>
                        <td><?php echo $rents['created']?></td>
                        <td><?php echo $rents['started']?></td>
                        <td><?php echo $rents['ended']?></td>
                        <td><?php echo $rents['total']?></td>
                        <td>
                            <a href="<?php echo ROOT_PATH; ?>admin/viewrent?id=<?php echo $rents['id'] ?>" class="btn btn-sm btn-secondary btn-action"><button class="view">View</button></a>
                            <a href="<?php echo ROOT_PATH; ?>admin/editrent?id=<?php echo $rents['id'] ?>" class="btn btn-sm btn-primary btn-action"><button class="edit">Edit</button></a>
                            <a href="<?php echo ROOT_PATH; ?>admin/deleterent?id=<?php echo $rents['id'] ?>" class="btn btn-sm btn-danger btn-action"><button class="delete">Delete</button></a>
                        </td>
                    </tr>

                    <?php }
                    ?>

                </tbody>
            </table>


        </div>