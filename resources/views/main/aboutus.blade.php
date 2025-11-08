@extends('layouts.master')
@section('content')
    <style>
        .aboutus-page {
            min-height: 100vh;
            background: linear-gradient(135deg, #0a0e3a 0%, #1a1f5c 25%, #2d1b4e 50%, #1a1f5c 75%, #0a0e3a 100%);
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .aboutus-page::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(100, 150, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(138, 43, 226, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: 1;
        }

        .aboutus-hero {
            position: relative;
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 60px;
        }

        .aboutus-hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset("images/hero.png") }}') center/cover no-repeat;
            opacity: 0.4;
            filter: brightness(0.6) contrast(1.2);
        }

        .aboutus-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(10, 14, 58, 0.85) 0%, rgba(26, 31, 92, 0.75) 50%, rgba(45, 27, 78, 0.85) 100%);
        }

        .aboutus-hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            padding: 80px 20px;
        }

        .aboutus-hero-title {
            font-size: 4.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
            letter-spacing: -0.02em;
        }

        .aboutus-hero-subtitle {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 0 1px 10px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            margin: 0 auto;
        }

        .aboutus-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px 80px;
        }

        .aboutus-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 50px 80px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            will-change: transform;
            transform: translateZ(0);
            contain: layout style paint;
        }

        .aboutus-text-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            align-items: start;
        }

        .aboutus-text {
            font-size: 1.05rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.7;
            text-align: left;
            margin: 0;
        }

        @media (max-width: 992px) {
            .aboutus-hero {
                min-height: 50vh;
            }

            .aboutus-hero-title {
                font-size: 3.5rem;
            }

            .aboutus-hero-subtitle {
                font-size: 1.2rem;
            }

            .aboutus-text-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .aboutus-card {
                padding: 40px 50px;
            }
        }

        @media (max-width: 768px) {
            .aboutus-hero {
                min-height: 40vh;
                margin-bottom: 40px;
            }

            .aboutus-hero-title {
                font-size: 2.5rem;
            }

            .aboutus-hero-subtitle {
                font-size: 1rem;
            }

            .aboutus-hero-content {
                padding: 60px 20px;
            }

            .aboutus-card {
                padding: 40px 30px;
            }

            .aboutus-text {
                font-size: 1rem;
            }

            .aboutus-content {
                max-width: 100%;
                padding: 0 15px 60px;
            }
        }
    </style>

    <div class="aboutus-page">
        <!-- Hero Section with Image -->
        <div class="aboutus-hero">
            <div class="aboutus-hero-background"></div>
            <div class="aboutus-hero-overlay"></div>
            <div class="container">
                <div class="aboutus-hero-content">
                    <h1 class="aboutus-hero-title">About EduFun</h1>
                    <p class="aboutus-hero-subtitle">Empowering learners through innovative education</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="aboutus-content">
                <div class="aboutus-card">
                    <div class="aboutus-text-container">
                        <p class="aboutus-text">
                            Welcome to EduFun — a learning platform built to make education feel engaging, accessible, and
                            meaningful for
                            everyone. At EduFun, we believe that learning should never be dull or intimidating. Instead, it
                            should spark
                            curiosity, encourage exploration, and empower people to grow at their own pace. Our goal is to
                            create an
                            environment where knowledge becomes enjoyable, where complex ideas feel easier to understand,
                            and
                            where learners
                            of all backgrounds feel supported throughout their journey.
                        </p>

                        <p class="aboutus-text">
                            EduFun was founded with the ambition to bridge the gap between traditional education and the
                            opportunities
                            offered by the digital world. Our team of educators, designers, and technology enthusiasts work
                            together to
                            develop learning experiences that are intuitive, modern, and deeply immersive. Every course we
                            create is shaped
                            with careful attention — blending clear guidance, interactive elements, and real-world relevance
                            to
                            help learners
                            build confidence while mastering new skills or strengthening existing ones.
                        </p>

                        <p class="aboutus-text">
                            As we continue to grow, our commitment remains the same: to provide a platform where learning
                            feels
                            dynamic and
                            adaptable to the needs of each individual. Whether you're exploring a new subject, advancing
                            your
                            career skills, or simply following your curiosity, EduFun aims to be a trusted companion in your
                            personal and professional development.
                        </p>

                        <p class="aboutus-text">
                            Together, we hope to inspire a future where education is not only effective, but also genuinely
                            fun.
                            Our platform combines innovative teaching methods with cutting-edge technology to deliver
                            content that
                            resonates with modern learners. We're constantly evolving to meet the changing needs of our
                            community, ensuring that every learning experience is both meaningful and enjoyable.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection