<div class="container" id="posts-dashboard">
            <h2>Cars Management</h2>
            <div class="d-flex">
                <a href="<?php echo ROOT_PATH; ?>admin/addcar" class="btn text-white btn-action" >Create</a>
            </div>
            
            <table class="table  table-striped">
                <thead>
                    <tr style="background-color: black;color:white;">
                        <th>Id</th>
                        <th>car name</th>
                        <th>catagory</th>
                        <th >description</th>
                        <th>price</th>
                        <th style="width: 250px ;"></th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                    $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);

                    $car = db_select($connection, 'cars');

                    foreach ($car as $cars){?>
                    <tr>
                        <td><?php echo $cars['id']?></td>
                        <td><?php echo $cars['name']?></td>
                        <td style="width: 50px ;"><?php echo $cars['category']?></td>
                        <td><?php echo $cars['description']?></td>
                        <td><?php echo $cars['price']?></td>
                        <td>
                            <a href="<?php echo ROOT_PATH; ?>admin/viewcar?id=<?php echo $cars['id'] ?>" class="btn btn-sm btn-secondary btn-action"><button class="view">View</button></a>
                            <a href="<?php echo ROOT_PATH; ?>admin/editcar?id=<?php echo $cars['id'] ?>" class="btn btn-sm btn-primary btn-action"><button class="edit">Edit</button></a>
                            <a href="<?php echo ROOT_PATH; ?>admin/deletecar?id=<?php echo $cars['id'] ?>" class="btn btn-sm btn-danger btn-action"><button class="delete">Delete</button></a>
                        </td>
                    </tr>

                    <?php }
                    ?>

                </tbody>
            </table>


        </div>