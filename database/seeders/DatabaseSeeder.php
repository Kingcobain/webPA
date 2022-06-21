<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Rafi Uletta',
            'username' => 'rafiuletta',
            'email' => 'rafiuletta@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Nabas',
        //     'email' => 'nabas@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit officia sunt, ducimus natus reprehenderit quae mollitia corporis exercitationem maiores officiis deleniti ipsum earum molestiae optio hic non voluptatum laborum sequi culpa! Culpa qui eveniet pariatur sapiente, accusamus fuga beatae ipsam. Modi ratione delectus repellendus voluptate molestias nobis recusandae fuga natus voluptas temporibus iusto provident dicta magnam totam minus, ea quia amet aliquam. Facere corrupti iste qui? Quisquam accusantium rerum quo error molestiae a, mollitia incidunt, omnis, reprehenderit ipsa eligendi maiores? Doloremque itaque nesciunt nulla repudiandae excepturi similique voluptate omnis perspiciatis, maiores, illo maxime facilis. Atque quam praesentium modi architecto quisquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit officia sunt, ducimus natus reprehenderit quae mollitia corporis exercitationem maiores officiis deleniti ipsum earum molestiae optio hic non voluptatum laborum sequi culpa! Culpa qui eveniet pariatur sapiente, accusamus fuga beatae ipsam. Modi ratione delectus repellendus voluptate molestias nobis recusandae fuga natus voluptas temporibus iusto provident dicta magnam totam minus, ea quia amet aliquam. Facere corrupti iste qui? Quisquam accusantium rerum quo error molestiae a, mollitia incidunt, omnis, reprehenderit ipsa eligendi maiores? Doloremque itaque nesciunt nulla repudiandae excepturi similique voluptate omnis perspiciatis, maiores, illo maxime facilis. Atque quam praesentium modi architecto quisquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit officia sunt, ducimus natus reprehenderit quae mollitia corporis exercitationem maiores officiis deleniti ipsum earum molestiae optio hic non voluptatum laborum sequi culpa! Culpa qui eveniet pariatur sapiente, accusamus fuga beatae ipsam. Modi ratione delectus repellendus voluptate molestias nobis recusandae fuga natus voluptas temporibus iusto provident dicta magnam totam minus, ea quia amet aliquam. Facere corrupti iste qui? Quisquam accusantium rerum quo error molestiae a, mollitia incidunt, omnis, reprehenderit ipsa eligendi maiores? Doloremque itaque nesciunt nulla repudiandae excepturi similique voluptate omnis perspiciatis, maiores, illo maxime facilis. Atque quam praesentium modi architecto quisquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
