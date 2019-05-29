<?php  require ROUTE_APP.'/views/inc/homeheader.php';?>
<div class="mainContainer" style="margin-top:0px;" >
  <div class="categoryDiv" >
    <a href="<?php echo  ROUTE_URL; ?>" class="active">Categorias</a>
      <?php foreach($data['categories'] as $category): ?>

        <form class="" action="<?php echo ROUTE_URL.'/Home/category';?>" method="get">
          <input type="hidden" name="title" value="<?php echo $category->title; ?>">
          <button type="submit" clas="btn" ><?php echo $category->title; ?></button>
        </form>

      <?php endforeach ?>

  </div>

  <?php if (!$_SESSION){ ?>

    <?php if ($data['type'] == 0): ?>

      <script type="text/javascript">
        $(window).on('load',function(){
            $('#myModal').modal('show');
        });
      </script>

    <?php endif; ?>

    <?php if ($data['type'] == 1): ?>

      <script type="text/javascript">
        $(window).on('load',function(){
            $('#badUser').modal('show');
        });
      </script>

    <?php endif; ?>

    <?php if ($data['type'] == 2): ?>

      <script type="text/javascript">
        $(window).on('load',function(){
            $('#badPass').modal('show');
        });
      </script>

    <?php endif; ?>

  <?php } ?>

  <!-- bad user modal -->
  <div class="modal fade fade" id="badUser" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Error en login</h4>
        </div>
        <div class="modal-body">
          <label class="message-reload" >El nombre de usuario <?php echo $data['username']; ?> es incorrecto</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#myModal" >Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- bad pass modal -->
  <div class="modal fade fade" id="badPass" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Error en login</h4>
        </div>
        <div class="modal-body">
          <label class="message-reload" >La contraseña es incorrecta</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!--Login Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body" >
          <!--Login content -->
          <form name="Login"  method="post" action="<?php echo ROUTE_URL.'/Home/login'?>" onsubmit="return verifyLogin()">

            <h1 align="left">Iniciar Sesion en Brain Community</h1>
            <h3 align = "left">Ingrese los detalles de su cuenta</h3>
            <h4 class="errText" id="ValidationUserName">El usuario es obligatorio*</h4>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $data['username']; ?>">
            </div>

            <h4 class="errText" id="ValidationPassword">La contraseña es obligatoria*</h4>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <br><br>

            <input class="btn btn-primary" type="submit" name="Enter" value="Entrar"/>

          	<br><br>
          	<a href="<?php echo ROUTE_URL.'/Register'?>">Registrate</a>
            <a href="<?php echo ROUTE_URL.'/Login/forgotPassword'?>">¿Olvido su contraseña?</a>
            <hr>
            
            <label for="">Ó</label>

            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3&appId=2128166953976158&autoLogAppEvents=1"></script>

            <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false" style="margin-top:15px;"></div>

          </form>

        </div>
        <div class="modal-footer" >
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>


  <div class="postsContainer">

    <?php foreach ($data['post'] as $post): ?>

      <form class="flip-card" action="<?php echo ROUTE_URL.'/Post/viewPost';?>" method="get">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <div class="category-card">
              <label><?php echo $post->title_category; ?></label>
            </div>
            <h4 class="title"><?php echo htmlentities($post->title); ?></h4>

            <div class="extra">
              <h6 class="coments"><?php echo $post->comments; ?></h1>
              <h6 class="date"><?php echo $post->create_date; ?></h1>
            </div>
          </div>
          <button type="submit" class="flip-card-back" style="word-wrap:break-word; border:0px;">
            <div class="" style="overflow-y:scroll; ">
              <input type="hidden" name="id" value="<?php echo $post->id; ?>">
              <h4 class="title"><?php echo $post->title; ?></h4>
              <p class="description"><?php echo $post->summary; ?></p>
            </div>

          </button>
        </div>
      </form>

    <?php endforeach; ?>

  </div>

</div>
<!-- <div class="container">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div> -->


</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '2128166953976158',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    alert('conectado');
  }
});


</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>


<?php  require ROUTE_APP.'/views/inc/homefooter.php';?>
