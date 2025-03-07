# Migration

-   `php artisan make:migration create_project_assignment_table`
-   `php artisan make:migration create_project_grade`

# Model

-   `php artisan make:model ProjectGrade`

# Seeding

-   `php artisan make:seed ProjectGradeSeeder`

# Execute migration

-   `php artisan migrate`

# Execute seeding

-   `php artisan db:seed --class=RosterSeeder`
-   `php artisan db:seed --class=ProjectAssignmentSeeder`
-   `php artisan db:seed --class=ProjectGradeSeeder`

# After reset database

-   `php artisan db:seed --class=RosterSeeder; php artisan db:seed --class=ProjectAssignmentSeeder; php artisan db:seed --class=ProjectGradeSeeder`

# Reset

-   `php artisan app:db-reset`

# Guide

-   https://invariance.dev/2022-08-04-deploy-laravel-on-railway.html
