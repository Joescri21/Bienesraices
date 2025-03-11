<?php 

    require 'includes/funciones.php';
    incluirTemplate('header',  $inicio = false);
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacado3.webp" type="imagen/webp">
            <source srcset="build/img/destacado3.jpg" type="imagen/jpg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen de Contacto">
        </picture>

        <h2>Llene el  formulario de Contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tú Nombre" id="nombre">

                <label for="correo">E-mail</label>
                <input type="email" placeholder="Tú correo electronico" id="correo">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tú teléfono" id="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion sobre Propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select  id="opciones">
                    <option value="" disabled selected>--Selecciones--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o presupuesto</label>
                <input type="number"  placeholder="Tú precio o presupuesto" id="presupuesto">
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contacto</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-correo">E-mail</label>
                    <input name="contacto" type="radio" value="E-mail" id="contactar-correo">
                </div>

                <p>Si eligio télefono, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

<?php 
    include 'includes/templates/footer.php';
?>
