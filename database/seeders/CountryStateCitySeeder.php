<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Pincode;

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
$cityAnantnag = City::create(['state_id' => $state1->id, 'city_name' => 'Anantnag']);
$cityBaramula = City::create(['state_id' => $state1->id, 'city_name' => 'Baramula']);
$cityDoda = City::create(['state_id' => $state1->id, 'city_name' => 'Doda']);
$cityGulmarg = City::create(['state_id' => $state1->id, 'city_name' => 'Gulmarg']);
$cityJammu = City::create(['state_id' => $state1->id, 'city_name' => 'Jammu']);
$cityKathua = City::create(['state_id' => $state1->id, 'city_name' => 'Kathua']);
$cityPunch = City::create(['state_id' => $state1->id, 'city_name' => 'Punch']);
$cityRajouri = City::create(['state_id' => $state1->id, 'city_name' => 'Rajouri']);
$citySrinagar = City::create(['state_id' => $state1->id, 'city_name' => 'Srinagar']);
$cityUdhampur = City::create(['state_id' => $state1->id, 'city_name' => 'Udhampur']);

$pincodeAnantnag = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityAnantnag->id, 'pincode' => '192101']);
$pincodeBaramula = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityBaramula->id, 'pincode' => '193101']);
$pincodeDoda = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityDoda->id, 'pincode' => '182202']);
$pincodeGulmarg = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityGulmarg->id, 'pincode' => '193403']);
$pincodeJammu = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityJammu->id, 'pincode' => '180001']);
$pincodeKathua = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityKathua->id, 'pincode' => '184101']);
$pincodePunch = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityPunch->id, 'pincode' => '185101']);
$pincodeRajouri = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityRajouri->id, 'pincode' => '185131']);
$pincodeSrinagar = Pincode::create(['state_id' => $state1->id, 'city_id' => $citySrinagar->id, 'pincode' => '190001']);
$pincodeUdhampur = Pincode::create(['state_id' => $state1->id, 'city_id' => $cityUdhampur->id, 'pincode' => '182101']);

    // HIMACHAL PRADESH State
$state2 = State::create([
    'country_id' => $country->id,
    'state_name' => 'HIMACHAL PRADESH',
    'state_code' => '02'
]);
$cityBilaspur = City::create(['state_id' => $state2->id, 'city_name' => 'Bilaspur']);
$cityChamba = City::create(['state_id' => $state2->id, 'city_name' => 'Chamba']);
$cityDalhousie = City::create(['state_id' => $state2->id, 'city_name' => 'Dalhousie']);
$cityDharmshala = City::create(['state_id' => $state2->id, 'city_name' => 'Dharmshala']);
$cityHamirpur = City::create(['state_id' => $state2->id, 'city_name' => 'Hamirpur']);
$cityKangra = City::create(['state_id' => $state2->id, 'city_name' => 'Kangra']);
$cityKullu = City::create(['state_id' => $state2->id, 'city_name' => 'Kullu']);
$cityMandi = City::create(['state_id' => $state2->id, 'city_name' => 'Mandi']);
$cityNahan = City::create(['state_id' => $state2->id, 'city_name' => 'Nahan']);
$cityShimla = City::create(['state_id' => $state2->id, 'city_name' => 'Shimla']); // Already exists, you can remove this line if not needed
$cityUna = City::create(['state_id' => $state2->id, 'city_name' => 'Una']);

$pincodeBilaspur = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityBilaspur->id, 'pincode' => '495001']);
$pincodeChamba= Pincode::create(['state_id' => $state2->id, 'city_id' => $cityChamba->id, 'pincode' => '176310']);
$pincodeDalhousie = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityDalhousie->id, 'pincode' => '176304']);
$pincodeDharmshala = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityDharmshala->id, 'pincode' => '176215']);
$pincodeHamirpur = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityHamirpur->id, 'pincode' => '177001']);
$pincodeKangra = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityKangra->id, 'pincode' => '176001']);
$pincodeKullu = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityKullu->id, 'pincode' => '175101']);
$pincodeMandi = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityMandi->id, 'pincode' => '175001']);
$pincodeNahan = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityNahan->id, 'pincode' => '173001']);
$pincodeShimla = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityShimla->id, 'pincode' => '171001']);
$pincodeUna = Pincode::create(['state_id' => $state2->id, 'city_id' => $cityUna->id, 'pincode' => '174303']);

    // PUNJAB State
$state3 = State::create([
    'country_id' => $country->id,
    'state_name' => 'PUNJAB',
    'state_code' => '03'
]);
$cityAmritsar = City::create(['state_id' => $state3->id, 'city_name' => 'Amritsar']);
$cityBatala = City::create(['state_id' => $state3->id, 'city_name' => 'Batala']);
$cityChandigarh = City::create(['state_id' => $state3->id, 'city_name' => 'Chandigarh']);
$cityFaridkot = City::create(['state_id' => $state3->id, 'city_name' => 'Faridkot']);
$cityFirozpur = City::create(['state_id' => $state3->id, 'city_name' => 'Firozpur']);
$cityGurdaspur = City::create(['state_id' => $state3->id, 'city_name' => 'Gurdaspur']);
$cityHoshiarpur = City::create(['state_id' => $state3->id, 'city_name' => 'Hoshiarpur']);
$cityJalandhar = City::create(['state_id' => $state3->id, 'city_name' => 'Jalandhar']);
$cityKapurthala = City::create(['state_id' => $state3->id, 'city_name' => 'Kapurthala']);
$cityLudhiana = City::create(['state_id' => $state3->id, 'city_name' => 'Ludhiana']);
$cityNabha = City::create(['state_id' => $state3->id, 'city_name' => 'Nabha']);
$cityPatiala = City::create(['state_id' => $state3->id, 'city_name' => 'Patiala']);
$cityRupnagar = City::create(['state_id' => $state3->id, 'city_name' => 'Rupnagar']);
$citySangrur = City::create(['state_id' => $state3->id, 'city_name' => 'Sangrur']);

$pincodeAmritsar = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityAmritsar->id, 'pincode' => '	143001']);
$pincodeBatala = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityBatala->id, 'pincode' => '143505']);
$pincodeChandigarh = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityChandigarh->id, 'pincode' => '160017']);
$pincodeFaridkot = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityFaridkot->id, 'pincode' => '151203']);
$pincodeFirozpur = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityFirozpur->id, 'pincode' => '152001']);
$pincodeGurdaspur = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityGurdaspur->id, 'pincode' => '143521']);
$pincodeHoshiarpur = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityHoshiarpur->id, 'pincode' => '146001']);
$pincodeJalandhar = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityJalandhar->id, 'pincode' => '144001']);
$pincodeKapurthala = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityKapurthala->id, 'pincode' => '144601']);
$pincodeLudhiana = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityLudhiana->id, 'pincode' => '141001']);
$pincodeNabha = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityNabha->id, 'pincode' => '147201']);
$pincodePatiala = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityPatiala->id, 'pincode' => '147001']);
$pincodeRupnagar = Pincode::create(['state_id' => $state3->id, 'city_id' => $cityRupnagar->id, 'pincode' => '140001']);
$pincodeSangrur = Pincode::create(['state_id' => $state3->id, 'city_id' => $citySangrur->id, 'pincode' => '148001']);
    // CHANDIGARH State
$state4 = State::create([
    'country_id' => $country->id,
    'state_name' => 'CHANDIGARH',
    'state_code' => '04'
]);
$cityChandigarhCity = City::create(['state_id' => $state4->id, 'city_name' => 'CHANDIGARH CITY']);

$pincodeChandigarhCity = Pincode::create(['state_id' => $state4->id, 'city_id' => $cityChandigarhCity->id, 'pincode' => '160001']);


// UTTARAKHAND State
$state5 = State::create([
    'country_id' => $country->id,
    'state_name' => 'UTTARAKHAND',
    'state_code' => '05'
]);
$cityAlmora = City::create(['state_id' => $state5->id, 'city_name' => 'Almora']);
$cityDehraDun = City::create(['state_id' => $state5->id, 'city_name' => 'Dehra Dun']); // Please note the spelling correction
$cityHaridwar = City::create(['state_id' => $state5->id, 'city_name' => 'Haridwar']);
$cityMussoorie = City::create(['state_id' => $state5->id, 'city_name' => 'Mussoorie']);
$cityNainital = City::create(['state_id' => $state5->id, 'city_name' => 'Nainital']);
$cityPithoragarh = City::create(['state_id' => $state5->id, 'city_name' => 'Pithoragarh']);

$pincodeAlmora = Pincode::create(['state_id' => $state5->id, 'city_id' => $cityAlmora->id, 'pincode' => '263601']);
$pincodeDehraDun = Pincode::create(['state_id' => $state5->id, 'city_id' => $cityDehraDun->id, 'pincode' => '248001']);
$pincodeHaridwar = Pincode::create(['state_id' => $state5->id, 'city_id' => $cityHaridwar->id, 'pincode' => '249401']);
$pincodeMussoorie = Pincode::create(['state_id' => $state5->id, 'city_id' => $cityMussoorie->id, 'pincode' => '248179']);
$pincodeNainital = Pincode::create(['state_id' => $state5->id, 'city_id' => $cityNainital->id, 'pincode' => '263001']);
$pincodePithoragarh = Pincode::create(['state_id' => $state5->id, 'city_id' => $cityPithoragarh->id, 'pincode' => '262501']);


// HARYANA State
$state6 = State::create([
    'country_id' => $country->id,
    'state_name' => 'HARYANA',
    'state_code' => '06'
]);
$cityAmbala = City::create(['state_id' => $state6->id, 'city_name' => 'Ambala']);
$cityBhiwani = City::create(['state_id' => $state6->id, 'city_name' => 'Bhiwani']);
$cityChandigarh = City::create(['state_id' => $state6->id, 'city_name' => 'Chandigarh']);
$cityFaridabad = City::create(['state_id' => $state6->id, 'city_name' => 'Faridabad']); // Already exists, you can remove this line if not needed
$cityFirozpurJhirka = City::create(['state_id' => $state6->id, 'city_name' => 'Firozpur Jhirka']);
$cityGurugram = City::create(['state_id' => $state6->id, 'city_name' => 'Gurugram']); // Already exists, you can remove this line if not needed
$cityHansi = City::create(['state_id' => $state6->id, 'city_name' => 'Hansi']);
$cityHisar = City::create(['state_id' => $state6->id, 'city_name' => 'Hisar']);
$cityJind = City::create(['state_id' => $state6->id, 'city_name' => 'Jind']);
$cityKaithal = City::create(['state_id' => $state6->id, 'city_name' => 'Kaithal']);
$cityKarnal = City::create(['state_id' => $state6->id, 'city_name' => 'Karnal']);
$cityKurukshetra = City::create(['state_id' => $state6->id, 'city_name' => 'Kurukshetra']);
$cityPanipat = City::create(['state_id' => $state6->id, 'city_name' => 'Panipat']);
$cityPehowa = City::create(['state_id' => $state6->id, 'city_name' => 'Pehowa']);
$cityRewari = City::create(['state_id' => $state6->id, 'city_name' => 'Rewari']);
$cityRohtak = City::create(['state_id' => $state6->id, 'city_name' => 'Rohtak']);
$citySirsa = City::create(['state_id' => $state6->id, 'city_name' => 'Sirsa']);
$citySonipat = City::create(['state_id' => $state6->id, 'city_name' => 'Sonipat']);

$pincodeAmbala = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityAmbala->id, 'pincode' => '133001']);
$pincodeBhiwani = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityBhiwani->id, 'pincode' => '127021']);
$pincodeChandigarh = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityChandigarh->id, 'pincode' => '160001']);
$pincodeFirozpurJhirka = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityFirozpurJhirka->id, 'pincode' => '122104']);
$pincodeHansi = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityHansi->id, 'pincode' => '125033']);
$pincodeHisar = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityHisar->id, 'pincode' => '125001']);
$pincodeJind = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityJind->id, 'pincode' => '126102']);
$pincodeKaithal = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityKaithal->id, 'pincode' => '136027']);
$pincodeKarnal = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityKarnal->id, 'pincode' => '132001']);
$pincodeKurukshetra = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityKurukshetra->id, 'pincode' => '136118']);
$pincodePanipat = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityPanipat->id, 'pincode' => '132103']);
$pincodePehowa = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityPehowa->id, 'pincode' => '136128']);
$pincodeRewari = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityRewari->id, 'pincode' => '123401']);
$pincodeRohtak = Pincode::create(['state_id' => $state6->id, 'city_id' => $cityRohtak->id, 'pincode' => '124001']);
$pincodeSirsa = Pincode::create(['state_id' => $state6->id, 'city_id' => $citySirsa->id, 'pincode' => '125055']);
$pincodeSonipat = Pincode::create(['state_id' => $state6->id, 'city_id' => $citySonipat->id, 'pincode' => '131001']);



// DELHI State
$state7 = State::create([
    'country_id' => $country->id,
    'state_name' => 'DELHI',
    'state_code' => '07'
]);
$cityINDRAPRASTHA = City::create(['state_id' => $state7->id, 'city_name' => 'INDRAPRASTHA']);
$cityDHILLIKA = City::create(['state_id' => $state7->id, 'city_name' => 'DHILLIKA']);
$cityLALKOT = City::create(['state_id' => $state7->id, 'city_name' => 'LAL KOT']);
$cityQILARAIPITHORA = City::create(['state_id' => $state7->id, 'city_name' => 'QILA RAI PITHORA']);
$cityKILOKRIKILLUGHARI = City::create(['state_id' => $state7->id, 'city_name' => 'KILOKRI(KILLU GHARI)']);
$citySIRI = City::create(['state_id' => $state7->id, 'city_name' => 'SIRI']);
$cityTUGHLAQABAD = City::create(['state_id' => $state7->id, 'city_name' => 'TUGHLAQABAD']);
$cityJAHANPANAH = City::create(['state_id' => $state7->id, 'city_name' => 'JAHANPANAH']);
$cityFEROZABAD = City::create(['state_id' => $state7->id, 'city_name' => 'FEROZABAD']);
$cityKHIZRABAD = City::create(['state_id' => $state7->id, 'city_name' => 'KHIZRABAD']);
$cityMUBARAKABAD = City::create(['state_id' => $state7->id, 'city_name' => 'MUBARAKABAD']);
$cityDINPANAH = City::create(['state_id' => $state7->id, 'city_name' => 'DINPANAH']);
$cityDILLSHERSHAHI = City::create(['state_id' => $state7->id, 'city_name' => 'DILL SHER SHAHI']);
$citySHAHJAHANABAD = City::create(['state_id' => $state7->id, 'city_name' => 'SHAHJAHANABAD']);
$cityNEWDELHI = City::create(['state_id' => $state7->id, 'city_name' => 'NEW DELHI']);

$pincodeINDRAPRASTHA = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityINDRAPRASTHA->id, 'pincode' => '110002']);
$pincodeLALKOT = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityLALKOT->id, 'pincode' => '509409']);
$pincodeQILARAIPITHORA = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityQILARAIPITHORA->id, 'pincode' => '110016']);
$pincodeKILOKRIKILLUGHARI = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityKILOKRIKILLUGHARI->id, 'pincode' => '110014']);
$pincodeSIRI = Pincode::create(['state_id' => $state7->id, 'city_id' => $citySIRI->id, 'pincode' => '517646']);
$pincodeTUGHLAQABAD = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityTUGHLAQABAD->id, 'pincode' => '110044']);
$pincodeJAHANPANAH = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityJAHANPANAH->id, 'pincode' => '110062']);
$pincodeFEROZABAD = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityFEROZABAD->id, 'pincode' => ' 283203']);
$pincodeKHIZRABAD = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityKHIZRABAD->id, 'pincode' => '140109']);
$pincodeMUBARAKABAD = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityMUBARAKABAD->id, 'pincode' => '110035']);
$pincodeDILLSHERSHAHI= Pincode::create(['state_id' => $state7->id, 'city_id' => $cityDILLSHERSHAHI->id, 'pincode' => '110002']);
$pincodeSHAHJAHANABAD = Pincode::create(['state_id' => $state7->id, 'city_id' => $citySHAHJAHANABAD->id, 'pincode' => '	110006']);
$pincodeNEWDELHI = Pincode::create(['state_id' => $state7->id, 'city_id' => $cityNEWDELHI->id, 'pincode' => '110001']);


