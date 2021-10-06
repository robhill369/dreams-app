<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<!-- ## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
 -->

# Dreams App - Remi.

<h1>Idea</h1>

Remi is a blog-style website for journalling what you dream about every night. From using the site, data collected can one day be analysed in order to give SaaS customers deep-insight into how their mind works on a subconscious level. The more dreams they document, the more insightful their results.

<h1>Architecture</h1>

Built using Laravel 8 with tailwindCSS styling and AlpineJS components. Utilised Laravel Breeze for Authentication logic.

Routing - ensured that no custom resource actions have been defined; instead creating additional Controllers as necessary. Middleware for authentication applied when appropriate.

Blade components utilised heavily. Layout elements saved in 'navbar.blade.php'.

Includes the following features:

- Homepage with a sample of randomly-selected post excerpts.

- Paginated index of all posts on '/posts', with simple pagination applied on individual posts view ('/posts/{post:slug}) 

- Conditional tailwindcss classes used to colour the post headers based on their category. (Currently acheived through blade components and if-statements, so I feel this could be improved).

- User creation form with appropriate validation. Mutator used to capitalise first and last names upon posting. Includes DOB input to be verified through age verification process.

- Post creation form with categroy dropdown selction. Eloquent-sluggable package installed to auto-generate unique, URL-friendly slugs from the post title. Custom method used to save the first 255 characters of the body as an excerpt. Includes checkboxes to mark the post for public-viewing, and whether the post contains explicit content (soon to be used to filter the indexes on '/' and '/posts' URLs).

<h1>Installation</h1>

Laravel Sail used to contain MySQL and PHP. Please get in touch if further instructions are required.

<h1>To-do list</h1>

- Searchbar and category filter functionality, with subsequent post pagination relative to the latest search request.
- Indexed posts to be filtered to those only checked as 'public' in database.
- Navbar improvement - js dropdown required for authenticated users.
- Draft post functionality
- Post management - (edit, delete). Editting functionality to be enabled only for 24 hours after original publication, to allow accurate data-analysis to begin.
- Account management; (edit, delete).
- Admin control; index all authenticated users.
- Age and email verification logic. Indexed posts then filtered to show non-expletive content to under18s.
- Cleanup of views that haven't been used following the implementation of Breeze.
- Page footer markup and newsletter subscription functionality. 
