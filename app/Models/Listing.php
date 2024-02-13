<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => '1',
                'title' => 'Listing one',
                'descriptuon' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus incidunt autem voluptas magnam reiciendis tenetur illum inventore necessitatibus exercitationem ratione nihil non laboriosam, natus rerum corrupti doloremque amet soluta suscipit.'
            ],
            [
                'id' => '2',
                'title' => 'Listing Two',
                'descriptuon' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus incidunt autem voluptas magnam reiciendis tenetur illum inventore necessitatibus exercitationem ratione nihil non laboriosam, natus rerum corrupti doloremque amet soluta suscipit.'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}