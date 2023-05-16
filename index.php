<?php include("header.php");?>
    <!-- login form container  -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Welcome to Egypt</h3>
            <p>discover new places with us</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4" width="400px"></span>
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- About section starts  -->

    <section class="About" id="About">
    <h1 class="heading ">
            <span>A</span>
            <span>B</span>
            <span>O</span>
            <span>U</span>
            <span>T</span>
           
        </h1>

        <img class="center" src="images/About.png" width=1000px>




    </section>


    <!-- gallery section starts  -->

    <section class="gallery " id="gallery ">

        <h1 class="heading ">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container ">

            <div class="box ">
                <img src="images/g-1.jpg " alt=" ">
                <div class="content ">
                    <h3>Cairo</h3>

                    <a href="cairo.php" class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/g-2.jpg " alt=" ">
                <div class="content ">
                    <h3>Aswan</h3>

                    <a href="aswan.php" class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/g-3.jpg " alt=" ">
                <div class="content ">
                    <h3>Luxor</h3>

                    <a href="luxor.php" class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/g-4.jpg " alt=" ">
                <div class="content ">
                    <h3>Hurghada</h3>

                    <a href="# " class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/g-5.jpg " alt=" ">
                <div class="content ">
                    <h3>Shahrm El-sheikh</h3>

                    <a href="# " class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/g-6.jpg " alt=" ">
                <div class="content ">
                    <h3>Sinai</h3>

                    <a href="# " class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/g-7.jpg " alt=" ">
                <div class="content ">
                    <h3>Siwa</h3>

                    <a href="# " class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/g-8.jpg " alt=" ">
                <div class="content ">
                    <h3>Giza</h3>

                    <a href="# " class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/Alex.jpg " alt=" ">
                <div class="content ">
                    <h3>Alexandria</h3>

                    <a href="# " class="btn ">see more</a>
                </div>
            </div>
            <div class="box ">
                <img src="images/famous.jpeg " alt=" ">
                <div class="content ">
                    <h3>Most famous people</h3>

                    <a href="Fam.php" class="btn ">see more</a>
                </div>
            </div>

            <div class="box ">
                <img src="images/event.jpg " alt=" ">
                <div class="content ">
                    <h3>Events</h3>

                    <a href="login.php" class="btn ">see more</a>
                </div>
            </div>
            <!-- <div class="box ">
                <img src="images/food.jpg " alt=" ">
                <div class="content ">
                    <h3> Traditional Food</h3>

                    <a href="# " class="btn ">see more</a>
                </div>
            </div> -->

        </div>

    </section>
   

    <section class="contact " id="contact ">

        <h1 class="heading ">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row ">

            <div class="image ">
                <img src="images/contact-img.svg " alt=" ">
            </div>

            <form action=" ">
                <div class="inputBox ">
                    <input type="text " placeholder="name ">
                    <input type="email " placeholder="email ">
                </div>
                <div class="inputBox ">
                    <input type="number " placeholder="number ">
                    <input type="text " placeholder="subject ">
                </div>
                <textarea placeholder="message " name=" " id=" " cols="30 " rows="10 "></textarea>
                <input type="submit " class="btn " value="send message ">
            </form>

        </div>

    </section>

    <!-- contact section ends -->



<?php include("footer.php");?>