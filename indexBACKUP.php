<!DOCTYPE html>
<?php
    require 'connect.php';
?>
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
    <script src="js/main.js"></script>
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
            <div class="selectedExercise clearfix">
                <div class="repWeight">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="exercisePic">
                            <img src="img/noProfileImg.jpg" width="" height="" border="0" />
                        </div>
                        <div class="exerciseDetail">
                            <input class="exerciseTitle" type="text" class="input-medium" placeholder="Exercise Title">
                            <textarea class="exerciseDesc" rows="5">Exercise Description</textarea>
                        </div>

                        <div class="exerciseSet">
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
                            </div>

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
                            </div>

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
                            </div>
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
                                </select>
                                <input class="weightFour" type="text" class="input-mini" placeholder="Weight">
                            </div>
                            <div class="additionalItems">
                                <img src="img/plusIcon.png" class="addItem" width="" height="" border="0" />
                            </div>
                        </div>
                        <button type="button" id="addNewExercise" class="btn btn-primary btn-large">Submit</button>
                    </form>
                </div>
            </div>
        </div>
            <div class="repWeight">
                <form id="addNewExerciseForm" action="" method="POST" enctype="multipart/form-data">
                <div class="exercisePic">
                    <img src="img/noProfileImg.jpg" width="" height="" border="0" />
                </div>
                <div class="exerciseDetail">
                    <input id="exerciseTitle" type="text" class="input-medium" placeholder="Exercise Title">
                    <textarea id="exerciseDesc" rows="5">Exercise Description</textarea>
                </div>

                <div class="exerciseSet">
                    <div class="set">
                        <select id="repOne">
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
                        <input id="weightOne"type="text" class="input-mini" placeholder="Weight">
                    </div>

                    <div class="set">
                        <select id="repTwo">
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
                        <input id="weightTwo" type="text" class="input-mini" placeholder="Weight">
                    </div>

                    <div class="set">
                        <select id="repThree">
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
                        <input id="weightThree" type="text" class="input-mini" placeholder="Weight">
                    </div>
                    <div class="set">
                        <select id="repFour">
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
                        <input id="weightFour" type="text" class="input-mini" placeholder="Weight">
                    </div>
                    <div class="additionalItems">
                        <img src="img/plusIcon.png" class="addItem" width="" height="" border="0" />
                    </div>
                </div>
                <button type="button" id="addNewExercise" class="btn btn-primary btn-large">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
