function uploadAjax() {
    var inputFileImage = document.getElementById("archivo");
    var file = inputFileImage.files[0];
    var data = new FormData();

    data.append('archivo', file);
    var url = "captura.php";
    $.ajax({
        url: url,
        type: 'POST',
        contentType: false,
        data: data,
        processData: false,
        cache: false
    }).done(function(data){
    	if(data.ok){
    		console.log("se subio con exito")
    	}else {
    		alert(data.msg)
    	}
    });

}



function loadRecienSelects(){
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getPersonaSelectValues',
		dataType : 'script',
		cache : false,
		contentType : false,
		processData : false,
		type : 'post',
		dataType: 'json',
		success : function(json) {
			$.each(json.tipoId, function(key, val){
				$('select[name="tipoIdentificacion"]').append($('<option>', {
				    value: val.codigo,
				    text: val.tipo
				}));
			});

			
		},
		error: function(res, ex){
			//console.log(res);
		}
	});
}

function guardarRecien(op){
	
	$.ajax({

		url : '../controller/HandlerRequest.php?op='+op,
		type : 'post',
		dataType: 'json',
		data: {
			codigo : $('input[name="codigo"]').val(), 
			tipoIdentificacion: $('select[name="tipoIdentificacion"]').val(),			
			numero: $('input[name="numero"]').val(),
			fechaNacimiento: $('input[name="fechaNacimiento"]').val(),
			sexo: $('select[name="sexo"]').val(),			
			primerNombre: $('input[name="primerNombre"]').val(),
			segundoNombre: $('input[name="segundoNombre"]').val(),
			primerApellido: $('input[name="primerApellido"]').val(),
			segundoApellido:  $('input[name="segundoApellido"]').val(),
			etnia: $('select[name="etnia"]').val(),
			tamizaje: $('select[name="tamizaje"]').val(),
            fechaTamizaje: $('input[name="fechaTamizaje"]').val() 

		}
       //data: "tipoIdentificacion="+tipoIdentificacion+"&id="+id
		,
		success: function(data){
			if(data){
				alert("Registro guardado correctamente.");				
			}
			else{
				alert("Error mientras se guardaba el registro.");
			}
			 
			 
		}
	});
}


function guardarNinosDe05(op){
	//var tipoIdentificacion = $('select[name="tipoIdentificacion"]').val();
    //var id = $('input[name="id"]').val();
    
	$.ajax({

		url : '../controller/HandlerRequest.php?op='+op,
		type : 'post',
		dataType: 'json',
		data: {
			codigo : $('input[name="codigo"]').val(), 
			tipoIdentificacion: $('select[name="tipoIdentificacion"]').val(),			
			id: $('input[name="numero"]').val(),
			fechaNacimiento: $('input[name="fechaNacimiento"]').val(),
			sexo: $('select[name="sexo"]').val(),			
			primerNombre: $('input[name="primerNombre"]').val(),
			segundoNombre: $('input[name="segundoNombre"]').val(),
			primerApellido: $('input[name="primerApellido"]').val(),
			segundoApellido:  $('input[name="segundoApellido"]').val(),
			etnia: $('select[name="etnia"]').val(),
			fechaAtencion: $('input[name="fechaAtencion"]').val(),
			finalidad: $('select[name="finalidad"]').val(),
            cups: $('select[name="cups"]').val(),
            peso:  $('input[name="peso"]').val(),
            talla:  $('input[name="talla"]').val(),
            fechaSulfato: $('input[name="fechaSulfato"]').val(),
            fechaVitamina: $('input[name="fechaVitamina"]').val(),
            fechaMicro: $('input[name="fechaMicro"]').val(),
            fechaHemo: $('input[name="fechaHemo"]').val(),
            hemo:  $('input[name="hemo"]').val()
		}
       //data: "tipoIdentificacion="+tipoIdentificacion+"&id="+id
		,
		success: function(data){
			if(data){
				alert("Registro guardado correctamente.");
				//if(op != 'editHouse'){
					//$(':input','form')
		              //.not(':button, :submit, :reset, :hidden')		              
		              //.val('')
		              //.removeAttr('checked')
		              //.removeAttr('selected');
			}
			else{
				alert("Error mientras se guardaba el registro.");
			}						 
		}
	});
}

