	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({

			url:'#',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}

		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var moneda = button.data('moneda') // Extraer la información de atributos de datos
		  var capital = button.data('capital') // Extraer la información de atributos de datos
		  var costo = button.data('costo') // Extraer la información de atributos de datos
		  var continente = button.data('continente') // Extraer la información de atributos de datos
		  var ubica = button.data('ubica') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar producto: '+nombre)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #codigo').val(codigo)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #moneda').val(moneda)
		  modal.find('.modal-body #capital').val(capital)
		  modal.find('.modal-body #costo').val(costo)
		  modal.find('.modal-body #continente').val(continente)
		    modal.find('.modal-body #ubica').val(ubica)
		  $('.alert').hide();//Oculto alert
		})
//  INVENTARIO

		$('#dataUpdateX').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var moneda = button.data('moneda') // Extraer la información de atributos de datos
		  var capital = button.data('capital') // Extraer la información de atributos de datos
		   var stock = button.data('stock') // Extraer la información de atributos de datos
		   var merma = button.data('merma') // Extraer la información de atributos de datos
		/*  var costo = button.data('costo') // Extraer la información de atributos de datos
		  var continente = button.data('continente') // Extraer la información de atributos de datos
		  var ubica = button.data('ubica') // Extraer la información de atributos de datos
		  */
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar producto: '+codigo)
		  modal.find('.modal-body #id').val(id)
		
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #moneda').val(moneda)
		  modal.find('.modal-body #capital').val(capital)
		    modal.find('.modal-body #stock').val(stock)
		      modal.find('.modal-body #merma').val(merma)
		/*  modal.find('.modal-body #costo').val(costo)
		  modal.find('.modal-body #continente').val(continente)
		    modal.find('.modal-body #ubica').val(ubica)*/
		  $('.alert').hide();//Oculto alert
		})


//   ver mas info de pan
	$('#dataUpdatePan').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var moneda = button.data('moneda') // Extraer la información de atributos de datos
		  var capital = button.data('capital') // Extraer la información de atributos de datos
		 var azucar = button.data('azucar') // Extraer la información de atributos de datos
		/*   var continente = button.data('continente') // Extraer la información de atributos de datos
		  var ubica = button.data('ubica') // Extraer la información de atributos de datos
		  */
		  var modal = $(this)
		  	  modal.find('.modal-body #id').val(id)
		 	  modal.find('.modal-title').text('nombre de producto: '+codigo)
		      //modal.find('.modal-body').text('Tipo de Masa: '+nombre)
	
		
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #moneda').val(moneda)
		  modal.find('.modal-body #capital').val(capital)
		    modal.find('.modal-body #azucar').val(azucar)
		/*  modal.find('.modal-body #costo').val(costo)
		  modal.find('.modal-body #continente').val(continente)
		    modal.find('.modal-body #ubica').val(ubica)*/
		  $('.alert').hide();//Oculto alert
		})




		
//  script para modificar  los datos 
	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
	
	//   modidicae inventario 
	$( "#actualidarDatosinv" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar_inv.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		//**********************
		$('#dataUpdateSS').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
	
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Mproducto: '+codigo)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #codigo').val(codigo)
		  modal.find('.modal-body #nombre').val(nombre)
		 
		  $('.alert').hide();//Oculto alert
		})
		
		

	$( "#actualidarDatosS" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificarS.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		
		//********************* tablets  dataUpdateST
		
		$('#dataUpdateST').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
	
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Mproducto: '+codigo)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #codigo').val(codigo)
		  modal.find('.modal-body #nombre').val(nombre)
		 
		  $('.alert').hide();//Oculto alert
		})
		
		

	$( "#actualidarDatosT" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificarT.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		
	
		
		//********************* tablets  dataUpdateST
		
		$('#dataUpdateSC').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
	
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Mproducto: '+codigo)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #codigo').val(codigo)
		  modal.find('.modal-body #nombre').val(nombre)
		 
		  $('.alert').hide();//Oculto alert
		})
		
		

	$( "#actualidarDatosC" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificarC.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
			//*********************
		
		
		$( "#guardarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "agregar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_pais').val(id)
		})
		
		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		
		
		
		
			$('#fecha').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigoc = button.data('codigoc') // Extraer la información de atributos de datos
		  var idc = button.data('idc') // Extraer la información de atributos de datos
		  
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificarxxx producto: '+codigoc)
		  modal.find('.modal-body #idc').val(idc)
		 
		  $('.alert').hide();//Oculto alert
		})

$('#dataDeleteSC').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_pais').val(id)
		})
		
		$( "#eliminarDatosSC" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminarSC.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDeleteSC').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});

$('#dataDeleteST').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_pais').val(id)
		})
		
		$( "#eliminarDatosST" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminarST.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDeleteST').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});

		$('#dataDeleteSS').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_pais').val(id)
		})
		
		$( "#eliminarDatosSS" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminarSS.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDeleteSS').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});