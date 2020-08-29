<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to the admin dashboard 
                            <small>Created by: Sam Tieman</small>
                        </h1>
                        <?php insert_categories(); ?>
                        <div class="col-xs-4">
                            <form  method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="cat_title" placeholder="title category">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit_create" value="Add category">
                                </div>
                            </form>
                            <?php update_categories(); ?>
                        </div>
                        <div class="col-xs-8">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category title</th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    read_categories();
                                    delete_categories();
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>
