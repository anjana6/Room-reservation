

<!Doctype html>
<html>
<head>
    <title>Dressmore Login system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <link rel="stylesheet" href="style.css">


		


	
</head>
<body id="main" background = " photo\Background\1.png";>
    
        <section id="form">
            <div class="container">
                    <div class="card p-4 bg-dark text-white">
                        <div class="card-head">
                            <h1>Room</h1>
                        </div>
                        <div class="card-body">
                            <form action="index.php" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label >Room Number</label>
                                        <input type="text" class="form-control" name="r_number"  placeholder="Room Number" require>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label > Number Of Maxpeople</label>
                                        <input type="text" class="form-control" name="r_number"  placeholder="Room Number" require>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label > Number Of Maxpeople</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="room[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">NON AC</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Room Charge</label>
                                        <input type="text" class="form-control" name="c_id"  placeholder="Customer ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Bill No</label>
                                        <input type="text" class="form-control" name="c_id"  placeholder="Customer ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label > Paymeny Method</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="payment[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">Cach</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="payment[]"type="checkbox" >
                                            <label class="form-check-label" for="gridCheck">Card</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                            <input type="submit" value="Submit" name="submit" class="btn btn-outline-danger ">
                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                        <a href="view.php" class="btn btn-danger mt-2">view</a>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
</body>
</html>

<?php
$con = mysqli_connect("localhost","root","","hotel");

if(isset($_POST['submit'])){
    $FName = $_REQUEST['f_name'];
    $LName = $_REQUEST['l_name'];
    $CId = $_REQUEST['c_id'];
    $CNo = $_REQUEST['c_no'];
    $Address = $_REQUEST['address'];
	// $room = $_REQUEST['room'];
	// $b = implode(",",$room);
	// $Message = $_REQUEST['message'];
	
	$Customer_details = "INSERT INTO  customer(F_name,L_name,Customer_ID,Contact_no,Address) VALUES('$FName','$LName','$CId','$CNo','$Address')";
	mysqli_query($con,$Customer_details);
	// header("location:home.php");
}


?>
