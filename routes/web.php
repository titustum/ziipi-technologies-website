<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Volt::route('/', 'pages.home')->name('home');
Route::view('/welcome', 'livewire.pages.welcome')->name('welcome');
Volt::route('/about', 'pages.about')->name('about');
Volt::route('/contact', 'pages.contact')->name('contact');
Volt::route('/services', 'pages.services')->name('services');
Volt::route('/solutions', 'pages.solutions')->name('solutions');
Volt::route('/team-members', 'pages.team-members')->name('team.members');
// Volt::route('/leadership', 'pages.leadership')->name('leadership');
Volt::route('/case-studies', 'pages.case-studies')->name('case.studies');
Volt::route('/sucess-stories', 'pages.success-stories')
    ->name('success.stories');
Volt::route('/create-success-story', 'pages.success-stories-create')
    ->name('create.success.story');
Volt::route('/vacancies', 'pages.vacancies')->name('vacancies');
Volt::route('/terms-and-conditions', 'pages.terms-and-conditions')->name('terms.conditions');

// // Optional:
// Volt::route('/admin/login', 'pages.admin-login')->name('admin.login');

    