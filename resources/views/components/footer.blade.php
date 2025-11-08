<style>
    .modern-footer {
        margin-top: 80px;
        position: relative;
    }

    .footer-main {
        background: linear-gradient(135deg, #1a1f5c 0%, #2d1b4e 50%, #1a1f5c 100%);
        padding: 60px 0 40px;
        position: relative;
        overflow: hidden;
    }

    .footer-main::before {
        content: '';
        position: absolute;
        top: -50px;
        left: 0;
        width: 100%;
        height: 100px;
        background: linear-gradient(135deg, #1a1f5c 0%, #2d1b4e 50%, #1a1f5c 100%);
        border-radius: 50% 50% 0 0 / 100% 100% 0 0;
        transform: scaleX(1.2);
    }

    .footer-main::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 20% 50%, rgba(100, 150, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(138, 43, 226, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .footer-content {
        position: relative;
        z-index: 2;
    }

    .footer-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 30px;
    }

    .footer-logo-wrapper {
        position: relative;
        width: 50px;
        height: 50px;
    }

    .footer-logo-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
    }

    .footer-logo-circle-1 {
        width: 40px;
        height: 40px;
        top: 0;
        left: 0;
        z-index: 2;
    }

    .footer-logo-circle-2 {
        width: 35px;
        height: 35px;
        top: 8px;
        left: 15px;
        z-index: 1;
        background: rgba(100, 150, 255, 0.3);
    }

    .footer-brand-text {
        font-size: 1.8rem;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: -0.02em;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .footer-columns {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-column h4 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-links a:hover {
        color: #ffffff;
        transform: translateX(4px);
        text-decoration: none;
    }

    .footer-bottom {
        background: #f5f5f5;
        padding: 20px 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .footer-bottom-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .footer-copyright {
        color: #666666;
        font-size: 0.9rem;
    }

    .footer-social {
        display: flex;
        gap: 16px;
        align-items: center;
    }

    .footer-social-icon {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666666;
        text-decoration: none;
        border-radius: 50%;
        transition: color 0.3s ease, background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        background: rgba(0, 0, 0, 0.05);
        will-change: transform;
        transform: translateZ(0);
    }

    .footer-social-icon:hover {
        color: #ffffff;
        background: linear-gradient(135deg, #1a1f5c 0%, #2d1b4e 100%);
        transform: translateY(-2px) translateZ(0);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        text-decoration: none;
    }

    .footer-social-icon svg {
        width: 18px;
        height: 18px;
    }

    @media (max-width: 768px) {
        .footer-main {
            padding: 50px 0 30px;
        }

        .footer-columns {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .footer-bottom-content {
            flex-direction: column;
            text-align: center;
        }

        .footer-copyright {
            order: 2;
        }

        .footer-social {
            order: 1;
        }
    }

    @media (max-width: 576px) {
        .footer-columns {
            grid-template-columns: 1fr;
            gap: 30px;
        }
    }
</style>

<footer class="modern-footer">
    <div class="footer-main">
        <div class="container footer-content">
            <div class="row">
                <div class="mb-4 col-lg-4 col-md-6 mb-lg-0">
                    <div class="footer-brand">
                        <div class="footer-logo-wrapper">
                            <div class="footer-logo-circle footer-logo-circle-1"></div>
                            <div class="footer-logo-circle footer-logo-circle-2"></div>
                        </div>
                        <span class="footer-brand-text">EduFun</span>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.8); line-height: 1.6; margin-top: 20px;">
                        Free IT education platform for students. Learn modern technologies including Interactive
                        Multimedia and Software Engineering.
                    </p>
                </div>

                <div class="col-lg-8">
                    <div class="footer-columns">
                        <div class="footer-column">
                            <h4>Explore</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('home.view') }}">Home</a></li>
                                <li><a href="{{ route('categories.view') }}">Categories</a></li>
                                <li><a href="{{ route('popular.view') }}">Popular Articles</a></li>
                                <li><a href="{{ route('writer.view') }}">Writers</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>Resources</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('aboutus.view') }}">About Us</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Learning Paths</a></li>
                                <li><a href="#">Community</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>Support</h4>
                            <ul class="footer-links">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="footer-copyright">
                    ⓒ 2025 EduFun | Paisal Tanjung | All Rights Reserved
                </div>
                <div class="footer-social">
                    <a href="https://github.com/paisaltanjung11" class="footer-social-icon" aria-label="GitHub"
                        target="_blank" rel="noopener noreferrer">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/paisaltanjung11/" class="footer-social-icon"
                        aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>