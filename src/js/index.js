setTimeout(() => {
    document.getElementById("notification").style.animation = "disappear 1s";
    setTimeout(() => {
        document.getElementById("notification").style.opacity = 0;
    }, 950);
}, 3000);


function screamer()
{
    document.getElementById("screamer").style.display = "block"
    setTimeout(() => {
        document.getElementById("screamer").style.display = "none"
    }, 125);


    setInterval(() => {
        document.getElementById("screamer").style.display = "block"
        setTimeout(() => {
            document.getElementById("screamer").style.display = "none"
        }, 125);
    }, 250);


    document.getElementById("screamer").style.display = "block"
    document.getElementById("body").style.overflow = "hidden"

    var audio = new Audio('/src/audio/screamer.mp3');
    audio.play();
}