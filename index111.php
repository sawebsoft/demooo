<?php
    require_once("connectdb.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://www.petrolpumpdealerchayan.in/frontassets/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="https://www.petrolpumpdealerchayan.in/assets/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="https://www.petrolpumpdealerchayan.in/frontassets/css/style.css?2" />
        <link type="text/css" rel="stylesheet" href="https://www.petrolpumpdealerchayan.in/assets/datatables/css/jquery.dataTables.min.css" />
        <link rel="shortcut icon" type="image/png" href=" https://www.petrolpumpdealerchayan.in/assets/images/OMC-Favicon.png"/>
        <link type="text/css" rel="stylesheet" href="https://www.petrolpumpdealerchayan.in/frontassets/css/jquery.loopmovement.css " />
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://kit.fontawesome.com/891455eb5b.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
    <title> Petrol Pump </title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
        </div>
        <div class="container-fluid" style="background:#EDEFF1 ;">
            <div class="container sticky-top" id="Nav" >
                <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                    <div class="row" style="width: 100%;">
                        <div class="col-12">
                            <div class="container-fluid">
                               
                                <div class="header">
                                    <div class="logo">
                        
                                        <a href="#"><img src="image/img.png" width="150" height="40" class="pt-1"></a>
                                    </div>
                                    <div class="navigatiion">                      
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php">ABOUT US</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php">USERS</a>
                                                <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">REGISTER</a></li>
                                                <li><a class="dropdown-item" href="#">LOGIN</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="admin-login.php" target="_blank">ADMIN</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid border-top border-dark border-3"></div>
        <div class="container pt-2">
        <!--====================homebanner sec start====================-->
    <section class="homeleft">
        <div class="homebanner">
            <div class="homebnnrsec bg-dark bg-gradient">
                <img src="image/img-3.jpg"  height="430" alt="slider banner" />
                <h1>Retail Outlet (Petrol Pump) Dealer Selection Portal for Oil Marketing Companies</h1>
            </div>
        </div>
        <!--====================left bottom sec start=============-->
        <div class="maincontent">    
            <div class="homemaintxt"> 
                <div class="homenotice text-danger"><strong style="font-size: 19px;">Notice :</strong> <marquee id="scroll_news" direction="left" scrollamount="" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 4, 0);" scrolldelay="">
                        <div style="font-size: 19px; color: red;" onmouseover="document.getElementById('scroll_news').stop();" onmouseout="document.getElementById('scroll_news').start();">
                            Applicants are advised to make all payments like application fees, initial security deposit only through this website. Oil companies are not responsible for any payment made through any other mode/website.
                        </div></marquee></div> 
                <h2>Dealerships for Regular & Rural Retail Outlets (Petrol Pump)</h2>
                <p>Network expansion has been an important business activity of PSU Oil Marketing Companies (OMCs) for increasing the reach of petroleum products across the country. 
            </div> 
            <div class="homequery">
                <ul>
                    <li class="divisionlist"><span>For queries: Contact - </span> <a href="https://www.petrolpumpdealerchayan.in/area-offices" target="_blank">Divisional Offices (IOC) / Territory Offices (BPC) / Regional Offices (HPC)</a></li>
                    <li><a href="https://www.petrolpumpdealerchayan.in/assets/pdfs/Brochure_for_filling_application.pdf" target="_blank">Brochure for selection of retail outlet dealers (English)</a></li>

                    <li><a href="https://www.petrolpumpdealerchayan.in/assets/pdfs/Brochure 24 11 2018 -compiled -final.pdf" target="_blank">Brochure for selection of retail outlet dealers (Hindi)</a></li>
                    <li><a href="https://www.petrolpumpdealerchayan.in/assets/pdfs/Notice - Attention of Applicants.pdf" target="_blank"><b style="color: red; font-size: 14px;">Notice</b> <b>- Attention of Applicants</b></a></li>
                </ul>
            </div>          
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content read-poup">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>       
                        </div>
                        <div class="modal-body">
                            <p>Network expansion has been an important business activity of PSU Oil Marketing Companies (OMCs) for increasing the reach of petroleum products across the country. OMCs are engaged in appointing new Dealer Distributors as a continuous business process and providing accessibility of Dealership.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================left bottom sec over=============-->
    </section>
    <!--====================homebanner over====================-->
    <!--====================bannersidebar start====================-->	
    <section class="homeright">
        <div class="banneraside">
            <div class="latestupdates" style="background:#EDEFF1;">
                <span class="lstupdathead bg-dark bg-gradient">Latest updates</span>
                <!--<marquee onMouseOver="this.setAttribute('scrollamount', 0, 0);this.stop()" OnMouseOut="this.setAttribute('scrollamount', 6, 0);this.start()" direction="up" scrolldelay="180" >-->
                <div class="homemarqueebx">   
                    <ul>
                        <li><a href="https://www.petrolpumpdealerchayan.in/advertisements-list?ad_id=MjE3">
                            Appointment of Retail Outlet Dealerships in the State of Uttar Pradesh by IOCL-IOC<b>-Closed</b></a>
                        </li> 
                        <li><a href="https://www.petrolpumpdealerchayan.in/advertisements-list?ad_id=MjE2">
                            Appointment of Retail Outlet Dealership in UT of Lakshadweep by IOCL-IOC<b>-Closed</b></a>
                        </li> 
                        <li><a href="https://www.petrolpumpdealerchayan.in/advertisements-list?ad_id=MjA2">
                            Appointment of Retail Outlet Dealerships in the State of Chhattisgarh By BPCL-BPC<b>-Closed</b></a>
                        </li>                     
                        <li><a href="https://www.petrolpumpdealerchayan.in/advertisements-list?ad_id=MjA2">
                            Appointment of Retail Outlet Dealerships in the State of Chhattisgarh By BPCL-BPC<b>-Closed</b></a>
                        </li>                     
                    </ul>
                </div>
                <!-- </marquee>-->
            </div>   
            <a href="https://www.petrolpumpdealerchayan.in/viewads" class="btn btn-primary pull-right bg-dark bg-gradient">View All/Apply</a>
        </div>


        <!--        ==============important links start===============-->
        <div  class="homeaside" style="background:#EDEFF1;">

            <span class="impevnhead bg-dark bg-gradient">Important Links</span>
            <ul>
                <li><a href="https://www.petrolpumpdealerchayan.in/assets/pdfs/Brochure_for_filling_application.pdf" target="_blank">Brochure for selection of retail <br>outlet dealers</a></li>
                <li><a href="https://www.petrolpumpdealerchayan.in/assets/pdfs/User manual for applicant - petrolpump_chayan_fina.pdf" target="_blank">User manual for applicant <br> Online application - Petrol Pump Dealer Chayan.</a></li>
                <li><a href="https://bharatpetroleum.in" target="_blank">https://bharatpetroleum.in</a></li> 
                <li><a href="http://www.hindustanpetroleum.com" target="_blank">http://hindustanpetroleum.com</a></li>
                <li><a href="https://iocl.com" target="_blank">https://iocl.com</a></li>                

            </ul>
        </div>
        <!--        ==============important links over===============-->       
    </section>
        </div>
        
    </div>
    <style>

    .flash { 
        animation-name: flash;
        animation-duration: 0.2s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-play-state: running;
    }

    @keyframes flash {
        from {color: red;}
        to {color: black;}
    }

</style>
<footer>
    <div class="fullwidth footertop">
        <div class="container">
           <a href="https://www.petrolpumpdealerchayan.in/staticpages/faq">FAQs</a> <a href="https://www.petrolpumpdealerchayan.in/area-offices">Divisional Offices (IOC) / Territory Offices (BPC) / Regional Offices (HPC)</a>
        </div>
    </div>
    <div class="fullwidth footerbtm">
        <div class="footer-wraper">
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-md-3 footer-left">Copyright &copy; Umme Habiba. All rights reserved.<br><em></em>
                    </div>
                <div class="col-sm-6 col-xs-12 col-md-5 text-center">
                    <b>Best viewed at 1366x768 resolution in Chrome 30+, IE 11+, Firefox 27+ & latest version of others.</b>
                </div>  

                <div class="col-sm-6 col-xs-12 col-md-4 footer-right">For any Complaints/Queries Write to us on <a href="#">support[at]petrolpumpdealerchayan[dot]in</a></div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>