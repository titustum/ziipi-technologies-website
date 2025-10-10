<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudiesSeeder extends Seeder
{
    public function run()
    {
        CaseStudy::create([
            'name' => 'Revamping an E-Government Portal',
            'slug' => 'egov-portal',
            'photo' => 'case-studies/egov-portal.jpg',
            'short_desc' => 'Digitized citizen services for a regional government, reducing in-person visits by 60%.',
            'full_desc' => 'We helped a regional government agency digitize citizen services with a modern, mobile-responsive platform built on Laravel and Vue.js...',
            'banner_pic' => 'case-studies/egov-banner.jpg',
        ]);

        CaseStudy::create([
            'name' => 'AI Chatbot for Customer Support',
            'slug' => 'ai-chatbot',
            'photo' => 'case-studies/ai-chatbot.jpg',
            'short_desc' => 'Implemented AI chatbot that resolved 75% of queries automatically for a leading eCommerce startup.',
            'full_desc' => 'For a leading eCommerce startup, Ziipi implemented a natural language AI chatbot that improved customer satisfaction...',
            'banner_pic' => 'case-studies/ai-chatbot-banner.jpg',
        ]);
    }
}
