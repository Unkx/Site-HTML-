Hi! 
Arcade Game Store is a web application built with PHP and MySQL, developed in 2024 as one of my earliest projects.
The app features a fictional retro game shop where users can explore video game history, browse and purchase collector's edition items, and enjoy a built-in Memory game.

Collector's Shop — a small PHP/HTML/CSS demo e-commerce site that showcases a session-based shopping cart, product listing, and simple checkout flow.
Key Features:

Session-managed cart with add/remove/clear actions and popover cart UI.
Product pages and simple catalog in index.php (products loaded via fetch_item.php).
Cart actions handled by action.php; cart details via fetch_cart.php.
Basic checkout flow and payment integration placeholders (order_process.php, payment.php, Stripe library included under stripe_vendor).
Responsive layout and shared header/footer with styling in styles.css; pages include Strona Główna.html, historia.html, memory.html, koszyk.html.
Uses jQuery and Bootstrap for UI interactions.
Tech Stack:

PHP (server-side), HTML, CSS, JavaScript (jQuery), Bootstrap, Stripe PHP SDK (vendor files included).
Quick Start:

Ensure PHP is installed. From project root run:
then open http://localhost:8000 in your browser.
Or deploy to an Apache/Nginx + PHP environment.
Configure Stripe/API keys before using real payments (edit payment.php/Stripe config).
If the app uses a database, update database_connection.php with credentials.
Notes / Next Steps:

Replace demo product data with your catalog or connect a database.
Secure server-side input and session handling before public deployment.
Update footer/branding text as needed (currently "Collector's shop ® 2024").
