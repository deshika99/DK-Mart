@extends ('frontend.master')

@section('content')


    <style>
  
        .hero-section {
    background-image: url('images/aboutus1.jpg');
    background-size: cover;
    color: white;
    background-position: center;
    background-repeat: no-repeat;
    text-align: center;
    padding: 100px 20px;
    height: 100vh;
    position: relative; /* Ensure relative positioning */
    display: flex; /* Use flexbox */
    flex-direction: column; /* Stack elements vertically */
    justify-content: center; /* Center vertically */
    align-items: center; /* Center horizontally */
}

.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); 
    z-index: 1000; /* This stays the same */
}

.hero-section h1 {
    font-size: 54px;
    color: white;
    z-index: 2; /* Adjust z-index for layering */
    font-family: 'Noteworthy';
    font-weight: bold;
    white-space: nowrap; 
    overflow: hidden; 
    border-right: 2px solid white;
    animation: typing 4s steps(30, end), blink 0.75s step-end infinite; 
    text-align: center; /* Center the text */
}

.hero-section p {
    font-size: 40px;
    color: white;
    z-index: 2; /* Adjust z-index for layering */
    font-family: 'Noteworthy';
    font-weight: bold;
    opacity: 0;
    animation: fadeIn 2s forwards 2s; /* Keep the animation */
    text-align: center; /* Center the text */
}

.story-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px;
    text-align: center;
}
.story-title {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
    position: relative;
    font-size: 2rem;
    font-family: georgia;
}
.underline-curve {
    width: 60px;
    height: 4px;
    background-color: #bd0f0f;
    margin: 5px auto 20px;
    border-radius: 10px;
    position: relative;
}
.underline-curve::before{
    content: '';
    position: absolute;
    top: -6px;
    left: -10px;
    width: 80px;
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
    margin: 0 auto;   
}
.values-section h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
    position: relative;
    font-size: 2rem;
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
    gap: 20px;
}
.values-item {
    display: flex;
    align-items: center;
    align-items: flex-start;
    text-align: justify;
}
.values-item img {
    width: 40px;
    height: 40px;
    margin-right: 15px;
}..
.values-item h3 {
    color: #FF6F00;
    
    margin-bottom: 10px;
}
.values-item p {
    margin-top: 0;
   
    color: white;
    text-align: justify;
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
            font-size: 2rem;
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
           font-size: 2rem;
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
   
    .hero-section h1 {
        font-size: 36px; 
    }
    
    .hero-section p {
        font-size: 24px; 
    }

   
    .values-container {
        flex-direction: column;
    }

    .values-right {
        width: 100%; 
    }

    .values-right img {
        width: 100%; 
        height: auto; 
    }
    
    .values-item h3 {
        font-size: 14px; 
    }

    .values-item p {
        font-size: 12px; 
    }

   
    .promise-content {
        flex-direction: column; 
    }

    .promise-text {
        padding: 10px; 
        font-size: 14px; 
    }

    
    .features-section {
        flex-direction: column;
        align-items: center;
    }

    .feature-item i {
        font-size: 20px;
    }

    .feature-item p {
        font-size: 14px;
    }
}


@media (max-width: 768px) {
    .hero-section {
        padding: 80px 10px;
    }

    .hero-section h1 {
        font-size: 28px;
    }

    .hero-section p {
        font-size: 18px;
    }

    .values-item img {
        width: 32px;
        height: 32px;
    }

    
    .story-title,
    .values-section h2,
    .promise-section h2,
    .empowering-section h2 {
        font-size: 24px;
    }

    .values-item p {
        font-size: 12px;
    }

    .promise-text {
        font-size: 12px;
    }

    .feature-item p {
        font-size: 12px;
    }
}
    </style>



<div class="hero-section">
    <h1>Delivering happiness on the go!</h1>
    <p>Happy Shopping</p>
</div>


<section class="story-section">
        <h2 class="story-title">Our Story</h2>
        <div class="underline-curve"></div>
        <div class="story-content">
            <div class="story-text">
                <p>Launched in 2012, Daraz is South Asias premier online shopping marketplace with an active presence in Pakistan, Bangladesh, Sri Lanka, Myanmar and Nepal.</p>
                <p>Supported by a wide range of tailored marketing, data, and service solutions, Daraz has 30,000 sellers and 500 brands and serves 5 million consumers across the region.</p>
                <p>Daraz has more than 2.5 million products to offer, growing at a very fast pace. Daraz offers a diverse assortment in categories ranging from consumer electronics to household goods, beauty, fashion, sports equipment, and groceries.</p>
                <p>Daraz is focused on providing an excellent customer experience, ease-of-purchase, comprehensive customer care and a hassle-free shopping and returns experience.</p>
                <p>Daraz was acquired by Alibaba Group in May 2018.</p>
            </div>
        </div>
    </section>

<div class="container values-section">
    <h2>Our Values</h2>
    <div class="underline-curve"></div>
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



<section class="promise-section">
        <h2>Our Promise</h2>
        <div class="underline-curve"></div>
        <div class="promise-content">
            <img src="images/twg.jpg" alt="images">
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
        <div class="underline-curve"></div>
        <p>Daraz puts utmost focus on empowering It's sellers, they form the backbone of our market place. 
            With our new and cutting edge systems we provide incredible 
            levels of control and ownership to our sellers so they can manage their shops effectirely and efficiently

        <p>From promotional and sales maximisation tools to order tracking, performance reports, real-time analytics and
            industry benchmarking, their growth is only limited by the effort and dedication they commit</p>

        <p>We are incredibly proud of the success stories that have emerged from our marketplace in the past and actively 
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

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const heroText = document.querySelector(".hero-section p");
        setTimeout(() => {
            heroText.style.opacity = "1";
        }, 4000); 
    });
</script>
@endsection