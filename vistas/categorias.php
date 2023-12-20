 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h4 class="m-0">Catergorías</h4>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
           <li class="breadcrumb-item active">Productos</li>
           <li class="breadcrumb-item active">Catergorías</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content pb-2">
   <div class="row p-0 m-0">
     <!-- Listado de Categorias -->
     <div class="col-md-9 responsive">
       <div class="card card-info card-outline shadow ">
         <div class="card-header">
           <h3 class="card-title"><i class="fas fa-list"> Listado de Categorías</i></h3>
         </div>
         <div class="card-body">
           <table id="lstCategorias" class="display nowrap table-striped w-100 shadow rounded">
             <thead class="bg-info text">
               <th>id</th>
               <th>Categoria</th>
               <th>Medida</th>
               <th>F. Creación</th>
               <th>F. Actualización</th>
               <th>Opciones</th>
             </thead>
             <tbody class="small text left"></tbody>
           </table>
         </div>
       </div>
     </div>
     <!-- Formulario PARA REGISTRO Y EDICION -->
     <div class="col-md-3">
       <div class="card card-info card-outline shadow">
         <div class="card-header">
           <h3 class="card-title"><i class="fas fa-edit"> Registro de Categorías</i></h3>
         </div>
         <div class="card-body">
           <form class="needs-validation" novalidate>
             <div class="row">

               <div class="col-md-12">
                 <div class="form-group mb-2">
                   <label class="col-form-label" for="iptCategoria">
                     <i class="fas fa-dumpster f-6"></i>
                     <span class="small">Categoría</span><span class="text-danger">*</span>
                   </label>

                   <input type="text" class="form-control form-control-sm" id="iptCategoria" name="iptCategoria" placeholder="Ingrese la Categoria" required>
                   <div class="invalid-feedback">Debe Ingresar la categoria</div>
                 </div>
               </div>

               <div class="col-md-12">
                 <div class="form-group mb-2">
                   <i class="fas fa-file-alt fs-6"></i>
                   <span class="small">Medida</span><span class="text-danger">*</span>
                   <label for="selMedida"></label>

                   <select name="" class="form-select form select-sm" aria-label=".form-select-sm example" id="selMedida" required>
                     <option value="">--Seleccione una Medida--</option>
                     <option value="0">Unidades</option>
                     <option value="1">Kilogramos</option>
                   </select>

                   <div class="invalid-feedback">Seleccione una medida</div>
                 </div>
               </div>

               <div class="col-md-12">
                 <div class="form-group m-0 mt-2">
                   <a style="cursor:pointer;" class="btn btn-primary btn-sm w-100" id="btnRegistrarCategoria">Registrar Categoría</a>
                 </div>
               </div>

             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- /.content -->
 <script>
   var Toast = Swal.mixin({
     toast: true,
     position: 'top',
     showConfirmButton: false,
     timer: 3000
   });

   $(document).ready(function() {
     // var para registrar o editar la categoria

     var idCategoria = 0;
     var categoria = "";
     var medida = "";

     var tableCategoria = $("#lstCategorias").DataTable({
       dom: 'Bfrtip',
       buttons: [
         'excel', 'print', 'pageLength',

       ],
       ajax: {
         url: 'ajax/categorias.ajax.php',
         dataSrc: ""
       },
       columnDefs: [{
           targets: 2,
           sortable: false,
           createdCell: function(td, cellData, rowData, row, col) {
             if (parseInt(rowData[2]) == 0) {
               $(td).html("Und(s)")
             } else {
               $(td).html("Kg(s)")
             }
           }
         },
         {
           targets: 5,
           sortable: false,
           render: function(data, type, full, meta) {
             return `<center>` +
               "<span class='btnEditarCategoria text-primary px-1' style='cursor:pointer;' data-bs-toggle= 'tooltip' data-bs-placement='top' title='Editar Categoria'>" +
               "<i class='fas fa-pencil-alt fs-5'></i>" +
               "</span>" +
               "<span class='btnEliminarCategoria text-danger px-1' style='cursor:pointer;'  data-bs-toggle= 'tooltip' data-bs-placement='top' title='Editar Categoria'>" +
               "<i class='fas fa-trash fs-5'></i>" +
               "</span>" +
               "</center>";
           }
         }
       ],
       "order": [
         [0, 'desc']
       ],
       lenthMenu: [0, 5, 10, 15, 20, 50],
       "pageLenth": 15,
       "language": {
         "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
       }
     });

     $("#lstCategorias tbody").on('click', ".btnEditarCategoria", function() {
       // var data = tableCategoria.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
       if (tableCategoria.row(this).child.isShown()) { //si se ve el hijo, que solo jale al hijo
         var data = tableCategoria.row(this).data();
       } else {
         var data = tableCategoria.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
       }


       if ($(this).parents('tr').hasClass('selected')) {
         $(this).parents('tr').removeClass('selected');
         idCategoria = 0;
         $("#iptCategoria").val("");
         $("#selMedida").val("");
       } else {
         tableCategoria.$('tr.selected').removeClass('selected');
         $(this).parents('tr').addClass('selected');
         idCategoria = data[0];
         $("#iptCategoria").val(data[1]);
         $("#selMedida").val(data[2]);
       }
     })

     $("#lstCategorias tbody").on('click', ".btnEliminarCategoria", function() {
       // var data = tableCategoria.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
       if (tableCategoria.row(this).child.isShown()) { //si se ve el hijo, que solo jale al hijo
         var data = tableCategoria.row(this).data();
       } else {
         var data = tableCategoria.row($(this).parents('tr')).data(); //OBTENER EL ARRAY CON LOS DATOS DE CADA COLUMNA DEL DATATABLE
       }
       console.log(data);
       idCategoria = data[0];
       accion = 1; //ELIMINAR
       var datos = new FormData();
       datos.append("idCategoria", idCategoria);
       datos.append("accion", accion);
       Swal.fire({
         title: '¿Está seguro de Eliminar la categoria?' + data[1] + '?',
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Aceptar',
         cancelButtonText: 'Cancelar',
       }).then((result) => {
         if (result.isConfirmed) {

           $.ajax({
             url: "ajax/categorias.ajax.php",
             method: "POST",
             data: datos,
             cache: false,
             contentType: false,
             processData: false,
             dataType: 'json',
             success: function(respuesta) {

               Toast.fire({
                 icon: 'success',
                 title: respuesta
               });

               idCategoria = 0
               categoria = ""
               medida = ""
               $("#iptCategoria").val("");
               $("#selMedida").val("");
               tableCategoria.ajax.reload();
               $(".needs-validation").removeClass("was-validated")
             }
           });

         }
       })

     });

     document.getElementById("btnRegistrarCategoria").addEventListener("click", function() {

       var forms = document.getElementsByClassName("needs-validation");

       var validation = Array.prototype.filter.call(forms, function(form) {

         if (form.checkValidity() === true) {
           accion = 0; //EDITAR
           categoria = $("#iptCategoria").val();
           medida = $("#selMedida").val();

           var datos = new FormData();
           datos.append("idCategoria", idCategoria);
           datos.append("categoria", categoria);
           datos.append("medida", medida);
           datos.append("accion", accion);

           Swal.fire({
             title: '¿Está seguro de guardar la categoria?',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Aceptar',
             cancelButtonText: 'Cancelar',
           }).then((result) => {

             if (result.isConfirmed) {

               $.ajax({
                 url: "ajax/categorias.ajax.php",
                 method: "POST",
                 data: datos,
                 cache: false,
                 contentType: false,
                 processData: false,
                 dataType: 'json',
                 success: function(respuesta) {

                   Toast.fire({
                     icon: 'success',
                     title: respuesta
                   });

                   idCategoria = 0
                   categoria = ""
                   medida = ""
                   $("#iptCategoria").val("");
                   $("#selMedida").val("");
                   tableCategoria.ajax.reload();
                   $(".needs-validation").removeClass("was-validated")
                 }
               });

             }
           })
         }

         form.classList.add('was-validated');

       });

     });


   });
 </script>