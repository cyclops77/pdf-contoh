<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    @page { margin: 0px; }
    .header { position: fixed; top: 0px; left: 0px; right: 0px;height: 2.45cm;width: auto;margin-left: 1cm;margin-top: 0.3cm;}
    .footer { position: fixed; bottom: 0px; left: 0px; right: 0px;height: 0.6cm;width: auto;margin-bottom: 0.25cm;margin-right: 0.2cm; }
    .pb{page-break-after: always;}
    body{
        padding: 2.75cm;
    }
  </style>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <img src="data:image;base64, {{base64_encode(file_get_contents('logo/3.png'))}}" class="header">
    <img src="data:image;base64, {{base64_encode(file_get_contents('logo/4.png'))}}" class="footer">
    <table>
        <tbody>
            <tr>
                <td width="14.5%">Nomor</td>
                <td width="2.85%">:</td>
                <td width="20%">/ASK-JBR/2021</td>
                <td>Jember,</td>
            </tr>
        </tbody>
    </table>

    <div class="pb"></div>
    <!-- <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table> -->
 
</body>
</html>