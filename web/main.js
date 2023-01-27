(function () {
    // NAVBAR STYCKY **************************************************
    // on cible l'objet nav
    let objNav = document.querySelector("nav");
    // on mémorise la position de nav
    let memoPositionNav = objNav.offsetTop;

    function sticky() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionNav - posCurseur < 1) {
            objNav.style.position = "fixed";
            objNav.style.width = "40%";
            objNav.style.backgroundColor = "rgba(30, 30, 30, 0.800)";
        }
        if (memoPositionNav - posCurseur > -1) {
            objNav.style.position = "static";
            objNav.style.backgroundColor = "transparent";
        }
    }

    // NAVBAR > ACCEUIL*************************************************
    // on cible l'objet nav
    let objNavAcc = document.getElementById("NavAcceuil");
    // on mémorise la position de nav
    let memoPositionNavAcc = objNavAcc.offsetTop;

    function TextColorNavAcceuil() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // console.log(memoPositionNavAcc-posCurseur);
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionNavAcc - posCurseur > -400) {
            objNavAcc.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavAcc.addEventListener("mouseout", (event) => {
                event.target.style.color = "#ffb727";
            });
            objNavAcc.style.color = "#ffb727";
        } else {
            objNavAcc.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavAcc.addEventListener("mouseout", (event) => {
                event.target.style.color = "white";
            });
            objNavAcc.style.color = "white";
        }
    }

    // NAVBAR > A PROPOS **************************************************
    // on cible l'objet nav
    let objNavApro = document.getElementById("NavApropos");
    // on mémorise la position de nav
    let memoPositionNavApro = objNavApro.offsetTop;

    function TextColorNavApropos() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionNavApro - posCurseur < -400 && memoPositionNavApro - posCurseur > -1300) {
            objNavApro.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavApro.addEventListener("mouseout", (event) => {
                event.target.style.color = "#ffb727";
            });
            objNavApro.style.color = "#ffb727";
        } else {
            objNavApro.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavApro.addEventListener("mouseout", (event) => {
                event.target.style.color = "white";
            });
            objNavApro.style.color = "white";
        }
    }

    // NAVBAR > EXPERIENCE *************************************************
    let objNavExp = document.getElementById("NavExperience");
    // on mémorise la position de nav
    let memoPositionNavExp = objNavExp.offsetTop;


    function TextColorNavExperience() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionNavExp - posCurseur < -1300 && memoPositionNavExp - posCurseur > -2200) {
            objNavExp.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavExp.addEventListener("mouseout", (event) => {
                event.target.style.color = "#ffb727";
            });
            objNavExp.style.color = "#ffb727";
        } else {
            objNavExp.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavExp.addEventListener("mouseout", (event) => {
                event.target.style.color = "white";
            });
            objNavExp.style.color = "white";
        }
    }

    // NAVBAR > PROJET *******************************************************
    let objNavProj = document.getElementById("NavProjet");
    // on mémorise la position de nav
    let memoPositionNavProj = objNavProj.offsetTop;


    function TextColorNavProjet() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionNavProj - posCurseur < -2200 && memoPositionNavProj - posCurseur > -3300) {
            objNavProj.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavProj.addEventListener("mouseout", (event) => {
                event.target.style.color = "#ffb727";
            });
            objNavProj.style.color = "#ffb727";
        } else {
            objNavProj.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavProj.addEventListener("mouseout", (event) => {
                event.target.style.color = "white";
            });
            objNavProj.style.color = "white";
        }
    }

    // NAVBAR > CONTACT *********************************************************
    let objNavCont = document.getElementById("NavContact");
    // on mémorise la position de nav
    let memoPositionNavCont = objNavCont.offsetTop;


    function TextColorNavContact() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionNavCont - posCurseur < -3300 && memoPositionNavCont - posCurseur > -4000) {
            objNavCont.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavCont.addEventListener("mouseout", (event) => {
                event.target.style.color = "#ffb727";
            });
            objNavCont.style.color = "#ffb727";
        } else {
            objNavCont.addEventListener("mouseenter", (event) => {
                event.target.style.color = "#ffc551";
            });
            objNavCont.addEventListener("mouseout", (event) => {
                event.target.style.color = "white";
            });
            objNavCont.style.color = "white";
        }
    }

    // BOUTON SCROLL TOP ************************************************************* 
    // on cible l'objet nav
    let objScrollTop = document.getElementById("scroll_to_top");
    // on mémorise la position de nav
    let memoPositionScrollTop = objScrollTop.offsetTop;

    function ScrollTopHidden() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionScrollTop - posCurseur < 1) {
            objScrollTop.style.visibility = "visible";
        }
        if (memoPositionScrollTop - posCurseur > -1) {
            objScrollTop.style.visibility = "hidden";
        }
    }

    // TXT BOX HIDDEN ******************************************************************
    function exemple() {
        el = document.getElementById("exemple");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    }

    var BtnCallExemple = document.getElementById("BtnCallEvent1");
    BtnCallExemple.addEventListener("click", exemple);

    function exemple2() {
        el = document.getElementById("exemple2");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    }

    var BtnCallExemple2 = document.getElementById("BtnCallEvent2");
    BtnCallExemple2.addEventListener("click", exemple2);

    function exemple3() {
        el = document.getElementById("exemple3");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    }

    var BtnCallExemple3 = document.getElementById("BtnCallEvent3");
    BtnCallExemple3.addEventListener("click", exemple3);

    function exemple4() {
        el = document.getElementById("exemple4");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    }

    var BtnCallExemple4 = document.getElementById("BtnCallEvent4");
    BtnCallExemple4.addEventListener("click", exemple4);


    // evenement
    window.addEventListener("scroll", sticky);
    window.addEventListener("scroll", TextColorNavAcceuil);
    window.addEventListener("scroll", TextColorNavApropos);
    window.addEventListener("scroll", TextColorNavExperience);
    window.addEventListener("scroll", TextColorNavProjet);
    window.addEventListener("scroll", TextColorNavContact);
    window.addEventListener("scroll", ScrollTopHidden);
})()