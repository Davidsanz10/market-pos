 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0">Tablero Principal</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="#">Inicio</a></li>
           <li class="breadcrumb-item active">Tablero Principal</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <!-- ROW Cartas resumenes -->
     <div class="row">
       <div class="col-lg-2">
         <!-- small box -->
         <div class="small-box bg-info">
           <div class="inner">
             <h4 id="totalProductos"></h4>
             <p>Productos registrados</p>
           </div>
           <div class="icon">
             <i class="far fa-clipboard"></i>
           </div>
           <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!--TARJETA Total Compras -->
       <div class="col-lg-2">
         <div class="small-box bg-success">
           <div class="inner">
             <h4 id="totalCompras"></h4>
             <p>Total Compras</p>
           </div>
           <div class="icon">
             <i class="fas fa-cash-register"></i>
           </div>
           <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!--TARJETA Total Ventas -->
       <div class="col-lg-2">
         <div class="small-box bg-warning">
           <div class="inner">
             <h4 id="totalVentas"></h4>
             <p>Ventas Totales</p>
           </div>
           <div class="icon">
             <i class="fas fa-money-bill"></i>
           </div>
           <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!--TARJETA Total GANANCIAS -->
       <div class="col-lg-2">
         <div class="small-box bg-danger">
           <div class="inner">
             <h4 id="totalGanancias"></h4>
             <p>Total Ganancias</p>
           </div>
           <div class="icon">
             <i class="fas fa-chart-pie"></i>
           </div>
           <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!--TARJETA Productos Registrados -->
       <div class="col-lg-2">
         <div class="small-box bg-primary">
           <div class="inner">
             <h4 id="totalProductosMinStock"></h4>
             <p>Productos poco stock</p>
           </div>
           <div class="icon">
             <i class="far fa-clipboard"></i>
           </div>
           <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!--TARJETA TOTAL DIA ACTUAL -->
       <div class="col-lg-2">
         <div class="small-box bg-secondary">
           <div class="inner">
             <h4 id="totalVentasHoy"></h4>
             <p>Ventas del día</p>
           </div>
           <div class="icon">
             <i class="fas fa-calendar-day"></i>
           </div>
           <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
     </div>
     <!-- ROW barra de tablas -->
     <div class="row">
       <div class="col-12">
         <div class="card card-info">
           <div class="card-header">
             <h3 class="card-title" id="totalVentaMes"></h3>
             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                 <i class="fas fa-minus"></i>
               </button>
               <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                 <i class="fas fa-times"></i>
               </button> -->
             </div>
           </div>
           <div class="card-body">
             <div class="chart">
               <canvas id="barChart" style="min-height: 25px; height: 300px; max-height: 350px; width:100%">

               </canvas>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!--ROW  graficos de adminlte -->
     <div class="row">
       <div class="col-lg-6">
         <div class="card card-info">
           <div class="card-header">
             <h3 class="card-title">Los 10 productos mas vendidos</h3>
             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                 <i class="fas fa-minus"></i>
               </button>
               <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                 <i class="fas fa-times"></i>
               </button> -->
             </div> <!-- ./ end card-tools -->
           </div> <!-- ./ end card-header -->
           <div class="card-body">
             <div class="table-responsive">
               <table class="table" id="tbl_productos_mas_vendidos">
                 <thead>
                   <tr>
                     <th>Cod. Producto</th>
                     <th>Producto</th>
                     <th>Cantidad</th>
                     <th>Ventas</th>
                   </tr>
                 </thead>
                 <tbody>
                   <!-- CArgado con ajax -->
                 </tbody>
               </table>
             </div>
           </div> <!-- ./ end card-body -->
         </div>
       </div>

       <div class="col-lg-6">
         <div class="card card-info">
           <div class="card-header">
             <h3 class="card-title">Listado de Productos con poco Stock</h3>
             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                 <i class="fas fa-minus"></i>
               </button>
               <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                 <i class="fas fa-times"></i>
               </button> -->
             </div> <!-- ./ end card-tools -->
           </div> <!-- ./ end card-header -->
           <div class="card-body">
             <div class="table-responsive">
               <table class="table" id="tbl_productos_poco_stock">
                 <thead>
                   <tr>
                     <th>Cod. Producto</th>
                     <th>Producto</th>
                     <th>Stock Actual</th>
                     <th>Mínimo Stock</th>
                   </tr>
                 </thead>
                 <tbody>
                   <!-- CArgado con ajax -->
                 </tbody>
               </table>
             </div>
           </div> <!-- ./ end card-body -->
         </div>
       </div>
     </div>
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->

 <script>
   $(document).ready(function() {
     // SOLICITU DE VENTAS INFORMATIVAS
     $.ajax({
       url: "ajax/dashboard.ajax.php",
       method: 'POST',
       dataType: 'json',
       success: function(respuesta) {
         // console.log("respuesta", respuesta);
         $("#totalProductos").html(respuesta[0]['totalProductos']);

         $("#totalCompras").html('S./ ' + respuesta[0]['totalCompras'].toString()
           .replace(/\d(?=(\d{3})+\.)/g, "$&,"))

         $("#totalVentas").html('S./ ' + respuesta[0]['totalVentas'].toString()
           .replace(/\d(?=(\d{3})+\.)/g, "$&,"))

         $("#totalGanancias").html('S./ ' + respuesta[0]['ganancias'].toString()
           .replace(/\d(?=(\d{3})+\.)/g, "$&,"))

         $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock'])

         $("#totalVentasHoy").html('S./ ' + respuesta[0]['ventasHoy'].toString()
           .replace(/\d(?=(\d{3})+\.)/g, "$&,"))
       }
     });
     setInterval(() => {
       $.ajax({
         url: "ajax/dashboard.ajax.php",
         method: 'POST',
         dataType: 'json',
         success: function(respuesta) {
           // console.log("respuesta", respuesta);
           $("#totalProductos").html(respuesta[0]['totalProductos']);

           $("#totalCompras").html('S./ ' + respuesta[0]['totalCompras'].toString()
             .replace(/\d(?=(\d{3})+\.)/g, "$&,"))

           $("#totalVentas").html('S./ ' + respuesta[0]['totalVentas'].toString()
             .replace(/\d(?=(\d{3})+\.)/g, "$&,"))

           $("#totalGanancias").html('S./ ' + respuesta[0]['ganancias'].toString()
             .replace(/\d(?=(\d{3})+\.)/g, "$&,"))

           $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock'])

           $("#totalVentasHoy").html('S./ ' + respuesta[0]['ventasHoy'].toString()
             .replace(/\d(?=(\d{3})+\.)/g, "$&,"))
         }
       });
     }, 10000);
     //  AJAX GRAFICO DE BARRA DE VENTAS DEL MES
     $.ajax({
       url: "ajax/dashboard.ajax.php",
       method: 'POST',
       data: {
         'accion': 1 //parametro para obtener las ventas del mes
       },
       dataType: 'json',
       success: function(respuesta) {
         // console.log("respuesta", respuesta);

         var fecha_venta = [];
         var total_venta = [];
         var total_venta_ant = [];

         var total_ventas_mes = 0;

         for (let i = 0; i < respuesta.length; i++) {

           fecha_venta.push(respuesta[i]['fecha_venta']);
           total_venta.push(respuesta[i]['total_venta']);
           total_venta_ant.push(respuesta[i]['total_venta_ant']);
           total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i][
             'total_venta'
           ]);

         }

         total_venta.push(0);
         // console.log(total_ventas_mes);

         $("#totalVentaMes").html('Ventas del Mes: S./ ' + total_ventas_mes.toString().replace(
           /\d(?=(\d{3})+\.)/g, "$&,"));
         var barChartCanvas = $("#barChart").get(0).getContext('2d');

         var areaChartData = {
           labels: fecha_venta,
           datasets: [{
             label: 'Ventas del Anterior - Octubre',
             backgroundColor: 'rgb(255, 140, 0,0.9)',
             data: total_venta_ant
           }, {
             label: 'Ventas del Mes - Noviembre',
             backgroundColor: 'rgba(60,141,188,0.9)',
             data: total_venta
           }]
         }

         var barChartData = $.extend(true, {}, areaChartData);

         var temp0 = areaChartData.datasets[0];

         barChartData.datasets[0] = temp0;

         var barChartOptions = {
           maintainAspectRatio: false,
           responsive: true,
           events: false,
           legend: {
             display: true
           },
           scales: {
             xAxes: [{
               stacked: true,
             }],
             yAxes: [{
               stacked: true
             }]
           },
           animation: {
             duration: 500,
             easing: "easeOutQuart",
             onComplete: function() {
               var ctx = this.chart.ctx;
               ctx.font = Chart.helpers.fontString(Chart.defaults.global
                 .defaultFontFamily, 'normal',
                 Chart.defaults.global.defaultFontFamily);
               ctx.textAlign = 'center';
               ctx.textBaseline = 'bottom';

               this.data.datasets.forEach(function(dataset) {
                 for (var i = 0; i < dataset.data.length; i++) {
                   var model = dataset._meta[Object.keys(dataset
                       ._meta)[0]].data[i]._model,
                     scale_max = dataset._meta[Object.keys(dataset
                       ._meta)[0]].data[i]._yScale.maxHeight;
                   ctx.fillStyle = '#444';
                   var y_pos = model.y - 5;
                   // Make sure data value does not get overflown and hidden
                   // when the bar's value is too close to max value of scale
                   // Note: The y value is reverse, it counts from top down
                   if ((scale_max - model.y) / scale_max >= 0.93)
                     y_pos = model.y + 20;
                   ctx.fillText(dataset.data[i], model.x, y_pos);
                 }
               });
             }
           }
         }

         new Chart(barChartCanvas, {
           type: 'bar',
           data: barChartData,
           options: barChartOptions
         })

       }
     });

     //  AJAX TABLAS de Listados mas vendidos
     $.ajax({
       url: "ajax/dashboard.ajax.php",
       method: 'POST',
       data: {
         'accion': 2 //Listar 10 productos mas vendiso
       },
       dataType: 'json',
       success: function(respuesta) {
         // console.log("respuesta", respuesta);
         for (let i = 0; i < respuesta.length; i++) {

           filas = `<tr> 
                  <td>${respuesta[i]['codigo_producto"']}</td>
                  <td>${respuesta[i]['descripcion_producto']}</td>
                  <td>${respuesta[i]['cantidad']}</td>
                  <td>S./ ${respuesta[i]['total_venta'].toFixed(2)}</td>
                  </tr>`
           $('#tbl_productos_mas_vendidos tbody').append(filas);
         }

       }
     })
     //  AJAX TABLAS de productos poco stock
     $.ajax({
       url: "ajax/dashboard.ajax.php",
       method: 'POST',
       data: {
         'accion': 3 //Listar de productos poco stock
       },
       dataType: 'json',
       success: function(respuesta) {
         // console.log("respuesta", respuesta);
         for (let i = 0; i < respuesta.length; i++) {

           filas = `<tr> 
                  <td>${respuesta[i]['codigo_producto']}</td>
                  <td>${respuesta[i]['descripcion_producto']}</td>
                  <td>${respuesta[i]['stock_producto']}</td>
                  <td>${respuesta[i]['minimo_stock_producto']}</td>
                  </tr>`
           $('#tbl_productos_poco_stock tbody').append(filas);
         }

       }
     })

   });
 </script>