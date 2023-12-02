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
<div class="container "  id="posts-dashboard">
            <h2 style="margin-bottom: 40px;" >Cars Edit</h2>
<div class="accordion-content" id="post-content-0">
                <form id="create-form" class="card p-3" action="" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="form" value="car_edit">
                <input type="hidden" name="car_id" value="<?php echo $carId; ?>">

                
                <div class="text-field">
                <label for="email">Car name:
                    <input type="text" id="userName" name="name"  value="<?php echo $car[0]['name']; ?>" placeholder="Car Name"
                        required />
                
                </label>
            </div>



            <div class="text-field">
                <label for="email">catagory:
                    <input type="text" id="userName" name="category" placeholder="Car Name" value="<?php echo $car[0]['category']; ?>"
                        required />
                
                </label>
            </div>


            <div class="text-field">
                <label for="email">catagory:
                    <input type="text" id="userName" name="description" placeholder="Car Name" value="<?php echo $car[0]['description']; ?>"
                        required />
                
                </label>
            </div>

            <div class="text-field">
                <label for="email">price:
                    <input type="text" id="userName" name="price" placeholder="Car Name" value="<?php echo $car[0]['price']; ?>"
                        required />
                
                </label>
            </div>

                    <!-- <div class="mb-3">
                        <label for="postInputTitle" class="form-label">Car name</label>
                        <input type="text" class="form-control" id="postInputTitle"  name="name"
                            aria-describedby="emailHelp">
                        <div id="titleHelp" class="form-text">Write down the meaningful title.</div>
                    </div> -->

                    <!-- <div class="mb-3">
                        <label for="postInputTitle" class="form-label">catagory</label>
                        <input type="text" class="form-control" id="postInputTitle"  name="category" value="<?php echo $car[0]['category']; ?>"
                            aria-describedby="emailHelp">
                        <div id="titleHelp" class="form-text">Write down the meaningful title.</div>
                    </div> -->

                    <!-- <div class="mb-3">
                        <label for="postInputContent" class="form-label">description</label>
                        <textarea rows="5" type="text" class="form-control" id="postInputContent" name="description" ><?php echo $car[0]['description']; ?></textarea>
                    </div> -->

                    <!-- <div class="mb-3">
                        <label for="postInputTitle" class="form-label">price</label>
                        <input type="text" class="form-control" name="price" id="postInputTitle"  value="<?php echo $car[0]['price']; ?>"
                            aria-describedby="emailHelp">
                        <div id="titleHelp" class="form-text">Write down the meaningful title.</div>
                    </div> -->

                    <div class="container p-3 mb-3" style="background-color: rgb(219, 222, 222);">
                    <img src="<?php echo ROOT_PATH ?>uploads/images/<?php echo $car[0]['image']; ?>">
                <div class="input-group rounded-2"> 
                    <input type="file" class="form-control"  name="image"> 
                    <label class="input-group-text text-bg-primary z-3"  
                           for="inputGroupFile02"> 
                        Upload file 
                    </label> 
                </div> 
              </div>

                    <button id="createbtn" type="submit" class="btn btn-primary">Create</button>
                </form>
                <div class="mb-5"></div>
            </div>
</div>