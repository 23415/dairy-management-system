<?php
include ("incl/header.incl.php");
?>
<h1>Home</h1>
<div class="container">
    <div class="span">
        <div class="span span3" >
            <a href='farmers/index.php'>
                <img src="img/fam1234.png"><br/>
                <strong> Farmers</strong>
            </a>
        </div>
        <div class="span span3" >
            <a href='employees/index.php'>
                <img src="img/employee1234.jpg"><br/>
                <strong>   Employees</strong>
            </a>
        </div>
        <div class="span span3" >
            <a href='delivery/index.php'>
                <img src="img/delivery1234.jpg"><br/>
                <strong>  Deliveries</strong>
            </a>
        </div>
        <div class="span span3" >
           <a href='reports/index.php'>
                <img src="img/report1234.png"><br/>
                <strong>  Reports</strong>
            </a>
        </div>
       <div class="span span3" >
             <a href='settings/index.php'>
                <img src="img/set1234.png"><br/>
                <strong> Settings</strong>  
            </a> 
        </div>
         <!-- <div class="span span3" >
            <a href='settings/index.php'>
                <img src="img/set1234.png"><br/>
                <strong>   Settings</strong>  -->
            </a>
        </div>
    </div>
</div>

<?php
$footer = 'incl/footer.incl.php';
include ("$footer");
?>