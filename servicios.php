<?php 

  session_start();
  if (!isset($_SESSION["loggedin"])) {
    header("Location: /salon/index.php?view=login");
    exit;
  }

?>
<main class="main container translate-main">
    <div class="row">
        <?php

        $informacion = [
            'title' => ['cortes', 'uñas','manicure','pedicure','tintes','balayage','cortes de niños','mechas','alisados','rayos','cejas',
            'keratina'],

            'img' =>['src/img/corte.jpg','src/img/uñas.jpg','src/img/manicura.jpg','src/img/pedicura.jpg','src/img/tintes.jpg','src/img/balayage.jpg',
            'src/img/niños.jpg','src/img/mechas.jpg','src/img/alisados.jpg','src/img/rayos.jpg','src/img/cejas.jpg','src/img/keratina.jpg'],

            'description' => [
            'Victoria´s salón ofrece el servicio de cortes de cabello tanto para damas como para caballeros. Tampoco importa el tipo de cabello que  poseas, el servicio mantiene el mismo costo.',

            'Victoria´s salón ofrece el servicio de uñas. Estas pueden ser acrílicas, esculturales, gelish e incluso simplemente un esmalte para que tus uñas luzcan hermosas y sencillas.',

            'Victoria´s salón ofrece el servicio de manicure, independientemente de tu género, porque no hay etiquetas ni limitantes para cuidar de tus manos. Podrás lucir unas manos lindas y estéticas.',

            'Victoria´s salón ofrece el servicio de pedicure para que cuides y luzcas de unos pies muy lindos y suaves, exfoliación, extracción de uñas encarnadas, cuticula, etc. Para que evites incomodidades en tus pies.',

            'Victoria´s salón ofrece diversos tintes para tu cabello, no importa el tono ni de qué tipo sea, tampoco importa tu género, podremos alcanzaar tu tono deseado para que luzcas tu cabello sin problemas.',

            'En Victoria´s salón ofrecemos la tan aclamada técnica balayage, para que luzcas tu cabello con esas mechas claras con un acabado natural precioso y que combine a la perfección con tu tono de cabello.',

            'En Victoria´s salón ofrecemos cortes para los pequeños de la casa. Puedes agendar una cita para tus hijos o hijas, serán tratados como los principes y princesas que son sin importar su edad.',

            'En Victoria´s salón ofrecemos mechas, tanto para damas como para caballeros, hechos con papel aluminio y sin importar el tono del cual las desees, agenda tu cita ya y no te pierdas de este proceso.',

            'En Victoria´s salón ofrecemos todo tipo de alisados, entre estos están: alisados de coco, de bambú y de argán. Agenda tu cita desde el botón que está aquí abajo y elige la opción que más te guste.',

            'En Victoria´s salón ofrecemos rayos de diferentes colores, para que el cliente elija el que más le convenga y llame la atención. Agenda tu cita desde ya y empieza a lucir tus rayos.',

            'En Victoria´s salón ofrecemos depilación de cejas. Se ofrecen tres métodos, depilación con cera, con gillete o con pinzas, agenda tu cita y dale forma a tus cejas para lucirlas todos los días. ',

            'En Victoria´s salón también ofrecemos tratamientos con keratina, para reparar tu cabello y que este luzca más lindo y sano asimismo, para protegerlo del calor excesivo de secdoras, planchas, etc.'
            ]
        ];
            
        for ($i=0; $i < sizeof($informacion['img']) ; $i++){
            echo '<div class="home-cards">
                      <h1 class="cards-title text-center">' . $informacion['title'][$i] . '</h1>
                      <img 
                      src="'.$informacion['img'][$i].'"
                      alt="Producto" 
                      class="card-img"> 
                      <p class="text-justify">
                          '.$informacion['description'][$i].'
                      </p>
                      <a href="index.php?view=agendar" class="btn btn-link">Cita para '.$informacion['title'][$i].'</a>
                  </div>';
        }

        ?>
        
    </div>
</main>