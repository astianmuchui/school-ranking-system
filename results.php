<?php
    require './database/connection.php';

    //Fetch data
    $query = "SELECT * FROM results ORDER BY mean desc";
    $result = mysqli_query($connection,$query);
    $results = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Results</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Results</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      
    </ul>

  </div>
</nav>

    <br> <br>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>pos</th>
                <th>Name</th>
                <th>Math</th>
                <th>English</th>
                <th>Swahili</th>
                <th>Chemistry</th>
                <th>Biology</th>
                <th>Physics</th>
                <th>History</th>
                <th>Geography</th>
                <th>Religion</th>
                <th>Technical</th>
                <th>Mean</th>
                <th>Grade</th>
            </tr>
            <tr>
            <?php $c = 0; $c++;?>
            <?php foreach($results as $mark):?>
                <td><?php echo $c; $c++;?></td>
                <td><?php echo $mark['student_name'];?></td>
                <td><?php echo $mark['math']; ?></td>
                <td><?php echo $mark['english'];?></td>
                <td><?php echo $mark['swahili'];?></td>
                <td><?php echo $mark['chemistry'];?></td>
                <td><?php echo $mark['biology'];?></td>
                <td><?php echo $mark['physics'];?></td>
                <td><?php echo $mark['history'];?></td>
                <td><?php echo $mark['geographein']?></td>
                <td><?php echo $mark['relegion'];?></td>
                <td><?php echo $mark['technical'];?></td>
                <td><?php echo $mark['mean'];?></td>
                <td><?php echo $mark['Grade'];?></td>
                
            </tr>
            <?php endforeach;?>
        </table>
    </div>

</body>
</html>