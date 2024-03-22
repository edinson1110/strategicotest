document.addEventListener("DOMContentLoaded", function () {
  let url = window.location.href+"controller/CalculadoraController.php";
  
  let urlApi = url.split("/").slice(0, 4).join("/") + "/api/index.php/";
  
  let preview = $("#calc");

  $(".number").click(function (e) {
    let valueNew = $(e.target).data("value");

    let valueOld = preview.val();

    preview.val(valueOld + valueNew);
  });

  $("#result").click(function () {
    let operacion = preview.val().split(" ");

    switch (operacion[1]) {
      case "+":
            ejecutar(operacion[0],operacion[2], "suma");
        break;
      case "*":
            ejecutar(operacion[0], operacion[2], "multiplicacion");
        break;
      case "/":
            ejecutar(operacion[0], operacion[2], "division");
        break;
      case "-":
            ejecutar(operacion[0], operacion[2], "resta");
        break;
      default:
        break;
    }
  });

  $("#clearAll").click(function () {
    preview.val("");
  });

  function ejecutar(value1, value2, op) {
    let data = {
        operacion: op,
        value1: value1,
        value2: value2
    };

    $.ajax({
        url: url,
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',
        data: data,

        success: function(response) {
            let jsonString = JSON.parse(response);
            let resp = JSON.parse(jsonString).result;
            $("#resp").text('El resultado de la '+resp.operacion+ ' es igual a '+ resp.data)
            
        },
        error: function(xhr, status, error) {
           
            console.error('Error al hacer la solicitud:', status, error);
        }
    });
  }
});
