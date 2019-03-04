var e = document.getElementById('menuMask');
var t = document.getElementById('taki');
console.log(t.style.zIndex);
function change(x) {
    //-- hide light fx
    if(e.style.display == 'none')
        setTimeout(showLightFx, 400);
    else
    e.style.display = 'none';

    console.log(t.style.zIndex);
    //-- taki z-index
    if(t.style.zIndex == '') {
        t.style.zIndex = '99'; 
    }else {
        t.style.zIndex = '';
    }

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



