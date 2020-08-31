<?php
    if($status == 404){
        $sql = "INSERT INTO archive_xml (import_id, description_sucess_or_fail) VALUES ('10', 'SUCESS')";
        if (mysqli_query($link, $sql)) {
            echo "<h1>Adicionado com sucesso (SUCESS)</h1>";
        }
    }elseif ($status != 404){
        $sql = "INSERT INTO archive_xml (import_id, description_sucess_or_fail) VALUES ('10', 'ERROR')";
        if (mysqli_query($link, $sql)) {
            echo "<h1>Adicionado com sucesso (ERROR)</h1>";
        }   
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
        echo "<br>";
        echo "Nenhuma linha afetada";
    }

    mysqli_close($link);
?>