// RAJASTHAN State
$state8 = State::create([
    'country_id' => $country->id,
    'state_name' => 'RAJASTHAN',
    'state_code' => '08'
]);
$cityAbu = City::create(['state_id' => $state8->id, 'city_name' => 'Abu']);
$cityAjmer = City::create(['state_id' => $state8->id, 'city_name' => 'Ajmer']);
$cityAlwar = City::create(['state_id' => $state8->id, 'city_name' => 'Alwar']);
$cityAmer = City::create(['state_id' => $state8->id, 'city_name' => 'Amer']);
$cityBarmer = City::create(['state_id' => $state8->id, 'city_name' => 'Barmer']);
$cityBeawar = City::create(['state_id' => $state8->id, 'city_name' => 'Beawar']);
$cityBharatpur = City::create(['state_id' => $state8->id, 'city_name' => 'Bharatpur']);
$cityBhilwara = City::create(['state_id' => $state8->id, 'city_name' => 'Bhilwara']);
$cityBikaner = City::create(['state_id' => $state8->id, 'city_name' => 'Bikaner']);
$cityBundi = City::create(['state_id' => $state8->id, 'city_name' => 'Bundi']);
$cityChittaurgarh = City::create(['state_id' => $state8->id, 'city_name' => 'Chittaurgarh']);
$cityChuru = City::create(['state_id' => $state8->id, 'city_name' => 'Churu']);
$cityDhaulpur = City::create(['state_id' => $state8->id, 'city_name' => 'Dhaulpur']);
$cityDungarpur = City::create(['state_id' => $state8->id, 'city_name' => 'Dungarpur']);
$cityGanganagar = City::create(['state_id' => $state8->id, 'city_name' => 'Ganganagar']);
$cityHanumangarh = City::create(['state_id' => $state8->id, 'city_name' => 'Hanumangarh']);
$cityJaipur = City::create(['state_id' => $state8->id, 'city_name' => 'Jaipur']);
$cityJaisalmer = City::create(['state_id' => $state8->id, 'city_name' => 'Jaisalmer']);
$cityJalor = City::create(['state_id' => $state8->id, 'city_name' => 'Jalor']);
$cityJhalawar = City::create(['state_id' => $state8->id, 'city_name' => 'Jhalawar']);
$cityJhunjhunu = City::create(['state_id' => $state8->id, 'city_name' => 'Jhunjhunu']);
$cityJodhpur = City::create(['state_id' => $state8->id, 'city_name' => 'Jodhpur']);
$cityKishangarh = City::create(['state_id' => $state8->id, 'city_name' => 'Kishangarh']);
$cityKota = City::create(['state_id' => $state8->id, 'city_name' => 'Kota']);
$cityMerta = City::create(['state_id' => $state8->id, 'city_name' => 'Merta']);
$cityNagaur = City::create(['state_id' => $state8->id, 'city_name' => 'Nagaur']);
$cityNathdwara = City::create(['state_id' => $state8->id, 'city_name' => 'Nathdwara']);
$cityPali = City::create(['state_id' => $state8->id, 'city_name' => 'Pali']);
$cityPhalodi = City::create(['state_id' => $state8->id, 'city_name' => 'Phalodi']);
$cityPushkar = City::create(['state_id' => $state8->id, 'city_name' => 'Pushkar']);
$citySawaiMadhopur = City::create(['state_id' => $state8->id, 'city_name' => 'Sawai Madhopur']);
$cityShahpura = City::create(['state_id' => $state8->id, 'city_name' => 'Shahpura']);
$citySikar = City::create(['state_id' => $state8->id, 'city_name' => 'Sikar']);
$citySirohi = City::create(['state_id' => $state8->id, 'city_name' => 'Sirohi']);
$cityTonk = City::create(['state_id' => $state8->id, 'city_name' => 'Tonk']);
$cityUdaipur = City::create(['state_id' => $state8->id, 'city_name' => 'Udaipur']);

$pincodeAbu = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityAbu->id, 'pincode' => '307026']);
$pincodeAjmer = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityAjmer->id, 'pincode' => '305001']);
$pincodeAlwar = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityAlwar->id, 'pincode' => '301001']);
$pincodeAmer = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityAmer->id, 'pincode' => '303101']);
$pincodeBarmer = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityBarmer->id, 'pincode' => '344001']);
$pincodeBeawar = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityBeawar->id, 'pincode' => '305901']);
$pincodeBharatpur = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityBharatpur->id, 'pincode' => '321001']);
$pincodeBhilwara = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityBhilwara->id, 'pincode' => '311001']);
$pincodeBikaner = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityBikaner->id, 'pincode' => '334001']);
$pincodeBundi = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityBundi->id, 'pincode' => '323001']);
$pincodeChittaurgarh = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityChittaurgarh->id, 'pincode' => '312001']);
$pincodeChuru = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityChuru->id, 'pincode' => '331001']);
$pincodeDhaulpur = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityDhaulpur->id, 'pincode' => '328001']);
$pincodeDungarpur = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityDungarpur->id, 'pincode' => '314001']);
$pincodeGanganagar = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityGanganagar->id, 'pincode' => '335001']);
$pincodeHanumangarh = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityHanumangarh->id, 'pincode' => '335513']);
$pincodeJaipur = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityJaipur->id, 'pincode' => '302001']);
$pincodeJaisalmer = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityJaisalmer->id, 'pincode' => '345001']);
$pincodeJalor = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityJalor->id, 'pincode' => '343001']);
$pincodeJhalawar = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityJhalawar->id, 'pincode' => '326001']);
$pincodeJhunjhunu = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityJhunjhunu->id, 'pincode' => '333001']);
$pincodeJodhpur = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityJodhpur->id, 'pincode' => '342001']);
$pincodeKishangarh = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityKishangarh->id, 'pincode' => '305801']);
$pincodeKota = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityKota->id, 'pincode' => '324001']);
$pincodeMerta = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityMerta->id, 'pincode' => '341510']);
$pincodeNagaur = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityNagaur->id, 'pincode' => '341001']);
$pincodeNathdwara = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityNathdwara->id, 'pincode' => '313301']);
$pincodePali = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityPali->id, 'pincode' => '306401']);
$pincodePhalodi = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityPhalodi->id, 'pincode' => '342301']);
$pincodePushkar = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityPushkar->id, 'pincode' => '305022']);
$pincodeSawaiMadhopur = Pincode::create(['state_id' => $state8->id, 'city_id' => $citySawaiMadhopur->id, 'pincode' => '322001']);
$pincodeShahpura = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityShahpura->id, 'pincode' => '311404']);
$pincodeSikar = Pincode::create(['state_id' => $state8->id, 'city_id' => $citySikar->id, 'pincode' => '332001']);
$pincodeSirohi = Pincode::create(['state_id' => $state8->id, 'city_id' => $citySirohi->id, 'pincode' => '307001']);
$pincodeTonk = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityTonk->id, 'pincode' => '304001']);
$pincodeUdaipur = Pincode::create(['state_id' => $state8->id, 'city_id' => $cityUdaipur->id, 'pincode' => '313001']);


// UTTAR PRADESH State
$state9 = State::create([
    'country_id' => $country->id,
    'state_name' => 'UTTAR PRADESH',
    'state_code' => '09'
]);
$cityAgra = City::create(['state_id' => $state9->id, 'city_name' => 'Agra']);
$cityAligarh = City::create(['state_id' => $state9->id, 'city_name' => 'Aligarh']);
$cityAkbarpur = City::create(['state_id' => $state9->id, 'city_name' => 'Akbarpur']);
$cityAmroha = City::create(['state_id' => $state9->id, 'city_name' => 'Amroha']);
$cityAwagarh = City::create(['state_id' => $state9->id, 'city_name' => 'Awagarh']);
$cityAyodhya = City::create(['state_id' => $state9->id, 'city_name' => 'Ayodhya']);
$cityAzamgarh = City::create(['state_id' => $state9->id, 'city_name' => 'Azamgarh']);
$cityBadaun = City::create(['state_id' => $state9->id, 'city_name' => 'Badaun']);
$cityBahraich = City::create(['state_id' => $state9->id, 'city_name' => 'Bahraich']);
$cityBallia = City::create(['state_id' => $state9->id, 'city_name' => 'Ballia']);
$cityBanda = City::create(['state_id' => $state9->id, 'city_name' => 'Banda']);
$cityBaraBanki = City::create(['state_id' => $state9->id, 'city_name' => 'Bara Banki']);
$cityBareilly = City::create(['state_id' => $state9->id, 'city_name' => 'Bareilly']);
$cityBasti = City::create(['state_id' => $state9->id, 'city_name' => 'Basti']);
$cityBijnor = City::create(['state_id' => $state9->id, 'city_name' => 'Bijnor']);
$cityBithur = City::create(['state_id' => $state9->id, 'city_name' => 'Bithur']);
$cityBudaun = City::create(['state_id' => $state9->id, 'city_name' => 'Budaun']);
$cityBulandshahr = City::create(['state_id' => $state9->id, 'city_name' => 'Bulandshahr']);
$cityChandausi = City::create(['state_id' => $state9->id, 'city_name' => 'Chandausi']);
$cityDeoria = City::create(['state_id' => $state9->id, 'city_name' => 'Deoria']);
$cityEtah = City::create(['state_id' => $state9->id, 'city_name' => 'Etah']);
$cityEtawah = City::create(['state_id' => $state9->id, 'city_name' => 'Etawah']);
$cityFaizabad = City::create(['state_id' => $state9->id, 'city_name' => 'Faizabad']);
$cityFarrukhabadCumFatehgarh = City::create(['state_id' => $state9->id, 'city_name' => 'Farrukhabad-cum-Fatehgarh']);
$cityFatehpur = City::create(['state_id' => $state9->id, 'city_name' => 'Fatehpur']);
$cityFatehpurSikri = City::create(['state_id' => $state9->id, 'city_name' => 'Fatehpur Sikri']);
$cityFirozabad = City::create(['state_id' => $state9->id, 'city_name' => 'Firozabad']);
$cityGreaterNoida = City::create(['state_id' => $state9->id, 'city_name' => 'Greater Noida']);
$cityGhaziabad = City::create(['state_id' => $state9->id, 'city_name' => 'Ghaziabad']);
$cityGhazipur = City::create(['state_id' => $state9->id, 'city_name' => 'Ghazipur']);
$cityGonda = City::create(['state_id' => $state9->id, 'city_name' => 'Gonda']);
$cityGorakhpur = City::create(['state_id' => $state9->id, 'city_name' => 'Gorakhpur']);
$cityHamirpur = City::create(['state_id' => $state9->id, 'city_name' => 'Hamirpur']);
$cityHapur = City::create(['state_id' => $state9->id, 'city_name' => 'Hapur']);
$cityHardoi = City::create(['state_id' => $state9->id, 'city_name' => 'Hardoi']);
$cityHathras = City::create(['state_id' => $state9->id, 'city_name' => 'Hathras']);
$cityJalaun = City::create(['state_id' => $state9->id, 'city_name' => 'Jalaun']);
$cityJaunpur = City::create(['state_id' => $state9->id, 'city_name' => 'Jaunpur']);
$cityJhansi = City::create(['state_id' => $state9->id, 'city_name' => 'Jhansi']);
$cityKannauj = City::create(['state_id' => $state9->id, 'city_name' => 'Kannauj']);
$cityKanpur = City::create(['state_id' => $state9->id, 'city_name' => 'Kanpur']);
$cityKasganj = City::create(['state_id' => $state9->id, 'city_name' => 'Kasganj']);
$cityKhurja = City::create(['state_id' => $state9->id, 'city_name' => 'Khurja']);
$cityLakhimpur = City::create(['state_id' => $state9->id, 'city_name' => 'Lakhimpur']);
$cityLalitpur = City::create(['state_id' => $state9->id, 'city_name' => 'Lalitpur']);
$cityLucknow = City::create(['state_id' => $state9->id, 'city_name' => 'Lucknow']);
$cityMainpuri = City::create(['state_id' => $state9->id, 'city_name' => 'Mainpuri']);
$cityMathuraVrindavan = City::create(['state_id' => $state9->id, 'city_name' => 'Mathura-Vrindavan']);
$cityMaunathBhajan = City::create(['state_id' => $state9->id, 'city_name' => 'Maunath Bhajan']);
$cityMeerut = City::create(['state_id' => $state9->id, 'city_name' => 'Meerut']);
$cityMirzapurVindhyachal = City::create(['state_id' => $state9->id, 'city_name' => 'Mirzapur-Vindhyachal']);
$cityModinagar = City::create(['state_id' => $state9->id, 'city_name' => 'Modinagar']);
$cityMoradabad = City::create(['state_id' => $state9->id, 'city_name' => 'Moradabad']);
$cityMuzaffarnagar = City::create(['state_id' => $state9->id, 'city_name' => 'Muzaffarnagar']);
$cityNoida = City::create(['state_id' => $state9->id, 'city_name' => 'Noida']);
$cityOrai = City::create(['state_id' => $state9->id, 'city_name' => 'Orai']);
$cityPartapgarh = City::create(['state_id' => $state9->id, 'city_name' => 'Partapgarh']);
$cityPilibhit = City::create(['state_id' => $state9->id, 'city_name' => 'Pilibhit']);
$cityPrayagraj = City::create(['state_id' => $state9->id, 'city_name' => 'Prayagraj']);
$cityRaeBareli = City::create(['state_id' => $state9->id, 'city_name' => 'Rae Bareli']);
$cityRampur = City::create(['state_id' => $state9->id, 'city_name' => 'Rampur']);
$citySaharanpur = City::create(['state_id' => $state9->id, 'city_name' => 'Saharanpur']);
$citySahaswan = City::create(['state_id' => $state9->id, 'city_name' => 'Sahaswan']);
$citySambhal = City::create(['state_id' => $state9->id, 'city_name' => 'Sambhal']);
$cityShahjahanpur = City::create(['state_id' => $state9->id, 'city_name' => 'Shahjahanpur']);
$cityShamli = City::create(['state_id' => $state9->id, 'city_name' => 'Shamli']);
$citySitapur = City::create(['state_id' => $state9->id, 'city_name' => 'Sitapur']);
$citySultanpur = City::create(['state_id' => $state9->id, 'city_name' => 'Sultanpur']);
$cityTanda = City::create(['state_id' => $state9->id, 'city_name' => 'Tanda']);
$cityTehri = City::create(['state_id' => $state9->id, 'city_name' => 'Tehri']);
$cityUnnao = City::create(['state_id' => $state9->id, 'city_name' => 'Unnao']);
$cityVaranasi = City::create(['state_id' => $state9->id, 'city_name' => 'Varanasi']);

