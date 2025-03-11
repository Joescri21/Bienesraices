<?php 

    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracción de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="imagen/webp">
            <source srcset="build/img/destacada2.jpg" type="imagen/jpg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad, casa de 3 pisos en el bosque con alberca includiad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>08/08/2024</span> por: <span>Joel</span></p>
        
        <section class="resumen- propiedad">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. And more recently with desktop publishing 
            Software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            <p>Nullam blandit molestie nunc commodo laoreet. Sed mollis est quis urna bibendum fermentum. Nullam quam odio, volutpat non diam ultrices, suscipit hendrerit tortor. 
            Aenean ipsum nunc, gravida et velit bibendum, faucibus cursus velit. Proin ut tempor nulla. Aenean eget velit vel metus aliquet pellentesque sit amet sit amet tellus.
            Integer turpis quam, pellentesque eu bibendum sit amet, mollis ac nisl. Donec elementum ac nunc quis interdum. Aliquam vel erat feugiat, tincidunt mauris vel, pulvinar purus.
            Nulla tincidunt auctor lacus vel elementum. Suspendisse eget convallis enim. Vivamus facilisis varius vulputate.</p>
        </section>
    </main>
   
    
<?php 
    incluirTemplate('footer');
?>
