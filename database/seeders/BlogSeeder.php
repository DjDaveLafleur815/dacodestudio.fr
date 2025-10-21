<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        // ⚠️ On ne vide plus la table pour conserver les articles admin
        // Post::truncate();

        $posts = [
            [
                'title' => 'Créer un site professionnel avec Laravel',
                'slug' => Str::slug('Créer un site professionnel avec Laravel'),
                'excerpt' => 'Découvrez comment Laravel permet de concevoir des sites modernes, rapides et sécurisés pour vos projets professionnels.',
                'content' => "<p>Laravel est l’un des frameworks PHP les plus puissants et élégants pour créer des sites web performants.</p>
                <p>Chez <strong>D-A Code Studio</strong>, nous l’utilisons pour concevoir des sites vitrines, des applications sur mesure et des plateformes connectées.</p>",
                'image' => '/images/blog-web.png',
                'author' => 'D-A Code Studio',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Développer une application mobile connectée',
                'slug' => Str::slug('Développer une application mobile connectée'),
                'excerpt' => 'Les applications mobiles connectées transforment les interactions entre les utilisateurs et les objets. Voici comment nous les concevons.',
                'content' => "<p>Les apps mobiles créées par <strong>D-A Code Studio</strong> sont pensées pour allier design, fluidité et connectivité.</p>
                <p>Grâce à <strong>Flutter</strong> et <strong>React Native</strong>, nous concevons des expériences cross-platform modernes et efficaces.</p>",
                'image' => 'images/blog-mobile.png',
                'author' => 'D-A Code Studio',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'L’intelligence du bâtiment grâce à l’IoT',
                'slug' => Str::slug('L’intelligence du bâtiment grâce à l’IoT'),
                'excerpt' => 'L’Internet des Objets (IoT) permet d’automatiser, de surveiller et de contrôler vos bâtiments intelligemment.',
                'content' => "<p>Nos solutions domotiques permettent de connecter vos appareils, gérer l’énergie et améliorer le confort de vos espaces.</p>
                <p>Nous développons des dashboards web et mobiles pour piloter vos équipements depuis n’importe où.</p>",
                'image' => 'images/blog-iot.png',
                'author' => 'D-A Code Studio',
                'published_at' => now()->subDay(),
            ],
        ];

        // ✅ On ajoute uniquement si l’article n’existe pas déjà
        foreach ($posts as $post) {
            Post::firstOrCreate(
                ['slug' => $post['slug']], // condition d’unicité
                $post                       // contenu à insérer si non existant
            );
        }
    }
}
