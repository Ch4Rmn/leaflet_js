<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../functions/mapOutput.php');
require_once('../config/urlConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="Yangon Map, Map Download, Free Map Download">
    <META NAME="description" content="Yangon Map, Map Download">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">

    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/yangon.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <!-- require meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fuse.js@7.0.0"></script>

    <title>Business List</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th,
        tr {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }

        #responsive {
            width: 100%;
            height: auto;
            filter: drop-shadow(10px 10px 7px #13566f);
        }
    </style>

</head>

<body>

    <!-- header area -->
    <section id="header">
        <?php require_once('../widgets/pc-nav-bar.php') ?>
        <?php require_once('../widgets/mobile-nav-bar.php') ?>
    </section>
    <section id="body">
            <!--order-->
   <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style border"
    style="position: fixed; right: 0px; top: 350px;">
    <!-- Button -->
    <a style="
          background-color: rgb(0, 0, 0);
          border-style: solid;
          color: #fff;
          display:grid;
          line-height: 18px;
          text-decoration: none;
          padding: 5px;
        " class="btn btn-primary" href="tel:+959775204020" role="button">Order Map !
    </a>
    <!--<img style="width: 100px;height:100px" src="../assets/images/yangon township map book.jpg" alt="" />-->
    <!--<a href="tel:+959775204020"><img src="../assets/images/yangon township map book.jpg" class="img-fluid w-25 h-25" style="max-height:160px;"></img></a>-->
  </div>
  <!--<!-order--->
        <div class="main-content">
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                        Business List
                    </div>
                </div>
                <div class="description">
                    </br>
                    <h6>
                        ယခုစာမျက်နှာသည် စီးပွားရေးလုပ်ငန်းရှင်များအတွက် BusinessList များကို ရှာဖွေကြည့်ရှုနိုင်သော စာမျက်နှာဖြစ်ပါသည်။ </br></br>
                        BusinessListဆိုသည်မှာ ရန်ကုန်မြို့ရှိ စေ◌ျးဆိုင်များ၊စားသောက်ဆိုင်များ၊ဆေးဆိုင်များ အစရှိသော data များကို တစ်စုတစည်းတည်းစုဆောင်းထားသော Database တစ်ခုဖြစ်ပါသည်။</br></br>
                         လူကြီးမင်းတို့အနေနှင့် ရှာဖွေလိုသော လုပ်ငန်းများ၊စားသောက်ဆိုင်များ၊စေ◌ျးဆိုင်များ၊ဆေးဆိုင်များ အစရှိသည်တို့၏ နာမည်ကို အောက်တွင်ရှိသော search bar တွင် ရိုက်ရှာလိုက်ရုံဖြင့် Database ထဲတွင် ရှိပါက မြို့နယ်၊ခရိုင်၊လမ်း၊Longitude၊Latitude အစရှိသည်တို့ကို ဖော်ပြပေးပါသည်။</br></br>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" id="responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Business List</h3>
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                                                echo $_GET['search'];
                                                                                            }  ?>" class="form-control" placeholder="Search Data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-md-5">
                            <!--    <button type="button" class="btn btn-primary"> BusinessList = 39* * *  </button>--><figure class="text-end">
                             <blockquote class="blockquote">
                                <p> BusinessList ရဲ့ Database ထဲတွင် Data ပေါင်း</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                ၄သောင်းခန့် <cite title="Source Title">ရှိပါသည်။</cite>
                            </figcaption>
                            </figure>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <div>
                                        <!--<th>Sord-ID</th>-->
                                        <th>POI Name</th>
                                        <!--    <th>POI_N_Myn</th>-->
                                        <th>Type</th>
                                        <th>Sub-Type</th>
                                        <th>Street Name</th>
                                        <!--    <th>St-N-Myn</th>-->
                                        <th>Ward Name</th>
                                        <!--    <th>Ward-N-Myn</th>-->
                                        <th>Township Name</th>
                                        <!--    <th>Tsp-N-Myn</th>-->
                                    </div>
                                    <div>
                                        <th>Districts Name</th>
                                        <!--    <th>Dist_N_Myn3</th>-->
                                        <th>State Region Name</th>
                                        <!--    <th>S-R-N-Myn</th>-->
                                        <!--    <th>HN-Eng</th>
                                        <th>HN-Myn</th>-->
                                    <th>Longitude&Latitude</th>
                                    </div>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con = mysqli_connect("localhost", "business_list", "tsNp3SDMtw4ktTmZ", "business_list");

                                if (isset($_GET['search'])) {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM db_business_list WHERE CONCAT(Sort_ID,POI_N_Eng,POI_N_Myn,Type,Sub_Type,St_N_Eng,St_N_Myn,Ward_N_Eng,Ward_N_Myn,Tsp_N_Eng,Tsp_N_Myn,S_R_N_Eng,S_R_N_Myn,HN_Eng,HN_Myn,Longitude,Latitude) LIKE '%$filtervalues%' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $items) {
                                ?>
                                            <tr>
                                                <!--<td><?= $items['Sort_ID']; ?></td>-->
                                                <td><?= $items['POI_N_Eng']; ?></td>
                                                <!--<td><?= $items['POI_N_Myn']; ?></td>-->
                                                <td><?= $items['Type']; ?></td>
                                                <td><?= $items['Sub_Type']; ?></td>
                                                <td><?= $items['St_N_Eng']; ?></td>
                                                <!--    <td><?= $items['St_N_Myn']; ?></td>-->
                                                <td><?= $items['Ward_N_eng']; ?></td>
                                                <!--    <td><?= $items['Ward_N_Myn']; ?></td>-->
                                                <td><?= $items['Tsp_N_Eng']; ?></td>
                                                <!--    <td><?= $items['Tsp_N_Myn']; ?></td>-->
                                                <td><?= $items['Dist_N_Eng']; ?></td>
                                                <!--    <td><?= $items['Dist_N_Myn']; ?></td>-->
                                                <td><?= $items['S_R_N_Eng']; ?></td>
                                                <!--    <td><?= $items['S_R_N_Myn']; ?></td>-->
                                                <!--    <td><?= $items['HN_Eng']; ?></td>
                                                <td><?= $items['HN_Myn']; ?></td>-->
                                                
                                                <?php
$poiData = [
    'lat' => $items['Latitude'],
    'lng' => $items['Longitude'],
    'zoom' => 16,
    'name' => $items['POI_N_Eng'],
    'street' => $items['St_N_Eng'],
    'ward' => $items['Ward_N_eng'],
    'township' => $items['Tsp_N_Eng'],
    'state' => $items['S_R_N_Eng']
];
$hash = urlencode(json_encode($poiData));
?>
<td>
    <a href="map/index.html#<?php echo $hash; ?>" target="_blank">
        မြေပုံတွင်ကြည့်ရန်
    </a>
</td>
                    


                                                
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="17"> No Data Found :( </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </br></br></br></br></br></br></br>

    <!-- footer area -->

   <div class="footer-container">
    <div class="footer">
        <div class="far-left footer-content">
            <div class="heading">
                <span>Products & Services</span>
            </div>

            <div class="far-left-links-container">
                <div class="custom-links-column">
                    <a href="<?php echo $http . $domain ?>/pages/map-download/">Free Map Download</a>
                    <a target="_blank" href="https://yangontownshipmapbook.dpsmap.com/" >Yangon Township Map Book</a>
                    <a href="<?php echo $http . $domain ?>/myanmar/#en">Myanmar Map (ENG)</a>
                    <a href="<?php echo $http . $domain ?>/myanmar/#mm">Myanmar Map (MM)</a>
                    <a href="<?php echo $http . $domain ?>/mandalay/">Mandalay Map</a>
                    <a href="<?php echo $http . $domain ?>/pyinoolwin/">Pyinoolwin Map</a>
                    <a href="<?php echo $http . $domain ?>/amarapura/">Amarapura Map</a>
                    <a href="<?php echo $http . $domain ?>/taunggyi/">Taunggyi Map</a>
                    <a href="<?php echo $http . $domain ?>/sittwe/">Sittwe Map</a>
                    <a href="https://shop.dpsmap.com/">Shop</a>
                    <a href="<?php echo $http . $domain ?>/map/">Map</a>
                    <a href="<?php echo $http . $domain ?>/mon/">Mon Map</a>
                    <a href="<?php echo $http . $domain ?>/touristmap/">Tourist Map</a>
                    <a href="<?php echo $http . $domain ?>/kachin/">Kachin Map</a>
                    <a href="<?php echo $http . $domain ?>/kayah/">Kayah Map</a>
                    <a href="<?php echo $http . $domain ?>/shan/">Shan Map</a>

                </div>
                <div class="custom-links-column">
                    <a href="https://flood.firetree.net/?ll=16.8059,96.1628&zoom=10&m=5" target="_blank">Flood Simulation</a>
                    <a href="<?php echo $http . $domain ?>/1sqft/">1SQFT</a>
                    <a href="<?php echo $http . $domain ?>/bago/">Bago Map</a>
                    <a href="<?php echo $http . $domain ?>/yangon/">Yangon Map</a>
                    <a href="<?php echo $http . $domain ?>/naypyitaw/">Naypyitaw Map</a>
                    <a href="<?php echo $http . $domain ?>/pyinmana/pyinmana.shtml">Pyinmana Map</a>
                    <a href="<?php echo $http . $domain ?>/bagan/">Bagan Map</a>
                    <a href="<?php echo $http . $domain ?>/mrauku/">Mrauk-U Map</a>
                    <a href="<?php echo $http . $domain ?>/mawlamying/">Mawlamyaing Map</a>
                    <a href="<?php echo $http . $domain ?>/inlay/">Inlay Map</a>
                    <a href="<?php echo $http . $domain ?>/kyaiktiyo/">Kyaiktiyo Map</a>
                    <a href="<?php echo $http . $domain ?>/magway/">Magway Map</a>
                    <a href="<?php echo $http . $domain ?>/rakhine/">Rakhine Map</a>
                    <a href="<?php echo $http . $domain ?>/ayeyarwaddy/">Ayeyarwaddy Map</a>
                    <a href="<?php echo $http . $domain ?>/chin/">Chin Map</a>
                    <a href="<?php echo $http . $domain ?>/sagaing/">Sagaing Map</a>
                    <a href="<?php echo $http . $domain ?>/enchantingmyanmar/">Enchanting Myanmar</a>
                    <a href="<?php echo $http . $domain ?>/businesslist/">Business List</a>
                </div>
            </div>

        </div>
        
        <div class="left footer-content">
             
             <a href="https://dpsmap.com/form105/" target="_blank">Form (105), Form (7) Land Tenure
             </a>
             
            <div class="about-us-row">
                   <a href="https://dpsmap.com/form105/">
                    <img src="/assets/images/bg-arts/about_map_update.webp" alt="form105 Photo" class="responsive w-100"/>
                    </a>
              </div>
            <!--
            <a href="https://www.facebook.com/DPSMyanmar" target="_blank">FAQ</a>
            <a href="https://share.hsforms.com/1M68BkpA8Te-AmtkJPGapvA3zr1h">Give us feedback</a>
            -->
            <div class="heading">
                <span>Our Privacy & Policy</span>
            </div>
            <a href="<?php echo $http . $domain ?>/pages/privacy-and-policy/">Privacy and Policy</a>
<div class="">
<br>
                <!--<span>Our Valued Clients</span>-->
            <a class="" href="<?php echo $http . $domain ?>/valuedclients/"><span class="" style="color:yellow !important">Our Valued Clients</span></a>
            </div>
            
        </div>

        <div class="right footer-content">
            <div class="heading">
                <span>Office Address</span>
            </div>
            <a href="https://g.page/DPSMAP?share" class="address-container">
                <span class="icon ">
                    <i class="fa-solid fa-location-pin"></i></span>
                <span>
                    Rm:307, Yae Kyaw Complex, Yae Kyaw Road,<br />
                    Pazundaung Township, Yangon, Myanmar (Burma)
                </span>
            </a>
            <div class="address-container">
                <span class="icon "><i class="fa-solid fa-phone"></i></span>
                <span>
                    <a href="tel:+959774204020">+95(09)774204020</a>
                    <br />
                    <a href="tel:+959775204020">+95(09) 775204020</a>
                </span>
            </div>
            <a href="mailto:dpsmap@gmail.com" class="address-container">
                <span class="icon ">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <span> dpsmap@gmail.com </span>
            </a>
            <a href="mailto:dm@dpsmap.com" class="address-container">
                <span class="icon ">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <span> dm@dpsmap.com </span>
            </a>
        </div>

        <!--<div class="far-right footer-content">-->
        <!--    <div class="heading">-->
        <!--        <span>Subscribe Here</span>-->
                <!--<div class="sub-heading">By entering your email, you are agreeing to our <a href="https://dpsmap.com/pages/privacy-and-policy/" class="text-primary">privacy policy.</a></div>-->
        <!--                        <div class="sub-heading">Get exclusive access to map news , articles & updates on Technology</div>-->

        <!--    </div>-->
                <div class="far-right footer-content">
            <div class="heading">
                <!--<span>SUBSCRIBE FOR MAP UPDATES</span>-->
                                <span>SUBSCRIBE HERE</span>

                <!--<div class="sub-heading">By entering your email, you are agreeing to our <a href="https://dpsmap.com/pages/privacy-and-policy/" class="text-primary">privacy policy.</a></div>-->
                                <div class="sub-heading">By entering your email, you will receive <span class="text-primary">the latest updates, offers, and features </span>about our Maps.

</div>

            </div>
            <!--
            <form action="#" method="post" class="address-container">
                <label> Email *</label>
                <input type="email" name="email" required />
                <button type="submit" name="btn_submit">Submit</button>
            </form>
            -->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
            <script>
            hbspt.forms.create({
            region: "na1",
            portalId: "6706853",
            formId: "f8cee9dd-822e-4036-aaa0-34a407e2834f"
            });
            </script>

            
            <!--QR-->
            <div class="mt-5 ms-1"><a class="" href="https://dpsmap.com/">
                    <!--<img src="/assets/images/dpsQR.png" alt="form105 Photo" class="responsive w-50 h-50"/></a>-->
                                        <img src="/assets/images/OfficalDPS QR.png" alt="form105 Photo" class="responsive w-100 h-100"/></a>

            </div>    
            <!--<div class="mt-5 ms-5"><a class="" href="https://github.com/dpsmap/dpsmap.com">-->
            <!--        <img src="/assets/images/github_qr-code.png" alt="form105 Photo" class="responsive w-25 h-25"/></a>-->
            <!--</div>-->
            
        </div>
    </div>
</div>

<div class="footer-credits">
    
    <div class="button-container">
        <a href="https://dpsmap.com/mapbox-busstop/index.php">
            <button class="button"> Mapbox-busstop </button>
        </a>
        <a href="https://dpsmap.com/mapbox-busstop/hotel-list.php">
            <button class="button"> Hotel List Map </button>
        </a>
        <a href="https://dpsmap.com/housenumbermap/">
            <button class="button"> House Number Map </button>
        </a>
        <a href="https://dpsmap.com/carto/">
            <button class="button"> Carto Map </button>
        </a>
        <a href="https://dpsmap.com/1sqft/">
            <button class="button"> 1SQFT Map </button>
        </a>
        <a href="https://dpsmap.com/populationmap/">
            <button class="button"> Population Map </button>
        </a>
        <a href="https://dpsmap.com/industrial/">
            <button class="button"> Industrial Zone Map </button>
        </a>
        <a href="https://dpsmap.com/administrative-boundaries/">
            <button class="button"> administrative-boundaries </button>
        </a>
    </div>
  
    <div class="bg-img">
        <div class="backdrop">
            <div>© 2024 Design Printing Services Co. Ltd. All rights reserved. | Powered by DPS Map | Updated by AMO(02.Nov.2023) with ATP, AMO(12.Dec.2024) with <a href="https://github.com/Ch4Rmn">LHK</a>| Version
            <a href="https://github.com/dpsmap/dpsmap.com">0.1</a>
            </div>
        </div>
        <img src="<?php echo $http . $domain ?>/assets/images/footer.jpg" alt="footer-deco" />
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Collect table data
    var rows = Array.from(document.querySelectorAll('.table.table-bordered tbody tr'));
    var data = rows.map(row => {
        var cells = row.querySelectorAll('td');
        return {
            row: row,
            POI: cells[0]?.textContent.trim() || '',
            Type: cells[1]?.textContent.trim() || '',
            SubType: cells[2]?.textContent.trim() || '',
            Street: cells[3]?.textContent.trim() || '',
            Ward: cells[4]?.textContent.trim() || '',
            Township: cells[5]?.textContent.trim() || '',
            District: cells[6]?.textContent.trim() || '',
            StateRegion: cells[7]?.textContent.trim() || '',
            Location: cells[8]?.textContent.trim() || ''
        };
    });

    // 2. Setup Fuse.js
    var fuse = new Fuse(data, {
        keys: ['POI', 'Type', 'SubType', 'Street', 'Ward', 'Township', 'District', 'StateRegion', 'Location'],
        threshold: 0.3,
        minMatchCharLength: 1
    });

    // 3. Handle input
    var input = document.querySelector('input[name="search"]');
    if (input) {
        input.addEventListener('input', function() {
            var keyword = input.value.trim();
            if (!keyword) {
                rows.forEach(row => row.style.display = '');
                return;
            }
            var result = fuse.search(keyword);
            rows.forEach(row => row.style.display = 'none');
            result.forEach(item => item.item.row.style.display = '');
        });
    }
});
</script>

<center>
    
    <!-- Start of StatCounter Code for Dreamweaver ကိုကြီးနှင့် ေအာင်သက်ပိုင် တို့ ၃၀.၁.၂၀၂၃ တွင် ထည့်သည် -->
        <script type="text/javascript">
        var sc_project=310175;
        var sc_invisible=0;
        var sc_security="df515d3d";
        var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "http://www.");
        document.write("<sc"+"ript type='text/javascript' src='" +
        scJsHost+
        "statcounter.com/counter/counter.js'></"+"script>");
        </script>
        <noscript><div class="statcounter"><a title="web counter"
        href="http://statcounter.com/" target="_blank"><img
        class="statcounter"
        src="//c.statcounter.com/310175/0/df515d3d/0/" alt="web
        counter"></a></div></noscript>
    </center>
    <center>
        <noscript></noscript>
    </center>
    <!-- End of StatCounter Code for Dreamweaver -->
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>