<?php
    class Adatbazis{
        private $host = "localhost";
        private $felhasznaloNev = "root";
        private $jelszo = "";
        private $adatbazis = "bandaim";
        private $kapcsolat;

        public function __construct(){
            $this -> kapcsolat = new mysqli(
                $this->host,
                $this->felhasznaloNev,
                $this->jelszo,
                $this->adatbazis
            );
            $this->kapcsolat->query("SET NAMES UTF8");
        }

        public function beszur($orszagAzon,$nev){
            $sql="INSERT INTO orszag(orszagAzon, nev) VALUES ('$orszagAzon','$nev')";
            return $this->kapcsolat->query($sql);
        }

        public function kapcsolatBezar(){
            $this->kapcsolat->close();
        }

        public function megjelenit($matrix){
            echo "<article>";
            echo "<h1>OrszagAzon</h1>";
            echo "<h1>Nev</h1>";
            while ($oszlop = $matrix->fetch_row()){
                echo "<div>$oszlop[0]</div>";
                echo "<div>$oszlop[1]</div>";
            }
            echo "</article>";
        }

        public function adatleker($oszlop1,$oszlop2,$tabla){
            $sql = "SELECT $oszlop1, $oszlop2 FROM $tabla";
            return $this->kapcsolat->query($sql);
        }

        public function torles($tabla, $oszlop, $ertek){
            $sql = "DELETE $tabla WHERE $oszlop='$ertek'";
            return $this->kapcsolat->query($sql);
        }

    }
?>