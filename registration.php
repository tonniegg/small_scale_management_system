<?php include('navbar.php')?>
<?php include('sidebar.php')?>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add new farmer</h4>
                            </div>
                            <div class="content">
                                <form name="update-form" action="" method="POST" >
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>id</label>
                                                <input type="text" name="id" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>name</label>
                                                <input type="text" name="name" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>item</label>
                                                <input type="text" name="item" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>price</label>
                                                <input type="text" name="prices" class="form-control"  >
                                            </div>
                                        </div>
                                    </div>

                                    
                                    

                                    <input type="submit"  name="submit" class="btn btn-info btn-fill pull-right" value="update profile">
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                       
                    </div>

                </div>
            </div>
        </div>

        <?php
                if(isset($_POST['submit'])){
                    $conn=mysqli_connect("localhost","root","","ssms") or die(mysqli_error($conn));
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $item=$_POST['item'];
                    $price=$_POST['price'];
                    
                    echo $id;
                    echo $name;
                    echo $item;
                    echo $price;
                    

                    $insert=mysqli_query($conn,"INSERT INTO farmers(id,name,item,price)
                    VALUES('".$id."','".$name."','".$item."','".$price."')")
                    or die(mysqli_error($conn));
                    if ($insert){
                        ?>
                        <script>
                            window.alert('success');
                            window.location.href='table_data.php';
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                             window.alert('fail');
                            window.location.href='registration.php';
                        </script>
                        <?php

                    }
                
                }

            ?>
                <?php include('footer.php')?>