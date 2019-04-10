<?php include ('navbar.php')?>
<?php include ('sidebar.php')?>
<?php
$conn=mysqli_connect("localhost","root","","ssms")or die(mysqli_error($conn));
$id=$_GET['id'];
$select_query=mysqli_query($conn,"select * from farmers where id=$id")or die(mysqli_error($conn));
foreach ($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $item=$record['item'];
    $price=$record['price'];

}

?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Farmer Profile</h4>
                            </div>
                            <div class="content">
                                <form name="UPDATE FORM" action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>name</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>item</label>
                                                <input type="text" name="item" class="form-control"  value="<?php echo $item;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>price</label>
                                                <input type="text" name="price" class="form-control" value="<?php echo $price;?>">
                                            </div>
                                        </div>
                                    </div>

                                   
                                        
                                                                       
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $item=$_POST['item'];
                $price=$_POST['price'];
                
                $update_query=mysqli_query($conn,"update  set name='$name',item='$item',price='$price',age='$age',class='$class' where id='$id'")or die(mysqli_error($conn));
                if($update_query){
                    ?>
                     <script>
                            window.alert('success');
                            window.location.href='table_data.php';
                     </script>
                    <?php
                    //echo "<script>window.alert('Update Success')</script>";
                    
                    //header("refresh:0;url=table_data.php");
                }else{
                    echo"<script>window.alert('failed)</script>";
                    header("refresh:0;url=table_data.php");
                }

            }

        ?>
<?php include ('footer.php')?>      