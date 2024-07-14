<!DOCTYPE html>
<html lang="en">

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
                    <a href="#headerIMG" id="NavAcceuil">Home</a>
                    <a href="#Apropos" id="NavApropos">About us</a>
                    <a href="#MesExperiences" id="NavExperience">Experiences</a>
                    <a href="#MesProjets" id="NavProjet">My projects</a>
                    <a href="#ContactezMoi" id="NavContact">Contact</a>
                    <div class="lang-menu">
                    <div class="selected-lang DisplayFlexDirectionRowBetween" id="us">
                       <div class="txtsmartphone"> English</div>
                    </div>
                    <ul>
                        <li class="DisplayFlexDirectionRowBetween">
                            <a href="index.php" id="fr" class="DisplayFlexDirectionRowBetween"><div class="txtsmartphone">Français</div></a>
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
                <h2>WEB DEVELOPMENT TECHNICIAN</h2>
                <a href="#Apropos"><img loading="lazy" src="images/ScrollBottom.png" id="scroll_to_bottom" alt="logo scroll botom"/></a>
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
            <div class="DisplayFlexDirectionRow DisplayMobile">
                <!-- <div class="DisplayFlexDirectionRow"> -->
                    <div class="imgbox">
                        <img loading="lazy" id="ImgDeProfil" src="images/Raphaël-PETROZZI-pasflou.JPG" alt="profile photo"></img>
                    </div>

                    <!-- TEXT A PROPOS -->
                    <div class="DisplayFlexDirectionColumnBetween">
                        <!-- COORDONER -->
                        <div id="coordoner" class="DisplayFlexDirectionRowBetween CoordoneLaptop">
                            <div id="coordoner1">
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image right arrow orange"/><strong id="TitleCoord">Name:</strong> <strong id="EmailTxt">Raphael
                                        Petrozzi</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image right arrow orange"/><strong id="TitleCoord">Phone:</strong> <strong id="EmailTxt">07 83 57 89 64</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image right arrow orange"/><strong id="TitleCoord">City:</strong> <strong id="EmailTxt">Chambéry</strong></p>
                            </div>
                            <div id="coordoner2">
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image right arrow orange"/><strong id="TitleCoord">Age:</strong> <strong id="EmailTxt">28/12/1999</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image right arrow orange"/><strong id="TitleCoord">Email:</strong> <strong id="EmailTxt">raphael.petrozzi@gmail.com</strong></p>
                                <p><img loading="lazy" src="images/FlecheDroiteOr.png" alt="image right arrow orange"/><strong id="TitleCoord">Address:</strong> <strong id="EmailTxt">39 rue du bon pasteur</strong></p>
                            </div>
                        </div>
                    <!-- TEXTE MISE EN AVANT -->
                    <div id="description">
                        <p>I'm young, passionate about coding, and after an initial training course,
                        I'm really excited about the opportunity I've been given to 
                        opportunity I've been given to enrol on this Applications 
                        course.<br><br>I'm naturally curious, enjoy solving problems
                        adapt easily to different work environments and enjoy working in a team.
                        I enjoy working as part of a team. I'm looking for a work-linked placement to 
                        perfect my skills, gain more experience and rapidly improve my efficiency.
                        my efficiency.<br><br>Apart from my professional projects, 
                        I'm passionate about basketball and travelling, but before I leave,
                        I'm ready to take on new challenges alongside you.</p>
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
                <span>My Experiences</span>
                <h2>My Experiences</h2>
            </div>

            <!-- PARTIE GAUCHE -->
            <div class="DisplayFlexDirectionRowBetween displayMobileExperience">
                <!-- FORMATION -->
                <div class="DisplayFlexDirectionColumn">
                    <h3>Formation</h3>
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
                        <h4>Qualifications</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation2"> </div>
                        <div id="ListesDiplomes">
                            <div id="CarreGris">2024-2026 (in progress)</div>
                            <div id="listeDiplome">Application designer and developer training<br>at Campus Numerique in the Alpes</div>
                            <div id="CarreGris">2021-2022</div>
                            <div id="listeDiplome">Web developer training at Campus Numérique in the Alpes</div>
                            <div id="CarreGris">2017-2018</div>
                            <div id="listeDiplome">BAC STI2D energy and environment option<br> (carrying out a group
                            for the whole year)</div>
                            
                        </div>
                    </div>
                </div>

                <!-- EXPERIENCES PRO -->
                <div id="MesFormations">
                    <h3>Professional experience</h3>
                    <div class="DisplayFlexDirectionRow">
                        <div id="cercle"></div>
                        <h4>Activities</h4>
                    </div>
                    <div class="DisplayFlexDirectionRow">
                        <div id="separation3"> </div>
                        <div id="ExpPro">
                            <ul id="MesExpPro">
                                <li><strong>Web Developer</strong> at MUB<div id="CarreGrisExpPro">2021-2022</div></li>
                                <li>Various missions&nbsp;<strong>temporary</strong><div id="CarreGrisExpPro">2020-2021</div></li>
                                <li class="hiddenMobilTxt"><strong>Multi-skilled worker</strong><div>for major chains</div><div id="CarreGrisExpPro">2019-2020</div></li>                        
                                <li>Basketball&nbsp;<strong>official referee</strong> <div id="CarreGrisExpPro">2015-2017</div></li>
                                

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
                                    <li>Attentive and listening</li>
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

            <div class="DisplayFlexDirectionColumnBetween">
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
                <div class="DisplayFlexDirectionRowEvenly DisplayProjetMobile">
                    <div id="EncadrementGris">
                        <img loading="lazy" src="images/MUB.jpg" alt="corporate image mub"/>
                        <div id="TitleProjet">
                            <h5>MUB - My utylity bag</h5>
                        </div>
                        <div class="BtnProjet">
                            <button class="BtnEnS" id="BtnCallEvent1"><a>Find out more</a></button>
                            <a class="BtnLink DisplayFlexDirectionRowCenter" href="https://www.myutilitybag.com/" target="_blank"><button id="BtnSite">Website</button></a>
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
                        <img loading="lazy" src="images/Portefolio.jpg" alt="portfolio image">
                        <div id="TitleProjet">
                            <h5>Portfolio</h5>
                        </div>
                        <div class="BtnProjet">
                            <a class="BtnLink2" href="#headerIMG"><button id="BtnSite">Website</button></a>
                            <a class="BtnLink2" href="https://github.com/donpoulp/Portefolio" target="_blank"><button id="BtnSite">GitHub</button></a>
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

                <div id="Project" class="DisplayFlexDirectionRowEvenly DisplayProjetMobile">
                    <div id="EncadrementGris">
                        <img loading="lazy" src="images/Spacetrip.jpg" alt="image of my spacetrip project">
                        <div id="TitleProjet">
                            <h5>SpaceTrip</h5>
                        </div>
                        <div class="BtnProjet">
                            <button class="BtnEnS2" id="BtnCallEvent3"><a>Find out more</a></button>
                            <a class="BtnLink2" href=""><button id="BtnSite" target="_blank">Website</button></a>
                            <a class="BtnLink2" href="https://github.com/donpoulp/modulePHPsiteSP" target="_blank"><button id="BtnSite">GitHub</button></a>
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
                        <img loading="lazy" src="images/Waven-1.jpg" alt="waven game image">
                        <div id="TitleProjet">
                            <h5>Fansite - Waven</h5>
                        </div>
                        <div class="BtnProjet">
                            <a class="BtnLink2" href="https://www.figma.com/file/7WYczvh5NXvVqQRF5Fi0kE/Waven-Deckbuilder?node-id=79%3A227&t=65xbFDjRAg4CQvPT-0" target="_blank"><button id="BtnSite">Website</button></a>
                            <a class="BtnLink2" href="https://github.com/Thomas-Villegas/Waven_book" target="_blank"><button id="BtnSite">GitHub</button></a>
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
            <div id="BlockContact" class="DisplayFlexDirectionRowBetween DisplayMobileContact">
                <div id="BlockContactGauche">
                    <!-- RESEAUX SOCIALS -->
                    <div id="CarreBlanc">
                        <div class="alignBox">
                            <div id="ImgContact" class="DisplayFlexDirectionRowCenter">
                                <img loading="lazy" src="images/Link.png" alt="link logo"/>
                            </div>
                            <h5>Social Networks</h5>
                            <div id="LogoReseau" class="DisplayFlexDirectionRowEvenly">
                                <div class="Logo">
                                    <a href="https://www.linkedin.com/in/raphael-petrozzi/"><img loading="lazy" src="images/linkedin.png" alt="image linkedin logo"/></a>
                                </div>
                                <div class="Logo">
                                    <a href="https://github.com/donpoulp"><img loading="lazy" src="images/Github.png" alt="github logo"/></a>
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
                                <h5>Email</h5>
                                <p>raphael.petrozzi@gmail.com</p>
                            </div>
                        </div>
                        <!-- TELEPHONE -->
                        <div id="CarreBlanc2">
                            <div class="alignBox">
                                <div class="ImgContact2">
                                    <img loading="lazy" src="images/Phone.png" alt="telephone logo"/>
                                </div>
                                <h5>My phone</h5>
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
                                <input type="text" id="fname" name="nom" placeholder="Your name" required>
                                <input type="mail" id="fname" name="mail" placeholder="Your email" required>
                            </div>
                            <input type="text" id="fname" name="sujet" placeholder="Subject" required>
                            <textarea name="message" rows="8" id="message" placeholder="Message" required></textarea>
                            <div class="DisplayFlexDirectionRowCenter">
                                <input type="submit" placeholder="Send" id="BtnEnvoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
        <div id="scroll_to_top">
            <a href="#headerIMG"><img loading="lazy" src="images/ScrollTop.png" alt="Back to top" /></a>
        </div>


    </main>
    <!-- FOOTER -->
    <footer id="footer" class="DisplayFlexDirectionColumnCenter DisplayFlexDirectionColumnAlignCenter">
        <h3>Raphaël Petrozzi</h3>

        <div class="copyright">
            &copy; Copyright <strong><span>Raphael Petrozzi</span></strong>. All rights reserved
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>