<!DOCTYPE html>
<?php
    include ('db/PDO.php');    
?>
<html>
    <head>
        <title>Exercices</title>
        <link rel ='stylesheet' href ="css/style.css"/>
    <link rel = 'icon' href = 'img/favicon.ico' type = 'image/x-icon'/>
    </head>
    <body>
        <?php
            include ('header.php');
        ?>
        <?php
            include 'db/PDO.php';
            echo '
            <section class = "top">
                <h1>Liste des exercices</h1>';
            try{
                foreach($db->query('SELECT DISTINCT Chapter from Exos') as $row) {
                    $chapter = mb_convert_encoding($row['Chapter'], 'UTF-8');
                    echo '<h3> '.$chapter . '</h3>';
                    foreach($db->query('SELECT * from Exos WHERE Chapter ="' . $chapter .'"') as $col) {
                        $toDo = mb_convert_encoding($col['ToDo'], 'UTF-8');
                        $Algo = mb_convert_encoding($col['Algo'], 'UTF-8');
                        $C = $col['C'];
                        $PHP = mb_convert_encoding($col['PHP'], 'UTF-8');
                        echo '<p> '. $toDo . '</p>
                            <table>
                                <thead>
                                    <tr>
                                        <td> Algo </td>
                                        <td> C </td>
                                        <td> PHP </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><xmp>' . $Algo . '</xmp></td>
                                        <td>
                                            <form method="post" action="https://www.jdoodle.com/api/redirect-to-post/c-online-compiler" target ="_blank">
                                                <textarea  name="initScript" rows = "20" readonly>' . $C . '
                                                </textarea>  
                                                <input class="button" type="submit" value="compiler" >
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post" action="https://www.jdoodle.com/api/redirect-to-post/php-online-editor" target ="_blank">
                                                <textarea  name="initScript" rows = "20" readonly>' . $PHP . '
                                                </textarea>  
                                                <input class="button" type="submit" value="compiler" >
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        ';
                    }
                }
                
            }catch(Exception $e){
                echo('Error : '. $e->getMessage());
            }
            echo '
            </tbody>
            </table>
            </section>';
        ?>
        <?
            include('footer.php');
        ?>
    </body>
</html>