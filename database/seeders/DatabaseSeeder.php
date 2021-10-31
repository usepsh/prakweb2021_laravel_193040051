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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Usep Yys',
            'email' => 'usepyys47@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Kim Jennie',
            'email' => 'jennie@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequuntur ex velit repellat repellendus fugit nemo illum quos amet dolorem, maiores facere a tenetur reprehenderit repudiandae necessitatibus vero, eius aut? Non laudantium quasi ea, officiis eaque amet eius praesentium dicta accusantium voluptas magni doloremque aspernatur, itaque hic dolore eum nam, expedita esse perspiciatis saepe nemo eveniet omnis! Modi eligendi necessitatibus maiores inventore, sequi provident animi dolor accusantium repellat sint deserunt, nulla eum cum fuga voluptate voluptatem quo non veniam. Adipisci optio minima eum repellendus pariatur eaque sed corrupti rem repudiandae assumenda praesentium accusamus dolore possimus enim facilis. Corrupti consequuntur error dolor nostrum, reprehenderit id. Iure alias recusandae minima a, qui quibusdam esse soluta accusantium, officiis saepe inventore. Adipisci, ducimus impedit.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequuntur ex velit repellat repellendus fugit nemo illum quos amet dolorem, maiores facere a tenetur reprehenderit repudiandae necessitatibus vero, eius aut? Non laudantium quasi ea, officiis eaque amet eius praesentium dicta accusantium voluptas magni doloremque aspernatur, itaque hic dolore eum nam, expedita esse perspiciatis saepe nemo eveniet omnis! Modi eligendi necessitatibus maiores inventore, sequi provident animi dolor accusantium repellat sint deserunt, nulla eum cum fuga voluptate voluptatem quo non veniam. Adipisci optio minima eum repellendus pariatur eaque sed corrupti rem repudiandae assumenda praesentium accusamus dolore possimus enim facilis. Corrupti consequuntur error dolor nostrum, reprehenderit id. Iure alias recusandae minima a, qui quibusdam esse soluta accusantium, officiis saepe inventore. Adipisci, ducimus impedit.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequuntur ex velit repellat repellendus fugit nemo illum quos amet dolorem, maiores facere a tenetur reprehenderit repudiandae necessitatibus vero, eius aut? Non laudantium quasi ea, officiis eaque amet eius praesentium dicta accusantium voluptas magni doloremque aspernatur, itaque hic dolore eum nam, expedita esse perspiciatis saepe nemo eveniet omnis! Modi eligendi necessitatibus maiores inventore, sequi provident animi dolor accusantium repellat sint deserunt, nulla eum cum fuga voluptate voluptatem quo non veniam. Adipisci optio minima eum repellendus pariatur eaque sed corrupti rem repudiandae assumenda praesentium accusamus dolore possimus enim facilis. Corrupti consequuntur error dolor nostrum, reprehenderit id. Iure alias recusandae minima a, qui quibusdam esse soluta accusantium, officiis saepe inventore. Adipisci, ducimus impedit.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequuntur ex velit repellat repellendus fugit nemo illum quos amet dolorem, maiores facere a tenetur reprehenderit repudiandae necessitatibus vero, eius aut? Non laudantium quasi ea, officiis eaque amet eius praesentium dicta accusantium voluptas magni doloremque aspernatur, itaque hic dolore eum nam, expedita esse perspiciatis saepe nemo eveniet omnis! Modi eligendi necessitatibus maiores inventore, sequi provident animi dolor accusantium repellat sint deserunt, nulla eum cum fuga voluptate voluptatem quo non veniam. Adipisci optio minima eum repellendus pariatur eaque sed corrupti rem repudiandae assumenda praesentium accusamus dolore possimus enim facilis. Corrupti consequuntur error dolor nostrum, reprehenderit id. Iure alias recusandae minima a, qui quibusdam esse soluta accusantium, officiis saepe inventore. Adipisci, ducimus impedit.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
