<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Post::factory(20)->create();

        User::create([
            'name' => 'Agung Ari',
            'username' => 'agungari',
            'email' => 'agungari@mail.com',
            'password' => bcrypt(12345)
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Andika',
        //     'username' => 'andika',
        //     'email' => 'andika@mail.com',
        //     'password' => bcrypt(12345)
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum? Ad a, praesentium repudiandae ea architecto consequatur magni modi animi odio saepe corporis laborum esse provident ratione voluptates dolores vel doloribus dicta exercitationem tempore. Nam velit ipsa doloremque alias excepturi, impedit ducimus voluptates, dolore natus ea earum perspiciatis. Exercitationem accusantium officia nisi odit? Sit quisquam vel soluta minima veniam quam corrupti assumenda molestias corporis. Quam delectus porro quas alias, voluptatibus explicabo nobis rem. Quo quas neque dolore debitis optio quis!',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum? Ad a, praesentium repudiandae ea architecto consequatur magni modi animi odio saepe corporis laborum esse provident ratione voluptates dolores vel doloribus dicta exercitationem tempore. Nam velit ipsa doloremque alias excepturi, impedit ducimus voluptates, dolore natus ea earum perspiciatis. Exercitationem accusantium officia nisi odit? Sit quisquam vel soluta minima veniam quam corrupti assumenda molestias corporis. Quam delectus porro quas alias, voluptatibus explicabo nobis rem. Quo quas neque dolore debitis optio quis!',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum? Ad a, praesentium repudiandae ea architecto consequatur magni modi animi odio saepe corporis laborum esse provident ratione voluptates dolores vel doloribus dicta exercitationem tempore. Nam velit ipsa doloremque alias excepturi, impedit ducimus voluptates, dolore natus ea earum perspiciatis. Exercitationem accusantium officia nisi odit? Sit quisquam vel soluta minima veniam quam corrupti assumenda molestias corporis. Quam delectus porro quas alias, voluptatibus explicabo nobis rem. Quo quas neque dolore debitis optio quis!',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eveniet minima laborum rem sunt tenetur perferendis eius, est neque rerum sed provident quidem magni quam repellat possimus porro cupiditate earum? Ad a, praesentium repudiandae ea architecto consequatur magni modi animi odio saepe corporis laborum esse provident ratione voluptates dolores vel doloribus dicta exercitationem tempore. Nam velit ipsa doloremque alias excepturi, impedit ducimus voluptates, dolore natus ea earum perspiciatis. Exercitationem accusantium officia nisi odit? Sit quisquam vel soluta minima veniam quam corrupti assumenda molestias corporis. Quam delectus porro quas alias, voluptatibus explicabo nobis rem. Quo quas neque dolore debitis optio quis!',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);
    }
}
