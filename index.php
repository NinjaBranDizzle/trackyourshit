<?php 
    require_once 'defines.php'; 
    $_SESSION['userName'] = 'Brandon';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.js"></script>
    <script src="js/main.js?t=<?php echo time(); ?>"></script>
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body> 
    <div class="wrapper">
        <div>
            <select id="selectedExercise">
            <?php
                $getExercises = mysql_query("SELECT * FROM exercises") or die ("Unable to connect to exercises table");
                //Get all exercises and display to user in select format
                while($exercise = mysql_fetch_assoc($getExercises))
                {
                    echo "<option value='" . $exercise['exerciseTitle'] . "'>" . $exercise['exerciseTitle'] . "</option>";
                }
            ?>
            </select>
            <button type="button" id="selectExercise" class="btn btn-primary btn-medium">Select</button>       
        </div>

        <hr>

        <div class="selectedExercise">
            <div class="set">
                <select class="repOne">
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
                </select>
                <input class="weightOne"type="text" class="input-mini" placeholder="Weight">
            </div><!-- /set-->

            <div class="set">
                <select class="repTwo">
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
                </select>                        
                <input class="weightTwo" type="text" class="input-mini" placeholder="Weight">
            </div><!-- /set-->

            <div class="set">
                <select class="repThree">
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
                </select>
                <input class="weightThree" type="text" class="input-mini" placeholder="Weight">
            </div><!-- /set-->

            <div class="set">
                <select class="repFour">
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
                </select><!-- /set-->
                <input class="weightFour" type="text" class="input-mini" placeholder="Weight">
            </div>            
            <button type="button" id="saveWeightEntry" class="btn btn-primary btn-medium">Save</button>
        </div><!-- /selectedExercise-->
        <hr>

        <div>
            <div class="addExerciseWrapper">
                <input id="userName" type="hidden" value="<?php echo $_SESSION['userName']; ?>">
                <input id="addExerciseTitle" type="text" class="input-medium" placeholder="Exercise Title"><br />
                <textarea id="addExerciseDesc" placeholder="Exercise Description"></textarea>
                <input id="addExerciseURL" type="hidden" value="/exerciseImages">
                <input id="addPrimaryMuscle" type="text" class="input-medium" placeholder="Primary Muscle"><br />
                <input id="addSecondaryMuscle" type="text" class="input-medium" placeholder="Secondary Muscle"><br />
                
                <button type="button" id="addNewExercise" class="btn btn-primary btn-medium">Submit</button>
            </div><!--/addExerciseWrapper-->
        </div>
    </div><!-- /wrapper-->
</body>
</html>
