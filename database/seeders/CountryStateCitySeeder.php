<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class CountryStateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         
        /*------------------------------------------
        --------------------------------------------
        India Country Data
        --------------------------------------------
        --------------------------------------------*/
        $country = Country::create([
            'country_name' => 'India',
            'country_code' => '91' // Example country code
        ]);

      // JAMMU AND KASHMIR State
$state1 = State::create([
    'country_id' => $country->id,
    'state_name' => 'JAMMU AND KASHMIR',
    'state_code' => '01'
]);
City::create(['state_id' => $state1->id, 'city_name' => 'Anantnag']);
City::create(['state_id' => $state1->id, 'city_name' => 'Baramula']);
City::create(['state_id' => $state1->id, 'city_name' => 'Doda']);
City::create(['state_id' => $state1->id, 'city_name' => 'Gulmarg']);
City::create(['state_id' => $state1->id, 'city_name' => 'Jammu']);
City::create(['state_id' => $state1->id, 'city_name' => 'Kathua']);
City::create(['state_id' => $state1->id, 'city_name' => 'Punch']);
City::create(['state_id' => $state1->id, 'city_name' => 'Rajouri']);
City::create(['state_id' => $state1->id, 'city_name' => 'Srinagar']);
City::create(['state_id' => $state1->id, 'city_name' => 'Udhampur']);


    // HIMACHAL PRADESH State
$state2 = State::create([
    'country_id' => $country->id,
    'state_name' => 'HIMACHAL PRADESH',
    'state_code' => '02'
]);
City::create(['state_id' => $state2->id, 'city_name' => 'Bilaspur']);
City::create(['state_id' => $state2->id, 'city_name' => 'Chamba']);
City::create(['state_id' => $state2->id, 'city_name' => 'Dalhousie']);
City::create(['state_id' => $state2->id, 'city_name' => 'Dharmshala']);
City::create(['state_id' => $state2->id, 'city_name' => 'Hamirpur']);
City::create(['state_id' => $state2->id, 'city_name' => 'Kangra']);
City::create(['state_id' => $state2->id, 'city_name' => 'Kullu']);
City::create(['state_id' => $state2->id, 'city_name' => 'Mandi']);
City::create(['state_id' => $state2->id, 'city_name' => 'Nahan']);
City::create(['state_id' => $state2->id, 'city_name' => 'Shimla']); // Already exists, you can remove this line if not needed
City::create(['state_id' => $state2->id, 'city_name' => 'Una']);


    // PUNJAB State
$state3 = State::create([
    'country_id' => $country->id,
    'state_name' => 'PUNJAB',
    'state_code' => '03'
]);
City::create(['state_id' => $state3->id, 'city_name' => 'Amritsar']);
City::create(['state_id' => $state3->id, 'city_name' => 'Batala']);
City::create(['state_id' => $state3->id, 'city_name' => 'Chandigarh']);
City::create(['state_id' => $state3->id, 'city_name' => 'Faridkot']);
City::create(['state_id' => $state3->id, 'city_name' => 'Firozpur']);
City::create(['state_id' => $state3->id, 'city_name' => 'Gurdaspur']);
City::create(['state_id' => $state3->id, 'city_name' => 'Hoshiarpur']);
City::create(['state_id' => $state3->id, 'city_name' => 'Jalandhar']);
City::create(['state_id' => $state3->id, 'city_name' => 'Kapurthala']);
City::create(['state_id' => $state3->id, 'city_name' => 'Ludhiana']);
City::create(['state_id' => $state3->id, 'city_name' => 'Nabha']);
City::create(['state_id' => $state3->id, 'city_name' => 'Patiala']);
City::create(['state_id' => $state3->id, 'city_name' => 'Rupnagar']);
City::create(['state_id' => $state3->id, 'city_name' => 'Sangrur']);

    // CHANDIGARH State
$state4 = State::create([
    'country_id' => $country->id,
    'state_name' => 'CHANDIGARH',
    'state_code' => '04'
]);
City::create(['state_id' => $state4->id, 'city_name' => 'CHANDIGARH CITY']);
// Add cities associated with CHANDIGARH state

// UTTARAKHAND State
$state5 = State::create([
    'country_id' => $country->id,
    'state_name' => 'UTTARAKHAND',
    'state_code' => '05'
]);
City::create(['state_id' => $state5->id, 'city_name' => 'Almora']);
City::create(['state_id' => $state5->id, 'city_name' => 'Dehra Dun']); // Please note the spelling correction
City::create(['state_id' => $state5->id, 'city_name' => 'Haridwar']);
City::create(['state_id' => $state5->id, 'city_name' => 'Mussoorie']);
City::create(['state_id' => $state5->id, 'city_name' => 'Nainital']);
City::create(['state_id' => $state5->id, 'city_name' => 'Pithoragarh']);


// HARYANA State
$state6 = State::create([
    'country_id' => $country->id,
    'state_name' => 'HARYANA',
    'state_code' => '06'
]);
City::create(['state_id' => $state6->id, 'city_name' => 'Ambala']);
City::create(['state_id' => $state6->id, 'city_name' => 'Bhiwani']);
City::create(['state_id' => $state6->id, 'city_name' => 'Chandigarh']);
City::create(['state_id' => $state6->id, 'city_name' => 'Faridabad']); // Already exists, you can remove this line if not needed
City::create(['state_id' => $state6->id, 'city_name' => 'Firozpur Jhirka']);
City::create(['state_id' => $state6->id, 'city_name' => 'Gurugram']); // Already exists, you can remove this line if not needed
City::create(['state_id' => $state6->id, 'city_name' => 'Hansi']);
City::create(['state_id' => $state6->id, 'city_name' => 'Hisar']);
City::create(['state_id' => $state6->id, 'city_name' => 'Jind']);
City::create(['state_id' => $state6->id, 'city_name' => 'Kaithal']);
City::create(['state_id' => $state6->id, 'city_name' => 'Karnal']);
City::create(['state_id' => $state6->id, 'city_name' => 'Kurukshetra']);
City::create(['state_id' => $state6->id, 'city_name' => 'Panipat']);
City::create(['state_id' => $state6->id, 'city_name' => 'Pehowa']);
City::create(['state_id' => $state6->id, 'city_name' => 'Rewari']);
City::create(['state_id' => $state6->id, 'city_name' => 'Rohtak']);
City::create(['state_id' => $state6->id, 'city_name' => 'Sirsa']);
City::create(['state_id' => $state6->id, 'city_name' => 'Sonipat']);