function guardarNinosDe611(op){
	//var tipoIdentificacion = $('select[name="tipoIdentificacion"]').val();
    //var id = $('input[name="id"]').val();
    
	$.ajax({

		url : '../controller/HandlerRequest.php?op='+op,
		type : 'post',
		dataType: 'json',
		data: {
			codigo : $('input[name="codigo"]').val(), 
			tipoIdentificacion: $('select[name="tipoIdentificacion"]').val(),			
			id: $('input[name="numero"]').val(),
			fechaNacimiento: $('input[name="fechaNacimiento"]').val(),
			sexo: $('select[name="sexo"]').val(),			
			primerNombre: $('input[name="primerNombre"]').val(),
			segundoNombre: $('input[name="segundoNombre"]').val(),
			primerApellido: $('input[name="primerApellido"]').val(),
			segundoApellido:  $('input[name="segundoApellido"]').val(),
			etnia: $('select[name="etnia"]').val(),
			fechaAtencion: $('input[name="fechaAtencion"]').val(),
			finalidad: $('select[name="finalidad"]').val(),
            cups: $('select[name="cups"]').val(),
            peso:  $('input[name="peso"]').val(),
            talla:  $('input[name="talla"]').val(),            
            fechaHemo: $('input[name="fechaHemo"]').val(),
            hemo:  $('input[name="hemo"]').val()
		}
       //data: "tipoIdentificacion="+tipoIdentificacion+"&id="+id
		,
		success: function(data){
			if(data){
				alert("Registro guardado correctamente.");
				//if(op != 'editHouse'){
					//$(':input','form')
		              //.not(':button, :submit, :reset, :hidden')		              
		              //.val('')
		              //.removeAttr('checked')
		              //.removeAttr('selected');
			}
			else{
				alert("Error mientras se guardaba el registro.");
			}						 
		}
	});
}

function guardarNinosDe1217(op){
	//var tipoIdentificacion = $('select[name="tipoIdentificacion"]').val();
    //var id = $('input[name="id"]').val();
    
	$.ajax({

		url : '../controller/HandlerRequest.php?op='+op,
		type : 'post',
		dataType: 'json',
		data: {
			codigo : $('input[name="codigo"]').val(), 
			tipoIdentificacion: $('select[name="tipoIdentificacion"]').val(),			
			id: $('input[name="numero"]').val(),
			fechaNacimiento: $('input[name="fechaNacimiento"]').val(),
			sexo: $('select[name="sexo"]').val(),			
			primerNombre: $('input[name="primerNombre"]').val(),
			segundoNombre: $('input[name="segundoNombre"]').val(),
			primerApellido: $('input[name="primerApellido"]').val(),
			segundoApellido:  $('input[name="segundoApellido"]').val(),
			etnia: $('select[name="etnia"]').val(),
			fechaAtencion: $('input[name="fechaAtencion"]').val(),
			finalidad: $('select[name="finalidad"]').val(),
            cups: $('select[name="cups"]').val(),
            peso:  $('input[name="peso"]').val(),
            talla:  $('input[name="talla"]').val(),            
            fechaHemo: $('input[name="fechaHemo"]').val(),
            hemo:  $('input[name="hemo"]').val()
		}
       //data: "tipoIdentificacion="+tipoIdentificacion+"&id="+id
		,
		success: function(data){
			if(data){
				alert("Registro guardado correctamente.");
				//if(op != 'editHouse'){
					//$(':input','form')
		              //.not(':button, :submit, :reset, :hidden')		              
		              //.val('')
		              //.removeAttr('checked')
		              //.removeAttr('selected');
			}
			else{
				alert("Error mientras se guardaba el registro.");
			}						 
		}
	});
}

