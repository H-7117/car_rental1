<div class="container " id="posts-dashboard">
            <h2 style="margin-bottom: 30px;">Users Management</h2>
         
            
            <table class="table  table-striped">
                <thead>
                    <tr style="background-color: black;color:white;">
                        <th>Id</th>
                        <th>user name</th>
                        <th>password</th>
                        <th>role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                     $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);

                     $users = db_select($connection, 'users');
 
                     foreach ($users as $user){?>
                    <tr>
                        <td><?php echo $user['Id']?></td>
                        <td><?php echo $user['user_name']?></td>
                        <td><?php echo $user['user_password']?></td>
                        <td><?php echo $user['role']?></td>
                        <td>
                            <div class="btn-container">
                        <a href="<?php echo ROOT_PATH; ?>admin/viewuser?id=<?php echo $user['Id'] ?>" class="btn-secondary "><button class="view">View</button></a>
                            <a href="<?php echo ROOT_PATH; ?>admin/editUser?id=<?php echo $user['Id'] ?>" class="btn btn-sm btn-primary btn-action"><button class="edit">Edit</button></a>
                            <a href="<?php echo ROOT_PATH; ?>admin/deleteuser?id=<?php echo $user['Id'] ?>" class="btn btn-sm btn-danger btn-action"><button class="delete">Delete</button> </a>
                        </td>
                        </div>
                    </tr>
                    
                    <?php
                     }
                    ?>
                    <!-- Add more rows for your posts -->
                </tbody>
            </table>


        </div>