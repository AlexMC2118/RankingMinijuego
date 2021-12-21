<?php
    /**
     * Clase destinada a visualizar nuestra aplicacion
     */
    class Vista
    {
        /**
         * Visualiza el campo del nick y el campo de puntuacion
         */
        public function formularioInicio()
        {
            echo'
                <form action="" method="post">
                    <h2> PUNTOS </h2>
                    <div>
                        <label for="nick"> NICK </label>
                        <input type="text" value="" name="nick" placeholder="Nick" required="required" />
                    </div>
                    <div>
                        <label for="puntos"> PUNTUACION </label>
                        <input type="number" value="" name="puntos" min="1" max="100" placeholder="000" required="required"/>
                    </div>
                    <input type="submit" value="ENVIAR" name="enviada" />
                </form>';
        }
        /**
         * Visualiza que su puntuacion entro en el ranking
         */
        public function altaPuntuacion()
        {
            echo'
                <div id="informacion">
                    <p>
                        SU PUNTUACION ENTRO EN EL RANKING, ENHORABUENA
                    </p>
                    <a href="index.php">  VOLVER A JUGAR </a>
                </div>';
        }
        /**
         * Visualiza que no saco una puntuacion mayor a la del ranking
         */
        public function bajaPuntuacion()
        {
            echo'
                <div id="informacion">
                    <p>
                        SU PUNTUACION ES INFERIOR A LA DEL RANKING, MEJORA
                    </p>
                    <a href="index.php">  INTENTAR DE NUEVO </a>
                </div>';
        }
    }
?>
