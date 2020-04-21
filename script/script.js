
var i = Math.floor(Math.random() * 8); 

console.log("hello");


var images = [];
var time = 8000;

images[0] ="https://davebrunner.111mb.de/svss/medias/img1.jpg";
images[1] ="https://davebrunner.111mb.de/svss/medias/img2.jpg";
images[2] ="https://davebrunner.111mb.de/svss/medias/img3.jpg";
images[3] ="https://davebrunner.111mb.de/svss/medias/img4.jpg";
images[4] ="https://davebrunner.111mb.de/svss/medias/img5.jpg";
images[5] ="https://davebrunner.111mb.de/svss/medias/img6.jpg";
images[6] ="https://davebrunner.111mb.de/svss/medias/img7.jpg";
images[7] ="https://davebrunner.111mb.de/svss/medias/img8.jpg";




function changeImg() {
    document.getElementById("diashow").src = images[i];

    if(i< images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    console.log(i);

  


 

    setTimeout("changeImg()", time);
}

window.onload = changeImg;

