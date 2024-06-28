<!DOCTYPE html>
<html lang="eng">

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
                    <a href="#headerIMG" id="NavAcceuil">Welcome</a>
                    <a href="#Apropos" id="NavApropos">About us</a>
                    <a href="#MesExperiences" id="NavExperience">Experiments</a>
                    <a href="#MesProjets" id="NavProjet">My projects</a>
                    <a href="#ContactezMoi" id="NavContact">Contact</a>
                    <div class="lang-menu">
                    <div class="selected-lang" id="us">
                    <div class="txtsmartphone">English</div>
                    </div>
                    <ul>
                        <li>
                            <a href="index.php" id="fr"><div class="txtsmartphone">Français</div></a>
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
                <h2>WEB DEVELOPMENT TECHNICIAN</h2>
                <a href="#Apropos"><img src="images/ScrollBottom.png" id="scroll_to_bottom" /></a>
            </div>
        </section>
    </section>

    <main>

        <!-- SECTION A PROPOS DE MOI -->
        <section id="Apropos">

            <!-- TITRE -->
            <div id="MesTitles">
                <span>About me</span>
                <h2>About me</h2>
            </div>

            <!-- IMAGE DE PROFIL -->
            <div id="AproposDeMoi">
                <img id="ImgDeProfil" src="images/me.jpg"></img>

                <!-- TEXT A PROPOS -->
                <div id="MainApropos">
                    <!-- COORDONER -->
                    <div id="coordoner">
                        <div id="coordoner1">
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Name:</strong> <strong id="EmailTxt">Raphael
                                    Petrozzi</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Phone:</strong> <strong id="EmailTxt">07 83 57 89 64</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">City:</strong> <strong id="EmailTxt">Chambéry</strong></p>
                        </div>
                        <div id="coordoner2">
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Age:</strong> <strong id="EmailTxt">23</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">E-mail:</strong> <strong id="EmailTxt">raphael.petrozzi@le-campus-numerique.fr</strong></p>
                            <p><img src="images/FlecheDroiteOr.png" /><strong id="TitleCoord">Adress:</strong> <strong id="EmailTxt">39
                                    rue du bon pasteur</strong></p>
                        </div>
                    </div>
                    <!-- TEXTE MISE EN AVANT -->
                    <div id="description">
                        <p>Junior developer since December 2022, following a Bac +2 equivalent training course as a fullstack web developer.<br>
                        I would like to continue my training
                            in this field by starting a degree in Application Design and Development in
                            September 2023. I'm looking to work in teams or companies that work on web development projects.
                            web development projects. In the meantime I'm perfecting my skills through projects such as this Portfolio
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
                <span>My Experiences</span>
                <h2>My Experiences</h2>
            </div>

            <!-- PARTIE GAUCHE -->
            <div id="MesExpGauche">
                <!-- FORMATION -->
                <div id="MesFormations">
                    <h3>Training</h3>
                    <!-- NIVEAU EN LANGUES -->
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Language level</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation"> </div>
                        <div>
                            <ul>
                                <li>English : B2</li>
                                <li>Italian : B2</li>
                            </ul>
                        </div>
                    </div>

                    <!-- MAITRISE LOGICIEL -->
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Software expertise</h4>
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
                        <h4>Diplomas</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation2"> </div>
                        <div id="ListesDiplomes">
                            <div id="CarreGris">2021-2022</div>
                            <div id="listeDiplome">Web developer training Campus Numérique in the Alpes</div>
                            <div id="CarreGris">2017-2018</div>
                            <div id="listeDiplome">BAC STI2D energy and environment option<br> (carrying out a group
                                over the whole year)</div>
                            
                        </div>
                    </div>
                </div>

                <!-- EXPERIENCES PRO -->
                <div id="MesFormations">
                    <h3>Professional experience</h3>
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Activites</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation3"> </div>
                        <div id="ExpPro">
                            <ul id="MesExpPro">
                                <li><strong>Web Developer</strong> with MUB<div id="CarreGrisExpPro">2021-2022</div></li>
                                <li>Various interim assignments<div id="CarreGrisExpPro">2020-2021</div></li>
                                <li><strong>Multi-skilled worker</strong><div id="hiddenMobilTxt">for major chains</div><div id="CarreGrisExpPro">2019-2020</div></li>                        
                                <li>Official basket ball referee<div id="CarreGrisExpPro">2015-2017</div></li>
                                

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
                                    <li>Clear presentation of ideas</li>
                                    <li>Attentive and attentive</li>
                                </ul>
                            </div>
                        </div>
                        <!-- ADAPTABILITE -->
                        <div class="DisplayFlexDirectionRow">
                            <div id="cercle"></div>
                            <h4>ADAPTABILITY</h4>
                        </div>
                        <div class="DisplayFlexDirectionRow">
                            <div id="separation"> </div>
                            <div>
                                <ul>
                                    <li>Respectful</li>
                                    <li>Cooperative</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <!-- Section Mes Projets -->
        <section id="MesProjets">
            <div id="MesTitles">
                <span>My Projects</span>
                <h2>My Projects</h2>
            </div>

            <div id="alignProjet">
            <!-- Boite de dialogue -->
            <div id="exemple">
                <div>
                    <p>MUB is the company that worked with me during my work-study course for my bac + 2 web developer diploma.
                        The project involved migrating a Prestashop site from version 1.6 to 1.7, while at the same time
                        improvements and new content to the site.
                    </p>
                    <strong id="ExempleDate">December 2021 - December 2022</strong>
                </div>
            </div>
                <div id="Projects">
                    <div id="EncadrementGris">
                        <img src="images/MUB.jpg" />
                        <div id="TitleProjet">
                            <h5>MUB - My utylity bag</h5>
                        </div>
                        <div id="BtnProjet">
                            <button class="BtnEnS" id="BtnCallEvent1"><a>Find out more</a></button>
                            <a id="BtnLink" href="https://www.myutilitybag.com/" target="_blank"><button id="BtnSite">Website</button></a>
                        </div>
                    </div>
                    <div id="exemple2">
                        <div>
                            <p>This is the portfolio you're in right now. This portfolio was
                                created in 3 weeks using HTML / CSS / JS and no framework.
                                I produced a good, dynamic design. Its responsiveness, with a good number
                                of essential and non-essential functions, was simply intended to give me practice in coding.</p>
                            <strong id="ExempleDate">January 2023</strong>
                        </div>
                    </div>
                    <div id="EncadrementGris">
                        <img src="images/Portefolio.jpg">
                        <div id="TitleProjet">
                            <h5>Portfolio</h5>
                        </div>
                        <div id="BtnProjet">
                            <a id="BtnLink2" href="#headerIMG"><button id="BtnSite">Web Site</button></a>
                            <a id="BtnLink2" href="https://github.com/donpoulp/Portefolio" target="_blank"><button id="BtnSite">GitHub</button></a>
                            <button class="BtnEnS2" id="BtnCallEvent2"><a>Find out more</a></button>
                        </div>
                    </div>
                </div>

                <div id="exemple3">
                        <div>
                            <p>During the first 6 months of my TechDev course with Campus Numérique in
                            the Alpes, we did a big module on PHP and everything that surrounds it. During this
                            module I was able to develop the SpaceTrip site, which is a site for selling
                            is a site for selling interstellar travel</p>
                            <strong id="ExempleDate">July 2022 - December 2022</strong>
                        </div>
                    </div>

                <div id="Project">
                    <div id="EncadrementGris">
                        <img src="images/Spacetrip.jpg">
                        <div id="TitleProjet">
                            <h5>SpaceTrip</h5>
                        </div>
                        <div id="BtnProjet">
                            <button class="BtnEnS2" id="BtnCallEvent3"><a>Find out more</a></button>
                            <a id="BtnLink2" href=""><button id="BtnSite" target="_blank">Web Site</button></a>
                            <a id="BtnLink2" href="https://github.com/donpoulp/modulePHPsiteSP" target="_blank"><button id="BtnSite">GitHub</button></a>
                        </div>
                    </div>
                    <div id="exemple4">
                        <div>
                            <p>Project to create a fansite with a team of passionate developers for the game
                                game "Waven" from the French studio "Ankama", due for release in the summer of 2023. The idea is to
                                offer a site with multiple features (deckbuild, guide...) to players of this video game
                                of this video game, as we ourselves are fans. What better way to combine passion and work.
                            </p>
                            <strong id="ExempleDate">January 2023 - ( In progress )</strong>
                        </div>
                    </div>
                    <div id="EncadrementGris">
                        <img src="images/Waven-1.jpg">
                        <div id="TitleProjet">
                            <h5>Fansite - Waven</h5>
                        </div>
                        <div id="BtnProjet">
                            <a id="BtnLink2" href="https://www.figma.com/file/7WYczvh5NXvVqQRF5Fi0kE/Waven-Deckbuilder?node-id=79%3A227&t=65xbFDjRAg4CQvPT-0" target="_blank"><button id="BtnSite">Web Site</button></a>
                            <a id="BtnLink2" href="https://github.com/Thomas-Villegas/Waven_book" target="_blank"><button id="BtnSite">GitHub</button></a>
                            <button class="BtnEnS2" id="BtnCallEvent4"><a>Find out more</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION CONTACTEZ-MOI -->
        <section id="ContactezMoi">
            <!-- TITRE -->
            <div id="MesTitles">
                <span>Contact me at</span>
                <h2>Contact me at</h2>
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
                            <h5>Social Networks</h5>
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
                                <h5>E-mail</h5>
                                <p>leraphistoleur@gmail.com</p>
                            </div>
                        </div>
                        <!-- TELEPHONE -->
                        <div id="CarreBlanc2">
                            <div id="alignBox">
                                <div id="ImgContact2">
                                    <img src="images/Phone.png" />
                                </div>
                                <h5>My phone</h5>
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
                                <input type="text" id="fname" name="nom" placeholder="Name" required>
                                <input type="mail" id="fname" name="mail" placeholder="E-mail" required>
                            </div>
                            <input type="text" id="fname" name="sujet" placeholder="Subject" required>
                            <textarea name="message" rows="8" id="message" placeholder="Message" required></textarea>
                            <div id="BtnFormu">
                                <input type="submit" placeholder="Send" id="BtnEnvoyer">
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
            &copy; Copyright <strong><span>Raphael Petrozzi</span></strong>. All rights reserved
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>