<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            DB::table('posts')->insert([
                [
                    'Title' => 'Tytuł postu 1',
                    'Link' => 'https://laravel.com/docs/9.x/queries#insert-statements',
                    'IsPublic' => true,
                    'CreationDateTime' => date('y-m-d H:i:s'),
                    'EditDateTime' => date('y-m-d H:i:s'),
                    'PublishDateTime' => date('y-m-d H:i:s'),
                    'ShortDescription' => 'Krótki opis 1',
                    'ContentHTML' => '<p>To jest długi opis 1.</p>',
                    'MetaDescription' => 'Opis meta 1',
                    'MetaTags' => 'tag1, tag2, tag3',
                    'Notes' => 'I co tu na pisać? Przydałby się generator, ale nie było czasu odpalać https://fakerphp.github.io/',
                    'IsActive' => true,
                ],
                [
                    'Title' => 'Tytuł postu 2',
                    'Link' => 'https://laravel.com/docs/9.x/queries#insert-statements',
                    'IsPublic' => false,
                    'CreationDateTime' => date('y-m-d H:i:s'),
                    'EditDateTime' => date('y-m-d H:i:s'),
                    'PublishDateTime' => date('y-m-d H:i:s'),
                    'ShortDescription' => 'Krótki opis 2',
                    'ContentHTML' => '<p>To jest długi opis 2.</p>',
                    'MetaDescription' => 'Opis meta 2',
                    'MetaTags' => 'tag1, tag2, tag3',
                    'Notes' => 'I co tu na pisać? Przydałby się generator, ale nie było czasu odpalać https://fakerphp.github.io/',
                    'IsActive' => true,
                ],
                [
                    'Title' => 'Tytuł postu 3',
                    'Link' => 'https://laravel.com/docs/9.x/queries#insert-statements',
                    'IsPublic' => false,
                    'CreationDateTime' => date('y-m-d H:i:s'),
                    'EditDateTime' => date('y-m-d H:i:s'),
                    'PublishDateTime' => date('y-m-d H:i:s'),
                    'ShortDescription' => 'Krótki opis 3',
                    'ContentHTML' => '<p>To jest długi opis 3.</p>',
                    'MetaDescription' => 'Opis meta 3',
                    'MetaTags' => 'tag1, tag2, tag3',
                    'Notes' => 'I co tu na pisać? Przydałby się generator, ale nie było czasu odpalać https://fakerphp.github.io/',
                    'IsActive' => true,
                ],
                [
                    'Title' => 'Tytuł postu 4',
                    'Link' => 'https://laravel.com/docs/9.x/queries#insert-statements',
                    'IsPublic' => true,
                    'CreationDateTime' => date('y-m-d H:i:s'),
                    'EditDateTime' => date('y-m-d H:i:s'),
                    'PublishDateTime' => date('y-m-d H:i:s'),
                    'ShortDescription' => 'Krótki opis 4',
                    'ContentHTML' => '<p>To jest długi opis 4.</p>',
                    'MetaDescription' => 'Opis meta 4',
                    'MetaTags' => 'tag1, tag2, tag3',
                    'Notes' => 'I co tu na pisać? Przydałby się generator, ale nie było czasu odpalać https://fakerphp.github.io/',
                    'IsActive' => true,
                ],
                [
                    'Title' => 'Tytuł postu 5',
                    'Link' => 'https://laravel.com/docs/9.x/queries#insert-statements',
                    'IsPublic' => true,
                    'CreationDateTime' => date('y-m-d H:i:s'),
                    'EditDateTime' => date('y-m-d H:i:s'),
                    'PublishDateTime' => date('y-m-d H:i:s'),
                    'ShortDescription' => 'Krótki opis 5',
                    'ContentHTML' => '<p>To jest długi opis 5.</p>',
                    'MetaDescription' => 'Opis meta 5',
                    'MetaTags' => 'tag1, tag2, tag3',
                    'Notes' => 'I co tu na pisać? Przydałby się generator, ale nie było czasu odpalać https://fakerphp.github.io/',
                    'IsActive' => false,
                ],
            ]);
        }
    }
