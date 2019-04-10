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
                                <h4 class="title">Farmer</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                    <div class="col-md-3">
                                    <div class="form-group">
                                                <label>ID</label>
                                                <input type="text" name="id" class="form-control"  value="<?php echo $id;?>">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>name</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>item</label>
                                                <input type="text" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>price</label>
                                                <input type="text" class="form-control"  >
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-info btn-fill pull-right" value="Insert"> 
                                        </div>
                                    
                                
                                    
                                        
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
<?php include ('footer.php')?>      