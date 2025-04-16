<?php 
//je récupere la config
require_once('../config.php');
//je récupere le model de la reservation contenant la classe
require_once('../model/Reservation.repository.php');
// je récupere le repository contenant la fonction findReservationForUser
require_once('../model/Reservation.model.php');

// j'utilise la fonction findReservationForUser
// pour récupérer la reservation créé par l'utilisateur (ou pas)
// et je la stocke dans la variable $reservationForUser
$reservationForUser = findReservationForUser();
// je récupere la view "annuler la commande" contenant la page "annuler la commande" 
require_once('../view/cancel-reservation.view.php');