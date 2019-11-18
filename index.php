<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no ">
  <title>ICOM seguros</title>
  <link rel="icon" type="image/x-icon" href="img/ICOM LOGO.png">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <script src='js/jquery-3.4.1.min.js'></script>
  <script src='js/writerjs.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body class="index">
  <div class="ate-pagina2-fundo">
<!-- pagina 1-->
<div class="tela-basica">
  <div class="apresentacao">
  <p class="text-center">ICOM Seguros <br>
  apresenta</p>
  </div>
</div>


<!--pagina 2 luta e frase -->
<center>
<P id="typewriter" class="" style="color:#f15221;font-size:40px;"></P>
<img src="img/luta.gif"  alt="">
</center>
  <script type="text/javascript">
    const instance = new Typewriter('#typewriter', {
      strings: ['Luta en', 'Disputa entre equipes'],
      autoStart: true,
      loop: true,
    });
  </script>

</div>
<!-- pagina do ganhador -->
<div class="da-pagina2-ate-o-final">

<center>
<P id="duplas-embate" class="text-center" style="color:#fff;font-size:40px;"></P>
</center>
<script>
const instance3 = new Typewriter('#duplas-embate', {
      strings: ['Infelismente a campanha acabou','Mas a equipe que chegou mais perto foi a Evoluiu', 'Eai para quem você estava torcendo?'],
      autoStart: true,
      loop: true,
    });
</script>
  <div class="tela3 pt-5">
  <div class="row">
    <div class="col-7 ">
    <img class="mx-auto d-block w-50" src="img/dupla-georgia-dante.jpeg">
    <h1 class="text-center">Evoluiu</h1>
    </div>
    <div class="col-2 ">

    <!-- grafico de personalização --><p></p><br>
    <canvas class="grafico" style="height:400px; width:500px;"></canvas>

    </div>
    <div class="col-2 ">
    <img class="w-75" src="img/equipe2teste.png" >
    <h4 class="text-center">Sativos</h4>
    </div>
  </div>
</div>

<!-- imagem georgia e dante -->
<div class="tela3 pt-5">  
  <div class="row">
    <div class="col-6">
    <img class="rounded mx-auto d-block w-50" src="img/georgia.jpeg">
    <h1 class="text-center">Georgia</h1>
    </div>
   
    <div class="col-6">
    <img class="rounded mx-auto d-block w-50" src="img/dante.jpeg" >
    <h1 class="text-center">Dante</h1>
    </div>
  </div>

</div>

<!-- grafico final -->
<div class="tela-basica tela3 pt-5">  
  <div class="row">
    <div class="col-6">
    <a href="equipe1.php"><img class="rounded mx-auto d-block" src="img/equipe1teste.png"></a>
    <h1 class="text-center">Evoluiu</h1>
    </div>
   
    <div class="col-6">
    <a href="equipe2.php"><img class="rounded mx-auto d-block" src="img/equipe2teste.png" ></a>
    <h1 class="text-center">Sativos</h1>
    </div>
  </div>

  <div clas="row">
    <p class="text-center mt-3 tamanho-20">clique na foto e conheça mais sobre a equipe</p>
  </div>
</div>
<br>

<!-- tela do premio-->
<div class ="tela-basica tela3">
<p class="text-center">O premio será:</p>
<div class="container">
    
  <div class="row">
    <div class="col">
        <img class="rounded mx-auto d-block img-fluid" src="img/restaurante.gif">
    </div>
    <div class="col">
    <img class="rounded mx-auto d-block img-fluid" src="img/money.gif">
    </div>
  </div>
  </div>
  <div class="row  ">
    <div class="col">
      <p class="text-right pr-5 mr-5">  Um jantar premium</p>
    </div>
    <div class="col ">
      <p class="pl-5">  Dinheiros muitos Dinheiros</p>
    </div>
  </div>
  </div>


</div>
</div>
</body>

<!--bootstrap-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

<!--carousel-->
<script src='js/owl.carousel.js'></script>
<script src="js/parallax.js"></script>
<!--animate wow-->
<link rel="stylesheet" href="css/animate.css">
<script src="js/wow.min.js"></script>
<!--validação jquey-->
<script src="js/jquery.validate.min.js"></script>

<script src="js/index.js"></script>

<script>
var canvas = $(".grafico");
new Chart(canvas, {

  // tipo
  type:'bar',
  // conteudo
  data:{
    labels:["Evoluiu","Nandando no dinheiro","Sativos"],
    //Evoluiu : dante, georgia
    //sativos : lucas gabriel
    //nandando no dinheiro: natalia , bernardo
    datasets:[{
      label:"Numero de cotações",
      data:[750650.73,36376.10,254272.56],
      backgroundColor:[
        '#3e95cd',
	      '#8e5ea2',
        '#3cba9f'
      ],

    }]

  },
  // personalizacao
  options:{
    legend: {
            display: false,
            
        },
    
    scales:{
      yAxes:[{
          ticks:{
            fontColor: '#fff',
            beginAtZero:true
          }
        }
        
      ],
      xAxes:[{
          ticks:{
            display: true,
            beginAtZero:true,
            fontColor: '#fff',
            
          }
        }
        
      ]
    }
    
  }

});
</script>


</html>