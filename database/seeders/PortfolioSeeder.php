<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Aditya Dwi Saputra',
            'email' => 'aditya@gmail.com',
            'password' => Hash::make('password')
        ]);

        Profile::create([
            'user_id' => $user->id,
            'username' => 'aditya',
            'photo_profile' => 'profile.jpg',
            'short_bio' => 'Web Developer',
            'professional_vision' => 'Menjadi Fullstack Developer',
            'mission' => 'Membangun aplikasi bermanfaat',
            'location' => 'Bandung',
            'date_of_birth' => '2007-01-01'
        ]);

        Skill::insert([
            ['user_id'=>$user->id,'skill_name'=>'Laravel','proficiency_level'=>'Advanced','category'=>'Backend'],
            ['user_id'=>$user->id,'skill_name'=>'PHP','proficiency_level'=>'Advanced','category'=>'Programming'],
            ['user_id'=>$user->id,'skill_name'=>'MySQL','proficiency_level'=>'Intermediate','category'=>'Database'],
            ['user_id'=>$user->id,'skill_name'=>'Bootstrap','proficiency_level'=>'Intermediate','category'=>'Frontend'],
            ['user_id'=>$user->id,'skill_name'=>'Git','proficiency_level'=>'Intermediate','category'=>'Tools']
        ]);

        Experience::insert([
            [
                'user_id'=>$user->id,
                'position_title'=>'Web Developer',
                'organization_name'=>'ABC Company',
                'start_date'=>'2024-01-01',
                'end_date'=>'2024-12-31',
                'is_current'=>false,
                'description'=>'Membangun aplikasi web'
            ],
            [
                'user_id'=>$user->id,
                'position_title'=>'Frontend Developer',
                'organization_name'=>'XYZ Studio',
                'start_date'=>'2023-01-01',
                'end_date'=>'2023-12-31',
                'is_current'=>false,
                'description'=>'Membuat UI responsif'
            ],
            [
                'user_id'=>$user->id,
                'position_title'=>'Freelancer',
                'organization_name'=>'Self Employed',
                'start_date'=>'2025-01-01',
                'end_date'=>null,
                'is_current'=>true,
                'description'=>'Mengerjakan project freelance'
            ]
        ]);

        Contact::insert([
            [
                'user_id'=>$user->id,
                'contact_type'=>'Email',
                'contact_value'=>'aditya@gmail.com',
                'is_public'=>true
            ],
            [
                'user_id'=>$user->id,
                'contact_type'=>'WhatsApp',
                'contact_value'=>'08123456789',
                'is_public'=>true
            ],
            [
                'user_id'=>$user->id,
                'contact_type'=>'Instagram',
                'contact_value'=>'@aditya',
                'is_public'=>true
            ]
        ]);

        Project::insert([
            [
                'user_id'=>$user->id,
                'project_title'=>'Sistem POS',
                'project_type'=>'Web App',
                'client_name'=>'Internal',
                'role'=>'Fullstack Developer',
                'start_date'=>'2025-01-01',
                'end_date'=>null,
                'is_ongoing'=>true,
                'description'=>'Aplikasi kasir',
                'technologies'=>'Laravel, Bootstrap',
                'project_url'=>null,
                'github_url'=>'https://github.com',
                'thumbnail'=>'project1.jpg'
            ],
            [
                'user_id'=>$user->id,
                'project_title'=>'Portfolio Website',
                'project_type'=>'Website',
                'client_name'=>'Personal',
                'role'=>'Developer',
                'start_date'=>'2024-01-01',
                'end_date'=>'2024-06-01',
                'is_ongoing'=>false,
                'description'=>'Website portfolio',
                'technologies'=>'Laravel',
                'project_url'=>null,
                'github_url'=>'https://github.com',
                'thumbnail'=>'project2.jpg'
            ],
            [
                'user_id'=>$user->id,
                'project_title'=>'E-Learning',
                'project_type'=>'Web App',
                'client_name'=>'Sekolah',
                'role'=>'Backend Developer',
                'start_date'=>'2024-06-01',
                'end_date'=>'2024-12-01',
                'is_ongoing'=>false,
                'description'=>'Platform belajar online',
                'technologies'=>'Laravel, MySQL',
                'project_url'=>null,
                'github_url'=>'https://github.com',
                'thumbnail'=>'project3.jpg'
            ]
        ]);
    }
}