$pincodeAgra = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityAgra->id, 'pincode' => '282001']);
$pincodeAligarh = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityAligarh->id, 'pincode' => '202001']);
$pincodeAkbarpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityAkbarpur->id, 'pincode' => '209101']);
$pincodeAmroha = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityAmroha->id, 'pincode' => '244221']);
$pincodeAwagarh = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityAwagarh->id, 'pincode' => '204101']);
$pincodeAyodhya = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityAyodhya->id, 'pincode' => '224123']);
$pincodeAzamgarh = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityAzamgarh->id, 'pincode' => '276001']);
$pincodeBadaun = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBadaun->id, 'pincode' => '243601']);
$pincodeBahraich = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBahraich->id, 'pincode' => '271801']);
$pincodeBallia = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBallia->id, 'pincode' => '277001']);
$pincodeBanda = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBanda->id, 'pincode' => '210001']);
$pincodeBaraBanki = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBaraBanki->id, 'pincode' => '225001']);
$pincodeBareilly = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBareilly->id, 'pincode' => '243001']);
$pincodeBasti = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBasti->id, 'pincode' => '272001']);
$pincodeBijnor = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBijnor->id, 'pincode' => '246701']);
$pincodeBithur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBithur->id, 'pincode' => '209209']);
$pincodeBudaun = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBudaun->id, 'pincode' => '243601']);
$pincodeBulandshahr = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityBulandshahr->id, 'pincode' => '203001']);
$pincodeChandausi = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityChandausi->id, 'pincode' => '202412']);
$pincodeDeoria = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityDeoria->id, 'pincode' => '274001']);
$pincodeEtah = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityEtah->id, 'pincode' => '207001']);
$pincodeEtawah = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityEtawah->id, 'pincode' => '206001']);
$pincodeFaizabad = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityFaizabad->id, 'pincode' => '224001']);
$pincodeFarrukhabadCumFatehgarh = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityFarrukhabadCumFatehgarh->id, 'pincode' => '209625']);
$pincodeFatehpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityFatehpur->id, 'pincode' => '212601']);
$pincodeFatehpurSikri = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityFatehpurSikri->id, 'pincode' => '283110']);
$pincodeFirozabad = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityFirozabad->id, 'pincode' => '283203']);
$pincodeGreaterNoida = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityGreaterNoida->id, 'pincode' => '201310']);
$pincodeGhaziabad = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityGhaziabad->id, 'pincode' => '201001']);
$pincodeGhazipur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityGhazipur->id, 'pincode' => '233001']);
$pincodeGonda = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityGonda->id, 'pincode' => '271001']);
$pincodeGorakhpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityGorakhpur->id, 'pincode' => '273001']);
$pincodeHamirpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityHamirpur->id, 'pincode' => '210301']);
$pincodeHapur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityHapur->id, 'pincode' => '245101']);
$pincodeHardoi = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityHardoi->id, 'pincode' => '241001']);
$pincodeHathras = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityHathras->id, 'pincode' => '204101']);
$pincodeJalaun = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityJalaun->id, 'pincode' => '285123']);
$pincodeJaunpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityJaunpur->id, 'pincode' => '222001']);
$pincodeJhansi = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityJhansi->id, 'pincode' => '284001']);
$pincodeKannauj = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityKannauj->id, 'pincode' => '209725']);
$pincodeKanpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityKanpur->id, 'pincode' => '208001']);
$pincodeKasganj = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityKasganj->id, 'pincode' => '207123']);
$pincodeKhurja = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityKhurja->id, 'pincode' => '203131']);
$pincodeLakhimpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityLakhimpur->id, 'pincode' => '262701']);
$pincodeLalitpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityLalitpur->id, 'pincode' => '284403']);
$pincodeLucknow = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityLucknow->id, 'pincode' => '226001']);
$pincodeMainpuri = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityMainpuri->id, 'pincode' => '205001']);
$pincodeMathuraVrindavan = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityMathuraVrindavan->id, 'pincode' => '281001']);
$pincodeMaunathBhajan = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityMaunathBhajan->id, 'pincode' => '275101']);
$pincodeMeerut = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityMeerut->id, 'pincode' => '250001']);
$pincodeMirzapurVindhyachal = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityMirzapurVindhyachal->id, 'pincode' => '231001']);
$pincodeModinagar = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityModinagar->id, 'pincode' => '201204']);
$pincodeMoradabad = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityMoradabad->id, 'pincode' => '244001']);
$pincodeMuzaffarnagar = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityMuzaffarnagar->id, 'pincode' => '251001']);
$pincodeNoida = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityNoida->id, 'pincode' => '201301']);
$pincodeOrai = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityOrai->id, 'pincode' => '285001']);
$pincodePartapgarh = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityPartapgarh->id, 'pincode' => '230001']);
$pincodePilibhit = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityPilibhit->id, 'pincode' => '262001']);
$pincodePrayagraj = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityPrayagraj->id, 'pincode' => '211001']);
$pincodeRaeBareli = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityRaeBareli->id, 'pincode' => '229001']);
$pincodeRampur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityRampur->id, 'pincode' => '244901']);
$pincodeSaharanpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $citySaharanpur->id, 'pincode' => '247001']);
$pincodeSahaswan = Pincode::create(['state_id' => $state9->id, 'city_id' => $citySahaswan->id, 'pincode' => '242221']);
$pincodeSambhal = Pincode::create(['state_id' => $state9->id, 'city_id' => $citySambhal->id, 'pincode' => '244302']);
$pincodeShahjahanpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityShahjahanpur->id, 'pincode' => '242001']);
$pincodeShamli = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityShamli->id, 'pincode' => '247776']);
$pincodeSitapur = Pincode::create(['state_id' => $state9->id, 'city_id' => $citySitapur->id, 'pincode' => '261001']);
$pincodeSultanpur = Pincode::create(['state_id' => $state9->id, 'city_id' => $citySultanpur->id, 'pincode' => '228001']);
$pincodeTanda = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityTanda->id, 'pincode' => '224190']);
$pincodeTehri = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityTehri->id, 'pincode' => '249001']);
$pincodeUnnao = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityUnnao->id, 'pincode' => '209801']);
$pincodeVaranasi = Pincode::create(['state_id' => $state9->id, 'city_id' => $cityVaranasi->id, 'pincode' => '221001']);
// BIHAR State
$state10 = State::create([
    'country_id' => $country->id,
    'state_name' => 'BIHAR',
    'state_code' => '10'
]);
$cityAra = City::create(['state_id' => $state10->id, 'city_name' => 'Ara']);
$cityBarauni = City::create(['state_id' => $state10->id, 'city_name' => 'Barauni']);
$cityBegusarai = City::create(['state_id' => $state10->id, 'city_name' => 'Begusarai']);
$cityBettiah = City::create(['state_id' => $state10->id, 'city_name' => 'Bettiah']);
$cityBhagalpur = City::create(['state_id' => $state10->id, 'city_name' => 'Bhagalpur']);
$cityBiharSharif = City::create(['state_id' => $state10->id, 'city_name' => 'Bihar Sharif']);
$cityBodhGaya = City::create(['state_id' => $state10->id, 'city_name' => 'Bodh Gaya']);
$cityBuxar = City::create(['state_id' => $state10->id, 'city_name' => 'Buxar']);
$cityChapra = City::create(['state_id' => $state10->id, 'city_name' => 'Chapra']);
$cityDarbhanga = City::create(['state_id' => $state10->id, 'city_name' => 'Darbhanga']);
$cityDehri = City::create(['state_id' => $state10->id, 'city_name' => 'Dehri']);
$cityDinapurNizamat = City::create(['state_id' => $state10->id, 'city_name' => 'Dinapur Nizamat']);
$cityGaya = City::create(['state_id' => $state10->id, 'city_name' => 'Gaya']);
$cityHajipur = City::create(['state_id' => $state10->id, 'city_name' => 'Hajipur']);
$cityJamalpur = City::create(['state_id' => $state10->id, 'city_name' => 'Jamalpur']);
$cityKatihar = City::create(['state_id' => $state10->id, 'city_name' => 'Katihar']);
$cityMadhubani = City::create(['state_id' => $state10->id, 'city_name' => 'Madhubani']);
$cityMotihari = City::create(['state_id' => $state10->id, 'city_name' => 'Motihari']);
$cityMunger = City::create(['state_id' => $state10->id, 'city_name' => 'Munger']);
$cityMuzaffarpur = City::create(['state_id' => $state10->id, 'city_name' => 'Muzaffarpur']);
$cityPatna = City::create(['state_id' => $state10->id, 'city_name' => 'Patna']);
$cityPurnia = City::create(['state_id' => $state10->id, 'city_name' => 'Purnia']);
$cityPusa = City::create(['state_id' => $state10->id, 'city_name' => 'Pusa']);
$citySaharsa = City::create(['state_id' => $state10->id, 'city_name' => 'Saharsa']);
$citySamastipur = City::create(['state_id' => $state10->id, 'city_name' => 'Samastipur']);
$citySasaram = City::create(['state_id' => $state10->id, 'city_name' => 'Sasaram']);
$citySitamarhi = City::create(['state_id' => $state10->id, 'city_name' => 'Sitamarhi']);
$citySiwan = City::create(['state_id' => $state10->id, 'city_name' => 'Siwan']);

$pincodeAra = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityAra->id, 'pincode' => '802301']);
$pincodeBarauni = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityBarauni->id, 'pincode' => '851112']);
$pincodeBegusarai = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityBegusarai->id, 'pincode' => '851101']);
$pincodeBettiah = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityBettiah->id, 'pincode' => '845438']);
$pincodeBhagalpur = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityBhagalpur->id, 'pincode' => '812001']);
$pincodeBiharSharif = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityBiharSharif->id, 'pincode' => '803101']);
$pincodeBodhGaya = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityBodhGaya->id, 'pincode' => '824231']);
$pincodeBuxar = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityBuxar->id, 'pincode' => '802101']);
$pincodeChapra = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityChapra->id, 'pincode' => '841301']);
$pincodeDarbhanga = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityDarbhanga->id, 'pincode' => '846004']);
$pincodeDehri = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityDehri->id, 'pincode' => '821307']);
$pincodeDinapurNizamat = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityDinapurNizamat->id, 'pincode' => '801503']);
$pincodeGaya = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityGaya->id, 'pincode' => '823001']);
$pincodeHajipur = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityHajipur->id, 'pincode' => '844101']);
$pincodeJamalpur = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityJamalpur->id, 'pincode' => '811214']);
$pincodeKatihar = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityKatihar->id, 'pincode' => '854105']);
$pincodeMadhubani = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityMadhubani->id, 'pincode' => '847211']);
$pincodeMotihari = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityMotihari->id, 'pincode' => '845401']);
$pincodeMunger = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityMunger->id, 'pincode' => '811201']);
$pincodeMuzaffarpur = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityMuzaffarpur->id, 'pincode' => '842001']);
$pincodePatna = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityPatna->id, 'pincode' => '800001']);
$pincodePurnia = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityPurnia->id, 'pincode' => '854301']);
$pincodePusa = Pincode::create(['state_id' => $state10->id, 'city_id' => $cityPusa->id, 'pincode' => '848125']);
$pincodeSaharsa = Pincode::create(['state_id' => $state10->id, 'city_id' => $citySaharsa->id, 'pincode' => '852201']);
$pincodeSamastipur = Pincode::create(['state_id' => $state10->id, 'city_id' => $citySamastipur->id, 'pincode' => '848101']);
$pincodeSasaram = Pincode::create(['state_id' => $state10->id, 'city_id' => $citySasaram->id, 'pincode' => '821115']);
$pincodeSitamarhi = Pincode::create(['state_id' => $state10->id, 'city_id' => $citySitamarhi->id, 'pincode' => '843302']);
$pincodeSiwan = Pincode::create(['state_id' => $state10->id, 'city_id' => $citySiwan->id, 'pincode' => '841226']);

// SIKKIM State
$state11 = State::create([
    'country_id' => $country->id,
    'state_name' => 'SIKKIM',
    'state_code' => '11'
]);
$cityGANGTOK = City::create(['state_id' => $state11->id, 'city_name' => 'GANGTOK']);
$cityGYALSHING = City::create(['state_id' => $state11->id, 'city_name' => 'GYALSHING']);
$cityLACHUNG = City::create(['state_id' => $state11->id, 'city_name' => 'LACHUNG']);
$cityMANGAN = City::create(['state_id' => $state11->id, 'city_name' => 'MANGAN']);
// Add cities associated with SIKKIM state
$pincodeGangtok = Pincode::create(['state_id' => $state11->id, 'city_id' => $cityGANGTOK->id, 'pincode' => '737101']);
$pincodeGyalshing = Pincode::create(['state_id' => $state11->id, 'city_id' => $cityGYALSHING->id, 'pincode' => '737111']);
$pincodeLachung = Pincode::create(['state_id' => $state11->id, 'city_id' => $cityLACHUNG->id, 'pincode' => '737120']);
$pincodeMangan = Pincode::create(['state_id' => $state11->id, 'city_id' => $cityMANGAN->id, 'pincode' => '737116']);

// ARUNACHAL PRADESH State
$state12 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ARUNACHAL PRADESH',
    'state_code' => '12'
]);
$cityITANAGAR = City::create(['state_id' => $state12->id, 'city_name' => 'ITANAGAR']);
$cityTAWANG = City::create(['state_id' => $state12->id, 'city_name' => 'TAWANG']);

$pincodeItanagar = Pincode::create(['state_id' => $state12->id, 'city_id' => $cityITANAGAR->id, 'pincode' => '791111']);
$pincodeTawang = Pincode::create(['state_id' => $state12->id, 'city_id' => $cityTAWANG->id, 'pincode' => '790104']);

// NAGALAND State
$state13 = State::create([
    'country_id' => $country->id,
    'state_name' => 'NAGALAND',
    'state_code' => '13'
]);
$cityKOHIMA = City::create(['state_id' => $state13->id, 'city_name' => 'KOHIMA']);
$cityMON = City::create(['state_id' => $state13->id, 'city_name' => 'MON']);
$cityPHEK = City::create(['state_id' => $state13->id, 'city_name' => 'PHEK']);
$cityWOKHA = City::create(['state_id' => $state13->id, 'city_name' => 'WOKHA']);
$cityZUNHEBOTO = City::create(['state_id' => $state13->id, 'city_name' => 'ZUNHEBOTO']);

$pincodeKohima = Pincode::create(['state_id' => $state13->id, 'city_id' => $cityKOHIMA->id, 'pincode' => '797001']);
$pincodeMon = Pincode::create(['state_id' => $state13->id, 'city_id' => $cityMON->id, 'pincode' => '798621']);
$pincodePhek = Pincode::create(['state_id' => $state13->id, 'city_id' => $cityPHEK->id, 'pincode' => '797107']);
$pincodeWokha = Pincode::create(['state_id' => $state13->id, 'city_id' => $cityWOKHA->id, 'pincode' => '797111']);
$pincodeZunheboto = Pincode::create(['state_id' => $state13->id, 'city_id' => $cityZUNHEBOTO->id, 'pincode' => '798620']);


// MANIPUR State
$state14 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MANIPUR',
    'state_code' => '14'
]);
$cityIMPHAL = City::create(['state_id' => $state14->id, 'city_name' => 'IMPHAL']);
$pincodeImphal = Pincode::create(['state_id' => $state14->id, 'city_id' => $cityIMPHAL->id, 'pincode' => '795001']);

// Add cities associated with MANIPUR state

// MIZORAM State
$state15 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MIZORAM',
    'state_code' => '15'
]);
$cityAIZAWL = City::create(['state_id' => $state15->id, 'city_name' => 'AIZAWL']);
$cityLUNGLEI = City::create(['state_id' => $state15->id, 'city_name' => 'LUNGLEI']);

$pincodeAizawl = Pincode::create(['state_id' => $state15->id, 'city_id' => $cityAIZAWL->id, 'pincode' => '796001']);
$pincodeLunglei = Pincode::create(['state_id' => $state15->id, 'city_id' => $cityLUNGLEI->id, 'pincode' => '796701']);


// TRIPURA State
$state16 = State::create([
    'country_id' => $country->id,
    'state_name' => 'TRIPURA',
    'state_code' => '16'
]);
$cityAGARTALA = City::create(['state_id' => $state16->id, 'city_name' => 'AGARTALA']);
$cityDHARMNAGAR = City::create(['state_id' => $state16->id, 'city_name' => 'DHARMNAGAR']);
$cityUDAIPUR = City::create(['state_id' => $state16->id, 'city_name' => 'UDAIPUR']);
$cityKAILASHAHAR = City::create(['state_id' => $state16->id, 'city_name' => 'KAILASHAHAR']);
$cityBISHALGARH = City::create(['state_id' => $state16->id, 'city_name' => 'BISHALGARH']);
$cityTELIAMURA = City::create(['state_id' => $state16->id, 'city_name' => 'TELIAMURA']);
$cityKHOWAI = City::create(['state_id' => $state16->id, 'city_name' => 'KHOWAI']);
$cityBELONIA = City::create(['state_id' => $state16->id, 'city_name' => 'BELONIA']);
$cityMELAGHAR = City::create(['state_id' => $state16->id, 'city_name' => 'MELAGHAR']);
$cityAMBASSA = City::create(['state_id' => $state16->id, 'city_name' => 'AMBASSA']);
$cityRANIRBAZAR = City::create(['state_id' => $state16->id, 'city_name' => 'RANIRBAZAR']);
$citySANTIRBAZAR = City::create(['state_id' => $state16->id, 'city_name' => 'SANTIRBAZAR']);
$cityKUMARGHAT = City::create(['state_id' => $state16->id, 'city_name' => 'KUMARGHAT']);
$citySONAMURA = City::create(['state_id' => $state16->id, 'city_name' => 'SONAMURA']);
$cityPANISAGAR = City::create(['state_id' => $state16->id, 'city_name' => 'PANISAGAR']);
$cityAMARPUR = City::create(['state_id' => $state16->id, 'city_name' => 'AMARPUR']);
$cityJIRANIA = City::create(['state_id' => $state16->id, 'city_name' => 'JIRANIA']);
$cityKAMALPUR = City::create(['state_id' => $state16->id, 'city_name' => 'KAMALPUR']);
$citySABROOM = City::create(['state_id' => $state16->id, 'city_name' => 'SABROOM']);

