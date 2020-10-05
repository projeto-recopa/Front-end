<html lang="PT">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>RECOPA</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="bootstrap.fd.css">
<script src="bootstrap.fd.js"></script>

		<!-- Bootstrap core CSS -->

<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    <!-- Custom styles for this template -->
<link href="css/album.css" rel="stylesheet">
<link href="css/fa/css/all.css" rel="stylesheet">
<link href="css/x.css" rel="stykesheet">

    <!--custom styles-->
    <!-- <style>
      
      .barra{
        margin: 300px auto;
      }
      .barra img{
        width: 40px;
        margin-bottom: 20px;
      }
      .barra ul{
        text-align: center;
        margin-top: -200px;
      }
      .barra ul li{
        display: inline-block;
        width: 200px;
        height: 80px;
        position: relative;
      }
      ul li .fas{
        background: lightgrey;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        padding: 6px; 
      }
      ul li .fas::after{
        content: '';
        background: lightgrey;
        height: 5px;
        width: 205px;
        display: block;
        position: absolute;
        left: 0;
        top: 70px;
        z-index: -1;
        
      }
      ul li:nth-child(1) .fas{
        background: #1963ec;
      }
      ul li:nth-child(1) .fas::after{
        background: #1963ec;
      }
      ul li:first-child .fas::after{
        width: 105px;
        left: 100px;
      }
      ul li:last-child .fas::after{
        width: 105px;
        
      }
    </style> -->


</head>
<body>
<header>
	<!-- NOVA NABVBAR-->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">

      
      <strong>Transmissão</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
      aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav mr-auto" style="font-size: 18px;">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="visualizar.html">Continuar <span class="sr-only">(current)</span></a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-7" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Dropdown </a>
          <div class="dropdown-menu dropdown-pink" aria-labelledby="navbarDropdownMenuLink-7">
            <a class="dropdown-item" href="#">SAIR</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
       
      </ul>
      <a class="nav-link" href="visualizar.html" style="font-size: 18px; color: white;">Continuar</a>
      
 
    </div>
  </div>
</nav>
	<!--FIM DA NOVA NAVBAR-->
      <!-- <div class="collapse bg-success" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre</h4>
              <p class="text-white">Aqui serão incluidos os documentos selecionados</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <a href="login.html"><h4 class="text-white">SAIR</h4></a>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Twitter</a></li>
                <li><a href="#" class="text-white">Facebook</a></li>
                <li><a href="#" class="text-white">Email</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-success box-shadow">
        <div class="container d-flex flex-row">
          <a href="#" class="navbar-brand align-items-center">
            <img src="img/a_verde.png" style="width: 35px; padding-right: 4%;">
            
            <strong>Transmissão</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
            
          </button>
          <span class="navbar-toggler fas fa-2x fa-user-circle"></span>
            
        </div>
       
      </div> -->
	</header>
	
	<!-- FIM DA HEADER-->

<main role="main">

<section class="bg-light">
  <!-- <div class="container"> -->
	

	<form id="form" onsubmit="return submitForm();">
			  
	  		<div class="text-center">
			<button type="button" onclick="selectFiles();" style="font-size: 30px;">Selecionar Arquivos</button>
			</div>
			<br>
			
			<div class="d-flex flex-row bd-highlight mb-3">	
			<div class="container"><div id="selected-images"></div></div></div>
			
      <div id="remove"> 
      <div class="album py-5 bg-light" style="text-align: center;">
        <div class="container">

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" src="img/x.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!--<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>-->
                    <!--<small class="text-muted">9 mins</small>-->
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- <a href="visualizar.html"><button type="button" class="btn btn-success">Continuar</button></a> -->
      </div>
    </div>
  <!-- FIM DAS FOTOS EM CAPA-->

      <br>
      <div class="text-center">
      <input type="submit" value="ENVIAR DADOS" style="font-size:30px; text-align: center;">
      </div>
    </form>
    
    
  <!-- </div> fotos sem capa-->
  
</section>
<section>

</section>

  


  <!-- <div class="form-check form-check-inline">
	<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
	<label class="form-check-label" for="defaultCheck1">
	  Individual
	</label>
  </div>
  <div class="form-check form-check-inline">
	<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
	<label class="form-check-label" for="defaultCheck1">
	  Lote
	</label>
  </div> -->
	<!--FIM SECTION MAIN-->


<footer class="text-muted">
      <!-- <div class="container">
        <p class="float-right">
          <a href="#">Voltar ao Topo</a>
        </p>
        <p>Fábrica RECOPA - Cesar School Recife</p>
        
      </div> -->
      <div class="container" style="text-align: center;">
        <a href="https://datasus.saude.gov.br/"><img src="img/LOGO DATASUS2.png" style="width: 15%;"></a>
        <a href="https://sites.google.com/cesar.school/recopa/home"><img src="img/recopa horizontal2.png" style="width: 15%; margin-left: 100px;"></a>
        <a href="https://www.cesar.school/"><img src="img/logo_cesar_school.png" style="width: 15%; margin-left: 100px;"></a>
      </div>
</footer>


<script>
	var selectedImages = [];

	function selectFiles() {
    //var myobj = document.getElementById("remove");
     //myobj.remove();
    var x = document.getElementById("remove");
    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
    x.style.display = "none";
    }


		$.FileDialog({
			"accept": "image/*"
		}).on("files.bs.filedialog", function (event) {
			var html = "";
			for (var a = 0; a < event.files.length; a++) {
				selectedImages.push(event.files[a]);
				//html += "<div class='card' style='width: 18rem;' >";
				
				html += "<img src='" + event.files[a].content + "' style='width: 200px; margin: 10px;'>";
				//html += "</div>"
			}
			document.getElementById("selected-images").innerHTML = html;
		});
	}

	function submitForm() {
		var form = document.getElementById("form");
		var formData = new FormData(form);

		for (var a = 0; a < selectedImages.length; a++) {
			formData.append("images[]", selectedImages[a]);
		}

		var ajax = new XMLHttpRequest();
		ajax.open("POST", "Http.php", true);
		ajax.send(formData);

		ajax.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
			}
		};

		return false;
  }
  //função excluir div
  //function selectFiles() {
  
  //}
  //fim da função

</script>
</body>