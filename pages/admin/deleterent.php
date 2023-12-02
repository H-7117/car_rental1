<?php
$rentId = $_GET['id'];

?>
<div class="container py-4 ms-4" id="posts-dashboard">
            <h2>Delete Car</h2>

<div class="card p-2 my-3 post-delete">
                                <form class="" action="" method="post">
                                    <input type="hidden" name="form" value="car_delete">
                                    <div class="mb-3">
                                        <label for="postInputContent" class="form-label">Are you soure you want to
                                            delete this.</label>
                                    </div>
                                        <input type="hidden" name="car_id" value="<?php echo  $carId; ?>" >
                                        <button type="submit" class="delete" name="deleteCar" style="margin-top: 20px;">Delete</button>
                                    
                                </form>
                            </div>
</div>