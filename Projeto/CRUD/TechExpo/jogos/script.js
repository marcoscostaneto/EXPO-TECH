mario = document.querySelector('.mario');
gameBoard = document.querySelector('.game-board');
pipe = document.querySelector('.pipe');
plant = document.querySelector('.plant');
grass = document.querySelector('.grass');
textStart = document.querySelector('text-start');
textRestart = document.querySelector('text-restart');
audioStart = new Audio('./audio/theme.mp3');
audioGameOver = new Audio('./audio/gameover.mp3');
floor1 = document.querySelector('.floor-1');
floor2 = document.querySelector('.floor-2');
floor3 = document.querySelector('.floor-3');



/*================ Função Start ===================*/ 

const start = () => {


    document.getElementById("text-start").style.color = "transparent";
    document.getElementById("text-start").innerHTML="";

    pipe.classList.add('pipe-animation');
    plant.classList.add('plant-animation');
    //gameBoard.classList.add('backgroundAnimate');

    mario.src = './images/mario.gif';
    mario.style.width = '150px';
    mario.style.marginLeft = '50px';

    function grassAnimation(){
        grass.classList.add('grass-animation');
            }setInterval(grassAnimation, 8000);


    function floorAnimation1(){
        floor1.classList.add('floor-animation-1');
            }setInterval(floorAnimation1, 0);

    function floorAnimation2(){
        floor2.classList.add('floor-animation-2');
            }setInterval(floorAnimation2, 0);
                           
    function floorAnimation3(){
        floor3.classList.add('floor-animation-3');
            }setInterval(floorAnimation3, 3100); 
     
            

            setInterval(function(){ segundo() },1000)


    audioStart.play();
}

document.addEventListener('keydown', start);
document.addEventListener('touchstart', start);


/*================ Função Pulo ===================*/ 

const jump = () => {
 if(mario.classList == "mario"){
    mario.classList.add('jump');
    mario.id = "jump";



    setTimeout(() => {
      
        mario.classList.remove('jump');
        mario.id = "mario";
      
    }, 1500); 
}
}

document.addEventListener('keydown', jump);
document.addEventListener('touchstart', jump);



/*================ Código para acabar o jogo ===================*/ 

const checkGameOver = setInterval(() => {


 
    

    const pipePosition = pipe.offsetLeft;
    const plantPosition = plant.offsetLeft;
    const marioPosition = +window.getComputedStyle(mario).bottom.replace('px', '');
    const grassPosition = grass.offsetLeft;
    const floorPosition1 = floor1.offsetLeft;
    const floorPosition2 = floor2.offsetLeft;
    const floorPosition3 = floor3.offsetLeft;

   
        if (pipePosition <= 120 && pipePosition > 0 && marioPosition < 80 || plantPosition <= 120 && plantPosition > 0 && marioPosition < 180 && marioPosition > 100) {

            pipe.classList.add('animation-paused');

            plant.classList.add('animation-paused');
           

            mario.classList.remove('jump');
            mario.style.bottom = `${marioPosition}px`;

            mario.src = './images/game-over.png';
            mario.style.width = '75px';
            mario.style.marginLeft = '50px';
            mario.classList.add("game-over-animation");

            grass.style.animation = 'none';
            grass.style.left = `${grassPosition}px`;

            floor1.style.animation = 'none';
            floor1.style.left = `${floorPosition1}px`;

            floor2.style.animation = 'none';
            floor2.style.left = `${floorPosition2}px`;

            floor3.style.animation = 'none';
            floor3.style.left = `${floorPosition3}px`;

            document.getElementById("text-start").style.color = "#FF2D75";
            
            document.getElementById("text-start").innerHTML="<strong>GAME OVER</strong>";

            document.getElementById("text-restart").innerHTML="Boa tentativa! <br> Clique na tela para reiniciar";
            
            document.getElementById("text-start").style.fontSize="4vw";
            
            gameBoard.classList.add('backgroundAnimateStop');
            
            document.addEventListener('keydown', restart);
            document.addEventListener('touchstart', restart);
            
            function restart(){
              document.location.reload(true);
              
            }

            function stopAudioStart(){
                audioStart.pause();
                }stopAudioStart();

            audioGameOver.play();

            function stopAudio(){
                audioGameOver.pause();
                }setTimeout(stopAudio, 8000);

            clearInterval(checkGameOver);
         }
}, 10);



function lock(){
  screen.orientation.lock('landscape');

}