function guardarGestante(op){
	//var tipoIdentificacion = $('select[name="tipoIdentificacion"]').val();
    //var id = $('input[name="id"]').val();
    
	$.ajax({

		url : '../controller/HandlerRequest.php?op='+op,
		type : 'post',
		dataType: 'json',
		data: {
			codigo : $('input[name="codigo"]').val(), 
			tipoIdentificacion: $('select[name="tipoIdentificacion"]').val(),			
			id: $('input[name="numero"]').val(),			
			fechaNacimiento: $('input[name="fechaNacimiento"]').val(),
			primerNombre: $('input[name="primerNombre"]').val(),
			segundoNombre: $('input[name="segundoNombre"]').val(),
			primerApellido: $('input[name="primerApellido"]').val(),
			segundoApellido:  $('input[name="segundoApellido"]').val(),
			etnia: $('select[name="etnia"]').val(),
			fechaAtencion: $('input[name="fechaAtencion"]').val(),
			finalidad: $('select[name="finalidad"]').val(),
            cups: $('select[name="cups"]').val(),                                
            gestacional:  $('input[name="gestacional"]').val(),            
            fechafolico:  $('input[name="fechafolico"]').val(),
            fechaSulfato: $('input[name="fechaSulfato"]').val(),
            fechaCarbonato:$('input[name="fechaCarbonato"]').val(),
            fechaAntigeno:$('input[name="fechaAntigeno"]').val(),
            resultadoAntigeno: $('select[name="resultadoAntigeno"]').val(), 
            fechaSerologia: $('input[name="fechaSerologia"]').val(),
            resultadoSerologia: $('select[name="resultadoSerologia"]').val(),
            fechaAsesoria: $('input[name="fechaAsesoria"]').val(),
            fechaTomaElisa: $('input[name="fechaTomaElisa"]').val(),
            resultadoElisa: $('select[name="resultadoElisa"]').val(),
            fechaHemo: $('input[name="fechaHemo"]').val(),
            hemo:  $('input[name="hemo"]').val(),
            fechaConsejeria:  $('input[name="fechaConsejeria"]').val()

		}
       //data: "tipoIdentificacion="+tipoIdentificacion+"&id="+id
		,
		success: function(data){
			if(data){
				alert("Registro guardado correctamente.");
				//if(op != 'editHouse'){
					//$(':input','form')
		              //.not(':button, :submit, :reset, :hidden')		              
		              //.val('')
		              //.removeAttr('checked')
		              //.removeAttr('selected');
			}
			else{
				alert("Error mientras se guardaba el registro.");
			}						 
		}
	});
}

function guardarParto(op){
	//var tipoIdentificacion = $('select[name="tipoIdentificacion"]').val();
    //var id = $('input[name="id"]').val();
    
	$.ajax({

		url : '../controller/HandlerRequest.php?op='+op,
		type : 'post',
		dataType: 'json',
		data: {
			codigo : $('input[name="codigo"]').val(), 
			tipoIdentificacion: $('select[name="tipoIdentificacion"]').val(),			
			id: $('input[name="numero"]').val(),			
			
			primerNombre: $('input[name="primerNombre"]').val(),
			segundoNombre: $('input[name="segundoNombre"]').val(),
			primerApellido: $('input[name="primerApellido"]').val(),
			segundoApellido:  $('input[name="segundoApellido"]').val(),
			etnia: $('select[name="etnia"]').val(),
			fechaAtencion: $('input[name="fechaAtencion"]').val(),
			finalidad: $('select[name="finalidad"]').val(),
            cups: $('select[name="cups"]').val(),                                
            
            toma_prueba_sifi: $('select[name="prueba_sifilis"]').val(),           
            fecha_prueba_sifi:  $('input[name="fechaSifilis"]').val(),
            resultado_sero: $('select[name="resultado_sifilis"]').val(),

            asesoria_pre_elisa: $('select[name="asesoria_elisa"]').val(),            
            fecha_ases_elisa: $('input[name="fechaAsesoria"]').val(),
            toma_prueba_vih: $('select[name="toma_prueba_vih"]').val(),
            fechaPruebaVih:  $('input[name="fechaPruebaVih"]').val(),           
            resultadoPruebaVih: $('select[name="resultadoPruebaVih"]').val(),
            sumAnticonceptivo: $('select[name="sumAnticonceptivo"]').val(),
            fechaAnticonceptivo: $('input[name="fechaAnticonceptivo"]').val()          
     
		}
       //data: "tipoIdentificacion="+tipoIdentificacion+"&id="+id
		,
		success: function(data){
			if(data){
				//alert("Registro guardado correctamente.");
				$("#mostrarmodal").modal("show");
				
				//if(op != 'editHouse'){
					//$(':input','form')
		              //.not(':button, :submit, :reset, :hidden')		              
		              //.val('')
		              //.removeAttr('checked')
		              //.removeAttr('selected');
			}
			else{
				alert("Error mientras se guardaba el registro.");
			}						 
		}
	});
}

