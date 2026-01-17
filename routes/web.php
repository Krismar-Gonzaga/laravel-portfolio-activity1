<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function(){
    $name = 'Krismar C. Gonzaga';
    $course = 'Batchelor of Science in Information Technology';
    $university = 'Central Mindanao University';

    return view('about', [
        'name' => $name,
        'course' => $course,
        'university' => $university
    ]);
})->name('about');


Route::get('/projects', function () {
    $projects = [
        ['title' => 'Web Development', 'description' => 'A full-featured church management system with member tracking, event planning, and donation management.'],
        ['title' => 'Spreadsheet to Web Application', 'description' => 'Turn complex spreadsheets into sleek, automated web apps.'],
        ['title' => 'Mobile To_Do_List App', 'description' => 'A cross-platform To_Do_List application with Task tracking, meal planning, and Priority management'],
    ];

    return view('projects', [
        'projects' => $projects
        ]);

})->name('projects');



Route::get('contact', function(){
    $email = 'krismargonz@gmail.com';
    $phone = '+69 936 429 4702';

    return view('contact',[
        'email' => $email,
        'phone' => $phone
    ]);
})->name('contact');