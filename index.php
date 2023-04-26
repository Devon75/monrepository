<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Site CV Karl Mekuie - Java Developper Ancenis</title>
  </head>

  <body class="w3-theme-d3">

    <!---------------------------------------------------- HEADER ---------------------------------------------------->

    <header class="premier" id="un">
      <h1>Karl Joris Mekuie M'Obiang</h1>
      <address>07.65.19.62.22 jorisobiang306@gmail.com</address>
    </header>
    <!---------------------------------------------------- NAVBAR ---------------------------------------------------->

    <nav id="navigation">
      <div class="logo">folio<b>.</b></div>
      <ul class="navItems">
        <li><a href="#un"><i class="fa-solid fa-house"></i></a></li>
        <li><a href="#cv">CV</a></li>
        <li><a href="#folio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="links" id="link">
        <a
          href="https://www.linkedin.com/in/karl-joris-mekuie-m-obiang-a90a27251/"
        >
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </nav>

    <main>

      <!---------------------------------------------------- section HOME ---------------------------------------------------->

      <section id="home">
        <div class="Home">
          <div class="headers">
            <h1 class="titleP" id="titlep"></h1>
            <h3 class="title"><?php echo "Karl Joris Mekuie M'Obiang"; ?></h3>
          </div>

          <article>
            Je suis Karl Joris Mekuie M'Obiang, étudiant en information
            passionné par la technologie et à la recherche d'opportunités pour
            développer mes compétences en développement web, en analyse de
            données et en gestion de projets. Si vous êtes intéressé par mon
            profil, n'hésitez pas à me contacter pour discuter de vos projets et
            de la manière dont je peux y contribuer.
          </article>
          <button id="homeBtn"></button>
        </div>
      </section>

      <!---------------------------------------------------- section CV ---------------------------------------------------->

      <section class="sectionCv">
        <div class="TitleCompetences">
          <h1 class="titre"><?php echo "Découvrez mes compétences"; ?></h1>
        </div>
        <div class="content">
          <div class="Developpement">
            <img src="image/icons-code.png" alt="icon_developpement" />
            <h2 class="titre2"><?php echo "Développement"; ?></h2>
            <article>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit
              numquam, soluta dolore reiciendis quis debitis cupiditate
              consequatur neque ipsum, necessitatibus explicabo asperiores,
              beatae nam? Quasi ea nobis odio voluptas commodi amet tenetur
              saepe dolor, sint numquam temporibus autem neque provident, eos
              ex! Doloremque aut neque blanditiis, et temporibus possimus nam
              quis accusantium. Rerum molestiae iure at cumque, aspernatur
              perferendis ipsam cupiditate velit veniam dolore consequatur enim
              fugit quas ex minima!
            </article>
          </div>
          <div class="Responsive">
            <img src="image/icons-responsive.png" alt="icon_responsive" />
            <h2 class="titre2"><?php echo "Responsive design"; ?></h2>
            <article>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta
              porro atque explicabo molestiae nobis commodi dignissimos, a
              pariatur quasi iusto aliquid odio saepe praesentium nesciunt
              voluptates dolor vel nam impedit? Id voluptate eveniet dicta autem
              suscipit ullam culpa rerum provident, possimus, placeat impedit
              est odio totam aliquam cupiditate ex veniam sapiente porro quos.
              Nemo sapiente odio est possimus reiciendis cumque. Ullam veniam
              eius eos, aliquam velit laboriosam repudiandae suscipit quos?
              Pariatur quidem mollitia aut exercitationem ducimus nulla facilis
              nobis! Deleniti voluptas ratione dignissimos repellendus veritatis
              sit corrupti tenetur sunt ipsa?
            </article>
          </div>
          <div class="Communication">
            <img src="image/icons-communication.png" alt="icon_communication" />
            <h2 class="titre2"><?php echo "Communication"; ?></h2>
            <article>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti
              dolorem quas vitae, sequi, quia tempore reiciendis dolores ad
              obcaecati omnis enim in officiis id commodi qui optio porro
              nostrum alias. Rerum ad, soluta officiis quod enim accusantium
              dicta labore sit obcaecati. Nisi fugit impedit eius velit
              inventore, officiis omnis nobis aspernatur reprehenderit placeat
              expedita, id necessitatibus eaque corporis autem ipsam! Ipsa
              corrupti amet dolorum numquam incidunt explicabo sint ipsum
              inventore officia qui, expedita, labore laborum maxime harum a
              dolores laudantium dolor? Sunt dignissimos corrupti hic aut eos!
              Deleniti, tempore doloremque!
            </article>
          </div>
        </div>
        <button id="btnCV"></button>
      </section>

      <!---------------------------------------------------- PARALLAX N°1 ---------------------------------------------------->

      <div class="parallax parallax1"></div>

      <!---------------------------------------------------- section SAVOIR-FAIRE ---------------------------------------------------->

      <section class="savoirFaire">
        <div class="grid-container_CV" id="cv">
          <div class="Emploi">
            <h1 class="titre"><?php echo "Mes connaissances"; ?></h1>
          </div>
          <div class="contente">
            <div class="Experiences">
              <h3><?php echo "Expériences"; ?></h3>
              <h4>Agent de production octobre 2022 – décembre 2022</h4>
              <article>
                <p></p>Adecam industrie, Chapelle-basse-mer<br />
                J'ai travaillé du 17 octobre 2022 au 9 décenbre 2022.
                J'assemblais des composants métalliques à l'aide de plan avec
                des machines automatiques.</p></article>
              </article>
              <h4>Agent de quai sept 2022</h4>
              <article>
                Mondial Relay, Loroux-bottereaux<br />
                J'ai travaillé du 5 sept 2022 au 17 sept 2022. Je déchargeais
                les colis des camions sur une trieuse automatique. Puis je
                triais manuellement avec un scanner les colis mal scanner.
              </article>
              <h4>Préparateur de commandes mai 2022 – juillet 2022</h4>
              <article>
                U Logistique, Saint-Aignan-Grandlieu<br />
                J'ai travaillé du 28 mai 2022 au 3 juillet 2022. Je préparais
                des commandes sur des palettes à l'aide d'une boîte vocale et
                d'un transpalette.
              </article>
            </div>
            <div class="Competences">
              <h3>Compétences</h3>
              <h4>Techniques & logiciels</h4>
              <p>Langages:</p>
              <ul>
                <li>HTML5 / CSS3</li>
                <li>HTML DOM</li>
                <li>Browser BOM</li>
                <li>Web APIs</li>
                <li>Javascript / JQuery</li>
                <li>PHP</li>
                <li>SQL</li>
                <li>Python</li>
                <li>C#</li>
              </ul>
              <p>Logiciels:</p>
              <ul>
                <li>NetBeans</li>
                <li>Visual Studio</li>
                <li>PyCharm</li>
                <li>Responsive Bootstrap Builder</li>
              </ul>
            </div>
            <div class="Formation">
              <h3>Formation</h3>
              <h4>En cours : BTS SIO SLAM</h4>
              <p>
                Services Informatique aux Organisations option (Solutions
                Logicielles et Applications Métiers)<br />
                Au CNED de Rennes
              </p>
              <h4>2020 : BAC S-SI</h4>
              <p>
                Baccalauréat scientifique option (Science de l'ingénieur)<br />
                Au CNED de Rennes
              </p>
            </div>
            <div class="infocompl">
              <h3>Activités</h3>
              <p>
                Langues: français, anglais courant<br />
                Centres d’intérêts : lecture, nouvelles technologies, sport
              </p>
            </div>
          </div>
        </div>
      </section>

      <!---------------------------------------------------- PARALLAX N°2 ---------------------------------------------------->

      <div class="parallax parallax2"></div>

      <!---------------------------------------------------- section MES PROJETS ---------------------------------------------------->

      <section class="mesProjets" id="folio">
        <div class="grid-container_bottom">
          <h1 class="titre">mes projets</h1>
          <div class="cards">
            <div class="w3-card-4">
              <img src="image/3D-wavy-circle-loader_animation.png" alt="Cercles 3D ondulés">
              <div class="w3-container w3-center">
                <article class="w3-text-black">Cercles 3D ondulés en animation CSS</article>
              </div>
            </div>
            <div class="w3-card-4">
              <img src="image/frosted-glass_animation.png" alt="Fenêtre givrée">
              <div class="w3-container w3-center">
                <article class="w3-text-black">Fenêtre givrée avec background en CSS</article>
              </div>
            </div>
            <div class="w3-card-4">
              <img
                src="image/glowing-tubelight_animation.png"
                alt="tuble lumineux"
              />
              <div class="w3-container w3-center">
                <article class="w3-text-black">tuble lumineux en animation CSS</article>
              </div>
            </div>
            <div class="w3-card-4">
              <img
                src="image/loading_animation.png"
                alt="Cercle de chargement"
              />
              <div class="w3-container w3-center">
                <article class="w3-text-black">Cercle de chargement en animation CSS</article>
              </div>
            </div>
          </div>
          <div class="cards">
            <div class="w3-card-4">
              <img
                src="image/neon-light-button_animation.png"
                alt="Bouton néon lumineux"
              />
              <div class="w3-container w3-center">
                <article class="w3-text-black">Bouton néon lumineux en animation CSS</article>
              </div>
            </div>
            <div class="w3-card-4">
              <img
                src="image/SVG-elastic-line_animation.png"
                alt="Ligne élastique SVG"
              />
              <div class="w3-container w3-center">
                <article class="w3-text-black">Ligne élastique en animation CSS</article>
              </div>
            </div>
            <div class="w3-card-4">
              <img
                src="image/water-wave-text_animation.png"
                alt="Texte avec effect de vague"
              />
              <div class="w3-container w3-center">
                <article class="w3-text-black">Texte avec effect de vague en animation CSS</article>
              </div>
            </div>
            <div class="w3-card-4">
              <img
                src="image/endless-road_animation.png"
                alt="Route sans fin"
              />
              <div class="w3-container w3-center">
                <article class="w3-text-black">Route sans fin en animation CSS</article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!---------------------------------------------------- section CONTACTS  -------------------------------------------------->

      <section class="contacts">

      
        <div class="headPage">
          <h1 class="titre">Contactez moi</h1><br>
          <p><span><i class="fa-sharp fa-solid fa-road"></i> Adresse:   </span>14 rue du grand chene</p>
          <p><span><i class="fa-solid fa-phone"></i> Téléphone:   </span>(+33)7.65.19.62.22</p>
          <p><span><i class="fa-solid fa-envelope"></i> E-mail:   </span>jorisobiang306@gmail.com</p>
        </div>
        <div class="grid-container_contact" id="contact">
          <div class="w3-col w3-container" style="width:200px;"></div>
          <form class="w3-half w3-container w3-card-4 w3-transparent w3-text-theme w3-margin" action="test.php" method="post">
        
            <h2 class="w3-center w3-text-white">Contact Us</h2>
             
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="firstname" type="text" placeholder="First Name" value="">
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="lastname" type="text" placeholder="Last Name" value="">
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="email" type="text" placeholder="Email" value="">
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone" value="">
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="message" type="text" placeholder="Message" value="">
                </div>
            </div>
            
            <button class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding">Send</button>
            
          </form>  
          <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "root";
                      $dbname = "monFormulaire";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }

                      
                      $conn->close();
          ?>
          <div class="w3-half w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin"  >
            <iframe title="carte-google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2700.168338250949!2d-1.101932123154297!3d47.40865760162491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48061db20ec94579%3A0xe2c7ec8ae75a5b20!2s14%20Rue%20du%20Grand%20Ch%C3%AAne%2C%2044150%20Vair-sur-Loire!5e0!3m2!1sfr!2sfr!4v1681807950832!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="w3-col w3-container" style="width:200px"></div>       
        </div>
      </section>
    </main>

    <!---------------------------------------------------- FOOTER ---------------------------------------------------->

    <footer>
      <div class="footercontent">
        <div class="cv">
          <h2 class="titre2">Télécharger mon CV</h2>
          <a href="image/CV_Developpeur.pdf"
            ><img src="image/cv.png" alt="CV"
          /></a>
        </div>
        <div class="socialLinks">
          <a href="https://www.linkedin.com/in/karl-joris-mekuie-m-obiang-a90a27251/">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="mentionsLegales">
        <p>Karl Mekuie | © 2022 - Tous droits réservés | Mentions légales</p>
      </div>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>