function getMeta(id){	
	//identificacion = $("#identificacion").val();
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getMeta'+'&id='+id,
		type : 'post',
		dataType: 'json',
		data: {
			
		},
		success : function(json) {
			//alert(json.personas[0].numero);
			$("#meta1").text(parseInt(json.metas[0].m1_cyd/6,10));
			$("#meta2").text(parseInt(json.metas[0].m2_joven_10_13/6,10));
			$("#meta3").text(parseInt(json.metas[0].m3_joven_14_16/6,10));
			$("#meta4").text(parseInt(json.metas[0].m4_joven_17_21/6,10));
			$("#meta5").text(parseInt(json.metas[0].m5_joven_22_24/6,10));
			$("#meta6").text(parseInt(json.metas[0].m6_joven_25_29/6,10));
			$("#meta7").text(parseInt(json.metas[0].m7_joven_hemoglo/6,10));
			$("#meta8").text(parseInt(json.metas[0].m8_adulto/6,10));
			$("#meta9").text(parseInt(json.metas[0].m9_adulto_glic/6,10));
			$("#meta10").text(parseInt(json.metas[0].m10_adulto_crea/6,10));
			$("#meta11").text(parseInt(json.metas[0].m11_adulto_hdl/6,10));
			$("#meta12").text(parseInt(json.metas[0].m12_cito/6,10));
			$("#meta13").text(parseInt(json.metas[0].m13_agudeza/6,10));
			$("#meta14").text(parseInt(json.metas[0].m14_oftal/6,10));
			$("#meta15").text(parseInt(json.metas[0].m15_controlp/6,10));
            var meta1 = parseInt(json.metas[0].m1_cyd/6,10);
            var meta2 = parseInt(json.metas[0].m2_joven_10_13/6,10);
            var meta3 = parseInt(json.metas[0].m3_joven_14_16/6,10);
            var meta4 = parseInt(json.metas[0].m4_joven_17_21/6,10);
            var meta5 = parseInt(json.metas[0].m5_joven_22_24/6,10);
            var meta6 = parseInt(json.metas[0].m6_joven_25_29/6,10);
            var meta7 = parseInt(json.metas[0].m7_joven_hemoglo/6,10);
            var meta8 = parseInt(json.metas[0].m8_adulto/6,10);
            var meta9 = parseInt(json.metas[0].m9_adulto_glic/6,10);
            var meta10 = parseInt(json.metas[0].m10_adulto_crea/6,10);
            var meta11 = parseInt(json.metas[0].m11_adulto_hdl/6,10);
            var meta12 = parseInt(json.metas[0].m12_cito/6,10);
            var meta13 = parseInt(json.metas[0].m13_agudeza/6,10);
            var meta14 = parseInt(json.metas[0].m14_oftal/6,10);
            var meta15 = parseInt(json.metas[0].m15_controlp/6,10);
            var simb = '%';
			
			//var valor = $('#var69').text();
			var pm1 = $('#var69').text()/meta1*100;			
			$("#pmeta1").text(pm1.toFixed(2).concat(simb));
			
			var pm2 = $('#var72_10_13').text()/meta2*100;
			$("#pmeta2").text(pm2.toFixed(2).concat(simb));

			var pm3 = $('#var72_14_16').text()/meta3*100;
			$("#pmeta3").text(pm3.toFixed(2).concat(simb));

			var pm4 = $('#var72_17_21').text()/meta4*100;
			$("#pmeta4").text(pm4.toFixed(2).concat(simb));

			var pm5 = $('#var72_22_24').text()/meta5*100;
			$("#pmeta5").text(pm5.toFixed(2).concat(simb));

			var pm6 = $('#var72_25_29').text()/meta6*100;
			$("#pmeta6").text(pm6.toFixed(2).concat(simb));

			var pm7 = $('#var103').text()/meta7*100;
			$("#pmeta7").text(pm7.toFixed(2).concat(simb));

            var pm8 = $('#var73').text()/meta8*100;
			$("#pmeta8").text(pm8.toFixed(2).concat(simb));

			var pm9 = $('#var105').text()/meta9*100;
			$("#pmeta9").text(pm9.toFixed(2).concat(simb));

			var pm10 = $('#var106').text()/meta10*100;
			$("#pmeta10").text(pm10.toFixed(2).concat(simb));

			var pm11 = $('#var111').text()/meta11*100;
			$("#pmeta11").text(pm11.toFixed(2).concat(simb));

			var pm12 = $('#var87').text()/meta12*100;
			$("#pmeta12").text(pm12.toFixed(2).concat(simb));

			var pm13 = $('#var62').text()/meta13*100;
			$("#pmeta13").text(pm13.toFixed(2).concat(simb));

			var pm14 = $('#var63').text()/meta14*100;
			$("#pmeta14").text(pm14.toFixed(2).concat(simb));

			var pm15 = $('#var48').text()/meta15*100;
			$("#pmeta15").text(pm15.toFixed(2).concat(simb));




			

			


		}
	});
}


