<?php include "header.php"; ?>
<!-- End Site Header -->
<!-- Start Nav Backed Header -->
<style>
    .block,.block2,.block3 {
        align-items: center;
        padding: 25px 100px 25px;
    }

    h3 {
        color: blue;
        font: 10px;
        font-weight: 500;
    }

    .mybox1,.mybox12,.mybox13 {
        display: none;
    }

    .bold {
        font-weight: bold;
    }

    button {
        padding: 10px;
        font-size: 15px;
        font-weight: 700;
        color: rgb(5, 14, 5);
        border: none;
        border-radius: 30px;
        background-color: rgb(182, 215, 182);
        margin-top: 20px;
    }

    .mybox img {
        max-height: 95px;
    }
    .mybox2 img {
        max-height: 95px;
    }
    .mybox3 img {
        max-height: 95px;
    }

    div,
    span {
        /* font-size: 20px; */
    }
</style>
<div class="nav-backed-header parallax" style="background-image:url(images/slide2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Initiatives</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Nav Backed Header -->
<!-- Start Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Initiatives</h1>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->
<!-- Start Content -->
<!-- <h1>GeeksforGeeks</h1>  -->
<div class="block">
    <h3>Counselling & Prayer Tower</h3>
    <div class="mybox">
        <div>
            Perpetual adoration and intercession goes on daily from 5.45 am to 10 pm before the Blessed sacrament. You can send your prayer request to
            <br>
            <span class="bold"> 8793874421 / 7588521473</span>
            <br>
            Every Friday evening there is Night Vigil at the Perpetual Adoration Chapel from 6 pm to 2 am.

            Counselling Facility is available at the Retreat Centre during the Retreats and by prior appointment at other times.
            <br>
            <img src="images/counselling.png" alt="" srcset="">
            <!-- </span> -->

        </div>
        <hr>
        <!-- _____________ -->

        <div class="block">
            <h3>The Retreat Center</h3>
            <div class="mybox">
                <div>
                    The Retreat Centre started operating in 2008 as a result of a prophetic call to host retreats. The first retreat was a Charismatic Youth Retreat in English and this was followed by other groups from Mumbai, Goa & Kolhapur. In the second year 2009, retreats in Konkani & Marathi were also registered. Since then, the Centre hosted retreats in all 3 languages for youth, family retreats, priest, seminarians and religious sisters. Mighty Grace of God has been flowing, touching many lives, fulfilling His mission for the Lord’s Ranch Retreat Centre as evident from the many testimonies received. The Lord’s Ranch Retreat Centre is open to all Roman Catholic groups and organizations to come and use this God given facility for His Glory. The Centre is supported by an accommodation unit housing over 300 <span id="span1">...</span>
                    <span class="mybox1" id="mybox1id">
                        at a time. Regular retreats as well as week-end retreats need to be booked a minimum of a month in advance both for individuals as well as groups.
                        <br>
                        <img src="images/Retreat Centre_1.jpg" alt="" srcset="">
                        <img src="images/Retreat Centre_2.jpg" alt="" srcset="">
                        <br>
                        <img src="images/Retreat Centre_3.jpg" alt="" srcset="">
                        <img src="images/Retreat Centre_4.jpg" alt="" srcset="">
                    </span>
                </div>
                <button id="mybuttonid" onclick="changeReadMore()">
                    Read More
                </button>
            </div>
        </div>

        <!-- _____________ -->

        <div class="block2">
            <h3>Rehab Center</h3>
            <div class="mybox2">
                <div>
                    Rehabilitation Centre for Drug Addicts and Alcoholics (Good Shepherd Recovery Home). In keeping with the mission of the Lord’s Ranch, the centre was opened in 2008 to reach out to the marginalized of society and accepts clients from every status in society. The Good Shepherd Recovery Home operated in one of the villas of the Ranch, while the purpose built centre with facilities for 60 inmates with counselling rooms, etc. <span id="span12">...</span>
                    <span class="mybox12" id="mybox1id2">
                        was under construction. The new centre was inaugurated in 2011 and blessed by His Lordship Bishop Thomas Dabre.
                        <br>
                        <img src="images/rehab1.jpg" alt="" srcset="">
                        <img src="images/rehab2.jpg" alt="" srcset="">
                        <img src="images/rehab3.jpg" alt="" srcset="">
                        <br>
                        <img src="images/rehab4.jpg" alt="" srcset="">
                        <img src="images/rehab5.jpg" alt="" srcset="">
                        <img src="images/rehab6.jpg" alt="" srcset="">
                        <br>
                        <img src="images/rehab7.jpg" alt="" srcset="">
                    </span>
                </div>
                <button id="mybuttonid2" onclick="changeReadMore2()">
                    Read More
                </button>
            </div>
        </div>

        <!-- ________ -->

        <div class="block3">
            <h3>Home For The Retired</h3>
            <div class="mybox3">
                <div>
                    A call for all those who would like to actively spend their retirement in the service of humanity and the mission of the Lord’s Ranch. The talents and gifts that God blessed you, the skills you perfected at your lifetime occupation, you are invited to share with the marginalized in society at the Lord’s Ranch. In return, all your needs are taken care of including your old age by the community of love at the Lord’s Ranch. <span id="span13">...</span>
                    <span class="mybox13" id="mybox1id3">
                        The Lord’s Ranch offers you a home with a difference – set amidst beautiful setting, our self-contained chalet units comprise of sitting, dining area, a bedroom, toilet and kitchen, not to mention spacious sit outs, overlooking the mountains and the lake. You are free to enjoy your privacy at the same time community amenities are open for you.
                        <br>
                        <img src="images/retired1.jpg" alt="" srcset="">
                        <img src="images/retired2.jpg" alt="" srcset="">
                        <img src="images/retired3.jpg" alt="" srcset="">
                    </span>
                </div>
                <button id="mybuttonid3" onclick="changeReadMore3()">
                    Read More
                </button>
            </div>
        </div>
        <br>
        <br>
        <hr>
        <!-- Start Footer -->
        <script>
            function changeReadMore() {
                const mycontent =
                    document.getElementById('mybox1id');
                const mybutton =
                    document.getElementById('mybuttonid');
                const span1 = document.getElementById("span1")

                if (mycontent.style.display === 'none' ||
                    mycontent.style.display === '') {
                    mycontent.style.display = 'inline';
                    span1.style.display = "none";
                    mybutton.textContent = 'Read Less';
                } else {
                    mycontent.style.display = 'none';
                    mybutton.textContent = 'Read More';
                    span1.style.display = "inline";
                }
            }

            function changeReadMore2() {
                const mycontent =
                    document.getElementById('mybox1id2');
                const mybutton =
                    document.getElementById('mybuttonid2');
                const span1 = document.getElementById("span12")

                if (mycontent.style.display === 'none' ||
                    mycontent.style.display === '') {
                    mycontent.style.display = 'inline';
                    span1.style.display = "none";
                    mybutton.textContent = 'Read Less';
                } else {
                    mycontent.style.display = 'none';
                    mybutton.textContent = 'Read More';
                    span1.style.display = "inline";
                }
            }

            function changeReadMore3() {
                const mycontent =
                    document.getElementById('mybox1id3');
                const mybutton =
                    document.getElementById('mybuttonid3');
                const span1 = document.getElementById("span13")

                if (mycontent.style.display === 'none' ||
                    mycontent.style.display === '') {
                    mycontent.style.display = 'inline';
                    span1.style.display = "none";
                    mybutton.textContent = 'Read Less';
                } else {
                    mycontent.style.display = 'none';
                    mybutton.textContent = 'Read More';
                    span1.style.display = "inline";
                }
            }
        </script>
        <?php include "footer.php"; ?>