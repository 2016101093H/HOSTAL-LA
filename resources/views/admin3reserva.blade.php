@extends('plantilla')
@section('contenido')
        <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
                <div  class = "container-fluid">
                    <div class = "navbar-header">
                        <a class = "navbar-brand" >Reserva en línea del hotel</a>
                    </div>
                    <ul class = "nav navbar-nav pull-right ">
                        <li class = "dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class = "container-fluid">	
                <ul class = "nav nav-pills">
                    <li class = "active"><a href = "LOSANGELES_adminportaL_cuenta">Cuentas</a></li>
                    <li><a href = "LOSANGELES_adminportal_reserva">Reserva</a></li>
                    <li><a href = "LOSANGELES_adminportal_habitaciones">Habitación</a></li>	
                                    
                </ul>	
            </div>
            <br />
            <div class = "container-fluid">	
                <div class = "panel panel-default">
                    <?php
                        $q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
                        $f_p = $q_p->fetch_array();
                        $q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
                        $f_ci = $q_ci->fetch_array();
                    ?>
                    <div class = "panel-body">
                        <a class = "btn btn-success disabled"><span class = "badge"><?php echo $f_p['total']?></span> Pendientes</a>
                        <a class = "btn btn-info" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Registrarse</a>
                        <a class = "btn btn-warning" href = "checkout.php"><i class = "glyphicon glyphicon-eye-open"></i> Revisa</a>
                        <br />
                        <br />
                        <table id = "table" class = "table table-bordered">
                            <thead>
                                <tr>
                            <th> Nombre </th>
                            <th> Contacto No </th>
                            <th> Tipo de habitación </th>
                            <th> Fecha reservada </th>
                            <th> Estado </th>
                            <th> Acción </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = 'Pending'") or die(mysqli_error());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <tr>
                                    <td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
                                    <td><?php echo $fetch['contactno']?></td>
                                    <td><?php echo $fetch['room_type']?></td>
                                    <td><strong><?php if($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))){echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}else{echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}?></strong></td>
                                    <td><?php echo $fetch['status']?></td>
                                    <td><center><a class = "btn btn-success" href = "confirm_LOSANGELES_adminportal_reserva?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-check"></i> Registrarse</a> <a class = "btn btn-danger" onclick = "confirmationDelete(); return false;" href = "delete_pending.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-trash"></i> Descarte</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <br />
        </body>
        <script src = "../js/jquery.js"></script>
        <script src = "../js/bootstrap.js"></script>
        <script src = "../js/jquery.dataTables.js"></script>
        <script src = "../js/dataTables.bootstrap.js"></script>	
        <script type = "text/javascript">
            $(document).ready(function(){
                $("#table").DataTable();
            });
        </script>
        <script type = "text/javascript">
            function confirmationDelete(anchor){
                var conf = confirm("Are you sure you want to delete this record?");
                if(conf){
                    window.location = anchor.attr("href");
                }
            } 
        </script>
@endsection