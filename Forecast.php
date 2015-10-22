<!DOCTYPE html>
<html>

<head>

<style>
table {
    border: 3px solid black;
   
    border-collapse: collapse;
  
}
th, td {
    padding: 8px;

}
#header {
  text-align: center;
   font-size: 40px; 
   margin-bottom: 15px;
   font-style: sans-serif;
   font-family: sans-serif;
}
ul {
    list-style-type: disc;
}
div {
  text-align: left;
}
</style>



<script type="text/javascript">

  function Clear()
  {
     document.getElementById("Saddress").value ="";
     document.getElementById("City").value="";
     document.getElementById("State").value="blank";
     document.getElementById("Faherenheit").checked="checked";
     
  }

  function Validation()
  {

    var street = document.getElementById("Saddress").value;
    var city = document.getElementById("City").value;
    var state = document.getElementsByName("State")[0].value;
    var reg = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/;
    
    /*if(street!="" & city!="" & state!="blank")
    {  
       
      if (!reg.test(city)) 
        {
          alert("Please dont give any special characters in city field");
          
        } 
        
     } */
    if(street=="" & city=="" & state=="blank")
    {
      alert("Please enter value of Both City and Address and state");
      
    }
    else if(street=="")
    {
      alert("Enter Street Address");
      
    }
    else if(city=="")
    {
      alert("Please enter value for City");
      
    }
    else if(state=="blank")
    {
      alert("Please enter valid State");
      
    }
    
 }
  
</script>
</head>
<body style = "text-align:center">

<div id = "header">
<B>Forecast Search</B>
</div>

<table style="width:40%; margin-left:400px">
   <th>
   <ul>
        <div>
          <form name = "Weather" method="POST">

    <p><label for="Saddress">Street Address:*</label>
    <input type="text" size = "45" value="<?php if(isset($_POST["Saddress"])) echo $_POST["Saddress"];?>" id="Saddress" name="Saddress"></p>
    <p><label for="City">City:*</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" size="45" value="<?php if(isset($_POST["City"])) echo $_POST["City"];?>" id = "City" name="City"></p>
    <p><label for="State">State:*</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <select value="" id="State" name="State">
  <option selected value="blank">Select Your State..</option>
  <option value="AL" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="AL"){ echo "selected=\"selected\""; } ?>>Alabama</option>
