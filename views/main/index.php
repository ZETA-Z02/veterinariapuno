<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Veterinaria Puno</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css"
    />
    <script src="<?php echo constant('URL')?>public/foundation/js/jquery.js"></script>
    <script src="<?php echo constant('URL')?>node_modules/fullcalendar/index.global.min.js"></script>
  </head>
  <body>
    <!-- Nav menu-->
    <div class="container">
      <nav id="header">
        <div class="nav-logo">
          <p class="nav-name">Veterinaria Puno</p>
        </div>
        <div class="nav-menu" id="myNavMenu">
          <ul class="nav_menu_list">
            <li class="nav_list">
              <a href="#home" class="nav-link active-link">Home</a>
              <div class="circle"></div>
            </li>
            <li class="nav_list">
              <a href="#about" class="nav-link">Nosotros</a>
              <div class="circle"></div>
            </li>
            <li class="nav_list">
              <a href="#projects" class="nav-link">Atencion</a>
              <div class="circle"></div>
            </li>
            <li class="nav_list">
              <a href="#contact" class="nav-link">Agenda</a>
              <div class="circle"></div>
            </li>
          </ul>
        </div>
        <!-- Dark mode -->
        <div class="mode">
          <div class="moon-sun" id="toggle-switch">
            <i class="fa fa-moon" id="moon"></i>
            <i class="fa fa-sun" id="sun"></i>
          </div>
        </div>
        <div class="nav-menu-btn">
          <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>
      <!-- MAIN -->
      <main class="wrapper">
        <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="hello">
              <p>Bienvenidos</p>
            </div>
            <div class="featured-name">
              <span class="typedText"></span>
            </div>
            <div class="text-info">
              <p>
                Amamos a los animalitos, Veterinaria Puno.
              </p>
            </div>
            <div class="text-btn">
              <button class="btn hire-btn">Donde encontrarnos</button>
              <button class="btn">
                Redes
              </button>
            </div>
            <div class="social_icons">
              <div class="icon_circle"></div>
              <div class="icon"><i class="uil uil-instagram"></i></div>
              <div class="icon"><i class="uil uil-whatsapp"></i></div>
              <div class="icon"><i class="uil uil-twitter"></i></div>
              <div class="icon"><i class="uil uil-facebook"></i></div>
            </div>
          </div>
          <div class="featured-image">
            <div class="image">
              <img src="<?php echo constant('URL');?>public/images/pexels.jpg" alt="cat" />
            </div>
          </div>
        </section>
        <!-- About box -->
        <section class="section" id="about">
          <div class="top-header">
            <h1>Nosotros</h1>
          </div>
          <div class="row">
            <div class="col">
              <div class="about-info">
                <figure class="about-me">
                  <figcaption>
                    <img src="<?php echo constant('URL');?>public/images/cat-2.jpg" alt="" class="profile"/>
                    <h2>Profesionales</h2>
                    <p>
                      En <b>Veterinaria Puno</b>, estamos comprometidos con la salud y el bienestar de cada una de las mascotas que forman parte de tu familia. Nuestro equipo de veterinarios y personal especializado brinda atencion medica de alta calidad con un enfoque humano y cariñoso, creando un entorno seguro y amigable para tus compañeros.
                      Queremos ser el centro veterinario de referencia en la región, donde cada familia confíe en nuestros servicios para el cuidado y la salud de sus mascotas. Aspiramos a fortalecer la relación entre humanos y animales, promoviendo el respeto y el cariño hacia todos los seres vivos.
                    </p>
                  </figcaption>
                </figure>
                <button class="about-me-btn">Mas</button>
              </div>
            </div>
            <div class="col">
              <div class="about-info">
                <figure class="about-me">
                  <figcaption>
                    <img src="<?php echo constant('URL');?>public/images/cat-2.jpg" alt="" class="profile"/>
                    <h2>Valores</h2>
                    <p>
                      <b>Compromiso:</b> Nos dedicamos plenamente a la salud de tu mascota, con ética y responsabilidad. <br>
                      <b>Calidad:</b> Ofrecemos servicios veterinarios basados en la medicina moderna y el conocimiento actualizado. <br>
                      <b>Cuidado:</b> Tratamos a cada mascota con respeto y compasión, valorando su bienestar y felicidad. <br>
                      <b>Confianza:</b> Construimos relaciones duraderas con nuestros clientes a través de un servicio cercano y profesional.
                    </p>
                  </figcaption>
                </figure>
                <button class="about-me-btn">Mas</button>
              </div>
            </div>
            <!-- <div class="skill">
              <div class="skill-box">
                <span class="title">HTML</span>
                <div class="skill-bar">
                  <span class="skill-per html">
                    <span class="tooltip">80%</span>
                  </span>
                </div>
              </div>
              <div class="skill-box">
                <span class="title">CSS</span>
                <div class="skill-bar">
                  <span class="skill-per css">
                    <span class="tooltip">90%</span>
                  </span>
                </div>
              </div>
              <div class="skill-box">
                <span class="title">PYTHON</span>
                <div class="skill-bar">
                  <span class="skill-per">
                    <span class="tooltip">70%</span>
                  </span>
                </div>
              </div>
              <div class="skill-box">
                <span class="title">JavaSript</span>
                <div class="skill-bar">
                  <span class="skill-per javascript">
                    <span class="tooltip">40%</span>
                  </span>
                </div>
              </div>
              <div class="skill-box">
                <span class="title">PHP</span>
                <div class="skill-bar">
                  <span class="skill-per php">
                    <span class="tooltip">30%</span>
                  </span>
                </div>
              </div>
            </div> -->
          </div>
        </section>
        <!-- Project box -->
        <section class="section" id="projects">
          <div class="top-header">
            <h1>Atencion</h1>
          </div>
          <div class="project-container">
            <div class="project-box">
              <i class="uil uil-briefcase-alt"></i>
              <h3>Atencion</h3>
              <label for="">200+ Animalitos Atendidoss</label>
            </div>
            <div class="project-box">
              <i class="uil uil-users-alt"></i>
              <h3>Clientes</h3>
              <label for="">+170 Clientes Satisfechos</label>
            </div>
            <div class="project-box">
              <i class="uil uil-award"></i>
              <h3>Experiencia</h3>
              <label for="">+2 Anos de experiencia</label>
            </div>
          </div>
        </section>
        <!-- contact box -->
        <section class="section" id="contact">
          <div class="top-header">
            <h1>Ven y reserva tu cita</h1>
            <span>Elige la fecha y hora de tu cita</span><br>
            <span>Dale CLICK al dia de tu cita</span>
          </div>
          <div class="calendar" id="calendar"></div>
          <!-- <div class="row">


            <div class="col">
              <div class="contact-info">
                <h2>Find me<i class="uil uil-corner-right-down"></i></h2>
                <p>
                  <i class="uil uil-envelope"></i>Email: CodeCreator@gmail.com
                </p>
                <p><i class="uil uil-phone"></i>Phone: 998777712</p>
              </div>
            </div>
            <div class="col">
              <div class="form-control">
                <div class="form-inputs">
                  <input
                    type="text"
                    class="input-field"
                    placeholder="Your Name"
                  />
                  <input
                    type="text"
                    class="input-field"
                    placeholder="Your Email"
                  />
                </div>
                <div class="text-area">
                  <input
                    type="text"
                    class="input-subject"
                    placeholder="Subject"
                  />
                  <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="10"
                    placeholder="Message"
                  ></textarea>
                </div>
                <div class="form-button">
                  <button class="btn">
                    Send<i class="uil uil-message"></i>
                  </button>
                </div>
              </div>
            </div>
          </div> -->
        </section>
      </main>

      <div class="modal" id="modal">
        <div class="modal-info">
          <h4>Reservar Cita</h4>
        </div>
        <div class="modal-content">
          <form action="" id="form-reservar" class="formulario">
            <label for="">Fecha</label>
            <input type="date" id="fecha" name="fecha" readonly>
            <label for="">Hora:</label>
            <select name="hora" id="hora">
              <!-- <option value="10:00:00">10:00 - 11:00</option>
              <option value="11:00:00">11:00 - 12:00</option>
              <option value="14:00:00">14:00 - 15:00</option>
              <option value="15:00:00">15:00 - 16:00</option> -->
            </select>
            <label for="dni">DNI: </label>
            <input type="text" id="dni" name="dni" minlength="8" maxlength="8">
            <label for="">Nombre</label>
            <input type="text" id="nombre" name="nombre" readonly>
            <label for="">Apellido</label>
            <input type="text" id="apellido" name="apellido" readonly>
            <label for="">Telefono</label>
            <input type="text" id="telefono" name="telefono" minlength="9" maxlength="9">
            <label for="">Nombre de Mascota</label>
            <input type="text" id="mascota" name="mascota">
            <label for="">Especio</label>
            <input type="text" id="especie" name="especie">
            <label for="">Raza</label>
            <input type="text" id="raza" name="raza">
            <div class="buttons">
              <button class="btn-reserva" type="submit">RESERVAR</button>
              <button class="btn-cerrar" type="button" id="btn-cerrar">CERRAR</button>
            </div>
          </form>
        </div>
      </div>
      <!-- Footer -->
      <footer>
        <div class="middle-footer">
          <ul class="footer-menu">
            <li class="footer_menu_list">
              <a href="#" id="#home">Home</a>
            </li>
            <li class="footer_menu_list">
              <a href="#" id="#about">Nosotros</a>
            </li>
            <li class="footer_menu_list">
              <a href="#" id="#projects">Atencion</a>
            </li>
            <li class="footer_menu_list">
              <a href="#" id="#contact">Agenda</a>
            </li>
          </ul>
        </div>
        <div class="footer-social-icons">
          <div class="icon"><i class="uil uil-instagram"></i></div>
          <div class="icon"><i class="fa-brands fa-linkedin-in icon"></i></div>
          <div class="icon"><i class="uil uil-behance-alt"></i></div>
          <div class="icon"><i class="uil uil-github-alt"></i></div>
        </div>
        <div class="bottom-footer">
          <p>
            Copyright &copy;
            <a href="#home" style="text-decoration: none"> ZetaSpace</a> - All
            rights reserved 2024
          </p>
        </div>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <script src="<?php echo constant('URL')?>public/js/main.js"></script>
  </body>
</html>
