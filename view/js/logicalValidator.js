$(document).ready(function(){
	$("#hasAnAnimal").change(function(){
		haveAnAnimal();
	});
	$("#hasCommercialActivity").change(function(){
		hasCommercialActivity();
	});
	$('input[name="perro"]').click(function(evt){
        if($(this).is(":checked")) {
            $("#ifAnimal .hiddenForm").hide();
            $("#formPerro").show();
        }else{
            if($("#formPerro").is(':visible')){
                $("#formPerro").hide();
            }else{
                $("#ifAnimal .hiddenForm").hide();
                $("#formPerro").show();
                evt.preventDefault();
            }
        }
    });
    $('input[name="gato"]').click(function(evt){
        if($(this).is(":checked")) {
            $("#ifAnimal .hiddenForm").hide();
            $("#formGato").show();
        }else{
            if($("#formGato").is(':visible')){
                $("#formGato").hide();
            }else{
                $("#ifAnimal .hiddenForm").hide();
                $("#formGato").show();
                evt.preventDefault();
            }
        }
    });
    $('input[name="equino"]').click(function(evt){
        if($(this).is(":checked")) {
            $("#ifAnimal .hiddenForm").hide();
            $("#formEquino").show();
        }else{
            if($("#formEquino").is(':visible')){
                $("#formEquino").hide();    
            }else{
                $("#ifAnimal .hiddenForm").hide();
                $("#formEquino").show();
                evt.preventDefault();
            }
        }
    });
    $('input[name="bovino"]').click(function(evt){
        if($(this).is(":checked")) {
            $("#ifAnimal .hiddenForm").hide();
            $("#formBovino").show();
        }else{
            if($("#formBovino").is(':visible')){
                $("#formBovino").hide();    
            }else{
                $("#ifAnimal .hiddenForm").hide();
                $("#formBovino").show();
                evt.preventDefault();
            }
        }
    });
    $('input[name="porcino"]').click(function(evt){
        if($(this).is(":checked")) {
            $("#ifAnimal .hiddenForm").hide();
            $("#formPorcino").show();
        }else{
            if($("#formPorcino").is(':visible')){
                $("#formPorcino").hide();
            }else{
                $("#ifAnimal .hiddenForm").hide();
                $("#formPorcino").show();
                evt.preventDefault();
            }
        }
    });
    $('input[name="otros"]').click(function(evt){
        if($(this).is(":checked")) {
            $("#ifAnimal .hiddenForm").hide();
            $("#formOtros").show();
        }else{
            if($("#formOtros").is(':visible')){
                $("#formOtros").hide();
            }else{
                $("#ifAnimal .hiddenForm").hide();
                $("#formOtros").show();
                evt.preventDefault();
            }
        }
    });
    $('input[name="otras"]').click(function(evt){
        if($(this).is(":checked")) {
            $("#ifAnimal .hiddenForm").hide();
            $("#formOtras").show();
        }else{
            if($("#formOtras").is(':visible')){
                $("#formOtras").hide();
            }else{
                $("#ifAnimal .hiddenForm").hide();
                $("#formOtras").show();
                evt.preventDefault();
            }
        }
    });
    $("select[name='tipoIdentificacion']").change(function(){
        if($("select[name='tipoIdentificacion']").val() !== ""){
            $("#numeroId").show();
        }else{
            $("#numeroId").hide();
        }
    });
    $("select[name='seguridadSocial']").change(function(){
        if($("select[name='seguridadSocial']").val() === "1"){
            $("#segSoc").show();
        }else{
            $("#segSoc").hide();
        }
    });
    $("select[name='sexo']").change(function(){
        if($("#grupo").val() === "3"){
            if($("select[name='sexo']").val() === "f"){
                $("#mujer").show();
                for (var i = 0; i <= 16; i++) {
                    $('select[name="numeroHijos"]').append($('<option>', {
                        value: i,
                        text: i
                    }));
                }
                $('select[name="numeroHijos"]').append($('<option>', {
                    value: 17,
                    text: "Más"
                }));
                for (var i = 0; i <= 16; i++) {
                    $('select[name="numeroEmbarazos"]').append($('<option>', {
                        value: i,
                        text: i
                    }));
                }
                $('select[name="numeroEmbarazos"]').append($('<option>', {
                    value: 17,
                    text: "Más"
                }));
                for (var i = 0; i <= 9; i++) {
                    $('select[name="hijosMuertos"]').append($('<option>', {
                        value: i,
                        text: i
                    }));
                }
            }else if($("select[name='sexo']").val() === "m"){
                $("#mujer").hide();
                $('select[name="numeroHijos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                $('select[name="numeroEmbarazos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                $('select[name="hijosMuertos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                $("#hombre").show();
            }else{
                $("#mujer").hide();
                $('select[name="numeroHijos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                $('select[name="numeroEmbarazos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                $('select[name="hijosMuertos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                $("#hombre").hide();
            }
        }else if($("#grupo").val() === "4" || $("#grupo").val() === "5"){
            if($("select[name='sexo']").val() === "f"){
                $("#hombre").hide();
                $("#mujer").show();
            }else if($("select[name='sexo']").val() === "m"){
                $("#mujer").hide();
                $("#hombre").show();
            }else{
                $("#mujer").hide();
                $("#hombre").hide();
            }
        }
    });
    $("#victimaConflicto").change(function(){
        if($("select[name='victimaConflicto']").val() === "1"){
            $("#contenedorVictimas").show();
        }else{
            $("#contenedorVictimas").hide();
        }
    });

    $("select[name='interesRetorno']").change(function(){
        if($("select[name='interesRetorno']").val() === "1"){
            $("#situacionResuelta").show();
        }else{
            $("#situacionResuelta").hide();
        }
    });

    $("select[name='grupoVictimizante']").change(function(){
        if($("select[name='grupoVictimizante']").val() === "5" || $("select[name='grupoVictimizante']").val() === "6"){
            $("#nombreGrupoVictimizante").show();
        }else{
            $("#nombreGrupoVictimizante").hide();
        }
    });
});

function haveAnAnimal(){
	if($("#hasAnAnimal").val() == 1){
		$("#ifAnimal").show();
	}else{
		$("#ifAnimal").hide();
	}
}

function hasCommercialActivity(){
if($("#hasCommercialActivity").val() == 1){
		$("#commercialActivity").show();
	}else{
		$("#commercialActivity").hide();
	}
}

function getForm(){
    op = $("#grupo").val();
    switch (op){
        case "1":
            $.ajax({
                url: './atencion-especial/0a5.html',
                success: function(data){
                    $("#contenedor").html(data);
                    loadSelectsAjax(op);
                    $("select[name='control']").change(function(){
                        if($("select[name='control']").val() === "1"){
                            $("#lastControlDate").show();
                        }else{
                            $("#lastControlDate").hide();
                        }
                    });
                    $(".inmunizacionesDiv select:gt(0)").each(function(index){
                       for (var i = 0; i <= 3; i++) {$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $(".inmunizacionesDiv select:eq(0)").each(function(index){
                       for (var i = 0; i <= 3; i++){$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $(".refuerzoInmunizacionesDiv select:gt(0)").each(function(index){
                        for (var i = 0; i <= 4; i++){
                            if((this).name !== "bcgRef"){$(this).append($('<option>', {value: i,text: i}));}
                        }
                    });
                    $(".refuerzoInmunizacionesDiv select:eq(0)").each(function(index){
                       for (var i = 0; i <= 4; i++){$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $(".refuerzoInmunizacionesDiv select[name='influenzaRef']").each(function(index){
                       for (var i = 0; i <= 9; i++){$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $("select[name='tieneEsquema']").change(function(){
                        if($("select[name='tieneEsquema']").val() === "1"){
                            $("#inmunizacionesDiv select:gt(0)").each(function(index){
                                $(this).find("option:last").attr("selected","selected");
                            });
                        }else{
                            $("#inmunizacionesDiv select:gt(0)").each(function(index){
                                $(this).find("option:first").attr("selected","selected");
                            });
                        }
                    });
                }
            });
        break;
        case "2":
            $.ajax({
                url: './atencion-especial/6a9.html',
                success: function(data){
                    $("#contenedor").html(data);
                    loadSelectsAjax(op);
                    $("select[name='ultimaValoracion']").change(function(){
                        if($("select[name='ultimaValoracion']").val() === "1"){
                            $("#valoradorOral").show();
                        }else{
                            $("#valoradorOral").hide();
                        }
                    });
                    $("select[name='control']").change(function(){
                        if($("select[name='control']").val() === "1"){
                            $("#lastControlDate").show();
                        }else{
                            $("#lastControlDate").hide();
                        }
                    });
                    $(".inmunizacionesDiv select:gt(0)").each(function(index){
                       for (var i = 0; i <= 3; i++) {$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $(".inmunizacionesDiv select:eq(0)").each(function(index){
                       for (var i = 0; i <= 3; i++){$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $(".refuerzoInmunizacionesDiv select:gt(0)").each(function(index){
                        for (var i = 0; i <= 4; i++){
                            if((this).name !== "bcgRef"){$(this).append($('<option>', {value: i,text: i}));}
                        }
                    });
                    $(".refuerzoInmunizacionesDiv select:eq(0)").each(function(index){
                       for (var i = 0; i <= 4; i++){$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $(".refuerzoInmunizacionesDiv select[name='influenzaRef']").each(function(index){
                       for (var i = 0; i <= 9; i++){$(this).append($('<option>', {value: i,text: i}));}
                    });
                    $("select[name='tieneEsquema']").change(function(){
                        if($("select[name='tieneEsquema']").val() === "1"){
                            $("#inmunizacionesDiv select:gt(0)").each(function(index){
                                $(this).find("option:last").attr("selected","selected");
                            });
                        }else{
                            $("#inmunizacionesDiv select:gt(0)").each(function(index){
                                $(this).find("option:first").attr("selected","selected");
                            });
                        }
                    });
                }
            });
        break;
        case "3":
            $.ajax({
                url: './atencion-especial/10a49.html',
                success: function(data){
                    $("#contenedor").html(data);
                    loadSelectsAjax(op);
                    if($("select[name='sexo']").val() === "f"){
                        $("#hombre").hide();
                        $("#mujer").show();
                        for (var i = 0; i <= 16; i++) {
                            $('select[name="numeroHijos"]').append($('<option>', {
                                value: i,
                                text: i
                            }));
                        }
                        $('select[name="numeroHijos"]').append($('<option>', {
                            value: 17,
                            text: "Más"
                        }));
                        for (var i = 0; i <= 16; i++) {
                            $('select[name="numeroEmbarazos"]').append($('<option>', {
                                value: i,
                                text: i
                            }));
                        }
                        $('select[name="numeroEmbarazos"]').append($('<option>', {
                            value: 17,
                            text: "Más"
                        }));
                        for (var i = 0; i <= 9; i++) {
                            $('select[name="hijosMuertos"]').append($('<option>', {
                                value: i,
                                text: i
                            }));
                        }
                    }else if($("select[name='sexo']").val() === "m"){
                        $("#mujer").hide();
                        $('select[name="numeroHijos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                        $('select[name="numeroEmbarazos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                        $('select[name="hijosMuertos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                        $("#hombre").show();
                    }else{
                        $("#mujer").hide();
                        $('select[name="numeroHijos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                        $('select[name="numeroEmbarazos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                        $('select[name="hijosMuertos"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                        $("#hombre").hide();
                    }
                    $("select[name='embarazada']").change(function(){
                        if($("select[name='embarazada']").val() === "1"){
                            $("#embarazadaForm").show();
                            $("#puerperio").hide();
                            for (var i = 0; i <= 9; i++) {
                                $('select[name="cuantosControlesM"]').append($('<option>', {
                                    value: i,
                                    text: i
                                }));
                            }
                            for (var i = 0; i <= 3; i++) {
                                $('select[name="dosisTD"]').append($('<option>', {
                                    value: i,
                                    text: i
                                }));
                            }
                            for (var i = 0; i <= 4; i++) {
                                $('select[name="refuerzoTD"]').append($('<option>', {
                                    value: i,
                                    text: i
                                }));
                            }
                        }else{
                            $("#embarazadaForm").hide();
                            $("#puerperio").show();
                            $('select[name="cuantosControlesM"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                            $('select[name="dosisTD"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                            $('select[name="refuerzoTD"]').find('option').remove().end().append('<option value="">Seleccione</option>');
                        }
                    });
                    $("select[name='controlMenstruacion']").change(function(){
                        if($("select[name='controlMenstruacion']").val() === "1"){
                            $("#controlMenstruacion").show();
                        }else{
                            $("#controlMenstruacion").hide();
                        }
                    });
                    $("select[name='citologiaSelect']").change(function(){
                        if($("select[name='citologiaSelect']").val() === "1"){
                            $("#citologiaForm").show();
                        }else{
                            $("#citologiaForm").hide();
                        }
                    });
                    $("select[name='colposcopia']").change(function(){
                        if($("select[name='colposcopia']").val() === "1"){
                            $("#colposcopiaForm").show();
                        }else{
                            $("#colposcopiaForm").hide();
                        }
                    });
                    $("select[name='mamografia']").change(function(){
                        if($("select[name='mamografia']").val() === "1"){
                            $("#mamografiaForm").show();
                        }else{
                            $("#mamografiaForm").hide();
                        }
                    });
                    $("select[name='numeroEmbarazos']").change(function(){
                        if($("select[name='numeroEmbarazos']").val() !== "" && $("select[name='numeroEmbarazos']").val() !== "0"){
                            $("#cesarias").show();
                        }else{
                            $("#cesarias").hide();
                        }
                    });
                    $("select[name='hijosMuertos']").change(function(){
                        if($("select[name='hijosMuertos']").val() !== "" && $("select[name='hijosMuertos']").val() !== "0"){
                            $("#hijosMuertos").show();
                        }else{
                            $("#hijosMuertos").hide();
                        }
                    });
                    $("select[name='ultimaValoracion']").change(function(){
                        if($("select[name='ultimaValoracion']").val() === "1"){
                            $("#valoradorOral").show();
                        }else{
                            $("#valoradorOral").hide();
                        }
                    });
                    $("select[name='control']").change(function(){
                        if($("select[name='control']").val() === "1"){
                            $("#lastControlDate").show();
                        }else{
                            $("#lastControlDate").hide();
                        }
                    });
                    $("select[name='planifica']").change(function(){
                        if($("select[name='planifica']").val() === "1"){
                            $("#metodoPlanificacion").show();
                        }else{
                            $("#metodoPlanificacion").hide();
                        }
                    });
                    for (var i = 0; i <= 32; i++) {
                        $('select[name="dientesPermanentes"]').append($('<option>', {
                            value: i,
                            text: i
                        }));
                    };
                }
            });
        break;
        case "4":
            $.ajax({
                url: './atencion-especial/49a64.html',
                success: function(data){
                    $("#contenedor").html(data);
                    loadSelectsAjax(op);
                    if($("select[name='sexo']").val() === "f"){
                        $("#hombre").hide();
                        $("#mujer").show();
                        $("select[name='citologiaSelect']").change(function(){
                            if($("select[name='citologiaSelect']").val() === "1"){
                                $("#citologiaForm").show();
                            }else{
                                $("#citologiaForm").hide();
                            }
                        });
                        $("select[name='colposcopia']").change(function(){
                            if($("select[name='colposcopia']").val() === "1"){
                                $("#colposcopiaForm").show();
                            }else{
                                $("#colposcopiaForm").hide();
                            }
                        });
                        $("select[name='mamografia']").change(function(){
                            if($("select[name='mamografia']").val() === "1"){
                                $("#mamografiaForm").show();
                            }else{
                                $("#mamografiaForm").hide();
                            }
                        });
                    }else if($("select[name='sexo']").val() === "m"){
                        $("#mujer").hide();
                        $("#hombre").show();
                    }else{
                        $("#mujer").hide();
                        $("#hombre").hide();
                    }
                    for (var i = 0; i <= 32; i++) {
                        $('select[name="dientesPermanentes"]').append($('<option>', {
                            value: i,
                            text: i
                        }));
                    };
                }
            });
        break;
        case "5":
            $.ajax({
                url: './atencion-especial/65oMas.html',
                success: function(data){
                    $("#contenedor").html(data);
                    loadSelectsAjax(op);
                    if($("select[name='sexo']").val() === "f"){
                        $("#hombre").hide();
                        $("#mujer").show();
                        $("select[name='citologiaSelect']").change(function(){
                            if($("select[name='citologiaSelect']").val() === "1"){
                                $("#citologiaForm").show();
                            }else{
                                $("#citologiaForm").hide();
                            }
                        });
                        $("select[name='colposcopia']").change(function(){
                            if($("select[name='colposcopia']").val() === "1"){
                                $("#colposcopiaForm").show();
                            }else{
                                $("#colposcopiaForm").hide();
                            }
                        });
                        $("select[name='mamografia']").change(function(){
                            if($("select[name='mamografia']").val() === "1"){
                                $("#mamografiaForm").show();
                            }else{
                                $("#mamografiaForm").hide();
                            }
                        });
                    }else if($("select[name='sexo']").val() === "m"){
                        $("#mujer").hide();
                        $("#hombre").show();
                    }else{
                        $("#mujer").hide();
                        $("#hombre").hide();
                    }
                    for (var i = 0; i <= 32; i++) {
                        $('select[name="dientesPermanentes"]').append($('<option>', {
                            value: i,
                            text: i
                        }));
                    };
                }
            });
        break;
        default:
            $("#contenedor").html("Error trayendo el formulario.");
        break;
    }
}

function getRemisionForm(){
    op = $("#tipoRemision").val();
    $("#1").hide();
    $("#2").hide();
    $("#3").hide();
    
    if(op!=""){
        $("#"+op).show();
    }
}

function loadSelectsAjax(op){
    $.ajax({
        url: "../controller/HandlerRequest.php?op=loadSelectAjax",
        type : 'post',
        data: {
            form: op
        },
        dataType: 'json',
        success: function(json){
            switch (op){
                case '1':
                    $.each(json.estadoNutricion, function(key, val){
                        $('select[name="estadoNutricion"]').append($('<option>', {
                            value: val.codigo,
                            text: val.estado
                        }));
                    });
                    $.each(json.estadoMental, function(key, val){
                        $('select[name="estadoMental"]').append($('<option>', {
                            value: val.codigo,
                            text: val.estado
                        }));
                    });
                    $.each(json.discapacidad, function(key, val){
                        $('select[name="sensorial"]').append($('<option>', {
                            value: val.codigo,
                            text: val.discapacidad
                        }));
                    });
                    break;

                case '2':
                    $.each(json.estadoNutricion, function(key, val){
                        $('select[name="estadoNutricion"]').append($('<option>', {
                            value: val.codigo,
                            text: val.estado
                        }));
                    });
                    $.each(json.estadoMental, function(key, val){
                        $('select[name="estadoMental"]').append($('<option>', {
                            value: val.codigo,
                            text: val.estado
                        }));
                    });
                    $.each(json.discapacidad, function(key, val){
                        $('select[name="sensorial"]').append($('<option>', {
                            value: val.codigo,
                            text: val.discapacidad
                        }));
                    });
                    $.each(json.valoradorOral, function(key, val){
                        $('select[name="valoradorOral"]').append($('<option>', {
                            value: val.codigo,
                            text: val.valoradorOral
                        }));
                    });
                    break;

                case '3':
                    $.each(json.estadoNutricion, function(key, val){
                        $('select[name="estadoNutricion"]').append($('<option>', {
                            value: val.codigo,
                            text: val.estado
                        }));
                    });
                    $.each(json.estadoMental, function(key, val){
                        $('select[name="estadoMental"]').append($('<option>', {
                            value: val.codigo,
                            text: val.estado
                        }));
                    });
                    $.each(json.discapacidad, function(key, val){
                        $('select[name="sensorial"]').append($('<option>', {
                            value: val.codigo,
                            text: val.discapacidad
                        }));
                    });
                    $.each(json.valoradorOral, function(key, val){
                        $('select[name="valoradorOral"]').append($('<option>', {
                            value: val.codigo,
                            text: val.valoradorOral
                        }));
                    });
                    $.each(json.psicoConsumo, function(key, val){
                        $("#psicoForm select:gt(1)").each(function(index){
                            $(this).append($('<option>', {
                                value: val.codigo,
                                text: val.consumo
                            }));
                        });
                    });
                    break;
            }
        }
    });
}