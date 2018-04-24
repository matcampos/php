<?php ob_start(); ?>
<?php  include 'includes/header.php';   
        include '../includes/db.php';?>
<div id="wrapper">

    <!-- Navigation -->
    <?php  include 'includes/navigation.php';
    
    
    $query = "SELECT * FROM categoria";
    $select_cat = mysqli_query($connection, $query); 

    if(isset($_POST['adicionar'])){
        if($_POST['cat_nome'] != ""){
        $nome = $_POST['cat_nome'];
        $query2 = "INSERT INTO categoria (cat_nome) VALUES('$nome')";
        $select_cat = mysqli_query($connection, $query2); 

        $query = "SELECT * FROM categoria";
        $select_cat = mysqli_query($connection, $query); 
        }else{
            echo "<h1 style='color:white;'>Insira um nome!</h1>";
        }

    }
            ?>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Bem vindo Matheus
                        <small> / Categorias</small> 
                    </h1>
                    <div class="col-sm-6">
                    <form action="categorias.php" method="post">
                        <div class="form-group">
                            <label for="cat_nome">
                                Adicionar categoria
                            </label>
                            <input type="text" class="form-control" name="cat_nome">
                        </div>

                        <div class="form-group">
                            <input type="submit" onclick="myFunction()" class="btn btn-primary" value="adicionar" name="adicionar">
                        </div>
                    </form>
                    <form action="categorias.php" method="post">
                        <div class="form-group">
                            <label for="cat_nome">
                                Editar categoria
                            </label>
                   

                    <?php 
                    if(isset($_GET['update'])){
                        $cat_id = $_GET['update'];
                            $query = "SELECT * FROM categoria WHERE cat_id = $cat_id";
                            $select_cat_id = mysqli_query($connection, $query); 
                            while($row = mysqli_fetch_assoc($select_cat_id)){
                                    $cat_id = $row['cat_id'];
                                    $cat_nome = $row['cat_nome'];
                            
                    ?>

                    <input value="<?php if(isset($cat_nome)){echo $cat_nome;}?>" type="text" class="form-control" name="cat_nome"/>
                    
                            <?php

                        }

                    }

                    ?>
                      </div>
                        <div class="form-group">
                            <input type="submit" onclick="myFunction()" class="btn btn-primary" value="Atualizar" name="update">
                        </div>
                      
                    </form>
                    </div>

                    <div class="col-sm-6">
                        <table class="table table-bordered">
                                <thead>
                                    <th>ID</th>
                                    <th>Nome da Categoria</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                        
                            <tbody>
                            <?php
                            
                         while($row = mysqli_fetch_assoc($select_cat)){
                                $cat_id = $row['cat_id'];
                                $cat_nome = $row['cat_nome'];
                                echo "<tr>";
                                echo "<td> $cat_id </td>";
                                echo "<td> $cat_nome </td>";
                                echo "<td> <a href='categorias.php?delete=$cat_id'>Apagar</a> </td>";
                                echo "<td> <a href='categorias.php?update=$cat_id'>Editar</a> </td>";
                         }
                 
                                ?>
                            </tbody>

                            <?php
                               if(isset($_GET['delete'])){
                                $id = $_GET['delete'];
                                $query3 = "DELETE FROM categoria WHERE cat_id = $id";
                                $delete_cat = mysqli_query($connection, $query3); 
                                header('location: categorias.php');
                                
                                }
                            ?>
                        </table>


                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </div>

    <!-- /#page-wrapper -->
    <?php  include 'includes/footer.php'?>
