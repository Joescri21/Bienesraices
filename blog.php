<?php 

require 'includes/funciones.php';
incluirTemplate('header',  $inicio = false);
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
       
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="imagen/webp">
                    <source srcset="build/img/blog1.jpg" type="imagen/jpg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>04/08/2024</span> por: <span>Daniemy</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materailes y ahorrando dinero</p>
                </a>
            </div>
        </article><!--Blog1-->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="imagen/webp">
                    <source srcset="build/img/blog2.jpg" type="imagen/jpg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
               <a href="entrada.php">
                    <h4>Guia para la decoracción de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>08/08/2024</span> por: <span>Joel</span></p>
                    <p>Maximiza el espacio de tu hogar con esta guia. aprende a combinar muebles y coplores para darle vida a tu espacio</p>
               </a>
            </div>
        </article><!--Blog2-->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="imagen/webp">
                    <source srcset="build/img/blog3.jpg" type="imagen/jpg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
               <a href="entrada.php">
                    <h4>Aumebla tu casa con estilo</h4>
                    <p>Escrito el: <span>12/09/2024</span> por: <span>Joel</span></p>
                    <p class="informacion-meta">Maximiza el espacio de tu hogar con esta guia. aprende a combinar muebles y coplores para darle vida a tu espacio</p>
               </a>
            </div>
        </article><!--Blog3-->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="imagen/webp">
                    <source srcset="build/img/blog4.jpg" type="imagen/jpg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto entrada blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Iluminación adecuada para tu cuarto</h4>
                    <p class="informacion-meta">Escrito el: <span>25/09/2024</span> por: <span>Daniemy</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materailes y ahorrando dinero</p>
                </a>
            </div>
        </article><!--Blog4-->
    </main>

<?php 
    include 'includes/templates/footer.php';
?>
