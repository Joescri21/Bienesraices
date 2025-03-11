<?php 

    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <section class="iconos-nosotros">
            <article class="icono">
                <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ut magnam laborum repellat mollitia, dolorem earum qui illum 
                accusamus alias? Tenetur odio minus saepe officia quod doloribus soluta tempora dolores laboriosam?</p>
            </article>
            <article class="icono">
                <img src="build/img/icono2.svg" alt="Icono de precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ut magnam laborum repellat mollitia, dolorem earum qui illum 
                accusamus alias? Tenetur odio minus saepe officia quod doloribus soluta tempora dolores laboriosam?</p>
            </article>
            <article class="icono">
                <img src="build/img/icono3.svg" alt="Icono de tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ut magnam laborum repellat mollitia, dolorem earum qui illum 
                accusamus alias? Tenetur odio minus saepe officia quod doloribus soluta tempora dolores laboriosam?</p>
            </article>
        </section>

        <section class="seccion contenedor">
            <h2>Casas y Departamentos en venta</h2>

             <?php 

                $limite = 3;
                include 'includes/templates/anucios.php';
             ?>   
            <article class="alinear-derecha">
                <a href="anuncios.php" class="boton-verde">Ver Todas las Casas</a>
            </article>
        </section>
    </main>
    <section class="imagen-contacto">
        <h2>Encuentra la casas de tu sueño</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="imagen/webp">
                        <source srcset="build/img/blog1.jpg" type="imagen/jpg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="blog.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>04/08/2024</span> por: <span>Daniemy</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materailes y ahorrando dinero</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="imagen/webp">
                        <source srcset="build/img/blog2.jpg" type="imagen/jpg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                   <a href="blog.php">
                        <h4>Guia para la decoracción de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>08/08/2024</span> por: <span>Joel</span></p>
                        <p>Maximiza el espacio de tu hogar con esta guia. aprende a combinar muebles y coplores para darle vida a tu espacio</p>
                   </a>
                </div>
            </article>
        </section>
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <article class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas
                </blockquote>
                <strong><p>- Dominic Santiago Escribano</p></strong>
            </article>
        </section>
    </div>
 
    
<?php 
    incluirTemplate('footer');
?>
