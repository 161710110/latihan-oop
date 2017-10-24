<?php

require_once 'identitas.php';

$identitas = new identitas('Annisa','Bandung','XI RPL 2','Silita');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>";

?>