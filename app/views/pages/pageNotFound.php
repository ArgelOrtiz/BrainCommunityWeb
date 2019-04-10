<?php  require ROUTE_APP.'/views/inc/header.php';?>

<div class="fullContainer"
style="
  position:absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top:80px;
  left:0px;
  right:0px;
  height:calc(100% - 80px);
  width:100%;">

  <div class="page"
  style="
    display:flex;
    flex-direction: column;
    color:black;
    padding-top: 80px;
    height:auto;
    width:auto;">

    <form class="" action="<?php echo ROUTE_URL.'/Home'?>" method="post">
      <h1>Codigo 404 Pagina no encontrada</h1>
      <h3>Presiona el Boton para regresar a la página pincipal</h3>
      <input type="submit" value="Ir al Home" style="background:#1C1C1C; color:#00BFFF; border:#00BFFF; width:90px;"/>
    </form>

  </div>


</div>
