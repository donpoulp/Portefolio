<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Raphael Petrozzi</title>

    <meta name="author" content="Raphael Petrozzi" />
    <meta name="description" content="Vous retrouverez ici le condensé de ma vie professionnelle de développeur full stack, mes expériences, mes projets, mes informations personnelles et un formulaire pour me contacter directement." />
    <link rel="icon" href="images/Raphael-petrozzi-Detourer.ico" type="image/x-icon" />

    <link rel="stylesheet" href="stylesheets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <section id="headerIMG">
    <header id="header">
            <nav id="nav">
                <label for="toggle" id="BurgerMenu">☰</label>
                <input type="checkbox" id="toggle">               
                <div id="MainNav" class="DisplayFlexDirectionRowEvenly">
                    <a href="#headerIMG" id="NavAcceuil">Accueil</a>
                    <a href="#Apropos" id="NavApropos">A propos</a>
                    <a href="#MesExperiences" id="NavExperience">Experiences</a>
                    <a href="#MesProjets" id="NavProjet">Mes projets</a>
                    <a href="#ContactezMoi" id="NavContact">Contact</a>
                    <div class="lang-menu">
                    <div class="selected-lang DisplayFlexDirectionRowBetween" id="fr">
                       <div class="txtsmartphone"> Français</div>
                    </div>
                    <ul>
                        <li class="DisplayFlexDirectionRowBetween">
                            <a href="indexENG.php" id="us" class="DisplayFlexDirectionRowBetween"><div class="txtsmartphone">English</div></a>
                        </li>
                    </ul>
                </div>
                </div>
                
            </nav>
        </header>

        <!-- SOUS-HEADER -->
        <section id="sous-header">
            <div class="DisplayFlexDirectionColumnAlignCenter">
                <h1>Raphael Petrozzi</h1>
                <h2>TECHNICIEN DEVELOPPEUR WEB</h2>
                <a href="#Apropos"><img loading="lazy" src="images/ScrollBottom.png" id="scroll_to_bottom" alt="logo scroll botom"/></a>
            </div>
        </section>
    </section>

    <main>

        <!-- SECTION A PROPOS DE MOI -->
        <section id="Apropos">

            <!-- TITRE -->
            <div id="MesTitles">
                <span>A propos de moi</span>
                <h2>A propos de moi</h2>
            </div>

            <!-- IMAGE DE PROFIL -->
            <div class="DisplayFlexDirectionRow DisplayMobile">
                <!-- <div class="DisplayFlexDirectionRow"> -->
                    <div class="imgbox">
                        <img loading="lazy" id="ImgDeProfil" src="images/Raphaël-PETROZZI-pasflou.JPG" alt="photo de profil"></img>
                    </div>

                    <!-- TEXT A PROPOS -->
                    <div class="DisplayFlexDirectionColumnBetween">
                        <!-- COORDONER -->
                        <div id="coordoner" class="DisplayFlexDirectionRowBetween CoordoneLaptop">
                            <div id="coordoner1">
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image fleche vers la droite orange"/><strong id="TitleCoord">Nom:</strong> <strong id="EmailTxt">Raphael
                                        Petrozzi</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image fleche vers la droite orange"/><strong id="TitleCoord">Tel:</strong> <strong id="EmailTxt">07 83 57 89 64</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image fleche vers la droite orange"/><strong id="TitleCoord">Ville:</strong> <strong id="EmailTxt">Chambéry</strong></p>
                            </div>
                            <div id="coordoner2">
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image fleche vers la droite orange"/><strong id="TitleCoord">Age:</strong> <strong id="EmailTxt">28/12/1999</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image fleche vers la droite orange"/><strong id="TitleCoord">Mail:</strong> <strong id="EmailTxt">raphael.petrozzi@gmail.com</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image fleche vers la droite orange"/><strong id="TitleCoord">Adresse:</strong> <strong id="EmailTxt">39 rue du bon pasteur</strong></p>
                            </div>
                        </div>
                <!-- </div> -->
                    <!-- TEXTE MISE EN AVANT -->
                    <div id="description">
                        <p>Jeune, passionné par le code, après un premier parcours de formation,
                             je suis actuellement enthousiasmé par l’opportunité qu’il m’a été 
                             donné d’entrer sur cette formation de Concepteur Développeur 
                             d'Applications.<br><br> Naturellement curieux, j'aime résoudre les problèmes
                              et je m'adapte facilement à différents environnements de travail et
                               j’aime à travailler en équipe. Je recherche une alternance pour 
                               parfaire mes compétences, acquérir davantage d'expérience et améliorer
                                rapidement mon efficacité.<br><br>En dehors de mes projets professionnels, 
                                je suis passionné de basket-ball et de voyages, mais avant de repartir,
                                 je suis prêt à relever de nouveaux défis à vos côtés.</p>
                    </div>
                    <!-- PROGRESS BARRE DE MAITRISE DES LANGUAGUES -->
                    <div id="MaitriseDesLanguagues">
                        <div>
                            <div id="TexteBarre"><span>HTML / CSS</span><i>80%</i></div>
                            <div class="barreGrise">
                                <div class="barreOrangeHtml"></div>
                            </div>
                        </div>
                        <div>
                            <div id="TexteBarre"><span>PHP</span><i>70%</i></div>
                            <div class="barreGrise">
                                <div class="barreOrangePHP"></div>
                            </div>
                        </div>
                        <div>
                            <div id="TexteBarre"><span>SQL</span><i>50%</i></div>
                            <div class="barreGrise">
                                <div class="barreOrangeSQL"></div>
                            </div>
                        </div>
                        <div>
                            <div id="TexteBarre"><span>GIT</span><i>75%</i></div>
                            <div class="barreGrise">
                                <div class="barreOrangeGIT"></div>
                            </div>
                        </div>
                        <div>
                            <div id="TexteBarre"><span>PYTHON</span><i>55%</i></div>
                            <div class="barreGrise">
                                <div class="barreOrangePYTHON"></div>
                            </div>
                        </div>
                        <div>
                            <div id="TexteBarre"><span>JAVA</span><i>50%</i></div>
                            <div class="barreGriseLast">
                                <div class="barreOrangeJAVA"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <!-- SECTION MES EXPERIENCES -->
        <section id="MesExperiences">
            <div id="MesTitles">
                <span>Mes Experiences</span>
                <h2>Mes Experiences</h2>
            </div>

            <!-- PARTIE GAUCHE -->
            <div class="DisplayFlexDirectionRowBetween displayMobileExperience">
                <!-- FORMATION -->
                <div class="DisplayFlexDirectionColumn">
                    <h3>Formation</h3>
                    <!-- NIVEAU EN LANGUES -->
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Niveau en langues</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation"> </div>
                        <div>
                            <ul>
                                <li>Anglais : B2</li>
                                <li>Italien : B2</li>
                            </ul>
                        </div>
                    </div>

                    <!-- MAITRISE LOGICIEL -->
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Maitrise de logiciel</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation"> </div>
                        <div>
                            <ul>
                                <li>Photoshop</li>
                                <li>Adobe premiere pro</li>
                                <li>Solide works</li>
                                <li>Figma</li>
                            </ul>
                        </div>
                    </div>

                    <!-- DIPLOME -->
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Diplomes</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation2"> </div>
                        <div id="ListesDiplomes">
                            <div id="CarreGris">2024-2026 (en cours)</div>
                            <div id="listeDiplome">Formation concepteurt développeur d'applications<br> Campus Numerique in the Alpes</div>
                            <div id="CarreGris">2021-2022</div>
                            <div id="listeDiplome">Formation développeur web Campus Numérique in the Alpes</div>
                            <div id="CarreGris">2017-2018</div>
                            <div id="listeDiplome">BAC STI2D option énergie environnement<br> (réalisation d'un projet
                                de groupe sur l'année entière)</div>
                            
                        </div>
                    </div>
                </div>

                <!-- EXPERIENCES PRO -->
                <div id="MesFormations">
                    <h3>Experience professionnelle</h3>
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Activites</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation3"> </div>
                        <div id="ExpPro">
                            <ul id="MesExpPro">
                                <li><strong>Développeur web</strong> chez MUB<div id="CarreGrisExpPro">2021-2022</div></li>
                                <li>Différentes missions d'<strong>intérim</strong><div id="CarreGrisExpPro">2020-2021</div></li>
                                <li class="hiddenMobilTxt"><strong>Employer polyvalent</strong><div>pour des grandes chaînes</div><div id="CarreGrisExpPro">2019-2020</div></li>                        
                                <li><strong>Arbitre officiel</strong> de basket-ball<div id="CarreGrisExpPro">2015-2017</div></li>
                                

                            </ul>
                        </div>
                    </div>
                    <!-- SOFT SKILLS -->
                    <div id="MesFormations">
                        <h3 id="h3SoftSkill">Soft skills</h3>
                        <!-- COMMUNICATION -->
                        <div class="DisplayFlexDirectionRow">
                            <div id="cercle"></div>
                            <h4>COMMUNICATION</h4>
                        </div>
                        <div class="DisplayFlexDirectionRow">
                            <div id="separation"> </div>
                            <div>
                                <ul>
                                    <li>Présentation claire des idées</li>
                                    <li>Attentif, à l'écoute</li>
                                </ul>
                            </div>
                        </div>
                        <!-- ADAPTABILITE -->
                        <div class="DisplayFlexDirectionRow">
                            <div id="cercle"></div>
                            <h4>ADAPTABILITÉ</h4>
                        </div>
                        <div class="DisplayFlexDirectionRow">
                            <div id="separation"> </div>
                            <div>
                                <ul>
                                    <li>Respectueux</li>
                                    <li>Coopératif</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <!-- Section Mes Projets -->
        <section id="MesProjets">
            <div id="MesTitles">
                <span>Mes Projets</span>
                <h2>Mes Projets</h2>
            </div>

            <div class="DisplayFlexDirectionColumnBetween">
            <!-- Boite de dialogue -->
            <div id="exemple">
                <div>
                    <p>MUB est l'entreprise qui m'a accompagné lors de l'alternance de mon bac + 2 développeur web.<br>
                        Le projet était la migration d'une version 1.6 à 1.7 d'un site Prestashop, tout en
                        apportant des améliorations et de nouveaux contenus au site.
                    </p>
                    <strong id="ExempleDate">Décembre 2021 - Décembre 2022</strong>
                </div>
            </div>
                <div class="DisplayFlexDirectionRowEvenly DisplayProjetMobile">
                    <div id="EncadrementGris">
                        <img loading="lazy" src="images/MUB.jpg" alt="image entreprise mub"/>
                        <div id="TitleProjet">
                            <h5>MUB - My utylity bag</h5>
                        </div>
                        <div class="BtnProjet">
                            <button class="BtnEnS" id="BtnCallEvent1"><a>En savoir plus</a></button>
                            <a class="BtnLink DisplayFlexDirectionRowCenter" href="https://www.myutilitybag.com/" target="_blank"><button id="BtnSite">Site
                                    Web</button></a>
                        </div>
                    </div>
                    <div id="exemple2">
                        <div>
                            <p>C'est le portefolio où vous vous trouvez en ce moment même. Ce portefolio a été
                                réalisé en 3 semaines avec les langages HTML / CSS / JS et sans l'utilisation de framework.
                                J'ai produit un bon travail de design et de dynamisme. Sa responsivité, avec bon nombre
                                de fonctionnalités essentielles ou non, avait pour simple but de m'exercer au code.</p>
                            <strong id="ExempleDate">Janvier 2023</strong>
                        </div>
                    </div>
                    <div id="EncadrementGris">
                        <img loading="lazy" src="images/Portefolio.jpg" alt="image de portefolio">
                        <div id="TitleProjet">
                            <h5>Portefolio</h5>
                        </div>
                        <div class="BtnProjet">
                            <a class="BtnLink2" href="#headerIMG"><button id="BtnSite">Site Web</button></a>
                            <a class="BtnLink2" href="https://github.com/donpoulp/Portefolio" target="_blank"><button id="BtnSite">GitHub</button></a>
                            <button class="BtnEnS2" id="BtnCallEvent2"><a>En savoir plus</a></button>
                        </div>
                    </div>
                </div>

                <div id="exemple3">
                        <div>
                            <p>Lors des 6 premiers mois de mon cursus TechDev avec le Campus Numérique in
                            the Alpes nous avons fait un gros module sur PHP et ce qui l'entoure. Lors de ce
                            module j'ai pu développer en équipe et par la suite seul ce site SpaceTrip qui
                            est un site de vente de voyages interstellaires</p>
                            <strong id="ExempleDate">Juillet 2022 - Décembre 2022</strong>
                        </div>
                    </div>

                <div id="Project" class="DisplayFlexDirectionRowEvenly DisplayProjetMobile">
                    <div id="EncadrementGris">
                        <img loading="lazy" src="images/Spacetrip.jpg" alt="image de mon projet spacetrip">
                        <div id="TitleProjet">
                            <h5>SpaceTrip</h5>
                        </div>
                        <div class="BtnProjet">
                            <button class="BtnEnS2" id="BtnCallEvent3"><a>En savoir plus</a></button>
                            <a class="BtnLink2" href=""><button id="BtnSite" target="_blank">Site Web</button></a>
                            <a class="BtnLink2" href="https://github.com/donpoulp/modulePHPsiteSP" target="_blank"><button id="BtnSite">GitHub</button></a>
                        </div>
                    </div>
                    <div id="exemple4">
                        <div>
                            <p>Projet de création d'un fansite avec une équipe de développeurs passionnés sur le
                                jeu "Waven" du studio Français "Ankama" qui devrait sortir pendant l'été 2023. L'idée est de
                                proposer un site contenant multiples fonctionnalités (deckbuild, guide...) aux joueurs
                                de ce jeu vidéo étant nous même des adeptes. Quoi de mieux qu'allier passion et travail.
                            </p>
                            <strong id="ExempleDate">Janvier 2023 - ( En cours )</strong>
                        </div>
                    </div>
                    <div id="EncadrementGris">
                        <img loading="lazy" src="images/Waven-1.jpg" alt="image du jeu waven">
                        <div id="TitleProjet">
                            <h5>Fansite - Waven</h5>
                        </div>
                        <div class="BtnProjet">
                            <a class="BtnLink2" href="https://www.figma.com/file/7WYczvh5NXvVqQRF5Fi0kE/Waven-Deckbuilder?node-id=79%3A227&t=65xbFDjRAg4CQvPT-0" target="_blank"><button id="BtnSite">Site Web</button></a>
                            <a class="BtnLink2" href="https://github.com/Thomas-Villegas/Waven_book" target="_blank"><button id="BtnSite">GitHub</button></a>
                            <button class="BtnEnS2" id="BtnCallEvent4"><a>En savoir plus</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION CONTACTEZ-MOI -->
        <section id="ContactezMoi">
            <!-- TITRE -->
            <div id="MesTitles">
                <span>Contactez-moi</span>
                <h2>Contactez-moi</h2>
            </div>

            <!-- BOX -->
            <div id="BlockContact" class="DisplayFlexDirectionRowBetween DisplayMobileContact">
                <div id="BlockContactGauche">
                    <!-- RESEAUX SOCIALS -->
                    <div id="CarreBlanc">
                        <div class="alignBox">
                            <div id="ImgContact" class="DisplayFlexDirectionRowCenter">
                                <img loading="lazy" src="images/Link.png" alt="logo de liens"/>
                            </div>
                            <h5>Réseaux Sociaux</h5>
                            <div id="LogoReseau" class="DisplayFlexDirectionRowEvenly">
                                <div class="Logo">
                                    <a href="https://www.linkedin.com/in/raphael-petrozzi/"><img loading="lazy" src="images/linkedin.png" alt="image logo de linkedin"/></a>
                                </div>
                                <div class="Logo">
                                    <a href="https://github.com/donpoulp"><img loading="lazy" src="images/Github.png" alt="logo github"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="DisplayFlexDirectionRowBetween DisplayMobileContact2">
                        <!-- MON MAIL -->
                        <div id="CarreBlanc2">
                            <div class="alignBox">
                                <div class="ImgContact2">
                                    <img loading="lazy" src="images/Message.png" alt="logo message"/>
                                </div>
                                <h5>Mon Mail</h5>
                                <p>raphael.petrozzi@gmail.com</p>
                            </div>
                        </div>
                        <!-- TELEPHONE -->
                        <div id="CarreBlanc2">
                            <div class="alignBox">
                                <div class="ImgContact2">
                                    <img loading="lazy" src="images/Phone.png" alt="logo de telephone"/>
                                </div>
                                <h5>Mon Téléphone</h5>
                                <p>07 83 57 89 64</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORMULAIRE DE CONTACT -->
                <div id="BlockContactGauche">
                    <form method="post" action="mail.php" id="CarreBlanc3" class="form DisplayFlexDirectionColumnEvenly">
                        <div id="Formulaire" class="DisplayFlexDirectionColumn">
                            <div class="DisplayFlexDirectionRowBetween" id="FormulaireTop">
                                <input type="text" id="fname" name="nom" placeholder="Votre nom" required>
                                <input type="mail" id="fname" name="mail" placeholder="Votre mail" required>
                            </div>
                            <input type="text" id="fname" name="sujet" placeholder="Sujet" required>
                            <textarea name="message" rows="8" id="message" placeholder="Message" required></textarea>
                            <div class="DisplayFlexDirectionRowCenter">
                                <input type="submit" placeholder="Envoyer" id="BtnEnvoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        <div id="scroll_to_top">
            <a href="#headerIMG"><img loading="lazy" src="images/ScrollTop.png" alt="Retourner en haut" /></a>
        </div>


    </main>
    <!-- FOOTER -->
    <footer id="footer" class="DisplayFlexDirectionColumnCenter DisplayFlexDirectionColumnAlignCenter">
        <h3>Raphaël Petrozzi</h3>

        <div class="copyright">
            &copy; Copyright <strong><span>Raphael Petrozzi</span></strong>. Tous droits réservés
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>