// DELHI State
$state7 = State::create([
    'country_id' => $country->id,
    'state_name' => 'DELHI',
    'state_code' => '07'
]);
City::create(['state_id' => $state7->id, 'city_name' => 'DELHI']);
City::create(['state_id' => $state7->id, 'city_name' => 'NEW DELHI']);
// Add cities associated with DELHI state

// RAJASTHAN State
$state8 = State::create([
    'country_id' => $country->id,
    'state_name' => 'RAJASTHAN',
    'state_code' => '08'
]);
City::create(['state_id' => $state8->id, 'city_name' => 'Abu']);
City::create(['state_id' => $state8->id, 'city_name' => 'Ajmer']);
City::create(['state_id' => $state8->id, 'city_name' => 'Alwar']);
City::create(['state_id' => $state8->id, 'city_name' => 'Amer']);
City::create(['state_id' => $state8->id, 'city_name' => 'Barmer']);
City::create(['state_id' => $state8->id, 'city_name' => 'Beawar']);
City::create(['state_id' => $state8->id, 'city_name' => 'Bharatpur']);
City::create(['state_id' => $state8->id, 'city_name' => 'Bhilwara']);
City::create(['state_id' => $state8->id, 'city_name' => 'Bikaner']);
City::create(['state_id' => $state8->id, 'city_name' => 'Bundi']);
City::create(['state_id' => $state8->id, 'city_name' => 'Chittaurgarh']);
City::create(['state_id' => $state8->id, 'city_name' => 'Churu']);
City::create(['state_id' => $state8->id, 'city_name' => 'Dhaulpur']);
City::create(['state_id' => $state8->id, 'city_name' => 'Dungarpur']);
City::create(['state_id' => $state8->id, 'city_name' => 'Ganganagar']);
City::create(['state_id' => $state8->id, 'city_name' => 'Hanumangarh']);
City::create(['state_id' => $state8->id, 'city_name' => 'Jaipur']);
City::create(['state_id' => $state8->id, 'city_name' => 'Jaisalmer']);
City::create(['state_id' => $state8->id, 'city_name' => 'Jalor']);
City::create(['state_id' => $state8->id, 'city_name' => 'Jhalawar']);
City::create(['state_id' => $state8->id, 'city_name' => 'Jhunjhunu']);
City::create(['state_id' => $state8->id, 'city_name' => 'Jodhpur']);
City::create(['state_id' => $state8->id, 'city_name' => 'Kishangarh']);
City::create(['state_id' => $state8->id, 'city_name' => 'Kota']);
City::create(['state_id' => $state8->id, 'city_name' => 'Merta']);
City::create(['state_id' => $state8->id, 'city_name' => 'Nagaur']);
City::create(['state_id' => $state8->id, 'city_name' => 'Nathdwara']);
City::create(['state_id' => $state8->id, 'city_name' => 'Pali']);
City::create(['state_id' => $state8->id, 'city_name' => 'Phalodi']);
City::create(['state_id' => $state8->id, 'city_name' => 'Pushkar']);
City::create(['state_id' => $state8->id, 'city_name' => 'Sawai Madhopur']);
City::create(['state_id' => $state8->id, 'city_name' => 'Shahpura']);
City::create(['state_id' => $state8->id, 'city_name' => 'Sikar']);
City::create(['state_id' => $state8->id, 'city_name' => 'Sirohi']);
City::create(['state_id' => $state8->id, 'city_name' => 'Tonk']);
City::create(['state_id' => $state8->id, 'city_name' => 'Udaipur']);


