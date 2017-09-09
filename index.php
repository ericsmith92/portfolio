<?php
 //require header
require_once "includes/header.php"
?>
<div id="page-wrapper">
<main>
    <!--About Section -->
    <section id="about">
        <h2 class="hidden">About</h2>
        <!--start of three column layout for section -->
        <div id="about-left" class="about_column">
            <img alt="Close up of code" id="about-img-1" class="about_img" src="images/code.jpeg">
            <h3>What I Do</h3>

            <div class="about_para__container">
                <p class="about_para">I always approach a problem or project by asking questions. What steps are required to complete the bare-bones?
                Once that's in place, how can I take things to the next level? Where might this application be a year from now? How can I code it today
                so it's easily maintained tomorrow? </p>
            </div>
        </div>

        <div id="about-center" class="about_column">
            <img alt="Portrait of Eric" class="about_img" src="images/portrait.png">
            <h3>About Me</h3>

            <div class="about_para__container">
                <p class="about_para">Hey there! I'm a <strong>Junior Web Developer</strong> based in the Toronto area. I'm passionate
                about caffeine, but as a former business student I'm also excited by the opportunity to leverage the
                web to convey messages and tell stories. Have a look around, you might see something you like ;)</p>
            </div>
        </div>

        <div id="about-right" class="about_column">
            <img alt="Photo of person writing on whiteboard" id="about-img-3" class="about_img" src="images/solutions.jpg">
            <h3>How I Do It</h3>

            <div class="about_para__container">
                <p class="about_para">The nature of the field often involves solving problems to which there is no known answer. A strong
                foundation rooted in the fundamentals coupled with awesome Googling skills help me take a project
                from conception to reality.</p>
            </div>
        </div>

    </section>
    <!-- Work Section -->
    <section id="work">
        <h2>Recent Work</h2>
        <!--container for slides -->
        <div class="slideshow__container">

            <!--individual slides -->
            <div id="slide-one" class="slide current">
                <div class="slide-inner column1">
                    <h3 class="work_heading">Humber Transmedia 2017</h3>
                        <p class="work_description">A promotional website for Humber College's school of Hospitality, Recreation and Tourism.
                            I worked in tandem with 6 other developers to build pages based on mock-ups and incorporate functionality.</p>
                    <div class="work_button__container">
                        <a class="work_button" href="http://humbertransmedia.ca/2017/">Visit Site</a>
                    </div>
                </div>
                <div class="slide-inner column2">
                    <img class="work_image" alt="Screen capture of Humber Transmedia site" src="images/HTransmedia.png">
                </div>
                <div class="slide-inner column3">

                    <div class="tech_container">
                        <h4 class="tech_heading">Technologies Used:</h4>

                        <ul class="tech_list">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript (ES6)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="slide-two" class="slide">
                <div class="slide-inner column1">
                    <h3 class="work_heading">Nomadic</h3>
                         <p class="work_description">A fictitious travel application aimed at millennials, completed alongside 4 other developers for a school project.
                             This was my first real crack at completing features that support full CRUD functionality. </p>

                    <div class="work_button__container">
                        <a class="work_button" href="http://evanpizzolato.com/portfolio/Nomadic/">Visit Site</a>
                    </div>
                </div>
                <div class="slide-inner column2">
                    <img class="work_image" alt="Screen capture of Nomadic site" src="images/Nomadic.png">
                </div>
                <div class="slide-inner column3">

                    <div class="tech_container">

                        <h4 class="tech_heading">Technologies Used:</h4>
                        <ul class="tech_list">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Bootstrap</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="slide-three" class="slide">
                <div class="slide-inner column1">
                    <h3 class="work_heading">LDHC</h3>
                         <p class="work_description">A semester-long group project which took the form of a website redesign for The Lady Dunn Health Centre.
                             Project focuses included recreating the site architecture, making the website fully accessible, and incorporating new features
                             to help better serve the community of WaWa, ON.</p>
                    <div class="work_button__container">
                        <a class="work_button" href="http://ldhc-hospital.azurewebsites.net/">Visit Site</a>
                    </div>
                </div>
                <div class="slide-inner column2">
                    <img class="work_image" alt="Screen capture of LDHC site" src="images/LDHC.png">
                </div>
                <div class="slide-inner column3">

                    <div class="tech_container">

                        <h4 class="tech_heading">Technologies Used:</h4>
                        <ul class="tech_list">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Bootstrap</li>
                            <li>C#</li>
                            <li>ASP.NET</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="slide-four" class="slide">
                <div class="slide-inner column1">
                    <h3 class="work_heading">SoapBox</h3>
                        <p class="work_description">A live chat application built from scratch. The spotlight for this project encompassed working with session variables,
                            dynamically creating and writing to JSON files, and making AJAX calls to update the chat window without refreshing the page.</p>
                    <div class="work_button__container">
                        <a class="work_button" href="http://soapbox.applepolish.me/index.php">Visit Site</a>
                    </div>
                </div>
                <div class="slide-inner column2">
                    <img class="work_image" alt="Screen capture of SoapBox site" src="images/SoapBox.png">
                </div>
                <div class="slide-inner column3">

                    <div class="tech_container">

                        <h4 class="tech_heading">Technologies Used:</h4>
                        <ul class="tech_list">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>JQUERY</li>
                            <li>AJAX</li>
                            <li>MySQL</li>
                        </ul>

                    </div>
                </div>
            </div>

            <!--
            <div id="slide-five" class="slide">
                <div class="slide-inner column1">
                    <h3 class="work_heading">Activity Forecast</h3>
                        <p class="work_description">An application that suggests nearby activities based on the user's location and the current weather.
                            This was my first attempt at integrating and leveraging multiple API's to achieve the desired functionality.</p>
                    <div class="work_button__container">
                        <a class="work_button" href="#">Visit Site</a>
                    </div>
                </div>
                <div class="slide-inner column2">
                    <img class="work_image" alt="Screen capture of Humber Transmedia site" src="images/HTransmedia.png">
                </div>
                <div class="slide-inner column3">

                    <div class="tech_container">
                        <h4 class="tech_heading">Technologies Used:</h4>
                        <ul class="tech_list">
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>OpenWeatherMap API</li>
                            <li>Google Maps API</li>
                            <li>Google Maps Places Library</li>
                        </ul>
                    </div>
                </div>
            </div>
            -->

            <!--previous and next-->
            <a id="prev" class="button">&#10094;</a>
            <a id="next" class="button">&#10095;</a>
        </div>
    </section>
    <!--Contact Section -->
    <section id="contact">
        <h2>Contact</h2>

            <div class="contact_container">
                <div class="contact_container__inner">

                    <!--heading -->
                    <div class="contact_container__innerheading">
                        <h4>Let's get in touch</h4>
                    </div>

                    <!--phone -->
                    <div class="contact_container__innerphone">
                        <i class="fa fa-phone" aria-hidden="true"></i><div class="contact_text"> 905-809-4963</div>
                    </div>

                    <!--email -->
                    <div class="contact_container__inneremail">
                        <i class="fa fa-envelope" aria-hidden="true"></i><div class="contact_text"> eric@helloericsmith.com</div>
                    </div>

                    <!--location -->
                    <div class="contact_container__innerlocation">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><div class="contact_text"> Toronto, ON</div>
                    </div>



                </div>
                <div class="form_container">
                    <div class="form_container__arrow"></div>
                    <form id="my_form">
                         <div>
                             <label for="name">Name:</label><span class="form_error" id="name-blank"></span>
                             <?php
                                 if(isset($nameErr)){
                                     echo $nameErr;
                                 }
                             ?>
                         </div>
                             <input type="text" id="name" name="name" placeholder="Name *">
                         <div>
                            <label for="email">Email:</label><span class="form_error" id="email-blank"></span>
                            <?php
                                 if(isset($emailErr)){
                                echo $emailErr;
                                }
                            ?>
                        </div>
                            <input type="text" id="email" name="email" placeholder="Email *">
                          <div>
                            <label for="message">Message:</label><span class="form_error" id="message-blank"></span>
                             <?php
                                if(isset($messageErr)){
                                echo $messageErr;
                                 }
                             ?>
                          </div>
                            <textarea name="message" id="message" placeholder="Message *" ></textarea>
                        <div>
                            <input id="mybtn" type="submit" name="submit" value="send"><span id="status"></span>
                            <!--
                            <button id="mybtn" type="submit" name="submit">Send</button><span id="status"></span>
                            -->
                         </div>
                    </form>
                </div>
            </div>
    </section>
</main>

<?php
//require footer
require_once "includes/footer.php";
?>