$pincodeAgartala = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityAGARTALA->id, 'pincode' => '799001']);
$pincodeDharmnagar = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityDHARMNAGAR->id, 'pincode' => '799250']);
$pincodeUdaipur = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityUDAIPUR->id, 'pincode' => '799120']);
$pincodeKailashahar = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityKAILASHAHAR->id, 'pincode' => '799277']);
$pincodeBishalgarh = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityBISHALGARH->id, 'pincode' => '799102']);
$pincodeTeliamura = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityTELIAMURA->id, 'pincode' => '799205']);
$pincodeKhowai = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityKHOWAI->id, 'pincode' => '799202']);
$pincodeBelonia = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityBELONIA->id, 'pincode' => '799155']);
$pincodeMelaghar = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityMELAGHAR->id, 'pincode' => '799115']);
$pincodeAmbassa = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityAMBASSA->id, 'pincode' => '799289']);
$pincodeRanirbazar = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityRANIRBAZAR->id, 'pincode' => '799035']);
$pincodeSantirbazar = Pincode::create(['state_id' => $state16->id, 'city_id' => $citySANTIRBAZAR->id, 'pincode' => '799145']);
$pincodeKumarghat = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityKUMARGHAT->id, 'pincode' => '799264']);
$pincodeSonamura = Pincode::create(['state_id' => $state16->id, 'city_id' => $citySONAMURA->id, 'pincode' => '799131']);
$pincodePanisagar = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityPANISAGAR->id, 'pincode' => '799103']);
$pincodeAmarpur = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityAMARPUR->id, 'pincode' => '799126']);
$pincodeJirania = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityJIRANIA->id, 'pincode' => '799045']);
$pincodeKamalpur = Pincode::create(['state_id' => $state16->id, 'city_id' => $cityKAMALPUR->id, 'pincode' => '799285']);
$pincodeSabroom = Pincode::create(['state_id' => $state16->id, 'city_id' => $citySABROOM->id, 'pincode' => '799144']);


// MEGHALAYA State
$state17 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MEGHALAYA',
    'state_code' => '17'
]);
$citySHILLONG = City::create(['state_id' => $state17->id, 'city_name' => 'SHILLONG']);
$cityCHERRAPUNJI = City::create(['state_id' => $state17->id, 'city_name' => 'CHERRAPUNJI']);


$pincodeShillong = Pincode::create(['state_id' => $state17->id, 'city_id' => $citySHILLONG->id, 'pincode' => '793001']);
$pincodeCherrapunji = Pincode::create(['state_id' => $state17->id, 'city_id' => $cityCHERRAPUNJI->id, 'pincode' => '793108']);

// ASSAM State
$state18 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ASSAM',
    'state_code' => '18'
]);
$cityDhuburi = City::create(['state_id' => $state18->id, 'city_name' => 'Dhuburi']);
$cityDibrugarh = City::create(['state_id' => $state18->id, 'city_name' => 'Dibrugarh']);
$cityDispur = City::create(['state_id' => $state18->id, 'city_name' => 'Dispur']);
$cityGuwahati = City::create(['state_id' => $state18->id, 'city_name' => 'Guwahati']);
$cityJorhat = City::create(['state_id' => $state18->id, 'city_name' => 'Jorhat']);
$cityNagaon = City::create(['state_id' => $state18->id, 'city_name' => 'Nagaon']);
$citySivasagar = City::create(['state_id' => $state18->id, 'city_name' => 'Sivasagar']);
$citySilchar = City::create(['state_id' => $state18->id, 'city_name' => 'Silchar']);
$cityTezpur = City::create(['state_id' => $state18->id, 'city_name' => 'Tezpur']);
$cityTinsukia = City::create(['state_id' => $state18->id, 'city_name' => 'Tinsukia']);

$pincodeDhuburi = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityDhuburi->id, 'pincode' => '783301']);
$pincodeDibrugarh = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityDibrugarh->id, 'pincode' => '786001']);
$pincodeDispur = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityDispur->id, 'pincode' => '781006']);
$pincodeGuwahati = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityGuwahati->id, 'pincode' => '781001']);
$pincodeJorhat = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityJorhat->id, 'pincode' => '785001']);
$pincodeNagaon = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityNagaon->id, 'pincode' => '782001']);
$pincodeSivasagar = Pincode::create(['state_id' => $state18->id, 'city_id' => $citySivasagar->id, 'pincode' => '785640']);
$pincodeSilchar = Pincode::create(['state_id' => $state18->id, 'city_id' => $citySilchar->id, 'pincode' => '788001']);
$pincodeTezpur = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityTezpur->id, 'pincode' => '784001']);
$pincodeTinsukia = Pincode::create(['state_id' => $state18->id, 'city_id' => $cityTinsukia->id, 'pincode' => '786125']);

// WEST BENGAL State
$state19 = State::create([
    'country_id' => $country->id,
    'state_name' => 'WEST BENGAL',
    'state_code' => '19'
]);
$cityAlipore = City::create(['state_id' => $state19->id, 'city_name' => 'Alipore']);
$cityAlipurDuar = City::create(['state_id' => $state19->id, 'city_name' => 'Alipur Duar']);
$cityAsansol = City::create(['state_id' => $state19->id, 'city_name' => 'Asansol']);
$cityAshokenagarKalyangarh = City::create(['state_id' => $state19->id, 'city_name' => 'Ashokenagar Kalyangarh']);
$cityBaharampur = City::create(['state_id' => $state19->id, 'city_name' => 'Baharampur']);
$cityBally = City::create(['state_id' => $state19->id, 'city_name' => 'Bally']);
$cityBalurghat = City::create(['state_id' => $state19->id, 'city_name' => 'Balurghat']);
$cityBankura = City::create(['state_id' => $state19->id, 'city_name' => 'Bankura']);
$cityBaranagar = City::create(['state_id' => $state19->id, 'city_name' => 'Baranagar']);
$cityBarasat = City::create(['state_id' => $state19->id, 'city_name' => 'Barasat']);
$cityBarddhaman = City::create(['state_id' => $state19->id, 'city_name' => 'Barddhaman']);
$cityBarrackpore = City::create(['state_id' => $state19->id, 'city_name' => 'Barrackpore']);
$cityBasirhat = City::create(['state_id' => $state19->id, 'city_name' => 'Basirhat']);
$cityBaidyabati = City::create(['state_id' => $state19->id, 'city_name' => 'Baidyabati']);
$cityBansberia = City::create(['state_id' => $state19->id, 'city_name' => 'Bansberia']);
$cityBhadreswar = City::create(['state_id' => $state19->id, 'city_name' => 'Bhadreswar']);
$cityBhatpara = City::create(['state_id' => $state19->id, 'city_name' => 'Bhatpara']);
$cityBidhanNagar = City::create(['state_id' => $state19->id, 'city_name' => 'Bidhan Nagar']);
$cityBishnupur = City::create(['state_id' => $state19->id, 'city_name' => 'Bishnupur']);
$cityBongaon = City::create(['state_id' => $state19->id, 'city_name' => 'Bongaon']);
$cityBudgeBudge = City::create(['state_id' => $state19->id, 'city_name' => 'Budge Budge']);
$cityBurdwan = City::create(['state_id' => $state19->id, 'city_name' => 'Burdwan']);
$cityChandernagore = City::create(['state_id' => $state19->id, 'city_name' => 'Chandernagore']);
$cityDabgram = City::create(['state_id' => $state19->id, 'city_name' => 'Dabgram']);
$cityDarjeeling = City::create(['state_id' => $state19->id, 'city_name' => 'Darjeeling']);
$cityDiamondHarbour = City::create(['state_id' => $state19->id, 'city_name' => 'Diamond Harbour']);
$cityChampdani = City::create(['state_id' => $state19->id, 'city_name' => 'Champdani']);
$cityDumDum = City::create(['state_id' => $state19->id, 'city_name' => 'Dum Dum']);
$cityDurgapur = City::create(['state_id' => $state19->id, 'city_name' => 'Durgapur']);
$cityEnglishBazar = City::create(['state_id' => $state19->id, 'city_name' => 'English Bazar']);
$cityHaldia = City::create(['state_id' => $state19->id, 'city_name' => 'Haldia']);
$cityHalisahar = City::create(['state_id' => $state19->id, 'city_name' => 'Halisahar']);
$cityHaora = City::create(['state_id' => $state19->id, 'city_name' => 'Haora']);
$cityHowrah = City::create(['state_id' => $state19->id, 'city_name' => 'Howrah']);
$cityHugliChinsurah = City::create(['state_id' => $state19->id, 'city_name' => 'Hugli & Chinsurah']);
$cityIngrajBazar = City::create(['state_id' => $state19->id, 'city_name' => 'Ingraj Bazar']);
$cityJalpaiguri = City::create(['state_id' => $state19->id, 'city_name' => 'Jalpaiguri']);
$cityKalimpong = City::create(['state_id' => $state19->id, 'city_name' => 'Kalimpong']);
$cityKalyani = City::create(['state_id' => $state19->id, 'city_name' => 'Kalyani']);
$cityKamarhati = City::create(['state_id' => $state19->id, 'city_name' => 'Kamarhati']);
$cityKanchrapara = City::create(['state_id' => $state19->id, 'city_name' => 'Kanchrapara']);
$cityKharagpur = City::create(['state_id' => $state19->id, 'city_name' => 'Kharagpur']);
$cityKhardaha = City::create(['state_id' => $state19->id, 'city_name' => 'Khardaha']);
$cityKulti = City::create(['state_id' => $state19->id, 'city_name' => 'Kulti']);
$cityCoochBehar = City::create(['state_id' => $state19->id, 'city_name' => 'Cooch Behar']);
$cityKolkata = City::create(['state_id' => $state19->id, 'city_name' => 'Kolkata']);
$cityKrishnanagar = City::create(['state_id' => $state19->id, 'city_name' => 'Krishnanagar']);
$cityMadhyamgram = City::create(['state_id' => $state19->id, 'city_name' => 'Madhyamgram']);
$cityMaheshtala = City::create(['state_id' => $state19->id, 'city_name' => 'Maheshtala']);
$cityMalda = City::create(['state_id' => $state19->id, 'city_name' => 'Malda']);
$cityMedinipur = City::create(['state_id' => $state19->id, 'city_name' => 'Medinipur']);
$cityMidnapore = City::create(['state_id' => $state19->id, 'city_name' => 'Midnapore']);
$cityMurshidabad = City::create(['state_id' => $state19->id, 'city_name' => 'Murshidabad']);
$cityNabadwip = City::create(['state_id' => $state19->id, 'city_name' => 'Nabadwip']);
$cityNaihati = City::create(['state_id' => $state19->id, 'city_name' => 'Naihati']);
$cityNorthBarrackpur = City::create(['state_id' => $state19->id, 'city_name' => 'North Barrackpur']);
$cityNorthDumDum = City::create(['state_id' => $state19->id, 'city_name' => 'North Dum Dum']);
$cityPalashi = City::create(['state_id' => $state19->id, 'city_name' => 'Palashi']);
$cityPanihati = City::create(['state_id' => $state19->id, 'city_name' => 'Panihati']);
$cityPurulia = City::create(['state_id' => $state19->id, 'city_name' => 'Purulia']);
$cityRaiganj = City::create(['state_id' => $state19->id, 'city_name' => 'Raiganj']);
$cityRajarhatGopalpur = City::create(['state_id' => $state19->id, 'city_name' => 'Rajarhat Gopalpur']);
$cityRajpurSonarpur = City::create(['state_id' => $state19->id, 'city_name' => 'Rajpur Sonarpur']);
$cityRaniganj = City::create(['state_id' => $state19->id, 'city_name' => 'Raniganj']);
$cityRishra = City::create(['state_id' => $state19->id, 'city_name' => 'Rishra']);
$citySantipur = City::create(['state_id' => $state19->id, 'city_name' => 'Santipur']);
$citySerampore = City::create(['state_id' => $state19->id, 'city_name' => 'Serampore']);
$cityShantiniketan = City::create(['state_id' => $state19->id, 'city_name' => 'Shantiniketan']);
$cityShrirampur = City::create(['state_id' => $state19->id, 'city_name' => 'Shrirampur']);
$citySiliguri = City::create(['state_id' => $state19->id, 'city_name' => 'Siliguri']);
$citySiuri = City::create(['state_id' => $state19->id, 'city_name' => 'Siuri']);
$citySouthDumDum = City::create(['state_id' => $state19->id, 'city_name' => 'South Dum Dum']);
$cityTamluk = City::create(['state_id' => $state19->id, 'city_name' => 'Tamluk']);
$cityTitagarh = City::create(['state_id' => $state19->id, 'city_name' => 'Titagarh']);
$cityUluberia = City::create(['state_id' => $state19->id, 'city_name' => 'Uluberia']);
$cityUttarparaKotrung = City::create(['state_id' => $state19->id, 'city_name' => 'Uttarpara Kotrung']);

