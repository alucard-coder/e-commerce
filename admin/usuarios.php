 <?php 
    include_once "conexion.php";
    $con=mysqli_connect($host, $user,$pw , $db, $port);
    if( isset($_REQUEST['idBorrar'])){
        $id_user=mysqli_real_escape_string($con, $_REQUEST['idBorrar']??'');
        $query="DELETE from usuario where id_user='".$id_user."';";
        $res=mysqli_query($con, $query);
        if($res){
            ?>
            <div class="alert alert-warning float-right" role="alert">
                Usuario borrado con exito
            </div>
            <?php
        }else{
            ?>
            <div class="alert alert-danger float-right" role="alert">
                Error al borrar <?php echo mysqli_error($con); ?>
            </div>
            <?php
        }
    }
  ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
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
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Acciones
                    <a href="panel.php?modulo=crearUsuario"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  </th>
                    
                </tr>
                </thead>
                <tbody>
                    <?php 
                      $query= "SELECT id_user,email,nombre from usuario; ";
                      $res = mysqli_query($con, $query);
                      
                      while ($row = mysqli_fetch_assoc($res)){
                     ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <a href="panel.php?modulo=editarUsuario&id_user=<?php echo $row['id_user'] ?>" style="margin-right: 5px;"><i class="fas fa-edit"></i></a>
                                <a href="panel.php?modulo=usuarios&idBorrar=<?php echo $row['id_user'] ?>" class="text-danger borrar"><i class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                    <?php 
                      }
                     ?>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>  
                </tbody>
              </table>
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