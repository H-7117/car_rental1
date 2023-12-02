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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>

<div class="container " id="posts-dashboard">
        
            <div class="post-view">
            <table>
                                <tr>
                                        <td>Id:  <?php echo $car[0]['id']; ?></td>
                                    </tr> 

                                    <tr>
                                        <td>category  <?php echo $car[0]['category']; ?></td>
                                    </tr> 
                                    
                                    <tr>
                                        <td>description:  <h3><?php echo $car[0]['description']; ?></h3></td>
                                    </tr> 
                                    
                                    <tr>
                                        <td>price:  <h3><?php echo $car[0]['price']; ?></h3></td>
                                    </tr> 
                                    <tr>
                                        <td style="text-align: center;"><img src="<?php echo ROOT_PATH ?>uploads/images/<?php echo $car[0]['image']; ?>"></td>
                                    </tr> 
                                    <h3></h3>
                                    <h3></h3>
                                    <h3></h3>
                                    <h3></h3>

                                </table>
            <input type="hidden" name="car_id" value="<?php echo $carId; ?>">
                                
                            </div>
</div>



<div class="container px-5 ms-5" id="posts-dashboard">
            <h2>set date</h2>
<div class="accordion-content" id="post-content-0">
                <form id="create-form" class="card p-3" action="" method="post" >
                
                <input type="hidden" name="form" value="rent_create">
                <input type="hidden" name="car_id" value="<?php echo $carId; ?>">

                <div class="mb-3">
                   From: <input type="text" id="datepickerstarted" class="form-control" name="started" placeholder="Select Date">
                    <script>
                        flatpickr("#datepickerstarted", {
                            dateFormat: "Y-m-d H:i",
                            enableTime: true,
                        });
                    </script>
                </div>
                <div class="mb-3">
                    To:
                    <input type="text" id="datepickerended" class="form-control" name="ended" placeholder="Select Date">
                    <script>
                        flatpickr("#datepickerended", {
                            dateFormat: "Y-m-d H:i",
                            enableTime: true,
                        });
                    </script>
                </div>


             

                    <button id="createbtn" type="submit" class="btn " style="background-color: #010204; color:white;">Rent</button>
                </form>
                <div class="mb-5"></div>
            </div>
</div>