function getInfoRecien(id){	
	//identificacion = $("#identificacion").val();
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getInfoRecien'+'&id='+id,
		type : 'post',
		dataType: 'json',
		data: {
			
		},
		success : function(json) {
			//alert(json.personas[0].numero);
			$('input[name="numero"]').val(json.personas[0].numero);	
			$('select[name="tipoIdentificacion"]').val(json.personas[0].tipoide);	
		    $('input[name="primerNombre"]').val(json.personas[0].primer_nombre);
			$('input[name="segundoNombre"]').val(json.personas[0].segundo_nombre);
			$('input[name="primerApellido"]').val(json.personas[0].primer_apellido);
			$('input[name="segundoApellido"]').val(json.personas[0].segundo_apellido);
			$('input[name="fechaNacimiento"]').val(json.personas[0].fecha_nac);
            $('select[name="sexo"]').val(json.personas[0].sexo);
            $('select[name="etnia"]').val(json.personas[0].etnia);
		    $('select[name="tamizaje"]').val(json.personas[0].tamizaje);
			$('input[name="fechaTamizaje"]').val(json.personas[0].fechatamizaje);					
		}
	});
}

function getInfoNinos05(id){	
	//identificacion = $("#identificacion").val();
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getInfoNinos05'+'&id='+id,
		type : 'post',
		dataType: 'json',
		data: {
			
		},
		success : function(json) {
			//alert(json.personas[0].numero);
			$('input[name="numero"]').val(json.personas[0].numero);	
			$('select[name="tipoIdentificacion"]').val(json.personas[0].tipoide);	
		    $('input[name="primerNombre"]').val(json.personas[0].primer_nombre);
			$('input[name="segundoNombre"]').val(json.personas[0].segundo_nombre);
			$('input[name="primerApellido"]').val(json.personas[0].primer_apellido);
			$('input[name="segundoApellido"]').val(json.personas[0].segundo_apellido);
			$('input[name="fechaNacimiento"]').val(json.personas[0].fecha_nac);
            $('select[name="sexo"]').val(json.personas[0].sexo);
            $('select[name="etnia"]').val(json.personas[0].etnia);		    
			$('input[name="fechaAtencion"]').val(json.personas[0].fecha_atencion);								
			$('select[name="finalidad"]').val(json.personas[0].finalidad_consulta);
			$('select[name="cups"]').val(json.personas[0].codigo_cups);
            $('input[name="peso"]').val(json.personas[0].peso);					
            $('input[name="talla"]').val(json.personas[0].talla);
            $('input[name="fechaSulfato"]').val(json.personas[0].fecha_sum_sulfato);
            $('input[name="fechaVitamina"]').val(json.personas[0].fecha_sum_vitamina);
            $('input[name="fechaMicro"]').val(json.personas[0].fecha_sum_micronut);
            $('input[name="fechaHemo"]').val(json.personas[0].fecha_hemoglobina);
            $('input[name="hemo"]').val(json.personas[0].resulado_hemoglobina);
		}
	});
}