<option value="AK" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="AK") { echo "selected=\"selected\""; } ?>>Alaska</option>
<option value="AZ" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="AZ") { echo "selected=\"selected\""; } ?>>Arizona</option>
<option value="AR" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="AR") { echo "selected=\"selected\""; } ?>>Arkansas</option>
<option value="CA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="CA") { echo "selected=\"selected\""; } ?>>California</option>
<option value="CO" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="CO") { echo "selected=\"selected\""; } ?>>Colorado</option>
<option value="CT" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="CT") { echo "selected=\"selected\""; } ?>>Connecticut</option>
<option value="DE" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="DE") { echo "selected=\"selected\""; } ?>>Delaware</option>
<option value="DC" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="DC") { echo "selected=\"selected\""; } ?>>District Of Columbia</option>
<option value="FL" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="FL") { echo "selected=\"selected\""; } ?>>Florida</option>
<option value="GA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="GA") { echo "selected=\"selected\""; } ?>>Georgia</option>
<option value="HI" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="HI") { echo "selected=\"selected\""; } ?>>Hawaii</option>
<option value="ID" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="ID") { echo "selected=\"selected\""; } ?>>Idaho</option>
<option value="IL" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="IL") { echo "selected=\"selected\""; } ?>>Illinois</option>
<option value="IN" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="IN") { echo "selected=\"selected\""; } ?>>Indiana</option>
<option value="IA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="IA") { echo "selected=\"selected\""; } ?>>Iowa</option>
<option value="KS" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="KS") { echo "selected=\"selected\""; } ?>>Kansas</option>
<option value="KY" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="KY") { echo "selected=\"selected\""; } ?>>Kentucky</option>
<option value="LA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="LA") { echo "selected=\"selected\""; } ?>>Louisiana</option>
<option value="ME" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="ME") { echo "selected=\"selected\""; } ?>>Maine</option>
<option value="MD" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="MD") { echo "selected=\"selected\""; } ?>>Maryland</option>
<option value="MA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="MA") { echo "selected=\"selected\""; } ?>>Massachusetts</option>
<option value="MI" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="MI") { echo "selected=\"selected\""; } ?>>Michigan</option>
<option value="MN" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="MN") { echo "selected=\"selected\""; } ?>>Minnesota</option>
<option value="MS" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="MS") { echo "selected=\"selected\""; } ?>>Mississippi</option>
<option value="MO" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="MO") { echo "selected=\"selected\""; } ?>>Missouri</option>
<option value="MT" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="MT") { echo "selected=\"selected\""; } ?>>Montana</option>
<option value="NE" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="NE") { echo "selected=\"selected\""; } ?>>Nebraska</option>
<option value="NV" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="NV") { echo "selected=\"selected\""; } ?>>Nevada</option>
<option value="NH" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="NH") { echo "selected=\"selected\""; } ?>>New Hampshire</option>
<option value="NJ" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="NJ") { echo "selected=\"selected\""; } ?>>New Jersey</option>
<option value="NM" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="NM") { echo "selected=\"selected\""; } ?>>New Mexico</option>
<option value="NY" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="NY") { echo "selected=\"selected\""; } ?>>New York</option>
<option value="NC" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="NC") { echo "selected=\"selected\""; } ?>>North Carolina</option>
<option value="ND" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="ND") { echo "selected=\"selected\""; } ?>>North Dakota</option>
<option value="OH" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="OH") { echo "selected=\"selected\""; } ?>>Ohio</option>
<option value="OK" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="OK") { echo "selected=\"selected\""; } ?>>Oklahoma</option>
<option value="OR" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="OR") { echo "selected=\"selected\""; } ?>>Oregon</option>
<option value="PA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="PA") { echo "selected=\"selected\""; } ?>>Pennsylvania</option>
<option value="RI" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="RI") { echo "selected=\"selected\""; } ?>>Rhode Island</option>
<option value="SC" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="SC") { echo "selected=\"selected\""; } ?>>South Carolina</option>
<option value="SD" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="SD") { echo "selected=\"selected\""; } ?>>South Dakota</option>
<option value="TN" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="TN") { echo "selected=\"selected\""; } ?>>Tennessee</option>
<option value="TX" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="TX") { echo "selected=\"selected\""; } ?>>Texas</option>
<option value="UT" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="UT") { echo "selected=\"selected\""; } ?>>Utah</option>
<option value="VT" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="VT") { echo "selected=\"selected\""; } ?>>Vermont</option>
<option value="VA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="VA") { echo "selected=\"selected\""; } ?>>Virginia</option>
<option value="WA" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="WA") { echo "selected=\"selected\""; } ?>>Washington</option>
<option value="WV" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="WV") { echo "selected=\"selected\""; } ?>>West Virginia</option>
<option value="WI" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="WI") { echo "selected=\"selected\""; } ?>>Wisconsin</option>
<option value="WY" <?php if(isset($_POST["State"]) && ($_POST["State"]) =="WY") { echo "selected=\"selected\""; } ?>>Wyoming</option>
</select>       
    <p><label for="Degree">Degree:*</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="Radio" checked="checked" id="Faherenheit" value="Faherenheit" name="Degree" <?php if(isset($_POST["Degree"]) && ($_POST["Degree"]) =="Faherenheit") { echo "checked=\"checked\""; } ?>><label>Fahrenheit</label>
    <input type="Radio" value="Celsius" name="Degree"<?php if(isset($_POST["Degree"]) && ($_POST["Degree"]) =="Celsius") { echo "checked=\"checked\""; } ?>><label>Celsius</label>
    </p>

    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="Submit" value="Search"  name="Search" onclick="Validation()" />
    <input type="Submit" value="Clear" name="clear" onClick="Clear()"/>
    </p>
    <p>*_<I>Mandatory Fields</I></p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href = "http://forecast.io">Powered by Forecast.io</a></p>
    
  </form> 
  </div>  
  </ul>
  </th>
  </table>
