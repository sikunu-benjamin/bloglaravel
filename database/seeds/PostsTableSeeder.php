<?php

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = User::create([
            'name' => 'Makuiza',
            'email' => 'makuiza@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Sikunu',
            'email' => 'sikunu@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author3 = User::create([
            'name' => 'Julie',
            'email' => 'Julie@gmail.com',
            'password' => Hash::make('password')
        ]);

        $category1 = Category::create([
            'name' => 'News'
        ]);

        $category2 = Category::create([
            'name' => 'Design'
        ]);

        $category3 = Category::create([
            'name' => 'Marketing'
        ]);

        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.',
            'contenu' => 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat eleifend option nihil. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius parum claram.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
        ]);

        $post2 = Post::create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.',
            'contenu' => 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat eleifend option nihil. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius parum claram.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.',
            'contenu' => 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat eleifend option nihil. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius parum claram.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'
        ]);

        $post4 = Post::create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.',
            'contenu' => 'Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat eleifend option nihil. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius parum claram.',
            'category_id' => $category2->id,
            'image' => 'posts/4.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'job'
        ]);

        $tag2 = Tag::create([
            'name' => 'progress'
        ]);

        $tag3 = Tag::create([
            'name' => 'reccord'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);
    }
}
