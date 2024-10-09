<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    //
    function index(): View
    {

        $members = array(
            [
                'name' => 'MBAKO DITEND Laurent',
                'title' => 'Bâtonnier',
                'image_path' => 'images/conseil/1.jpg'
            ],
            [
                'name' => 'Me MBUYI CIBUABUA CRISPIN',
                'title' => 'VICE-PRÉSIDENT DE LA COMMISSION DE DISCIPLINE',
                'image_path' => 'images/conseil/2.jpg'
            ],
            [
                'name' => 'Me KAZANGA KAMWENYI PATRICK',
                'title' => 'Président de la commission aménagement',
                'image_path' => 'images/conseil/3.jpg'
            ],
            [
                'name' => 'Me BANZA KASONGO MARCEL',
                'title' => 'Secrétaire de l\'ordre',
                'image_path' => 'images/conseil/4.jpg'
            ],
            [
                'name' => 'Me NTAMBW A CHAL JOSEPH',
                'title' => 'Vice-président de la commission des formations',
                'image_path' => 'images/conseil/5.jpg'
            ],
            [
                'name' => 'Me MWANANGWA MUTEMBEY ANTHONY',
                'title' => 'Doyen de l\'ordre',
                'image_path' => 'images/conseil/6.jpg'
            ],
            [
                'name' => 'Me MADIKA NGOY JOËLLE',
                'title' => 'Trésorière',
                'image_path' => 'images/conseil/7.jpg'
            ],
            [
                'name' => 'Me MAHIDI NDALA DADDY',
                'title' => 'Chargé des relations extérieures',
                'image_path' => 'images/conseil/8.jpg'
            ],
            [
                'name' => 'Me NGUZ KAPEND JEAN-JACQUES',
                'title' => 'Vice-président de la commission de suivi de la profession dans le ressort',
                'image_path' => 'images/conseil/9.jpg'
            ],
            [
                'name' => 'Me MUTOMBO KASONGO JEANPY',
                'title' => 'Président de la commission de suivi de la profession dans le ressort',
                'image_path' => 'images/conseil/10.jpg'
            ],
            [
                'name' => 'Me ONENDA SHUKULU MAMI',
                'title' => 'Présidente du BCG',
                'image_path' => 'images/conseil/11.jpg'
            ],
        );
        return view('home', [
            'members' => $members
        ]);
    }

    function gallery() : View {
        return view('gallery');
    }
}
