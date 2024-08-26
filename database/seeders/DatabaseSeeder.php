<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        User::create([
            'name' => 'Muhammad Ega Dermawan',
            'username' => 'Ega',
            'email' => 'dermawane988@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();
        // Category::factory(3)->create();

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

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Muhammad Ega Dermawan',
        //     'email' => 'dermawane988@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Fahmi Abdul Aziz',
        //     'email' => 'fahmiabdulaziz99@gmail.com',
        //     'password' => bcrypt('99999')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
       
        // Post::create([
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus. Fuga molestias explicabo animi hic tempora culpa, sint sapiente, possimus velit asperiores quae quaerat laborum ipsum numquam aperiam totam sequi dicta similique cumque eius. Est deserunt doloremque ratione corrupti mollitia quam? Consequatur autem suscipit cupiditate vel, cum, placeat itaque officiis nisi iste nam aliquid nulla harum nemo soluta reprehenderit aperiam deserunt quidem accusamus, explicabo quaerat eum tenetur modi nesciunt iure? Voluptatibus ab inventore hic, repudiandae a velit? Modi corporis dolore iste saepe odio nihil.'
        // ]);
        // Post::create([
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus. Fuga molestias explicabo animi hic tempora culpa, sint sapiente, possimus velit asperiores quae quaerat laborum ipsum numquam aperiam totam sequi dicta similique cumque eius. Est deserunt doloremque ratione corrupti mollitia quam? Consequatur autem suscipit cupiditate vel, cum, placeat itaque officiis nisi iste nam aliquid nulla harum nemo soluta reprehenderit aperiam deserunt quidem accusamus, explicabo quaerat eum tenetur modi nesciunt iure? Voluptatibus ab inventore hic, repudiandae a velit? Modi corporis dolore iste saepe odio nihil.'
        // ]);
        // Post::create([
        //     'category_id' => '1',
        //     'user_id' => '2',
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus. Fuga molestias explicabo animi hic tempora culpa, sint sapiente, possimus velit asperiores quae quaerat laborum ipsum numquam aperiam totam sequi dicta similique cumque eius. Est deserunt doloremque ratione corrupti mollitia quam? Consequatur autem suscipit cupiditate vel, cum, placeat itaque officiis nisi iste nam aliquid nulla harum nemo soluta reprehenderit aperiam deserunt quidem accusamus, explicabo quaerat eum tenetur modi nesciunt iure? Voluptatibus ab inventore hic, repudiandae a velit? Modi corporis dolore iste saepe odio nihil.'
        // ]);
        // Post::create([
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quasi natus nobis provident assumenda. Possimus, enim? Assumenda recusandae, amet ipsam sequi distinctio optio fugit! Ea, accusamus. Fuga molestias explicabo animi hic tempora culpa, sint sapiente, possimus velit asperiores quae quaerat laborum ipsum numquam aperiam totam sequi dicta similique cumque eius. Est deserunt doloremque ratione corrupti mollitia quam? Consequatur autem suscipit cupiditate vel, cum, placeat itaque officiis nisi iste nam aliquid nulla harum nemo soluta reprehenderit aperiam deserunt quidem accusamus, explicabo quaerat eum tenetur modi nesciunt iure? Voluptatibus ab inventore hic, repudiandae a velit? Modi corporis dolore iste saepe odio nihil.'
        // ]);
    }
}
