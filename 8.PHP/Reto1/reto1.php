<?php
    class Profiles{
        public ID;
        public name;
        public email:
        public password;
    }

    class Routes {
        public ID;
        public start;
        public end;
    }

    class Ubers{
        public ID;
        public license;
        public driver;
        public passangers;
    }

    class SedanUbers extends Ubers{
        public brand;
        public model;
    }

    class LargeUbers extends Ubers {
        public typeCarAccepted;
        public seatsMaterial;
    }
?>