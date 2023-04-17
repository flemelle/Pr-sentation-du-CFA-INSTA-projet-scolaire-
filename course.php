<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel = 'icon' href = 'img/favicon.ico' type = 'image/x-icon'/>
    <title>Cours</title>
  </head>
  <body>
    <?php
      include ('header.php');
    ?>
    
    <?php
            include 'db/PDO.php';
            echo '
            <section id = "cours">
                <div><h1>Cours</h1></div>
                ';
            try{
                foreach($db->query('SELECT * from Cours') as $row) {
                    $chapter = mb_convert_encoding($row['Chapter'], 'UTF-8');
                    echo'
                    <table>
                        <thead>
                            <tr>
                            <th><h2>' . $chapter . '</h2></th>
                            </tr>
                        </thead>
                        <tbody>
                    ';
                    foreach($db->query('SELECT * from Cours WHERE Chapter ="'. $chapter.'"') as $col) {
                      $contain = mb_convert_encoding($col['Contenue'], 'UTF-8');
                      echo'
                        <tr>
                        <td class = "c"><xmp>' . $contain . '</xmp></td>
                        </tr>
                      ';
                  }
                  echo '
                  </tbody>
                  </table>
                  <br/>
                  <br/>';
                }
            }catch(Exception $e){
                echo('Error : '. $e->getMessage());
            }
            echo '
            </section>'
        ?>
    
    <?php
      include('footer.php');
    ?>
  </body>
</html>
