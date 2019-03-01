var e = document.getElementById('menuMask');

function change(x) {
    //-- hide light fx
    if(e.style.display == 'none')
        setTimeout(showLightFx, 400);
    else
    e.style.display = 'none';

    //-- box anim
    var element = document.getElementById('box1');

    x.classList.toggle("change");
    document.querySelector('#box1').classList.toggle('anima');
    document.querySelector('#box1').classList.toggle('nemani');
}

function showLightFx(){
    e.style.display = 'block';
}

//--- print the year into the footer
document.getElementById("year").innerHTML = new Date().getFullYear();