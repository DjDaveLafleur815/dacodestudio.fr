<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        Post::truncate(); // on vide la table avant d’insérer

        $posts = [
            [
                'title' => 'Créer un site professionnel avec Laravel',
                'slug' => Str::slug('Créer un site professionnel avec Laravel'),
                'excerpt' => 'Découvrez comment Laravel permet de concevoir des sites modernes, rapides et sécurisés pour vos projets professionnels.',
                'content' => "Laravel est l’un des frameworks PHP les plus puissants et élégants pour créer des sites web performants.
Chez D-A Code Studio, nous l’utilisons pour concevoir des sites vitrines, des applications sur mesure et des plateformes connectées.",
                'image' => '/images/blog-web.png',
            ],
            [
                'title' => 'Développer une application mobile connectée',
                'slug' => Str::slug('Développer une application mobile connectée'),
                'excerpt' => 'Les applications mobiles connectées transforment les interactions entre les utilisateurs et les objets. Voici comment nous les concevons.',
                'content' => "Les apps mobiles créées par D-A Code Studio sont pensées pour allier design, fluidité et connectivité.
Grâce à Flutter et React Native, nous créons des expériences cross-platform modernes et efficaces.",
                'image' => '/images/blog-mobile.png',
            ],
            [
                'title' => 'L’intelligence du bâtiment grâce à l’IoT',
                'slug' => Str::slug('L’intelligence du bâtiment grâce à l’IoT'),
                'excerpt' => 'L’Internet des Objets (IoT) permet d’automatiser, de surveiller et de contrôler vos bâtiments intelligemment.',
                'content' => "Nos solutions domotiques permettent de connecter vos appareils, gérer l’énergie et améliorer le confort de vos espaces.
Nous développons des dashboards web et mobiles pour piloter vos équipements depuis n’importe où.",
                'image' => '/images/blog-iot.png',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
