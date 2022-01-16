//Definir tous les variables globales
var bottomrow = document.getElementById('bottomrow');
var stats = document.getElementsByClassName('stats');
var megastats = document.getElementById('meagastats');
var vaygarhp = document.getElementById('Vaygarhp');
var megamanhp = document.getElementById('megaManhp');
var megamoves = document.getElementById('megaMoves');

// health variables 
var mghp=100;
var vghp=100;

function beginBattle(){
      bottomrow.innerHTML =" pick megaman's abillity by cliking on the button above .";
      for(var i=0;i<stats.length;i++){
          stats[i].style.visibility="visible";
      }

}

function vaygarAttack(){
 var attchoice =Math.ceil(Math.random()*3);
 if(attchoice == 1){
    var hitChane =Math.round(Math.random()*10);//un nombre aleatoire en 0 et 10
    if(hitChane<=7){
        var dmg = Math.round(Math.random()*10)+10; //dammage entre 10 et 20
        mghp -= dmg;
        if(mghp<0){
            mghp=0;
        }
        bottomrow.innerHTML+="<br> vaygar hit you with a blast "+ dmg +" dammge. you now have "+ mghp +"hp";
        var megamanWidth = (mghp/100)*300;
        megamanhp.style.width = megamanWidth +"px";
    }else {
        bottomrow.innerHTML += "<br>he missed you  !!";
    }

 }else if (attchoice == 2 ){
    var hitChane =Math.round(Math.random()*10);//un nombre aleatoire en 0 et 10
    if(hitChane<=5){
        var dmg = Math.round(Math.random()*15)+15; //dammage entre 10 et 20
        mghp -= dmg;
        if(mghp<0){
            mghp=0;
        }
        bottomrow.innerHTML+=" <br>vaygar hit you with a blast "+ dmg +" dammge. you now have "+ mghp +"hp";
        var megamanWidth = (mghp/100)*300;
        megamanhp.style.width = megamanWidth +"px";
    }else {
        bottomrow.innerHTML = "<br> he missed you !!";
    }
 }else{
        var hitChane =Math.round(Math.random()*10);//un nombre aleatoire en 0 et 10
        if(hitChane<=3){
            var dmg = Math.round(Math.random()*20)+20; //dammage entre 10 et 20
            mghp -= dmg;
        if(mghp<0){
            mghp=0;
        }
        bottomrow.innerHTML+=" <br>vaygar hit you with a blast "+ dmg +" dammge. you now have "+ mghp +"hp";
        var megamanWidth = (mghp/100)*300;
        megamanhp.style.width = megamanWidth +"px";
    }else {
        bottomrow.innerHTML += "<br> he missed you !!";
    }
  }
  if(mghp==0){
    bottomrow.innerHTML+="<br> vayger have defeadt you ha hah ha aha ";
    megamoves.style.visibility="hidden";
}
}
function blast(){
    var hitChane =Math.round(Math.random()*10);//un nombre aleatoire en 0 et 10
    if(hitChane<=7){
        var dmg = Math.round(Math.random()*10)+10; //dammage entre 10 et 20
        vghp -= dmg;
        if(vghp<0){
            vghp=0;
        }
        bottomrow.innerHTML=" You hit Battle boss vaygar with your blast "+ dmg +" dammge. vaygar now has "+ vghp +"hp";
        var vaygarhpWidth = (vghp/100)*300;
        vaygarhp.style.width = vaygarhpWidth +"px";
    }else {
        bottomrow.innerHTML = "you missed !!";
    }
    if(vghp==0){
        bottomrow.innerHTML+="<br> You have successflly defeated Battle Boss veigar ";
        megamoves.style.visibility="hidden";
    }
    else{
        vaygarAttack();

    }

}