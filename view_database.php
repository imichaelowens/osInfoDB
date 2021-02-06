<?php
	include 'database.php';
	$query = "SELECT * FROM tblinfo ORDER BY id";
	$osinfo = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OSInfo - View Database</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>OSInfo Database</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <p class="text-wrap">Do you want to contribute to this database? What kind of operating system do you use? Did you take a bite from Steve's Apple or "Start" with Bill's Windows? Or maybe you are a rebel and use Linux - we'd love to know!</p>
            <p><a href="new_entry.php">Click Here to Answer!</a></p>
            <p><a href="index.html">What is OSInfo?</a></p>
        </div>
        <div class="col">
            <!--Image from UnSplash: https://unsplash.com/photos/Bnl5yt3SNsM -->
            <img src="images/windows_picture.jfif" class="img-fluid" alt="Responsive image">
            <p><a href="https://unsplash.com/photos/Bnl5yt3SNsM">Image from UnSplash</a></p>
        </div>
    </div>
    <div class="row p-2" id="osinfodb">
        <table class="col-12 mx-auto table table-dark table-striped"><!-- Begin Table -->
            <tr>
                <th>Unique ID</th>
                <th>Occupation</th>
                <th>Industry</th>
                <th>OS Version</th>
                <th>Yearly Salary</th>
                <th>Date Added</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($osinfo)) :  ?>
                <tr>

                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['occupation']; ?></td>
                    <td><?php echo $row['industry']; ?></td>
                    <td><?php echo $row['osversion']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['dateAdded']; ?></td>
                </tr><!-- end of HTML table row -->
            <?php endwhile;  ?>
        </table>
    </div><!--End Database View-->
    <div class="row">
        <div class="col">
            <p class="text-center">Created by Michael Owens</p>
        </div>
    </div>

  </div><!-- End Container -->


</html>