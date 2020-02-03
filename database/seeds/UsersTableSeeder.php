<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=App\User::create([
            'name'=>'mohamed',
            'email'=>'m@m.com',
            'password'=>bcrypt('112233'),
            'admin'=>1
        ]);
        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/WIN_20191126_15_27_47_Pro.jpg',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at, delectus dolorem dolorum eius facilis fuga illo incidunt quos repellat sed similique totam ullam ut velit, vitae voluptatem. Accusantium, eos.',
            'facebook'=>'fb.com',
            'youtube'=>'youtube.com'

        ]);
    }
}
