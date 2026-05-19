# Demola Bakare, FSI — Premium Portfolio & Institutional Website

A premium, modern, fully editable WordPress portfolio and institutional website for **Demola Bakare, FSI** — a nationally respected Nigerian anti-corruption advocate, pioneer officer of ICPC Nigeria, governance strategist, ethics trainer, public enlightenment expert, and institutional reform advocate.

Also serves as the digital platform for his NGO/consultancy institution:

## **Moral Rearmament Initiative for Ethical Leadership & Governance (MRI-ELG)**
*"Advancing Integrity, Accountability and Development-Minded Citizenship"*

---

## Features

- **Presidential-Level Branding**: Deep navy, rich gold, and burgundy color scheme with premium typography (Playfair Display + Inter)
- **Think Tank Sophistication**: Documentary-style storytelling with institutional credibility
- **9 Page Templates**: Home, About, MRI-ELG, Services, Speaking, Media, Gallery, Blog, Contact
- **4 Custom Post Types**: Testimonials, Engagements, Publications, Gallery Items
- **3 Custom Taxonomies**: Publication Types, Gallery Categories, Engagement Types
- **Full WordPress Customizer Integration**: All text, images, and settings editable via WP Admin
- **One-Click Demo Setup**: Admin panel for creating pages, menus, and setting the homepage
- **AJAX Contact Form**: Built-in contact form with email notifications
- **Newsletter System**: Built-in email subscription collection
- **Responsive Design**: Mobile-first, optimized for all devices
- **AOS Animations**: Smooth scroll-triggered animations throughout
- **Gallery with Lightbox**: Filterable photo gallery with fullscreen lightbox
- **Blog/Insights**: Full blogging system with sidebar, categories, sharing
- **SEO-Ready**: Semantic HTML, breadcrumbs, proper heading hierarchy

## Requirements

- WordPress 6.0+
- PHP 7.4+

## Installation

1. Download the theme zip file
2. Go to **WordPress Admin → Appearance → Themes → Add New → Upload Theme**
3. Upload the zip file and click **Install Now**
4. Activate the theme
5. Go to **Appearance → Theme Setup** to:
   - Click **Create Pages** to create all 9 pages with correct templates
   - Click **Create Menus** to set up navigation
   - Click **Set Homepage** to configure the front page
6. Go to **Appearance → Customize → Demola Bakare Settings** to edit:
   - General Information (email, phone, address)
   - Social Media Links
   - Hero Section content
   - About Section content
   - Footer Settings

## Theme Structure

```
demola-bakare-theme/
├── assets/
│   ├── css/
│   │   └── main.css              # Core styles (2800+ lines)
│   ├── js/
│   │   └── main.js               # Frontend interactions
│   └── images/                    # Theme images
├── inc/
│   ├── customizer.php            # WordPress Customizer settings
│   ├── custom-post-types.php     # CPTs, taxonomies, meta boxes
│   ├── template-tags.php         # Helper functions
│   └── demo-content.php          # Demo import functionality
├── page-templates/
│   ├── about.php                 # About/Biography page
│   ├── mri-elg.php               # MRI-ELG institutional page
│   ├── services.php              # Consultancy services page
│   ├── speaking.php              # Speaking engagements page
│   ├── media.php                 # Media & publications page
│   ├── gallery.php               # Photo gallery page
│   └── contact.php               # Contact page
├── template-parts/
│   └── content-none.php          # No content fallback
├── front-page.php                # Homepage
├── header.php                    # Site header & navigation
├── footer.php                    # Site footer
├── functions.php                 # Theme setup & functionality
├── index.php                     # Blog archive
├── single.php                    # Single post
├── archive.php                   # Archive template
├── page.php                      # Default page
├── search.php                    # Search results
├── 404.php                       # Error page
├── sidebar.php                   # Blog sidebar
├── comments.php                  # Comments template
├── style.css                     # Theme declaration
└── README.md
```

## Pages

| Page | Template | Description |
|------|----------|-------------|
| Home | front-page.php | Hero, about preview, expertise pillars, MRI-ELG preview, timeline, testimonials, insights, partners |
| About | about.php | Full biography, awards, philosophy, core values |
| MRI-ELG | mri-elg.php | Mission/vision, programs, values, institutional details |
| Services | services.php | 6 service areas, process, client types |
| Speaking | speaking.php | Speaking topics, past engagements, booking CTA |
| Media | media.php | Publications, media appearances, press coverage |
| Gallery | gallery.php | Filterable gallery with lightbox |
| Insights | index.php | Blog with sidebar |
| Contact | contact.php | AJAX form, contact info, social links |

## Customization

All content is fully editable through:
1. **WordPress Customizer** (Appearance → Customize → Demola Bakare Settings)
2. **Page Editor** (each page template renders content that can be modified)
3. **Custom Post Types** (Testimonials, Engagements, Publications, Gallery)
4. **WordPress Menus** (Appearance → Menus)
5. **Widgets** (Appearance → Widgets for sidebar and footer)

## Color Palette

| Color | Hex | Usage |
|-------|-----|-------|
| Deep Navy | #0B1D3A | Primary, headers, navigation |
| Rich Gold | #C9A84C | Accents, CTAs, highlights |
| Deep Burgundy | #6B1D2A | Secondary accent, footer CTA |
| Off-White | #F8F5F0 | Body background |
| Cream | #F0EBE3 | Section backgrounds |

## Credits

- **Fonts**: [Playfair Display](https://fonts.google.com/specimen/Playfair+Display), [Inter](https://fonts.google.com/specimen/Inter), [Cormorant Garamond](https://fonts.google.com/specimen/Cormorant+Garamond) via Google Fonts
- **Icons**: [Font Awesome 6](https://fontawesome.com/)
- **Animations**: [AOS - Animate On Scroll](https://michalsnik.github.io/aos/)

## License

GNU General Public License v2 or later
