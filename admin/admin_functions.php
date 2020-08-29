<?php 

    function insert_categories(){
        global $connection;
        if(isset($_POST['submit_create'])){
            $cat_title = $_POST['cat_title'];

            if($cat_title == "" ||  empty($cat_title)) {
                
                echo "Error: This field should not be empty";
            } 
            else {
                $query_add_cat = "INSERT INTO categories(cat_title)";
                $query_add_cat .= "VALUES('$cat_title')";
                $result_add_cat = mysqli_query($connection, $query_add_cat);

                if(!$result_add_cat) {
                    die('QUERY FAILED'. mysqli_error($connection));
                }
            }
        }
    }

    function update_categories(){
        global $connection;
        if(isset($_GET['edit'])){
            ?>
                <form  method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="new_cat_title" placeholder="Update category title">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit_update" value="Update category">
                </div>
            </form>
            <?php
                }
                if(isset($_POST['submit_update'])){
                    $the_cat_id = $_GET['edit'];
                    $new_cat_title = $_POST['new_cat_title'];
                    $update_cat_query = "UPDATE categories SET "; 
                    $update_cat_query .= "cat_title = '$new_cat_title' ";
                    $update_cat_query .= "WHERE cat_id = $the_cat_id ";
                    $result_update_cat = mysqli_query($connection, $update_cat_query);

                    if(!$result_update_cat){
                        die('Query Failed ' . mysqli_error($connection));
                    }

                    header("Location: admin_categories.php");
                
                }

            
    }

    function read_categories(){
        global $connection;
        $query = "SELECT * FROM categories";
        $result_cat = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($result_cat)){
            echo "<tr><td>".$row['cat_id']."</td>";
            echo "<td>".$row['cat_title']."</td>";
            echo "<td><a href='admin_categories.php?edit={$row['cat_id']}'><i class='fas fa-edit'></i></a>";
            echo "<td><a href='admin_categories.php?delete={$row['cat_id']}'><i class='fas fa-times'></i></a></tr>";
        }

    }

    function delete_categories(){
        global $connection;
        if(isset($_GET['delete'])){
            $the_cat_id = $_GET['delete'];
            $query_delete_cat = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
            $result_delete_cat = mysqli_query($connection, $query_delete_cat);
            //This will redirect to admin_categories.php (refresh page)
            header("Location: admin_categories.php");
        }
    }

    ?>