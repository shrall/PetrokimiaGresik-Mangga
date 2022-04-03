<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
        $this->call(IndoRegionDistrictSeeder::class);
        $this->call(IndoRegionVillageSeeder::class);
        $this->call(CapitalSourceSeeder::class);
        $this->call(FinanceRecordSeeder::class);
        $this->call(InstallmentTypeSeeder::class);
        $this->call(ProductionProcessSeeder::class);
        $this->call(MudaTypeSeeder::class);
        $this->call(MudaCategorySeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ReligionSeeder::class);
        $this->call(VillageSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(SectorSeeder::class);
        $this->call(SubSectorSeeder::class);
        $this->call(BusinessFormSeeder::class);
        $this->call(DistributionTypeSeeder::class);
        $this->call(EstablishmentStatusSeeder::class);
        $this->call(MarketingSeeder::class);
        $this->call(MediaTypeSeeder::class);
        $this->call(EmployeeDepartmentSeeder::class);
        $this->call(BusinessStatusSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VillageSeeder1::class);
    }
}