function getInfoNinos611(id){	
	//identificacion = $("#identificacion").val();
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getInfoNinos611'+'&id='+id,
		type : 'post',
		dataType: 'json',
		data: {
			
		},
		success : function(json) {
			//alert(json.personas[0].numero);
			$('input[name="numero"]').val(json.personas[0].numero);	
			$('select[name="tipoIdentificacion"]').val(json.personas[0].tipoide);	
		    $('input[name="primerNombre"]').val(json.personas[0].primer_nombre);
			$('input[name="segundoNombre"]').val(json.personas[0].segundo_nombre);
			$('input[name="primerApellido"]').val(json.personas[0].primer_apellido);
			$('input[name="segundoApellido"]').val(json.personas[0].segundo_apellido);
			$('input[name="fechaNacimiento"]').val(json.personas[0].fecha_nac);
            $('select[name="sexo"]').val(json.personas[0].sexo);
            $('select[name="etnia"]').val(json.personas[0].etnia);		    
			$('input[name="fechaAtencion"]').val(json.personas[0].fecha_atencion);								
			$('select[name="finalidad"]').val(json.personas[0].finalidad_consulta);
			$('select[name="cups"]').val(json.personas[0].codigo_cups);
            $('input[name="peso"]').val(json.personas[0].peso);					
            $('input[name="talla"]').val(json.personas[0].talla);            
            $('input[name="fechaHemo"]').val(json.personas[0].fecha_hemoglobina);
            $('input[name="hemo"]').val(json.personas[0].resulado_hemoglobina);
		}
	});
}

function getInfoNinos1217(id){	
	//identificacion = $("#identificacion").val();
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getInfoNinos1217'+'&id='+id,
		type : 'post',
		dataType: 'json',
		data: {
			
		},
		success : function(json) {
			//alert(json.personas[0].numero);
			$('input[name="numero"]').val(json.personas[0].numero);	
			$('select[name="tipoIdentificacion"]').val(json.personas[0].tipoide);	
		    $('input[name="primerNombre"]').val(json.personas[0].primer_nombre);
			$('input[name="segundoNombre"]').val(json.personas[0].segundo_nombre);
			$('input[name="primerApellido"]').val(json.personas[0].primer_apellido);
			$('input[name="segundoApellido"]').val(json.personas[0].segundo_apellido);
			$('input[name="fechaNacimiento"]').val(json.personas[0].fecha_nac);
            $('select[name="sexo"]').val(json.personas[0].sexo);
            $('select[name="etnia"]').val(json.personas[0].etnia);		    
			$('input[name="fechaAtencion"]').val(json.personas[0].fecha_atencion);								
			$('select[name="finalidad"]').val(json.personas[0].finalidad_consulta);
			$('select[name="cups"]').val(json.personas[0].codigo_cups);
            $('input[name="peso"]').val(json.personas[0].peso);					
            $('input[name="talla"]').val(json.personas[0].talla);            
            $('input[name="fechaHemo"]').val(json.personas[0].fecha_hemoglobina);
            $('input[name="hemo"]').val(json.personas[0].resulado_hemoglobina);
		}
	});
}

function getInfoGestante(id){	
	//identificacion = $("#identificacion").val();
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getInfoGestante'+'&id='+id,
		type : 'post',
		dataType: 'json',
		data: {
			
		},
		success : function(json) {
			//alert(json.personas[0].numero);
			$('input[name="numero"]').val(json.personas[0].numero);	
			$('select[name="tipoIdentificacion"]').val(json.personas[0].tipoide);	
		    $('input[name="primerNombre"]').val(json.personas[0].primer_nombre);
			$('input[name="segundoNombre"]').val(json.personas[0].segundo_nombre);
			$('input[name="primerApellido"]').val(json.personas[0].primer_apellido);
			$('input[name="segundoApellido"]').val(json.personas[0].segundo_apellido);
			$('input[name="fechaNacimiento"]').val(json.personas[0].fecha_nac);
            $('input[name="gestacional"]').val(json.personas[0].edad_gestacional);
            $('select[name="etnia"]').val(json.personas[0].etnia);		    
			$('input[name="fechaAtencion"]').val(json.personas[0].fecha_atencion);								
			$('select[name="finalidad"]').val(json.personas[0].finalidad_consulta);
			$('select[name="cups"]').val(json.personas[0].codigo_cups);

            $('input[name="fechafolico"]').val(json.personas[0].fecha_sum_acido_fol);					
            $('input[name="fechaSulfato"]').val(json.personas[0].fecha_sum_sulf_ferr);            
            $('input[name="fechaCarbonato"]').val(json.personas[0].fecha_sum_carb_cal);
            $('input[name="fechaAntigeno"]').val(json.personas[0].fecha_toma_anti_hep);
            $('select[name="resultadoAntigeno"]').val(json.personas[0].resultado_anti_hep);					

            $('input[name="fechaSerologia"]').val(json.personas[0].fecha_toma_serologia);					
            $('select[name="resultadoSerologia"]').val(json.personas[0].resultado_serologia);            
            $('input[name="fechaAsesoria"]').val(json.personas[0].fecha_asesoria_elisa);
            $('input[name="fechaTomaElisa"]').val(json.personas[0].fecha_toma_elisa);

            $('select[name="resultadoElisa"]').val(json.personas[0].resultado_elisa);
            $('input[name="fechaHemo"]').val(json.personas[0].fecha_hemoglobina);
            $('input[name="hemo"]').val(json.personas[0].resultado_hemoglobina);
            $('input[name="fechaConsejeria"]').val(json.personas[0].fecha_cons_lactancia);

		}
		
	});
}

