<?php
include_once('dbconnection.php');

$name = $_SESSION['Pass'];
$query = "SELECT * FROM `membership` WHERE UserName='$name';";

$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) 
{
    $email = $row['Email'];
    $mobileNo = $row['MobileNo'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Agro.Rent-Home</title>
</head>
<body>
   
 
<div class="home">
    <div class="nav-bar">
        <div class="left-side">
            <div class="logo">
                <img src="Images/Agro.Rent-logo.png" alt="Agro.Rent-Logo" title="Agro.Rent">
            </div>
        </div>

        <div class="right-side">

            <ul id="nav-links">
                <li ><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                <li><a href="fertilizers.php"><i class="fa fa-leaf" aria-hidden="true"></i>Crops</a>
                <li><a href="rent_machine.php"><i class="fa fa-bus" aria-hidden="true"></i>Rent machinery</a></li>
                <li><a href="cultivation.php"><i class="fa fa-asl-interpreting"></i>Cultivation &amp; Protection</a></li>
                <li><a href="contactUs.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
            </ul>

            
      
        </div>
     
       
        <a href="logout.php"><button id="login"><i class="fa fa-fw fa-user"></i>Logout</button></a><br>
     

        
        <button class="right-bar">
            <span class="bar"></span>
        </button>
       
    </div>

    
    

    <div class="mobile_nav">
        
        <ul id="mobile_nav_links">
            <li ><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                    <li><a href="fertilizers.php"><i class="fa fa-leaf" aria-hidden="true"></i>Crops</a>
                    <li><a href="rent_machine.php"><i class="fa fa-bus" aria-hidden="true"></i>Rent machinery</a></li>
                    <li><a href="cultivation.php"><i class="fa fa-asl-interpreting"></i>Cultivation &amp; Protection</a></li>
                    <li><a href="contactUs.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
        </ul>
        <a href="logout.php"><button id="mobile_login"><i class="fa fa-fw fa-user"></i>Logout</button></a>
        <div class="mobile_footer">
           <p>Copyright&copy; 2022 Agro.Rent. All Rights Reserved</p>
        </div>
    </div>

    <div class="hero-image">
        <video autoplay muted loop>
            <source src="Video/Banner Video.mp4" type="video/mp4">
        </video>
       
    </div>
    
    <div class="hero-image">
        <video autoplay muted loop>
            <source src="Video/Banner Video.mp4" type="video/mp4">
        </video>
        
    </div>


    <!-- <div class="Center">
            <div class="background">
                <img src="Images/Banner.jpg" alt="Agro.Rent" title="Agro.rent">
            </div>
    </div> -->


   

    <div class="search_bar">
        <div class="search_img">
            <img src="Images/Search_img.png" alt="search_image">
        </div>
        
        <input type="text" placeholder="Quick Search" id="quick_search">
    </div>
  

</div>










<div class="sub-home">
    <div class="looking-for">
        
        <div class="card">
            <div class="img">
                <img src="Images/machine-1.jpeg">
            </div>
            <div class="description">
                <p>looking to buy a machine? <span>&nbsp;&rarr;</span></p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="Images/machine-2.jpeg">
            </div>
            
            <div class="description">
                <p>looking to rent a machine?<span>&nbsp; &rarr;</span></p>
            </div>
        </div>
    
        <div class="card">
            <div class="img">
                <img src="Images/machine-3.jpeg">
            </div>
            <div class="description">
                <p>looking to sell a machine?<span id="arrow">&nbsp; &rarr;</span></p>
            </div>
        </div>
        
    
        <div class="card">
            <div class="img">
                <img src="Images/crops-image.jpeg">
            </div>
            <div class="description">
                <p>looking for information?<span>&nbsp; &rarr;</span></p>
            </div>
            
        </div>
        
        
    </div>
</div>


    <div class="sub-hero-image" id="sub-hero-image">

    </div>


    <div class="about-Agro.Rent">
        
        <div class="about">
            
            <div class="image">
                <p id="inc">About Agro.Rent, Inc.</p>
                <img src="./Images/about-Agro.Rent.jpeg">
               
            </div>
            <div class="about-para">
                <p>
                    At <span>Agro.Rent</span>, based in Kandy,
                     we offer expert advice with a wide variety of specialist products.
                      We are fortunate to be able to offer our clients
                       the opportunity to test drive machines
                        at our farm which allows you to make a fully informed choice.
                        We have great people all over the country working towards
                         producing the world’s finest products, and we’re always on the lookout for great talent.
                </p>
            </div>
            
        </div>
    </div>


    <section class="services">
        <div class="heading">
            <p>Our Services</p>
        </div>
        <div class="service-image">
          
        </div>


        <div class="cards">
            <div class="actual-card">
                <div class="card-image">
                    <img src="./Images/buy (2).png">
                </div>
                <div class="content">
                    <div class="head">
                      
                    </div>
                    
                    <p id="para">"Unlock the Power of Modern Agriculture with Agro.Rent! Discover a wide range of high-quality farming equipment available for purchase. We offer the tools you need to boost your farm's productivity and achieve remarkable yields. Explore our extensive catalog and elevate your farming experience today."</p>
                    <p id="more">Learn More</p>
                </div>
            </div>
            <div class="actual-card">
                <div class="card-image">
                    <img src="./Images/sell (2).png">
                </div>
                <div class="content">
                    <div class="head">
                      
                    </div>
                    
                    <p id="para">"Unlock Your Farm's Potential with the Finest Farming Equipment. Explore a Wide Range of Reliable and Efficient Tools for Sale on Agro.Rent. Elevate Your Agriculture Game Today!"</p>
                    <p id="more">Learn More</p>
                </div>
            </div>
            <div class="actual-card">
                <div class="card-image">
                    <img src="./Images/rent (2).png">
                </div>
                <div class="content">
                    <div class="head">
                        
                    </div>
                    
                    <p id="para">"Unlock Your Agricultural Potential with Agro.Rent - Your One-Stop Destination for Hassle-Free Farm Equipment Rentals. Access the Best Tools for Your Farming Needs, Anytime You Need Them."</p>
                    <p id="more">Learn More</p>
                </div>
            </div>
        </div>
    </section>




    <section class="our-partners">
        <h3>-- Our Partners</h3>
        <div class="partners-sub-heading">
            <h1>We Partner With Highly Professionals</h1>
        </div>
        <div class="partners">
            <div class="img1" id="partners-img">
                <img src="./Images/Nestle-Logo.png">
            </div>
            <div class="img2" id="partners-img">
                <img src="./Images/Department-LOGO.png">
            </div>
            <div class="img3" id="partners-img">
                <img src="./Images/prima-ceylon.jpg">
            </div>
            <div class="img4" id="partners-img">
                <img src="./Images/ruhunu_logo.png">
            </div>
        </div>
    </section>



    <section class="recent-updates">
        <h1>Check out our recent news and updates</h1>
        <div class="recent-pics">
            <div class="recent-img1">
                <img src="./Images/recent-img1.jpg">
                <div class="flex">
                <div class="date"><span id="date">30</span><span id="year">December 2022</span></div>
                <div class="img-description">
                    <p>Agro.Rent Celebrates Record Harvests as Farmers Embrace Smart Equipment Rentals. Our Platform Connects Farmers with Modern Farming Tools, Boosting Yields and Sustainability Across the Agriculture Sector. Join the Revolution Today!"</p>
                </div>
            </div>
            </div>
            <div class="recent-img2">
                <img src="./Images/recent-img2.jpg">
                <div class="flex">
                <div class="date"><span id="date">5</span><span id="year">October 2022</span></div>
                <div class="img-description">
                    <p>Farmers on Agro.Rent Make a Difference! Animals Thrive on Nutritious Crops Grown with Our Quality Equipment. Join Us in Supporting Sustainable Agriculture and Healthy Livestock."</p>
                </div>
            </div>
            </div>
            <div class="recent-img3">
                <img src="./Images/recent-img3.jpg">
                <div class="flex">
                <div class="date"><span id="date">18</span><span id="year">September 2022</span></div>
                <div class="img-description">
                    <p>Fresh and Locally Grown Vegetables Now Available on Agro.Rent! Our Dedicated Farmers Bring You the Finest, Sustainably Cultivated Produce. Explore Our Selection Today and Support Local Agriculture!"</p>
                </div>
            </div>
            </div>
        </div>
    </section>



    <section class="what-they-say">
        <h1>What Our Customer says about us</h1>
        <div class="div">
        <div class="what-they-say-image">
            <img src="./Images//what-they-img.png">
        </div>

        <div class="reviews">
            
            <div class="review active">
                <p>"Agro.Rent has been a game-changer for our farm. We've easily rented the equipment we needed, saving time and resources. Their user-friendly platform and excellent customer service make them a top choice for any farmer."</p>
                <div class="img-review">
                <div class="user-profile1">
                   
                </div>
                <h3>Hizbullah Razik</h3>
            </div>
                <div class="review-rating">
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div-none">&#9734;</div>
                      <span id="review1-rating">4/5</span>
                </div>
            </div>
            <div class="review">
                <p>"As a hobbyist farmer, Agro.Rent has been a valuable resource. I can access professional-grade equipment without the hefty price tag of buying. Highly recommend!"</p>
                <div class="img-review">
                    <div class="user-profile2">
                       
                    </div>
                    <h3>Janrthan Manojkumar</h3>
                </div>
                <div class="review-rating">
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div-none">&#9734;</div>
                    <div class="star-div-none">&#9734;</div>
                     <span id="review1-rating">3/5</span>
                </div>
            </div>
            <div class="review">
                <p>"I appreciate Agro.Rent's commitment to sustainability. Renting equipment instead of buying reduces waste and supports local farmers. Plus, their website is intuitive and efficient."</p> 
                <div class="img-review">
                    <div class="user-profile3">
                       
                    </div>
                    <h3>Meshith Ariyanawansa</h3>
                </div>
                <div class="review-rating">
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div-none">&#9734;</div>
                    <span id="review1-rating">4/5</span>
                </div>
            </div>
            <div class="review">
                <p>"Agro.Rent has streamlined our farming operations. Their extensive equipment catalog, competitive pricing, and reliable service have made them an integral part of our success."</p>
                <div class="img-review">
                    <div class="user-profile4">
                       
                    </div>
                    <h3>Jayasinghe</h3>
                </div>
                <div class="review-rating">
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <span id="review1-rating">5/5</span>

                </div>
            </div>
            <div class="review">
                <p>"Starting out in farming can be overwhelming, but Agro.Rent made it easier. Their user-friendly platform helped me find the right equipment, and their support team was incredibly helpful."</p>
                <div class="img-review">
                    <div class="user-profile5">
                       
                    </div>
                    <h3>Alex Lee</h3>
                </div>
                <div class="review-rating">
                     <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div">&#9733;</div>
                    <div class="star-div-none">&#9734;</div>
                    <span id="review1-rating">4/5</span>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section class="footer">
        <div class="left-side-footer">
            <p>&copy;2022 All Rights Reserved.Agro.Rent.</p>
        </div>
        <div class="right-side-footer">
            <p>Web Design and Development by<a href="index.html">Agro.Rent Team</a></p>
        </div>
    </section>


   
</body>
</html>