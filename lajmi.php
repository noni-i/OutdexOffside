<?php
    class Lajmi{
        private $titulli;
        private $permbajtja;
        private $autori;
        private $datapostimit;
        private $photo;

        public function __construct($titulli, $permbajtja, $autori, $datapostimit, $photo)
        {
            $this->titulli = $titulli;
            $this->permbajtja = $permbajtja;
            $this->autori = $autori;
            $this->datapostimit = $datapostimit;
            $this->photo = $photo;
        }

        function publish(){
            
        }
    }
?>