<?php
        // require "./database/test.php";
        function Handleform($name,$math,$english,$swahili,$chemistry,$biology,$physics,$history,$geography,$religion,$technical){
            if($math>99 ||$english>99 ||$swahili>99 ||$chemistry>99 ||$biology>99 ||$physics>99 ||$history>99 ||$geography>99 ||$religion>99 ||$technical>99){
                echo "<h4>Marks cannot exceed 99</h4>";
                return false;
            }else{
                //We passed this one
            }
            if($math<0 ||$english<0 ||$swahili<0 ||$chemistry<0 ||$biology<0 ||$physics<0 || $history<0 ||$geography<0 ||$religion<0 ||$technical<0){
                echo '<h4>Marks cannot go below 0</h4>';
            }
            
        }
        
        function CreateMean($number,$math,$english,$swahili,$chemistry,$biology,$physics,$history,$geography,$religion,$technical,$mean){
            
            $sum1 = $math + $english + $swahili + $chemistry + $biology;
            $sum2 = $physics+$history+$geography+$religion+$technical;
            $total = $sum1+$sum2;
            $mean = $total/$number;
            // echo $mean;
        }
        $grade= "";
        //Introduce the system to the grades
        function MakeGrade($mean,$grade){
            
            //Grade E
            if($mean<=34){
                $grade = 'E';
            }
            // Grade D-
            if($mean>=35 && $mean<=39){
                $grade = 'D-';
            }
            //Grade D
            if($mean>=40 && $mean<=44){
                $grade = 'D';
            }
            // Grade D+
            if($mean>=45 && $mean<=49){
                $grade = 'D+';
            }
            //Grade C-
            if($mean>=50 && $mean<=54){
                $grade = 'C-';
            }
            //Grade C
            if($mean>=55 && $mean<=59){
                $grade = 'C';
            }
            //Grade C+
            if($mean>=60 && $mean<=64){
                $grade = 'C+';
            }
            //Grade B-
            if($mean>=65 && $mean<=69){
                $grade = 'B-';
            }
            //Grade B
            if($mean>=70 && $mean<=74){
                $grade = 'B';
            }
            //Grade B+
            if($mean>=75 && $mean<=79){
                $grade = 'B+';
            }
            //Grade A-
            if($mean>=80 && $mean<=84){
                $grade = 'A-';
            }
            // Grade A
            if($mean>=85 && $mean<=99){
                $grade = 'A';
            }
            echo $mean.$grade;
            
            
        }
        if(isset($_POST['enter'])){
            $name = $_POST['name'];
            $math = $_POST['math'];
            $english = $_POST['english'];
            $swahili = $_POST['swahili'];
            $chemistry = $_POST['chemistry'];
            $biology = $_POST['biology'];
            $physics = $_POST['physics'];
            $history = $_POST['history'];
            $geography = $_POST['geography'];
            $technical = $_POST['technical'];
            $religion = $_POST['religion'];
            $number = $_POST['number'];
            $sum1 = $math + $english + $swahili + $chemistry + $biology;
            $sum2 = $physics+$history+$geography+$religion+$technical;
            $total = $sum1+$sum2;
            $mean = $total/$number;
            Handleform($name,$math,$english,$swahili,$chemistry,$biology,$physics,$history,$geography,$religion,$technical);
            if(CreateMean($number,$math,$english,$swahili,$chemistry,$biology,$physics,$history,$geography,$religion,$technical,$mean)){
             MakeGrade($mean,$grade);
            }
            MakeGrade($mean,$grade);
        }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Enter Results</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Results system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">View results</a>
      </li>
      
    </ul>

  </div>
</nav>
<br>
    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Student's Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
        <label>Mathematics</label>
        <input type="number" class="form-control" name="math" required>
        </div>
        <div class="form-group">
        <label>English</label>
        <input type="number" class="form-control" name="english" required>
        </div>        
        <div class="form-group">
        <label>Swahili</label>
        <input type="number" class="form-control" name="swahili" required>
        </div>        
        <div class="form-group">
        <label>Chemistry</label>
        <input type="number" class="form-control" name="chemistry" required>
        </div>        
        <div class="form-group">
        <label>Biology</label>
        <input type="number" class="form-control" name="biology" required>
        </div>        
        <div class="form-group">
        <label>Physics</label>
        <input type="number" class="form-control" name="physics" required>
        </div>        
        <div class="form-group">
        <label>History</label>
        <input type="number" class="form-control" name="history" required>
        </div>        
        <div class="form-group">
        <label>Geography</label>
        <input type="number" class="form-control" name="geography" required>
        </div>     
        <div class="form-group">
        <label>Religion</label>
        <input type="number" class="form-control" name="religion" required>
        </div>        
        <div class="form-group">
        <label>Technical Subject</label>
        <input type="number" class="form-control" name="technical" required>
        </div>       
         <div class="form-group">
         <label>Number of subjects</label>
         <input type="number" class="form-control" name="number" required>
         </div>
         <div class="form-group">
         <input type="submit" value="Enter" class="form-control btn btn-dark" name="enter">
         </div>
    </form>
    </div>
</body>
</html>