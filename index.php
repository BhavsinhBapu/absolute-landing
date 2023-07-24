<?php
ob_start();
@session_start();
error_reporting(0);
error_reporting(E_ALL);

$hostname = "162.241.224.218";
$username = "rennaisa_absolute";
$password = "India@2022";
$db = 'rennaisa_absolute';

// Create connection
$conn = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n". $conn->error);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// exit;
// $result = $conn->query("SELECT * FROM tbl_songs WHERE 1=1 order by id desc");
//                         while($row = $result->fetch_assoc()){
//                             echo $row['song_name'];
//                         }
//                         die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- <script type="text/javascript">
        window.onload = function () {
            document.getElementById("myAudio").play();
        }
        </script> -->
</head>

<body>
    <audio id="myAudio" loop="loop" autoplay>
        <source src="audio/sound1.mp3" type="audio/mp3">
    </audio>
    <!-- <div class="scroll-button"><button id="scrollPlay">Play the animation</button></div> -->
    <section class="body">
        <div class="screen1">
            <div class="video-wrap">
                <video width="100%" autoplay controls id="player" preload="auto">
                    <source src="video/home-with-sound.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <div class="playVideo">
                    <img rel="preload" src="image/Walking.gif" alt="" class="img-fluid">
                    <p>Start your baby journey</p>
                    <button id="playVid" class="sigma_video-popup" disabled><i class="fas fa-play"></i></button>
                </div>
            </div>
        </div>
        <div class="setScroll">
            <div class="load">
                <div class="screen2"
                    style="background-image: url(./image/pitch-black.png); background-repeat: no-repeat; background-size: cover;">
                    <img rel="preload" src="image/garden-main.gif" alt="" class="img-fluid garden1">
                    <img rel="preload" src="image/absolute.png" alt="" class="img-fluid absoluteTx">
                    <div class="grow-garden">
                        <img rel="preload" src="image/garden2.png" alt="" class="garden2 img-fluid">
                        <img rel="preload" src="image/garden3.png" alt="" class="garden3 img-fluid">
                        <img rel="preload" src="image/garden3a.png" alt="" class="garden3a img-fluid">
                        <img rel="preload" src="image/garden4.png" alt="" class="garden4 img-fluid">
                        <img rel="preload" src="image/garden5.png" alt="" class="garden5 img-fluid">
                        <img rel="preload" src="image/garden6.png" alt="" class="garden6 img-fluid">
                        <img rel="preload" src="image/garden7.png" alt="" class="garden7 img-fluid">
                    </div>
                    <div class="dot">
                        <img rel="preload" src="image/Walking.gif" alt="" class="img-fluid">
                    </div>
                    <div class="dot2">
                        <img rel="preload" src="image/babychair.gif" alt="" class="img-fluid">
                    </div>
                    <img rel="preload" src="image/babychair.png" alt="" class="img-fluid baby-chair-image">
                    <img rel="preload" src="image/babychair.png" alt="" class="img-fluid slotter">
                    <div class="dot3">
                        <img rel="preload" src="image/Walking.gif" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="screen3"
                    style="background-image: url(./image/pitch-black.png); background-repeat: no-repeat; background-size: cover;">
                    <div class="dot4">
                        <img rel="preload" src="image/Walking.gif" alt="" class="baby-main img-fluid">
                    </div>
                    <img rel="preload" src="image/paracuite1.gif" alt="" class="img-fluid parcuite1">
                    <div class="dot5">
                        <img rel="preload" src="image/rocket-baby.png" alt="" class="rocket-baby img-fluid">
                    </div>
                    <div class="dot6">
                        <img rel="preload" src="image/rocket-baby2.png" alt="" class="rocket-baby img-fluid">
                    </div>
                    <div class="dot7">
                        <img rel="preload" src="image/rocket-baby3.png" alt="" class="rocket-baby img-fluid">
                    </div>
                    <div class="dot8">
                        <img rel="preload" src="image/rocket-baby4.png" alt="" class="rocket-baby img-fluid">
                    </div>
                    <img rel="preload" src="image/paracuite2.gif" alt="" class="img-fluid parcuite2">
                    <img rel="preload" src="image/ezgif 10.gif" alt="" class="img-fluid graph">
                    <img rel="preload" src="image/rocket.png" alt="" class="rocket img-fluid">
                </div>
                <div class="screen4"
                    style="background-image: url(./image/pitch-black.png); background-repeat: no-repeat; background-size: cover;">
                    <img rel="preload" src="image/paracuite1.gif" alt="" class="img-fluid parcuite1">
                    <img rel="preload" src="image/paracuite2.gif" alt="" class="img-fluid parcuite2a">
                    <div class="dot4">
                        <img rel="preload" src="image/Walking.gif" alt="" class="baby-main img-fluid">
                    </div>
                    <div class="brain">
                        <img rel="preload" src="image/image 104 21.gif" alt="" class="img-fluid brainimg">
                        <img rel="preload" src="image/brain.gif" alt="" class="img-fluid brainimg2">
                        <!-- <video width="100%" controls autoPlay muted class="brainimg2">
                            <source src="image/brain.gif" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video> -->
                    </div>
                    <div class="formulas">
                        <img rel="preload" src="image/output-onlinegiftools (1) 1.gif" alt=""
                            class="img-fluid formulasimg">
                    </div>
                    <img rel="preload" src="image/output-onlinegiftools (2) 1.gif" alt="" class="img-fluid sceintists">
                    <img rel="preload" src="image/output-onlinegiftools (3) 1.gif" alt="" class="img-fluid sceintists2">
                </div>
                <div class="screen5"
                    style="background-image: url(./image/pitch-black.png); background-repeat: no-repeat; background-size: cover;">
                    <img rel="preload" src="image/paracuite2.gif" alt="" class="img-fluid parcuite3">
                    <img rel="preload" src="image/composer 30001-0360.gif" alt="" class="img-fluid sceintists3">
                    <img rel="preload" src="image/graph2.gif" alt="" class="img-fluid graph-part">
                    <img rel="preload" src="image/composer 40001-0360_1.gif" alt="" class="img-fluid sceintists4">
                    <img rel="preload" src="image/output-onlinegiftools (6) 1.gif" alt="" class="img-fluid sound2">
                </div>
                <div class="screen6"
                    style="background-image: url(./image/pitch-black.png); background-repeat: no-repeat; background-size: cover;">
                    <div class="dot4">
                        <img rel="preload" src="image/Walking.gif" alt="" class="baby-main img-fluid">
                    </div>
                    <img rel="preload" src="image/paracuite1.gif" alt="" class="img-fluid parcuite1">
                    <img rel="preload" src="image/paracuite2.gif" alt="" class="img-fluid parcuite4">
                    <!-- <video width="100%" controls autoPlay muted class="momgif">
                        <source src="image/Final Baby and Mother Comp.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video> -->
                    <img rel="preload" src="image/mother-baby.gif" alt="" class="img-fluid momgif">
                    <div class="dot9">
                        <img rel="preload" src="image/Walking.gif" alt="" class="img-fluid">
                        <img rel="preload" src="image/Digital Sound.gif" alt="" class="digital-sound">
                    </div>
                    <img rel="preload" src="image/Digital Sound.gif" alt="" class="digital-sound2">
                </div>
                <div class="screen7"
                    style="background-image: url(./image/pitch-black.png); background-repeat: no-repeat; background-size: cover;">
                    <img rel="preload" src="image/baby-graph.gif" alt="" class="baby-garph">
                    <div class="dot9a">
                        <img rel="preload" src="image/Walking.gif" alt="" class="img-fluid">
                        <img rel="preload" src="image/Digital Sound.gif" alt="" class="digital-sound">
                    </div>
                    <div class="dot10">
                        <img rel="preload" src="image/Crawling-Baby.gif" alt="" class="img-fluid zoomSize">
                    </div>
                    <img rel="preload" src="image/Box.png" alt="" class="box1">
                    <img rel="preload" src="image/Box.png" alt="" class="box2">
                    <img rel="preload" src="image/Box.png" alt="" class="box3">
                    <img rel="preload" src="image/Box.png" alt="" class="box4">
                    <img rel="preload" src="image/Box.png" alt="" class="box5">
                    <img rel="preload" src="image/Box.png" alt="" class="box6">
                    <img rel="preload" src="image/video.png" alt="" class="graph-video">
                    <img rel="preload" src="image/video1.gif" alt="" class="graph-video1">
                    <img rel="preload" src="image/video2.gif" alt="" class="graph-video2">
                    <img rel="preload" src="image/video3.gif" alt="" class="graph-video3">
                    <img rel="preload" src="image/video4.gif" alt="" class="graph-video4">
                    <img rel="preload" src="image/baby_flying (1).gif" alt="" class="baby-flying">
                    <img rel="preload" src="image/High_Chair.gif" alt="" class="baby-chair">
                    <img rel="preload" src="image/baby-fall.gif" alt="" class="baby-fall">
                    <img rel="preload" src="image/wheels.gif" alt="" class="wheels">
                    <img rel="preload" src="image/colorwheel.gif" alt="" class="wheels2">
                    <img rel="preload" src="image/text1.gif" alt="" class="text1">
                    <img rel="preload" src="image/text2.gif" alt="" class="text2">
                    <img rel="preload" src="image/mom-baby-final.png" alt="" class="mom-baby-final">
                    <div class="bottom-line"></div>
                    <div class="final-output">
                        <div class="box-container">
                            <div class="box-fit">
                                <div class="box">
                                    <div class="box-image">
                                        <img rel="preload" src="image/music1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="box-heading">
                                        <h3>Free</h3>
                                        <h5>Free</h5>
                                    </div>
                                    <div class="buttons">
                                        <button class="Dates">1 Month</button>
                                    </div>
                                    <div class="subscribe">
                                        <button class="subscribe">Subscribe Now</button>
                                    </div>
                                    <ul class="offers">
                                        <li><img rel="preload" src="image/check.png" alt="" class="check"> <span>72
                                                Classical
                                                Pieces</span></li>
                                        <li><img rel="preload" src="image/cross.png" alt="" class="cross"> <span>No
                                                images</span>
                                        </li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-fit">
                                <div class="box">
                                    <div class="box-image">
                                        <img rel="preload" src="image/music2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="box-heading">
                                        <h3>Basic</h3>
                                        <h5>9.99$/Month</h5>
                                    </div>
                                    <div class="buttons">
                                        <button class="one-month">1 Month</button>
                                        <button class="one-year">1 Year</button>
                                    </div>
                                    <div class="subscribe">
                                        <button class="subscribe">Subscribe Now</button>
                                    </div>
                                    <ul class="offers">
                                        <li><img rel="preload" src="image/check.png" alt="" class="check"> <span>144
                                                Classical
                                                Pieces</span></li>
                                        <li><img rel="preload" src="image/check.png" alt="" class="check"> <span>Only
                                                Letter
                                                Format</span>
                                        </li>
                                        <li></li>
                                    </ul>
                                    <ul class="wavs">
                                        <li><img rel="preload" src="image/subs1.png" class="img-fluid" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-fit">
                                <div class="box">
                                    <div class="box-image">
                                        <img rel="preload" src="image/music3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="box-heading">
                                        <h3>Premium</h3>
                                        <h5>14.5$/Month</h5>
                                    </div>
                                    <div class="buttons">
                                        <button class="one-month">1 Month</button>
                                        <button class="one-year">1 Year</button>
                                    </div>
                                    <div class="subscribe">
                                        <button class="subscribe">Subscribe Now</button>
                                    </div>
                                    <ul class="offers">
                                        <li><img rel="preload" src="image/check.png" alt="" class="check">
                                            <span>144 Classical
                                                Pieces</span>
                                        </li>
                                        <li><img rel="preload" src="image/check.png" alt="" class="check">
                                            <span>144 Original
                                                Pieces</span>
                                        </li>
                                        <li><img rel="preload" src="image/check.png" alt="" class="check">
                                            <span>Images + Letter + Staff + Keys</span>
                                        </li>
                                    </ul>
                                    <ul class="wavs">
                                        <li><img rel="preload" src="image/subs1.png" class="img-fluid" alt=""></li>
                                        <li><img rel="preload" src="image/subs2.png" class="img-fluid" alt=""></li>
                                        <li><img rel="preload" src="image/subs3.png" class="img-fluid" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-fit">
                                <div class="box">
                                    <div class="box-heading">
                                        <h3>Sample Library</h3>
                                    </div>
                                    <div class="song-Videos">
                                        <?php
                        
                        $result = $conn->query("SELECT * FROM tbl_songs WHERE 1=1 ORDER BY RAND() LIMIT 1");
                        $row = $result->fetch_assoc();
                            
                                        ?>
                                        <video preload="auto" width="390px" controls id="player_rand">
                                            <source src="https://mylatinhome.com/absolute/upload_image/songs/<?=$row['song_name']?>" type="audio/ogg">
                                            <source src="https://mylatinhome.com/absolute/upload_image/songs/<?=$row['song_name']?>" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </video>
                                        <button id="playVid_rand" class="sigma_video-popup playVideo2"><i class="fas fa-play"></i></button>
                                    </div>
                                    <div class="buttons select_songs">
                                        <a class="one-month">Classic</a>
                                        <a class="one-year">Orignals</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-fit">
                                <div class="box">
                                    <div class="box-image">
                                        <img rel="preload" src="image/music3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="box-heading">
                                        <h3>Mobile Premium</h3>
                                        <h5></h5>
                                    </div>
                                    <div class="buttons">
                                        <button class="one-month">1 Month</button>
                                        <button class="one-year">1 Year</button>
                                    </div>
                                    <div class="subscribe">
                                        <button class="subscribe">Subscribe Now</button>
                                    </div>
                                    <ul class="offers">
                                        <li><img rel="preload" src="image/check.png" alt="" class="check">
                                            <span>144 Classical
                                                Pieces</span>
                                        </li>
                                        <li><img rel="preload" src="image/check.png" alt="" class="check">
                                            <span>144 Original
                                                Pieces</span>
                                        </li>
                                        <li><img rel="preload" src="image/check.png" alt="" class="check">
                                            <span>Images + Letter + Staff + Keys</span>
                                        </li>
                                    </ul>
                                    <ul class="wavs">
                                        <li><img rel="preload" src="image/subs1.png" class="img-fluid" alt=""></li>
                                        <li><img rel="preload" src="image/subs2.png" class="img-fluid" alt=""></li>
                                        <li><img rel="preload" src="image/subs3.png" class="img-fluid" alt=""></li>
                                    </ul>
                                </div>
                                <div class="overlay-mobile">
                                    <p>COMING SOON TO MOBILE!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="js/jquery.js"></script>
<script src="js/Custom.js"></script>
<script src="js/timer.js"></script>
<script src="js/audio.js"></script>

</html>