// UTTAR PRADESH State
$state9 = State::create([
    'country_id' => $country->id,
    'state_name' => 'UTTAR PRADESH',
    'state_code' => '09'
]);
City::create(['state_id' => $state9->id, 'city_name' => 'Agra']);
City::create(['state_id' => $state9->id, 'city_name' => 'Aligarh']);
City::create(['state_id' => $state9->id, 'city_name' => 'Amroha']);
City::create(['state_id' => $state9->id, 'city_name' => 'Ayodhya']);
City::create(['state_id' => $state9->id, 'city_name' => 'Azamgarh']);
City::create(['state_id' => $state9->id, 'city_name' => 'Bahraich']);
City::create(['state_id' => $state9->id, 'city_name' => 'Ballia']);
City::create(['state_id' => $state9->id, 'city_name' => 'Banda']);
City::create(['state_id' => $state9->id, 'city_name' => 'Bara Banki']);
City::create(['state_id' => $state9->id, 'city_name' => 'Bareilly']);
City::create(['state_id' => $state9->id, 'city_name' => 'Basti']);
City::create(['state_id' => $state9->id, 'city_name' => 'Bijnor']);
City::create(['state_id' => $state9->id, 'city_name' => 'Bithur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Budaun']);
City::create(['state_id' => $state9->id, 'city_name' => 'Bulandshahr']);
City::create(['state_id' => $state9->id, 'city_name' => 'Deoria']);
City::create(['state_id' => $state9->id, 'city_name' => 'Etah']);
City::create(['state_id' => $state9->id, 'city_name' => 'Etawah']);
City::create(['state_id' => $state9->id, 'city_name' => 'Faizabad']);
City::create(['state_id' => $state9->id, 'city_name' => 'Farrukhabad-cum-Fatehgarh']);
City::create(['state_id' => $state9->id, 'city_name' => 'Fatehpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Fatehpur Sikri']);
City::create(['state_id' => $state9->id, 'city_name' => 'Ghaziabad']);
City::create(['state_id' => $state9->id, 'city_name' => 'Ghazipur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Gonda']);
City::create(['state_id' => $state9->id, 'city_name' => 'Gorakhpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Hamirpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Hardoi']);
City::create(['state_id' => $state9->id, 'city_name' => 'Hathras']);
City::create(['state_id' => $state9->id, 'city_name' => 'Jalaun']);
City::create(['state_id' => $state9->id, 'city_name' => 'Jaunpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Jhansi']);
City::create(['state_id' => $state9->id, 'city_name' => 'Kannauj']);
City::create(['state_id' => $state9->id, 'city_name' => 'Kanpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Lakhimpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Lalitpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Lucknow']);
City::create(['state_id' => $state9->id, 'city_name' => 'Mainpuri']);
City::create(['state_id' => $state9->id, 'city_name' => 'Mathura']);
City::create(['state_id' => $state9->id, 'city_name' => 'Meerut']);
City::create(['state_id' => $state9->id, 'city_name' => 'Mirzapur-Vindhyachal']);
City::create(['state_id' => $state9->id, 'city_name' => 'Moradabad']);
City::create(['state_id' => $state9->id, 'city_name' => 'Muzaffarnagar']);
City::create(['state_id' => $state9->id, 'city_name' => 'Partapgarh']);
City::create(['state_id' => $state9->id, 'city_name' => 'Pilibhit']);
City::create(['state_id' => $state9->id, 'city_name' => 'Prayagraj']);
City::create(['state_id' => $state9->id, 'city_name' => 'Rae Bareli']);
City::create(['state_id' => $state9->id, 'city_name' => 'Rampur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Saharanpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Sambhal']);
City::create(['state_id' => $state9->id, 'city_name' => 'Shahjahanpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Sitapur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Sultanpur']);
City::create(['state_id' => $state9->id, 'city_name' => 'Tehri']);
City::create(['state_id' => $state9->id, 'city_name' => 'Varanasi']);


// BIHAR State
$state10 = State::create([
    'country_id' => $country->id,
    'state_name' => 'BIHAR',
    'state_code' => '10'
]);
City::create(['state_id' => $state10->id, 'city_name' => 'Ara']);
City::create(['state_id' => $state10->id, 'city_name' => 'Barauni']);
City::create(['state_id' => $state10->id, 'city_name' => 'Begusarai']);
City::create(['state_id' => $state10->id, 'city_name' => 'Bettiah']);
City::create(['state_id' => $state10->id, 'city_name' => 'Bhagalpur']);
City::create(['state_id' => $state10->id, 'city_name' => 'Bihar Sharif']);
City::create(['state_id' => $state10->id, 'city_name' => 'Bodh Gaya']);
City::create(['state_id' => $state10->id, 'city_name' => 'Buxar']);
City::create(['state_id' => $state10->id, 'city_name' => 'Chapra']);
City::create(['state_id' => $state10->id, 'city_name' => 'Darbhanga']);
City::create(['state_id' => $state10->id, 'city_name' => 'Dehri']);
City::create(['state_id' => $state10->id, 'city_name' => 'Dinapur Nizamat']);
City::create(['state_id' => $state10->id, 'city_name' => 'Gaya']);
City::create(['state_id' => $state10->id, 'city_name' => 'Hajipur']);
City::create(['state_id' => $state10->id, 'city_name' => 'Jamalpur']);
City::create(['state_id' => $state10->id, 'city_name' => 'Katihar']);
City::create(['state_id' => $state10->id, 'city_name' => 'Madhubani']);
City::create(['state_id' => $state10->id, 'city_name' => 'Motihari']);
City::create(['state_id' => $state10->id, 'city_name' => 'Munger']);
City::create(['state_id' => $state10->id, 'city_name' => 'Muzaffarpur']);
City::create(['state_id' => $state10->id, 'city_name' => 'Patna']);
City::create(['state_id' => $state10->id, 'city_name' => 'Purnia']);
City::create(['state_id' => $state10->id, 'city_name' => 'Pusa']);
City::create(['state_id' => $state10->id, 'city_name' => 'Saharsa']);
City::create(['state_id' => $state10->id, 'city_name' => 'Samastipur']);
City::create(['state_id' => $state10->id, 'city_name' => 'Sasaram']);
City::create(['state_id' => $state10->id, 'city_name' => 'Sitamarhi']);
City::create(['state_id' => $state10->id, 'city_name' => 'Siwan']);


// SIKKIM State
$state11 = State::create([
    'country_id' => $country->id,
    'state_name' => 'SIKKIM',
    'state_code' => '11'
]);
City::create(['state_id' => $state11->id, 'city_name' => 'GANGTOK']);
City::create(['state_id' => $state11->id, 'city_name' => 'GYALSHING']);
City::create(['state_id' => $state11->id, 'city_name' => 'LACHUNG']);
City::create(['state_id' => $state11->id, 'city_name' => 'MANGAN']);
// Add cities associated with SIKKIM state

// ARUNACHAL PRADESH State
$state12 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ARUNACHAL PRADESH',
    'state_code' => '12'
]);
City::create(['state_id' => $state12->id, 'city_name' => 'ITANAGAR']);
City::create(['state_id' => $state12->id, 'city_name' => 'TAWANG']);
// Add cities associated with ARUNACHAL PRADESH state

// NAGALAND State
$state13 = State::create([
    'country_id' => $country->id,
    'state_name' => 'NAGALAND',
    'state_code' => '13'
]);
City::create(['state_id' => $state13->id, 'city_name' => 'KOHIMA']);
City::create(['state_id' => $state13->id, 'city_name' => 'MON']);
City::create(['state_id' => $state13->id, 'city_name' => 'PHEK']);
City::create(['state_id' => $state13->id, 'city_name' => 'WOKHA']);
City::create(['state_id' => $state13->id, 'city_name' => 'ZUNHEBOTO']);
// Add cities associated with NAGALAND state

