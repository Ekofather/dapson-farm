# Feyikemi Portfolio - WordPress Theme

A modern, professional, multi-page portfolio WordPress theme built for **Okebukola Oluwafeyikemi Mary**, Anti-Corruption & Governance Specialist. Features premium design, full responsiveness, and complete WordPress admin editability via the Customizer.

## Features

- **Premium Design**: Navy blue & gold professional aesthetic with smooth animations (AOS), modern typography (Playfair Display + Inter), and glassmorphism effects
- **Fully Responsive**: Mobile-first design optimized for all devices (desktop, tablet, mobile)
- **100% Admin Editable**: Every piece of content is editable from **Appearance > Customize > Portfolio Settings** — no code changes needed
- **Multi-Page Structure**: 7 distinct page templates covering every aspect of the portfolio
- **Contact Form**: Built-in AJAX contact form with email notifications
- **Typing Animation**: Dynamic role typing effect on the hero section
- **Counter Animations**: Animated statistics counters with intersection observer
- **Skill Progress Bars**: Animated skill bars with percentage indicators
- **Back to Top**: Smooth scroll-to-top button
- **Preloader**: Elegant loading animation
- **SEO Friendly**: Semantic HTML5 markup with proper heading hierarchy

## Pages & Templates

| Page | Template | Description |
|------|----------|-------------|
| Home | `front-page.php` | Hero with typing animation, about preview, expertise, experience timeline, achievements, CTA |
| About | `page-templates/about.php` | Full bio, personal info grid, training & professional development |
| Experience | `page-templates/experience.php` | Current role, responsibilities, national assignments, NYSC |
| Education | `page-templates/education.php` | Academic qualifications timeline (M.Sc, B.A, WAEC, Primary) |
| Skills | `page-templates/skills.php` | Animated skill bars + expertise area cards |
| Achievements | `page-templates/achievements.php` | Detailed achievement showcases with impact stats |
| Contact | `page-templates/contact.php` | Contact form + contact info + social links |

## Requirements

- WordPress 6.0+
- PHP 7.4+

## Installation

1. Download the theme as a zip file
2. Go to **WordPress Admin > Appearance > Themes > Add New > Upload Theme**
3. Upload the zip file and click **Install Now**
4. Activate the theme
5. Go to **Appearance > Portfolio Setup** and click:
   - **Create Pages** — creates all portfolio pages with correct templates
   - **Create Menu** — sets up the navigation menu
6. Go to **Settings > Reading** and set "Your homepage displays" to "A static page"
7. Customize all content in **Appearance > Customize > Portfolio Settings**

## Customizer Sections

All content is editable from **Appearance > Customize > Portfolio Settings**:

- **General Settings** — Navigation name, colors (primary/accent)
- **Hero Section** — Name, greeting, roles (typing animation), summary, buttons
- **Hero Statistics** — Numbers, suffixes, and labels for stat counters
- **About Section** — Photo, bio paragraphs, current role, languages
- **Contact Information** — Address, email, phone, form recipient
- **Social Media Links** — LinkedIn, Twitter, Facebook, Instagram
- **Expertise Section** — 6 expertise cards with icons, titles, descriptions
- **Experience Timeline** — 3 timeline entries with dates, roles, organizations
- **Skills** — 8 skills with names, levels (%), and icons
- **Achievements** — 4 achievements with icons, descriptions, stats
- **Call to Action** — CTA title, text, button
- **Footer Settings** — Footer name, description, copyright

## Theme Structure

```
feyikemi-portfolio/
├── assets/
│   ├── css/
│   │   ├── main.css           # Core styles (1600+ lines)
│   │   └── responsive.css     # Responsive breakpoints
│   ├── js/
│   │   └── main.js            # Frontend interactions
│   └── images/                # Theme images
├── inc/
│   ├── customizer.php         # 250+ Customizer settings
│   ├── template-tags.php      # Helper functions & fallback menus
│   └── theme-setup.php        # Admin setup page & auto page creation
├── page-templates/
│   ├── about.php
│   ├── experience.php
│   ├── education.php
│   ├── skills.php
│   ├── achievements.php
│   └── contact.php
├── front-page.php             # Homepage
├── header.php                 # Site header & navigation
├── footer.php                 # Site footer
├── index.php                  # Blog archive
├── single.php                 # Single post
├── page.php                   # Generic page
├── search.php                 # Search results
├── 404.php                    # 404 error page
├── functions.php              # Theme functions
├── style.css                  # Theme metadata
└── screenshot.png             # Theme screenshot
```

## License

GNU General Public License v2 or later
