<!DOCTYPE html> 
<html> 
	
<head> 
	<title> 
        Calculator
	</title> 
    <link rel="stylesheet" href="./style.css">
</head> 

<body> 
	<div class="card">
        <h1> Calculator </h1>
        <?php
        
            if(isset($_POST['square'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",$operand*$operand,"</h1>"; 
            } 
            if(isset($_POST['cube'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",$operand*$operand*$operand,"</h1>"; 
            } 
            if(isset($_POST['fact'])) { 
                $operand =number_format($_POST['operand']);
                $fact=1;
                for($i=1; $i <= $operand ; $i++){
                    $fact = $fact * $i;
                }
                echo "<h1>",$fact,"</h1>"; 
            } 
            if(isset($_POST['log'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",log($operand,10),"</h1>"; 
            } 
            if(isset($_POST['ln'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",log($operand),"</h1>"; 
            } 
            if(isset($_POST['sin'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",sin($operand),"</h1>"; 
            } 
            if(isset($_POST['cos'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",cos($operand),"</h1>"; 
            } 
            if(isset($_POST['tan'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",tan($operand),"</h1>"; 
            } 
            if(isset($_POST['mod'])) { 
                $operand =number_format($_POST['operand']);
                if($operand < 0){
                    $operand = -$operand;
                }
                echo "<h1>",$operand,"</h1>"; 
            } 

        ?> 
        <form action="index.php" method='POST'>
        <label for="operand">Enter operand</label>
        <input type="text" name="operand">
        <div class="button-grid">
            <input type="submit" name="square" value="Square"/> 
            <input type="submit" name="cube" value="Cube"/>
            <input type="submit" name="fact" value="Fact"/> 
            <input type="submit" name="log" value="log"/> 
            <input type="submit" name="ln" value="ln"/> 
            <input type="submit" name="sin" value="sin"/> 
            <input type="submit" name="cos" value="cos"/> 
            <input type="submit" name="tan" value="tan"/> 
            <input type="submit" name="mod" value="Mod"/> 
        </div>

        <form>
    </div>

</head> 

</html> 