<?php  require ROUTE_APP.'/views/inc/homeheader.php';?>
<div class="mainContainer" style="margin-top:0px;" >
  <div class="categoryDiv">
    <a href="#" class="active">Categorias</a>
      <?php foreach($data['posts'] as $post): ?>
        <a href="#"><?php echo $post->title; ?></a>
      <?php endforeach ?>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body" >
          <!--Login content -->
          <form name="Login"  method="post" action="<?php echo ROUTE_URL.'/Login/login'?>" onsubmit="return verifyLogin()">

            <h1 align="left">Iniciar Sesion en Brain Community</h1>
            <h3 align = "left">Ingrese los detalles de su cuenta</h3>

            <h4 class="errText" id="ValidationUserName">El usuario es obligatorio*</h4>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="text" class="form-control" name="username" placeholder="Username">
            </div>

            <h4 class="errText" id="ValidationPassword">La contraseña es obligatoria*</h4>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <br><br>

            <input class="loginButton" type="submit" name="Enter" value="Entrar"/>

          	<br><br>
          	<a href="<?php echo ROUTE_URL.'/Register'?>">Registrate</a>
            <a href="<?php echo ROUTE_URL.'/Login/forgotPassword'?>">¿Olvido su contraseña?</a>

          </form>

        </div>
        <div class="modal-footer" >
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <div class="postsContainer">

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">

        <img src="/categoria.jpg" alt="" background="gray"/>
        <h4 class="title">Titulo</h4>

        <div class="extra">
          <h6 class="coments">Comentarios</h1>
          <h6 class="date">Fecha</h1>
        </div>
      </div>
      <div class="flip-card-back">
        <h4 class="title">Titulo</h4>
        <p class="description">Descripcion.....</p>
      </div>
    </div>
  </div>

  </div>

    <div class="container">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </div>

  </div>


</div>

<?php  require ROUTE_APP.'/views/inc/homefooter.php';?>
