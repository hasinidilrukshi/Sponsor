<?php
include 'connect.php';?>

<!DOCTYPE html>
<html>
<head>
   <title>HarmonyHigh Music Awards</title>
   <link rel="stylesheet" href="choosePackage.css"> 
   <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
<section id="banner">
    <img src="img/logo.png" class="logo">
    <div class="banner-text">
        <h1>Sponsor Packages</h1>
    </div>
</section>

<div id="sideNav">
    <nav>
    <ul>
        <li><a href="home.html">HOME</a></li>
        <li><a href="winners.html">WINNERS</a></li>
        <li><a href="#">SINGERS</a></li>
        <li><a href="#">PRODUCERS</a></li>
        <li><a href="sponsor.html">SPONSERS</a></li>
        <li><a href="about.html">ABOUT</a></li>
    </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="img/menu.png" id="menu">
</div>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">"
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="choosePackage.php" class="text-light">Choose Package</a></button></div>
            <div class="container">
            <table class="table">
  <thead>
    <tr center>
      <th scope="col">Company Name</th>
      <th scope="col">Responsible person name</th>
      <th scope="col">Company position</th>
      <th scope="col">Contact number</th>
      <th scope="col">Package ID</th>
      <th scope="col">package Type</th>
      <th scope="col">package price</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from `sponsorpackages`";
    $result=sponsorpackages_query($con,$sql);
    if($result){
        while($row=sponsorpackages_fetch_assoc($result)){
           
            $companyname=$row['Company Name'];
            $Responsiblepersonname=$row['Responsible person name'];
            $companyposition=$row['Company position'];
            $contactnumber=$row['Contact number'];
            $PackageID=$row['Package ID'];
            $packagetype=$row['package Type'];
            $packageprice=$row['package price'];

           
           

            echo '<tr>
            <th scope="row">'.$companyname.'</th>
            <td>'.$Responsiblepersonname.'</td>
            <td>'.$companyposition.'</td>
            <td>'.$contactnumber.'</td>
            <td>'.$PackageID.'</td>
            <td>'.$packagetype.'</td>
            <td>'.$packageprice.'</td>

            <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$PackageID.'" class="text-light">Update</a><button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$packageID.'"class="text-light">Delete</a><button>
            </td>
          </tr>';

        }
    }

?>
        
</tbody>
  </table>


    </body>
</html>