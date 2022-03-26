<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$district = [
			'Jakarta Selatan',
			'Jakarta Barat'
		];

		$province = [
			'Jakarta',
			'Tangerang'
		];

		foreach($district as $value) {
			District::create([
				'name' => $value
			]);
		}

		foreach($province as $value) {
			Province::create([
				'name' => $value
			]);
		}

    }
}
