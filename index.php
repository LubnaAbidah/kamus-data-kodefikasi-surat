<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Kamus Data Kodefikasi Surat</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>  
           <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h1 align="center">Kamus Data Kodefikasi Surat</h3><br />  
                <table id="data-table" class="table table-bordered">  
                     <thead>  
                          <tr>   
                               <th>Kode</th>  
                               <th>Keterangan</th>  
                               <th>Uraian</th>  
                          </tr>  
                     </thead> 
                     <tfoot>  
                          <tr>  
                               <th>Kode</th>  
                               <th>Keterangan</th>  
                               <th>Uraian</th>  
                          </tr>  
                     </tfoot>  
                </table>  
           </div> 

          <!-- Footer -->
          <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
              <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
            <!-- Copyright -->

          </footer>
          <!-- Footer -->
           <!-- script -->
           <script>  
           $(document).ready(function(){  
            // Setup - add a text input to each footer cell
              $('#data-table thead tr').clone(true).appendTo( '#data-table thead' );
              $('#data-table thead tr:eq(1) th').each( function (i) {
                  var title = $(this).text();
                  $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
           
                  $( 'input', this ).on( 'keyup change', function () {
                      if ( table.column(i).search() !== this.value ) {
                          table
                              .column(i)
                              .search( this.value )
                              .draw();
                      }
                  } );
              } );
                  var table = $('#data-table').DataTable( {
                  orderCellsTop: true,
                  fixedHeader: true,
                  "ajax" : "mahasiswa.json",  
                  "language" : { 
                              "url":"indonesia.json"
                            },
                  "columns":     [    
                       { "data" : "Kode"},  
                       { "data" : "Keterangan"},
                       { "data" : "Uraian"}
                  ]  
              } );
           });  
          </script>   
      </body>  
 </html>  