<?php
    /**
     * Controlador de la aplicacion, se encarga de dirigir los procesos
     */
    class Controlador
    {
        public $operaciones; //Declaro clase operaciones, encargada de las operaciones con la base de datos, es un modelo de datos
        public $vista; //Declaro clase vista
        /**
         * Metodo encargado de dar valores a los atributos d ela clase y llamar al metodo de inicio
         */
        function __construct()
        {
            require 'operacionesBd.php';
            $this->operaciones = new Operaciones();
            require 'vista.php';
            $this->vista = new Vista();
            $this->inicio();
        }
        /**
         * Metodo de inicio que controla si se envio el formulario o no
         */
        public function inicio()
        {
            if (isset($_POST['enviada']))
            {
                $this->verificarPartida($_POST);
            } else
            {
                $this->vista->formularioInicio();
            }
        }
        /**
         * Metodo que verifica si la puntuacion entra al ranking o no
         */
        public function verificarPartida($formulario)
        {
            if ($this->operaciones->countPartidas()->fetch_assoc()['numPartidas'] < 10)
            {
                $this->guardarPartidas($formulario);
                $this->vista->altaPuntuacion();
            }
            else
            {
                if ($formulario['puntos'] >= $this->operaciones->puntosMenor()->fetch_assoc()['puntos']) //si aunque este el ranking completo los puntos son mayor a la puntuacion minima del ranking
                {
                    $this->actualizaRanking($formulario);
                    $this->vista->altaPuntuacion();
                }
                else
                {
                    $this->vista->bajaPuntuacion();
                }
            }
        }
        /**
         * Metodo llamado para guardar una partida
         */
        public function guardarPartidas($formulario)
        {
            $this->operaciones->partida($formulario);
        }
        /**
         * Metodo llamado para actualizar el ranking
         */
        public function actualizaRanking($formulario)
        {
            $this->operaciones->actualizarPartida($formulario);
        }
    }
?>
