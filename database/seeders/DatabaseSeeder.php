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
        
        // User::create([
        //     'name' => 'Abay saputra',
        //     'email' => 'adibayu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Adli R.A',
        //     'email' => 'adli@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        User::factory(3)->create();

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
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio debitis alias cumque sunt nihil atque eum delectus aliquam praesentium dolores, suscipit rem dicta aut accusantium saepe ipsam autem. Maiores accusamus ipsum harum dicta possimus quibusdam, veritatis necessitatibus quisquam magnam, quis corporis provident velit ipsa eligendi iure sint omnis? Quod necessitatibus expedita nesciunt corrupti doloribus officia labore, sint eveniet est ea sapiente numquam excepturi quibusdam, corporis inventore. Cupiditate minus necessitatibus totam debitis incidunt labore nulla eum at ad id, dolores culpa suscipit rerum voluptatum numquam vel, modi blanditiis velit sapiente nihil est, ratione illo. Possimus consequatur, ad nam veritatis ipsam explicabo!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio debitis alias cumque sunt nihil atque eum delectus aliquam praesentium dolores, suscipit rem dicta aut accusantium saepe ipsam autem. Maiores accusamus ipsum harum dicta possimus quibusdam, veritatis necessitatibus quisquam magnam, quis corporis provident velit ipsa eligendi iure sint omnis? Quod necessitatibus expedita nesciunt corrupti doloribus officia labore, sint eveniet est ea sapiente numquam excepturi quibusdam, corporis inventore. Cupiditate minus necessitatibus totam debitis incidunt labore nulla eum at ad id, dolores culpa suscipit rerum voluptatum numquam vel, modi blanditiis velit sapiente nihil est, ratione illo. Possimus consequatur, ad nam veritatis ipsam explicabo!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio debitis alias cumque sunt nihil atque eum delectus aliquam praesentium dolores, suscipit rem dicta aut accusantium saepe ipsam autem. Maiores accusamus ipsum harum dicta possimus quibusdam, veritatis necessitatibus quisquam magnam, quis corporis provident velit ipsa eligendi iure sint omnis? Quod necessitatibus expedita nesciunt corrupti doloribus officia labore, sint eveniet est ea sapiente numquam excepturi quibusdam, corporis inventore. Cupiditate minus necessitatibus totam debitis incidunt labore nulla eum at ad id, dolores culpa suscipit rerum voluptatum numquam vel, modi blanditiis velit sapiente nihil est, ratione illo. Possimus consequatur, ad nam veritatis ipsam explicabo!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio debitis alias cumque sunt nihil atque eum delectus aliquam praesentium dolores, suscipit rem dicta aut accusantium saepe ipsam autem. Maiores accusamus ipsum harum dicta possimus quibusdam, veritatis necessitatibus quisquam magnam, quis corporis provident velit ipsa eligendi iure sint omnis? Quod necessitatibus expedita nesciunt corrupti doloribus officia labore, sint eveniet est ea sapiente numquam excepturi quibusdam, corporis inventore. Cupiditate minus necessitatibus totam debitis incidunt labore nulla eum at ad id, dolores culpa suscipit rerum voluptatum numquam vel, modi blanditiis velit sapiente nihil est, ratione illo. Possimus consequatur, ad nam veritatis ipsam explicabo!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio debitis alias cumque sunt nihil atque eum delectus aliquam praesentium dolores, suscipit rem dicta aut accusantium saepe ipsam autem. Maiores accusamus ipsum harum dicta possimus quibusdam, veritatis necessitatibus quisquam magnam, quis corporis provident velit ipsa eligendi iure sint omnis? Quod necessitatibus expedita nesciunt corrupti doloribus officia labore, sint eveniet est ea sapiente numquam excepturi quibusdam, corporis inventore. Cupiditate minus necessitatibus totam debitis incidunt labore nulla eum at ad id, dolores culpa suscipit rerum voluptatum numquam vel, modi blanditiis velit sapiente nihil est, ratione illo. Possimus consequatur, ad nam veritatis ipsam explicabo!',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
    }
}