$pincodeAlipore = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityAlipore->id, 'pincode' => '700027']);
$pincodeAlipurDuar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityAlipurDuar->id, 'pincode' => '736122']);
$pincodeAsansol = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityAsansol->id, 'pincode' => '713301']);
$pincodeAshokenagarKalyangarh = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityAshokenagarKalyangarh->id, 'pincode' => '743222']);
$pincodeBaharampur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBaharampur->id, 'pincode' => '742101']);
$pincodeBally = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBally->id, 'pincode' => '711201']);
$pincodeBalurghat = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBalurghat->id, 'pincode' => '733101']);
$pincodeBankura = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBankura->id, 'pincode' => '722101']);
$pincodeBaranagar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBaranagar->id, 'pincode' => '700036']);
$pincodeBarasat = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBarasat->id, 'pincode' => '700124']);
$pincodeBarddhaman = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBarddhaman->id, 'pincode' => '713101']);
$pincodeBarrackpore = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBarrackpore->id, 'pincode' => '700120']);
$pincodeBasirhat = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBasirhat->id, 'pincode' => '743411']);
$pincodeBaidyabati = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBaidyabati->id, 'pincode' => '712222']);
$pincodeBansberia = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBansberia->id, 'pincode' => '712502']);
$pincodeBhadreswar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBhadreswar->id, 'pincode' => '712124']);
$pincodeBhatpara = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBhatpara->id, 'pincode' => '743123']);
$pincodeBidhanNagar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBidhanNagar->id, 'pincode' => '700064']);
$pincodeBishnupur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBishnupur->id, 'pincode' => '721101']);
$pincodeBongaon = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBongaon->id, 'pincode' => '743235']);
$pincodeBudgeBudge = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBudgeBudge->id, 'pincode' => '700137']);
$pincodeBurdwan = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityBurdwan->id, 'pincode' => '713101']);
$pincodeChandernagore = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityChandernagore->id, 'pincode' => '712136']);
$pincodeDabgram = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityDabgram->id, 'pincode' => '734015']);
$pincodeDarjeeling = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityDarjeeling->id, 'pincode' => '734101']);
$pincodeDiamondHarbour = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityDiamondHarbour->id, 'pincode' => '743331']);
$pincodeChampdani = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityChampdani->id, 'pincode' => '712702']);
$pincodeDumDum = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityDumDum->id, 'pincode' => '700028']);
$pincodeDurgapur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityDurgapur->id, 'pincode' => '713205']);
$pincodeEnglishBazar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityEnglishBazar->id, 'pincode' => '732101']);
$pincodeHaldia = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityHaldia->id, 'pincode' => '721657']);
$pincodeHalisahar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityHalisahar->id, 'pincode' => '743134']);
$pincodeHaora = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityHaora->id, 'pincode' => '711103']);
$pincodeHowrah = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityHowrah->id, 'pincode' => '711101']);
$pincodeHugliChinsurah = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityHugliChinsurah->id, 'pincode' => '712101']);
$pincodeIngrajBazar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityIngrajBazar->id, 'pincode' => '700126']);
$pincodeJalpaiguri = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityJalpaiguri->id, 'pincode' => '735101']);
$pincodeKalimpong = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKalimpong->id, 'pincode' => '734301']);
$pincodeKalyani = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKalyani->id, 'pincode' => '741235']);
$pincodeKamarhati = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKamarhati->id, 'pincode' => '700058']);
$pincodeKanchrapara = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKanchrapara->id, 'pincode' => '743145']);
$pincodeKharagpur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKharagpur->id, 'pincode' => '721301']);
$pincodeKhardaha = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKhardaha->id, 'pincode' => '700116']);
$pincodeKulti = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKulti->id, 'pincode' => '713343']);
$pincodeCoochBehar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityCoochBehar->id, 'pincode' => '736101']);
$pincodeKolkata = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKolkata->id, 'pincode' => '700001']);
$pincodeKrishnanagar = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityKrishnanagar->id, 'pincode' => '741101']);
$pincodeMadhyamgram = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityMadhyamgram->id, 'pincode' => '700129']);
$pincodeMaheshtala = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityMaheshtala->id, 'pincode' => '700141']);
$pincodeMalda = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityMalda->id, 'pincode' => '732101']);
$pincodeMedinipur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityMedinipur->id, 'pincode' => '721101']);
$pincodeMidnapore = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityMidnapore->id, 'pincode' => '721101']);
$pincodeMurshidabad = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityMurshidabad->id, 'pincode' => '742101']);
$pincodeNabadwip = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityNabadwip->id, 'pincode' => '741302']);
$pincodeNaihati = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityNaihati->id, 'pincode' => '743165']);
$pincodeNorthBarrackpur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityNorthBarrackpur->id, 'pincode' => '700120']);
$pincodeNorthDumDum = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityNorthDumDum->id, 'pincode' => '700074']);
$pincodePalashi = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityPalashi->id, 'pincode' => '741221']);
$pincodePanihati = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityPanihati->id, 'pincode' => '700114']);
$pincodePurulia = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityPurulia->id, 'pincode' => '723101']);
$pincodeRaiganj = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityRaiganj->id, 'pincode' => '733134']);
$pincodeRajarhatGopalpur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityRajarhatGopalpur->id, 'pincode' => '700135']);
$pincodeRajpurSonarpur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityRajpurSonarpur->id, 'pincode' => '700149']);
$pincodeRaniganj = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityRaniganj->id, 'pincode' => '713347']);
$pincodeRishra = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityRishra->id, 'pincode' => '712248']);
$pincodeSantipur = Pincode::create(['state_id' => $state19->id, 'city_id' => $citySantipur->id, 'pincode' => '741404']);
$pincodeSerampore = Pincode::create(['state_id' => $state19->id, 'city_id' => $citySerampore->id, 'pincode' => '712201']);
$pincodeShantiniketan = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityShantiniketan->id, 'pincode' => '731235']);
$pincodeShrirampur = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityShrirampur->id, 'pincode' => '712204']);
$pincodeSiliguri = Pincode::create(['state_id' => $state19->id, 'city_id' => $citySiliguri->id, 'pincode' => '734001']);
$pincodeSiuri = Pincode::create(['state_id' => $state19->id, 'city_id' => $citySiuri->id, 'pincode' => '731101']);
$pincodeSouthDumDum = Pincode::create(['state_id' => $state19->id, 'city_id' => $citySouthDumDum->id, 'pincode' => '700074']);
$pincodeTamluk = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityTamluk->id, 'pincode' => '721636']);
$pincodeTitagarh = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityTitagarh->id, 'pincode' => '700119']);
$pincodeUluberia = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityUluberia->id, 'pincode' => '711316']);
$pincodeUttarparaKotrung = Pincode::create(['state_id' => $state19->id, 'city_id' => $cityUttarparaKotrung->id, 'pincode' => '712258']);

// JHARKHAND State
$state20 = State::create([
    'country_id' => $country->id,
    'state_name' => 'JHARKHAND',
    'state_code' => '20'
]);
$cityBokaro = City::create(['state_id' => $state20->id, 'city_name' => 'Bokaro']);
$cityChaibasa = City::create(['state_id' => $state20->id, 'city_name' => 'Chaibasa']);
$cityDeoghar = City::create(['state_id' => $state20->id, 'city_name' => 'Deoghar']);
$cityDhanbad = City::create(['state_id' => $state20->id, 'city_name' => 'Dhanbad']);
$cityDumka = City::create(['state_id' => $state20->id, 'city_name' => 'Dumka']);
$cityGiridih = City::create(['state_id' => $state20->id, 'city_name' => 'Giridih']);
$cityHazaribag = City::create(['state_id' => $state20->id, 'city_name' => 'Hazaribag']);
$cityJamshedpur = City::create(['state_id' => $state20->id, 'city_name' => 'Jamshedpur']);
$cityJharia = City::create(['state_id' => $state20->id, 'city_name' => 'Jharia']);
$cityRajmahal = City::create(['state_id' => $state20->id, 'city_name' => 'Rajmahal']);
$cityRanchi = City::create(['state_id' => $state20->id, 'city_name' => 'Ranchi']);
$citySaraikela = City::create(['state_id' => $state20->id, 'city_name' => 'Saraikela']);

$pincodeBokaro = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityBokaro->id, 'pincode' => '827001']);
$pincodeChaibasa = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityChaibasa->id, 'pincode' => '833201']);
$pincodeDeoghar = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityDeoghar->id, 'pincode' => '814112']);
$pincodeDhanbad = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityDhanbad->id, 'pincode' => '826001']);
$pincodeDumka = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityDumka->id, 'pincode' => '814101']);
$pincodeGiridih = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityGiridih->id, 'pincode' => '815301']);
$pincodeHazaribag = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityHazaribag->id, 'pincode' => '825301']);
$pincodeJamshedpur = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityJamshedpur->id, 'pincode' => '831001']);
$pincodeJharia = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityJharia->id, 'pincode' => '828111']);
$pincodeRajmahal = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityRajmahal->id, 'pincode' => '816119']);
$pincodeRanchi = Pincode::create(['state_id' => $state20->id, 'city_id' => $cityRanchi->id, 'pincode' => '834001']);
$pincodeSaraikela = Pincode::create(['state_id' => $state20->id, 'city_id' => $citySaraikela->id, 'pincode' => '833221']);

// ODISHA State
$state21 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ODISHA',
    'state_code' => '21'
]);
$cityBalangir = City::create(['state_id' => $state21->id, 'city_name' => 'Balangir']);
$cityBaleshwar = City::create(['state_id' => $state21->id, 'city_name' => 'Baleshwar']);
$cityBaripada = City::create(['state_id' => $state21->id, 'city_name' => 'Baripada']);
$cityBhubaneshwar = City::create(['state_id' => $state21->id, 'city_name' => 'Bhubaneshwar']);
$cityBrahmapur = City::create(['state_id' => $state21->id, 'city_name' => 'Brahmapur']);
$cityCuttack = City::create(['state_id' => $state21->id, 'city_name' => 'Cuttack']);
$cityDhenkanal = City::create(['state_id' => $state21->id, 'city_name' => 'Dhenkanal']);
$cityKendujhar = City::create(['state_id' => $state21->id, 'city_name' => 'Kendujhar']);
$cityKonark = City::create(['state_id' => $state21->id, 'city_name' => 'Konark']);
$cityKoraput = City::create(['state_id' => $state21->id, 'city_name' => 'Koraput']);
$cityParadip = City::create(['state_id' => $state21->id, 'city_name' => 'Paradip']);
$cityPhulabani = City::create(['state_id' => $state21->id, 'city_name' => 'Phulabani']);
$cityPuri = City::create(['state_id' => $state21->id, 'city_name' => 'Puri']);
$citySambalpur = City::create(['state_id' => $state21->id, 'city_name' => 'Sambalpur']);
$cityUdayagiri = City::create(['state_id' => $state21->id, 'city_name' => 'Udayagiri']);

$pincodeBalangir = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityBalangir->id, 'pincode' => '767001']);
$pincodeBaleshwar = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityBaleshwar->id, 'pincode' => '756001']);
$pincodeBaripada = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityBaripada->id, 'pincode' => '757001']);
$pincodeBhubaneshwar = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityBhubaneshwar->id, 'pincode' => '751001']);
$pincodeBrahmapur = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityBrahmapur->id, 'pincode' => '760001']);
$pincodeCuttack = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityCuttack->id, 'pincode' => '753001']);
$pincodeDhenkanal = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityDhenkanal->id, 'pincode' => '759001']);
$pincodeKendujhar = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityKendujhar->id, 'pincode' => '758001']);
$pincodeKonark = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityKonark->id, 'pincode' => '752111']);
$pincodeKoraput = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityKoraput->id, 'pincode' => '764001']);
$pincodeParadip = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityParadip->id, 'pincode' => '754142']);
$pincodePhulabani = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityPhulabani->id, 'pincode' => '762001']);
$pincodePuri = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityPuri->id, 'pincode' => '752001']);
$pincodeSambalpur = Pincode::create(['state_id' => $state21->id, 'city_id' => $citySambalpur->id, 'pincode' => '768001']);
$pincodeUdayagiri = Pincode::create(['state_id' => $state21->id, 'city_id' => $cityUdayagiri->id, 'pincode' => '752065']);


// CHHATTISGARH State
$state22 = State::create([
    'country_id' => $country->id,
    'state_name' => 'CHHATTISGARH',
    'state_code' => '22'
]);
$cityAmbikapur = City::create(['state_id' => $state22->id, 'city_name' => 'Ambikapur']);
$cityBhilai = City::create(['state_id' => $state22->id, 'city_name' => 'Bhilai']);
$cityBilaspur = City::create(['state_id' => $state22->id, 'city_name' => 'Bilaspur']); // Already exists, you can remove this line if not needed
$cityDhamtari = City::create(['state_id' => $state22->id, 'city_name' => 'Dhamtari']);
$cityDurg = City::create(['state_id' => $state22->id, 'city_name' => 'Durg']);
$cityJagdalpur = City::create(['state_id' => $state22->id, 'city_name' => 'Jagdalpur']);
$cityRaipur = City::create(['state_id' => $state22->id, 'city_name' => 'Raipur']); // Already exists, you can remove this line if not needed
$cityRajnandgaon = City::create(['state_id' => $state22->id, 'city_name' => 'Rajnandgaon']);

$pincodeAmbikapur = Pincode::create(['state_id' => $state22->id, 'city_id' => $cityAmbikapur->id, 'pincode' => '497001']);
$pincodeBhilai = Pincode::create(['state_id' => $state22->id, 'city_id' => $cityBhilai->id, 'pincode' => '490006']);
$pincodeDhamtari = Pincode::create(['state_id' => $state22->id, 'city_id' => $cityDhamtari->id, 'pincode' => '493773']);
$pincodeDurg = Pincode::create(['state_id' => $state22->id, 'city_id' => $cityDurg->id, 'pincode' => '491001']);
$pincodeJagdalpur = Pincode::create(['state_id' => $state22->id, 'city_id' => $cityJagdalpur->id, 'pincode' => '494001']);
$pincodeRajnandgaon = Pincode::create(['state_id' => $state22->id, 'city_id' => $cityRajnandgaon->id, 'pincode' => '491441']);


// MADHYA PRADESH State
$state23 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MADHYA PRADESH',
    'state_code' => '23'
]);
$cityBalaghat = City::create(['state_id' => $state23->id, 'city_name' => 'Balaghat']);
$cityBarwani = City::create(['state_id' => $state23->id, 'city_name' => 'Barwani']);
$cityBetul = City::create(['state_id' => $state23->id, 'city_name' => 'Betul']);
$cityBharhut = City::create(['state_id' => $state23->id, 'city_name' => 'Bharhut']);
$cityBhind = City::create(['state_id' => $state23->id, 'city_name' => 'Bhind']);
$cityBhojpur = City::create(['state_id' => $state23->id, 'city_name' => 'Bhojpur']);
$cityBhopal = City::create(['state_id' => $state23->id, 'city_name' => 'Bhopal']);
$cityBurhanpur = City::create(['state_id' => $state23->id, 'city_name' => 'Burhanpur']);
$cityChhatarpur = City::create(['state_id' => $state23->id, 'city_name' => 'Chhatarpur']);
$cityChhindwara = City::create(['state_id' => $state23->id, 'city_name' => 'Chhindwara']);
$cityDamoh = City::create(['state_id' => $state23->id, 'city_name' => 'Damoh']);
$cityDatia = City::create(['state_id' => $state23->id, 'city_name' => 'Datia']);
$cityDewas = City::create(['state_id' => $state23->id, 'city_name' => 'Dewas']);
$cityDhar = City::create(['state_id' => $state23->id, 'city_name' => 'Dhar']);
$cityDrAmbedkarNagar = City::create(['state_id' => $state23->id, 'city_name' => 'Dr. Ambedkar Nagar (Mhow)']);
$cityGuna = City::create(['state_id' => $state23->id, 'city_name' => 'Guna']);
$cityGwalior = City::create(['state_id' => $state23->id, 'city_name' => 'Gwalior']);
$cityHoshangabad = City::create(['state_id' => $state23->id, 'city_name' => 'Hoshangabad']);
$cityIndore = City::create(['state_id' => $state23->id, 'city_name' => 'Indore']);
$cityItarsi = City::create(['state_id' => $state23->id, 'city_name' => 'Itarsi']);
$cityJabalpur = City::create(['state_id' => $state23->id, 'city_name' => 'Jabalpur']);
$cityJhabua = City::create(['state_id' => $state23->id, 'city_name' => 'Jhabua']);
$cityKhajuraho = City::create(['state_id' => $state23->id, 'city_name' => 'Khajuraho']);
$cityKhandwa = City::create(['state_id' => $state23->id, 'city_name' => 'Khandwa']);
$cityKhargone = City::create(['state_id' => $state23->id, 'city_name' => 'Khargone']);
$cityMaheshwar = City::create(['state_id' => $state23->id, 'city_name' => 'Maheshwar']);
$cityMandla = City::create(['state_id' => $state23->id, 'city_name' => 'Mandla']);
$cityMandsaur = City::create(['state_id' => $state23->id, 'city_name' => 'Mandsaur']);
$cityMorena = City::create(['state_id' => $state23->id, 'city_name' => 'Morena']);
$cityMurwara = City::create(['state_id' => $state23->id, 'city_name' => 'Murwara']);
$cityNarsimhapur = City::create(['state_id' => $state23->id, 'city_name' => 'Narsimhapur']);
$cityNarsinghgarh = City::create(['state_id' => $state23->id, 'city_name' => 'Narsinghgarh']);
$cityNarwar = City::create(['state_id' => $state23->id, 'city_name' => 'Narwar']);
$cityNeemuch = City::create(['state_id' => $state23->id, 'city_name' => 'Neemuch']);
$cityNowgong = City::create(['state_id' => $state23->id, 'city_name' => 'Nowgong']);
$cityOrchha = City::create(['state_id' => $state23->id, 'city_name' => 'Orchha']);
$cityPanna = City::create(['state_id' => $state23->id, 'city_name' => 'Panna']);
$cityRaisen = City::create(['state_id' => $state23->id, 'city_name' => 'Raisen']);
$cityRajgarh = City::create(['state_id' => $state23->id, 'city_name' => 'Rajgarh']);
$cityRatlam = City::create(['state_id' => $state23->id, 'city_name' => 'Ratlam']);
$cityRewa = City::create(['state_id' => $state23->id, 'city_name' => 'Rewa']);
$citySagar = City::create(['state_id' => $state23->id, 'city_name' => 'Sagar']);
$citySarangpur = City::create(['state_id' => $state23->id, 'city_name' => 'Sarangpur']);
$citySatna = City::create(['state_id' => $state23->id, 'city_name' => 'Satna']);
$citySehore = City::create(['state_id' => $state23->id, 'city_name' => 'Sehore']);
$citySeoni = City::create(['state_id' => $state23->id, 'city_name' => 'Seoni']);
$cityShahdol = City::create(['state_id' => $state23->id, 'city_name' => 'Shahdol']);
$cityShajapur = City::create(['state_id' => $state23->id, 'city_name' => 'Shajapur']);
$citySheopur = City::create(['state_id' => $state23->id, 'city_name' => 'Sheopur']);
$cityShivpuri = City::create(['state_id' => $state23->id, 'city_name' => 'Shivpuri']);
$cityUjjain = City::create(['state_id' => $state23->id, 'city_name' => 'Ujjain']);
$cityVidisha = City::create(['state_id' => $state23->id, 'city_name' => 'Vidisha']);

