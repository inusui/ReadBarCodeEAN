<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verficador de Precios Save Mart</title>
</head>
<body>
<!--    Acctivacion de la Camara -->

    
<?php
echo"<div id=camera></div>";

?>

    <!--***************************** Inicializacion de la Herramienta ****************************-->
    <script src="quagga.min.js" ></script>

    <script>
    Quagga.init({
    inputStream : {
      name : "Live",
      type : "LiveStream",
      target: document.querySelector('#camera')    
    },
    decoder : {
      readers : ["ean_reader"]
    }
  }, function(err) {
      if (err) {
          console.log(err);
          return
      }
      console.log("Initialization finished. Ready to start");
      Quagga.start();
  });
  
  Quagga.onDetected(function(data){

    console.log(data);
    //document.getElementById("data").innerHTML = codeResult.toString();
  
  }
  
  )
  
   </script>

</body>
</html>