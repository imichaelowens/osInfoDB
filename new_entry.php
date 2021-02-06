<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OSInfo - New Entry</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jumbotron.css">

</head>

<body class="bg-secondary text-light">
<div class="container">

    <div class="row">
      <div class="col-12">
      <div class="jumbotron">
        <h1 class="display-4">Tell us about you and your computer</h1>
        <p class="lead">Answer the questions in the form below and have your information be saved in the Database</p>
        <hr class="my-4">
        <a href="https://unsplash.com/photos/-Rc6usOigMk" class="text-light">Background Image from UnSplash</a></p>
        </div>
    </div>

    <div class="row mx-auto" id="osformdiv">
      <div class="col">
      <form id="osInputForm" class="border p-4 m-2" method="post" action="" autocomplete="off">

        <div class="form-group text-center">
          <!-- Job Occupation -->
          <label for="jobOccupation">Job Occupation</label>
          <input type="text" class="form-control-lg" name="jobOccupation" id="jobOccupation" maxlength="25" required>
          <!-- End Job Occupation -->
        </div>

        <div class="form-group text-center p-2">
          <!--Salary Selector-->
          <label for="salarySelector">Your Average Salary</label>
          <select name="salarySelector" id="salarySelector" class="form-control-lg" required>
            <option value="10000">$10,000 or less</option>
            <option value="15000">$15,000</option>
            <option value="20000">$20,000</option>
            <option value="25000">$25,000</option>
            <option value="30000">$30,000</option>
            <option value="35000">$35,000</option>
            <option value="40000">$40,000</option>
            <option value="45000">$45,000</option>
            <option value="50000">$50,000</option>
            <option value="55000">$55,000</option>
            <option value="60000">$60,000</option>
            <option value="65000">$65,000</option>
            <option value="70000">$70,000</option>
            <option value="75000">$75,000</option>
            <option value="80000">$80,000</option>
            <option value="85000">$85,000</option>
            <option value="90000">$90,000</option>
            <option value="95000">$95,000</option>
            <option value="100000">$100,000 or more</option>
          </select>
          <!--End Salary Selector -->
        </div>

        <div class="form-group text-center">
          <!-- Industry -->
          <label for="jobIndustry">Job Industry</label>
          <input type="jobIndustry" name="jobIndustry" id="jobIndustry" class="form-control-lg" maxlength="25" required>
          <!-- End Industry -->
        </div>

        <div class="form-group text-center">
          <!--OS Selector-->
          <label for="osSelector">Select Your Operating System</label>
          <select name="osSelector" id="osSelector" class="form-control-lg" required>
            <option value="Other">Other</option>
            <option value="Windows">Windows</option>
            <option value="Mac">Mac</option>
            <option value="Linux">Linux</option>
          </select>
          <!--End OS Selector -->
        </div>

        <div class="form-group text-center">
          <input type="submit" id="submit" value="Submit" class="btn btn-success btn-lg">
        </div>
      </form>
      
      <p>Done adding data? Click below to go back to the Database view.</p>
      <a class="btn btn-success btn-lg btn-block" href="view_database.php" role="button">View Database</a>
        
      </div>
    </div>

    <div id="response">

    </div>
  
</div>

</div>

<script src="js/newdata.js"></script>
</body>
</html>