function getInfoParto(id){	
	//identificacion = $("#identificacion").val();
	$.ajax({
		url : '../controller/HandlerRequest.php?op=getInfoParto'+'&id='+id,
		type : 'post',
		dataType: 'json',
		data: {
			
		},
		success : function(json) {
			//alert(json.personas[0].numero);
			$('input[name="numero"]').val(json.personas[0].numero);	
			$('select[name="tipoIdentificacion"]').val(json.personas[0].tipoide);	
		    $('input[name="primerNombre"]').val(json.personas[0].primer_nombre);
			$('input[name="segundoNombre"]').val(json.personas[0].segundo_nombre);
			$('input[name="primerApellido"]').val(json.personas[0].primer_apellido);
			$('input[name="segundoApellido"]').val(json.personas[0].segundo_apellido);
			            
            $('select[name="etnia"]').val(json.personas[0].etnia);		    
			$('input[name="fechaAtencion"]').val(json.personas[0].fecha_atencion);								
			$('select[name="finalidad"]').val(json.personas[0].finalidad_consulta);
			$('select[name="cups"]').val(json.personas[0].codigo_cups);



            $('select[name="prueba_sifilis"]').val(json.personas[0].toma_prueba_sifilis);					
            $('input[name="fechaSifilis"]').val(json.personas[0].fecha_toma_sifilis );            
            $('select[name="resultado_sifilis"]').val(json.personas[0].resultado_serologia);
            $('select[name="asesoria_elisa"]').val(json.personas[0].asesoria_pre_elisa);
            $('input[name="fechaAsesoria"]').val(json.personas[0].fecha_asesoria_elisa);					
            $('select[name="toma_prueba_vih"]').val(json.personas[0].toma_prueba_vih);
            $('input[name="fechaPruebaVih"]').val(json.personas[0].fecha_toma_vih);
            $('select[name="resultadoPruebaVih"]').val(json.personas[0].resultado_vih);					
            $('select[name="sumAnticonceptivo"]').val(json.personas[0].sum_anticon_post);            
            $('input[name="fechaAnticonceptivo"]').val(json.personas[0].fecha_sum_anti);            

		}
		
	});
}

