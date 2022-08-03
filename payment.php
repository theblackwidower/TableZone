<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="test1.css">

    <title> My Homepage</title>
    <?php
    require('functions.php');
    ?>
    <meta charset="UTF-8">
    <meta name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0s" />
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
</head>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<div class="col-md-12">
    <a href="index.php" class="title1">
        <h1>TableZones</h1>
    </a>
</div>

<div class="navigation">
    <div class="dropdown">
        <button class="dropbtn">ALL PRODUCTS</button>
        <div class="dropdown-content">
            <a href="#">View All Games</a>
            <a href="#">New Releases</a>
            <a href="#">Terrain Crate</a>
            <a href="#">Kings of War</a>
            <a href="#">Armada</a>
            <a href="#">Firefight</a>

        </div>
    </div>
    <div class="dropdown1">
        <button class="dropbtn1">RESOURCES</button>
        <div class="dropdown-content1">
            <a href="#">Deadzone Campaign</a>
            <a href="#">Free Rules</a>
            <a href="#">Easy Army</a>
            <a href="#">Pathfinder Program</a>
            <a href="#">Wallpapers</a>
            <a href="#">clubs</a>
        </div>
    </div>

<body>
<form id="overall">

    <fieldset id="overall1">
        <!--This is for the top part of the form-->
        <fieldset class="head">
            <p class="font1">Payment Details</p>
        </fieldset>
        <!--This is for the mid part of the form-->
        <fieldset id="mid">
            <!--Card Number-->
            <label for="fname" class="font">Card Number</label>
            <input type="text" id="fname" name="fname" class="fields" placeholder="CARD NUMBER" required> <br> <br>
            <!--CardHolder Name-->
            <label for="lname" class="font">Card Holder Name</label>
            <input type="text" id="lname" name="lname" class="fields" placeholder="CARD HOLDER NAME" required><br> <br>
            <!--Date of Birth-->
            <label for="DOB" class="font">Date</label>
            <!--Different options for day of date-->
            <select id="DOB" name="DOB" required>
                <option value="Date">Day</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <!--Different options for year of date-->
            <select id="DOB2" name="DOB2" required>
                <option value="Year">Year</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select> <br> <br>
            <!--CVV-->
            <label for="lname" class="font">CVV</label>
            <input type="text" id="lname" name="lname" class="fields" placeholder="CVV NUMBER" required><br> <br>
            <!--Agree to terms and conditions-->
            <input type="checkbox" id="cbox" name="cbox" value="cbox" class="font2" required>
            <label for="cbox" class="font1">I Agree to the Terms of use</label>
        </fieldset>
        <!--Submit and Cancel buttons part-->
        <fieldset class="head">
            <span type="submit" id="font3" value="" data-inline="true"> <a href="orderconfirm.php">CONFIRM AND PAY</a></span>
            <input type="reset" id="font4" value="Cancel" data-inline="true" style="vertical-align:-10%;">
        </fieldset>
    </fieldset>
</form>
</body>
</html>

<?php
include('footer.php');
?>
