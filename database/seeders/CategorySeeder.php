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
            'description' => 'Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan komputer dan sejauh mana teknologi dikembangkan untuk berinteraksi dengan manusia secara efektif. HCI melibatkan desain, evaluasi, dan implementasi sistem komputer interaktif untuk digunakan oleh manusia. Bidang ini menggabungkan berbagai disiplin ilmu seperti ilmu komputer, psikologi, desain, dan ergonomi untuk menciptakan antarmuka yang user-friendly dan efisien.',
            'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=640&h=480&fit=crop',
        ]);

        Subject::create([
            'category_id' => $interactiveMultimedia->id,
            'user_id' => $jane->id,
            'name' => 'User Experience',
            'description' => 'User Experience (UX) adalah aspek penting dalam desain produk digital yang berfokus pada pengalaman keseluruhan pengguna saat berinteraksi dengan produk atau layanan. UX mencakup semua aspek interaksi pengguna dengan perusahaan, layanan, dan produknya. Tujuan utama UX adalah membuat produk yang memberikan pengalaman yang bermakna dan relevan kepada pengguna, dengan mempertimbangkan aspek usability, accessibility, dan pleasure dalam interaksi produk.',
            'image_url' => 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?w=640&h=480&fit=crop',
        ]);

        Subject::create([
            'category_id' => $interactiveMultimedia->id,
            'user_id' => $michael->id,
            'name' => 'User Experience for Digital Immersive Technology',
            'description' => 'UX untuk teknologi imersif digital mencakup desain pengalaman untuk Virtual Reality (VR), Augmented Reality (AR), dan Mixed Reality (MR). Teknologi imersif menghadirkan tantangan unik dalam desain UX karena melibatkan pengalaman tiga dimensi yang lebih kompleks. Desainer harus mempertimbangkan faktor seperti motion sickness, spatial awareness, dan interaksi natural untuk menciptakan pengalaman yang nyaman dan intuitif dalam lingkungan virtual atau augmented.',
            'image_url' => 'https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?w=640&h=480&fit=crop',
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
            'description' => 'Design patterns adalah solusi umum yang dapat digunakan kembali untuk masalah yang sering muncul dalam desain perangkat lunak. Pattern ini merupakan template yang telah terbukti efektif untuk menyelesaikan masalah desain yang umum. Dengan menggunakan design patterns, developer dapat menulis kode yang lebih maintainable, scalable, dan mudah dipahami. Beberapa pattern yang populer termasuk Singleton, Factory, Observer, dan Strategy pattern.',
            'image_url' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=640&h=480&fit=crop',
        ]);

        Subject::create([
            'category_id' => $softwareEngineering->id,
            'user_id' => $john->id,
            'name' => 'Agile Software Development',
            'description' => 'Agile adalah metodologi pengembangan software yang menekankan fleksibilitas, kolaborasi, dan respons cepat terhadap perubahan. Metodologi Agile melibatkan iterasi pengembangan yang pendek (sprint), komunikasi konstan dengan stakeholder, dan kemampuan untuk beradaptasi dengan requirement yang berubah. Pendekatan ini berbeda dengan waterfall tradisional yang lebih kaku dan linear. Agile telah menjadi standar industri karena kemampuannya menghasilkan software berkualitas tinggi dengan lebih cepat.',
            'image_url' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=640&h=480&fit=crop',
        ]);

        Subject::create([
            'category_id' => $softwareEngineering->id,
            'user_id' => $sabrina->id,
            'name' => 'Code Reengineering',
            'description' => 'Code reengineering adalah proses merestrukturisasi kode yang ada tanpa mengubah fungsionalitas eksternalnya. Tujuannya adalah meningkatkan readability, maintainability, dan performance dari kode legacy. Proses ini melibatkan refactoring, optimization, dan modernisasi teknologi yang digunakan. Code reengineering penting untuk menjaga agar software tetap relevant dan mudah dikembangkan seiring waktu, terutama untuk aplikasi yang sudah berusia lama namun masih aktif digunakan.',
            'image_url' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=640&h=480&fit=crop',
        ]);
    }
}
