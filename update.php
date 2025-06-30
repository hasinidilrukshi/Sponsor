<?php
include 'connect.php';

// Get the record to update
if (isset($_GET['updateid'])) {
    $packageID = $_GET['updateid'];
    $sql = "SELECT * FROM sponsor WHERE packageID='$packageID'";
    $result = mysqli_query($con, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $companyname = $row['companyName'];
        $responsiblepersonname = $row['responsiblepersonname'];
        $companyposition = $row['companyposition'];
        $contactnumber = $row['contactnumber'];
        $packagetype = $row['packageType'];
        $packageprice = $row['packageprice'];
    } else {
        die('Record not found.');
    }
} else {
    die('No record specified.');
}

// Update the record
if (isset($_POST['submit'])) {
    $companyname = $_POST['companyname'];
    $responsiblepersonname = $_POST['responsiblepersonname'];
    $companyposition = $_POST['companyposition'];
    $contactnumber = $_POST['contactnumber'];
    $packagetype = $_POST['packagetype'];
    $packageprice = $_POST['packageprice'];

    $sql = "UPDATE sponsor SET companyName='$companyname', responsiblepersonname='$responsiblepersonname', companyposition='$companyposition', contactnumber='$contactnumber', packageType='$packagetype', packageprice='$packageprice' WHERE packageID='$packageID'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Record updated successfully'); window.location.href = 'display.php';</script>";
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Update Sponsor Package</title>
   <link rel="stylesheet" href="choosePackage.css"> 
   <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
<section id="banner">
    <img src="img/logo.png" class="logo">
    <div class="banner-text">
        <h1>Update Sponsor Package</h1>
    </div>
</section>
<div class="container my-5"> 
<form method="post">
  <div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control" name="companyname" value="<?php echo htmlspecialchars($companyname); ?>" required>
  </div>
  <div class="form-group">
    <label>Responsible person name</label>
    <input type="text" class="form-control" name="responsiblepersonname" value="<?php echo htmlspecialchars($responsiblepersonname); ?>" required>
  </div>
  <div class="form-group">
    <label>Company position</label>
    <input type="text" class="form-control" name="companyposition" value="<?php echo htmlspecialchars($companyposition); ?>" required>
  </div>
  <div class="form-group">
    <label>Contact number</label>
    <input type="text" class="form-control" name="contactnumber" value="<?php echo htmlspecialchars($contactnumber); ?>" required>
  </div>
  <div class="form-group">
    <label>Package ID</label>
    <input type="text" class="form-control" value="<?php echo htmlspecialchars($packageID); ?>" disabled>
  </div>
  <div class="form-group">
    <label>Package Type</label>
    <input type="text" class="form-control" name="packagetype" value="<?php echo htmlspecialchars($packagetype); ?>" required>
  </div>
  <div class="form-group">
    <label>Package Price</label>
    <input type="text" class="form-control" name="packageprice" value="<?php echo htmlspecialchars($packageprice); ?>" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
</body>
</html> 