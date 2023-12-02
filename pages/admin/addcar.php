<?php
// 
    // if($_SERVER['REQUEST_METHOD'] === "POST"){
    //     // print_r($_POST);
    //     $connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);
    //     // $image = $_FILES['image']['name'];
    //     // $imagePath = 'uploads/images/' .$image;
    //     // move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);
    //     // $data = array(
    //     //     "name" => $_POST['name'],
    //     //     "category" => $_POST['category'],
    //     //     "description" => $_POST['description'],
    //     //     "price" => $_POST['price'],
    //     //     'image' => $image
    //     // );
    //     // $car = db_insert($connection, "cars", $data);
    //     // print_r($car);
    // }
?>
<div class="container py-4 ms-4" id="posts-dashboard">
            <h2>Cars Management</h2>
<div class="accordion-content" id="post-content-0">
                <form id="create-form" class="card p-3" action="" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="form" value="car_create">


                    <!-- <div class="mb-3">
                        <label for="postInputTitle" class="form-label">Car name</label>
                        <input type="text" class="form-control" id="postInputTitle"  name="name"
                            aria-describedby="emailHelp">
                        <div id="titleHelp" class="form-text">Write down the meaningful title.</div>
                    </div> -->

                    <div class="text-field">
                <label for="email">Car name:
                    <input type="text" id="userName" name="name"  placeholder="Car Name"
                        required />
                
                </label>
            </div>

                    

                    <div class="text-field">
                    <label for="email">category:
                    <input type="text" id="userName" name="category"  placeholder="category"
                        required />
                
                </label>
            </div>


                 

                    <div class="text-field">
                    <label for="email">description:
                    <input type="text" id="userName" name="description"  placeholder="description"
                        required />
                
                </label>
                </div>

                   

                <div class="text-field">
                    <label for="email">price:
                    <input type="text" id="userName" name="price"  placeholder="price"
                        required />
                
                </label>
                </div>

                    <div class="container p-3 mb-3" style="background-color: rgb(219, 222, 222);">
                <div class="input-group rounded-2"> 
                    <input type="file" class="form-control"  name="image"> 
                    <label class="input-group-text text-bg-primary z-3"  
                           for="inputGroupFile02"> 
                        Upload file 
                    </label> 
                </div> 
              </div>

                    <button id="createbtn" type="submit" class="d-flex">Create</button>
                </form>
                <div class="mb-5"></div>
            </div>
</div>