// MANIPUR State
$state14 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MANIPUR',
    'state_code' => '14'
]);
City::create(['state_id' => $state14->id, 'city_name' => 'IMPHAL']);
// Add cities associated with MANIPUR state

// MIZORAM State
$state15 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MIZORAM',
    'state_code' => '15'
]);
City::create(['state_id' => $state15->id, 'city_name' => 'AIZAWL']);
City::create(['state_id' => $state15->id, 'city_name' => 'LUNGLEI']);
// Add cities associated with MIZORAM state

// TRIPURA State
$state16 = State::create([
    'country_id' => $country->id,
    'state_name' => 'TRIPURA',
    'state_code' => '16'
]);
City::create(['state_id' => $state16->id, 'city_name' => 'AGARTALA']);


// MEGHALAYA State
$state17 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MEGHALAYA',
    'state_code' => '17'
]);
City::create(['state_id' => $state17->id, 'city_name' => 'SHILLONG']);
City::create(['state_id' => $state17->id, 'city_name' => 'CHERRAPUNJI']);
// Add cities associated with MEGHALAYA state

// ASSAM State
$state18 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ASSAM',
    'state_code' => '18'
]);
City::create(['state_id' => $state18->id, 'city_name' => 'Dhuburi']);
City::create(['state_id' => $state18->id, 'city_name' => 'Dibrugarh']);
City::create(['state_id' => $state18->id, 'city_name' => 'Dispur']);
City::create(['state_id' => $state18->id, 'city_name' => 'Guwahati']);
City::create(['state_id' => $state18->id, 'city_name' => 'Jorhat']);
City::create(['state_id' => $state18->id, 'city_name' => 'Nagaon']);
City::create(['state_id' => $state18->id, 'city_name' => 'Sivasagar']);
City::create(['state_id' => $state18->id, 'city_name' => 'Silchar']);
City::create(['state_id' => $state18->id, 'city_name' => 'Tezpur']);
City::create(['state_id' => $state18->id, 'city_name' => 'Tinsukia']);


// WEST BENGAL State
$state19 = State::create([
    'country_id' => $country->id,
    'state_name' => 'WEST BENGAL',
    'state_code' => '19'
]);
City::create(['state_id' => $state19->id, 'city_name' => 'Alipore']);
City::create(['state_id' => $state19->id, 'city_name' => 'Alipur Duar']);
City::create(['state_id' => $state19->id, 'city_name' => 'Asansol']);
City::create(['state_id' => $state19->id, 'city_name' => 'Baharampur']);
City::create(['state_id' => $state19->id, 'city_name' => 'Bally']);
City::create(['state_id' => $state19->id, 'city_name' => 'Balurghat']);
City::create(['state_id' => $state19->id, 'city_name' => 'Bankura']);
City::create(['state_id' => $state19->id, 'city_name' => 'Baranagar']);
City::create(['state_id' => $state19->id, 'city_name' => 'Barasat']);
City::create(['state_id' => $state19->id, 'city_name' => 'Barrackpore']);
City::create(['state_id' => $state19->id, 'city_name' => 'Basirhat']);
City::create(['state_id' => $state19->id, 'city_name' => 'Bhatpara']);
City::create(['state_id' => $state19->id, 'city_name' => 'Bishnupur']);
City::create(['state_id' => $state19->id, 'city_name' => 'Budge Budge']);
City::create(['state_id' => $state19->id, 'city_name' => 'Burdwan']);
City::create(['state_id' => $state19->id, 'city_name' => 'Chandernagore']);
City::create(['state_id' => $state19->id, 'city_name' => 'Darjeeling']);
City::create(['state_id' => $state19->id, 'city_name' => 'Diamond Harbour']);
City::create(['state_id' => $state19->id, 'city_name' => 'Dum Dum']);
City::create(['state_id' => $state19->id, 'city_name' => 'Durgapur']);
City::create(['state_id' => $state19->id, 'city_name' => 'Halisahar']);
City::create(['state_id' => $state19->id, 'city_name' => 'Haora']);
City::create(['state_id' => $state19->id, 'city_name' => 'Hugli']);
City::create(['state_id' => $state19->id, 'city_name' => 'Ingraj Bazar']);
City::create(['state_id' => $state19->id, 'city_name' => 'Jalpaiguri']);
City::create(['state_id' => $state19->id, 'city_name' => 'Kalimpong']);
City::create(['state_id' => $state19->id, 'city_name' => 'Kamarhati']);
City::create(['state_id' => $state19->id, 'city_name' => 'Kanchrapara']);
City::create(['state_id' => $state19->id, 'city_name' => 'Kharagpur']);
City::create(['state_id' => $state19->id, 'city_name' => 'Cooch Behar']);
City::create(['state_id' => $state19->id, 'city_name' => 'Kolkata']);
City::create(['state_id' => $state19->id, 'city_name' => 'Krishnanagar']);
City::create(['state_id' => $state19->id, 'city_name' => 'Malda']);
City::create(['state_id' => $state19->id, 'city_name' => 'Midnapore']);
City::create(['state_id' => $state19->id, 'city_name' => 'Murshidabad']);
City::create(['state_id' => $state19->id, 'city_name' => 'Nabadwip']);
City::create(['state_id' => $state19->id, 'city_name' => 'Palashi']);
City::create(['state_id' => $state19->id, 'city_name' => 'Panihati']);
City::create(['state_id' => $state19->id, 'city_name' => 'Purulia']);
City::create(['state_id' => $state19->id, 'city_name' => 'Raiganj']);
City::create(['state_id' => $state19->id, 'city_name' => 'Santipur']);
City::create(['state_id' => $state19->id, 'city_name' => 'Shantiniketan']);
City::create(['state_id' => $state19->id, 'city_name' => 'Shrirampur']);
City::create(['state_id' => $state19->id, 'city_name' => 'Siliguri']);
City::create(['state_id' => $state19->id, 'city_name' => 'Siuri']);
City::create(['state_id' => $state19->id, 'city_name' => 'Tamluk']);
City::create(['state_id' => $state19->id, 'city_name' => 'Titagarh']);


