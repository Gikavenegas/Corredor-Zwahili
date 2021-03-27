let video1 = document.getElementById('video-imagen1')
// let play = document.querySelector('#play')

function playPause (){
    if (video1.paused){
        video1.play()
    }else{
        video1.pause()
    }
}

function stop(){
    video1.pause();
    video1.currentTime = 0;
}

function skip (value){
    video1.currentTime += value;
}
