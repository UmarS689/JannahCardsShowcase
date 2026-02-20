# Jannah Cards

A full-stack web-based invitation muslim card designer built with Laravel, Fabric.js, and TailwindCSS.  
Users can create custom wedding cards using images, text, borders, calligraphy, and more.

---
## Author
Umar S
https://github.com/UmarS689


## Why I built this

I created this project to improve my skills in PHP, Laravel, and SQL, while building something meaningful for the Muslim community. I wanted a project that wasn’t just technical practice, but something that reflected my culture and could genuinely help people design beautiful, personalised wedding invitations.
At the same time, I used this project as a platform to grow professionally. 
The features I included are all skills that employers consistently look for. Ultimately, this project was a passion project and a way to demonstrate my commitment to becoming a stronger, more well‑rounded developer.

## Future Plans
- Moving graphics and shapes.
- More formats for saving canvas files.
- External file storage system for user uploaded images. Potentially AWS
- Hosting (probably DigitalOcean)
- Payment system (potentially PayPal)
- Export a library of graphics for commercial use.


## New Features 20/02/2026
- 'Cards' page has fully functioning cards that users can click on for it to overwrite their existing canva designs. 
- Popularity feature added to keep track of most popular cards (based on how many people have used it to override their current designs).
- Home page updated to have a working existing canvas design for users to have a taster of the canvas UI. Aesthetics of the landing page also improved. 
- New card designs added as templates.
- 'Cards' page has a filter based on category and a sorting filter based on dates and popularity.
- Personalised wedding website CTA added to the footer for users to register interest.


## Features

- Drag-and-drop card editor  
- Addition of images, text, borders, and decorative elements  
- Custom fonts and calligraphy  
- Real-time canvas editing with Fabric.js  
- Export final designs to pdf and submit to gallery
- Clean, modern UI  
- Dark Mode
- Mobile-friendly
- Login and registration system
- Fully functionable contact form and email system
- Custom element classes for unique elements with functioning tailored toolbars for each element
- Docker for containerisation and modern deployment workflows.
- GitHub Actions for  CI/CD pipelines
- Guest list function for users to keep track of who to invite to the wedding.
---


## Screenshots

### Landing Page
![Landing Page - Hero](public/landing-hero.png)
Landing page with the interactive hero.

![Landing Page - Populars](public/landing-popular.png)
Landing page showing the three most popular design.

### Cards Page
![Card Page - Unfiltered](public/cards-unfiltered.png)
Card page without any filters added.

![Card Page - Arches Only](public/cards-arches.png)
Card page with Arches category.

![Card Page - Sorted](public/cards-sorted.png)
Card page sorted by popularity.

![Card Page - Warning](public/cards-overide.png)
Clicking on a design warns the user that their existing design will be overridden.

![Card/Canvas Page - Overridden](public/canvas-overridden.png)
Existing canvas overridden with template.

### Canvas Designer
![Designer Page - Light](public/canvas-light.png)
Canvas in light mode with sample elements.
![Designer Page - Dark](public/canvas-dark.png)
Canvas in dark mode with sample elements.
![Designer Page - PDF Export](public/pdf.png)
Outputted pdf file.

### Fonts
![Font Edit](public/font-edit.png)
Custom toolbar for fonts.
![Font Options](public/font-options.png)
Showing all font lists (using a function which grabs all file names and then outputs and formats them).
![Font Layer](public/font-effect.png)
Showing the effect of using the toolbar as well as the ordering buttons.

### Mobile Friendly
![Mobile Canvas](public/mobile-canvas.png)
The canvas on a mobile phone.
![Mobile Guest](public/mobile-guest.png)
The guest list on a mobile phone.
![Mobile Account](public/mobile-account.png)
The account page on a mobile phone.

### Elements
![Element Page](public/element-bar.png)
The element tab on the canvas.
![Calligraphy Added](public/calligraphy.png)
The calligraphy image on the canvas.

### Login
![Login Page - Light](public/login-light.png)
Functioning login page.
![Login Page - Dark](public/login-dark.png)
Functioning dark mode login page.
![Login Page - Incorrect](public/login-incorrect.png)
Incorrect login.

### Register
![Register Page - Dark](public/register-dark.png)
Functioning registration page.

### Contact Us
![Contact Us Page - Light](public/contact-light.png)
Contact page - light version.
![Contact Us Page - Dark](public/contact-dark.png)
Contact page - dark version.

### My Account
![Account Page - Overview](public/myAccount-overview.png)

![Account Page - Interactive](public/myAccount-interactive.png)

---
## Tech Stack

- **Laravel 10**
- **Fabric.js**
- **TailwindCSS**
- **MySQL**
- **Docker**
- **GitHub Actions (CI)**

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
