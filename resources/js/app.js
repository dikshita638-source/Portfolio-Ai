import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50,
        delay: 0,
        anchorPlacement: 'top-bottom',
    });

    // Loading Screen
    const loadingScreen = document.getElementById('loading-screen');
    if (loadingScreen) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                loadingScreen.classList.add('loaded');
            }, 800);
        });
        setTimeout(() => {
            loadingScreen.classList.add('loaded');
        }, 2500);
    }

    // Scroll Progress Bar
    const scrollProgress = document.getElementById('scroll-progress');
    if (scrollProgress) {
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = (scrollTop / docHeight) * 100;
            scrollProgress.style.width = `${progress}%`;
        });
    }

    // Back to Top Button
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.remove('opacity-0', 'translate-y-4');
                backToTop.classList.add('opacity-100', 'translate-y-0');
            } else {
                backToTop.classList.add('opacity-0', 'translate-y-4');
                backToTop.classList.remove('opacity-100', 'translate-y-0');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Cursor Glow Effect
    const cursorGlow = document.getElementById('cursor-glow');
    if (cursorGlow && window.innerWidth > 768) {
        let mouseX = 0, mouseY = 0;
        let currentX = 0, currentY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursorGlow.style.opacity = '1';
        });

        document.addEventListener('mouseleave', () => {
            cursorGlow.style.opacity = '0';
        });

        function animateCursor() {
            currentX += (mouseX - currentX) * 0.08;
            currentY += (mouseY - currentY) * 0.08;
            cursorGlow.style.left = `${currentX}px`;
            cursorGlow.style.top = `${currentY}px`;
            requestAnimationFrame(animateCursor);
        }
        animateCursor();
    }

    // Typing Effect
    const typedTextElement = document.getElementById('typed-text');
    if (typedTextElement) {
        const texts = [
            'Cyber Security Student',
            'Java Developer',
            'Web Developer',
            'AI Enthusiast',
            'Problem Solver',
        ];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingSpeed = 80;

        function type() {
            const currentText = texts[textIndex];

            if (isDeleting) {
                typedTextElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;
                typingSpeed = 40;
            } else {
                typedTextElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;
                typingSpeed = 80;
            }

            if (!isDeleting && charIndex === currentText.length) {
                typingSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length;
                typingSpeed = 500;
            }

            setTimeout(type, typingSpeed);
        }

        setTimeout(type, 1000);
    }

    // Skill Progress Animation
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const progressBars = entry.target.querySelectorAll('.skill-progress');
                progressBars.forEach((bar) => {
                    const width = bar.getAttribute('data-width');
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 200);
                });
                skillObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    const skillsSection = document.getElementById('skills');
    if (skillsSection) {
        skillObserver.observe(skillsSection);
    }

    // Counter Animation
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.counter');
                counters.forEach((counter) => {
                    const target = parseFloat(counter.getAttribute('data-target'));
                    const isFloat = target % 1 !== 0;
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;

                    const updateCounter = () => {
                        current += step;
                        if (current < target) {
                            counter.textContent = isFloat ? current.toFixed(1) : Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = isFloat ? target.toFixed(1) : target;
                        }
                    };
                    updateCounter();
                });
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    const achievementsSection = document.getElementById('achievements');
    if (achievementsSection) {
        counterObserver.observe(achievementsSection);
    }

    // Particle Canvas
    const canvas = document.getElementById('particles-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        let animationId;

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        class Particle {
            constructor() {
                this.reset();
            }

            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = (Math.random() - 0.5) * 0.5;
                this.speedY = (Math.random() - 0.5) * 0.5;
                this.opacity = Math.random() * 0.5 + 0.1;
                this.pulse = Math.random() * Math.PI * 2;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                this.pulse += 0.02;
                this.opacity = 0.1 + Math.sin(this.pulse) * 0.2;

                if (this.x < 0 || this.x > canvas.width ||
                    this.y < 0 || this.y > canvas.height) {
                    this.reset();
                }
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(139, 92, 246, ${this.opacity})`;
                ctx.fill();
            }
        }

        const particleCount = Math.min(60, Math.floor(window.innerWidth / 25));
        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }

        function connectParticles() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < 150) {
                        const opacity = (1 - dist / 150) * 0.1;
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(139, 92, 246, ${opacity})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            connectParticles();
            animationId = requestAnimationFrame(animateParticles);
        }

        animateParticles();

        // Pause particles when not visible
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                cancelAnimationFrame(animationId);
            } else {
                animateParticles();
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth',
                });
            }
        });
    });

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const currentScroll = window.scrollY;
            if (currentScroll > 100) {
                navbar.style.background = 'rgba(2, 6, 23, 0.85)';
                navbar.style.backdropFilter = 'blur(20px)';
                navbar.style.WebkitBackdropFilter = 'blur(20px)';
                navbar.style.borderBottom = '1px solid rgba(255, 255, 255, 0.05)';
            } else {
                navbar.style.background = 'transparent';
                navbar.style.backdropFilter = 'none';
                navbar.style.WebkitBackdropFilter = 'none';
                navbar.style.borderBottom = 'none';
            }
            lastScroll = currentScroll;
        });
    }
});

// Project Modal Functions
function openProjectModal(index) {
    const modal = document.getElementById(`project-modal-${index}`);
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('project-modal-show');
        document.body.style.overflow = 'hidden';
    }
}

function closeProjectModal(index) {
    const modal = document.getElementById(`project-modal-${index}`);
    if (modal) {
        modal.classList.remove('project-modal-show');
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
}

// Close modal on Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.querySelectorAll('[id^="project-modal-"]').forEach(modal => {
            if (!modal.classList.contains('hidden')) {
                modal.classList.remove('project-modal-show');
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });
    }
});
