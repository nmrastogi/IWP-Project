<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css?v=<?php echo time();?>">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body id="profile-body">
    <!-- top bar: -->
    <div id="blue_bar">
    <div id="bb-content">
        Chit-Chat &nbsp &nbsp
        <input type="text" id="search_box"
        placeholder="Search for people">
        <!-- <input type="image" src="search.png" id="search_btn"> -->
        <img src="user11.jpg ">
    </div>
    </div>
    <!-- cover area: -->
    <div id="ca1">
        <div id="ca2">
            <img src="mountain.jpg" id="cover-photo">
            <img src="user11.jpg" id="profile-photo">
            <br>
            <div id="profile-name">
            Aryan Rathore
            </div>
            
            <br>
            <div class="menu-btn">
                <a href="#">Timeline</a>
            </div>
            <div class="menu-btn">
                <a href="#">About</a>
            </div>
            <div class="menu-btn">
                <a href="#">Friends</a>
            </div>
            <div class="menu-btn">
                <a href="#">Photos</a>
            </div>
            <div class="menu-btn">
                <a href="#">Settings</a>
            </div>
            <!-- below cover area -->
            <div id="box">
                <!-- frineds-box -->
                <div id="box-1">
                    <div id="friends-bar">
                        <div style="color:gray">
                        Friends <br>

                        </div>
                    
                    <div class="friends">
                        <img src="selfie.jpg" class="f-img">
                        <br>
                        Elli Abraham

                    </div>
                    <div class="friends">
                        <img src="user2.jpg" class="f-img">
                        <br>
                        Jack Moore

                    </div>
                    <div class="friends">
                        <img src="user3.jpg" class="f-img">
                        <br>
                        Sneha Singh

                    </div>
                    <div class="friends">
                        <img src="user4.jpg" class="f-img">
                        <br>
                        Klen Wright

                    </div>

                    </div>
                    </div>
                    <!-- posts area -->
                <div id="box-2">
                    <div class="post-box">
                        <textarea id="post-text"  placeholder="What are you thinking?"></textarea>
                        <input type="submit" value="Post" id="post-btn">
                        <br>
                    </div>
                    <!-- posts -->
                    <div id="post-bar">
                        <!-- post-1 -->
                        <div id="post">
                            <div>
                                <img src="user2.jpg" style="width:75px;float:left">
                            </div>
                            <div >
                                <div style="font-weight:bold;color:#4481eb;float:left">Jack Moore</div><br>
                                <div style="text-align:left"> 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, voluptatibus?
                                <br><br>
                                <a href="#">Like &nbsp</a>
                                <a href="#">Comment &nbsp</a>
                                <span style="color:#999">
                                April 1 2021

                                </span>
                               
                                </div>

                               
                            </div>
                        </div>
                        <!-- post-2 -->
                        <div id="post">
                            <div>
                                <img src="selfie.jpg" style="width:75px;float:left">
                            </div>
                            <div >
                                <div style="font-weight:bold;color:#4481eb;float:left">Elli Abraham</div><br>
                                <div style="text-align:left"> 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, voluptatibus?
                                <br><br>
                                <a href="#">Like &nbsp</a>
                                <a href="#">Comment &nbsp</a>
                                <span style="color:#999">
                                April 1 2021

                                </span>
                               
                                </div>

                               
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
               

        </div>

    </div>
</body>
</html>