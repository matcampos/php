<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->
    <?php include "includes/navigation.php"; ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            <h1 class="page-header">
                               FIAP - 2018
                </h1>
                <?php
                    /*Query para retornar posts */
                    $query = "SELECT * FROM posts";
                    $select_posts = mysqli_query($connection, $query); 
                            
                while($row = mysqli_fetch_assoc($select_posts)){
                        // $cat_nome = $row['post_author'];
                    
                    $post_data = date('d-m-Y',strtotime($row['post_data']));
                ?>

             
                <!-- First Blog Post -->
                <h2> <?php echo $row['post_nome']; ?></h2>
                <p class="lead">
                    by <a href="index.php">  <?php echo $row['post_autor'];?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo  $post_data; ?></p>
                <hr>
                <img class="img-responsive" src="<?php echo $row['post_imagem']; ?>" alt="">
                <hr>
                <p><?php echo $row['post_conteudo']; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                   <?php
                   }  
                   ?> 

            </div>

            <!-- Blog Sidebar Widgets Column -->
                <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->      
        <?php include "includes/footer.php"; ?>    