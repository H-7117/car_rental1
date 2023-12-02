<?php 
$carId = $_GET['id'];
        $checkCarId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $carId
        );
        $where = array();
$where[] = $checkCarId;
$car = db_select($connection, "cars", "*", $where);
?>
<div class="container viewc" id="posts-dashboard" style="  border: 2px solid black;
" >
            <h2>Cars View</h2>
            <div class="card p-2 my-3 post-view">
            <input type="hidden" name="car_id" value="<?php echo $carId; ?>">
                                <h3 style="background: gray; color:white"></h3>
                                <table>
                                    <tr>
                                        <td>id:  <?php echo $car[0]['id']; ?></td>
                                    </tr>   
                                    <tr>

                                        <td>name: <?php echo $car[0]['name']; ?></td>
                                    </tr>
                                    <tr>

                                        <td>category: <?php echo $car[0]['category']; ?></td>
                                    </tr>
                                    <tr>

                                        <td>description: <?php echo $car[0]['description']; ?></td>
                                    </tr>   
                                    <tr>

                                        <td>price:  <?php echo $car[0]['price']; ?></td>
                                    </tr>                                    
                                    <tr>
                                        <td style="text-align: center;"><img src="<?php echo ROOT_PATH ?>uploads/images/<?php echo $car[0]['image']; ?>"  height="30%" width="50%"  ></td>
                                    </tr>   
                                </table>
                             
                                <!-- Content to be displayed when the "View" button is clicked -->
                            </div>
</div>