$pincodeBalaghat = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBalaghat->id, 'pincode' => '481001']);
$pincodeBarwani = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBarwani->id, 'pincode' => '451551']);
$pincodeBetul = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBetul->id, 'pincode' => '460001']);
$pincodeBharhut = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBharhut->id, 'pincode' => '486889']);
$pincodeBhind = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBhind->id, 'pincode' => '477001']);
$pincodeBhojpur = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBhojpur->id, 'pincode' => '464551']);
$pincodeBhopal = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBhopal->id, 'pincode' => '462001']);
$pincodeBurhanpur = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityBurhanpur->id, 'pincode' => '450331']);
$pincodeChhatarpur = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityChhatarpur->id, 'pincode' => '471001']);
$pincodeChhindwara = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityChhindwara->id, 'pincode' => '480001']);
$pincodeDamoh = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityDamoh->id, 'pincode' => '470661']);
$pincodeDatia = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityDatia->id, 'pincode' => '475661']);
$pincodeDewas = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityDewas->id, 'pincode' => '455001']);
$pincodeDhar = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityDhar->id, 'pincode' => '454001']);
$pincodeDrAmbedkarNagar = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityDrAmbedkarNagar->id, 'pincode' => '453441']);
$pincodeGuna = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityGuna->id, 'pincode' => '473001']);
$pincodeGwalior = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityGwalior->id, 'pincode' => '474001']);
$pincodeHoshangabad = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityHoshangabad->id, 'pincode' => '461001']);
$pincodeIndore = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityIndore->id, 'pincode' => '452001']);
$pincodeItarsi = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityItarsi->id, 'pincode' => '461111']);
$pincodeJabalpur = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityJabalpur->id, 'pincode' => '482001']);
$pincodeJhabua = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityJhabua->id, 'pincode' => '457661']);
$pincodeKhajuraho = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityKhajuraho->id, 'pincode' => '471606']);
$pincodeKhandwa = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityKhandwa->id, 'pincode' => '450001']);
$pincodeKhargone = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityKhargone->id, 'pincode' => '451001']);
$pincodeMaheshwar = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityMaheshwar->id, 'pincode' => '451224']);
$pincodeMandla = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityMandla->id, 'pincode' => '481661']);
$pincodeMandsaur = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityMandsaur->id, 'pincode' => '458001']);
$pincodeMorena = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityMorena->id, 'pincode' => '476001']);
$pincodeMurwara = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityMurwara->id, 'pincode' => '482005']);
$pincodeNarsimhapur = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityNarsimhapur->id, 'pincode' => '487661']);
$pincodeNarsinghgarh = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityNarsinghgarh->id, 'pincode' => '465669']);
$pincodeNarwar = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityNarwar->id, 'pincode' => '470101']);
$pincodeNeemuch = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityNeemuch->id, 'pincode' => '458441']);
$pincodeNowgong = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityNowgong->id, 'pincode' => '464551']);
$pincodeOrchha = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityOrchha->id, 'pincode' => '472246']);
$pincodePanna = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityPanna->id, 'pincode' => '488001']);
$pincodeRaisen = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityRaisen->id, 'pincode' => '464551']);
$pincodeRajgarh = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityRajgarh->id, 'pincode' => '465661']);
$pincodeRatlam = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityRatlam->id, 'pincode' => '457001']);
$pincodeRewa = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityRewa->id, 'pincode' => '486001']);
$pincodeSagar = Pincode::create(['state_id' => $state23->id, 'city_id' => $citySagar->id, 'pincode' => '470002']);
$pincodeSarangpur = Pincode::create(['state_id' => $state23->id, 'city_id' => $citySarangpur->id, 'pincode' => '465697']);
$pincodeSatna = Pincode::create(['state_id' => $state23->id, 'city_id' => $citySatna->id, 'pincode' => '485001']);
$pincodeSehore = Pincode::create(['state_id' => $state23->id, 'city_id' => $citySehore->id, 'pincode' => '466001']);
$pincodeSeoni = Pincode::create(['state_id' => $state23->id, 'city_id' => $citySeoni->id, 'pincode' => '480661']);
$pincodeShahdol = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityShahdol->id, 'pincode' => '484001']);
$pincodeShajapur = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityShajapur->id, 'pincode' => '465001']);
$pincodeSheopur = Pincode::create(['state_id' => $state23->id, 'city_id' => $citySheopur->id, 'pincode' => '476337']);
$pincodeShivpuri = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityShivpuri->id, 'pincode' => '473551']);
$pincodeUjjain = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityUjjain->id, 'pincode' => '456001']);
$pincodeVidisha = Pincode::create(['state_id' => $state23->id, 'city_id' => $cityVidisha->id, 'pincode' => '464001']);

// GUJARAT State
$state24 = State::create([
    'country_id' => $country->id,
    'state_name' => 'GUJARAT',
    'state_code' => '24'
]);
$cityAhmadabad = City::create(['state_id' => $state24->id, 'city_name' => 'Ahmedabad']);
$cityAmreli = City::create(['state_id' => $state24->id, 'city_name' => 'Amreli']);
$cityBharuch = City::create(['state_id' => $state24->id, 'city_name' => 'Bharuch']);
$cityBhavnagar = City::create(['state_id' => $state24->id, 'city_name' => 'Bhavnagar']);
$cityBhuj = City::create(['state_id' => $state24->id, 'city_name' => 'Bhuj']);
$cityDwarka = City::create(['state_id' => $state24->id, 'city_name' => 'Dwarka']);
$cityGandhinagar = City::create(['state_id' => $state24->id, 'city_name' => 'Gandhinagar']);
$cityGodhra = City::create(['state_id' => $state24->id, 'city_name' => 'Godhra']);
$cityJamnagar = City::create(['state_id' => $state24->id, 'city_name' => 'Jamnagar']);
$cityJunagadh = City::create(['state_id' => $state24->id, 'city_name' => 'Junagadh']);
$cityKandla = City::create(['state_id' => $state24->id, 'city_name' => 'Kandla']);
$cityKhambhat = City::create(['state_id' => $state24->id, 'city_name' => 'Khambhat']);
$cityKheda = City::create(['state_id' => $state24->id, 'city_name' => 'Kheda']);
$cityMahesana = City::create(['state_id' => $state24->id, 'city_name' => 'Mahesana']);
$cityMorbi = City::create(['state_id' => $state24->id, 'city_name' => 'Morbi']);
$cityNadiad = City::create(['state_id' => $state24->id, 'city_name' => 'Nadiad']);
$cityNavsari = City::create(['state_id' => $state24->id, 'city_name' => 'Navsari']);
$cityOkha = City::create(['state_id' => $state24->id, 'city_name' => 'Okha']);
$cityPalanpur = City::create(['state_id' => $state24->id, 'city_name' => 'Palanpur']);
$cityPatan = City::create(['state_id' => $state24->id, 'city_name' => 'Patan']);
$cityPorbandar = City::create(['state_id' => $state24->id, 'city_name' => 'Porbandar']);
$cityRajkot = City::create(['state_id' => $state24->id, 'city_name' => 'Rajkot']);
$citySurendranagar = City::create(['state_id' => $state24->id, 'city_name' => 'Surendranagar']);
$cityValsad = City::create(['state_id' => $state24->id, 'city_name' => 'Valsad']);
$cityVeraval = City::create(['state_id' => $state24->id, 'city_name' => 'Veraval']);

$pincodeAhmedabad = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityAhmadabad->id, 'pincode' => '380001']);
$pincodeAmreli = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityAmreli->id, 'pincode' => '365601']);
$pincodeBharuch = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityBharuch->id, 'pincode' => '392001']);
$pincodeBhavnagar = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityBhavnagar->id, 'pincode' => '364001']);
$pincodeBhuj = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityBhuj->id, 'pincode' => '370001']);
$pincodeDwarka = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityDwarka->id, 'pincode' => '361335']);
$pincodeGandhinagar = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityGandhinagar->id, 'pincode' => '382010']);
$pincodeGodhra = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityGodhra->id, 'pincode' => '389001']);
$pincodeJamnagar = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityJamnagar->id, 'pincode' => '361001']);
$pincodeJunagadh = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityJunagadh->id, 'pincode' => '362001']);
$pincodeKandla = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityKandla->id, 'pincode' => '370230']);
$pincodeKhambhat = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityKhambhat->id, 'pincode' => '388620']);
$pincodeKheda = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityKheda->id, 'pincode' => '387411']);
$pincodeMahesana = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityMahesana->id, 'pincode' => '384001']);
$pincodeMorbi = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityMorbi->id, 'pincode' => '363641']);
$pincodeNadiad = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityNadiad->id, 'pincode' => '387001']);
$pincodeNavsari = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityNavsari->id, 'pincode' => '396445']);
$pincodeOkha = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityOkha->id, 'pincode' => '361350']);
$pincodePalanpur = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityPalanpur->id, 'pincode' => '385001']);
$pincodePatan = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityPatan->id, 'pincode' => '384265']);
$pincodePorbandar = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityPorbandar->id, 'pincode' => '360575']);
$pincodeRajkot = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityRajkot->id, 'pincode' => '360001']);
$pincodeSurendranagar = Pincode::create(['state_id' => $state24->id, 'city_id' => $citySurendranagar->id, 'pincode' => '363001']);
$pincodeValsad = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityValsad->id, 'pincode' => '396001']);
$pincodeVeraval = Pincode::create(['state_id' => $state24->id, 'city_id' => $cityVeraval->id, 'pincode' => '362265']);

// DADAR AND NAGAR HAVELI & DAMAN AND DIU State
$state26 = State::create([
    'country_id' => $country->id,
    'state_name' => 'DADAR AND NAGAR HAVELI & DAMAN AND DIU',
    'state_code' => '26'
]);
$city = City::create(['state_id' => $state26->id, 'city_name' => 'DAMAN']);
$city = City::create(['state_id' => $state26->id, 'city_name' => 'DIU']);
$city = City::create(['state_id' => $state26->id, 'city_name' => 'SILVASSA']);
// Add cities associated with DADAR AND NAGAR HAVELI & DAMAN AND DIU state

// MAHARASHTRA State
$state27 = State::create([
    'country_id' => $country->id,
    'state_name' => 'MAHARASHTRA',
    'state_code' => '27'
]);
$cityAhmadnagar = City::create(['state_id' => $state27->id, 'city_name' => 'Ahmadnagar']);
$cityAkola = City::create(['state_id' => $state27->id, 'city_name' => 'Akola']);
$cityAmravati = City::create(['state_id' => $state27->id, 'city_name' => 'Amravati']);
$cityAurangabad = City::create(['state_id' => $state27->id, 'city_name' => 'Aurangabad']);
$cityBhandara = City::create(['state_id' => $state27->id, 'city_name' => 'Bhandara']);
$cityBhusawal = City::create(['state_id' => $state27->id, 'city_name' => 'Bhusawal']);
$cityBid = City::create(['state_id' => $state27->id, 'city_name' => 'Bid']);
$cityBuldhana = City::create(['state_id' => $state27->id, 'city_name' => 'Buldhana']);
$cityChandrapur = City::create(['state_id' => $state27->id, 'city_name' => 'Chandrapur']);
$cityDaulatabad = City::create(['state_id' => $state27->id, 'city_name' => 'Daulatabad']);
$cityDhule = City::create(['state_id' => $state27->id, 'city_name' => 'Dhule']);
$cityJalgaon = City::create(['state_id' => $state27->id, 'city_name' => 'Jalgaon']);
$cityKalyan = City::create(['state_id' => $state27->id, 'city_name' => 'Kalyan']);
$cityKarli = City::create(['state_id' => $state27->id, 'city_name' => 'Karli']);
$cityKolhapur = City::create(['state_id' => $state27->id, 'city_name' => 'Kolhapur']);
$cityMahabaleshwar = City::create(['state_id' => $state27->id, 'city_name' => 'Mahabaleshwar']);
$cityMalegaon = City::create(['state_id' => $state27->id, 'city_name' => 'Malegaon']);
$cityMatheran = City::create(['state_id' => $state27->id, 'city_name' => 'Matheran']);
$cityMumbai = City::create(['state_id' => $state27->id, 'city_name' => 'Mumbai']);
$cityNagpur = City::create(['state_id' => $state27->id, 'city_name' => 'Nagpur']);
$cityNanded = City::create(['state_id' => $state27->id, 'city_name' => 'Nanded']);
$cityNashik = City::create(['state_id' => $state27->id, 'city_name' => 'Nashik']);
$cityOsmanabad = City::create(['state_id' => $state27->id, 'city_name' => 'Osmanabad']);
$cityPandharpur = City::create(['state_id' => $state27->id, 'city_name' => 'Pandharpur']);
$cityParbhani = City::create(['state_id' => $state27->id, 'city_name' => 'Parbhani']);
$cityPune = City::create(['state_id' => $state27->id, 'city_name' => 'Pune']);
$cityRatnagiri = City::create(['state_id' => $state27->id, 'city_name' => 'Ratnagiri']);
$citySangli = City::create(['state_id' => $state27->id, 'city_name' => 'Sangli']);
$citySatara = City::create(['state_id' => $state27->id, 'city_name' => 'Satara']);
$citySevagram = City::create(['state_id' => $state27->id, 'city_name' => 'Sevagram']);
$citySolapur = City::create(['state_id' => $state27->id, 'city_name' => 'Solapur']);
$cityThane = City::create(['state_id' => $state27->id, 'city_name' => 'Thane']);
$cityUlhasnagar = City::create(['state_id' => $state27->id, 'city_name' => 'Ulhasnagar']);
$cityVasaiVirar = City::create(['state_id' => $state27->id, 'city_name' => 'Vasai-Virar']);
$cityWardha = City::create(['state_id' => $state27->id, 'city_name' => 'Wardha']);
$cityYavatmal = City::create(['state_id' => $state27->id, 'city_name' => 'Yavatmal']);


