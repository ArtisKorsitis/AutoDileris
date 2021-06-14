<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert(['id' => '1', 'VIN_Nr' => '132124352', 'Manufacturer' => 'BMW', 'New_Used' => 'New','Type' => 'Sedan', 'Model' => 'M5 (F90)','Year' => '2017', 'Engine_Type' => 'Diesel V8','Power' => '600', 'Mileage' => '0','Tax' => '278.73', 'Price' => '30000','Discount' => '0',]);
        DB::table('cars')->insert(['id' => '2', 'VIN_Nr' => '457647456', 'Manufacturer' => 'Volkswagen', 'New_Used' => 'Used','Type' => 'Hatchback', 'Model' => 'Golf','Year' => '2016', 'Engine_Type' => 'Petrol 1.4','Power' => '125', 'Mileage' => '108581','Tax' => '90.67', 'Price' => '10200','Discount' => '3000',]);
        DB::table('cars')->insert(['id' => '3', 'VIN_Nr' => '678654322', 'Manufacturer' => 'Toyota', 'New_Used' => 'Used','Type' => 'Hatchback', 'Model' => 'RAV 4','Year' => '2013', 'Engine_Type' => 'Diesel 2.2','Power' => '150', 'Mileage' => '221220','Tax' => '70.45', 'Price' => '12700','Discount' => '5000',]);
        DB::table('cars')->insert(['id' => '4', 'VIN_Nr' => '124654889', 'Manufacturer' => 'BMW', 'New_Used' => 'Used','Type' => 'SUV', 'Model' => 'X5','Year' => '2015', 'Engine_Type' => 'Diesel 3.3','Power' => '313', 'Mileage' => '216478','Tax' => '107.53', 'Price' => '23000','Discount' => '0',]);
        DB::table('cars')->insert(['id' => '5', 'VIN_Nr' => '674135678', 'Manufacturer' => 'Audi', 'New_Used' => 'Used','Type' => 'Sedan', 'Model' => 'A5 Sportback','Year' => '2014', 'Engine_Type' => 'Diesel 2.0','Power' => '177', 'Mileage' => '124331','Tax' => '99.67', 'Price' => '15900','Discount' => '4000',]);
        DB::table('cars')->insert(['id' => '6', 'VIN_Nr' => '112235779', 'Manufacturer' => 'Volvo', 'New_Used' => 'Used','Type' => 'Hatchback', 'Model' => 'V90 T8','Year' => '2018', 'Engine_Type' => 'Hybrid 2.0','Power' => '303', 'Mileage' => '41361','Tax' => '130.82', 'Price' => '45642','Discount' => '0',]);
    }
}
