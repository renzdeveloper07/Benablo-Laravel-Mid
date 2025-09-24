<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew & Bean Coffee House</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #8B4513;
            --secondary: #D2B48C;
            --accent: #A0522D;
            --light: #F5F5DC;
            --dark: #3C2A21;
            --text: #3C2A21;
            --background: #FFF8F0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--background);
            color: var(--text);
            line-height: 1.6;
        }
        
        header {
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
            color: var(--secondary);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: var(--secondary);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://placeholder-image-service.onrender.com/image/1200x600?prompt=A%20cozy%20coffee%20shop%20interior%20with%20wooden%20tables%20and%20steaming%20coffee%20cups&id=hero-1') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 2rem;
        }
        
        .hero-content {
            max-width: 800px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .section-title {
            text-align: center;
            margin: 4rem 0 2rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .menu-section {
            padding: 4rem 0;
            background-color: var(--light);
        }
        
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .menu-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .menu-item:hover {
            transform: translateY(-5px);
        }
        
        .menu-img {
            height: 200px;
            overflow: hidden;
        }
        
        .menu-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .menu-item:hover .menu-img img {
            transform: scale(1.1);
        }
        
        .menu-content {
            padding: 1.5rem;
        }
        
        .menu-item h3 {
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .menu-item p {
            color: #666;
            margin-bottom: 1rem;
        }
        
        .price {
            font-weight: bold;
            color: var(--primary);
            font-size: 1.2rem;
        }
        
        .about-section {
            padding: 4rem 0;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 3rem;
        }
        
        .about-img {
            flex: 1;
            min-width: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .about-img img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-text h2 {
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .about-text p {
            margin-bottom: 1rem;
        }
        
        .testimonials {
            background-color: var(--light);
            padding: 4rem 0;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .testimonial {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .testimonial::before {
            content: '\201C';
            font-size: 4rem;
            color: var(--primary);
            position: absolute;
            top: -10px;
            left: 10px;
            opacity: 0.2;
        }
        
        .testimonial p {
            margin-bottom: 1rem;
            font-style: italic;
        }
        
        .testimonial .author {
            font-weight: bold;
            color: var(--dark);
        }
        
        .contact-section {
            padding: 4rem 0;
        }
        
        .contact-content {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-info h3 {
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .contact-detail {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .contact-detail i {
            width: 40px;
            height: 40px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }
        
        .hours {
            margin-top: 2rem;
        }
        
        .hours h4 {
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .hours p {
            margin-bottom: 0.5rem;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section {
            flex: 1;
            min-width: 250px;
        }
        
        .footer-section h3 {
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--secondary);
        }
        
        .footer-section p {
            margin-bottom: 1rem;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            margin-right: 1rem;
            text-align: center;
            line-height: 40px;
            transition: background-color 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links ul li a:hover {
            color: var(--secondary);
        }
        
        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            
            nav ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--primary);
                flex-direction: column;
                padding: 1rem 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }
            
            nav ul.show {
                display: flex;
            }
            
            nav ul li {
                margin: 0.5rem 0;
                text-align: center;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-coffee"></i>
                    StarBucks
                </div>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Experience the Perfect Cup of Coffee</h1>
            <p>Handcrafted with premium beans and served with passion</p>
            <a href="data:image/jpeg;base64,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" class="btn">View Our Menu</a>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="menu-section" id="menu">
        <div class="container">
            <h2 class="section-title">Our Menu</h2>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-img">
                        <img src="data:image/jpeg;base64,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" alt="Artisan espresso in a white ceramic cup with latte art">
                    </div>
                    <div class="menu-content">
                        <h3>Matcha Latte</h3>
                        <p>Our signature espresso made from freshly ground premium beans</p>
                        <span class="price">85</span>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-img">
                        <img src="data:image/jpeg;base64,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" alt="Cappuccino with perfect foam and chocolate sprinkles">
                    </div>
                    <div class="menu-content">
                        <h3>Cappuccino</h3>
                        <p>Perfectly balanced espresso with steamed milk and a thick layer of foam</p>
                        <span class="price">150 pesos</span>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-img">
                        <img src="data:image/jpeg;base64,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" alt="Cold brew coffee in a clear glass with ice cubes">
                    </div>
                    <div class="menu-content">
                        <h3>Java Chips</h3>
                        <p>Slow-steeped for 24 hours for a smooth, rich flavor</p>
                        <span class="price">99 Pesos</span>
                    </div>
                </div>
                
                <div class="menu-item">
                    <div class="menu-img">
                        <img src="data:image/jpeg;base64,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" alt="Matcha latte in a ceramic bowl with whisk">
                    </div>
                    <div class="menu-content">
                        <h3>Taro    </h3>
                        <p>Premium ceremonial grade matcha whisked with steamed milk</p>
                        <span class="price">200 Pesos</span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="section-title">Our Story</h2>
            <div class="about-content">
                <div class="about-img">
                    <img src="data:image/png;base64,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" alt="Barista preparing coffee in a modern coffee shop">
                </div>
                <div class="about-text">
                    <h2>Brewing Excellence Since 2010</h2>
                    <p>Founded by two coffee enthusiasts who traveled the world to find the perfect beans, Brew & Bean brings you exceptional coffee experiences right in your neighborhood.</p>
                    <p>We source our beans directly from sustainable farms and roast them in small batches to ensure maximum freshness and flavor.</p>
                    <p>Our trained baristas craft each cup with precision and care, making your coffee experience something to remember.</p>
                    <a href="#contact" class="btn">Visit Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial">
                    <p>"The best coffee I've had in this city! The atmosphere is cozy and the staff is super friendly."</p>
                    <div class="author">CEO (Benablo Renz Boy M.)</div>
                </div>
                
                <div class="testimonial">
                    <p>"I'm a coffee connoisseur and Brew & Bean never disappoints. Their cold brew is exceptional!"</p>
                    <div class="author">shawn michael borromeo</div>
                </div>
                
                <div class="testimonial">
                    <p>"The perfect place to work or catch up with friends. Great coffee and even better vibes."</p>
                    <div class="author">Props (Nikki Devaras)</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Visit Us</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <div class="contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>123 Coffee Lane, Brewtown, BT 12345</p>
                    </div>
                    <div class="contact-detail">
                        <i class="fas fa-phone"></i>
                        <p>(555) 123-4567</p>
                    </div>
                    <div class="contact-detail">
                        <i class="fas fa-envelope"></i>
                        <p>info@brewandbean.com</p>
                    </div>
                    
                    <div class="hours">
                        <h4>Opening Hours</h4>
                        <p>Monday - Friday: 7am - 8pm</p>
                        <p>Saturday - Sunday: 8am - 9pm</p>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Brew & Bean</h3>
                    <p>Experience the art of coffee in every cup we serve.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <div class="footer-links">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Coffee Lane, Brewtown</p>
                    <p><i class="fas fa-phone"></i> (555) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@brewandbean.com</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Brew & Bean Coffee House. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuBtn = document.querySelector('.mobile-menu-btn');
        const nav = document.querySelector('nav ul');
        
        menuBtn.addEventListener('click', () => {
            nav.classList.toggle('show');
        });
        
        // Close menu when clicking on a link
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('show');
            });
        });
    </script>
</body>
</html>
