<!DOCTYPE html>
<html>
<head>
    <meta characterset="utf8";>
    <link rel="stylesheet" href="style.css">
    <title> Fight Club </title>
</head>
<body>

    <div class="box"> 
        <h1> L'Arene d'Anzu </h1>
        <p> Bienvenue <?php echo $_POST["pseudo"] ?> </p>
        <h2> Choissisez votre Combattant !<h2>
    </div>  

    <div class="character">
        <div class="character1">  </div>
        <div class="character2">  </div>
        <div class="character3">  </div>
        <div class="character4">  </div>
    </div>
    
    <div class="pickCharacter">
        <div class="pickCharacter1"> 
            <form method="POST" action="fight.html"> 
                <input type="submit" value="?????"> 
            </form> 
        </div>                  
        <div class="pickCharacter2"> 
            <form method="POST" action="fight.html"> 
                <input type="submit" value="?????"> 
            </form> 
        </div>
        <div class="pickCharacter3">
            <form method="POST" action="fight.html"> 
                <input type="submit" value="?????"> 
            </form>  
        </div>          
        <div class="pickCharacter4">
            <form method="POST" action="fight.html"> 
                <input type="submit" value="????"> 
            </form> 
        </div>
    </div>
    

</body>
</html>