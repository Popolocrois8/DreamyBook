<html>

<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="mainpagestyle.css">

</head>

<body>
    <nav>
        <div class="navleft">
            <img src="images/Dreamybook.png" class="Logo">
            <ul>
                <li><img src="images/maillogo.png" alt="maillogo" style="width: 45px; height: 25px;"></li>
                <li><img src="images/notification.png" alt="notiflogo" style="width: 35px; height: 30px;"></li>
                <li><img src="images/watching.png" alt="watchlogo" style="width: 40px; height: 40px ;"></li>
            </ul>
        </div>


        <div class="navright">
            <div class="searchbox">
                <img src="images/search.png" alt="searchlogo" style="width: 20px; height: 20px ;">
                <input type="text" placeholder="Search">

                <div class="user-icon  online" onclick="popupMenu()">
                    <img src="images/Mike.jpg" alt="profile-pic" style="width:60px;">
                </div>
            </div>
        </div>

        <!-----------------------------------Popup menu--------------------------------------->
        <div class="popup">

            <label class="switch" id="">
                <input type="checkbox" id="darktoggle">
                <span class="slider"></span>
            </label>

            <div class="popup-inner">
                <div class="user">
                    <img src="images/Mike.jpg" alt="">
                    <div>
                        <p>Mike O'Hearn</p>
                        <a href="#">Your Profile</a>
                    </div>
                </div>
            </div>
        </div>



    </nav>



    <div class="container">

        <div class="leftsidebar">
            <div class="links">
                <a href="#"><img src="images/news.png" class="newsicon">News</a>
                <a href="#"><img src="images/news.png" class="friendsicon">Friends</a>
                <a href="#"><img src="images/news.png" class="groupicon">Group</a>
                <a href="#"><img src="images/news.png" class="marketicon">Shop</a>
                <a href="#"><img src="images/news.png" class="watchicon">Watch</a>
                <a href="#">See More</a>
            </div>

            <div class="shortcut">
                <p>Shortcuts</p>
                <a href="#"> <img src="images/laptops.jpg" alt="">Cheap Laptops</a>
                <a href="#"> <img src="images/gaming mouse.jpg" alt="">Top Gaming Mouse</a>
                <a href="#"> <img src="images/huh.jpg" alt="">How to be good at coding</a>
                <a href="#"> <img src="images/Patrick-Bateman.jpg" alt="">Patrick Bateman</a>

            </div>

        </div>

        <div class="maincontent">

            <div class="stories">
                <div class="story">
                    <img src="images/upload.png" alt="">
                    <p>Create Story</p>
                </div>

                <div class="story-text">
                    <div><img src="images/love.png" alt="">
                        <p>Share stories and moments with friends</p>
                    </div>
                    <div><img src="images/clock.png" alt="">
                        <p>Stories will disappear after 24 hours</p>
                    </div>
                    <div><img src="images/messenger.png" alt="">
                        <p>Replies and reactions are private</p>
                    </div>
                </div>
            </div>

            <div class="post-container">
                <div class="user">
                    <img src="images/Mike.jpg" alt="">
                    <div>
                        <p>Mike O'Hearn</p>
                        <small>Public <img src="images/down.png" style="width: 10px;"></small>
                    </div>
                </div>

                <form method="POST" action="submit.php"> <!--to post-->
                    <div class="post-input">
                        <textarea name="message" rows="3" placeholder="What's on your mind, Mike?"></textarea>
                        <button type="submit">Post</button>
                    </div>
                </form>
            </div>

            <!--------------------------to update the post into the main page----------------------------->

            <?php
            $db = mysqli_connect('localhost', 'root', '', 'posts');

            //get messages from database
            $query = "SELECT * FROM messages";
            $result = mysqli_query($db, $query);

            //display messages
            while ($row = mysqli_fetch_assoc($result)) {
                $message = $row['content']; //get from content coloumn
                echo '<div class="post-container">';
                echo '<div class="user-post">';
                echo '<img src="images/Mike.jpg" alt="">';
                echo '<div>';
                echo '<p>Mike O\'Hearn</p>';
                echo '<small>Public <img src="images/down.png" style="width: 10px;"></small>';
                echo '</div>';
                echo '</div>';
                echo '<div class="user-input">';
                echo "<p>$message</p>"; // Display the message
                echo '</div>';
                echo '</div>';
            }
            ?>
            <!--------------------------------------------------------------------------------------------->


        </div>

        <div class="rightsidebar">
            <div class="sidebartitle">
                <h4>Ads</h4>
                <a href="#">Close</a>
            </div>

            <div class="ads">
                <img src="images/raidshadow.jpg" alt="">
                <pre>Raid: Shadow Legends
Play Now!!
                </pre>

            </div>

            <div class="sidebartitle">
                <h4>Recent Chats</h4>
                <a href="#">See all</a>
            </div>

            <div class="online-list">
                <div class="online"><img src="images/parell.jpg"></div>
                <p>Perrell Laquarius</p>
            </div>
            <div class="online-list">
                <div class="online"><img src="images/johnpork.jpg"></div>
                <p>John Pork</p>
            </div>
            <div class="online-list">
                <div class="online"><img src="images/najib.jpg"></div>
                <p>Najib Razak</p>
            </div>

            <div class="sidebartitle">
                <h4>Groups</h4>
            </div>

            <div class="group">
                <img src="images/plus.png" alt="">
                <h3>Create New Group</h3>
            </div>

        </div>
    </div>

    <script src="darkmode.js"></script>
</body>

</html>