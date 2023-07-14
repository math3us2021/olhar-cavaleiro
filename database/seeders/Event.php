<?php

    namespace Database\Seeders;

    use App\Models\Event as Events;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class Event extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            Events::create([
                'id' => 1,
                'title' => 'Cavalgada de Patrocinio',
                'city' => 'São Paulo',
                'private' => 1,
                'description' => 'Evento para desenvolvedores',
                'date' => '2023-10-10',
                'created_at' => '2023-10-10 10:10:10',
                'updated_at' => '2023-10-10 10:10:10',
                'items' => ['Palco'],
                'user_id' => 2,
            ]);
            Events::create([
                'id' => 2,
                'title' => '5° Corrida de Franca',
                'city' => 'San Francisco',
                'private' => 0,
                'description' => 'Conference for React enthusiasts',
                'date' => '2023-11-15',
                'created_at' => '2023-10-10 11:11:11',
                'updated_at' => '2023-10-10 11:11:11',
                'items' => ['Equipe de apoio, Palco'],
                'user_id' => 2,
            ]);

            Events::create([
                'id' => 3,
                'title' => 'Franca a Ibiraci',
                'city' => 'New York',
                'private' => 1,
                'description' => 'Summit for designers',
                'date' => '2023-12-05',
                'created_at' => '2023-10-10 12:12:12',
                'updated_at' => '2023-10-10 12:12:12',
                'items' => ['Equipe de apoio'],
                'user_id' => 3,
            ]);

            Events::create([
                'id' => 4,
                'title' => 'Cavalgada de Claraval',
                'city' => 'London',
                'private' => 0,
                'description' => 'Expo showcasing AI technologies',
                'date' => '2023-11-20',
                'created_at' => '2023-10-10 13:13:13',
                'updated_at' => '2023-10-10 13:13:13',
                'items' => ['Equipe de apoio'],
                'user_id' => 3,
            ]);

            Events::create([
                'id' => 5,
                'title' => 'Cavalgada de São Jorge',
                'city' => 'Berlin',
                'private' => 1,
                'description' => 'Summit for startups and entrepreneurs',
                'date' => '2023-12-10',
                'created_at' => '2023-10-10 14:14:14',
                'updated_at' => '2023-10-10 14:14:14',
                'items' => ['Equipe de apoio'],
                'user_id' => 1,
            ]);
        }
    }