<?php
if(isset($_POST["Search"]))
{ 
 
  $Saaddress = urlencode($_POST["Saddress"]);
  $Ciity = urlencode($_POST["City"]);
  $Sttate = urlencode($_POST["State"]);
   
   
   if(isset($_POST["Saddress"]) && ($_POST["City"]) && $Sttate!="blank")
   {
      $url="http://maps.google.com/maps/api/geocode/xml?address=".$Saaddress.",".$Ciity.",".$Sttate;
      $URL=simplexml_load_file("$url") or die("Error: Cannot create object");
      $geocode1=$URL->status;
      if($geocode1=="ZERO_RESULTS")
      {
        echo'<script>alert("Invalid Address");</script>';
      
      }
      else {     
      $latitude=$URL->result->geometry[0]->location->lat;
      $longtitude=$URL->result->geometry[0]->location->lng;

            if($_POST["Degree"]=="Faherenheit")
            {
                $deg="us";
            }
            else
            {
                $deg="si";
            }
            
            $apikey="997f5d7abe1591bc432a8e2d4104bfe1";
            $forecasturl="https://api.forecast.io/forecast/".$apikey."/".$latitude.",".$longtitude."?units=".$deg."&exclude=flags";
            $contents=file_get_contents("$forecasturl");
            
            $json = json_decode($contents,true);
            error_reporting(0);
            $current=$json['currently'];
            $current1=intval($current['precipProbability']);
            $current2=$current1*100;
            $current3=intval($current['windSpeed']);
            $current4=intval($current['dewPoint']);
            $current5=intval($current['visibility']);
            $current6=$current['summary'];
            $current7=round($current['temperature']);
            $current8=$current['humidity'];
            $current9=$current8*100;
            $daily=$json['daily'];
            $data=$daily['data'];
            $time=$data[0];
            $timez=$json['timezone'];
            $tooltip=$current['summary'];
            date_default_timezone_set($timez);
            
            $newDateTime = date('g:i A', $time['sunriseTime']);
            date_default_timezone_set($timez);
            
            $newDateTime1 = date('g:i A', $time['sunsetTime']);
            
            
            if($current['icon']=="partly-cloudy-night")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png";
                $tooltip = $current['summary'];
            }
            if($current['icon']=="clear-day")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/clear.png";
                  $tooltip = $current['summary'];
                
            }
            if($current['icon']=="clear-night")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png";
                  $tooltip = $current['summary'];
            }
            if($current['icon']=="rain")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/rain.png";
                  $tooltip = $current['summary'];
            }
            if($current['icon']=="snow")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/snow.png";
                  $tooltip = $current['summary'];
            }
            if($current['icon']=="sleet")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png";
                  $tooltip = $current['summary'];
            }
            if($current['icon']=="wind")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/wind.png";
                  $tooltip = $current['summary'];
            }
            if($current['icon']=="fog")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/fog.png";
                  $tooltip = $current['summary'];
            }
            if($current['icon']=="cloudy")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png";
                  $tooltip = $current['summary'];
            }
            if($current['icon']=="partly-cloudy-day")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png";
                  $tooltip = $current['summary'];
            }
            
            
            if($deg=="us") 
            
            {
            
            
            if($current['precipIntensity']>=0 && $current['precipIntensity']<0.002 )
            {
              $precip = "None";
              
            
            }
            if($current['precipIntensity']>=0.002 && $current['precipIntensity']<0.017)
            {
              $precip = "Very Light";
          
            
            }
            if($current['precipIntensity']>=0.017 && $current['precipIntensity']<0.1)
            {
              $precip = "Light";
          
            
            }
            if($current['precipIntensity']>=0.1 && $current['precipIntensity']<0.4)
            {
              $precip = "Moderate";
              
            
            }
            if($current['precipIntensity']>=0.4 )
            {
              $precip = "Heavy";
              
            
            }
            }
            else {
            
            if($current['precipIntensity']>=0 && $current['precipIntensity']<0.0508 )
            {
              $precip = "None";
              
            
            }
            if($current['precipIntensity']>=0.0508 && $current['precipIntensity']<0.4318)
            {
              $precip = "Very Light";
          
            
            }
            if($current['precipIntensity']>=0.4318 && $current['precipIntensity']<2.54)
            {
              $precip = "Light";
          
            
            }
            if($current['precipIntensity']>=2.54 && $current['precipIntensity']<10.16)
            {
              $precip = "Moderate";
              
            
            }
            if($current['precipIntensity']>=10.16)
            {
              $precip = "Heavy";
              
            
            }
            }
            
           
$Table = "&nbsp<table style = 'border-color=black;margin-left:400px'";
$Table .= "<tr>";
$Table .= "<td></td>";
$Table .= "<td  style='text-align:Center;'><b>".$current6."</b></td>";
$Table .= "<td></td>";
$Table .= "</tr>";

if($deg=="us"){
$Table .= "<tr>";
$Table .= "<td></td>";
$Table .= "<td style='text-align:Center;'><b>".$current7."&deg F"."</b></td>";
$Table .= "</tr>";
}
else{
$Table .= "<tr>";
$Table .= "<td></td>";
$Table .= "<td  style='text-align:Center;'><b>".$current7."&deg C"."</b></td>";
$Table .= "</tr>";
}

$Table .= "<tr>";
$Table .= "<td></td>";
$Table .= "<td>"."<img src ='".$icon."' title='".$tooltip."'>". "</td>";
$Table .= "<td></td>";
$Table .= "</tr>";

$Table .= "<tr>";
$Table .= "<td style='text-align:left;'>"."Precipitation :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$precip."</td>";
$Table .= "<td></td>";
$Table .= "</tr>";

$Table .= "<tr>";
$Table .= "<td style='text-align:left;'>"."Chance of Rain :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current2."%"."</td>";
$Table .= "<td></td>";
$Table .= "</tr>";

if($deg=="us"){
$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Wind Speed :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current3."Mph"."</td>";
$Table .= "</tr>";
}
else
{
$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Wind Speed :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current3."m/s"."</td>";
$Table .= "</tr>";
}

if($deg=="us") 
{
$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Dew Point :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current4."&deg F"."</td>";
$Table .= "<td></td>";
$Table .= "</tr>";
}
else
{
$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Dew Point :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current4."&deg C"."</td>";
$Table .= "<td></td>";
$Table .= "</tr>";
}


$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Humidity :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current9."%"."</td>";
$Table .= "</tr>";

if($deg=="us"){
$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Visibility :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current5."mi"."</td>";
$Table .= "</tr>";
}
else{
$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Visibility :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$current5."km"."</td>";
$Table .= "</tr>";
}

$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Sunrise :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$newDateTime."</td>";
$Table .= "</tr>";

$Table .= "<tr>";
$Table .= "<td style='text-align:left;' >"."Sunset :"."</td>";
$Table .= "<td ></td>";
$Table .= "<td >".$newDateTime1."</td>";
$Table .= "</tr>";


$Table .= "</table>";

echo $Table;
  }          
 }
 }
?>
<noscript>
</body>
</html>