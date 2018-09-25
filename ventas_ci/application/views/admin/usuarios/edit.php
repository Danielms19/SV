
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuarios
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                       <form action="<?php echo base_url();?>administrador/usuarios/update" method="POST">
                        <input type="hidden" name="idusuario" value="<?php echo $usuario->id ?>">

                            <div class="form-group <?php echo !empty(form_error("nombres")) ? 'has-error':''?>">
                                <label for="nombres">Nombres:</label>
                                <input type="text" name="nombres" id="nombres" class="form-control" 
                                value="<?php echo $usuario->nombres;?>">
                                 <?php echo form_error("nombres","<span class='help-block'>","</span>");?>
                            </div>

                             <div class="form-group <?php echo !empty(form_error("apellidos")) ? 'has-error':''?>">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" 
                                value="<?php echo $usuario->apellidos;?>">
                                <?php echo form_error("apellidos","<span class='help-block'>","</span>");?>
                            </div>

                             <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" 
                                value="<?php echo $usuario->telefono;?>">
                            </div>

                             <div class="form-group <?php echo !empty(form_error("email")) ? 'has-error':''?>">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" class="form-control" 
                                value="<?php echo $usuario->email;?>">
                                <?php echo form_error("email","<span class='help-block'>","</span>");?>
                            </div>

                             <div class="form-group <?php echo !empty(form_error("username")) ? 'has-error':''?>">
                                <label for="username">Usuario:</label>
                                <input type="text" name="username" id="username" class="form-control" 
                                value="<?php echo $usuario->username;?>">
                                <?php echo form_error("username","<span class='help-block'>","</span>");?>
                            </div>
                            
                             <div class="form-group">
                                <label for="rol">Roles:</label>
                                <select name="rol" id="rol" class="form-control"> 
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->id;?>"
                                            <?php echo $rol->id == $usuario->rol_id ? "selected" : "";?>>
                                            <?php echo $rol->nombre;?>
                                        </option>
                                    <?php endforeach; ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Guardar">
                            </div>
                       </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
