<?php

    session_start();
    $Vorname = ["<p id=''> ".$_SESSION['Prename']."</p>"];
    $Name = ["<p id=''> ".$_SESSION['Name']."</p>"];
    $Email =["<p id=''> ".$_SESSION['Email']."</p>"];
if($_SESSION['Prename']==""){
    header("Location: logout.php");
}
   

 

?>
<head>

<link href="session.style.css" rel="stylesheet">

</head>

<body>
    

<div class="side">
<div class="initial"><?php echo "<p id='init'>Moin, ".$_SESSION['Prename']."</p>"?></div>
<div class="Upload inactive" onclick="document.location='#Upload'" id="Upload">
    <div class="circle">
        +
    </div>
</div>
<ul class="menu">
    <li><div id="li1" class="a focused" onclick="select(this.id)">Dashboard</div></li>
    <li><div id="li2" class="a" onclick="select(this.id)">Pinnwand</div></li>
    <li><div id="li3" class="a" onclick="select(this.id)">Profil</div></li>
    <li><div id="li4" class="a"onclick="select(this.id)">Fragen</div></li>
</ul>
</div>
<div class="main" id="main">
    

    

</div>






</div>

<div class="main2 inactive" id="main2">
    <grid class='II' id='Per_Inf'>
        <p class='title'>Persönliche Informationen:</p><p></p>
        <p>Vorname:</p><?php echo $Vorname[0]?>
        <p>Name:</p><?php echo $Name[0]?>
        <p>E-mail:</p><?php echo $Email[0]?>
        <p>Abbonnement:</p><p>FREE</p>
        
    </grid>
    <div>
    <div id='abonnement' class=''>
    <grid class='III' id='abonnement_grid'>
        <p></p><p class='title'>Abonnement</p><p></p>
        <p class='subtitle'>Standard</p><p class='subtitle'>Advanced</p><p class='subtitle'>Professional</p>
        <p>feature</p><p>feature</p><p>feature</p>
        
        
    </grid>
        
    </div>
        
    </div>
    <form action='logout.php' method='POST' id='logout_sec'>
    <input type='submit' value='Logout' name='submitbtn' id='logout'>
    </form>
</div>

<script src="session.script.js"></script>
</body>

