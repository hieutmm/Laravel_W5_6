<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        
        $this->call([
            
            CompaniesSeender::class,
            TrainersSeender::class,
            CategoriesSeender::class,
            ClassHasCourseSeeder::class,
            ClassSeeder::class,
            CommentSeeder::class,
            CourseSeeder::class,
            FacultySeeder::class,
            IntershipDiaryWeekSeeder::class,
            DiaryDayOfWeekSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            CategoriesHasCompaniesSeender::class,
            GroupsHasPermissionsSeender::class,
            GroupsSeender::class,
            PermissionsSeender::class,
            UserHasGroupsSeender::class,
            UserHasPermissionsSeender::class,
            UserSeender::class,
          ]);
    }
}
