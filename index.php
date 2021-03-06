<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
      integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="images/fav.svg">
    <link rel="stylesheet" href="css/style.css" />
    <title>JK Assessoria - Empréstimo Online fácil e seguro</title>
  </head>
  
  <body>
  
    <header>
    
      <div>
        <img src="images/logo-white.svg" id="logo" class="logo" alt="logo" />
      </div>
      <ul class="menu">
        <li><a href="form.php" >Solicitar</a></li>
        <li><a href="#como" >Como Funciona</a></li>
        <li><a href="#partners" >Parceiros</a></li>
        <li><a href="#footer" >Contato</a></li>
      </ul>

      <div id="mySidenav" class="sidenav">
        <a href="#" class="homeBtn">Home</a>
        <a href="form.php" class="servicesBtn">Solicitar</a>
        <a href="#partners" class="partnersBtn">Parceiros</a>
        <a href="#footer" class="footerBtn">Contato</a>
      </div>
      <div class="menu-icon" onclick="myFunction(this); toogleSlideMenu(this);">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </header>
    
    <section class="wrapper">
      <div class="container2">
        <div id="child1" class="child1">
          <h1 class="land-title">
            <span class="txt-color">Solicite</span> seu empréstimo hoje mesmo!
          </h1>
          <p>Crédito pessoal rápido sem burocracia.</p>
          <p>Empréstimo para negativado sem consulta de cpf.</p>
          <div class="button-container">
            <a href="form.php" class="btn btn1">Solicitar</a>
            <div class="anti-fraude">
              <img src="images/selo-anti.svg" alt="Anti Fraude" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <a
      href="https://api.whatsapp.com/send?phone=++551199939-4108&text=Olá%20Quero%20limpar%20meu%20nome."
      class="float"
      target="_blank"
    >
      <i class="fab fa-whatsapp my-float"></i>
    </a>

    <section class="services" id="services">
      <h1 class="pc-title" data-aos="fade-right" data-aos-duration="600">
        Vantagens
      </h1>
      <hr />
      <div class="cen">
        <div class="service" data-aos="fade-right" data-aos-duration="600">
          <img src="images/handshake.svg" class="vectors handshake" alt="Ilustração" />
          <h2>Empréstimo Rápido</h2>
          <p>Realize sua solicitação sem burocracia de imediato.</p>
        </div>

        <div class="service" data-aos="fade-right" data-aos-duration="600">
          <img src="images/wallet.svg" class="vectors sack" alt="Ilustração" />
          <h2>Taxas mínimas</h2>
          <p>Taxa de 0,25% Evite pagar por taxas exorbitantes.</p>
        </div>

        <div class="service" data-aos="fade-right" data-aos-duration="600">
          <img src="images/form.svg" class="vectors register" alt="Ilustração" />
          <h2>Avaliamos seu Cadastro</h2>
          <p>
            Aprovamos seu empréstimo sem consulta de cpf.
          </p>
        </div>
      </div>
    </section>

    <section
      class="container3"
      data-aos="fade-up"
      data-aos-duration="800"
      id="como"
    >
      <div class="text-div">
        <div class="text-container">
          <h1>O nosso jeito de negociar</h1>
          <p>
            Somos uma empresa paulista que nasceu em 2010 com o objetivo de
            facilitar a vida financeira de milhões de pessoas.
          </p>
        </div>
      </div>
    </section>

    <h1 class="title-marketing" data-aos="fade-right" data-aos-duration="600">
      Como Funciona
    </h1>
    <div class="how">
      <hr class="hr first" />
    </div>
    <section class="marketing-container">
      <div id="child-1" data-aos="fade-right" data-aos-duration="600">
        <h1>
          <span class="number two">1</span>Você pode clicar <a href="form.php" class="aqui"> Aqui </a>para começar
        </h1>
        <p>
          Para começar você precisará informar apenas o seu cpf , telefone e
          endereço para começar!
        </p>
      </div>

      <div id="child-2" data-aos="fade-right" data-aos-duration="600">
        <img src="images/marketing.svg" alt="Ilustração" />
      </div>
    </section>
    <section class="marketing-container">
      <div id="child-3" data-aos="fade-right" data-aos-duration="600">
        <h1>
          <span class="number two">2</span>Certifique-se de que seus dados estão
          corretos
        </h1>
        <p>Verifique seu nome, celular e informe o código de verificação.</p>
      </div>

      <div id="child-4" data-aos="fade-right" data-aos-duration="600">
        <img src="images/confirm.svg" alt="Ilustração" />
      </div>
    </section>

    <section class="marketing-container">
      <div id="child-5" data-aos="fade-right" data-aos-duration="600">
        <h1>
          <span class="number three">3</span>Entre em contato com nossa equipe!
        </h1>
        <p>Após preencher o formulário será logo atendido pela nossa equipe.</p>
      </div>

      <div id="child-6" data-aos="fade-right" data-aos-duration="600">
        <img src="images/social-illustration.svg" alt="Ilustração" />
      </div>
    </section>

    <section class="testimonial">
      <h1>Oque nossos clientes dizem</h1>
      <hr />
      <div class="owl-carousel owl-theme">
        <div class="content-container">
          <div class="text-wrapper">
            <div class="text-content">
              <i class="fas fa-quote-left"></i>

              Bom dia, gostei muito do experiência, vocês são uma empresa que
              entende muito a situação de quem quer pagar e por muitas vezes não
              tem a possibilidade.

              <i class="fas fa-quote-right"></i>
            </div>

            <div class="owl-wrapper">
              <div class="item">
                <img src="images/peoples/people-1.jpg" alt="foto de perfil" />
                <div class="item stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
            </div>

            <div class="info-person">
              <strong>João Miguel,</strong> Auxiliar de limpeza.
            </div>
          </div>
        </div>

        <div class="content-container">
          <div class="text-wrapper">
            <div class="text-content">
              <i class="fas fa-quote-left"></i>
              Boa essa de negociação deixa o cliente calcular pensar sem
              pressão, essa de tortura psicólogica 5 vezes ligando e desligando
              é terrivel, não é o caso de vocês.
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="owl-wrapper">
              <div class="item">
                <img src="images/peoples/people-2.jpg" alt="foto de perfil" />
                <div class="item stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
            <div class="info-person">
              <strong>Lúcia Carvalho,</strong> Telemarketing.
            </div>
          </div>
        </div>
        <div class="content-container">
          <div class="text-wrapper">
            <div class="text-content">
              <i class="fas fa-quote-left"></i>
              Ótima expêriencia com a empresa gostei muito do atendimento,
              consegui quitar minhas divídas sem pressão , definimos um acordo
              bom e acessível.
              <i class="fas fa-quote-right"></i>
            </div>
            <div class="owl-wrapper">
              <div class="item">
                <img src="images/peoples/people-3.jpg" alt="foto de perfil" />
                <div class="item stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
            <div class="info-person">
              <strong>Márcia Oliveira,</strong> Recepcionista.
            </div>
          </div>
        </div>

        <div class="content-container">
          <div class="text-wrapper">
            <div class="text-content">
              <i class="fas fa-quote-left"></i>
             Consegui meu crédito e sai do negativado sem ficar
              pressionado, fiquei muito feliz com o antedimento e com a maneira
              de negociar da empresa.

              <i class="fas fa-quote-right"></i>
            </div>
            <div class="owl-wrapper">
              <div class="item">
                <img src="images/peoples/people-4.jpg" alt="foto de perfil" />
                <div class="item stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
            <div class="info-person">
              <strong>Rogério Calasans,</strong> Autônomo.
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="partner-wrapper" id="partners">
      <div class="partner-container">
        <div
          id="child-7"
          data-aos="fade-right"
          data-aos-duration="600"
          class="partner-1"
        >
          <h1>Nossos Parceiros</h1>
          <hr />

          <p>
            Criamos um ambiente virtual e aberto 24 horas, onde pessoas físicas
            e jurídicas negociam dívidas com tranquilidade e sem estresse.
          </p>
        </div>

        <div
          id="child-8"
          data-aos="fade-right"
          data-aos-duration="600"
          class="partner-2"
        >
          <div class="brand-wrapper">
            <div class="brand-container">
              <img src="images/brands/santander.svg" alt="Santander" />
            </div>
            <div class="brand-container">
              <img src="images/brands/bdb.svg" alt="Banco do Brasil" />
            </div>
            <div class="brand-container">
              <img src="images/brands/serasa.svg" alt="Serasa" />
            </div>

            <div class="brand-container">
              <img src="images/brands/porto.svg" alt="Porto Seguro" />
            </div>

            <div class="brand-container">
              <img src="images/brands/cb.svg" alt="CB" />
            </div>
            <div class="brand-container">
              <img src="images/brands/banco-safra.svg" alt="Banco Safra" />
            </div>
            <div class="brand-container">
              <img src="images/brands/bancobari.png" alt="Banco Bari" />
            </div>
            <div class="brand-container">
              <img src="images/brands/cresfaz.png" alt="Cresfaz" />
            </div>
            <div class="brand-container last-brand">
              <img src="images/brands/lendico.png" alt="Lendico" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" id="footer">
      <div class="footer-container">
        <div class="row">
          <div class="footer-col enterprise">
            <img src="images/logo-white.svg" alt="JK ASSESSORIA" class="footer-logo" />

            <ul>
              <li>
                <img
                  src="images/google-footer.svg"
                  alt="Certificado"
                  class="footer-logo google"
                />
              </li>

              <li></li>
            </ul>
          </div>

          <div class="footer-col address">
            <h4>Endereço</h4>
            <ul>
              <li><a>Rua Amazonas, 1238,</a></li>
              <li><a>centro</a></li>
              <li><a>São Caetano do Sul - SP</a></li>
              <li><a>CEP: 09540-201</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Redes sociais</h4>
            <div class="social-links">
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href="https://api.whatsapp.com/send?phone=++551199939-4108&text=Olá%20Quero%20limpar%20meu%20nome."><i class="fab fa-whatsapp"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>

        <hr />
        <div class="rights">
          <p>
            A JK Assessoria é uma plataforma digital que atua como
            correspondente Bancário e Sociedade de Crédito Direto para facilitar
            o processo de quitação de débitos. Como Correspondente Bancário,
            seguimos as diretrizes da Resolução nº 3.954 e como Sociedade de
            Crédito Direto a resolução nº 4.656, ambas do Banco Central do
            Brasil. Somos correspondentes bancários das seguintes instituições:
            JK CONSULTORIA & ASSESSORIA EMPRESARIAL LTDA - 12.989.404/0001-39.
          </p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>Todos Direitos Reservados &copy; <strong>JK </strong> Assessoria</p>
      </div>
    </footer>
    <div class="loader-wrapper">
    <div class="spinner6"><div></div></div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
      integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
      crossorigin="anonymous"
    ></script>
    <script src="js/main.js"></script>

    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        dots: false,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 3,
          },
          1300: {
            items: 4,
          },
        },
      });

      
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    })</script>
    
  </body>
</html>
 