<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
    <h2> Multidimensial Array </h2>
    <br>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                    array("nama"=>"Avengers: Invinity War","tahun"=> 2018,"rating" => 8.7),
                    array("nama"=>"The Avengers","tahun"=> 2012,"rating"=> 8.1),
                    array("nama"=>"Guardians of the Galaxy","tahun"=> 2014,"rating"=> 8.1),
                    array("nama"=> "Iron Man","tahun"=>2008,"rating"=> 7.9)
                    );  

                   foreach($movie as $key => $value){
                       echo "<tr>";
                       echo "<td>". $value["nama"]. "</td>";
                       echo "<td>". $value["tahun"]. "</td>";
                       echo "<td>". $value["rating"]. "</td>";
                       echo "<br>";
                       echo "</tr>";
                   }
            ?>
        </table>
    </body>
</html>