function getListaPersona(){	
	tipo = $('select[name="tipo"]').val(),
	identificacion = $("#identificacion").val();
	$.ajax({		
		url : '../controller/HandlerRequest.php?op=getListaPersona',
		type : 'post',
		dataType: 'json',
		data: {
			tipo:tipo,
			identificacion: identificacion
		},
		success : function(data) {
            
			var tableData;

            tableData = data.personas;

            $("#tbl").empty();

            var rowH = "<tr><th>Codigo</th><th>Fecha Atención</th><th>Identificación</th><th>Primer Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Actualizar</th><th>Eliminar</th></tr>";

			$("#tbl").append( rowH );

            if (tipo == 1){

				// Add las filas a las tablas

				jQuery.each( tableData, function( i, tableData ) {	

					var rowHTML = "<tr><td>"+ tableData.id+"</td><td>"+ tableData.fechatamizaje+"</td><td>"+ tableData.numero+"</td><td>"+ tableData.primer_nombre+"</td><td>"+ tableData.primer_apellido+"</td><td>"

					+ tableData.segundo_apellido+"</td><td><a href='../view/editrecien.php?id="+tableData.id+"'><i class='fa fa-cog' style='font-size:24px'></i></a></td><td><i class='fa fa-close' style='font-size:24px'></i></td>";	

					
					rowHTML += "</tr>";

					$("#tbl").append( rowHTML);


				}); 
			}
			else  if (tipo == 2){    
				// Add las filas a las tablas

				jQuery.each( tableData, function( i, tableData ) {	

					var rowHTML = "<tr><td>"+ tableData.id+"</td><td>"+ tableData.fecha_atencion+"</td><td>"+ tableData.numero+"</td><td>"+ tableData.primer_nombre+"</td><td>"+ tableData.primer_apellido+"</td><td>"

					+ tableData.segundo_apellido+"</td><td><a href='../view/editninos05.php?id="+tableData.id+"'><i class='fa fa-cog' style='font-size:24px'></i></a></td><td><i class='fa fa-close' style='font-size:24px'></i></td>";	

					
					rowHTML += "</tr>";

					$("#tbl").append( rowHTML);


				}); 

			}
			else  if (tipo == 3){    
				// Add las filas a las tablas

				jQuery.each( tableData, function( i, tableData ) {	

					var rowHTML = "<tr><td>"+ tableData.id+"</td><td>"+ tableData.fecha_atencion+"</td><td>"+ tableData.numero+"</td><td>"+ tableData.primer_nombre+"</td><td>"+ tableData.primer_apellido+"</td><td>"

					+ tableData.segundo_apellido+"</td><td><a href='../view/editninos611.php?id="+tableData.id+"'><i class='fa fa-cog' style='font-size:24px'></i></a></td><td><i class='fa fa-close' style='font-size:24px'></i></td>";	

					
					rowHTML += "</tr>";

					$("#tbl").append( rowHTML);


				}); 

			}
			else  if (tipo == 4){    
				// Add las filas a las tablas

				jQuery.each( tableData, function( i, tableData ) {	

					var rowHTML = "<tr><td>"+ tableData.id+"</td><td>"+ tableData.fecha_atencion+"</td><td>"+ tableData.numero+"</td><td>"+ tableData.primer_nombre+"</td><td>"+ tableData.primer_apellido+"</td><td>"

					+ tableData.segundo_apellido+"</td><td><a href='../view/editninos1217.php?id="+tableData.id+"'><i class='fa fa-cog' style='font-size:24px'></i></a></td><td><i class='fa fa-close' style='font-size:24px'></i></td>";	

					
					rowHTML += "</tr>";

					$("#tbl").append( rowHTML);


				}); 

			}

			else  if (tipo == 5){    
				// Add las filas a las tablas

				jQuery.each( tableData, function( i, tableData ) {	

					var rowHTML = "<tr><td>"+ tableData.id+"</td><td>"+ tableData.fecha_atencion+"</td><td>"+ tableData.numero+"</td><td>"+ tableData.primer_nombre+"</td><td>"+ tableData.primer_apellido+"</td><td>"

					+ tableData.segundo_apellido+"</td><td><a href='../view/editgestante.php?id="+tableData.id+"'><i class='fa fa-cog' style='font-size:24px'></i></a></td><td><i class='fa fa-close' style='font-size:24px'></i></td>";	

					
					rowHTML += "</tr>";

					$("#tbl").append( rowHTML);


				}); 

			}

			else  if (tipo == 6){    
				// Add las filas a las tablas

				jQuery.each( tableData, function( i, tableData ) {	

					var rowHTML = "<tr><td>"+ tableData.id+"</td><td>"+ tableData.fecha_atencion+"</td><td>"+ tableData.numero+"</td><td>"+ tableData.primer_nombre+"</td><td>"+ tableData.primer_apellido+"</td><td>"

					+ tableData.segundo_apellido+"</td><td><a href='../view/editparto.php?id="+tableData.id+"'><i class='fa fa-cog' style='font-size:24px'></i></a></td><td><i class='fa fa-close' style='font-size:24px'></i></td>";	

					
					rowHTML += "</tr>";

					$("#tbl").append( rowHTML);


				}); 

			}                  	    	
      	

			
		/*	$('input[name="id"]').val(json.id);	
			$('select[name="tipoIdentificacion"]').val(json.tipo_id);	
		    $('input[name="primerNombre"]').val(json.pnombre);
			$('input[name="segundoNombre"]').val(json.snombre);
			$('input[name="primerApellido"]').val(json.papellido);
			$('input[name="segundoApellido"]').val(json.sapellido);
			$('input[name="fechaNacimiento"]').val(json.fecha_nac);
            $('select[name="sexo"]').val(json.sexo);
            $('select[name="etnia"]').val(json.etnia);
		    $('select[name="tamizaje"]').val(json.tamizaje);
			$('input[name="fechaTamizaje"]').val(json.fecha_nac);	*/				
		}



	});
}




