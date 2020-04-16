<?php

        require "vendor/autoload.php";
        use GuzzleHttp\Client;
    $client = new Client([
        'base_uri' => 'http://worldtimeapi.org',
        'timeout'  => 5.0,
    ]);
    $response = $client->request('GET', '/api/timezone/America/Costa_Rica');
    $response2 = $client->request('GET', '/api/timezone/America/New_York');
    $response3 = $client->request('GET', '/api/timezone/Europe/Belgrade');
   
    $json1 = json_decode( $response->getBody()->getContents(),true);
    $json2 = json_decode( $response2->getBody()->getContents(),true);
    $json3 = json_decode( $response3->getBody()->getContents(),true);
    
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
     integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-left: 400px">
       <table class="table table-bordered table-hover" border="1" style="width: 600px;height: 200px;">
		<caption>ZONAS HORARIAS</caption>
		<tr>
			<th>ZONA HORARIA</th>
            <th>COSTA RICA/ SAN JOSE</th>
            <th>USA / NEW YORK</th>
            <th>BELGRADE SERBIA</th>
		</tr>
		<tr>
            <th>FECHA Y HORA</th>
            <td><?php echo("FECHA: ".substr(str_replace("T"," HORA: ",$json1["datetime"]),0,-10)) ?></td>
            <td><?php echo("FECHA: ".substr(str_replace("T"," HORA: ",$json2["datetime"]),0,-10)) ?></td>
            <td><?php echo("FECHA: ".substr(str_replace("T"," HORA: ",$json3["datetime"]),0,-10))?></td>
            
        </tr>
       
     
 
        </table> 
        <a href="index.php">REGRESAR AL INDEX</a>
    </div>

         
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html> 
