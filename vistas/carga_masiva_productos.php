 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0">Carga Masiva de Producto</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="#">Inicio</a></li>
           <li class="breadcrumb-item active">Carga Masiva de Producto</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <!-- FIla para input file -->
     <div class="row">
       <div class="col-lg-12">
         <div class="card card-info">
           <div class="card-header">
             <h3 class="card-title">Seleccionar archivo de Carga (Excel)</h3>
             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                 <i class="fas fa-minus"></i>
               </button>
             </div> <!-- ./ end card-tools -->
           </div> <!-- ./ end card-header -->
           <div class="card-body">

             <form action="POST" enctype="multipart/form-data" id="form_carga_productos">
               <div class="row">
                 <div class="col-lg-10">
                   <input type="file" name="fileProductos" id="fileProductos" class="form-control" accept=".xls, .xlsx">
                 </div>
                 <div class="col-lg-2">
                   <input type="submit" value="Cargar Producto" class="btn btn-primary" id="btncargar">
                 </div>

               </div>
             </form>
           </div> <!-- ./ end card-body -->
         </div>
       </div>
     </div>
     <!-- Fila para imagen de gif -->
     <div class="row mx-0">
       <div class="col-lg-12 mx-0 text-center">
         <img src="vistas/assets/imagenes/loading.gif" id="img-carga" style="display:none;">
       </div>
     </div>
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
 <script>
   $(document).ready(function() {
     $("#form_carga_productos").on('submit', function(e) {
       e.preventDefault();

       // Validad que se seleccione un archivo
       if ($("#fileProductos").get(0).files.length == 0) {
         Swal.fire({
           position: 'center',
           icon: 'warning',
           title: 'Debe seleccionar un archivo (Excel)',
           showConfirmButton: false,
           timer: 2500
         })
       } else {
         // validar si es excel
         var extensiones_permitidas = [".xls", ".xlsx"];
         var input_file_productos = $("#fileProductos");
         var exp_reg = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + extensiones_permitidas.join('|') + ")$");
         //  console.log(exp_reg);
         //  console.log(input_file_productos);
         if (!exp_reg.test(input_file_productos.val().toLowerCase())) {
           Swal.fire({
             position: 'center',
             icon: 'warning',
             title: 'Debe seleccionar un archivo con extension .xls o .xlsx',
             showConfirmButton: false,
             timer: 2500
           })
           return false;
         }
         var datos = new FormData($(form_carga_productos)[0]);
         $("#btnCargar").prop("disabled", true);
         $("#img-carga").attr("style", "display:block");
         $("#img-carga").attr("style", "height:200px");
         $("#img-carga").attr("style", "width:200px");


         $.ajax({
                    url:"ajax/productos.ajax.php",
                    type: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success:function(respuesta){

                         console.log("respuesta",respuesta ['totalCategorias']);
                         console.log("respuesta",respuesta ['totalProductos']);

                        if(respuesta['totalCategorias'] > 0 && respuesta['totalProductos'] > 0 ){
                        
                            Swal.fire({
                                position:'center',
                                icon:'success',
                                title: 'Se registraron ' + respuesta['totalCategorias'] + ' categorías y ' + respuesta['totalProductos'] + 'productos correctamente!',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            $("#btnCargar").prop("disabled",false);
                            $("#img_carga").attr("style","display:none");
                        }else{

                            Swal.fire({
                                position:'center',
                                icon:'error',
                                title: 'Se presento un error al momento de realizar el registro de categorías y/o productos!',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            $("#btnCargar").prop("disabled",false);
                            $("#img_carga").attr("style","display:none");

                        }
                    }
                });

       }
     })


   })
 </script>