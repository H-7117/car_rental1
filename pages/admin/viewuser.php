<?php 
$userId = $_GET['id'];
        $checkCarId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $userId
        );
        $where = array();
$where[] = $checkCarId;
$users = db_select($connection, "users", "*", $where);
?>
<div class="container py-4 ms-4" id="posts-dashboard" style="  border: 2px solid black;"> 
            <h2>Posts Management</h2>
            <div class="card p-2 my-3 post-view">
            <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                                <table>
                                <tr>
                                        <td>Id:  <?php echo $users[0]['Id']; ?></td>
                                    </tr> 

                                    <tr>
                                        <td>user_name:  <?php echo $users[0]['user_name']; ?></td>
                                    </tr> 
                                    
                                    <tr>
                                        <td>user_password:  <?php echo $users[0]['user_password']; ?></td>
                                    </tr> 
                                    
                                    <tr>
                                        <td>role:  <?php echo $users[0]['role']; ?></td>
                                    </tr> 
                                    
                                    <h3></h3>
                                    <h3></h3>
                                    <h3></h3>
                                    <h3></h3>

                                </table>

                            </div>
</div>