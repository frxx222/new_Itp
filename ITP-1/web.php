<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Tourism Guide</title>
</head>

<body>
    <main id="header">
        <nav>
            <h1>DUQUE TOUR GUIDE</h1>
            <div class="nav-links">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#tour">Discover</a></li>
                    <li><a href="#contact">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </main>
    <!-- slides -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="main-page/img/haynon.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="main-page/img/bellaroca.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="main-page/img/slides.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    </main>

    <!-- about -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="main-page/img/dque.jpg">
                </div>
                <div class="column right">
                    <div class="text">Marinduque</div>
                    <p>The Province of Marinduque, is an island province in the Philippines located in Southwestern Tagalog Region or Mimaropa, formerly designated as Region IV-B. Its capital is the municipality of Boac. Marinduque lies between Tayabas Bay to the north and Sibuyan Sea to the south. It is west of the Bondoc Peninsula of Quezon province; east of Mindoro Island; and north of the island province of Romblon. Some parts of the Verde Island Passage, the center of the center of world's marine biodiversity and a protected marine area, are also within Marinduque's provincial waters.</p>
                    <a href="#">See more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="tour" id="tour">
        <h2 class="title"><a href="tour.php"> Discover</a></h2>
        <div class="tour-container">
            <div class="box">
                <img src="main-page/img/poctoy.jpg" alt="">
                <h3>Poctoy White Beach</h3>
                <p>Poctoy White Beach, located in the coastal town of Torrijos in Marinduque, is one of the popular beaches in the Philippines. The beach features a kilometer stretch of fine white sand and pristine blue waters that is perfect for swimming and snorkeling. Poctoy White Beach is also home to good seafood like yellowfin, squid, crabs, and shrimp, which are freshly sourced daily.</p>
                
            </div>

            <div class="box">
                <img src="main-page/img/morion.jpg" alt="">
                <h3>Morioner Festival</h3>
                <p>The Moriones is a lenten festival held annually on Holy Week on the island of Marinduque. The Moriones tradition has inspired the creation of other festivals in the Philippines where cultural practices is turned into street festivals.The festival is characterized by colorful Roman costumes, painted masks and helmets, and brightly colored tunics. The towns of Boac, Gasan, Santa Cruz, Buenavista and Mogpog in the island of Marinduque become one gigantic stage.</p>
                
            </div>

            <div class="box">
                <img src="main-page/img/palad.jpg" alt="">
                <h3>Palad SandBar</h3>
                <p>Palad Sandbar is one of a kind places for outdoor enthusiasts and beach lovers. It features powdery white sands that flush through the crystal clear waters, which  appears during low tide. It's advisable to go here in the morning when the tide is usually low. You can reach sandbar via a 30-minute boat ride  from Maniwaya. Palad Sandbar is a one of a kind place for beach lovers. Located in Maniwaya Island in the province of Sta. Cruz, Marinduque,</p>
                
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact Us</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <p>Feel free to reach out to me anytime. I would be delighted to connect and hear from you. Don't hesitate to drop me a message or give me a call. I'm eager to engage in meaningful conversations and collaborate on exciting opportunities. Let's stay connected!</p>
                        <div class="icon">
                            <div class="list">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Jayvee Enobay</div>
                                </div>
                            </div>

                            <div class="list">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Address</div>
                                    <div class="sub-title">Marinduqe State College</div>
                                </div>
                            </div>

                            <div class="list">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title">abcd@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message Us</div>
                        <div class="contact-message">
                            <form method="POST" action="submit.php">
                                <input type="name" name="name" placeholder="Your Name" required>
                                <input type="email" name="email" placeholder="Your Email" required>
                                <textarea name="message" rows="6" placeholder="Your Message"></textarea>
                                <button type="submit" name="submit" class="btn btn2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="copyright">
            <p>Copyright <i class="fa-regular fa-copyright" style="color: #fff;"></i> TOURISM MANAGEMENTT OF MARINDUQUE </p>
        </footer>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>