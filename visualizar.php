<!doctype html>
<html lang="PT">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>RECOPA</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="css/album.css" rel="stylesheet">
  <link href="css/fa/css/all.css" rel="stylesheet">
  <link href="css/x.css" rel="stykesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <!--custom styles-->
  <style>
    .barra {
      margin: 300px auto;
    }

    .barra img {
      width: 40px;
      margin-bottom: 20px;
    }

    .barra ul {
      text-align: center;
      margin-top: -200px;
    }

    .barra ul li {
      display: inline-block;
      width: 200px;
      height: 80px;
      position: relative;
    }

    ul li .fas {
      background: lightgrey;
      color: white;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      padding: 6px;
    }

    ul li .fas::after {
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

    ul li:nth-child(1) .fas {
      background: green;
    }

    ul li:nth-child(1) .fas::after {
      background: green;
    }

    ul li:nth-child(2) .fas {
      background: #1963ec;
    }

    ul li:nth-child(2) .fas::after {
      background: #1963ec;
    }

    ul li:first-child .fas::after {
      width: 105px;
      left: 100px;
    }

    ul li:last-child .fas::after {
      width: 105px;

    }

    /*INICIO ESTILO */
    body {
      color: #566787;
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
      font-size: 13px;
    }

    .table-responsive {
      margin: 30px 0;
    }

    .table-wrapper {
      background: #fff;
      padding: 20px 25px;
      border-radius: 3px;
      min-width: 1000px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
      padding-bottom: 15px;
      background: #28a745;
      color: #fff;
      padding: 16px 30px;
      min-width: 100%;
      margin: -20px -25px 10px;
      border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
      margin: 5px 0 0;
      font-size: 24px;
    }

    .table-title .btn-group {
      float: right;
    }

    .table-title .btn {
      color: #fff;
      float: right;
      font-size: 13px;
      border: none;
      min-width: 50px;
      border-radius: 2px;
      border: none;
      outline: none !important;
      margin-left: 10px;
    }

    .table-title .btn i {
      float: left;
      font-size: 21px;
      margin-right: 5px;
    }

    .table-title .btn span {
      float: left;
      margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
      border-color: #e9e9e9;
      padding: 12px 15px;
      vertical-align: middle;
    }

    table.table tr th:first-child {
      width: 60px;
    }

    table.table tr th:last-child {
      width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
    }

    table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
    }

    table.table td:last-child i {
      opacity: 0.9;
      font-size: 22px;
      margin: 0 5px;
    }

    table.table td a {
      font-weight: bold;
      color: #566787;
      display: inline-block;
      text-decoration: none;
      outline: none !important;
    }

    table.table td a:hover {
      color: #2196F3;
    }

    table.table td a.edit {
      color: #FFC107;
    }

    table.table td a.delete {
      color: #F44336;
    }

    table.table td i {
      font-size: 19px;
    }

    table.table .avatar {
      border-radius: 50%;
      vertical-align: middle;
      margin-right: 10px;
    }

    .pagination {
      float: right;
      margin: 0 0 5px;
    }

    .pagination li a {
      border: none;
      font-size: 13px;
      min-width: 30px;
      min-height: 30px;
      color: #999;
      margin: 0 2px;
      line-height: 30px;
      border-radius: 2px !important;
      text-align: center;
      padding: 0 6px;
    }

    .pagination li a:hover {
      color: #666;
    }

    .pagination li.active a,
    .pagination li.active a.page-link {
      background: #03A9F4;
    }

    .pagination li.active a:hover {
      background: #0397d6;
    }

    .pagination li.disabled i {
      color: #ccc;
    }

    .pagination li i {
      font-size: 16px;
      padding-top: 6px
    }

    .hint-text {
      float: left;
      margin-top: 10px;
      font-size: 13px;
    }

    /* Custom checkbox */
    .custom-checkbox {
      position: relative;
    }

    .custom-checkbox input[type="checkbox"] {
      opacity: 0;
      position: absolute;
      margin: 5px 0 0 3px;
      z-index: 9;
    }

    .custom-checkbox label:before {
      width: 18px;
      height: 18px;
    }

    .custom-checkbox label:before {
      content: '';
      margin-right: 10px;
      display: inline-block;
      vertical-align: text-top;
      background: white;
      border: 1px solid #bbb;
      border-radius: 2px;
      box-sizing: border-box;
      z-index: 2;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
      content: '';
      position: absolute;
      left: 6px;
      top: 3px;
      width: 6px;
      height: 11px;
      border: solid #000;
      border-width: 0 3px 3px 0;
      transform: inherit;
      z-index: 3;
      transform: rotateZ(45deg);
    }

    .custom-checkbox input[type="checkbox"]:checked+label:before {
      border-color: #03A9F4;
      background: #03A9F4;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
      border-color: #fff;
    }

    .custom-checkbox input[type="checkbox"]:disabled+label:before {
      color: #b8b8b8;
      cursor: auto;
      box-shadow: none;
      background: #ddd;
    }

    /* Modal styles */
    .modal .modal-dialog {
      max-width: 400px;
    }

    .modal .modal-header,
    .modal .modal-body,
    .modal .modal-footer {
      padding: 20px 30px;
    }

    .modal .modal-content {
      border-radius: 3px;
      font-size: 14px;
    }

    .modal .modal-footer {
      background: #ecf0f1;
      border-radius: 0 0 3px 3px;
    }

    .modal .modal-title {
      display: inline-block;
    }

    .modal .form-control {
      border-radius: 2px;
      box-shadow: none;
      border-color: #dddddd;
    }

    .modal textarea.form-control {
      resize: vertical;
    }

    .modal .btn {
      border-radius: 2px;
      min-width: 100px;
    }

    .modal form label {
      font-weight: normal;
    }



    /*FIM ESTILO */
  </style>
  <script>
    $(document).ready(function() {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function() {
        if (this.checked) {
          checkbox.each(function() {
            this.checked = true;
          });
        } else {
          checkbox.each(function() {
            this.checked = false;
          });
        }
      });
      checkbox.click(function() {
        if (!this.checked) {
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>
</head>

<body>

  <header>
    <div class="collapse bg-success" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Sobre</h4>
            <p class="text-white">Aqui serão incluidos os documentos selecionados</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <a href="login.html">
              <h4 class="text-white">SAIR</h4>
            </a>
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
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <img src="img/b_verde.png" style="width: 35px; padding-right: 4%;">

          <strong>Visualizar</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

        </button>
        <span class="navbar-toggler fas fa-2x fa-user-circle" style="margin-left: -75%;"></span>

      </div>

    </div>
  </header>

  <main role="main">

    <section class="text-center">
      <div class="container">
        <!-- <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p> -->

        <!-- <div class="col-md-7 offset-md-2 mt-5 pt-3">
            <div class=" input-group mb-3">
              <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" style="max-width: 40%; margin-left: 30%;">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-camera"></i></span>
                <span class="input-group-text"><i class="fa fa-search"></i></span>
              </div>
          </div>

        </div>
        
        <div class="form-check form-check-inline">
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



        <!--BARRA DE PROGRESSO-->


      </div>
      <div class="barra">
        <ul>
          <li>
            <img src="img/a_verde.png"><br>
            <i class="fas fa-check"></i>
            <p>Transmissão</p>
          </li>
          <li>
            <img src="img/b_azul.png"><br>
            <i class="fas fa-sync-alt"></i>
            <p>Visualizar</p>
          </li>
          <!-- <li>
            <img src="img/c.png"><br>
            <i class="fas fa-sync-alt"></i>
            <p>Correção</p>
          </li> -->
          <li>
            <img src="img/d.png"><br>
            <i class="fas fa-sync-alt"></i>
            <p>Envio</p>
          </li>

        </ul>
      </div><!-- FIM DA BARRA DE PROGRESSO -->






    </section>

    <div class="container-xl" style="margin-top: -200px;">
      <div class="table-responsive">
        <div class="table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Gerenciar <b>Dados</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar</span></a>
                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Excluir</span></a>						
              </div>
            </div>
          </div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="selectAll">
                    <label for="selectAll"></label>
                  </span>
                </th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>COVID-19</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                  </span>
                </td>
                <td>073.863.900-85</td>
                <td>José Vitor Gomes da Silva</td>
                <td>Vertentes, Pernambuco</td>
                <td>SIM</td>
                <td>
                  <a href="#editEmployeeModal1" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                  <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
              </tr>

              <tr>
                <td>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox2" name="options[]" value="1">
                    <label for="checkbox2"></label>
                  </span>
                </td>
                <td>155.853.652-32</td>
                <td>Julio Cesar Costa da Silva</td>
                <td>Bezerros, Pernambuco</td>
                <td>SIM</td>
                <td>
                  <a href="#editEmployeeModal2" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                  <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
              </tr>

              <tr>
                <td>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox3" name="options[]" value="1">
                    <label for="checkbox3"></label>
                  </span>
                </td>
                <td>749.856.956.78</td>
                <td>Geysa da Silva</td>
                <td>Caruaru, Pernambuco</td>
                <td>NÃO</td>
                <td>
                  <a href="#editEmployeeModal3" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                  <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox4" name="options[]" value="1">
                    <label for="checkbox4"></label>
                  </span>
                </td>
                <td>476.855.985-00</td>
                <td>Lucas Pereira Gomes</td>
                <td>Caruaru, Pernambuco</td>
                <td>SIM</td>
                <td>
                  <a href="#editEmployeeModal4" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                 <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox5" name="options[]" value="1">
                    <label for="checkbox5"></label>
                  </span>
                </td>
                <td>085.745.874-00</td>
                <td>Whesley Moreira Araujo</td>
                <td>Caruaru, Pernambuco</td>
                <td>SIM</td>
                <td>
                  <a href="#editEmployeeModal5" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                  <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- <div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div> -->
        </div>
      </div>
    </div>
    <!-- Edit Modal HTML -->
    <!-- <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Add Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>CPF</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Endereço</label>
                <textarea class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>COVID-19</label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-success" value="Add">
            </div>
          </form>
        </div>
      </div>
    </div> -->
    <!-- Edit Modal HTML -->
       
    <div id="editEmployeeModal1" class="modal fade">
      <div class="modal-dialog modal-xl" style="max-width: 1200px;">
        <div class="modal-content">
          <div w3-include-HTML="vitor.html"></div>
        </div>
      </div>
    </div><!--fim do modal edit-->
    <div id="editEmployeeModal2" class="modal fade">
      <div class="modal-dialog modal-xl" style="max-width: 1200px;">
        <div class="modal-content">
          <div w3-include-HTML="julio.html"></div>
        </div>
      </div>
    </div><!--fim do modal edit-->
    <div id="editEmployeeModal3" class="modal fade">
      <div class="modal-dialog modal-xl" style="max-width: 1200px;">
        <div class="modal-content">
          <div w3-include-HTML="geysa.html"></div>
        </div>
      </div>
    </div><!--fim do modal edit-->
    <div id="editEmployeeModal4" class="modal fade">
      <div class="modal-dialog modal-xl" style="max-width: 1200px;">
        <div class="modal-content">
          <div w3-include-HTML="lucas.html"></div>
        </div>
      </div>
    </div><!--fim do modal edit-->
    <div id="editEmployeeModal5" class="modal fade">
      <div class="modal-dialog modal-xl" style="max-width: 1200px;">
        <div class="modal-content">
          <div w3-include-HTML="whesley.html"></div>
        </div>
      </div>
    </div><!--fim do modal edit-->
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Delete Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete these Records?</p>
              <p class="text-warning"><small>This action cannot be undone.</small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-danger" value="Delete">
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="text-center"><a href="enviof.html"><button type="button" class="btn btn-success">Continuar</button></a></div>
    </div>

  </main>



  <footer class="text-muted">
    <!-- <div class="container">
        <p class="float-right">
          <a href="#">Voltar ao Topo</a>
        </p>
        <p>Fábrica RECOPA - Cesar School Recife</p>
        
      </div> -->
    <div class="container" style="text-align: center;">
      <a href="http://www.mpf.mp.br/"><img src="img/MPF.png" style="height: 100px;"></a>
      <a href="https://sites.google.com/cesar.school/recopa/home"><img src="img/recopa horizontal2.png" style="width: 12%; margin-left: 100px;"></a>
      <a href="https://www.cesar.school/"><img src="img/logo_cesar_school.png" style="width: 8%; margin-left: 100px;"></a>
      <a href="http://www.conexao.mp.br/covid19/"><img src="img/gabinete.jpg" style="height: 40px; margin-left: 100px;"></a>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    w3.includeHTML();
  </script>

  <script>
    const Url='https://easy-type-forms-back.herokuapp.com/api/Document?status=1';
    axios.get(Url)
    .then(data=>console.log(data))
    .catch(err=>console.log(err))

  </script>

</body>

</html>