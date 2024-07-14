(function () {
    // NAVBAR STYCKY **************************************************
    // on cible l'objet nav
    let objNav = document.getElementById("MainNav");
    // on mémorise la position de nav
    let memoPositionNav = objNav.offsetTop;

    function sticky() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionNav - posCurseur < -700) {
            objNav.style.position = "fixed";
            objNav.style.width = "40%";
            objNav.style.backgroundColor = "rgba(30, 30, 30, 0.800)";
            if( screen.width <= 1025){
                objNav.style.width = "50%";
            }
            if( screen.width <= 769){
                objNav.style.width = "60%";
            }
            if( screen.width <= 426){
                objNav.style.width = "40%";
            }
        }
        if (memoPositionNav - posCurseur > -1) {
            objNav.style.position = "static";
            objNav.style.backgroundColor = "transparent";
        }
    }

    // on cible l'objet nav
    let objBur = document.getElementById("BurgerMenu");
    // on mémorise la position de nav
    let memoPositionBur = objBur.offsetTop;

    function sticky2() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if (memoPositionBur - posCurseur < -700) {
            objBur.style.position = "fixed";
            objBur.style.marginLeft = "86%";
            objBur.style.backgroundColor = "rgba(30, 30, 30, 0.200)";
            objBur.style.boxShadow = "0px 0px 15px rgba(0, 0, 0, 0.26)";
            objBur.style.marginTop = "5px";

            
        }
        if (memoPositionBur - posCurseur > -1) {
            objBur.style.position = "static";
            objBur.style.backgroundColor = "transparent";
            objBur.style.marginLeft = "86%";
            objBur.style.boxShadow = "none";
            objBur.style.marginTop = "0px";
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
        if( screen.width <= 1440 && screen.width >= 1025){
            if (memoPositionNavAcc - posCurseur > -900) {
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
        }else if( screen.width <= 768 && screen.width >= 376){
            if (memoPositionNavAcc - posCurseur > -800) {
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
        }else if ((screen.width <= 1920 && screen.width >= 1441)){
            if (memoPositionNavAcc - posCurseur > -900) {
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
        }else if (screen.width <= 1024 && screen.width >= 769){
            if (memoPositionNavAcc - posCurseur > -800) {
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
        }else if(screen.width <= 375){
            if (memoPositionNavAcc - posCurseur > -800) {
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
        if( screen.width <= 1920 && screen.width >= 1025){
            if (memoPositionNavApro - posCurseur < -900 && memoPositionNavApro - posCurseur > -1700) {
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
        }else if( screen.width <= 768 && screen.width >= 376){
            if (memoPositionNavApro - posCurseur < -800 && memoPositionNavApro - posCurseur > -2200) {
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
        }else if( screen.width <= 1024 && screen.width >= 769){
            if (memoPositionNavApro - posCurseur < -800 && memoPositionNavApro - posCurseur > -2300) {
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
        }else if( screen.width <= 375 && screen.width >= 321){
            if (memoPositionNavApro - posCurseur < -800 && memoPositionNavApro - posCurseur > -2200){
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
        }else if( screen.width <= 320){
            if (memoPositionNavApro - posCurseur < -800 && memoPositionNavApro - posCurseur > -2000){
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
    }

    // NAVBAR > EXPERIENCE *************************************************
    let objNavExp = document.getElementById("NavExperience");
    // on mémorise la position de nav
    let memoPositionNavExp = objNavExp.offsetTop;


    function TextColorNavExperience() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if( screen.width <= 768 && screen.width >= 426){
            if (memoPositionNavExp - posCurseur < -2200 && memoPositionNavExp - posCurseur > -3600) {
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
        }else if( screen.width <= 425 && screen.width >= 376){
            if (memoPositionNavExp - posCurseur < -2200 && memoPositionNavExp - posCurseur > -3400) {
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
        }else if(screen.width <= 1920 && screen.width >= 1441){
            if (memoPositionNavExp - posCurseur < -1800 && memoPositionNavExp - posCurseur > -2600) {
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
        }else if(screen.width <= 1440 && screen.width >= 1025){
            if (memoPositionNavExp - posCurseur < -1700 && memoPositionNavExp - posCurseur > -2600) {
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
        }else if(screen.width <= 1024 && screen.width >= 769){
            if (memoPositionNavExp - posCurseur < -2300 && memoPositionNavExp - posCurseur > -3000) {
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
        }else if(screen.width <= 375 && screen.width >= 321){
            if (memoPositionNavExp - posCurseur < -2200 && memoPositionNavExp - posCurseur > -3300) {
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
        }else if(screen.width <= 320){
            if (memoPositionNavExp - posCurseur < -2000 && memoPositionNavExp - posCurseur > -3000) {
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
    }

    // NAVBAR > PROJET *******************************************************
    let objNavProj = document.getElementById("NavProjet");
    // on mémorise la position de nav
    let memoPositionNavProj = objNavProj.offsetTop;


    function TextColorNavProjet() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if( screen.width <= 768 && screen.width >= 426){
            if (memoPositionNavProj - posCurseur < -3600 && memoPositionNavProj - posCurseur > -4300) {
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
        }else if( screen.width <= 425 && screen.width >= 376){
            if (memoPositionNavProj - posCurseur < -3400 && memoPositionNavProj - posCurseur > -4800) {
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
        }else if(screen.width <= 1920 && screen.width >= 1441){
            if (memoPositionNavProj - posCurseur < -2600 && memoPositionNavProj - posCurseur > -3700) {
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
        }else if(screen.width <= 1440 && screen.width >= 1025){
            if (memoPositionNavProj - posCurseur < -2600 && memoPositionNavProj - posCurseur > -3600) {
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
        }else if(screen.width <= 1024 && screen.width >= 769){
            if (memoPositionNavProj - posCurseur < -3000 && memoPositionNavProj - posCurseur > -3900) {
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
        }else if(screen.width <= 375 && screen.width >= 321){
            if (memoPositionNavProj - posCurseur < -3300 && memoPositionNavProj - posCurseur > -4500) {
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
        }else if(screen.width <= 320){
            if (memoPositionNavProj - posCurseur < -3000 && memoPositionNavProj - posCurseur > -4100) {
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
    }

    // NAVBAR > CONTACT *********************************************************
    let objNavCont = document.getElementById("NavContact");
    // on mémorise la position de nav
    let memoPositionNavCont = objNavCont.offsetTop;


    function TextColorNavContact() {
        // position du curseur au scroll
        var posCurseur = this.pageYOffset;
        // je teste la différence de distance entre le scroll et nav
        if( screen.width <= 768 && screen.width >= 426){
            if (memoPositionNavCont - posCurseur < -4300) {
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
        }else if( screen.width <= 425 && screen.width >= 376){
            if (memoPositionNavCont - posCurseur < -4800) {
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
        }else if(screen.width <= 1920 && screen.width >= 1441){
            if (memoPositionNavCont - posCurseur < -3700) {
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
        }else if(screen.width <= 1440 && screen.width >= 1025){
            if (memoPositionNavCont - posCurseur < -3600) {
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
        }else if(screen.width <= 1024 && screen.width >= 769){
            if (memoPositionNavCont - posCurseur < -3900) {
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
        }else if(screen.width <= 375 && screen.width >= 321){
            if (memoPositionNavCont - posCurseur < -4500) {
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
        }else if(screen.width <= 320){
            if (memoPositionNavCont - posCurseur < -4100) {
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
    window.addEventListener("scroll", sticky2);
    window.addEventListener("scroll", TextColorNavAcceuil);
    window.addEventListener("scroll", TextColorNavApropos);
    window.addEventListener("scroll", TextColorNavExperience);
    window.addEventListener("scroll", TextColorNavProjet);
    window.addEventListener("scroll", TextColorNavContact);
    window.addEventListener("scroll", ScrollTopHidden);
})()


