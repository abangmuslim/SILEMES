<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeederSilemes extends Seeder
{
    public function run(): void
    {
        /*
        |------------------------------------------------------------------
        | ROLES
        |------------------------------------------------------------------
        */
        $roles = ['admin','staff','teacher'];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $roleIds = DB::table('roles')->pluck('id', 'name');

        /*
        |------------------------------------------------------------------
        | USERS (10 DATA)
        |------------------------------------------------------------------
        */
        for ($i = 1; $i <= 10; $i++) {

            $role = $i == 1 ? 'admin' : ($i <= 3 ? 'staff' : 'teacher');

            $userId = DB::table('users')->insertGetId([
                'name' => ucfirst($role) . " {$i}",
                'email' => strtolower($role) . "{$i}@silemes.com",
                'password' => Hash::make('password'),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('role_user')->insert([
                'user_id' => $userId,
                'role_id' => $roleIds[$role],
            ]);
        }

        /*
        |------------------------------------------------------------------
        | ADDRESS (10 DATA)
        |------------------------------------------------------------------
        */
        $addressIds = [];

        for ($i = 1; $i <= 10; $i++) {
            $addressIds[] = DB::table('addresses')->insertGetId([
                'street' => "Jl. Pendidikan {$i}",
                'village' => "Desa {$i}",
                'district' => "Kecamatan {$i}",
                'regency' => "Kota Medan",
                'province' => "Sumatera Utara",
                'postal_code' => "2011{$i}",
                'country' => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        /*
        |------------------------------------------------------------------
        | INSTITUTIONS (10 DATA)
        |------------------------------------------------------------------
        */
        $institutionIds = [];

        for ($i = 1; $i <= 10; $i++) {
            $institutionIds[] = DB::table('institutions')->insertGetId([
                'name' => "SILEMES Academy {$i}",
                'type' => 'course',
                'address_id' => $addressIds[$i-1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        /*
        |------------------------------------------------------------------
        | PROGRAMS (10 DATA)
        |------------------------------------------------------------------
        */
        $programIds = [];

        for ($i = 1; $i <= 10; $i++) {
            $programIds[] = DB::table('programs')->insertGetId([
                'institution_id' => $institutionIds[$i-1],
                'name' => "Program {$i}",
                'type' => 'course',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        /*
        |------------------------------------------------------------------
        | CLASSES (10 DATA)
        |------------------------------------------------------------------
        */
        $classIds = [];

        foreach ($programIds as $i => $programId) {
            $classIds[] = DB::table('classes')->insertGetId([
                'program_id' => $programId,
                'name' => "Batch " . ($i + 1),
                'year' => date('Y'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        /*
        |------------------------------------------------------------------
        | STUDENTS + ACCOUNTS (10 DATA)
        |------------------------------------------------------------------
        */
        $studentIds = [];

        for ($i = 1; $i <= 10; $i++) {

            $studentId = DB::table('students')->insertGetId([
                'name' => "Student {$i}",
                'nis' => "SIS" . str_pad($i, 3, '0', STR_PAD_LEFT),
                'gender' => 'male',
                'address_id' => $addressIds[$i-1],
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('student_accounts')->insert([
                'student_id' => $studentId,
                'email' => "student{$i}@silemes.com",
                'password' => Hash::make('password'),
                'status' => 'active',
                'last_login' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $studentIds[] = $studentId;
        }

        /*
        |------------------------------------------------------------------
        | ENROLLMENTS (10 DATA)
        |------------------------------------------------------------------
        */
        $enrollmentIds = [];

        foreach ($studentIds as $i => $studentId) {
            $enrollmentIds[] = DB::table('enrollments')->insertGetId([
                'student_id' => $studentId,
                'program_id' => $programIds[$i],
                'class_id' => $classIds[$i],
                'status' => 'active',
                'start_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        /*
        |------------------------------------------------------------------
        | COURSES (10 DATA)
        |------------------------------------------------------------------
        */
        $courseIds = [];

        foreach ($programIds as $i => $programId) {
            $courseIds[] = DB::table('courses')->insertGetId([
                'program_id' => $programId,
                'title' => "Course {$i}",
                'description' => "Deskripsi Course {$i}",
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        /*
        |------------------------------------------------------------------
        | MODULES + LESSONS (10x2)
        |------------------------------------------------------------------
        */
        $lessonIds = [];

        foreach ($courseIds as $courseId) {

            $moduleId = DB::table('modules')->insertGetId([
                'course_id' => $courseId,
                'title' => 'Module Intro',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            for ($i = 1; $i <= 2; $i++) {
                $lessonIds[] = DB::table('lessons')->insertGetId([
                    'module_id' => $moduleId,
                    'title' => "Lesson {$i}",
                    'content' => "Materi {$i}",
                    'order' => $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        /*
        |------------------------------------------------------------------
        | PROGRESS
        |------------------------------------------------------------------
        */
        foreach ($enrollmentIds as $enrollmentId) {
            foreach ($lessonIds as $lessonId) {
                DB::table('progress')->insert([
                    'enrollment_id' => $enrollmentId,
                    'lesson_id' => $lessonId,
                    'status' => 'completed',
                    'completed_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        /*
        |------------------------------------------------------------------
        | CBT (10 EXAMS)
        |------------------------------------------------------------------
        */
        foreach ($programIds as $i => $programId) {

            $examId = DB::table('exams')->insertGetId([
                'program_id' => $programId,
                'course_id' => $courseIds[$i],
                'title' => "Exam {$i}",
                'type' => 'final',
                'duration' => 60,
                'total_score' => 100,
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $questionId = DB::table('questions')->insertGetId([
                'exam_id' => $examId,
                'question_text' => "Soal {$i}",
                'type' => 'mcq',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('options')->insert([
                ['question_id' => $questionId, 'option_text' => 'A', 'is_correct' => true],
                ['question_id' => $questionId, 'option_text' => 'B', 'is_correct' => false],
                ['question_id' => $questionId, 'option_text' => 'C', 'is_correct' => false],
                ['question_id' => $questionId, 'option_text' => 'D', 'is_correct' => false],
            ]);

            foreach ($enrollmentIds as $enrollmentId) {
                DB::table('attempts')->insert([
                    'enrollment_id' => $enrollmentId,
                    'exam_id' => $examId,
                    'status' => 'submitted',
                    'score' => rand(60, 100),
                    'started_at' => now(),
                    'finished_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}