<?php
include_once './enviomail.php';


?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 localizacion">
            <p class="contacto-p">Mi objetivo es proporcionarte el mejor servicio posible para resolver tus
                necesidades. Ya sea que
                estés
                buscando asesoramiento profesional, ayuda técnica, o simplemente una conversación amigable, estoy
                aquí
                para ti.
            </p>
            <p class="contacto-p">
                Con años de experiencia y un enfoque centrado en el cliente, me esfuerzo por superar tus
                expectativas y
                brindarte la atención personalizada que mereces. No importa cuál sea tu consulta o problema, estoy
                seguro de que juntos podemos encontrar la mejor solución.

            </p>
            <div class="contacto-empresa shadow-lg">

                <h3>Noé Moreno</h3>
                <p><i class="fa fa-map-location"></i> Mas de l'Abelló 10, 43204 Reus</p>
                <p><i class="fa fa-phone"></i> Teléfono: +34 977 270 400 </p>
                <p><i class="fa fa-envelope"></i> Email: info@noemoreno.es</p>
            </div>
        </div>
        <div class="col-lg-7 border border-left border-1 shadow-lg caja-contacto">
            <form action="enviomail.php" id="envioemail" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                </div>
                <div class="mb-3">
                    <label for="servicio" class="form-label">Tipo de servicio</label>
                    <select class="form-control form-select" id="servicio" name="servicio" required>
                        <option value="">Seleccione una opción</option>
                        <option value="programacion">Programación</option>
                        <option value="sistemas">Sistemas</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Número de teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número de teléfono" required>
                </div>
                <div class="mb-3">
                    <label for="pregunta" class="form-label">Consulta</label>
                    <textarea class="form-control" id="pregunta" name="pregunta" rows="3" placeholder="Por favor escriba aquí su consulta o duda" required></textarea>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
                <button class="g-recaptcha btn btn-primary" data-sitekey="6Lc00dkpAAAAABVnt4sN3GNrxgq8V8-5fVY_9HVV" data-callback='onSubmit' data-action='submit'>Enviar</button>
            </form>
        </div>

    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <div id="map" style="height: 500px;"></div>
    </div>
</div>
</div>