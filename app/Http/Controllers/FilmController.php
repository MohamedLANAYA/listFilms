<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function showPhotoFilms()
    {
        $data = [
            ['titre' => 'Oppenheimer', 'date' => '19 juill. 2023', 'src' => '1.jpg', 'type' => 'Film'],
            ['titre' => "L'Attaque des Titans", 'date' => '7 avr. 2013', 'src' => '2.jpg', 'type' => 'Film'],
            ['titre' => 'Good Doctor', 'date' => '25 sept. 2017', 'src' => '10.jpg', 'type' => 'serie'],
            ['titre' => 'Mystère à Venise', 'date' => '13 sept. 2023', 'src' => '3.jpg', 'type' => 'Film'],
            ['titre' => 'Chernobyl', 'date' => '6 mai 2019', 'src' => '13.jpg', 'type' => 'serie'],
            ['titre' => 'Mission : Impossible - Dead Reckoning Partie 1', 'date' => '8 juill. 2023', 'src' => '4.jpg', 'type' => 'Film'],
            ['titre' => 'Equalizer 3', 'date' => '30 août 2023', 'src' => '5.jpg', 'type' => 'Film'],
            ['titre' => 'Barbie', 'date' => '19 juill. 2023', 'src' => '6.jpg', 'type' => 'Film'],
            ['titre' => 'One Piece', 'date' => '20 oct. 1999', 'src' => '8.jpg', 'type' => 'serie'],
            ['titre' => 'NCIS : Enquêtes Spéciales', 'date' => '23 sept. 2003', 'src' => '11.jpg', 'type' => 'serie'],
            ['titre' => 'Blacklist', 'date' => '23 sept. 2013', 'src' => '12.jpg', 'type' => 'serie'],
            ['titre' => 'Death Note', 'date' => '4 oct. 2006', 'src' => '14.jpg', 'type' => 'serie'],
            ['titre' => 'Peaky Blinders', 'date' => '12 sept. 2013', 'src' => '15.jpg', 'type' => 'serie'],
            ['titre' => 'Killers of the Flower Moon', 'date' => '18 oct. 2023', 'src' => '7.jpg', 'type' => 'Film'],
            ['titre' => 'Mentalist', 'date' => '23 sept. 2008', 'src' => '9.jpg', 'type' => 'serie']
        ];
        return view('films', compact('data'));
    }

    public function showDetails($pic)
    {
        $data = [
            ['titre' => 'Oppenheimer', 'date' => '19 juill. 2023', 'src' => '1.jpg', 'type' => 'Film'],
            ['titre' => "L'Attaque des Titans", 'date' => '7 avr. 2013', 'src' => '2.jpg', 'type' => 'Film'],
            ['titre' => 'Good Doctor', 'date' => '25 sept. 2017', 'src' => '10.jpg', 'type' => 'serie'],
            ['titre' => 'Mystère à Venise', 'date' => '13 sept. 2023', 'src' => '3.jpg', 'type' => 'Film'],
            ['titre' => 'Chernobyl', 'date' => '6 mai 2019', 'src' => '13.jpg', 'type' => 'serie'],
            ['titre' => 'Mission : Impossible - Dead Reckoning Partie 1', 'date' => '8 juill. 2023', 'src' => '4.jpg', 'type' => 'Film'],
            ['titre' => 'Equalizer 3', 'date' => '30 août 2023', 'src' => '5.jpg', 'type' => 'Film'],
            ['titre' => 'Barbie', 'date' => '19 juill. 2023', 'src' => '6.jpg', 'type' => 'Film'],
            ['titre' => 'One Piece', 'date' => '20 oct. 1999', 'src' => '8.jpg', 'type' => 'serie'],
            ['titre' => 'NCIS : Enquêtes Spéciales', 'date' => '23 sept. 2003', 'src' => '11.jpg', 'type' => 'serie'],
            ['titre' => 'Blacklist', 'date' => '23 sept. 2013', 'src' => '12.jpg', 'type' => 'serie'],
            ['titre' => 'Death Note', 'date' => '4 oct. 2006', 'src' => '14.jpg', 'type' => 'serie'],
            ['titre' => 'Peaky Blinders', 'date' => '12 sept. 2013', 'src' => '15.jpg', 'type' => 'serie'],
            ['titre' => 'Killers of the Flower Moon', 'date' => '18 oct. 2023', 'src' => '7.jpg', 'type' => 'Film'],
            ['titre' => 'Mentalist', 'date' => '23 sept. 2008', 'src' => '9.jpg', 'type' => 'serie']
        ];

        foreach ($data as $film) {
            if ($film['src'] === $pic) {
                return view('details', ['film' => $film]);
            }
        }
        abort(404);
    }
}