// JHARKHAND State
$state20 = State::create([
    'country_id' => $country->id,
    'state_name' => 'JHARKHAND',
    'state_code' => '20'
]);
City::create(['state_id' => $state20->id, 'city_name' => 'Bokaro']);
City::create(['state_id' => $state20->id, 'city_name' => 'Chaibasa']);
City::create(['state_id' => $state20->id, 'city_name' => 'Deoghar']);
City::create(['state_id' => $state20->id, 'city_name' => 'Dhanbad']);
City::create(['state_id' => $state20->id, 'city_name' => 'Dumka']);
City::create(['state_id' => $state20->id, 'city_name' => 'Giridih']);
City::create(['state_id' => $state20->id, 'city_name' => 'Hazaribag']);
City::create(['state_id' => $state20->id, 'city_name' => 'Jamshedpur']);
City::create(['state_id' => $state20->id, 'city_name' => 'Jharia']);
City::create(['state_id' => $state20->id, 'city_name' => 'Rajmahal']);
City::create(['state_id' => $state20->id, 'city_name' => 'Ranchi']);
City::create(['state_id' => $state20->id, 'city_name' => 'Saraikela']);


// ODISHA State
$state21 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ODISHA',
    'state_code' => '21'
]);
City::create(['state_id' => $state21->id, 'city_name' => 'Balangir']);
City::create(['state_id' => $state21->id, 'city_name' => 'Baleshwar']);
City::create(['state_id' => $state21->id, 'city_name' => 'Baripada']);
City::create(['state_id' => $state21->id, 'city_name' => 'Bhubaneshwar']);
City::create(['state_id' => $state21->id, 'city_name' => 'Brahmapur']);
City::create(['state_id' => $state21->id, 'city_name' => 'Cuttack']);
City::create(['state_id' => $state21->id, 'city_name' => 'Dhenkanal']);
City::create(['state_id' => $state21->id, 'city_name' => 'Kendujhar']);
City::create(['state_id' => $state21->id, 'city_name' => 'Konark']);
City::create(['state_id' => $state21->id, 'city_name' => 'Koraput']);
City::create(['state_id' => $state21->id, 'city_name' => 'Paradip']);
City::create(['state_id' => $state21->id, 'city_name' => 'Phulabani']);
City::create(['state_id' => $state21->id, 'city_name' => 'Puri']);
City::create(['state_id' => $state21->id, 'city_name' => 'Sambalpur']);
City::create(['state_id' => $state21->id, 'city_name' => 'Udayagiri']);


// CHHATTISGARH State
$state22 = State::create([
    'country_id' => $country->id,
    'state_name' => 'CHHATTISGARH',
    'state_code' => '22'
]);
City::create(['state_id' => $state22->id, 'city_name' => 'Ambikapur']);
City::create(['state_id' => $state22->id, 'city_name' => 'Bhilai']);
City::create(['state_id' => $state22->id, 'city_name' => 'Bilaspur']); // Already exists, you can remove this line if not needed
City::create(['state_id' => $state22->id, 'city_name' => 'Dhamtari']);
City::create(['state_id' => $state22->id, 'city_name' => 'Durg']);
City::create(['state_id' => $state22->id, 'city_name' => 'Jagdalpur']);
City::create(['state_id' => $state22->id, 'city_name' => 'Raipur']); // Already exists, you can remove this line if not needed
City::create(['state_id' => $state22->id, 'city_name' => 'Rajnandgaon']);


// MADHYA PRADESH State
$state23 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MADHYA PRADESH',
    'state_code' => '23'
]);
City::create(['state_id' => $state23->id, 'city_name' => 'Balaghat']);
City::create(['state_id' => $state23->id, 'city_name' => 'Barwani']);
City::create(['state_id' => $state23->id, 'city_name' => 'Betul']);
City::create(['state_id' => $state23->id, 'city_name' => 'Bharhut']);
City::create(['state_id' => $state23->id, 'city_name' => 'Bhind']);
City::create(['state_id' => $state23->id, 'city_name' => 'Bhojpur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Bhopal']);
City::create(['state_id' => $state23->id, 'city_name' => 'Burhanpur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Chhatarpur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Chhindwara']);
City::create(['state_id' => $state23->id, 'city_name' => 'Damoh']);
City::create(['state_id' => $state23->id, 'city_name' => 'Datia']);
City::create(['state_id' => $state23->id, 'city_name' => 'Dewas']);
City::create(['state_id' => $state23->id, 'city_name' => 'Dhar']);
City::create(['state_id' => $state23->id, 'city_name' => 'Dr. Ambedkar Nagar (Mhow)']);
City::create(['state_id' => $state23->id, 'city_name' => 'Guna']);
City::create(['state_id' => $state23->id, 'city_name' => 'Gwalior']);
City::create(['state_id' => $state23->id, 'city_name' => 'Hoshangabad']);
City::create(['state_id' => $state23->id, 'city_name' => 'Indore']);
City::create(['state_id' => $state23->id, 'city_name' => 'Itarsi']);
City::create(['state_id' => $state23->id, 'city_name' => 'Jabalpur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Jhabua']);
City::create(['state_id' => $state23->id, 'city_name' => 'Khajuraho']);
City::create(['state_id' => $state23->id, 'city_name' => 'Khandwa']);
City::create(['state_id' => $state23->id, 'city_name' => 'Khargone']);
City::create(['state_id' => $state23->id, 'city_name' => 'Maheshwar']);
City::create(['state_id' => $state23->id, 'city_name' => 'Mandla']);
City::create(['state_id' => $state23->id, 'city_name' => 'Mandsaur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Morena']);
City::create(['state_id' => $state23->id, 'city_name' => 'Murwara']);
City::create(['state_id' => $state23->id, 'city_name' => 'Narsimhapur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Narsinghgarh']);
City::create(['state_id' => $state23->id, 'city_name' => 'Narwar']);
City::create(['state_id' => $state23->id, 'city_name' => 'Neemuch']);
City::create(['state_id' => $state23->id, 'city_name' => 'Nowgong']);
City::create(['state_id' => $state23->id, 'city_name' => 'Orchha']);
City::create(['state_id' => $state23->id, 'city_name' => 'Panna']);
City::create(['state_id' => $state23->id, 'city_name' => 'Raisen']);
City::create(['state_id' => $state23->id, 'city_name' => 'Rajgarh']);
City::create(['state_id' => $state23->id, 'city_name' => 'Ratlam']);
City::create(['state_id' => $state23->id, 'city_name' => 'Rewa']);
City::create(['state_id' => $state23->id, 'city_name' => 'Sagar']);
City::create(['state_id' => $state23->id, 'city_name' => 'Sarangpur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Satna']);
City::create(['state_id' => $state23->id, 'city_name' => 'Sehore']);
City::create(['state_id' => $state23->id, 'city_name' => 'Seoni']);
City::create(['state_id' => $state23->id, 'city_name' => 'Shahdol']);
City::create(['state_id' => $state23->id, 'city_name' => 'Shajapur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Sheopur']);
City::create(['state_id' => $state23->id, 'city_name' => 'Shivpuri']);
City::create(['state_id' => $state23->id, 'city_name' => 'Ujjain']);
City::create(['state_id' => $state23->id, 'city_name' => 'Vidisha']);


