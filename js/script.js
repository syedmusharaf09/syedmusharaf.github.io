// ========================================
// NAVIGATION TOGGLE
// ========================================
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');

if (navToggle) {
    navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('active');
        navLinks.classList.toggle('active');
    });
}

document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        navToggle.classList.remove('active');
        navLinks.classList.remove('active');
    });
});

// ========================================
// NAVBAR SCROLL EFFECT
// ========================================
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.style.borderBottom = '1px solid rgba(79, 195, 247, 0.2)';
    } else {
        navbar.style.borderBottom = '1px solid var(--border-color)';
    }
});

// ========================================
// CURRENT YEAR
// ========================================
document.getElementById('year').textContent = new Date().getFullYear();

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
            window.scrollTo({
                top: target.offsetTop - offset,
                behavior: 'smooth'
            });
        }
    });
});

// ========================================
// CONTACT FORM
// ========================================
const contactForm = document.querySelector('.contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = contactForm.querySelector('.btn-primary');
        const originalText = btn.innerHTML;
        btn.innerHTML = '✓ Message Sent!';
        btn.style.background = '#4caf50';
        contactForm.reset();
        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.style.background = '';
        }, 3000);
    });
}

// ========================================
// CONSOLE GREETING
// ========================================
console.log('%c 🚀 Syed Musharaf - HR & Finance Professional ', 'background: #0a1628; color: #4fc3f7; font-size: 16px; padding: 10px 20px; border-radius: 8px; font-weight: bold;');
console.log('%c 📧 sydmushara@936@gmail.com | 📞 +971 0564268547 ', 'background: #111d35; color: #e8eaf6; font-size: 13px; padding: 6px 14px; border-radius: 4px;');