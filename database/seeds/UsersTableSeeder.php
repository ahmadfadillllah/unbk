<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
  	$faker = Faker::create('App\User');
  	for ($i=0; $i < 1; $i++) {
  		DB::table('users')->insert([
  			'nama' 						=> 'Administrator',
  			'no_induk' 				=> mt_rand(1000000000, mt_getrandmax()),
  			'jk' 							=> 'L',
  			'status' 					=> 'A',
  			'status_sekolah' 	=> 'Y',
  			'email' 					=> 'admin@bahanaislamicschool.sch.id',
  			'password' 				=> Hash::make('bahanamulia')
  		]);
  	}
  }
}