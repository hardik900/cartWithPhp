<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="aa.css">
    <link rel="stylesheet" media="screen and (max-width:1000px)" href=" logo.jpg">
    <!-- Google Fonts -->

    <link
        href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Roboto:ital,wght@0,100;1,100&family=Smooch+Sans&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear Vision</title>
    <style>
        .top {
            display: flex;
            align-items: center;
            width: 5%;
            float: left;
            height: 92vh;
            margin: 0px;
            /* background-color: aquamarine; */
        }

        .right-div {
            width: 94%;
            float: left;
        }

        .logo {
            display: block;
            margin: 20px auto;
        }

        .inner {
            height: 450px;
        }

        .founder-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .founder {
            display: flex;
            width: 86%;
        }

        .founder-img {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .founder-img img {
            width: 25vw;
            height: auto;
            border-radius: 20px;
        }

        .founder-text {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            /* align-items: center; */
            padding: 40px 30px;
            text-align: justify;
        }

        .founder-text b {
            font-size: 18px;
        }

        .founder-text p {
            padding: 8px 0px;
        }

        @media screen and (max-width:1150px) {
            .founder {
                flex-direction: column;
            }

            .founder-img {
                justify-content: flex-start;
            }

            .founder-img img {
                width: 30vw;
            }

            .founder-text p {
                padding: 0px 0px;
            }

            .founder-text {
                padding: 0px 30px 20px 30px;
            }
        }

        @media screen and (max-width:768px) {

            .founder-img img {
                width: 50vw;
            }

            .right-div {
                width: 100%;
                margin: auto;
                float: none;
                display: block;
            }

            .top {
                display: none;
            }

            .logo {
                width: 100%;
                /* display: none; */
                margin-top: 49px;
            }

            .inner {
                height: 330px;
            }
        }

        .team {
            display: flex;
            flex-direction: column;
            margin: 40px 0px;
        }

        .team-1 {
            display: flex;
            margin: 0px 250px 0px 10px;
        }

        .team-1-img {
            display: flex;
            padding: 20px;
            border-top: 3px solid red;
            border-left: 3px solid red;
        }

        .team-1-img img {
            border-radius: 20px;
            width: 250px;
        }

        .team-1-text {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: justify;
            padding: 20px;
        }

        .team-2 {
            display: flex;
            margin: 0px 100px 0px 260px;
        }

        .team-2-img {
            padding: 20px;
            display: flex;
        }

        .team-2-img img {
            border-radius: 20px;
            width: 250px;
        }

        .team-2-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: justify;
            padding: 20px;
            border-right: 3px solid green;
            border-bottom: 3px solid green;
        }

        @media screen and (max-width:800px) {
            .team-1 {
                flex-direction: column;
                margin: 0px;
            }

            .team-1-img {
                /* justify-content: center;
                align-items: center; */
                border: none;
            }

            .team-2 {
                flex-direction: column;
                margin: 0px;
            }

            .team-2-img {
                /* justify-content: center;
                align-items: center; */
            }

            .team-2-text {
                border: none;
            }
        }

        .copyright {
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 5px 10px 2px 10px;
            font-size: 20px;
            margin: 0px 50px;
        }

        .footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .footer-icon {
            margin: 35px 25px;
            font-size: 35px;
        }

        @media screen and (max-width:700px) {
            .footer-icon {
                margin: 15px 8px;
                font-size: 30px;
            }
        }

        .hello {
            display: none;
        }

        @media screen and (max-width:768px) {
            .nav {
                display: none;
            }

            .hello {
                display: block;
            }
        }
    </style>
</head>

<body>
    <?php
        include "./navbar.php";
    ?>


    <div class="founder-container">
        <br>
        <h2 class="font">About Us </h2>


        <br>
        <h2 class="text-center font mt-3">Founder</h2>
        <div class="founder">
            <div class="founder-img">
                <img src="./images/logo.jpg" alt="">
            </div>
            <div class="founder-text">
                <p>
                    <b>
                        Name: Rupa kar <br>
                    </b>
                </p>
                <p>
                    SPAROE has become ingrained in generations of Indians.The brand represents quality,affordability and
                    elegance in footwear.
                    Sparoe brand represents quality,affordability,elegance in footwear.Sparoe has a unique history of
                    innovation,product diversity and
                    dedication to meeting every Indian's footwear demand.
                    </p>


            </div>
        </div>
    </div>

    <center>
        <div style="width: 80%; height: 3px; background-color: orange;">
    </center>
    <br>
    <div class="copyright " style="font-size: 1.8vh;">
        <p>All Copyright reserved @ <a href="#" class="primary" style="font-weight: 500; text-decoration: none;">Rupa
                kar
            </a> <br> Designed and Developed by
            <a href="#" class="primary" style=" font-weight: 500; text-decoration: none;">Rupa kar</a> by
        </p>
    </div>
    </div>

</body>

</html>