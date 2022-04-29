const buttonOnAudio = document.getElementById('onAudio');
const buttonOffAudio = document.getElementById('offAudio');
const playerVideo = document.getElementById('videoPlayer');

function onAudio(){
playerVideo.muted = false
buttonOffAudio.classList.add('hiddenButton');
buttonOnAudio.classList.remove('hiddenButton');
}

function offAudio(){
    playerVideo.muted = true;
    buttonOnAudio.classList.add('hiddenButton');
    buttonOffAudio.classList.remove('hiddenButton');

}


const pleinEcran = document.getElementById('pleinEcran');

pleinEcran.addEventListener('click',function(){
   if (playerVideo.requestFullscreen){
    playerVideo.requestFullscreen();
   } 
})