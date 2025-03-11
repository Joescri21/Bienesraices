<?php 

    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);
?>

    <main class="contenedor seccion">
        <h2>Casas y Departamentos en venta</h2>
         
        <?php 
                 $limite = 100;
                include 'includes/templates/anucios.php';
        ?>  

    </main>

<?php 
    include 'includes/templates/footer.php';
?>
