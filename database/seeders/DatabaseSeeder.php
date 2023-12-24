<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Hafiz Rivaldi',
            'username' => 'hafiz',
            'email' => 'hafizrivaldi7@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'dodi Junaedi',
            'username' => 'dodi',
            'email' => 'hafizrivaldi84@gmail.com',
            'password' => bcrypt('12345')
        ]);

        
        Category::create([
            'name' => 'web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'judul pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste voluptates officiis, 
            reprehenderit aut officia natus debitis pariatur doloremque quo in, ducimus dicta distinctio dolorem consectetur. 
            Quibusdam sunt exercitationem iure veritatis1!',
            'category_id' => 1,
            'user_id' => 1
        ]);


        Post::create([
            'title' => 'judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste voluptates officiis, 
            reprehenderit aut officia natus debitis pariatur doloremque quo in, ducimus dicta distinctio dolorem consectetur. 
            Quibusdam sunt exercitationem iure veritatis2!',
            'category_id' => 1,
            'user_id' => 1
        ]);


        Post::create([
            'title' => 'judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste voluptates officiis, 
            reprehenderit aut officia natus debitis pariatur doloremque quo in, ducimus dicta distinctio dolorem consectetur. 
            Quibusdam sunt exercitationem iure veritatis2!',
            'category_id' => 2,
            'user_id' => 1
        ]);


        Post::create([
            'title' => 'judul keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste voluptates officiis, 
            reprehenderit aut officia natus debitis pariatur doloremque quo in, ducimus dicta distinctio dolorem consectetur. 
            Quibusdam sunt exercitationem iure veritatis3!',
            'category_id' => 2,
            'user_id' => 2
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
