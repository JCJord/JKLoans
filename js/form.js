var thanks = document.querySelector(".thanks");
var message = document.querySelector(".message");
var div = document.querySelector(".form-container");

$("document").ready(function () {
  $("#formulario").validate({
    rule: {
      FirstName: {
        lettersonly: true,
        minlength: 3,
        maxlength: 45,
      },
    },

    messages: {
      email: {
        required: "Digite um e-mail",
        email: "Digite um e-mail válido",
      },
      wage: {
        required: "Digite sua renda",
      },
      FirstName: {
        minlength: "Digite um nome válido",
        required: "Digite um nome",
      },
      cpf: {
        minlength: "Digite um CPF válido",
        required: "Digite um CPF válido",
      },

      Phone: {
        minlength: "Digite um número válido",
        required: "Digite um número válido",
      },
    },
    errorElement: "div",
    errorLabelContainer: ".errorTxt",
    submitHandler: function (form) {
      document.querySelector(".fname").focus;
      document.getElementById("btn").disabled = true;
      $.ajax({
        url: "insert.php",
        type: "post",
        data: $("#formulario").serialize(),
        success: function (d) {
          $("#formulario")[0].reset();
          $("#formulario").hide();

          div.style.height = "150px";
          thanks.style.color = "#0bd65c";
          thanks.textContent = "Obrigado pelo envio !";
          message.textContent = "Entraremos em contato em breve.";
        },
      });
    },
  });
});
