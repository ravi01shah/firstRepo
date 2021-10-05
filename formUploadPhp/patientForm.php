<?php
 require("test.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

  <title>Patient Form</title>
  <style>
    .sidenav {
      height: 100%;
      width: 160px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidenav a {
      text-align: left;
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }
    #page1{
      display: block;
    }
    #page2{
      display: none;
    }
    #finalPage{
      display: none;
    }
    #profilePic{
      float: right;
      margin-top: 40px;
      margin-right: 70px;
      display: block;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px; margin-left: 150px">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="download.png" alt="" width="30" height="24" />
        </a>
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" target="_blank" href="https://www.google.com/maps/">Near
                by</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Links</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">History</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#">About Us</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
  </header>

  <main style="margin-left: 150px">
    <div class="sidenav">
      <a href="#">Register</a>
      <a href="#">Reports</a>
      <a href="#">Nursing</a>
      <a href="#">COVID-19</a>
      <a href="#">Vaccines</a>
      <a href="#">Portal</a>
      <a href="#">Contact</a>
      <a href="#">About</a>
    </div>
    <form action="result.php" method="POST"  style="margin-left: 20px; margin-right: 25px" enctype="multipart/form-data" onsubmit= "<?php validate(); ?>" >
      
    <div id="page1">
        <div class="div class=" jumbotron style="margin-left: 30px;">
          <h1 class="display-4">General Patient Form</h1>
          <hr class="my-2" />
        </div>
        <div class="form-group" style="z-index: 2;  border-radius: 10px; float:right; height : 150px; width: 150px;">
          <img src="default_profile.png" alt="profilePic" width="150px" id="profilePic" onclick="triggerClick()">
          <span style="margin-left:-43px;"  > Patient Image  </span>
          <input type="file"  required name="profilePicU" id="profilePicU" style="display: none; " onchange="displayImage(this)">
        </div>
        <div class="col-sm-3 my-3 mx-5">
          <label for="gender" class="mb-2">Patient Gender <sup style="color: red">*</sup></label>
          <select class="form-select" name="gender" aria-label="Default select example" id="gender">
            <option value="">Please select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="others">others</option>
          </select>
          <small style="color: red;" id="ErrGender"></small>

        </div>
        
        <div class="row" style="margin-left: 38px; margin-bottom: 15px">
          <label for="name" class="mb-2">Patient Name <sup style="color: red">*</sup></label>
          <div class="col-sm-4">
            <input type="text" name="fname" class="form-control" aria-label="First name"
               id="fname" value="<?php echo $fname; ?>"  required />
               <small class="form-text text-muted">First Name</small><br>
               <small style="color: red;" ><?php echo $msgerrName;?></small><br>
               <small style="color: red;" id="ErrfName"></small>

            </div>
          <div class="col-sm-4">
            <input type="text" name="lname" class="form-control" aria-label="Last name" 
              id="lname" value="<?php echo $lname; ?>"  required/>
              <small class="form-text text-muted">Last Name</small><br>
              <small style="color: red;" ><?php echo $msgerrLastName; ?></small><br>
              <small style="color: red;" id="ErrlName"></small>


          </div>
        </div>

        <div class="row col-sm-8" style="margin-left: 38px">
          <label for="DOB" class="mb-2">Patient Birth Date <sup style="color: red">*</sup></label>
          <div class="col-sm-4">
            <select class="form-select" name = "month" aria-label="Default select example" id="month">
              <option value=""></option>
              <option value="January">January</option>
              <option value="Fabruary">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>
            <small class="form-text text-muted">Month</small><br>
          <small style="color: red;" id="ErrMonth"></small>

          </div>
          <div class="col-sm-4" style="margin-bottom: 15px">
            <select class="form-select" name = "day" aria-label="Default select example" id="day">
              <option value=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
            </select>
            <small class="form-text text-muted">Day</small><br>
          <small style="color: red;" id="ErrDay"></small>

          </div>
          <div class="col-sm-4">
            <select class="form-select" name= "year" aria-label="Default select example" id="year">
              <option value=""></option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2002">2001</option>
              <option value="2003">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
            </select>
            <small class="form-text text-muted">Year</small><br>
          <small style="color: red;" id="ErrYear"></small>

          </div>
        </div>

        <div class="row" style="margin-left: 38px; margin-bottom: 15px">
          <label for="height" class="mb-2">Patient Height (cm's) <sup style="color: red">*</sup></label>
          <div class="col-sm-4">
            <input type="text" name = "height" class="form-control" placeholder="ex : 176"  id="height" value = "<?php echo $height; ?>" required/>
          </div><br>
          <small style="color: red;" ><?php echo $msgerrHeight; ?></small><br>
          <small style="color: red;" id="ErrHeight"></small>


        </div>
        <div class="row" style="margin-left: 38px; margin-bottom: 15px">
          <label for="weight" class="mb-2">Patient Weight (kg's) <sup style="color: red">*</sup></label>
          <div class="col-sm-4">
            <input type="text" name = "weight" class="form-control" placeholder="ex : 70"  id="weight" value = "<?php echo $height; ?>" required/>
          </div>
          <small style="color: red;" ><?php echo $msgerrWeight; ?></small><br>
          <small style="color: red;" id="ErrWeight"></small>
          <br>
        </div>
        <div class="row" style="margin-left: 38px; margin-bottom: 15px">
          <label for="mail" class="mb-2">Patient E-mail <sup style="color: red">*</sup></label>
          <div class="col-sm-4">
            <input type="email" name= "mail" class="form-control" placeholder="ex : example@gmail.com"  id="email" value = "<?php echo $mail; ?>" required/>
            <small class="form-text text-muted">example@example.com</small>
          </div><br>
          <small style="color: red;" ><?php echo $msgerrMail; ?></small><br>
          <small style="color: red;" id="ErrMail"></small>

        </div>
        <div class="row" style="margin-left: 38px; margin-bottom: 15px; margin-top: 50px">
          <label for="reason" class="mb-2">Reason for seeing the doctor<sup style="color: red">*</sup></label>
          <div class="col-sm-4">
            <input type="text" name = "reason" class="form-control"  id="reason" value = "<?php echo $reason; ?>" required/>
          </div>
          <br>
          <small style="color: red;" ><?php echo $msgerrReason; ?></small><br>
          <small style="color: red;" id="ErrReason"></small>

        </div>
        <br /><br />

        <hr />
        <div class="col-1 mx-auto">
          <button type="button" class="btn btn-success btn-lg" onclick="validate()">
            Next
          </button>
        </div>
      </div>


      <div id="page2">

           
        <div class="div class="jumbotron style="margin-left: 30px;">
          <h1 class="display-5">Patient Medical History</h1>
          <hr class="my-2">
      </div>
      
      <div class="row" style="margin-left: 38px; margin-bottom: 15px; margin-top: 50px;">
          <label for="allergies">please list any drug allergies</label>
          <div class="col-8"><br>
              <textarea name="allergies" id="allergies" cols="30" rows="10" class="form-control" value = "<?php echo $allergies; ?>" required></textarea>
          </div>
          <small style="color: red;" id="ErrDrug"></small>

      </div>
      <div class="row" id="check" style="margin-left: 38px; margin-bottom: 15px; margin-top: 60px;">
          <label for="checkbox">Have you ever had (Please check all that apply)</label>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Anemia" id="Anemia">
              <label class="form-check-label" for="Anemia">
                  Anemia
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Asthma" id="Asthma">
              <label class="form-check-label" for="Asthma">
                  Asthma
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Arthritis" id="Arthritis">
              <label class="form-check-label" for="Arthritis">
                  Arthritis
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Cancer" id="Cancer">
              <label class="form-check-label" for="Cancer">
                  Cancer
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Gout" id="Gout">
              <label class="form-check-label" for="Gout">
                  Gout
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Diabetes" id="Diabetes">
              <label class="form-check-label" for="Diabetes">
                  Diabetes
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Emotional Disorder" id="Emotional">
              <label class="form-check-label" for="Emotional">
                  Emotional Disorder
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Epilepsy Seizures" id="Epilepsy">
              <label class="form-check-label" for="Epilepsy">
                  Epilepsy Seizures
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Fainting Spell" id="Fainting">
              <label class="form-check-label" for="Fainting">
                  Fainting Spell
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Gallstones" id="Gallstones">
              <label class="form-check-label" for="Gallstones">
                  Gallstones
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Heart Disease" id="HeartA">
              <label class="form-check-label" for="HeartA">
                  Heart Disease
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Heart Attack" id="Heart">
              <label class="form-check-label" for="Heart">
                  Heart Attack
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Rheumatic Fever" id="Rheumatic">
              <label class="form-check-label" for="Rheumatic">
                  Rheumatic Fever
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="High Blood Pressure" id="High">
              <label class="form-check-label" for="High">
                  High Blood Pressure
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Digestive Problem" id="Digestive">
              <label class="form-check-label" for="Digestive">
                  Digestive Problem
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Ulcerative Colitis" id="Ulcerative">
              <label class="form-check-label" for="Ulcerative">
                  Ulcerative Colitis
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Ulcer Disease" id="Ulcer">
              <label class="form-check-label" for="Ulcer">
                  Ulcer Disease
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Hepatitis" id="Hepatitis">
              <label class="form-check-label" for="Hepatitis">
                  Hepatitis
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Kidney Disease" id="Kidney">
              <label class="form-check-label" for="Kidney">
                  Kidney Disease
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Liver Disease" id="Liver">
              <label class="form-check-label" for="Liver">
                  Liver Disease
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Sleep Apnea" id="Sleep">
              <label class="form-check-label" for="Sleep">
                  Sleep Apnea
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Use a C-PAP machine" id="C-PAP">
              <label class="form-check-label" for="C-PAP">
                  Use a C-PAP machine
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Thyroid Problem" id="Thyroid">
              <label class="form-check-label" for="Thyroid">
                  Thyroid Problem
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Tubercluosis" id="Tubercluosis">
              <label class="form-check-label" for="Tubercluosis">
                  Tubercluosis
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Venereal Disease" id="Venereal">
              <label class="form-check-label" for="Venereal">
                  Venereal Disease
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Nurological Disorders" id="Nurological">
              <label class="form-check-label" for="Nurological">
                  Nurological Disorders
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Bleeding Disorders" id="Bleeding">
              <label class="form-check-label" for="Bleeding">
                  Bleeding Disorders
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Lung Disease" id="Lung">
              <label class="form-check-label" for="Lung">
                  Lung Disease
              </label>
          </div>
          <div class="form-check" style="margin-top: 10px; margin-left: 12px;">
              <input class="form-check-input" name="checkbox[]" type="checkbox" value="Emphysema" id="Emphysema">
              <label class="form-check-label" for="Emphysema">
                  Emphysema
              </label>
          </div>
      </div>
      <div class="row" style="margin-left: 38px; margin-bottom: 15px; margin-top: 50px;">
          <label for="otherIllness" class="mb-2">Other illnesses:</label>
          <div class="col-sm-4">
              <input type="text" name = "otherIllness" class="form-control" id="otherIllness" value = "<?php echo $otherIllness; ?>" required>
          </div>
          <small style="color: red;" id="ErrOther"></small>

      </div>
      <div class="row" style="margin-left: 38px; margin-bottom: 15px; margin-top: 50px;">
          <label for="operations">please list any Operations and Dates of Each</label>
          <div class="col-8"><br>
              <textarea name = "listOfOperation" id="operation" cols="30" rows="10" class="form-control" value =" <?php echo $listOfOperation; ?>"></textarea>
          </div>
      </div>
      <div class="row" style="margin-left: 38px; margin-bottom: 15px; margin-top: 50px;">
          <label for="current">please list your Current Medications</label>
          <div class="col-8"><br>
              <textarea name="currentMedicine" id="currentMedicine" cols="30" rows="10" class="form-control" value = " <?php echo $currentMedicine; ?>"></textarea>
          </div>
      </div><br>
      <hr>
      
      <div class="btn" >
          <button type="button" class="btn btn-secondary btn-lg" id="pre1" onclick="previous2()">Previous</button>
      </div>
      <div class="btn">
          <button type="button" class="btn btn-success btn-lg" onclick="historyAlert()">Next</button>
      </div>

      </div>


      <div id="finalPage">
        <div class="div class="jumbotron style="margin-left: 30px;">
          <h1 class="display-5">Healthy & Unhealthy Habits</h1>
          <hr class="my-2">
      </div><br>
        <div class="form-check">
          <label for="radio" style="margin-bottom: 10px">Exercise</label><br />
          <input type="radio" name="exercise" id="Never" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="Never" />
          <label for="Never">Never</label><br />
  
          <input type="radio" name="exercise" id="1-2" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="1-2 days" />
          <label for="1-2">1-2 days</label><br />
  
          <input type="radio" name="exercise" id="3-4" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="3-4 days" />
          <label for="3-4">3-4 days</label><br />
  
          <input type="radio" name="exercise" id="5+" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="5+ days" />
          <label for="5+">5+ days</label>
        </div>
        <br /><br />
        <div class="form-check">
          <label for="radio" style="margin-bottom: 10px">Eating following a diet</label><br />
          <input type="radio" name="diet" id="loose" class="form-check-input" style="margin-left: 5px; margin-right: 10px"
            value="I have a loose diet." />
          <label for="loose">I have a loose diet</label><br />
  
          <input type="radio" name="diet" id="strick" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="I have a strict diet." />
          <label for="strick">I have a strict diet</label><br />
  
          <input type="radio" name="diet" id="no" class="form-check-input" style="margin-left: 5px; margin-right: 10px"
            value="I don't have a diet plan." />
          <label for="no">I don't have a diet plan</label><br />
        </div>
        <br /><br />
        <div class="form-check">
          <label for="radio" style="margin-bottom: 10px">Alcohol Consumption</label><br />
          <input type="radio" name="alcohol" id="noal" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="I don't drink." />
          <label for="noal">I don't drink</label><br />
  
          <input type="radio" name="alcohol" id="1-2g" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="1-2 glasses/day." />
          <label for="1-2g">1-2 glasses/day</label><br />
  
          <input type="radio" name="alcohol" id="3-4g" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="3-4 glasses/day." />
          <label for="3-4g">3-4 glasses/day</label><br />
  
          <input type="radio" name="alcohol" id="5+g" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="5+ glasses/day." />
          <label for="5+g">5+ glasses/day</label>
        </div>
        <br /><br />
        <div class="form-check">
          <label for="radio" style="margin-bottom: 10px">Caffeine Consumption</label><br />
          <input type="radio" name="caffeine" id="noca" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="I don't use caffiene." />
          <label for="noca">I don't use caffiene</label><br />
  
          <input type="radio" name="caffeine" id="1-2c" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="1-2 cups/day." />
          <label for="1-2c">1-2 cups/day</label><br />
  
          <input type="radio" name="caffeine" id="3-4c" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="3-4 cups/day." />
          <label for="3-4c">3-4 cups/day</label><br />
  
          <input type="radio" name="caffeine" id="5+c" class="form-check-input"
            style="margin-left: 5px; margin-right: 10px" value="5+ cups/day." />
          <label for="5+c">5+ cups/day</label>
        </div>
        <br /><br />
        <div class="form-check">
          <label for="radio" style="margin-bottom: 10px">Do you smoke?</label><br />
  
          <input type="radio" name="smoke" id="Ns" class="form-check-input" style="margin-left: 5px; margin-right: 10px"
            value="No." />
          <label for="Ns">No</label><br />
  
          <input type="radio" name="smoke" id="0-1P" class="form-check-input" style="margin-left: 5px; margin-right: 10px"
            value="0-1 pack/day." />
          <label for="0-1P">0-1 pack/day</label><br />
  
          <input type="radio" name="smoke" id="1-2P" class="form-check-input" style="margin-left: 5px; margin-right: 10px"
            value="1-2 packs/day." />
          <label for="1-2P">1-2 packs/day</label><br />
  
          <input type="radio" name="smoke" id="2+P" class="form-check-input" style="margin-left: 5px; margin-right: 10px"
            value="2+ s/day." />
          <label for="2+P">2+ paks/day</label>
        </div>
        <br /><br />
  
        <div class="row" style="margin-left: 38px; margin-bottom: 15px; margin-top: 50px">
          <label for="medicalHistory">
            <h5>
                Include other comments regarding your Medical Histroy
            </h5>
          </label>
          <div class="col-8">
            <textarea name="history" id="history" cols="30" rows="10" class="form-control" value = "<?php echo $history ?>" required ></textarea>
          </div>
          <small style="color: red;" id="ErrHistory"></small>

        </div><br>
        <hr>
  
        
        <div class="btn" >
          <button type="button" class="btn btn-secondary btn-lg" id="pre2" onclick="previous()">Previous</button>
      </div>
      <div class="btn">
          <button type="submit" name="submit" class="btn btn-primary btn-lg" onclick="habitsAlert()">Submit</button>
      </div>
      </div>
    </form>
  </main>
  <footer class="page-footer font-small blue" style="background-color: dodgerblue; margin-top: 10px">
    <div class="footer-copyright text-center py-3">
      © 2020 Copyright:
      <a href="https://mdbootstrap.com/" style="color: white; text-decoration: none">
        MDBootstrap.com</a>
    </div>

    
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <script src="module1_assignment.js"></script> 
  <script>
    function triggerClick(e) {
  document.querySelector('#profilePicU').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profilePic').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
 </script>
 <?php if($isMail){ ?>
  <script>
    document.getElementById("ErrMail").innerHTML = "Please enter your email id";
  </script>
<?php }?>
</body>

</html>