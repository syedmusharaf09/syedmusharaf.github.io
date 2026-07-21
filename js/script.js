// ========================================
// NAVIGATION TOGGLE (Mobile)
// ========================================
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
    });
}

// Close menu when clicking a link
document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
        navToggle.classList.remove('active');
        navMenu.classList.remove('active');
    });
});

// ========================================
// NAVBAR SCROLL EFFECT
// ========================================
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// ========================================
// STATS COUNTER ANIMATION - FIXED
// ========================================
function animateStats() {
    const statNumbers = document.querySelectorAll('.stat-number');

    statNumbers.forEach(stat => {
        const target = parseFloat(stat.getAttribute('data-count'));
        const isFloat = target % 1 !== 0;
        let current = 0;
        const increment = target / 80;

        const counter = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(counter);
            }
            if (isFloat) {
                stat.textContent = current.toFixed(1);
            } else {
                stat.textContent = Math.floor(current);
            }
            // Add % sign for the last stat
            if (stat.getAttribute('data-count') === '100') {
                stat.textContent = Math.floor(current) + '%';
            }
        }, 25);
    });
}

// Run animation when page loads
document.addEventListener('DOMContentLoaded', function () {
    // Wait a moment then start animation
    setTimeout(animateStats, 500);
});

// Also run when the section comes into view (for refresh)
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Reset stats to 0 then animate
            document.querySelectorAll('.stat-number').forEach(stat => {
                if (stat.getAttribute('data-count') === '100') {
                    stat.textContent = '0%';
                } else {
                    stat.textContent = '0';
                }
            });
            animateStats();
            observer.disconnect();
        }
    });
}, { threshold: 0.3 });

// Observe the stats section
const heroStats = document.querySelector('.hero-stats');
if (heroStats) {
    observer.observe(heroStats);
}

// ========================================
// CURRENT YEAR IN FOOTER
// ========================================
const yearSpan = document.getElementById('currentYear');
if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
}

// ========================================
// CONTACT FORM HANDLING
// ========================================
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = contactForm.querySelector('input[type="text"]');
        const email = contactForm.querySelector('input[type="email"]');
        const subject = contactForm.querySelectorAll('input[type="text"]')[1];
        const message = contactForm.querySelector('textarea');

        if (name.value.trim() && email.value.trim() && subject.value.trim() && message.value.trim()) {
            const btn = contactForm.querySelector('.btn');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check-circle"></i> Message Sent!';
            btn.style.background = '#38a169';

            contactForm.reset();

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.style.background = '';
            }, 3000);
        } else {
            alert('Please fill in all fields.');
        }
    });
}

// ========================================
// SMOOTH SCROLL
// ========================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#') return;

        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
            const offset = 80;
            const targetPosition = target.offsetTop - offset;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// ========================================
// CONSOLE GREETING
// ========================================
console.log('%c 🚀 Syed Musharaf - HR & Finance Professional ', 'background: #0b3b5c; color: #fff; font-size: 18px; padding: 12px 20px; border-radius: 8px; font-weight: bold;');
console.log('%c 📧 sydmushara@936@gmail.com | 📞 +971 0564268547 ', 'background: #f7fafc; color: #0b3b5c; font-size: 14px; padding: 6px 14px; border-radius: 4px;');
console.log('%c 🔗 https://www.linkedin.com/in/syed-musharaf-56475a208 ', 'background: #e2e8f0; color: #2b6cb0; font-size: 13px; padding: 4px 12px; border-radius: 4px;');