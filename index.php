<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    </head>
    <body>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Start date</th>
                    <th>Start date</th>
                </tr>
            </thead>
            <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Start date</th>
            </tr>
            </tfoot>
        </table>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {

             $('#example').dataTable( {
                    "processing": true,
                    "ajax": "server_processing2.php",
                    // "iDisplayLength": 50,
                    "columns" : [
                         {'data':'0'},
                         {'data':'1'},
                         {'data':'2'},
                         {
                             sortable: false,
                             "render": function ( data, type, full, meta ) {
                                 var buttonID = data;
                                 return '<a id='+buttonID+' onclick="test('+data+')" class="btn btn-success rolloverBtn" role="button">PRINT</a>';
                             }
                         },
                         {
                             sortable: false,
                             "render": function ( data, type, full, meta ) {
                                 var buttonID = data;
                                 return '<a id='+buttonID+' onclick="test('+data+')"  class="btn btn-warning rescindBtn" role="button">EDIT</a>';
                             }
                         },
                         {
                             sortable: false,
                             "render": function ( data, type, full, meta ) {
                                 var buttonID = data;
                                 return '<a id='+buttonID+' onclick="test('+data+')" class="btn btn-danger rescindBtn" role="button">DELETE</a>';
                             }
                         }
                  ]
            });
        } );
        function test(data)
        {
            alert(' ID : ' + data);
        }
        </script>
    </body>
</html>