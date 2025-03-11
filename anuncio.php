<?php 

    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false );

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /');
    }

     //BASE DE DATOS

     require 'includes/config/database.php';
     $db = conectarDB();
 
     //Obetner los datos de la propiedad
 
     $consultainformacion = "SELECT * FROM propiedades WHERE id = ${id}";

     $resultadoinformacion = mysqli_query($db, $consultainformacion);

     if(!$resultadoinformacion->num_rows){
        header('Location: /');
     }

     $propiedad = mysqli_fetch_assoc($resultadoinformacion);
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo']; ?></h1>

        <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la casa">

        <section class="resumen- propiedad">
            <strong><p class="precio">$ <?php echo $propiedad['precio']; ?> </p></strong>
            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="iconos wc" loading="lazy">
                    <p><strong><?php echo $propiedad['wc']; ?></strong></p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="iconos estacionamiento" loading="lazy">
                    <p><strong><?php echo $propiedad['estacionamiento']; ?></strong></p>
                </li>
                  
                <li>
                   <img src="build/img/icono_dormitorio.svg " alt="iconos  habitaciones" loading="lazy">
                   <p><strong><?php echo $propiedad['habitaciones']; ?></strong></p>
                </li>
            </ul>
            <p><?php echo $propiedad['descripcion']; ?></p>
        </section>
    </main>

    
<?php 
    mysqli_close($db);

    incluirTemplate('footer');
?>
