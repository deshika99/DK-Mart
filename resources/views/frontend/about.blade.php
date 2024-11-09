
<!DOCTYPE html>
<html lang="en" class="color-two font-exo">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> MarketPro - E-commerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="frontend/assets/images/logo/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <!-- select 2 -->
    <link rel="stylesheet" href="frontend/assets/css/select2.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="frontend/assets/css/slick.css">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="frontend/assets/css/jquery-ui.css">
    <!-- animate -->
    <link rel="stylesheet" href="frontend/assets/css/animate.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="frontend/assets/css/aos.css">
    <!-- Main css -->
    <link rel="stylesheet" href="frontend/assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style>
          .hero-section {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            margin-bottom: 40px;
            margin-top: 40px;
        }
        .hero-left {
            flex: 1;
            padding: 10px;
            text-align: left;
            animation: fadeIn 2s ease-in-out;
        }
        .hero-left h1, .hero-left h4 {
            margin: 0;
            color: #333;
            animation: slideIn 2s ease-out;
        }
        .hero-left h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #bd0f0f;
            font-family: georgia;
        }
        .hero-left h4 {
            font-size: 24px;
            margin-bottom: 20px;
            color: orange;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        .hero-right {
            flex: 2;
            padding: 20px;
            text-align: justify;
            background-color: #f9fafb;
        }
        .hero-right p {
            opacity: 0;

        }

        .mission-vision-section {
            display: flex;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            justify-content: space-between;
            margin-bottom: 50px;
            margin-top: 50px;
            text-align: center;
        }
        .box {
            flex: 1;
            padding: 20px;
            background-color: #fdf2f2; 
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .box h2 {
            margin-top: 0;
            color:  #bd0f0f;
            align: center;
            margin-bottom: 20px;
            position: relative;
            font-size: 1.5rem;
            font-family: georgia
        }
        .box p {
            color: #555;
            text-align: justify;
            line-height: 1.6;
        }

    .story-section {

    max-width: 1200px;
    margin: 0 auto;
    padding: 40px;
    text-align: center;
    background-color: #fdfdea;

}
.story-title {
    font-size: 14px;
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
    position: relative;
    font-size: 1.5rem;
    font-family: georgia;
}
.underline-curve {
    width: 80px;
    height: 4px;
    background-color: #bd0f0f;
    margin: 5px auto 10px;
    border-radius: 10px;
    position: relative;
}
.underline-curve::before{
    content: '';
    position: absolute;
    top: -3px;
    left: -10px;
    width: 100px;
    height: 10px;
    background-color:  #bd0f0f;
    border-radius: 20px;
    opacity: 0.5;
}
.story-content {
    display: flex;
    justify-content: center;
    text-align: left;
    max-width: 1200px;
}
.story-text {
    max-width: 1200px;
    column-width: 200px;
    column-count: 2;
    column-gap: 40px;
    font-size: 1rem;
    line-height: 1.6;
    color: #333;
    text-align: justify;
}
.team-section img {
    width: 100%;
    height: auto;
}

.values-section {
    text-align: center;
    padding: 40px;
    max-width: 1400px;
    height: auto;
    margin: 0 auto;   
}
.values-section h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
    position: relative;
    font-size: 1.5rem;
    font-family: georgia;
}
.values-container {
    display: flex;
    flex-wrap:wrap;
    justify-content: center;
    gap: 20px;   
}
.values-left {
    background-color: #2E1A4B;
    padding: 20px;
    color: white;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    
    
}
.values-item {
    display: flex;
    align-items: center;
    align-items: flex-start;
    text-align: justify;
    margin-bottom: 15px;
}
.values-item img {
    width: 40px;
    height: 40px;
    margin-right: 15px;
}
.values-item h3 {
    color: #c27803;
    font-size: 1.0rem;
    margin-bottom: 0;
    margin-top: 0;
}
.values-item p {
    margin-top: 0;
    margin-bottom: 0;
    color: white;
    text-align: justify;
    font-size: 0.8rem;
}
.values-right {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50%;
    height: auto;
    object-fit: cover;
    display: flex;
    align-items: stretch;
}
.values-right img {
    width: 100%;
    height: auto;
   }
         .promise-section {
            padding: 40px;
            text-align: center;
        }
        .promise-content {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }
        .promise-section h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            position: relative;
            font-size: 1.5rem;
            font-family: georgia;
        }
       .promise-content img {
            width: 100%;
            height: auto;
            object-fit: cover;
            flex: 1;
            display: flex;
            align-items: stretch;
        }
        .promise-text {
            background-color: #ff6700;
            color: white;
            padding: 20px;
            flex: 1;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .promise-item {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .promise-item i {
            font-size: 24px;
            margin-right: 10px;
        }

       
        .empowering-section {
            text-align: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .empowering-section h2 {
           font-size: 28px;
           color: #333;
           margin-bottom: 20px;
           font-weight: bold;
           position: relative;
           font-size: 1.5rem;
           font-family: georgia;
}

        
        .features-section {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            background-color: #f7f7f7;
        }

        .feature-item {
            text-align: center;
        }
        .feature-item p{
            color: black;
        }
        .feature-item i{
            font-size: 24px;
            margin-bottom: 10px;
        }

    

    @media (max-width: 1024px) {
        .hero-section h1 { font-size: 36px; }
        .hero-section p { font-size: 24px; }
        
    }
    @media (max-width: 768px) {
        .hero-section { padding: 80px 10px; }
        .hero-section h1 { font-size: 28px; }
        .hero-section p { font-size: 18px; }
    }

</style>
</head>
<body>
<header>
@include('includes.navbar-2')
</header>

<section class="hero-section">
        <div class="hero-left">
            <h1>Delivering happiness on the go!</h1>
            <h4>Happy Shopping</h4>
        </div>
        <div class="hero-right">
            <p><strong>
                Welcome to DK-Mart, your trusted e-commerce platform where quality, convenience, and affordability meet. We believe that shopping should be a straightforward, enjoyable experience, so we’ve crafted DK-Mart to bring you a world of products from diverse categories like electronics, fashion, home essentials, and more, all at your fingertips.
            </strong></p>
            <p>
                Founded with the customer in mind, DK-Mart aims to be more than just an online store. Our mission is to redefine the shopping experience by offering a curated selection of high-quality items from top brands and reliable suppliers. Every product in our catalog is carefully chosen to ensure that it meets our high standards for quality, durability, and value.
            </p>
           
            <p style="color: #771d1d;">Thank you for choosing DK-Mart. We’re excited to be your partner in fulfilling your shopping needs, and we look forward to delivering an exceptional online experience every time you visit!</p>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const heroText = document.querySelectorAll(".hero-right p");
            heroText.forEach((p, index) => {
                setTimeout(() => {
                    p.style.opacity = "1";
                }, index * 1000);
            });
        });
    </script>


<section class="story-section">
        <h2 class="story-title">Our Story</h2>
        
        <div class="story-content">
            <div class="story-text">
                <p>Launched in 2012, Daraz is South Asias premier online shopping marketplace with an active presence in Pakistan,
                     Bangladesh, Sri Lanka, Myanmar and Nepal.</p>
                <p>Supported by a wide range of tailored marketing, data, and service solutions, Daraz has 30,000 sellers and 500
                     brands and serves 5 million consumers across the region.</p>
                <p>Daraz has more than 2.5 million products to offer, growing at a very fast pace. Daraz offers a diverse
                     assortment in categories ranging from consumer electronics to household goods, beauty, fashion, sports
                      equipment, and groceries.</p>
                <p>Daraz is focused on providing an excellent customer experience, ease-of-purchase, comprehensive customer
                     care and a hassle-free shopping and returns experience.</p>
                <p>Daraz was acquired by Alibaba Group in May 2018.</p>
            </div>
        </div>
    </section>


<div class="container values-section">
    <h2>Our Values</h2>
    
    <div class="values-container">
        <div class="values-left">
            <div class="values-item">
                <img src="images/embrace-change.png" alt="images">
                <div>
                <h3>Embrace Change</h3>
                <p>We embrace and anticipate change. Change is growth, and growth is what drives us every day.</p>
                </div>
            </div>
            <div class="values-item">
                <img src="images/teamwork.png" alt="images">
                <div>
                <h3>Teamwork</h3>
                <p>We think as a team, work as a team, and grow as a team. The power of our team allows
                     ordinary people to achieve extraordinary things.</p></div>
            </div>
            <div class="values-item">
                <img src="images/customer.png" alt="images">
                <div>
                <h3>Customer Commitment</h3>
                <p>We believe in giving the best to our customers, sellers, and society.</p></div>
            </div>
            <div class="values-item">
                <img src="images/intergrity.png" alt="images">
                <div>
                <h3>Integrity</h3>
                <p>We treat our partners and each other with mutual respect and work with utmost honesty.</p></div>
            </div>
            <div class="values-item">
                <img src="images/ownership.png" alt="images">
                <div>
                <h3>Ownership</h3>
                <p>We know our priorities, and when we do something, we do it with focus and perseverance.</p></div>
            </div>
        </div>
        <div class="values-right">
        <img src="images/abt1.jpg" alt="images">
        </div>
    </div>
</div>

<section class="mission-vision-section">
        <div class="box">
            <h2>Our Mission</h2>
            
            <p>At DK-Mart, our mission is to empower our customers by providing an exceptional online shopping 
                experience through high-quality, affordable products and outstanding service. We are committed 
                to building a trusted platform where convenience, quality, and customer satisfaction come first,
                 ensuring that our customers can find everything they need in one place. We aim to foster
                 long-lasting relationships with our customers by continually improving our offerings and 
                 upholding our commitment to excellence.</p>
        </div>
        <div class="box">

            <h2>Our Vision</h2> 
            <p>Our vision is to become a leader in e-commerce by setting new standards in quality, affordability,
                 and customer experience. We aspire to be recognized not only for our wide range of products but 
                 also for our integrity, reliability, and innovation. Through continuous growth, expansion, and 
                 the adoption of cutting-edge technology, we aim to transform DK-Mart into a global destination 
                 for all online shopping needs, helping customers simplify their lives and make informed, 
                 satisfying choices.</p>
        </div>
    </section>

<section class="promise-section">
        <h2>Our Promise</h2>
        
        </div>
        <div class="promise-content">
            <img src="images/aboutus1.jpg" alt="images">
            <div class="promise-text">
                <div class="promise-item">
                    <i class="icon">📱</i>
                    <div>
                        <strong>Biggest Variety</strong><br>
                        We offer millions of products at a great value for our customers.
                    </div>
                </div>
                <div class="promise-item">
                    <i class="icon">💲</i>
                    <div>
                        <strong>Best Prices</strong><br>
                        We provide great value by offering competitive prices on all our products.
                    </div>
                </div>
                <div class="promise-item">
                    <i class="icon">⚡</i>
                    <div>
                        <strong>Ease & Speed</strong><br>
                        Download the app for a smooth shopping experience.
                    </div>
                </div>
                <div class="promise-item">
                    <i class="icon">🚚</i>
                    <div>
                        <strong>Fast Delivery</strong><br>
                        We aim to please our customers with fast delivery and easy tracking.
                    </div>
                </div>
                <div class="promise-item">
                    <i class="icon">🔒</i>
                    <div>
                        <strong>100% Protected</strong><br>
                        We provide 100% protection for your purchase from click to delivery.
                    </div>
                </div>
            </div>
        </div>
</section>

    
    <section class="empowering-section">
        <h2>Empowering Sellers on DK-Mart</h2>
        
        <p>Daraz puts utmost focus on empowering It's sellers, they form the backbone of our market place. 
            With our new and cutting edge systems we provide incredible 
            levels of control and ownership to our sellers so they can manage their shops effectirely and
             efficiently

        <p>From promotional and sales maximisation tools to order tracking, performance reports, real-time
             analytics and
            industry benchmarking, their growth is only limited by the effort and dedication they commit</p>

        <p>We are incredibly proud of the success stories that have emerged from our marketplace in the 
            past and actively 
            look forward to welcoming many more!</p>
    </section>

    <section class="features-section">
        <div class="feature-item">
            <i>✅</i>
            <p>Genuine Products</p>
        </div>
        <div class="feature-item">
            <i>💳</i>
            <p>Safe & Secure Payments</p>
        </div>
        <div class="feature-item">
            <i>🔄</i>
            <p>Free & Easy Return</p>
        </div>
    </section>
    
    @include('includes.footer')     
    <!-- Jquery js -->
    <script src="frontend/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="frontend/assets/js/boostrap.bundle.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="frontend/assets/js/phosphor-icon.js"></script>
    <!-- Select 2 -->
    <script src="frontend/assets/js/select2.min.js"></script>
    <!-- Slick js -->
    <script src="frontend/assets/js/slick.min.js"></script>
    <!-- Slick js -->
    <script src="frontend/assets/js/count-down.js"></script>
    <!-- jquery UI js -->
    <script src="frontend/assets/js/jquery-ui.js"></script>
    <!-- wow js -->
    <script src="frontend/assets/js/wow.min.js"></script>
    <!-- AOS Animation -->
    <script src="frontend/assets/js/aos.js"></script>
    <!-- marque -->
    <script src="frontend/assets/js/marque.min.js"></script>
    <!-- marque -->
    <script src="frontend/assets/js/vanilla-tilt.min.js"></script>
    <!-- Counter -->
    <script src="frontend/assets/js/counter.min.js"></script>
    <!-- main js -->
    <script src="frontend/assets/js/main.js"></script>

</body>
</html>
