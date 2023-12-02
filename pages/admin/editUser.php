<?php
$userid = $_GET['id']; 
$checkUserId = array(
    "column" => "id",
    "operator" => "=",
    "value" => $userid
);
$where = array();
$where[] = $checkUserId;
$users = db_select($connection, "users", "*", $where);
?>
<div class="container py-4 ms-4" id="posts-dashboard">
            <h2 style="margin-bottom: 40px;">Cars Management</h2>
<div class="accordion-content" id="post-content-0">
                <form id="create-form" class="card p-3" action="" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="form" value="user_edit">
                <input type="hidden" name="user_edit" value="<?php echo $userid; ?>">


                    <!-- <div class="mb-3">
                        <label for="postInputTitle" class="form-label">name</label>
                        <input type="text" class="form-control" id="postInputTitle"  name="name" value="<?php echo $users[0]['user_name']; ?>"
                            aria-describedby="emailHelp">
                        <div id="titleHelp" class="form-text">Write down the meaningful title.</div>
                    </div> -->

                    
                    <div class="text-field">
                <label for="email">name:
                    <input type="text" id="userName" name="name"  value="<?php echo $users[0]['user_name']; ?>" placeholder="Car Name"
                        required />
                
                </label>
            </div>


            <div class="text-field">
                <label for="email">password:
                    <input type="text" id="userName" name="password"  value="<?php echo $users[0]['user_password']; ?>" placeholder="Car Name"
                        required />
                
                </label>
            </div>

                    <!-- <div class="mb-3">
                        <label for="postInputTitle" class="form-label">password</label>
                        <input type="text" class="form-control" id="postInputTitle"  name="password" value="<?php echo $users[0]['user_password']; ?>"
                            aria-describedby="emailHelp">
                        <div id="titleHelp" class="form-text">Write down the meaningful title.</div>
                    </div> -->


                    <div class="text-field">
                    <label for="email">role:
                        <input type="text" id="userName" name="role"  value="<?php echo $users[0]['role']; ?>" placeholder="Car Name"
                            required />
                    
                    </label>
                </div>
                    
                    <!-- <div class="mb-3">
                        <label for="postInputContent" class="form-label">role</label>
                        <textarea rows="5" type="text" class="form-control" id="postInputContent" name="role" ><?php echo $users[0]['role']; ?></textarea>
                    </div> -->




                    <button id="createbtn" type="submit" class="d-flex">Create</button>
                </form>
                <div class="mb-5"></div>
            </div>
</div>