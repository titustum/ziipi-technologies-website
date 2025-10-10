<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'pages.home')->name('home');
Route::view('/welcome', 'livewire.pages.welcome')->name('welcome');
Volt::route('/about', 'pages.about')->name('about');
Volt::route('/contact', 'pages.contact')->name('contact');
Volt::route('/service/{slug}', 'pages.service')->name('service');
Volt::route('/services', 'pages.services')->name('services');
Volt::route('/team-members', 'pages.team-members')->name('team.members');
Volt::route('/case-studies', 'pages.case-studies')->name('case.studies');
Volt::route('/case-study/{slug}', 'pages.case-study')->name('case.study');
Volt::route('/success-stories', 'pages.success-stories')
    ->name('success.stories');
Volt::route('/create-success-story', 'pages.success-stories-create')
    ->name('create.success.story');
Volt::route('/vacancies', 'pages.vacancies')->name('vacancies');
Volt::route('/terms-and-conditions', 'pages.terms-and-conditions')->name('terms.conditions');

// // Optional:
// Volt::route('/admin/login', 'pages.admin-login')->name('admin.login');
