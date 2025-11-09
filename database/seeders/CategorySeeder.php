<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subject;
use App\Models\User;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get users for assignment (assuming users are seeded first)
        $ida = User::where('name', 'Ida')->first();
        $sabrina = User::where('name', 'Sabrina')->first();
        $john = User::where('name', 'John Doe')->first();
        $jane = User::where('name', 'Jane Smith')->first();
        $michael = User::where('name', 'Michael Johnson')->first();

        // Create Interactive Multimedia Category
        $interactiveMultimedia = Category::create([
            'name' => 'Interactive Multimedia'
        ]);

        // Create subjects for Interactive Multimedia
        Subject::create([
            'category_id' => $interactiveMultimedia->id,
            'user_id' => $sabrina->id,
            'name' => 'Human and Computer Interaction',
            'description' => 'Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan...'
        ]);

        Subject::create([
            'category_id' => $interactiveMultimedia->id,
            'user_id' => $jane->id,
            'name' => 'User Experience',
            'description' => 'User Experience (UX) adalah aspek penting dalam desain produk digital yang berfokus pada...'
        ]);

        Subject::create([
            'category_id' => $interactiveMultimedia->id,
            'user_id' => $michael->id,
            'name' => 'User Experience for Digital Immersive Technology',
            'description' => 'UX untuk teknologi imersif digital mencakup desain pengalaman untuk VR, AR, dan teknologi...'
        ]);

        // Create Software Engineering Category
        $softwareEngineering = Category::create([
            'name' => 'Software Engineering'
        ]);

        // Create subjects for Software Engineering
        Subject::create([
            'category_id' => $softwareEngineering->id,
            'user_id' => $ida->id,
            'name' => 'Pattern Software Design',
            'description' => 'Design patterns adalah solusi umum yang dapat digunakan kembali untuk masalah yang sering...'
        ]);

        Subject::create([
            'category_id' => $softwareEngineering->id,
            'user_id' => $john->id,
            'name' => 'Agile Software Development',
            'description' => 'Agile adalah metodologi pengembangan software yang menekankan fleksibilitas, kolaborasi...'
        ]);

        Subject::create([
            'category_id' => $softwareEngineering->id,
            'user_id' => $sabrina->id,
            'name' => 'Code Reengineering',
            'description' => 'Code reengineering adalah proses merestrukturisasi kode yang ada tanpa mengubah...'
        ]);
    }
}