$pincodeAhmadnagar = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityAhmadnagar->id, 'pincode' => '414001']);
$pincodeAkola = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityAkola->id, 'pincode' => '444001']);
$pincodeAmravati = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityAmravati->id, 'pincode' => '444601']);
$pincodeAurangabad = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityAurangabad->id, 'pincode' => '431001']);
$pincodeBhandara = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityBhandara->id, 'pincode' => '441904']);
$pincodeBhusawal = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityBhusawal->id, 'pincode' => '425201']);
$pincodeBid = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityBid->id, 'pincode' => '431122']);
$pincodeBuldhana = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityBuldhana->id, 'pincode' => '443001']);
$pincodeChandrapur = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityChandrapur->id, 'pincode' => '442401']);
$pincodeDaulatabad = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityDaulatabad->id, 'pincode' => '431002']);
$pincodeDhule = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityDhule->id, 'pincode' => '424001']);
$pincodeJalgaon = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityJalgaon->id, 'pincode' => '425001']);
$pincodeKalyan = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityKalyan->id, 'pincode' => '421301']);
$pincodeKarli = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityKarli->id, 'pincode' => '416212']);
$pincodeKolhapur = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityKolhapur->id, 'pincode' => '416001']);
$pincodeMahabaleshwar = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityMahabaleshwar->id, 'pincode' => '412806']);
$pincodeMalegaon = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityMalegaon->id, 'pincode' => '423203']);
$pincodeMatheran = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityMatheran->id, 'pincode' => '410102']);
$pincodeMumbai = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityMumbai->id, 'pincode' => '400001']);
$pincodeNagpur = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityNagpur->id, 'pincode' => '440001']);
$pincodeNanded = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityNanded->id, 'pincode' => '431601']);
$pincodeNashik = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityNashik->id, 'pincode' => '422001']);
$pincodeOsmanabad = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityOsmanabad->id, 'pincode' => '413501']);
$pincodePandharpur = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityPandharpur->id, 'pincode' => '413304']);
$pincodeParbhani = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityParbhani->id, 'pincode' => '431401']);
$pincodePune = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityPune->id, 'pincode' => '411001']);
$pincodeRatnagiri = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityRatnagiri->id, 'pincode' => '415612']);
$pincodeSangli = Pincode::create(['state_id' => $state27->id, 'city_id' => $citySangli->id, 'pincode' => '416416']);
$pincodeSatara = Pincode::create(['state_id' => $state27->id, 'city_id' => $citySatara->id, 'pincode' => '415001']);
$pincodeSevagram = Pincode::create(['state_id' => $state27->id, 'city_id' => $citySevagram->id, 'pincode' => '442102']);
$pincodeSolapur = Pincode::create(['state_id' => $state27->id, 'city_id' => $citySolapur->id, 'pincode' => '413001']);
$pincodeThane = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityThane->id, 'pincode' => '400601']);
$pincodeUlhasnagar = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityUlhasnagar->id, 'pincode' => '421001']);
$pincodeVasaiVirar = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityVasaiVirar->id, 'pincode' => '401202']);
$pincodeWardha = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityWardha->id, 'pincode' => '442001']);
$pincodeYavatmal = Pincode::create(['state_id' => $state27->id, 'city_id' => $cityYavatmal->id, 'pincode' => '445001']);


// KARNATAKA State
$state29 = State::create([
    'country_id' => $country->id,
    'state_name' => 'KARNATAKA',
    'state_code' => '29'
]);
$cityBadami = City::create(['state_id' => $state29->id, 'city_name' => 'Badami']);
$pincodeBadami1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityBadami->id, 'pincode' => '587201']);

$cityBallari = City::create(['state_id' => $state29->id, 'city_name' => 'Ballari']);
$pincodeBallari1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityBallari->id, 'pincode' => '583101']);

$cityBengaluru = City::create(['state_id' => $state29->id, 'city_name' => 'Bengaluru']);
$pincodeBengaluru1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityBengaluru->id, 'pincode' => '560001']);

$cityBelagavi = City::create(['state_id' => $state29->id, 'city_name' => 'Belagavi']);
$pincodeBelagavi1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityBelagavi->id, 'pincode' => '590001']);

$cityBhadravati = City::create(['state_id' => $state29->id, 'city_name' => 'Bhadravati']);
$pincodeBhadravati1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityBhadravati->id, 'pincode' => '577301']);

$cityBidar = City::create(['state_id' => $state29->id, 'city_name' => 'Bidar']);
$pincodeBidar1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityBidar->id, 'pincode' => '585401']);

$cityChikkamagaluru = City::create(['state_id' => $state29->id, 'city_name' => 'Chikkamagaluru']);
$pincodeChikkamagaluru1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityChikkamagaluru->id, 'pincode' => '577101']);

$cityChitradurga = City::create(['state_id' => $state29->id, 'city_name' => 'Chitradurga']);
$pincodeChitradurga1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityChitradurga->id, 'pincode' => '577501']);

$cityDavangere = City::create(['state_id' => $state29->id, 'city_name' => 'Davangere']);
$pincodeDavangere1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityDavangere->id, 'pincode' => '577001']);

$cityHalebid = City::create(['state_id' => $state29->id, 'city_name' => 'Halebid']);
$pincodeHalebid1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityHalebid->id, 'pincode' => '573121']);

$cityHassan = City::create(['state_id' => $state29->id, 'city_name' => 'Hassan']);
$pincodeHassan1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityHassan->id, 'pincode' => '573201']);

$cityHubballiDharwad = City::create(['state_id' => $state29->id, 'city_name' => 'Hubballi-Dharwad']);
$pincodeHubballiDharwad1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityHubballiDharwad->id, 'pincode' => '580001']);

$cityKalaburagi = City::create(['state_id' => $state29->id, 'city_name' => 'Kalaburagi']);
$pincodeKalaburagi1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityKalaburagi->id, 'pincode' => '585101']);

$cityKolar = City::create(['state_id' => $state29->id, 'city_name' => 'Kolar']);
$pincodeKolar1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityKolar->id, 'pincode' => '563101']);

$cityMadikeri = City::create(['state_id' => $state29->id, 'city_name' => 'Madikeri']);
$pincodeMadikeri1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityMadikeri->id, 'pincode' => '571201']);

$cityMandya = City::create(['state_id' => $state29->id, 'city_name' => 'Mandya']);
$pincodeMandya1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityMandya->id, 'pincode' => '571401']);

$cityMangaluru = City::create(['state_id' => $state29->id, 'city_name' => 'Mangaluru']);
$pincodeMangaluru1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityMangaluru->id, 'pincode' => '575001']);

$cityRaichur = City::create(['state_id' => $state29->id, 'city_name' => 'Raichur']);
$pincodeRaichur1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityRaichur->id, 'pincode' => '584101']);

$cityShivamogga = City::create(['state_id' => $state29->id, 'city_name' => 'Shivamogga']);
$pincodeShivamogga1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityShivamogga->id, 'pincode' => '577201']);

$cityShravanabelagola = City::create(['state_id' => $state29->id, 'city_name' => 'Shravanabelagola']);
$pincodeShravanabelagola1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityShravanabelagola->id, 'pincode' => '573135']);

$cityShrirangapattana = City::create(['state_id' => $state29->id, 'city_name' => 'Shrirangapattana']);
$pincodeShrirangapattana1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityShrirangapattana->id, 'pincode' => '571438']);

$cityTumakuru = City::create(['state_id' => $state29->id, 'city_name' => 'Tumakuru']);
$pincodeTumakuru1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityTumakuru->id, 'pincode' => '572101']);

$cityVijayapura = City::create(['state_id' => $state29->id, 'city_name' => 'Vijayapura']);
$pincodeVijayapura1 = Pincode::create(['state_id' => $state29->id, 'city_id' => $cityVijayapura->id, 'pincode' => '586101']);


// GOA State
$state30 = State::create([
    'country_id' => $country->id,
    'state_name' => 'GOA',
    'state_code' => '30'
]);
$cityMadgaon = City::create(['state_id' => $state30->id, 'city_name' => 'MADGAON']);
$cityPanaji = City::create(['state_id' => $state30->id, 'city_name' => 'PANAJI']);

$pincodeMadgaon1 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403601']);
$pincodeMadgaon2 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403602']);
$pincodeMadgaon3 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403603']);
$pincodeMadgaon4 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403604']);
$pincodeMadgaon5 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403605']);
$pincodeMadgaon6 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403606']);
$pincodeMadgaon7 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403607']);
$pincodeMadgaon8 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityMadgaon->id, 'pincode' => '403608']);

$pincodePanaji1 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403001']);
$pincodePanaji2 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403002']);
$pincodePanaji3 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403003']);
$pincodePanaji4 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403004']);
$pincodePanaji5 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403005']);
$pincodePanaji6 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403006']);
$pincodePanaji7 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403007']);
$pincodePanaji8 = Pincode::create(['state_id' => $state30->id, 'city_id' => $cityPanaji->id, 'pincode' => '403008']);
// LAKSHADWEEP State
$state31 = State::create([
    'country_id' => $country->id,
    'state_name' => 'LAKSHADWEEP',
    'state_code' => '31'
]);
$cityKavaratti = City::create(['state_id' => $state31->id, 'city_name' => 'KAVARATTI']);
// Add cities associated with LAKSHADWEEP state
$pincodeKavaratti = Pincode::create(['state_id' => $state31->id, 'city_id' => $cityKavaratti->id, 'pincode' => '682555']);

// KERALA State
$state32 = State::create([
    'country_id' => $country->id,
    'state_name' => 'KERALA',
    'state_code' => '32'
]);
$cityAlappuzha = City::create(['state_id' => $state32->id, 'city_name' => 'Alappuzha']);
$cityVatakara = City::create(['state_id' => $state32->id, 'city_name' => 'Vatakara']);
$cityIdukki = City::create(['state_id' => $state32->id, 'city_name' => 'Idukki']);
$cityKannur = City::create(['state_id' => $state32->id, 'city_name' => 'Kannur']);
$cityKochi = City::create(['state_id' => $state32->id, 'city_name' => 'Kochi']);
$cityKollam = City::create(['state_id' => $state32->id, 'city_name' => 'Kollam']);
$cityKanhangad = City::create(['state_id' => $state32->id, 'city_name' => 'Kanhangad']);
$cityKayamkulam = City::create(['state_id' => $state32->id, 'city_name' => 'Kayamkulam']);
$cityKottayam = City::create(['state_id' => $state32->id, 'city_name' => 'Kottayam']);
$cityKoyilandy = City::create(['state_id' => $state32->id, 'city_name' => 'Koyilandy']);
$cityKozhikode = City::create(['state_id' => $state32->id, 'city_name' => 'Kozhikode']);
$cityMalappuram = City::create(['state_id' => $state32->id, 'city_name' => 'Malappuram']);
$cityManjeri = City::create(['state_id' => $state32->id, 'city_name' => 'Manjeri']);
$cityMattancheri = City::create(['state_id' => $state32->id, 'city_name' => 'Mattancheri']);
$cityNeyyattinkara = City::create(['state_id' => $state32->id, 'city_name' => 'Neyyattinkara']);
$cityPalakkad = City::create(['state_id' => $state32->id, 'city_name' => 'Palakkad']);
$cityPonnani = City::create(['state_id' => $state32->id, 'city_name' => 'Ponnani']);
$cityPayyanur = City::create(['state_id' => $state32->id, 'city_name' => 'Payyanur']);
$cityTaliparamba = City::create(['state_id' => $state32->id, 'city_name' => 'Taliparamba']);
$cityTirur = City::create(['state_id' => $state32->id, 'city_name' => 'Tirur']);
$cityThalassery = City::create(['state_id' => $state32->id, 'city_name' => 'Thalassery']);
$cityThiruvananthapuram = City::create(['state_id' => $state32->id, 'city_name' => 'Thiruvananthapuram']);
$cityThrissur = City::create(['state_id' => $state32->id, 'city_name' => 'Thrissur']);
$cityVatakara = City::create(['state_id' => $state32->id, 'city_name' => 'Vatakara']);

$pincodeAlappuzha = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityAlappuzha->id, 'pincode' => '688001']);
$pincodeVatakara = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityVatakara->id, 'pincode' => '673101']);
$pincodeIdukki = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityIdukki->id, 'pincode' => '685501']);
$pincodeKannur = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKannur->id, 'pincode' => '670001']);
$pincodeKochi = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKochi->id, 'pincode' => '682001']);
$pincodeKollam = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKollam->id, 'pincode' => '691001']);
$pincodeKanhangad = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKanhangad->id, 'pincode' => '671315']);
$pincodeKayamkulam = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKayamkulam->id, 'pincode' => '690502']);
$pincodeKottayam = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKottayam->id, 'pincode' => '686001']);
$pincodeKoyilandy = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKoyilandy->id, 'pincode' => '673305']);
$pincodeKozhikode = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityKozhikode->id, 'pincode' => '673001']);
$pincodeMalappuram = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityMalappuram->id, 'pincode' => '676505']);
$pincodeManjeri = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityManjeri->id, 'pincode' => '676121']);
$pincodeMattancheri = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityMattancheri->id, 'pincode' => '682002']);
$pincodeNeyyattinkara = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityNeyyattinkara->id, 'pincode' => '695121']);
$pincodePalakkad = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityPalakkad->id, 'pincode' => '678001']);
$pincodePonnani = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityPonnani->id, 'pincode' => '679577']);
$pincodePayyanur = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityPayyanur->id, 'pincode' => '670307']);
$pincodeTaliparamba = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityTaliparamba->id, 'pincode' => '670141']);
$pincodeTirur = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityTirur->id, 'pincode' => '676101']);
$pincodeThalassery = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityThalassery->id, 'pincode' => '670101']);
$pincodeThiruvananthapuram = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityThiruvananthapuram->id, 'pincode' => '695001']);
$pincodeThrissur = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityThrissur->id, 'pincode' => '680001']);
$pincodeVatakara = Pincode::create(['state_id' => $state32->id, 'city_id' => $cityVatakara->id, 'pincode' => '673101']);


// TAMIL NADU State
$state33 = State::create([
    'country_id' => $country->id,
    'state_name' => 'TAMIL NADU',
    'state_code' => '33'
]);
$cityArcot = City::create(['state_id' => $state33->id, 'city_name' => 'Arcot']);
$cityChengalpattu = City::create(['state_id' => $state33->id, 'city_name' => 'Chengalpattu']);
$cityChennai = City::create(['state_id' => $state33->id, 'city_name' => 'Chennai']);
$cityChidambaram = City::create(['state_id' => $state33->id, 'city_name' => 'Chidambaram']);
$cityCoimbatore = City::create(['state_id' => $state33->id, 'city_name' => 'Coimbatore']);
$cityCuddalore = City::create(['state_id' => $state33->id, 'city_name' => 'Cuddalore']);
$cityDharmapuri = City::create(['state_id' => $state33->id, 'city_name' => 'Dharmapuri']);
$cityDindigul = City::create(['state_id' => $state33->id, 'city_name' => 'Dindigul']);
$cityErode = City::create(['state_id' => $state33->id, 'city_name' => 'Erode']);
$cityKanchipuram = City::create(['state_id' => $state33->id, 'city_name' => 'Kanchipuram']);
$cityKanniyakumari = City::create(['state_id' => $state33->id, 'city_name' => 'Kanniyakumari']);
$cityKodaikanal = City::create(['state_id' => $state33->id, 'city_name' => 'Kodaikanal']);
$cityKumbakonam = City::create(['state_id' => $state33->id, 'city_name' => 'Kumbakonam']);
$cityMadurai = City::create(['state_id' => $state33->id, 'city_name' => 'Madurai']);
$cityMamallapuram = City::create(['state_id' => $state33->id, 'city_name' => 'Mamallapuram']);
$cityNagappattinam = City::create(['state_id' => $state33->id, 'city_name' => 'Nagappattinam']);
$cityNagercoil = City::create(['state_id' => $state33->id, 'city_name' => 'Nagercoil']);
$cityPalayamkottai = City::create(['state_id' => $state33->id, 'city_name' => 'Palayamkottai']);
$cityPudukkottai = City::create(['state_id' => $state33->id, 'city_name' => 'Pudukkottai']);
$cityRajapalayam = City::create(['state_id' => $state33->id, 'city_name' => 'Rajapalayam']);
$cityRamanathapuram = City::create(['state_id' => $state33->id, 'city_name' => 'Ramanathapuram']);
$citySalem = City::create(['state_id' => $state33->id, 'city_name' => 'Salem']);
$cityThanjavur = City::create(['state_id' => $state33->id, 'city_name' => 'Thanjavur']);
$cityTiruchchirappalli = City::create(['state_id' => $state33->id, 'city_name' => 'Tiruchchirappalli']);
$cityTirunelveli = City::create(['state_id' => $state33->id, 'city_name' => 'Tirunelveli']);
$cityTiruppur = City::create(['state_id' => $state33->id, 'city_name' => 'Tiruppur']);
$cityThoothukudi = City::create(['state_id' => $state33->id, 'city_name' => 'Thoothukudi']);
$cityUdhagamandalam = City::create(['state_id' => $state33->id, 'city_name' => 'Udhagamandalam']);
$cityVellore = City::create(['state_id' => $state33->id, 'city_name' => 'Vellore']);

