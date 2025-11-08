<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articles;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all existing articles first to avoid duplicates
        Articles::query()->delete();

        $articles = [
            // Category 1 - Interactive Multimedia (Author: Paisal Tanjung, ID: 1)
            [
                'title' => 'Human and Computer Interaction (HCI)',
                'desc' => 'Human-Computer Interaction (HCI) represents a multidisciplinary field that examines the design and use of computer technology, focusing on the interfaces between humans and computers. This domain integrates principles from computer science, cognitive psychology, design, and ergonomics to create intuitive and efficient user interfaces. HCI researchers investigate how users interact with technology, analyzing factors such as usability, accessibility, and user satisfaction to improve the overall computing experience. The field has evolved significantly from command-line interfaces to modern touch-based and gesture-controlled systems, emphasizing the importance of understanding human capabilities and limitations in technological design.',
                'date' => '2025-11-08',
                'cat_id' => 1,
                'au_id' => 1
            ],
            [
                'title' => 'User Experience (UX)',
                'desc' => 'User Experience (UX) design encompasses the entire process of creating products that provide meaningful and relevant experiences to users. This comprehensive approach involves the design of the entire process of acquiring and integrating the product, including aspects of branding, design, usability, and function. UX designers employ various research methods, including user interviews, surveys, and usability testing, to understand user needs and behaviors. The ultimate goal of UX design is to create products that are not only functional and usable but also delightful and emotionally engaging, ensuring that users can achieve their objectives efficiently while enjoying the interaction process.',
                'date' => '2025-11-08',
                'cat_id' => 1,
                'au_id' => 1
            ],
            [
                'title' => 'User Experience for Digital Immersive Technology',
                'desc' => 'User Experience for Digital Immersive Technology explores the unique challenges and opportunities presented by virtual reality (VR), augmented reality (AR), and mixed reality (MR) environments. These immersive technologies require designers to reconsider traditional UX principles, as users interact with three-dimensional spaces rather than flat screens. Key considerations include spatial awareness, motion sickness prevention, natural interaction methods, and maintaining user presence within virtual environments. Designers must balance technological capabilities with human perceptual limitations, creating experiences that feel intuitive and comfortable while pushing the boundaries of what is possible in digital interaction.',
                'date' => '2025-11-08',
                'cat_id' => 1,
                'au_id' => 1
            ],
            // Category 2 - Software Engineering (Author: Yachae, ID: 2)
            [
                'title' => 'Pattern Software Design',
                'desc' => 'Software Design Patterns represent reusable solutions to commonly occurring problems in software design, providing a template for solving issues in a particular context. These patterns, first cataloged in the Gang of Four book, include creational patterns like Singleton and Factory, structural patterns such as Adapter and Decorator, and behavioral patterns like Observer and Strategy. Understanding design patterns enables developers to write more maintainable, scalable, and efficient code by leveraging proven solutions rather than reinventing the wheel. Mastery of design patterns is essential for creating robust software architectures that can adapt to changing requirements while maintaining code quality and reducing development time.',
                'date' => '2025-11-08',
                'cat_id' => 2,
                'au_id' => 2
            ],
            [
                'title' => 'Agile Software Development',
                'desc' => 'Agile Software Development represents a set of methodologies that emphasize iterative development, collaboration, and responsiveness to change throughout the software development lifecycle. Unlike traditional waterfall approaches, Agile methods such as Scrum, Kanban, and Extreme Programming break projects into small, manageable increments called sprints, allowing teams to deliver working software frequently. Core principles include customer collaboration over contract negotiation, responding to change over following a plan, and valuing individuals and interactions over processes and tools. This approach enables development teams to adapt quickly to changing requirements, improve communication, and deliver higher quality software that better meets user needs.',
                'date' => '2025-11-08',
                'cat_id' => 2,
                'au_id' => 2
            ],
            [
                'title' => 'Code Reengineering',
                'desc' => 'Code Reengineering involves the systematic transformation of existing software systems to improve their structure, maintainability, and performance without changing their external behavior. This process addresses technical debt accumulated over time due to quick fixes, changing requirements, or evolving best practices. Reengineering activities include refactoring code to improve readability, restructuring modules to enhance cohesion and reduce coupling, and modernizing legacy systems to align with current technologies and standards. Effective reengineering requires careful analysis of the existing codebase, understanding business requirements, and implementing changes incrementally to minimize risk while maximizing the benefits of improved code quality and system architecture.',
                'date' => '2025-11-08',
                'cat_id' => 2,
                'au_id' => 2
            ]
        ];

        foreach ($articles as $article) {
            Articles::create($article);
        }
    }
}