// GUJARAT State
$state24 = State::create([
    'country_id' => $country->id,
    'state_name' => 'GUJARAT',
    'state_code' => '24'
]);
City::create(['state_id' => $state24->id, 'city_name' => 'Ahmadabad']); // Updated spelling to match the standard spelling
City::create(['state_id' => $state24->id, 'city_name' => 'Amreli']);
City::create(['state_id' => $state24->id, 'city_name' => 'Bharuch']);
City::create(['state_id' => $state24->id, 'city_name' => 'Bhavnagar']);
City::create(['state_id' => $state24->id, 'city_name' => 'Bhuj']);
City::create(['state_id' => $state24->id, 'city_name' => 'Dwarka']);
City::create(['state_id' => $state24->id, 'city_name' => 'Gandhinagar']);
City::create(['state_id' => $state24->id, 'city_name' => 'Godhra']);
City::create(['state_id' => $state24->id, 'city_name' => 'Jamnagar']);
City::create(['state_id' => $state24->id, 'city_name' => 'Junagadh']);
City::create(['state_id' => $state24->id, 'city_name' => 'Kandla']);
City::create(['state_id' => $state24->id, 'city_name' => 'Khambhat']);
City::create(['state_id' => $state24->id, 'city_name' => 'Kheda']);
City::create(['state_id' => $state24->id, 'city_name' => 'Mahesana']);
City::create(['state_id' => $state24->id, 'city_name' => 'Morbi']);
City::create(['state_id' => $state24->id, 'city_name' => 'Nadiad']);
City::create(['state_id' => $state24->id, 'city_name' => 'Navsari']);
City::create(['state_id' => $state24->id, 'city_name' => 'Okha']);
City::create(['state_id' => $state24->id, 'city_name' => 'Palanpur']);
City::create(['state_id' => $state24->id, 'city_name' => 'Patan']);
City::create(['state_id' => $state24->id, 'city_name' => 'Porbandar']);
City::create(['state_id' => $state24->id, 'city_name' => 'Rajkot']);
City::create(['state_id' => $state24->id, 'city_name' => 'Surendranagar']);
City::create(['state_id' => $state24->id, 'city_name' => 'Valsad']);
City::create(['state_id' => $state24->id, 'city_name' => 'Veraval']);

// DADAR AND NAGAR HAVELI & DAMAN AND DIU State
$state26 = State::create([
    'country_id' => $country->id,
    'state_name' => 'DADAR AND NAGAR HAVELI & DAMAN AND DIU',
    'state_code' => '26'
]);
City::create(['state_id' => $state26->id, 'city_name' => 'DAMAN']);
City::create(['state_id' => $state26->id, 'city_name' => 'DIU']);
City::create(['state_id' => $state26->id, 'city_name' => 'SILVASSA']);
// Add cities associated with DADAR AND NAGAR HAVELI & DAMAN AND DIU state

