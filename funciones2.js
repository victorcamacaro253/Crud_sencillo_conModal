function mostrarDatos(){
	$.ajax({
		url:"mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);

		}
	})
}




function agregardatos(){
	
	if($('#nombre').val()==""){
		swal("debes agregar un nombre");
		return false;
	}

        $.ajax({
    	type:"POST",
    	data:$('#frmagregardatos').serialize(),
    	url:"agregardatos.php",
    	success:function(r){
    		
    		
    			$('#frmagregardatos')[0].reset();
    			mostrarDatos();
    			swal("agregado con exito");
    		
    		

          //$('#frmagregardatos')[0].reset();
           
          //$('#frmagregardatos').load('#modalinsertar');
          //mostrardatos();
          //swal("agregado con exito");
      

    	}
    });

}



	
	



function agregadatosparaedicion(id){

	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"datosupdate.php",
		success:function(r){
        datos=jQuery.parseJSON(r);

        $('#idu').val(datos['id']);
        $('#nombreu').val(datos['nombre']);
        $('#paternou').val(datos['paterno']);
        $('#maternou').val(datos['materno']);
        $('#telefonou').val(datos['telefono']);
		}
	});
}


function actualizardatos(){
	if ($('#nombreu').val()==""){
		swal("debes agregar un nombre");
		return false;
	} 
	$.ajax({
		type:"POST",
		data:$('#frmagregardatosu').serialize(),
		url:"actualizardatos.php",
		success:function(r){
			if (r==1) {
				
				mostrarDatos();
				swal("actualizado con exito","success");

			}else{
				swal("fallo al actualizar","error");
			}
		}
	});

}



function eliminardatos(idnombre){



		     $.ajax({
				type:"POST",
				data:"id=" + idnombre,
				url:"eliminardatos.php",
				success:function(r){
					if(r==1){
						mostrarDatos();
						swal("eliminado con exito","success");

					}else{
						swal("fallo al eliminar");
					}
				}

			});
		}
