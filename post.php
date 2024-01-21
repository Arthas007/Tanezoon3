<?php
            $contenu = $_POST['contenu'];
            $fichier = fopen('passwords.txt','a');
            fwrite($fichier, $contenu);
            fclose($fichier);
        ?>