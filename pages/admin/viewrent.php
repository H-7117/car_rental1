<?php 
$rentId = $_GET['id'];
        $checkRentId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $rentId
        );
        $where = array();
$where[] = $checkRentId;
$rent = db_select($connection, "rents", "*", $where);
?>
<div class="container viewc" id="posts-dashboard" style="  border: 2px solid black;
" >
            <h2>Cars View</h2>
            <div class="card p-2 my-3 post-view">
            <input type="hidden" name="car_id" value="<?php echo $carId; ?>">
                                <h3 style="background: gray; color:white"></h3>
                                <table>
                                    <tr>
                                        <td>id:  <?php echo $rent[0]['id']; ?></td>
                                    </tr>   
                                    <tr>

                                        <td>car_id: <?php echo $rent[0]['car_id']; ?></td>
                                    </tr>
                                    <tr>

                                        <td>customer_id: <?php echo $rent[0]['customer_id']; ?></td>
                                    </tr>
                                    <tr>

                                        <td>created: <?php echo $rent[0]['created']; ?></td>
                                    </tr>   
                                    <tr>

                                        <td>started:  <?php echo $rent[0]['started']; ?></td>
                                    </tr>                                    
                                       
                                    <tr>

                                        <td>ended:  <?php echo $rent[0]['ended']; ?></td>
                                    </tr>

                                    <tr>

                                        <td>total:  <?php echo $rent[0]['total']; ?></td>
                                    </tr>
                                </table>
                             
                                <!-- Content to be displayed when the "View" button is clicked -->
                            </div>
</div>
