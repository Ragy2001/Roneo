<?php 
/*
 * fnMain.php
 * 
 * Initialisation des variables et connexion à la BDD
 * Inclusion des autres pages de fonctions
 * 
 * Ronéo by C2SU
 * Créé par Fabien - Juillet 2020
 * Ragy - Mars 2021
 * inspiré de monTutorat PSA
 */

//Initialisation du tampon
ob_start();
// Affichage des erreurs et Warnings
//ini_set('display_errors', 1);
//error_reporting(E_ALL & ~E_DEPRECATED);
// Encodage utilisé
mb_internal_encoding("UTF-8");

/////////////////////////////////////////////
/// MODULE DETERMINATION DE L'IP

//-- Fonction de récupération de l'adresse IP du visiteur
function get_ip()
{
    if ( isset ( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif ( isset ( $_SERVER['HTTP_CLIENT_IP'] ) )
    {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}