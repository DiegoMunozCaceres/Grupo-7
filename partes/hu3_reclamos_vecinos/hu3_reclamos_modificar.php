<div class="modal fade bd-example-modal-lg" id="reclamo" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="font-weight-bold mb-0 w-100 text-center">Editar Reclamos</h2>
                            <button type="button" class="btn btn-primary" id="cerrarFormulario" class="close"
                                data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="was-validated" method="POST" id="formulario_reclamos" name="formulario_reclamos"
                                action="../partes/hu3_reclamos_vecinos/insertar.php" onsubmit="return validar_formulario_reclamos()">
                                <div class="row">
                                    <?php $fecha = date("Y-m-d");?>
                                    <?php $mDate=new DateTime();?>
                                    <?php $hoy= $mDate->format("H:i");?>

                                    <div class="form-group col-lg-5 col-md-5">
                                        <label>Titulo</label>
                                        <input type="text" placeholder="Ingresa un Titulo"
                                            class="form-control is-invalid" autocomplete=" off" minlength="10"
                                            maxlength="50" required name="formulario_titulo">
                                        <div class="valid-feedback">
                                        Título correcto.
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-5 col-md-5">
                                        <label>Dirigido a:</label>
                                        <select id="myselect" class="form form-control is-invalid" name="formulario_destinatario_id"
                                            required>
                                            <option value="" disabled selected>Ingresa un Vecino.</option>
                                            <?php $getUsuarios= $con->query("SELECT * FROM usuario");
                                                                        while($row = mysqli_fetch_array($getUsuarios))
                                                                        {
                                                                         $usuario_nombre = $row['usuario_nombre'];
                                                                         $usuario_apellido = $row['usuario_apellido'];
                                                                         $usuario_clave = $row['usuario_id'];                                                              
                                                                   ?>
                                            <option value="<?php echo $usuario_clave; ?>">
                                                <?php echo $usuario_nombre." ".$usuario_apellido    ?>
                                            </option>
                                            <?php 
                                                                        }?>
                                        </select>
                                        <div class="valid-feedback">
                                            Aceptado.
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Descripción</label>
                                    <textarea placeholder="Ingresa una descripción" rows="10" wrap="hard"
                                        class="form-control" name="formulario_contenido" required></textarea>
                                    <div class="valid-feedback">
                                        Descripción correcta.
                                    </div>
                                </div>
                                </tr>
                                <tr>

                                    <td><input type="hidden" name="formulario_fecha" value="<?php echo $fecha;?>"></td>
                                </tr>
                                <tr>

                                    <td><input type="hidden" name="formulario_hora" value="<?php echo $hoy;?>"></td>
                                </tr>
                                <tr>
                                    <!--						<td>Usuario clave: </td>   -->
                                    <td><input type="hidden" name="formulario_remitente_id"
                                            value="<?php echo $_SESSION['id'];?>">
                                    </td>
                                </tr>
                                <tr>
                                    <!--						<td>Tipo form: </td>        -->
                                    <td><input type="hidden" name="formulario_tipo" value="Reclamo"> </td>
                                </tr>

                                <tr>
                                    <!--						<td>Destacar: </td>     -->
                                    <td><input type="hidden" name="formulario_destacar" value=1> </td>
                                </tr>

                                <!-- Siempre los reclamos tienen tipo_form 5 -->

                                <div class="d-flex justify-content-center py-2">
                                    <button type="submit" class="btn btn-primary col-lg-4 col-md-4"><b>Agregar
                                            publicación</b></button>

                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>