$pincodeArcot = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityArcot->id, 'pincode' => '632503']);
$pincodeChengalpattu = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityChengalpattu->id, 'pincode' => '603001']);
$pincodeChennai = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityChennai->id, 'pincode' => '600001']);
$pincodeChidambaram = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityChidambaram->id, 'pincode' => '608001']);
$pincodeCoimbatore = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityCoimbatore->id, 'pincode' => '641001']);
$pincodeCuddalore = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityCuddalore->id, 'pincode' => '607001']);
$pincodeDharmapuri = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityDharmapuri->id, 'pincode' => '636001']);
$pincodeDindigul = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityDindigul->id, 'pincode' => '624001']);
$pincodeErode = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityErode->id, 'pincode' => '638001']);
$pincodeKanchipuram = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityKanchipuram->id, 'pincode' => '631501']);
$pincodeKanniyakumari = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityKanniyakumari->id, 'pincode' => '629001']);
$pincodeKodaikanal = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityKodaikanal->id, 'pincode' => '624101']);
$pincodeKumbakonam = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityKumbakonam->id, 'pincode' => '612001']);
$pincodeMadurai = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityMadurai->id, 'pincode' => '625001']);
$pincodeMamallapuram = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityMamallapuram->id, 'pincode' => '603104']);
$pincodeNagappattinam = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityNagappattinam->id, 'pincode' => '611001']);
$pincodeNagercoil = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityNagercoil->id, 'pincode' => '629001']);
$pincodePalayamkottai = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityPalayamkottai->id, 'pincode' => '627002']);
$pincodePudukkottai = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityPudukkottai->id, 'pincode' => '622001']);
$pincodeRajapalayam = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityRajapalayam->id, 'pincode' => '626117']);
$pincodeRamanathapuram = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityRamanathapuram->id, 'pincode' => '623501']);
$pincodeSalem = Pincode::create(['state_id' => $state33->id, 'city_id' => $citySalem->id, 'pincode' => '636001']);
$pincodeThanjavur = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityThanjavur->id, 'pincode' => '613001']);
$pincodeTiruchchirappalli = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityTiruchchirappalli->id, 'pincode' => '620001']);
$pincodeTirunelveli = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityTirunelveli->id, 'pincode' => '627001']);
$pincodeTiruppur = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityTiruppur->id, 'pincode' => '641601']);
$pincodeThoothukudi = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityThoothukudi->id, 'pincode' => '628001']);
$pincodeUdhagamandalam = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityUdhagamandalam->id, 'pincode' => '643001']);
$pincodeVellore = Pincode::create(['state_id' => $state33->id, 'city_id' => $cityVellore->id, 'pincode' => '632001']);

// PUDUCHERRY State
$state34 = State::create([
    'country_id' => $country->id,
    'state_name' => 'PUDUCHERRY',
    'state_code' => '34'
]);
$cityKARAIKAL = City::create(['state_id' => $state34->id, 'city_name' => 'KARAIKAL']);
$cityMAHE = City::create(['state_id' => $state34->id, 'city_name' => 'MAHE']);
$cityPUDUCHERRY = City::create(['state_id' => $state34->id, 'city_name' => 'PUDUCHERRY']);
$cityYANAM = City::create(['state_id' => $state34->id, 'city_name' => 'YANAM']);
// Add cities associated with PUDUCHERRY state
$pincodeKARAIKAL = Pincode::create(['state_id' => $state34->id, 'city_id' => $cityKARAIKAL->id, 'pincode' => '609602']);
$pincodeMAHE = Pincode::create(['state_id' => $state34->id, 'city_id' => $cityMAHE->id, 'pincode' => '673310']);
$pincodePUDUCHERRY = Pincode::create(['state_id' => $state34->id, 'city_id' => $cityPUDUCHERRY->id, 'pincode' => '605001']);
$pincodeYANAM = Pincode::create(['state_id' => $state34->id, 'city_id' => $cityYANAM->id, 'pincode' => '533464']);


// ANDAMAN AND NICOBAR State
$state35 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ANDAMAN AND NICOBAR',
    'state_code' => '35'
]);
$cityBAKULTALA = City::create(['state_id' => $state35->id, 'city_name' => 'BAKULTALA']);
$cityBAMBOOFLAT = City::create(['state_id' => $state35->id, 'city_name' => 'BAMBOOFLAT']);
$cityGARACHARMA = City::create(['state_id' => $state35->id, 'city_name' => 'GARACHARMA']);
$cityPORTBLAIR = City::create(['state_id' => $state35->id, 'city_name' => 'PORT BLAIR']);
$cityPROTHRAPUR = City::create(['state_id' => $state35->id, 'city_name' => 'PROTHRAPUR']);
// Add cities associated with ANDAMAN AND NICOBAR state

$pincodeBAKULTALA = Pincode::create(['state_id' => $state35->id, 'city_id' => $cityBAKULTALA->id, 'pincode' => '744107']);
$pincodeBAMBOOFLAT = Pincode::create(['state_id' => $state35->id, 'city_id' => $cityBAMBOOFLAT->id, 'pincode' => '744101']);
$pincodeGARACHARMA = Pincode::create(['state_id' => $state35->id, 'city_id' => $cityGARACHARMA->id, 'pincode' => '744105']);
$pincodePORTBLAIR = Pincode::create(['state_id' => $state35->id, 'city_id' => $cityPORTBLAIR->id, 'pincode' => '744101']);
$pincodePROTHRAPUR = Pincode::create(['state_id' => $state35->id, 'city_id' => $cityPROTHRAPUR->id, 'pincode' => '744105']);

// TELANGANA State
$state36 = State::create([
    'country_id' => $country->id,
    'state_name' => 'TELANGANA',
    'state_code' => '36'
]);
$cityHyderabad = City::create(['state_id' => $state36->id, 'city_name' => 'Hyderabad']);
$cityKarimnagar = City::create(['state_id' => $state36->id, 'city_name' => 'Karimnagar']);
$cityKhammam = City::create(['state_id' => $state36->id, 'city_name' => 'Khammam']);
$cityMahbubnagar = City::create(['state_id' => $state36->id, 'city_name' => 'Mahbubnagar']);
$cityNizamabad = City::create(['state_id' => $state36->id, 'city_name' => 'Nizamabad']);
$citySangareddi = City::create(['state_id' => $state36->id, 'city_name' => 'Sangareddi']);
$cityWarangal = City::create(['state_id' => $state36->id, 'city_name' => 'Warangal']);

$pincodeHyderabad = Pincode::create(['state_id' => $state36->id, 'city_id' => $cityHyderabad->id, 'pincode' => '500001']);
$pincodeKarimnagar = Pincode::create(['state_id' => $state36->id, 'city_id' => $cityKarimnagar->id, 'pincode' => '505001']);
$pincodeKhammam = Pincode::create(['state_id' => $state36->id, 'city_id' => $cityKhammam->id, 'pincode' => '507001']);
$pincodeMahbubnagar = Pincode::create(['state_id' => $state36->id, 'city_id' => $cityMahbubnagar->id, 'pincode' => '509001']);
$pincodeNizamabad = Pincode::create(['state_id' => $state36->id, 'city_id' => $cityNizamabad->id, 'pincode' => '503001']);
$pincodeSangareddi = Pincode::create(['state_id' => $state36->id, 'city_id' => $citySangareddi->id, 'pincode' => '502001']);
$pincodeWarangal = Pincode::create(['state_id' => $state36->id, 'city_id' => $cityWarangal->id, 'pincode' => '506001']);

// ANDHRA PRADESH State
$state37 = State::create([
    'country_id' => $country->id,
    'state_name' => 'ANDHRA PRADESH',
    'state_code' => '37'
]);
$cityADONI = City::create(['state_id' => $state37->id, 'city_name' => 'ADONI']);
$cityAMARAVATI = City::create(['state_id' => $state37->id, 'city_name' => 'AMARAVATI']);
$cityANANTAPUR = City::create(['state_id' => $state37->id, 'city_name' => 'ANANTAPUR']);
$cityBHIMAVARAM = City::create(['state_id' => $state37->id, 'city_name' => 'BHIMAVARAM']);
$cityCHANDRAGIRI = City::create(['state_id' => $state37->id, 'city_name' => 'CHANDRAGIRI']);
$cityCHITTOOR = City::create(['state_id' => $state37->id, 'city_name' => 'CHITTOOR']);
$cityCHILAKALURIPET = City::create(['state_id' => $state37->id, 'city_name' => 'CHILAKALURIPET']);
$cityDHARMAVARAM = City::create(['state_id' => $state37->id, 'city_name' => 'DHARMAVARAM']);
$cityDOWLAISWARAM = City::create(['state_id' => $state37->id, 'city_name' => 'DOWLAISWARAM']);
$cityELURU = City::create(['state_id' => $state37->id, 'city_name' => 'ELURU']);
$cityGUDIVADA = City::create(['state_id' => $state37->id, 'city_name' => 'GUDIVADA']);
$cityGUNTAKAL = City::create(['state_id' => $state37->id, 'city_name' => 'GUNTAKAL']);
$cityGUNTUR = City::create(['state_id' => $state37->id, 'city_name' => 'GUNTUR']);
$cityHINDUPUR = City::create(['state_id' => $state37->id, 'city_name' => 'HINDUPUR']);
$cityKADAPA = City::create(['state_id' => $state37->id, 'city_name' => 'KADAPA']);
$cityKADIRI = City::create(['state_id' => $state37->id, 'city_name' => 'KADIRI']);
$cityKAKINADA = City::create(['state_id' => $state37->id, 'city_name' => 'KAKINADA']);
$cityKURNOOL = City::create(['state_id' => $state37->id, 'city_name' => 'KURNOOL']);
$cityMACHILIPATNAM = City::create(['state_id' => $state37->id, 'city_name' => 'MACHILIPATNAM']);
$cityMADANAPALLE = City::create(['state_id' => $state37->id, 'city_name' => 'MADANAPALLE']);
$cityMANGALAGIRI = City::create(['state_id' => $state37->id, 'city_name' => 'MANGALAGIRI']);
$cityNANDYAL = City::create(['state_id' => $state37->id, 'city_name' => 'NANDYAL']);
$cityNAGARJUNAKONDA = City::create(['state_id' => $state37->id, 'city_name' => 'NAGARJUNAKONDA']);
$cityNARASARAOPET = City::create(['state_id' => $state37->id, 'city_name' => 'NARASARAOPET']);
$cityNELLORE = City::create(['state_id' => $state37->id, 'city_name' => 'NELLORE']);
$cityONGOLE = City::create(['state_id' => $state37->id, 'city_name' => 'ONGOLE']);
$cityPRODDATUR = City::create(['state_id' => $state37->id, 'city_name' => 'PRODDATUR']);
$cityRAJAHMUNDRY = City::create(['state_id' => $state37->id, 'city_name' => 'RAJAHMUNDRY']);
$citySRIKAKULAM = City::create(['state_id' => $state37->id, 'city_name' => 'SRIKAKULAM']);
$cityTADEPALLIGUDEM = City::create(['state_id' => $state37->id, 'city_name' => 'TADEPALLIGUDEM']);
$cityTADIPATRI = City::create(['state_id' => $state37->id, 'city_name' => 'TADIPATRI']);
$cityTIRUPATI = City::create(['state_id' => $state37->id, 'city_name' => 'TIRUPATI']);
$cityTENALI = City::create(['state_id' => $state37->id, 'city_name' => 'TENALI']);
$cityVIJAYAWADA = City::create(['state_id' => $state37->id, 'city_name' => 'VIJAYAWADA']);
$cityVISAKHAPATNAM = City::create(['state_id' => $state37->id, 'city_name' => 'VISAKHAPATNAM']);
$cityVIZIANAGARAM = City::create(['state_id' => $state37->id, 'city_name' => 'VIZIANAGARAM']);
$cityYEMMIGANUR = City::create(['state_id' => $state37->id, 'city_name' => 'YEMMIGANUR']);
// Add cities associated with ANDHRA PRADESH state

$pincodeADONI = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityADONI->id, 'pincode' => '518301']);
$pincodeBHIMAVARAM = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityBHIMAVARAM->id, 'pincode' => '534201']);
$pincodeDHARMAVARAM = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityDHARMAVARAM->id, 'pincode' => '515671']);
$pincodeELURU = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityELURU->id, 'pincode' => '534001']);
$pincodeGUDIVADA = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityGUDIVADA->id, 'pincode' => '521301']);
$pincodeGUNTUR = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityGUNTUR->id, 'pincode' => '522002']);
$pincodeHINDUPUR = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityHINDUPUR->id, 'pincode' => '515201']);
$pincodeKADAPA = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityKADAPA->id, 'pincode' => '516001']);
$pincodeKADIRI = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityKADIRI->id, 'pincode' => '515591']);
$pincodeKAKINADA = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityKAKINADA->id, 'pincode' => '533001']);
$pincodeKURNOOL = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityKURNOOL->id, 'pincode' => '518001']);
$pincodeMACHILIPATNAM = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityMACHILIPATNAM->id, 'pincode' => '521001']);
$pincodeMADANAPALLE = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityMADANAPALLE->id, 'pincode' => '517325']);
$pincodeMANGALAGIRI = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityMANGALAGIRI->id, 'pincode' => '522503']);
$pincodeNANDYAL = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityNANDYAL->id, 'pincode' => '518501']);
$pincodeNAGARJUNAKONDA = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityNAGARJUNAKONDA->id, 'pincode' => '522439']);
$pincodeNARASARAOPET = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityNARASARAOPET->id, 'pincode' => '522601']);
$pincodeNELLORE = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityNELLORE->id, 'pincode' => '524001']);
$pincodeONGOLE = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityONGOLE->id, 'pincode' => '523001']);
$pincodePRODDATUR = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityPRODDATUR->id, 'pincode' => '516360']);
$pincodeRAJAHMUNDRY = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityRAJAHMUNDRY->id, 'pincode' => '533101']);
$pincodeSRIKAKULAM = Pincode::create(['state_id' => $state37->id, 'city_id' => $citySRIKAKULAM->id, 'pincode' => '532001']);
$pincodeTADEPALLIGUDEM = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityTADEPALLIGUDEM->id, 'pincode' => '534101']);
$pincodeTADIPATRI = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityTADIPATRI->id, 'pincode' => '515411']);
$pincodeTIRUPATI = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityTIRUPATI->id, 'pincode' => '517501']);
$pincodeTENALI = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityTENALI->id, 'pincode' => '522201']);
$pincodeVIJAYAWADA = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityVIJAYAWADA->id, 'pincode' => '520001']);
$pincodeVISAKHAPATNAM = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityVISAKHAPATNAM->id, 'pincode' => '530001']);
$pincodeVIZIANAGARAM = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityVIZIANAGARAM->id, 'pincode' => '535001']);
$pincodeYEMMIGANUR = Pincode::create(['state_id' => $state37->id, 'city_id' => $cityYEMMIGANUR->id, 'pincode' => '518360']);



// LADAKH State
$state38 = State::create([
    'country_id' => $country->id,
    'state_name' => 'LADAKH',
    'state_code' => '38'
]);
$cityLeh  = City::create(['state_id' => $state38->id, 'city_name' => 'LEH']);
$cityKargil = City::create(['state_id' => $state38->id, 'city_name' => 'KARGIL']);

$pincodeLeh = Pincode::create(['state_id' => $state38->id, 'city_id' => $cityLeh->id, 'pincode' => '194101']);
$pincodeKargil = Pincode::create(['state_id' => $state38->id, 'city_id' => $cityKargil->id, 'pincode' => '194103']);


// Creating pin codes for the city and state

// Pincode::create([
//     'city_id' => $city->id,
//     'state_id' => $state1->id,
//     'pincode' => '194101'
// ]);

}
  }
