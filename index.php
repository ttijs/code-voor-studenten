<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    .voorbeeld1 {
        color: red;
    }
    .voorbeeld2 {
        color: blue;
    }
    .voorbeeld1.voorbeeld2 {
        color: green;
    }
    .voorbeeld2 .voorbeeld3 {
        color: yellow;
    }
    .voorbeeld2 > .voorbeeld3 {
        color: purple;
    }

</style>
        
<div class="class1">class 1</div>
<div class="class2">
    class 2
    <div class="tussendiv">
        <div class="class3">class 3 in tussendiv</div>
    </div>
    <div class="class3">class 3</div>
</div>
<div class="class1 class2">class 1 en class 2</div>


<!-- ############################################################################## -->


<!-- http://mysite.com/index.php?lang=english   -->


<form method="post">
   <p>First name: <input type="text" name="firstname" /></p>
   <p>Last name: <input type="text" name="firstname" /></p>
   <input type="submit" name="submit" value="Submit" />
</form>



<?php
   if(isset($_POST['submit'])) {
    if($_GET['lang'] == "english") {
    echo '<div class="label">First name: ' . $_POST['firstname'] . '</div>';
    echo '<div>Last name: ' . $_POST['lastname'] . '</div>';
    } else if($_GET['lang'] == "dutch") {
    echo '<div>Voornaam: ' . $_POST['firstname'] . '</div>';
    echo '<div>Achternaam: ' . $_POST['lastname'] . '</div>';
   }
   }
?>

</body>
</html>