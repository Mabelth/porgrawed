
    <?php
    try {
        $base = new PDO('mysql:host=localhost;dbname=pruebas;', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
    } catch (Exception $e)
    // siempre va a recibir un argumento de tipo exepcion
    {
        die('error:' . $e->getMessage());
        echo "linea de error". $e->getLine();
    } 


    ?>