// MAHARASHTRA State
$state27 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MAHARASHTRA',
    'state_code' => '27'
]);
City::create(['state_id' => $state27->id, 'city_name' => 'Ahmadnagar']);
City::create(['state_id' => $state27->id, 'city_name' => 'Akola']);
City::create(['state_id' => $state27->id, 'city_name' => 'Amravati']);
City::create(['state_id' => $state27->id, 'city_name' => 'Aurangabad']);
City::create(['state_id' => $state27->id, 'city_name' => 'Bhandara']);
City::create(['state_id' => $state27->id, 'city_name' => 'Bhusawal']);
City::create(['state_id' => $state27->id, 'city_name' => 'Bid']);
City::create(['state_id' => $state27->id, 'city_name' => 'Buldhana']);
City::create(['state_id' => $state27->id, 'city_name' => 'Chandrapur']);
City::create(['state_id' => $state27->id, 'city_name' => 'Daulatabad']);
City::create(['state_id' => $state27->id, 'city_name' => 'Dhule']);
City::create(['state_id' => $state27->id, 'city_name' => 'Jalgaon']);
City::create(['state_id' => $state27->id, 'city_name' => 'Kalyan']);
City::create(['state_id' => $state27->id, 'city_name' => 'Karli']);
City::create(['state_id' => $state27->id, 'city_name' => 'Kolhapur']);
City::create(['state_id' => $state27->id, 'city_name' => 'Mahabaleshwar']);
City::create(['state_id' => $state27->id, 'city_name' => 'Malegaon']);
City::create(['state_id' => $state27->id, 'city_name' => 'Matheran']);
City::create(['state_id' => $state27->id, 'city_name' => 'Mumbai']);
City::create(['state_id' => $state27->id, 'city_name' => 'Nagpur']);
City::create(['state_id' => $state27->id, 'city_name' => 'Nanded']);
City::create(['state_id' => $state27->id, 'city_name' => 'Nashik']);
City::create(['state_id' => $state27->id, 'city_name' => 'Osmanabad']);
City::create(['state_id' => $state27->id, 'city_name' => 'Pandharpur']);
City::create(['state_id' => $state27->id, 'city_name' => 'Parbhani']);
City::create(['state_id' => $state27->id, 'city_name' => 'Pune']);
City::create(['state_id' => $state27->id, 'city_name' => 'Ratnagiri']);
City::create(['state_id' => $state27->id, 'city_name' => 'Sangli']);
City::create(['state_id' => $state27->id, 'city_name' => 'Satara']);
City::create(['state_id' => $state27->id, 'city_name' => 'Sevagram']);
City::create(['state_id' => $state27->id, 'city_name' => 'Solapur']);
City::create(['state_id' => $state27->id, 'city_name' => 'Thane']);
City::create(['state_id' => $state27->id, 'city_name' => 'Ulhasnagar']);
City::create(['state_id' => $state27->id, 'city_name' => 'Vasai-Virar']);
City::create(['state_id' => $state27->id, 'city_name' => 'Wardha']);
City::create(['state_id' => $state27->id, 'city_name' => 'Yavatmal']);


// KARNATAKA State
$state29 = State::create([
    'country_id' => $country->id,
    'state_name' => 'KARNATAKA',
    'state_code' => '29'
]);
City::create(['state_id' => $state29->id, 'city_name' => 'Badami']);
City::create(['state_id' => $state29->id, 'city_name' => 'Ballari']);
City::create(['state_id' => $state29->id, 'city_name' => 'Bengaluru']);
City::create(['state_id' => $state29->id, 'city_name' => 'Belagavi']);
City::create(['state_id' => $state29->id, 'city_name' => 'Bhadravati']);
City::create(['state_id' => $state29->id, 'city_name' => 'Bidar']);
City::create(['state_id' => $state29->id, 'city_name' => 'Chikkamagaluru']);
City::create(['state_id' => $state29->id, 'city_name' => 'Chitradurga']);
City::create(['state_id' => $state29->id, 'city_name' => 'Davangere']);
City::create(['state_id' => $state29->id, 'city_name' => 'Halebid']);
City::create(['state_id' => $state29->id, 'city_name' => 'Hassan']);
City::create(['state_id' => $state29->id, 'city_name' => 'Hubballi-Dharwad']);
City::create(['state_id' => $state29->id, 'city_name' => 'Kalaburagi']);
City::create(['state_id' => $state29->id, 'city_name' => 'Kolar']);
City::create(['state_id' => $state29->id, 'city_name' => 'Madikeri']);
City::create(['state_id' => $state29->id, 'city_name' => 'Mandya']);
City::create(['state_id' => $state29->id, 'city_name' => 'Mangaluru']);
City::create(['state_id' => $state29->id, 'city_name' => 'Raichur']);
City::create(['state_id' => $state29->id, 'city_name' => 'Shivamogga']);
City::create(['state_id' => $state29->id, 'city_name' => 'Shravanabelagola']);
City::create(['state_id' => $state29->id, 'city_name' => 'Shrirangapattana']);
City::create(['state_id' => $state29->id, 'city_name' => 'Tumakuru']);
City::create(['state_id' => $state29->id, 'city_name' => 'Vijayapura']);

// GOA State
$state30 = State::create([
    'country_id' => $country->id,
    'state_name' => 'GOA',
    'state_code' => '30'
]);
City::create(['state_id' => $state30->id, 'city_name' => 'MADGAON']);
City::create(['state_id' => $state30->id, 'city_name' => 'PANAJI']);

// LAKSHADWEEP State
$state31 = State::create([
    'country_id' => $country->id,
    'state_name' => 'LAKSHADWEEP',
    'state_code' => '31'
]);
City::create(['state_id' => $state31->id, 'city_name' => 'KAVARATTI']);
// Add cities associated with LAKSHADWEEP state

// KERALA State
$state32 = State::create([
    'country_id' => $country->id,
    'state_name' => 'KERALA',
    'state_code' => '32'
]);
City::create(['state_id' => $state32->id, 'city_name' => 'Alappuzha']);
City::create(['state_id' => $state32->id, 'city_name' => 'Vatakara']);
City::create(['state_id' => $state32->id, 'city_name' => 'Idukki']);
City::create(['state_id' => $state32->id, 'city_name' => 'Kannur']);
City::create(['state_id' => $state32->id, 'city_name' => 'Kochi']);
City::create(['state_id' => $state32->id, 'city_name' => 'Kollam']);
City::create(['state_id' => $state32->id, 'city_name' => 'Kottayam']);
City::create(['state_id' => $state32->id, 'city_name' => 'Kozhikode']);
City::create(['state_id' => $state32->id, 'city_name' => 'Mattancheri']);
City::create(['state_id' => $state32->id, 'city_name' => 'Palakkad']);
City::create(['state_id' => $state32->id, 'city_name' => 'Thalassery']);
City::create(['state_id' => $state32->id, 'city_name' => 'Thiruvananthapuram']);
City::create(['state_id' => $state32->id, 'city_name' => 'Thrissur']);


