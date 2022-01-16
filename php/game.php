<!DOCTYPE HTML>
<html>
	<head>
		<title>Mini RPG Game</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/game.css" />
	
	</head>
	<body class="is-preload">
        <div id="container">
            <div id="toprow">
                <div id="megaManstat" class="stats">
                    <span class="healthlabel">HEALTH</span><br>
                    <div class"hpBorder">
                        <div id="megaManhp" class="hpbar"></div>
                    </div>
                   <p id="megaMoves">
                    <span class="healthlabel">MOVES</span><br> 
                    <button onclick="blast()" class="buttonStyle">Blast</button>
                   </p> 
                    
                </div>
                <div id="megaMan" class="chars">
                    <img src="images/megaman-stand.png">
                </div>
                <div id ="Vaygar" class="chars">
                    <img src="images/battleBossVeigar-Pixelated.png">
                </div>
                <div id="Vaygarstat" class="stats">
                    <span class="healthlabel">HEALTH</span><br>
                    <div class"hpBorder">
                        <div id="Vaygarhp" class="hpbar"></div>
                    </div>
                </div>
            </div>
            <div id="bottomrow">
                    <h1>Welcome to battle Arena !!</h1>
                    <button onclick="beginBattle()" class="buttonStyle">BEGIN BATTLE</button>
            </div>





        </div>
        <script type="text/javascript" src="javascript/script.js"></script>

	</body>
</html>