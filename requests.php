<?php
    $name = $_GET['name'];
    $song   = $_GET['song'];
    $artist   = $_GET['artist']; 
    $album   = $_GET['album']; 

    if($song !== "" && $name!=""){
        $myfile = fopen("requests.html", "a") or die("Unable to open file!");
        $txt = '
                        <tr>
                            <td>'.$song.'</td>
                            <td>'.$artist.'</td>
                            <td>'.$album.'</td>
                            <td>'.$name.'</td>
                        </tr>
                ';
        fwrite($myfile, $txt);
        fclose($myfile);
        echo 'Song requested. ';
    }else{
        echo 'All fields required.';
    }
?>

