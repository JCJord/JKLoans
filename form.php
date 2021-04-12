<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskMoney.js" ></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>
    <link rel="shortcut icon" href="images/fav.svg">
    <link rel="stylesheet" href="css/form.css" />
    
    
    
    <title>JK Assessoria</title>
    
  </head>
  <body>
    
    <header></header>
    <section class="wrapper">
      <div class="form-container">
        <div class="logo">
          <img src="images/logo.svg" alt="logo" />

          <h3 class="thanks">Seja bem vindo a JK !</h3>

          <p class="message">
            Vamos ajudar você a encontrar uma solução para seu problema
            financeiro.
          </p>
        </div>

        <div class="contact-form">
          <form action="insert.php" method="POST" name="formulario" id="formulario">
            <div class="input-box">
              <h2>Seu nome completo :</h2>
              <input
                type="text"
                name="FirstName"
                id="firstName"
                
                class="fname"
                minlength="3"
                maxlength="45"
                required
               
              />
            </div>
            
            <div class="input-box">
              <h2>Seu Telefone para contato :</h2>
              <input
                type="text"
                name="Phone"
                id="telefone"
                minlength="14"
               
                 required
              />
            </div>
            <script type="text/javascript">
              $("#telefone").mask("(00)00000-0000");
            </script>

            <div class="input-box">
              <h2>Digite seu CPF :</h2>
              <input type="text" name="cpf" id="cpf" minlength="14"
                 required="required" 
             />
            </div>
            <script type="text/javascript">
              $("#cpf").mask("000.000.000-00");
            </script>
            <div class="input-box">
              <h2>Digite sua renda mensal :</h2>
              <input
                type="text"
                name="wage"
                
                id="currency"
                required="required"
                
              />
            </div>
            <script type="text/javascript">
              $("#currency").mask("0,00,0,0,00");
            </script>
            

            <div class="input-box">
              <h2>Seu E-mail para contato :</h2>
              <input
                type="email"
                name="email"
                required="required"
                minlength="7"
                maxlength="40"
              />
            </div>
            <div class="input-box">
              <h2>Deixe uma observação:</h2>
              <textarea
                
                name="obs"
                maxlength="150"
                
              ></textarea>
            </div>

            <div class="input-box">
              <input type="submit" name="btn" id="btn" class="btn"  value="ENVIAR"/>
            </div>
          </form>
        </div>
      </div>
    </section>
    <div class="loader-wrapper">
    <div class="spinner6"><div></div></div>
    </div>
    <script>
     $("#currency").maskMoney({thousands:'.', decimal:'.', allowZero:true, prefix: 'R$'});
    </script>
    <script>
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    })</script>
    <script src="js/form.js"></script>
   
  </body>
  


</html>
