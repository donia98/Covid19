<?php

use Illuminate\Database\Seeder;
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
        "Abasan al-Kabira",
        "Abu Dis",
        "Bani Na'im",
        "Bani Suheila",
        "Beit Hanoun",
        "Beit Jala",
        "Beit Lahia",
        "Beit Sahour",
        "Beit Ummar	",
        "Beitunia",
        "Bethlehem (Beit Lahm)",
        "al-Bireh",
        "Deir al-Balah",
        "ad-Dhahiriya",
        "Dura",
        "Gaza City ",
        "Halhul",
        "Hebron (al-Khalil)",
        "Idhna",
        "Jabalia",
        "Jenin",
        "Jericho (Ariha)",
        "Khan Yunis",
        "Nablus",
        "Qabatiya",
        "Qalqilya",
        "Ramallah",
        "Sa'ir",
        "as-Samu",
        "Surif",
        "Tubas",
        "Tulkarm",
        "Ya'bad",
        "al-Yamun",
        "Yatta",
        "az-Zawayda",
        ];
        for ($i=0; $i < 18; $i++) {  
            $City = new City();
            $City->city_name = $cities[$i];          
            $City->save();
     }
    }
}
