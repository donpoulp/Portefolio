<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Raphael Petrozzi</title>

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
                <div id="MainNav">
                    <a href="#headerIMG" id="NavAcceuil">Accueil</a>
                    <a href="#Apropos" id="NavApropos">A propos</a>
                    <a href="#MesExperiences" id="NavExperience">Experiences</a>
                    <a href="#MesProjets" id="NavProjet">Mes projets</a>
                    <a href="#ContactezMoi" id="NavContact">Contact</a>
                    <div class="lang-menu">
                    <div class="selected-lang" id="fr">
                       <div class="txtsmartphone"> Français</div>
                    </div>
                    <ul>
                        <li>
                            <a href="indexENG.php" id="us"><div class="txtsmartphone">English</div></a>
                        </li>
                    </ul>
                </div>
                </div>
                
            </nav>
        </header>

        <!-- SOUS-HEADER -->
        <section id="sous-header">
            <div id="sous-headerContainer">
                <h1>Raphael Petrozzi</h1>
                <h2>TECHNICIEN DEVELOPPEUR WEB</h2>
                <a href="#Apropos"><img src="images/ScrollBottom.png" id="scroll_to_bottom" /></a>
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
            <div id="AproposDeMoi">
                <img id="ImgDeProfil" src="images/me.jpg"></img>

                <!-- TEXT A PROPOS -->
                <div id="MainApropos">
                    <!-- COORDONER -->
                    <div id="coordoner">
                        <div id="coordoner1">
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Nom:</strong> <strong id="EmailTxt">Raphael
                                    Petrozzi</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Tel:</strong> <strong id="EmailTxt">07 83 57 89 64</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Ville:</strong> <strong id="EmailTxt">Chambéry</strong></p>
                        </div>
                        <div id="coordoner2">
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Age:</strong> <strong id="EmailTxt">23</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Mail:</strong> <strong id="EmailTxt">raphael.petrozzi@le-campus-numerique.fr</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Adresse:</strong> <strong id="EmailTxt">39
                                    rue du bon pasteur</strong></p>
                        </div>
                    </div>
                    <!-- TEXTE MISE EN AVANT -->
                    <div id="description">
                        <p>Développeur junior depuis décembre 2022, suite à une formation équivalent bac +2
                            de développeur web fullstack "en alternance".<br> Je souhaite continuer à me former
                            dans ce domaine en débutant une licence de Concepteur développeur d'applications en
                            Septembre 2023. Je cherche à m'exercer au sein d'équipes ou d'entreprises qui travaillent
                            sur des projets de développement web. En attendant je me perfectionne au travers de projets tel que ce Portefolio
                            fait sans aucun Framework.</p>
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


            </div>
        </section>

        <!-- SECTION MES EXPERIENCES -->
        <section id="MesExperiences">
            <div id="MesTitles">
                <span>Mes Experiences</span>
                <h2>Mes Experiences</h2>
            </div>

            <!-- PARTIE GAUCHE -->
            <div id="MesExpGauche">
                <!-- FORMATION -->
                <div id="MesFormations">
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
                                <li><strong>Employer polyvalent</strong><div id="hiddenMobilTxt">pour des grandes chaînes</div><div id="CarreGrisExpPro">2019-2020</div></li>                        
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

            <div id="alignProjet">
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
                <div id="Projects">
                    <div id="EncadrementGris">
                        <img src="images/MUB.jpg" />
                        <div id="TitleProjet">
                            <h5>MUB - My utylity bag</h5>
                        </div>
                        <div id="BtnProjet">
                            <button class="BtnEnS" id="BtnCallEvent1"><a>En savoir plus</a></button>
                            <a id="BtnLink" href="https://www.myutilitybag.com/" target="_blank"><button id="BtnSite">Site
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
                        <img src="images/Portefolio.jpg">
                        <div id="TitleProjet">
                            <h5>Portefolio</h5>
                        </div>
                        <div id="BtnProjet">
                            <a id="BtnLink2" href="#headerIMG"><button id="BtnSite">Site Web</button></a>
                            <a id="BtnLink2" href="https://github.com/donpoulp/Portefolio" target="_blank"><button id="BtnSite">GitHub</button></a>
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

                <div id="Project">
                    <div id="EncadrementGris">
                        <img src="images/Spacetrip.jpg">
                        <div id="TitleProjet">
                            <h5>SpaceTrip</h5>
                        </div>
                        <div id="BtnProjet">
                            <button class="BtnEnS2" id="BtnCallEvent3"><a>En savoir plus</a></button>
                            <a id="BtnLink2" href=""><button id="BtnSite" target="_blank">Site Web</button></a>
                            <a id="BtnLink2" href="https://github.com/donpoulp/modulePHPsiteSP" target="_blank"><button id="BtnSite">GitHub</button></a>
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
                        <img src="images/Waven-1.jpg">
                        <div id="TitleProjet">
                            <h5>Fansite - Waven</h5>
                        </div>
                        <div id="BtnProjet">
                            <a id="BtnLink2" href="https://www.figma.com/file/7WYczvh5NXvVqQRF5Fi0kE/Waven-Deckbuilder?node-id=79%3A227&t=65xbFDjRAg4CQvPT-0" target="_blank"><button id="BtnSite">Site Web</button></a>
                            <a id="BtnLink2" href="https://github.com/Thomas-Villegas/Waven_book" target="_blank"><button id="BtnSite">GitHub</button></a>
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
            <div id="BlockContact">
                <div id="BlockContactGauche">
                    <!-- RESEAUX SOCIALS -->
                    <div id="CarreBlanc">
                        <div id="alignBox">
                            <div id="ImgContact">
                                <img src="images/Link.png" />
                            </div>
                            <h5>Réseaux Sociaux</h5>
                            <div id="LogoReseau">
                                <div id="Logo">
                                    <a href="https://www.linkedin.com/in/raphael-petrozzi/"><img src="images/linkedin.png" /></a>
                                </div>
                                <div id="Logo">
                                    <a href="https://github.com/donpoulp"><img src="images/Github.png" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="DisplayFlexDirectionRowBetween">
                        <!-- MON MAIL -->
                        <div id="CarreBlanc2">
                            <div id="alignBox">
                                <div id="ImgContact2">
                                    <img src="images/Message.png" />
                                </div>
                                <h5>Mon Mail</h5>
                                <p>leraphistoleur@gmail.com</p>
                            </div>
                        </div>
                        <!-- TELEPHONE -->
                        <div id="CarreBlanc2">
                            <div id="alignBox">
                                <div id="ImgContact2">
                                    <img src="images/Phone.png" />
                                </div>
                                <h5>Mon Téléphone</h5>
                                <p>07 83 57 89 64</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORMULAIRE DE CONTACT -->
                <div id="BlockContactGauche">
                    <form method="post" action="mail.php" id="CarreBlanc3">
                        <div id="Formulaire">
                            <div class="DisplayFlexDirectionRowBetween" id="FormulaireTop">
                                <input type="text" id="fname" name="nom" placeholder="Votre nom" required>
                                <input type="mail" id="fname" name="mail" placeholder="Votre mail" required>
                            </div>
                            <input type="text" id="fname" name="sujet" placeholder="Sujet" required>
                            <textarea name="message" rows="8" id="message" placeholder="Message" required></textarea>
                            <div id="BtnFormu">
                                <input type="submit" placeholder="Envoyer" id="BtnEnvoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        <div id="scroll_to_top">
            <a href="#headerIMG"><img src="images/ScrollTop.png" alt="Retourner en haut" /></a>
        </div>


    </main>
    <!-- FOOTER -->
    <footer id="footer">
        <h3>Raphaël Petrozzi</h3>

        <div class="copyright">
            &copy; Copyright <strong><span>Raphael Petrozzi</span></strong>. Tous droits réservés
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>