// TAMIL NADU State
$state33 = State::create([
    'country_id' => $country->id,
    'state_name' => 'TAMIL NADU',
    'state_code' => '33'
]);
City::create(['state_id' => $state33->id, 'city_name' => 'Arcot']);
City::create(['state_id' => $state33->id, 'city_name' => 'Chengalpattu']);
City::create(['state_id' => $state33->id, 'city_name' => 'Chennai']);
City::create(['state_id' => $state33->id, 'city_name' => 'Chidambaram']);
City::create(['state_id' => $state33->id, 'city_name' => 'Coimbatore']);
City::create(['state_id' => $state33->id, 'city_name' => 'Cuddalore']);
City::create(['state_id' => $state33->id, 'city_name' => 'Dharmapuri']);
City::create(['state_id' => $state33->id, 'city_name' => 'Dindigul']);
City::create(['state_id' => $state33->id, 'city_name' => 'Erode']);
City::create(['state_id' => $state33->id, 'city_name' => 'Kanchipuram']);
City::create(['state_id' => $state33->id, 'city_name' => 'Kanniyakumari']);
City::create(['state_id' => $state33->id, 'city_name' => 'Kodaikanal']);
City::create(['state_id' => $state33->id, 'city_name' => 'Kumbakonam']);
City::create(['state_id' => $state33->id, 'city_name' => 'Madurai']);
City::create(['state_id' => $state33->id, 'city_name' => 'Mamallapuram']);
City::create(['state_id' => $state33->id, 'city_name' => 'Nagappattinam']);
City::create(['state_id' => $state33->id, 'city_name' => 'Nagercoil']);
City::create(['state_id' => $state33->id, 'city_name' => 'Palayamkottai']);
City::create(['state_id' => $state33->id, 'city_name' => 'Pudukkottai']);
City::create(['state_id' => $state33->id, 'city_name' => 'Rajapalayam']);
City::create(['state_id' => $state33->id, 'city_name' => 'Ramanathapuram']);
City::create(['state_id' => $state33->id, 'city_name' => 'Salem']);
City::create(['state_id' => $state33->id, 'city_name' => 'Thanjavur']);
City::create(['state_id' => $state33->id, 'city_name' => 'Tiruchchirappalli']);
City::create(['state_id' => $state33->id, 'city_name' => 'Tirunelveli']);
City::create(['state_id' => $state33->id, 'city_name' => 'Tiruppur']);
City::create(['state_id' => $state33->id, 'city_name' => 'Thoothukudi']);
City::create(['state_id' => $state33->id, 'city_name' => 'Udhagamandalam']);
City::create(['state_id' => $state33->id, 'city_name' => 'Vellore']);


// PUDUCHERRY State
$state34 = State::create([
    'country_id' => $country->id,
    'state_name' => 'PUDUCHERRY',
    'state_code' => '34'
]);
City::create(['state_id' => $state34->id, 'city_name' => 'KARAIKAL']);
City::create(['state_id' => $state34->id, 'city_name' => 'MAHE']);
City::create(['state_id' => $state34->id, 'city_name' => 'PUDUCHERRY']);
City::create(['state_id' => $state34->id, 'city_name' => 'YANAM']);
// Add cities associated with PUDUCHERRY state

// ANDAMAN AND NICOBAR State
$state35 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ANDAMAN AND NICOBAR',
    'state_code' => '35'
]);
City::create(['state_id' => $state35->id, 'city_name' => 'PORT BLAIR']);
// Add cities associated with ANDAMAN AND NICOBAR state

// TELANGANA State
$state36 = State::create([
    'country_id' => $country->id,
    'state_name' => 'TELANGANA',
    'state_code' => '36'
]);
City::create(['state_id' => $state36->id, 'city_name' => 'Hyderabad']);
City::create(['state_id' => $state36->id, 'city_name' => 'Karimnagar']);
City::create(['state_id' => $state36->id, 'city_name' => 'Khammam']);
City::create(['state_id' => $state36->id, 'city_name' => 'Mahbubnagar']);
City::create(['state_id' => $state36->id, 'city_name' => 'Nizamabad']);
City::create(['state_id' => $state36->id, 'city_name' => 'Sangareddi']);
City::create(['state_id' => $state36->id, 'city_name' => 'Warangal']);


// ANDHRA PRADESH State
$state37 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ANDHRA PRADESH',
    'state_code' => '37'
]);
City::create(['state_id' => $state37->id, 'city_name' => 'ADONI']);
City::create(['state_id' => $state37->id, 'city_name' => 'AMARAVATI']);
City::create(['state_id' => $state37->id, 'city_name' => 'ANANTAPUR']);
City::create(['state_id' => $state37->id, 'city_name' => 'CHANDRAGIRI']);
City::create(['state_id' => $state37->id, 'city_name' => 'CHITTOOR']);
City::create(['state_id' => $state37->id, 'city_name' => 'DOWLAISWARAM']);
City::create(['state_id' => $state37->id, 'city_name' => 'ELURU']);
City::create(['state_id' => $state37->id, 'city_name' => 'GUNTUR']);
City::create(['state_id' => $state37->id, 'city_name' => 'KADAPA']);
City::create(['state_id' => $state37->id, 'city_name' => 'MACHILIPATNAM']);
City::create(['state_id' => $state37->id, 'city_name' => 'NAGARJUNAKONDA']);
City::create(['state_id' => $state37->id, 'city_name' => 'RAJAHMUNDRY']);
City::create(['state_id' => $state37->id, 'city_name' => 'SRIKAKULAM']);
City::create(['state_id' => $state37->id, 'city_name' => 'TIRUPATI']);
City::create(['state_id' => $state37->id, 'city_name' => 'VIJAYAWADA']);
City::create(['state_id' => $state37->id, 'city_name' => 'VISAKHAPATNAM']);
City::create(['state_id' => $state37->id, 'city_name' => 'VIZIANAGARAM']);
City::create(['state_id' => $state37->id, 'city_name' => 'YEMMIGANUR']);
// Add cities associated with ANDHRA PRADESH state

// LADAKH State
$state38 = State::create([
    'country_id' => $country->id,
    'state_name' => 'LADAKH',
    'state_code' => '38'
]);
City::create(['state_id' => $state38->id, 'city_name' => 'LEH']);
City::create(['state_id' => $state38->id, 'city_name' => 'KARGIL']);

}
  }
