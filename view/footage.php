<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view_css/footage.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Html And CSS Video Gallery</title>
</head>

<body>

<div class="everything" id="blur"></div>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="https://img.icons8.com/badges/48/000000/experimental-city-buildings-badges.png"/>skaïgreen</h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboardskaï.html"class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>

                <li>
                    <a href=""><span class="las la-tree"></span>
                    <span>Coconut Tree No.</span></a>
                </li>

                <li>
                    <a href=""><span class="las la-hospital"></span>
                    <span>Plant Defects</span></a>
                </li>

                <li>
                    <a href=""><span class="las la-water"></span>
                    <span>Cultivation areas</span></a>
                </li>

                <li>
                    <a href="footage.html"><span class="las la-calendar"></span>
                    <span>Past Flight Videos</span></a>
                </li>

                <li>
                    <a href=""><span class="las la-camera"></span>
                    <span>Grid Layout Images</span></a>
                </li>

                <li>
                    <a href=""><span class="las la-plane"></span>
                    <span>Fly Drone</span></a>
                </li>

            
                    <li>
                        <span><a href=""> <span class="las la-info"></span> 
                        <a href="#" onclick="toggle()">Help</span></a>
                    </li>

            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-title">
                <h2><label  for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

        
        </header>
    </div>
</div>
        

    <body oncontextmenu="return false">
        <div class="container">
            <div class="nav-bar">
            
            <div><a href="login.html" class="logout"> logout</a></div>
            </div>

            <div id="video_player">
                <video controls poster="" class="video" id="video">
                    <source src="../view_css/media/DJI_0815.MP4" type="video/mp4">
                    <source src="../view_css/media/DJI_0815.MP4" type="video/mp4">
                    
                </video>
                <div class="scrollBox">
                    <div class="box">
                        <img src="/Users/Nkunim/Desktop/skaïgreen web app/images/mann.png">
                        <div class="box-content">
                            <h5>How to create a video Gallery using Html and CSS3</h5>
                            <a href="../view_css/media/DJI_0815.MP4" class="btn">Watch</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/Users/Nkunim/Desktop/skaïgreen web app/images/mann.png">
                        <div class="box-content">
                            <h5>How to create a video Gallery using Html and CSS3</h5>
                            <a href="../view_css/media/DJI_0815.MP4" class="btn">Watch</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/Users/Nkunim/Desktop/skaïgreen web app/images/mann.png">
                        <div class="box-content">
                            <h5>How to create a video Gallery using Html and CSS3</h5>
                            <a href="../view_css/media/DJI_0815.MP4" class="btn">Watch</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/Users/Nkunim/Desktop/skaïgreen web app/images/mann.png">
                        <div class="box-content">
                            <h5>How to create a video Gallery using Html and CSS3</h5>
                            <a href="../view_css/media/DJI_0815.MP4" class="btn">Watch</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/Users/Nkunim/Desktop/skaïgreen web app/images/mann.png">
                        <div class="box-content">
                            <h5 >How to create a video Gallery using Html and CSS3</h5>
                            <a href="../view_css/media/DJI_0815.MP4"class="btn">Watch</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/Users/Nkunim/Desktop/skaïgreen web app/images/mann.png">
                        <div class="box-content">
                            <h5 style="color: aliceblue;">How to create a video Gallery using Html and CSS3</h5>
                            <a href="../view_css/media/DJI_0815.MP4" class="btn">Watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="video-text">FARM FOOTAGE 01/13/2023</div>


    ###########################javascript for vidoe Player################ -->
    
        <script type="text/javascript">
            let anchors = document.querySelectorAll('div .btn');
        let links = [...anchors];
        
        for (let i=0; i<links.length; i++) {
            links[i].onclick = handler;
        }
        function handler(e) {
            e.preventDefault();
            let videotarget = this.getAttribute("href");
            let filename = videotarget.substr(0, videotarget.lastIndexOf('.'));
            let video = document.getElementById("video");
            video.removeAttribute("poster");
            let source = document.querySelectorAll("#video_player video source");
            source[0].src = filename + ".mp4";
            source[1].src = filename + ".m4v";
            video.load();
            video.play();
        }
        </script>


    <div id="popup">
        <h2>Thank you for choosing us!</h2>
        <p>For more information on usage of the drone, kindly visit the following link for more information: www.ryzerobotics.com </p>
        <a href="#" class= "close-btn" onclick="toggle()">Close</a>
    </div>

    <script type="text/javascript">
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active')

            var popup = document.getElementById('popup');
            popup.classList.toggle('active')
        }
    </script>


</body>
</html>