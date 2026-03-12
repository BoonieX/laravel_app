<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'identity' => [
            'name' => 'Minggu Studio',
            'role' => 'Creative Direction / Motion / Digital Portfolio',
            'location' => 'Bangkok, available worldwide',
            'intro' => 'Editorial portfolio systems for fashion, culture, and product stories that need atmosphere, clarity, and a sharper point of view.',
        ],
        'proofs' => [
            'Selected work, not every project',
            'One primary CTA, clear visual rhythm',
            'Built to scale into case studies later',
        ],
        'clients' => [
            'Aster Dept.',
            'Northbound',
            'Noro Studio',
            'Signal Goods',
            'Atelier Vale',
        ],
        'projects' => [
            [
                'index' => '01',
                'title' => 'Monsoon Signal',
                'category' => 'Campaign Film',
                'year' => '2026',
                'summary' => 'A fashion-led launch system with teaser cuts, still crops, and a motion language designed to hold tension.',
                'impact' => 'Direction, edit pacing, launch toolkit',
                'image' => 'images/portfolio/project-monsoon.svg',
                'image_alt' => 'Dummy editorial poster for Monsoon Signal',
                'featured' => true,
            ],
            [
                'index' => '02',
                'title' => 'Rooms With Echo',
                'category' => 'Brand Narrative',
                'year' => '2025',
                'summary' => 'Architecture, quiet movement, and product framing arranged like a slow gallery walkthrough.',
                'impact' => 'Film concept, visual system',
                'image' => 'images/portfolio/project-echo.svg',
                'image_alt' => 'Dummy architectural portfolio image for Rooms With Echo',
                'featured' => false,
            ],
            [
                'index' => '03',
                'title' => 'After Silk',
                'category' => 'Launch Identity',
                'year' => '2025',
                'summary' => 'A visual rollout built around typography, warm contrast, and a product story that feels tactile.',
                'impact' => 'Art direction, social rollout',
                'image' => 'images/portfolio/project-silk.svg',
                'image_alt' => 'Dummy warm-toned campaign image for After Silk',
                'featured' => false,
            ],
        ],
        'services' => [
            'Creative direction and concept development',
            'Fashion, culture, and product campaign films',
            'Portfolio sites and narrative landing pages',
            'Motion language, pacing, and post-production oversight',
        ],
        'stats' => [
            ['value' => '12', 'label' => 'Selected releases'],
            ['value' => '07', 'label' => 'Long-term collaborators'],
            ['value' => '03', 'label' => 'Case-study ready systems'],
        ],
        'process' => [
            [
                'title' => 'Frame the story',
                'copy' => 'Start with one clear promise, a defined mood, and a shortlist of references that actually support the work.',
            ],
            [
                'title' => 'Design the rhythm',
                'copy' => 'Build hierarchy with type, spacing, contrast, and image pacing so the page scans cleanly before it tries to impress.',
            ],
            [
                'title' => 'Extend the system',
                'copy' => 'Turn the landing page into reusable project templates, launch assets, and follow-on case studies without redoing the visual language.',
            ],
        ],
        'testimonial' => [
            'quote' => 'The strongest portfolio pages feel edited, not crowded. Every section earns its place and every image supports the same story.',
            'author' => 'Studio Note',
            'role' => 'Dummy testimonial / best-practice placeholder',
        ],
        'contact' => [
            'email' => 'hello@minggustudio.com',
            'instagram' => 'instagram.com/minggustudio',
            'vimeo' => 'vimeo.com/minggustudio',
        ],
    ]);
});
