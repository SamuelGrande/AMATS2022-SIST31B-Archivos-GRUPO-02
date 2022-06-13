const btn_menu = document.getElementById("btn-menu");
var main = document.querySelector(".main");


const create = function () {
    let url = window.location;
    let width = screen.width;
    let ExpReg = new RegExp("inicio");
    let ExpReg2 = new RegExp("index");
    let textToAdd = document.getElementById("textToAdd");

    if (width > 651 && (ExpReg.test(url)) ) {
        textToAdd.innerHTML = '<div class="textToAdd"><span class="typed" id="typed"><span class="text-added"></span></span></div>';
        new Typed('.text-added',{
            strings: [
                "BIENVENIDO A: VICTORIA'S SALON",
                "ENCUENTRA:"
            ],
            typeSpeed:90,
            loop:false
        });
    }
}

btn_menu.addEventListener("click", ()=>{
    let menu = document.querySelector(".menu");
    menu.classList.toggle("menu_hide")

    let header_menu = document.querySelector(".header-menu");
    header_menu.classList.toggle("opacity");

    main.classList.toggle("translate-main");
});

create();

window.onresize = function() {
    let span = document.getElementById("typed");
    let width = screen.width;
    let textToAdd = document.getElementById("textToAdd");
    
    if (width < 651 ) {
        textToAdd.innerHTML ="";
    }else{
        create();
    }
}