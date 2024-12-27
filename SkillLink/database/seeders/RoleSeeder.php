<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        $FreeLancer = new Role();
       $FreeLancer->name = "Freelancer";
       $FreeLancer->description = "Freelancer looking for projects";

       $FreeLancer->save();

       $Client = new Role();
       $Client->name = "Client";
       $Client->description = "Client Looking for";
       $Client->save();
    }
}
