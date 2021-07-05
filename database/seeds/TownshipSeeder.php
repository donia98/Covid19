<?php

use Illuminate\Database\Seeder;
use App\Township;

class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $townships = [        
        ["Abasan al-Kabira",
        "Abu Dis",
        "Bani Na'im",
        "Bani Suheila",
        "Beit Hanoun",
        "Beit Jala",
        "Beit Lahia",
        "Beit Sahour",],
        ["Beit Ummar",
        "Beitunia",
        "Bethlehem (Beit Lahm)",
        "al-Bireh",
        "Deir al-Balah",
        "ad-Dhahiriya",
        "Dura",
        "Gaza City ",],
        ["Halhul",
        "Hebron (al-Khalil)",
        "Idhna",
        "Jabalia",
        "Jenin",
        "Jericho (Ariha)",
        "Khan Yunis",
        "Nablus",
        "Qabatiya",
        "Qalqilya",
        "Ramallah",],
        ["Sa'ir",
        "as-Samu",
        "Surif",
        "Tubas",
        "Tulkarm",
        "Ya'bad",
        "al-Yamun",
        "Yatta",
        "az-Zawayda",]
        ];
        $coTown = count($townships);
        for($i = 0; $i< $coTown; $i++){
            $town = $townships[$i];
            $eachTown = count($town);            
            for($j = 0; $j< $eachTown; $j++){ 
                $Township = new Township();
                $Township->city_id = $i+1;
                $Township->township_name = $town[$j];
                $Township->save();
            }
        }
    }
}
