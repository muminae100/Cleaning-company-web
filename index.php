<?php
include_once 'header.php';
?>

    <div class="first-white-space"></div>

   >

        <div id="id02" class="register-modal">
            <form class="modal-content animate" action="register.php" method="POST">
                <div class="imgcontainer"> 
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close modal">&times;</span>
                    <img src="img.avatar.png" class="avatar"></div>
                <div class="container">
                    <label>Fullname</label>
                    <input type="text" name="fullname" placeholder="Enter your full name..." required>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter valid email address...">
                    <label><b>Username</b></label>
                    <input type="text" name="Uname" placeholder="Enter your username..." required>
                    <label> <b>Password</b> </label>
                    <input type="password" placeholder="Enter your password..." name="psw" required>
                    <label>Confirm password</label>
                    <input type="password" placeholder="Confirm your password..." name="psw" required>
                    <button class="submit" type="submit">Register</button>
                </div>
                <div class="container" style="background-color: f1f1f1;">
                     <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                     <span class="psw">Already have an account?<a href="#">Login</a></span>
                </div>
            </form>
            </div>
        
    <div class="advert1">
        <img src="" alt="Ad" width="100%">
    </div>

    <div class="pictures">
        <img class="washing-machines" src="washing-machines.jpg" width="90%" style="margin: auto;" height="auto">
        <img src="">
        <img src="">
        <img src="">
    </div>

    <div class="divider">
            <div class="welcome">
                <h1>Welcome to GM Cleaning Services Kenya</h1>
                <h2>Reliable Cleaning Company in Nairobi Kenya</h2>
                <p>GM Cleaning Services is a registered and professional cleaning services company in Nairobi Kenya.</p> 
                <p> We provide customised professional domestic cleaning to homes and commercial/office 
                    cleaning services to businesses in Nairobi Kenya at affordable costs</p>
                
                <p>With over 10 years of experience in the cleaning industry, we ensure that you’re always getting the best results for all your cleaning needs. We put every effort to give our clients the best value for money. We have skilled and well trained employees to  handle the work. And we strive to use the latest cleaning machine technology for the best results.
                     As a result, we have made tremendous impact in the lives of people of Nairobi and it’s environs.</p>  
                <p>That is why we considered the best cleaning services company in Nairobi Kenya.</p> 
                <p>And we continue to set standards by offering outstanding Cleaning services in Nairobi Kenya.</p>
                  <p>We are fully charged with the responsibility of delivering Quality, Affordable,
                    Efficient and Reliable Cleaning Solutions to our ever growing base clients.</p>   
               <p>Call 0721 979 781 or fill the free quote form and 
                   request a free quote from professional cleaners in Nairobi and it’s environs</p> 
            </div>

            <div class="Offers-container">
                <h1>Special Offer</h1>
                <p>Cleaning</p>
                <p>1</p>
            </div>

            <div class="testimonies">
                <h3>Testimonials</h3>  
                <p>What our clients say</p> 

<p>Very helpful telephone staff and a most polite, pleasant young man dealt with my cockroach and bedbug efficiently.
    May be a bit more expensive than some local advertisers who just provide a mobile number and you don’t know who you 
    are getting,
     so to deal with a reputable, well known company, was money well spent as far as I am concerned.</p> 
     <img src="first-testimony">
<h4>Patrick Njenga</h4> 

<p>Excellent experience with GM services earlier today. Super professional. Super efficient. Super nice.
    The customer service ahead of time was also top notch.
    Eric responded quickly and timely though the GM estimate request option and was super nice on the phone
     when I called to set the appointment. Really very good.My carpets and mattress are supper clean.Best cleaners in 
     Nairobi
   </p> 
   <img src="second-testimony">
 <h4>Kym Chris</h4>

<p> These cleaners are amazing! I called them at 9pm and they showed up the following day!
    They are super professional and very accommodating. I needed office cleaning services in Nairobi 
    and they got it done! which are typically very difficult to deal with. I am so satisfied with the
     work and the price was reasonable. They came on time. Effective, polite, professional, and affordable.
      I will be using them again!</p>
      <img src="third-testimony">

<h4>Nimmoh Kamau</h4> 

<p> The men who did the job (Mark and Alex) called in advance to coordinate the time and were professional from start
    to finish. They put down drop cloths to move my couch (the only thing I have that needs this service) onto. 
    They genuinely put in a lot of effort to work every corner of the couch, and Im sure at 3:30pm I was far from their 
    first customer. Pulling back the cushions, stretching out the fabric, wherever appropriate. In addition to the effort,
     they were very well coordinated. Both men were doing things the whole time. My seats are clean as new and house the is
      free from pest for the fumigation and bed bug eradication they conducted.I have zero hesitation recommending 
      this company and these two men.</p>

      <img src="fourth-testimony">

  <h4> Dave</h4>  

 <p>Excellent service, booked GM services Ltd online, obtained a quote within minimum time,
    I was in rush to get it done before my flight,
    Left the keys with the estate agent, cleaners pickup the keys, cleaned the property and
     returned the keys back to the agent,
    Received a emailed notification from agent to expect my return deposit with 7 days as
     the cleaning was done to a very high standards.
    Very happy with over all experience. You are the best Cleaning Services Company in Nairobi Kenya. Thank you.</p> 
    <img src="fifth-testimony">

   <h4>Patrick Njoroge</h4>  
 <p>This place is great,GM services, I ran a bar/venue that had a lot of foot traffic and 
    people were ruthless in making some serious messes. During the time we were open we used GM services as our 
    cleaning service. No matter what had happened that weekend they managed to make it look clean and beautiful 
    the following day. The staff was extremely reliable and trustworthy and the prices were very competitive. 
    Thank you GM SERVICES!!!! You are the best Cleaning Services Company in Nairobi Kenya.</p>  

Saib Mohamed
        </div>
    </div>

    <?php
        include_once 'footer.php';
     ?>
        
    <script>
        var modal=document.getElementById('id01');
        var modal=document.getElementById('id02');
        window.onclick=function(event){
            if(event.target==modal){
                modal.style.display="none";
            }
        }
    </script>
</body>
</html>