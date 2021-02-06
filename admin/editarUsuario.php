<?php 
    include_once "conexion.php";
    $con=mysqli_connect($host, $user,$pw , $db, $port);
    if( isset($_REQUEST['guardar'])){
        
                
        $email= mysqli_real_escape_string($con, $_REQUEST['email']??'');
        $password= mysqli_real_escape_string($con, $_REQUEST['password']??'');
        $nombre= mysqli_real_escape_string($con, $_REQUEST['nombre']??'');
        $id_user= mysqli_real_escape_string($con, $_REQUEST['id_user']??'');

        $query= "UPDATE usuario SET
        email='".$email."', password='".$password."', nombre='".$nombre."'
        where id_user='".$id_user."';
        ";
        $res = mysqli_query($con, $query);
        if($res){
            echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=usuarios&mensaje=Usuario '.$nombre.' editado exitosamente"/>';
        }
        else{
 ?>
    <div class="alert alert-danger" role="alert">
        Error al crear usuario <?php  echo mysqli_error($con); ?>

    </div>
 <?php 
        }
    }
    $id_user= mysqli_real_escape_string($con, $_REQUEST['id_user']??'');
    $query="SELECT id_user, email, password, nombre from usuario where id_user='".$id_user."'; ";
    $res=mysqli_query($con, $query);
    $row=mysqli_fetch_assoc($res);
  ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Usuario</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <form action="panel.php?modulo=editarUsuario" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?> " required="required">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'] ?> " required="required">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id_user" value="<?php echo $row['id_user'] ?> ">
                        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>