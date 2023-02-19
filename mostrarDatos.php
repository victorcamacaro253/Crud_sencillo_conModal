


<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


<?php

include("conexion.php");
$conexion=conexion();

$sql="SELECT * from t_persona";
$result=$conexion->query($sql);

$tabla="";

while ($datos=$result->fetch_assoc()) {
	$tabla=$tabla.'<tr>

                   <td>'.$datos['id'].'</td>
                   <td>'.$datos['nombre'].'</td>
                   <td>'.$datos['paterno'].'</td>
                   <td>'.$datos['materno'].'</td>
                   <td>'.$datos['telefono'].'</td>
                   <td>
                <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalactualizar" onclick="agregadatosparaedicion('.$datos['id'].')">
                <i class="fa fa-edit"></i>
                </span>
                    </td>
                   <td> 
                   <span class="btn btn-danger btn-sm" onclick="eliminardatos('.$datos['id'].')">
                    <i class="fa fa-trash"></i>
                    </span>
                   </td>
                   </tr>';
}

//$conexion->close();

echo '<table class="table table-stripped" id="tabla">
         <thead>
         <th>id</th>
         <th>nombre</th>
         <th>paterno</th>
         <th>materno</th>
         <th>telefono</th>
         <th>editar</th>
         <th>eliminar</th>

         </thead>

         <tbody>'.$tabla.' </tbody>

         </table>';


?>

<script type="text/javascript">
    
    var tabla= document.querySelector('#tabla');

    var dataTable=new DataTable(tabla,{

        perPage:3,
        perPageSelect:[3,6,9,12]
    });
</script>