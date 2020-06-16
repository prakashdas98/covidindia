 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Covid 19</title>
     <?php include 'link/links.php';?>
     <?php include 'css/style.php';?>
 </head>
 <body class="back">
     <!-- <h1>go cororna </h1> -->
     <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand" href="#">COVID-19 India</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-rg-12 order-lg-1 order-2">
          <div class="leftside w-100 h-100 d-flex justify-content-center">
            <img src="img/covidvirus.jpg"  width ="300" height="300">
          </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
          <div class="rightside w-100 h-1000 d-flex justify-content-center">
            
            <img src="img/monster.jpg"  width ="400" height="400">
            
          </div>
          
        </div>
    </div>
</div>


<section class="corona_update container-fuild">
  <div class="my-5">
    <h3 class="text-center text-uppercase"> COVID-19 Live Upadte of India</h3>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
          <th>Last Updated Time</th>
          <th>State</th>
          <th>Confirmed</th>
          <th>Active</th>
          <th> Recovered</th>
          <th> Deaths</th>
      </tr>

<?php

$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive =json_decode($data, true);

$statescount =count($coronalive['statewise']);
$i=1;
while($i < $statescount){
  ?>

  <tr class="abc">
      <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']?></td>
      <td><?php echo $coronalive['statewise'][$i]['state']?></td>
      <td><?php echo $coronalive['statewise'][$i]['confirmed']?></td>
      <td><?php echo $coronalive['statewise'][$i]['active']?></td>
      <td><?php echo $coronalive['statewise'][$i]['recovered']?></td>
      <td><?php echo $coronalive['statewise'][$i]['deaths']?></td>
  
  </tr>
  <!-- echo $coronalive['statewise'][$i]['lastupdatedtime'] ."<br>";
  echo $coronalive['statewise'][$i]['state'] ."<br>";
  echo $coronalive['statewise'][$i]['confirmed'] ."<br>";
  echo $coronalive['statewise'][$i]['active'] ."<br>";
  echo $coronalive['statewise'][$i]['recovered'] ."<br>";
  echo $coronalive['statewise'][$i]['deaths'] ."<br>"; -->


  <?php
  $i++;
}

?>
    
    </table>
  
  </div>

</section>
<div class="container-fluid sub_section  pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-5">
              <h1> About COVID-19</h1>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12 ml-5">
                  <img src="img/about.jpg" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                  <h2>What is Covid-19 ?</h2>
                  <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
                <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
            </div>
        </div>
  </div>

  <div class="container-fluid sub_section  pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-5">
              <!-- <h1> SYMPTOMS </h1> -->
        </div>

 </body>
 </html>