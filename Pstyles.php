<?php
	$HOSTNAME = $_POST["HOSTNAME"];
	$CLASSNAME = $_POST["CLASSNAME"];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <script src="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/Support/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/Support/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/Support/css/bootstrap-select.css">
  <style>
  .RightSidePannel {
    position: absolute;
    top: 0px;
    right: 0px;
    width: 29%;
    border-right: 1px solid grey;
    padding-left: 5px;
    padding-right: 5px;
	}
  .container{width:28%;}
  .pstylesnav{width: 400px;  background-color: #ebf5fc;  color: black;  align-content: ;  cursor: pointer;  color: #c02537;}
  .pstyleclass{color:black;font-weight:bold;}
  .ps{color:white;font-weight:bold;background-color:darkgreen;text-align:center;}
  
  
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
.styadd, .FMstyadd, .BODYstyadd, .REFstyadd, .BACKstyadd{background: cornflowerblue;font-size: 16px;border-radius: 5px;padding: 5px;color: white;margin-left:20px; cursor:pointer;margin-top:10px;}

#paraStyles:focus { 
    background-color: yellow;
}
input[list]
{
  margin-left:auto;
    margin-right:auto;

    max-width: 500px;
    background: brown;
    padding: 20px 20px 20px 20px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
}
.pstylesFM, .pstylesBODY, .pstylesREF, .pstylesBACK{cursor: pointer;padding: 5px;font-size: 20px;font-family: "Comic Sans MS", cursive, sans-serif;}
  </style>
  
  <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}


</script>


</head>
<body>


  <ul class="nav nav-tabs pstylesnav">
    
    <li <?php if($CLASSNAME == "front"){ echo 'class="active"'; } ?>><a data-toggle="tab" href="#menu1" class="pstyleclass">FM</a></li>
    <li <?php if($CLASSNAME == "bodymatter"){ echo 'class="active"'; } ?>><a data-toggle="tab" href="#menu2" class="pstyleclass">BODY</a></li>
    <li <?php if($CLASSNAME == "back"){ echo 'class="active"'; } ?>><a data-toggle="tab" href="#menu4" class="pstyleclass">BACK</a></li>
    <li <?php if($CLASSNAME == "references"){ echo 'class="active"'; } ?>><a data-toggle="tab" href="#menu3" class="pstyleclass">Reference</a></li>
  </ul>

  <div class="tab-content"  style="width:28%">
    
    <div id="menu1" class="tab-pane fade <?php if($CLASSNAME == "front"){ echo 'in active'; } ?>">
     <br/>
	
  
  <input  list="browsersFM" name="browser" id="paraStylesFM" style="background: moccasin;width:250px;padding: 6px;" placeholder="Select Parastyle">
  <datalist id="browsersFM" >
   <?php
   $inicon = "";
    $inicon = file_get_contents("D:/xampp/htdocs/Integra/EditPlus/ce_editor/Conversion/Word2HTML/ini/EDIT_SETUP/PSTYLES_FM.ini");
 
 
  $iniconlines = explode("\r",$inicon);
 $inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<option value=\"".$val[0]."\" />";
	 $i++;
 }
 echo  $inilist;
 ?>
  </datalist>
  
<span class="FMstyadd">Apply</span>

<br/>
<br/>


        <div style="border-">
        <?php 
			$inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<span class=\"pstylesFM\">".$val[0]."</span><hr/>";
	 $i++;
 }
 echo  $inilist;
		?>
     </div> 
	 
    </div>
    <div id="menu2" class="tab-pane fade <?php if($CLASSNAME == "bodymatter"){ echo 'in active'; } ?>">
     <br/>
	 
  
  <input  list="browsersBODY" name="browser" id="paraStylesBODY" style="background: moccasin;width:250px;padding: 6px;" placeholder="Select Parastyle">
  <datalist id="browsersBODY" >
   <?php
   $inicon = "";
    $inicon = file_get_contents("D:/xampp/htdocs/Integra/EditPlus/ce_editor/Conversion/Word2HTML/ini/EDIT_SETUP/PSTYLES_BODY.ini");
 
 
  $iniconlines = explode("\r",$inicon);
 $inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<option value=\"".$val[0]."\" />";
	 $i++;
 }
 echo  $inilist;
 ?>
  </datalist>
  
<span class="BODYstyadd">Apply</span>

<br/>
<br/>


        <div style="border-">
        <?php 
			$inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<span class=\"pstylesBODY\">".$val[0]."</span><hr/>";
	 $i++;
 }
 echo  $inilist;
		?>
     </div> 
	 
    </div>
    <div id="menu3" class="tab-pane fade <?php if($CLASSNAME == "references"){ echo 'in active'; } ?>">
     <br/>
	 
  
  <input  list="browsersREF" name="browser" id="paraStylesREF" style="background: moccasin;width:250px;padding: 6px;" placeholder="Select Parastyle">
  <datalist id="browsersREF" >
   <?php
   $inicon = "";
    $inicon = file_get_contents("D:/xampp/htdocs/Integra/EditPlus/ce_editor/Conversion/Word2HTML/ini/EDIT_SETUP/PSTYLES_REF.ini");
 
 
  $iniconlines = explode("\r",$inicon);
 $inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<option value=\"".$val[0]."\" />";
	 $i++;
 }
 echo  $inilist;
 ?>
  </datalist>
  
<span class="REFstyadd">Apply</span>

<br/>
<br/>


        <div style="border-">
        <?php 
			$inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<span class=\"pstylesREF\">".$val[0]."</span><hr/>";
	 $i++;
 }
 echo  $inilist;
		?>
     </div> 
	 
    </div>
	 <div id="menu4" class="tab-pane fade <?php if($CLASSNAME == "back"){ echo 'in active'; } ?>">
     <br/>
	 
  
  <input  list="browsersBACK" name="browser" id="paraStylesBACK" style="background: moccasin;width:250px;padding: 6px;" placeholder="Select Parastyle">
  <datalist id="browsersBACK" >
   <?php
   $inicon = "";
    $inicon = file_get_contents("D:/xampp/htdocs/Integra/EditPlus/ce_editor/Conversion/Word2HTML/ini/EDIT_SETUP/PSTYLES_BACK.ini");
 
 
  $iniconlines = explode("\r",$inicon);
 $inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<option value=\"".$val[0]."\" />";
	 $i++;
 }
 echo  $inilist;
 ?>
  </datalist>
  
<span class="BACKstyadd">Apply</span>

<br/>
<br/>


        <div style="border-">
        <?php 
			$inilist ="";
 $i = 0;
 while($i<sizeof($iniconlines))
 {
	  $val = explode("=",$iniconlines[$i]);
	 $inilist = $inilist."<span class=\"pstylesBACK\">".$val[0]."</span><hr/>";
	 $i++;
 }
 echo  $inilist;
		?>
     </div> 
	 
    </div>
 
</div>

</body>
</html>
