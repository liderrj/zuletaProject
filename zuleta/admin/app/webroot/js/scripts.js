// Scripts Generales
// Autor:  Mirella Zuleta
// Fecha: 20/02/2014

//Funciones
function validarClave(){
	if($('#UsuarioClave').val()==''){
		$('#UsuarioClave').focus();
		return false;
		}
	if($('#UsuarioClave').val()!=$('#UsuarioReclave').val()){
		
		var dialogo = $('<div id="dialogoClave" title="Mensaje">Las claves no coinciden</div>');
			$('body').append(dialogo);
			
			$('#dialogoClave').dialog({
				modal:true,
				show: {
				effect: "fade",
				duration: 300
				},
				hide: {
				effect: "explode",
				duration: 300
				},
				buttons: {
					"Continuar":function(){
						$(this).dialog("close");
						$(dialogo).remove();
						$('#clave').focus();
						}		
					}
				});
			return false;
		}
		
	return true;
	}
function validarClaveEd(){
	if($('#UsuarioClave').val()!=$('#UsuarioReclave').val()){
		
		var dialogo = $('<div id="dialogoClave" title="Mensaje">Las claves no coinciden</div>');
			$('body').append(dialogo);
			
			$('#dialogoClave').dialog({
				modal:true,
				show: {
				effect: "fade",
				duration: 300
				},
				hide: {
				effect: "explode",
				duration: 300
				},
				buttons: {
					"Continuar":function(){
						$(this).dialog("close");
						$(dialogo).remove();
						$('#clave').focus();
						}		
					}
				});
			return false;
		}
		
	return true;
	}		
//Fin de funciones
//Llamadas

$(document).on('ready',function(e){
	
		$("#valnum").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ( $.inArray(event.keyCode,[46,8,9,27,13,190]) !== -1 ||
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
	});
	
//Fin de llamadas	