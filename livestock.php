
<?php include ('navbar.php')?>
<?php include ('sidebar.php')?>
<?php include ('footer.php')?>
<?php
//include('process_login.php');
$conn=mysqli_connect("localhost","root","","ssms")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select * from livestock")or die(mysqli_error($conn));
?>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">farmers</h4>
                                <p class="category">Farmers input</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>id</th>
                                    	<th>name</th>
                                    	<th>item</th>
                                        <th>price</th>
										
                                    </thead>
                                    <tbody>
									<?php foreach($db_records as $record){?>
										<tr>
											<td><?php echo $record['id'];?></td>
											<td><?php echo $record['name'];?></td>
                                            <td><?php echo $record['item'];?></td>
                                            <td><?php echo $record['price'];?></td>
											
											<td>
											<a href="insert_farmer.php?id=<?php echo $record['id'];?>"class="btn btn-primary">insert</a>
											<a href="view_farmer.php?id=<?php echo $record['id'];?>"class="btn btn-info">view</a>
											<a href="delete_farmer.php?id=<?php echo $record['id'];?>"class="btn btn-danger">delete</a>
											</td>
									    </tr>  
									<?php }?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

