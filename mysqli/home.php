<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethical Hackers | Bug Bounty & Pentesting</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0e0f13;
            color: #e0e0e0;
            overflow-x: hidden;
        }

        canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }

        nav.navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: rgba(20, 20, 20, 0.9);
            box-shadow: 0 4px 12px #00000055;
            position: fixed;
            width: 100%;
            z-index: 10;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #00e6e6;
            text-shadow: 0 0 8px #00e6e6aa;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links li a:hover {
            color: #00e6e6;
        }

        section {
            max-width: 1200px;
            margin: auto;
            padding: 120px 20px 80px;
        }

        h1,
        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #00e6e6;
            text-shadow: 0 0 12px #00e6e677;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            justify-content: center;
        }

        .feature {
            background: #1c1e22;
            padding: 24px;
            border-radius: 12px;
            width: 260px;
            box-shadow: 0 0 12px #00e6e633;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: scale(1.05);
            box-shadow: 0 0 24px #00e6e666;
        }

        .cta {
            text-align: center;
            margin-top: 40px;
        }

        .cta-btn {
            padding: 14px 40px;
            background: linear-gradient(to right, #00e6e6, #2b5876);
            color: #0e0f13;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cta-btn:hover {
            transform: scale(1.1);
            background: linear-gradient(to left, #2b5876, #00e6e6);
        }

        .testimonials,
        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .testimonial {
            background: #1a1c20;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            box-shadow: 0 0 12px #4e437688;
            text-align: center;
        }

        .contact-item {
            font-size: 1.1rem;
        }

        .contact-item a {
            color: #00e6e6;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <canvas id="canvas-bg"></canvas>

    <nav class="navbar">
        <div class="nav-logo">Ethical Hackers</div>
        <ul class="nav-links">
            <li><a href="#services">Services</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1>Bug Bounty & Ethical Hacking</h1>
        <h2>Modern security solutions for your business. Find vulnerabilities before attackers do.</h2>
        <div class="features">
            <div class="feature"><strong>Vulnerability Assessment</strong><br>Scan and report flaws.</div>
            <div class="feature"><strong>Penetration Testing</strong><br>Simulate real attacks.</div>
            <div class="feature"><strong>Bug Bounty Programs</strong><br>Incentivize secure systems.</div>
            <div class="feature"><strong>Training</strong><br>Educate your team.</div>
        </div>
        <div class="cta">
            <button class="cta-btn" onclick="location.href='index.php'">Get Started</button>
        </div>
    </section>

    <section id="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonials">
            <div class="testimonial">"The team found vulnerabilities others missed. Highly recommended!"<br>- Alex, CTO at FinTechPro</div>
            <div class="testimonial">"Professional and thorough. Our bug bounty program is now a success!"<br>- Priya, HealthSecure</div>
            <div class="testimonial">"Great consulting and training. Our staff is now more security-aware."<br>- John, WebWorks</div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <div class="contact-item"><strong>Email:</strong> <a href="mailto:nottanishqbhandari@gmail.com">nottanishqbhandari@gmail.com</a></div>
            <div class="contact-item"><strong>Discord:</strong> Tanishq</div>
            <div class="contact-item"><strong>GitHub:</strong> <a href="https://github.com/Tanishq49" target="_blank">Tanishq49</a></div>
        </div>
    </section>

    <script>
        const canvas = document.getElementById('canvas-bg');
        const ctx = canvas.getContext('2d');
        let w = window.innerWidth,
            h = window.innerHeight;
        canvas.width = w;
        canvas.height = h;

        const colors = ['#00e6e6', '#4e4376', '#2b5876'];
        const particles = Array.from({
            length: 80
        }, () => ({
            x: Math.random() * w,
            y: Math.random() * h,
            dx: (Math.random() - 0.5) * 1,
            dy: (Math.random() - 0.5) * 1,
            r: Math.random() * 3 + 1,
            color: colors[Math.floor(Math.random() * colors.length)]
        }));

        function draw() {
            ctx.clearRect(0, 0, w, h);
            for (let p of particles) {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = p.color;
                ctx.shadowBlur = 10;
                ctx.shadowColor = p.color;
                ctx.fill();
            }
        }

        function update() {
            for (let p of particles) {
                p.x += p.dx;
                p.y += p.dy;
                if (p.x < 0 || p.x > w) p.dx *= -1;
                if (p.y < 0 || p.y > h) p.dy *= -1;
            }
        }

        function animate() {
            draw();
            update();
            requestAnimationFrame(animate);
        }
        animate();

        window.addEventListener('resize', () => {
            w = window.innerWidth;
            h = window.innerHeight;
            canvas.width = w;
            canvas.height = h;
        });
    </script>
</body>

</html>