<?php
if(isset($_POST["submit"])){
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
$operator = $_POST['operator'];
$resultat = $_POST['resultat'];
 switch($operator){
    case "choix";
    $resultat ="il faut choisir un opérateur";
    break;
    case "addition";
    $resultat= $num1+$num2;
    break;
     case "multiplication";
     $resultat = $num1*$num2;
    break;
     case "soustraction";
     $resultat = $num1-$num2;
    break;
     case "division";
    $resultat = $num1/$num2;
    break;
 }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>EXERCICE 2 - Calculatrice en HTML/PHP</title>
    </head>
  
    <body>

      <div class="calcul">
        <form action="" method="POST">
         <label for="num1" >num1</label> 
         <input type="text" name="num1"> 
         <label for="num2" >num2</label> 
         <input type="text" name="num2">
        
         <select id="" name="operator">
            <option value="choix">choix</option>
            <option value="addition">addition</option>
            <option value="multiplication">multiplication</option>
            <option value="soustraction">soustraction</option>
            <option value="division">division</option>

         </select> 
         <input type="submit" value="calculer" name="submit">
         <input type="text"  name="resultat" value="<?php echo $resultat; ?>" >

        </form>
      </div>
</body>