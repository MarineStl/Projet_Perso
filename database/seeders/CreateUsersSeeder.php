<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'admin',
               'email'=>'Marine1@live.fr',
               'type'=>1,
               'password'=> bcrypt('Adminadmin'),
            ],
            
            [
               'name'=>'user',
               'email'=>'user@live.fr',
               'type'=>0,
               'password'=> bcrypt('Useruser'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}