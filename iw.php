<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Indian Wildlife</title>
<link rel="stylesheet" href="website.css" type="text/css" />
<script type="text/javascript" src="jquery-1.7.2.js">
</script>
<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript">
function checker()
{
var id=document.getElementById('emailid').value;
var pwd=document.getElementById('pwd').value;
var index1=id.indexOf("@");
var index2=id.lastIndexOf(".");
if(id==null || id==' ')
{
document.getElementById('login').innerHTML="Please fill your email-id";
}
else {if(index1==-1 || index2==-1) { document.getElementById('login').innerHTML="Please fill a valid email-id"; }
else {return true; }}
}


function loadXMLDoc(dname)
{
if (window.XMLHttpRequest)
  {
  xhttp=new XMLHttpRequest();
  }
else
  {
  xhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xhttp.open("GET",dname,false);
xhttp.send(null);
return xhttp.responseXML;
}


function receive(url,id)
{
var c=Number(id);
var xmlDoc;
var x,y,txt="";
var i=0;

xmlDoc=loadXMLDoc(url);

x=xmlDoc.documentElement.childNodes[c];
txt=txt+"<center><span id='special'>"+x.childNodes[0].childNodes[0].nodeValue+"</span></center><center style='margin-top:8px;'><span class='content' ><a class='none' href='#'>Information</a></span><span class='content'><a href='#' class='none'>Gallery</a></span></center>";
txt=txt+"<table border='0' cellspacing='5px' style="+"color:#FFF;"+"><tr><td>&nbsp;</td></tr>";
for(i=1;i<x.childNodes.length;i++)
{ 
if(x.childNodes[i].nodeType==1)
{
txt=txt+"<tr><td>"+(x.childNodes[i].nodeName).toUpperCase()+":-</td>";
txt=txt+"<td style="+"font-size:17px;font-family:Cambria;"+">"+x.childNodes[i].childNodes[0].nodeValue+"</td></tr><tr><td><hr/></td></tr>";
}

}
txt=txt+"</table>";
document.getElementById('disp').innerHTML=txt;
}

function display(str,name)
{
	var height=document.getElementById(name).height;
	var width=document.getElementById(name).width;	
var image="<img src='images/tables/"+str+".jpg' height='"+height+"px' width='"+width+"px' alt='"+str+"' />";
document.getElementById(name).innerHTML=image;
}

</script>
</head>

<body>

	<div id="container">
    <div id="bookmark" style="position:fixed;bottom:0px;right:0px;border:medium solid #FFC;background-color:#000;">
    <a href="#mark" style="text-decoration:none;color:#FFC;font-size:16px;padding:5px;font-family:'Lucida Handwriting';">Back To Top</a>
    </div>
	<div id="top-header">
		<table width="1000px">	
			<tr>
				<td class="first" style="width:300px;">
					<a name="mark" id="name" href="iw.jsp">Indian Wildlife</a>
				</td>
			
				<td class="first">
					<div id="login-section">
					
						<form action="validate.jsp" method="get" onsubmit="checker()" >
						Email-id:  <input name="id" type="text" id="emailid" value="" />
						Password:  <input name="pass" type="password" id="pwd" value="" />&emsp;
						<input type="submit" value="Log In" />&ensp;
						<a class="second" href="sign-up.php">Sign UP!</a><br/>&ensp;&ensp;&ensp;
				<!--<a style="padding-left:45%;" class="second" href="PasswordRecovery.jsp">Forgot Your Password ??</a>-->
						</form>
										

					</div>
			    </td>
			</tr>
			</table>
		</div>
		
		<div id="second-header" style="margin-top:5px;">
			<ul class="tab" style="margin-top:3px;">
				<li id="faf" class="li1" ><a href="#">Flora &amp; Fauna</a>|</li>
				<li id="animals" class="li1"><a href="#">Animals</a>|</li>
				<li id="org" class="li1" ><a href="#">Organizations</a>|</li>
				<li id="np" class="li1"><a href="#">National Parks</a>|</li>
				<li id="wic" class="li1"><a href="#">Conservation</a>|</li>
				<li id="cin" class="li1"><a href="#">Careers &amp; Institutes</a>|</li>
				<li id="ow" class="li1"><a href="#">Other Websites</a>|</li>
			</ul>
		</div><!--list-content-->	
		<div id="ft" class="first1 first-tab firstone hideall">
			<table class="width">
				<tr>
					<td id="flower"><ul><li><a href="#">Flowers</a></li></ul></td>
                    <td id="tree"><ul><li><a href="#">Trees</a></li></ul></td>
				</tr>
			</table>
		</div>
		<div id="alltrees" class="first-tab firstone hideall sec">
			<table class="width">
				<tr>
					<td>
						<ul class="tab-first-2">
							<li>&emsp;<a href="#" onclick="receive('trees.xml','0')" onmouseover="display('banyan','dtree')">Banyan Tree</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','1')" onmouseover="display('tulsi','dtree')">Tulsi Plant</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','2')" onmouseover="display('peepal','dtree')">Peepal Tree</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','3')" onmouseover="display('neem','dtree')">Neem Tree</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','4')" onmouseover="display('ga','dtree')">Garden Asparagus</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','5')" onmouseover="display('arjuna','dtree')">Arjuna Tree</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','6')" onmouseover="display('aloe','dtree')">Aloe Vera</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','7')" onmouseover="display('amla','dtree')">Amla Plant</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','8')" onmouseover="display('ashwa','dtree')">Ashwagandha</a>&emsp;</li>
							<li>&emsp;<a href="#" onclick="receive('trees.xml','9')" onmouseover="display('brahmi','dtree')">Brahmi Plant</a>&emsp;</li>
						</ul>
					</td>
			
			  <td>
				 <ul class="tab-first-2">
					<li>&emsp;<a href="#" onclick="receive('trees.xml','10')" onmouseover="display('eucalyptus','dtree')">Eucalyptus</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','11')" onmouseover="display('mahogany','dtree')">Indian Mahogany</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','12')" onmouseover="display('rosewood','dtree')">Rosewood</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','13')" onmouseover="display('tulip','dtree')">Tulip Tree</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','14')" onmouseover="display('khair','dtree')">Khair Tree</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','15')" onmouseover="display('kikar','dtree')">Kikar Tree</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','16')" onmouseover="display('sal','dtree')">Sal Tree</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','17')" onmouseover="display('cork','dtree')">Cork Tree</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','18')" onmouseover="display('teak','dtree')">Teak Tree</a>&emsp;</li>
					<li>&emsp;<a href="#" onclick="receive('trees.xml','19')" onmouseover="display('turmeric','dtree')">Turmeric Plant</a>&emsp;</li>
				</ul>
			  </td>
			  <td id="dtree" height="250px" width="500px" style="padding-right:10px;"></td>
		   </tr>
			</table>
		</div>
		
	<div id="allflowers"  class="firstone first-tab hideall sec">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('flowers.xml','0')" onmouseover="display('lotus','dflower')">Lotus</a></li>
						<li><a href="#" onclick="receive('flowers.xml','1')" onmouseover="display('rose','dflower')">Rose</a></li>
						<li><a href="#" onclick="receive('flowers.xml','2')" onmouseover="display('marigold','dflower')">Marigold</a></li>
						<li><a href="#" onclick="receive('flowers.xml','3')" onmouseover="display('bougainvillea','dflower')">Bougainvillea</a></li>
						<li><a href="#" onclick="receive('flowers.xml','4')" onmouseover="display('jasmine','dflower')">Jasmine</a></li>
						<li><a href="#" onclick="receive('flowers.xml','5')" onmouseover="display('orchid','dflower')">Orchid</a></li>
					</ul>
				</td>
				<td id="dflower" width="800px" height="400px" style="padding-right:10px;"></td>
			</tr>
		</table>
	</div>
	
	<div id="bm" class="first1 first-tab firstone hideall">
			<table class="width">
				<tr>
					<td id="birds"><ul><li><a href="#">Birds</a></li></ul></td>
					<td id="mammals"><ul><li><a href="#">Mammals</a></li></ul></td>
				</tr></table>
	</div>
	<div id="allbirds" class="first-tab firstone sec hideall">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2 ">
							<li><a href="#" onclick="receive('birds.xml','0')" onmouseover="display('peafowl','dbird')">Indian Peafowl </a></li>
							<li><a href="#" onclick="receive('birds.xml','1')" onmouseover="display('roller','dbird')">Indian Roller </a></li>
							<li><a href="#" onclick="receive('birds.xml','2')" onmouseover="display('gib','dbird')">Great Indian Bustard</a></li>
							<li><a href="#" onclick="receive('birds.xml','3')" onmouseover="display('lamm','dbird')">Lammergeier </a></li>
							<li><a href="#" onclick="receive('birds.xml','4')" onmouseover="display('wrs','dbird')">White Rumped Shama </a></li>
							<li><a href="#" onclick="receive('birds.xml','5')" onmouseover="display('sarus','dbird')">Sarus Crane </a></li>
							<li><a href="#" onclick="receive('birds.xml','6')" onmouseover="display('heron','dbird')">Grey Heron </a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
							<li><a href="#" onclick="receive('birds.xml','7')" onmouseover="display('bleb','dbird')">Brown long eared Bat </a></li>
							<li><a href="#" onclick="receive('birds.xml','8')" onmouseover="display('comb','dbird')">Comb Duck</a></li>
							<li><a href="#" onclick="receive('birds.xml','9')" onmouseover="display('king','dbird')">Common Kingfisher</a></li>
							<li><a href="#" onclick="receive('birds.xml','10')" onmouseover="display('koel','dbird')">Cuckoo - The Koel </a></li>	
							<li><a href="#" onclick="receive('birds.xml','11')" onmouseover="display('teal','dbird')">Garganey Teal</a></li>
							<li><a href="#" onclick="receive('birds.xml','12')" onmouseover="display('gjungle','dbird')">Grey Junglefowl </a></li>
							<li><a href="#" onclick="receive('birds.xml','13')" onmouseover="display('mallard','dbird')">Mallard</a></li>
							<li><a href="#" onclick="receive('birds.xml','14')" onmouseover="display('rjungle','dbird')">Red Junglefowl</a></li>
					</ul>
				</td>
				<td id="dbird" height="250px" width="500px" style="padding-right:10px;"></td>
			</tr>
		</table>
	</div>
	<div id="allmammals"  class="first-tab firstone hideall sec ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('animals.xml','0')" onmouseover="display('sambar','danimal')">Sambar Deer</a></li>
						<li><a href="#" onclick="receive('animals.xml','1')" onmouseover="display('rbt','danimal')">Royal Bengal Tiger</a></li>
						<li><a href="#" onclick="receive('animals.xml','2')" onmouseover="display('neelgai','danimal')">Neelgai</a></li>
						<li><a href="#" onclick="receive('animals.xml','3')" onmouseover="display('rhino','danimal')">Indian Rhino</a></li>
						<li><a href="#" onclick="receive('animals.xml','4')" onmouseover="display('elephant','danimal')">Indian Elephant</a></li>
						<li><a href="#" onclick="receive('animals.xml','5')" onmouseover="display('leopard','danimal')">Indian Leopard</a></li>
						<li><a href="#" onclick="receive('animals.xml','6')" onmouseover="display('lion','danimal')">Indian Lion</a></li>
                        <li><a href="#" onclick="receive('animals.xml','7')" onmouseover="display('tahr','danimal')">Himalayan Tahr</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						
						<li><a href="#" onclick="receive('animals.xml','8')" onmouseover="display('camel','danimal')">Indian Camel</a></li>
						<li><a href="#" onclick="receive('animals.xml','9')" onmouseover="display('gaur','danimal')">Gaur</a></li>
						<li><a href="#" onclick="receive('animals.xml','10')" onmouseover="display('jackal','danimal')">Golden Jackal</a></li>
						<li><a href="#" onclick="receive('animals.xml','11')" onmouseover="display('chital','danimal')">Chital</a></li>	
						<li><a href="#" onclick="receive('animals.xml','12')" onmouseover="display('boar','danimal')">Boar</a></li>
						<li><a href="#" onclick="receive('animals.xml','13')" onmouseover="display('buck','danimal')">Black Buck</a></li>
						<li><a href="#" onclick="receive('animals.xml','14')" onmouseover="display('fox','danimal')">Bengal Fox</a></li>
					</ul>
				</td>
				<td id="danimal" height="250px" width="500px" style="padding-right:10px;"></td>
			</tr>
		</table>
	</div>
	
	<div id="organization" class="first1 first-tab firstone hideall">
		<table class="width">
			<tr>
				<td><ul class="tab-first-2"><li><a href="#" onclick="">Government Organizations</a></li></ul></td>
				<td><ul class="tab-first-2"><li><a href="#" onclick="">Non-Government Organizations</a></li></ul></td>
			</tr>
		</table>
	</div>
	
	<div id="nationalparks" class="first1 first-tab firstone hideall">
			<table class="width">
				<tr>
					<td id="aan"><ul><li><a href="#">Andaman and Nicobar</a></li></ul></td>
					<td id="ap"><ul><li><a href="#">Andhra Pradesh</a></li></ul></td>
					<td id="arp"><ul><li><a href="#">Arunachal Pradesh</a></li></ul></td>
					<td id="assam"><ul><li><a href="#">Assam</a></li></ul></td>
					<td id="bihar"><ul><li><a href="#">Bihar</a></li></ul></td>
					<td id="cg"><ul><li><a href="#">Chattisgarh</a></li></ul></td>
					<td id="goa"><ul><li><a href="#">Goa</a></li></ul></td>
					<td id="guj"><ul><li><a href="#">Gujarat</a></li></ul></td>
				</tr>
				<tr>
					<td id="hary"><ul><li><a href="#">Harayana</a></li></ul></td>
					<td id="hp"><ul><li><a href="#">Himachal Pradesh</a></li></ul></td>
					<td id="jk"><ul><li><a href="#">Jammu and Kashmir</a></li></ul></td>
					<td id="jhar"><ul><li><a href="#">Jharkhand</a></li></ul></td>
					<td id="kt"><ul><li><a href="#">Karnataka</a></li></ul></td>
					<td id="kerala"><ul><li><a href="#">Kerala</a></li></ul></td>
					<td id="mp"><ul><li><a href="#">Madhya Pradesh</a></li></ul></td>
					<td id="maha"><ul><li><a href="#">Maharashtra</a></li></ul></td>

				</tr>
				<tr>
					<td id="mani"><ul><li><a href="#">Manipur</a></li></ul></td>
					<td id="meg"><ul><li><a href="#">Meghalaya</a></li></ul></td>
					<td id="miz"><ul><li><a href="#">Mizoram</a></li></ul></td>
					<td id="naga"><ul><li><a href="#">Nagaland</a></li></ul></td>
					<td id="orissa"><ul><li><a href="#">Orissa</a></li></ul></td>
					<td id="punjab"><ul><li><a href="#">Punjab</a></li></ul></td>
					<td id="raj"><ul><li><a href="#">Rajasthan</a></li></ul></td>
					<td id="sik"><ul><li><a href="#">Sikkim</a></li></ul></td>
				</tr>
				<tr>
					
					<td id="tn"><ul><li><a href="#">TamilNadu</a></li></ul></td>
					<td id="up"><ul><li><a href="#">Uttar Pradesh</a></li></ul></td>
					<td id="uk"><ul><li><a href="#">Uttarakhand</a></li></ul></td>
					<td id="wb"><ul><li><a href="#">West Bengal</a></li></ul></td>
				</tr>
			</table>
	</div>
	
	<div id="annik"  class="first-tab firstone hideall hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Galathea National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Mahatma Gandhi Marine National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Middle Button Island National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Mount Harriet National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">North Button Island National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Rani Jhansi Marine National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Saddle Peak National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">South Button Island National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Campbell Bay National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="andhra"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Sri Venkateswara National Park</a></li>	
						<li><a href="#" onclick="receive('parks.xml','')">Mahavir Harina Vanasthali National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Kasu Brahmananda Reddy National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Mrugavani National Park</a></li>				
					</ul>	
				</td>
			</tr>
		</table>
	</div>
	
<div id="aruna"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Namdapha National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Mouling National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="asam"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Orang National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','0')">Kaziranga National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Dibru-Saikhowa National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Nameri National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','1')">Manas National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="beehar"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Valmiki National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="garh"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Kanger Ghati National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Indravati National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="goaa"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Mollem National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="guju"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Vansda National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Gulf of Kachchh Marine National Park</a></li>
					</ul>	
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','2')">Gir National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Blackbuck National Park, Velavadar</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="har"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Kalesar National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','3')">Sultanpur National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="himp"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Pin Valley National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Great Himalayan National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="jak"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','5')">Hemis National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','4')">Dachigam National Park</a></li>
					</ul>
					</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Kishtwar National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Salim Ali National Park</a></li>

					</ul>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="jkhand"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Hazaribag National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Betla National Park</a></li>
					</ul>
				</td>
			</tr>
		</table class="width">
	</div>
	
<div id="karn"  class="first-tab firstone hideall  hidethis ">
		<table>
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Anshi National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Kudremukh National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Bannerghatta National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','10')">Bandipur National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','11')">Nagarhole National Park (Rajiv Gandhi National Park)</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="ker"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Mathikettan Shola National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','8')">Periyar National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','7')">Kumarakom National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Silent Valley National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','6')">Eravikulam National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','9')">Thattekkad National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="map"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Sanjay National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Satpura National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Van Vihar National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Fossil National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Madhav National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','12')">Bandhavgarh National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','13')">Kanha National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','15')">Panna National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','14')">Pench National Park,Madhya Pradesh</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="mahar"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Borivili National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Tadoba National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Pench National Park</a></li>
						
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Gugamal National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Chandoli National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Navegaon National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="manip"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Keibul Lamjao National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Sirohi National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="mega"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Balphakram National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Nokrek National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="mizo"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Murlen National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Phawngpui Blue Mountain National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="land"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Ntangki National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="odisha"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Simlipal National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','16')">Nandankanan National Park</a></li>									
						<li><a href="#" onclick="receive('parks.xml','')">Bhitarkanika National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="pind"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Harike Wetland</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="rajas"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Keoladeo National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Darrah National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Desert National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','17')">Bharatpur National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','18')">Ranthambore National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','19')">Sariska National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Mount Abu Wildlife Sanctuary</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="sikk"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Khangchendzonga National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
<div id="tan"  class="first-tab firstone hideall  hidethis">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Mukurthi National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Guindy National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Anamalai Wildlife Sanctuary </a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Gulf of Mannar Marine National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Palani Hills National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','20')">Mudumalai National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="uttar"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','21')">Dudhwa National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="uttara"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Nanda Devi National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','24')">Valley of Flowers National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Gangotri National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','23')">Rajaji National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Govind Pashu Vihar</a></li>
						<li><a href="#" onclick="receive('parks.xml','22')">Corbett National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	<div id="westb"  class="first-tab firstone hideall  hidethis ">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Gorumara National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','25')">Sundarbans National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Buxa Tiger Reserve</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Singalila National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Neora Valley National Park</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
						<li><a href="#" onclick="receive('parks.xml','')">Singalila National Park</a></li>
						<li><a href="#" onclick="receive('parks.xml','')">Neora Valley National Park</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
		<div id="wc" class="first1 first-tab firstone hideall ">
			<table class="width">
				<tr>
					<td id="project" class="p2"><ul><li><a href="#">Projects</a></li></ul></td>
					<td id="program" class="p2"><ul><li><a href="#">Programmes</a></li></ul></td>
					<td id="ac"><ul><li><a href="#">Acts &amp; Rules</a></li></ul></td>
				</tr>
			</table>		
		</div>
		
	<div id="actsr" class="first-tab firstone hidethis hideall sec">
		<table class="width">
			<tr>
				<td>
					<ul class="tab-first-2">
							<li><a href="envfor.nic.in/legis/wildlife/wildlife1.html">Wildlife Protection Act (As amended upto 1993)</a></li>
							<li><a href="http://envfor.nic.in/legis/wildlife/wild_act_02.htm">The Wild Life (Protection) Amendment Act, 2002</a></li>
							<li><a href="http://wccb.gov.in/wlp2006.pdf">The Wild Life (Protection) Amendment Act, 2006</a></li>
							<li><a href="http://mha.nic.in/pdfs/arms%20act-1959.pdf">The Arms Act, 1959</a></li>
							<li><a href="http://envfor.nic.in/divisions/biodiv/act/bio_div_act_2002.pdf">The Biological Diversity Act, 2002</a></li>
							<li><a href="http://fiuindia.gov.in/downloads/PMLA2002.pdf">The Prevention of Money-Laundering Act, 2002</a></li>
							<li><a href="http://www.cbec.gov.in/customs/cs-act/cs-act-idx.htm">Customs Act, 1962</a></li>
					</ul>
				</td>
				<td>
					<ul class="tab-first-2">
							<li><a href="http://wccb.gov.in/actsrules/wlprules1995.pdf">Wildlife (Protection) Rules, 1995</a></li>
							<li><a href="http://wccb.gov.in/actsrules/wlplantspossrules.pdf">Wildlife (Specified Plants-Conditions for possession by Licensee) Rules, 1995</a></li>
							<li><a href="http://wccb.gov.in/actsrules/plantstockrules1995.pdf">Wildlife (Specified Plant Stock Declaration) Central Rules, 1995</a></li>
							<li><a href="http://wccb.gov.in/actsrules/wltaxidermyrules1973.pdf">The Wildlife (Transaction and Taxidermy) Rules, 1973</a></li>
							<li><a href="http://wccb.gov.in/actsrules/wlstockrules2003.pdf">The Declaration of Wildlife Stock Rules, 2003 </a></li>
							<li><a href="http://wccb.gov.in/homepage.htm">Foreign Trade Policy</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="ci" class="first1 first-tab firstone hideall ">
		<table class="width">
		<tr>
			<td id="career"><ul><li><a href="#">Careers</a></li></ul></td>
			<td id="inst"><ul><li><a href="#">Institutes</a></li></ul></td>
		</tr>
		</table>
	</div>
	
	<div id="institute" class="first-tab firstone hidethis hideall sec">
		<table class="width">
			<tr>
				<td><ul class="tab-first-2"><li><a href="www.wii.gov.in/">Wildlife Institute Of India</a></li></ul></td>		
				<td><ul class="tab-first-2"><li><a href="www.iifm.ac.in/">Indian Institute of Forest Management</a></li></ul></td>				
				<td><ul class="tab-first-2"><li><a href="fri.icfre.gov.in/">Forest Research Institute,Dehradun</a></li></ul></td>				
			</tr>
		</table>
	</div>	
	
	<div id="ows" class="first1 first-tab firstone hideall sec ">
		<table class="width">
			<tr>
					<td><ul><li><a href="www.wildlifetrustofindia.org/">Wildlife Trust Of India</a></li></ul></td>			
					<td><ul><li><a href="www.envfor.nic.in/">Government OF India,Ministry of Environment and Forests</a></li></ul></td>	
					<td><ul><li><a href="www.wwfindia.org/">World Wildlife Fund-India</a></li></ul></td>	
			</tr>
			<tr>
					<td><ul class="tab-first-2"><li><a href="www.wpsi-india.org/">Wildlife Protection Society Of India</a></li></ul></td>
					<td><ul><li><a href="http://wccb.gov.in/homepage.htm">Wildlife Crime Control Bureau,Government Of India</a></li></ul></td>	
			</tr>
		</table>
	</div>
	<table style="width:1000px;margin-top:5px;"><tr><td height="20px"><div style="background-color:#FFF;border-radius:15px;color:#FFF;">Hello</div></td></tr></table>
    <div style="margin-top:15px;">
        <table>
        	<tr>
        		
                
        		
                <td  rowspan="2">
		  			<div id="disp" style="padding:8px 8px 8px 8px; background-color:rgba(0,0,0,0.8); ">
            	        <center><p style="color:white;font-family:'Lucida Handwriting';font-size:60px;">Introduction</p></center>
						<p style="font-family:Garamond;color:white; font-size:18px;">The wildlife India is a mix of species of number of different types of organism.Apart from a handful of the major famed animals such as cows, buffaloes, goats, poultry and sheep, India has an amazingly wide variety of animals native to the country. It is home to lions, tigers, leopards, snow leopards, black panthers, cheetahs, wolves, foxes, bears, crocodiles, rhinoceroses, camels, monkeys, snakes, antelope species, deer species, varieties of bison and not to mention the mighty Asian elephant. The region's rich and diverse wildlife is preserved in 89 national parks, 13 Bio reserves and 400+ wildlife sanctuaries across the country. Since India is home to a number of rare and threatened animal species, wildlife management in the country is essential to preserve these species. According to one study, India along with 17 mega diverse countries is home to about 60-70% of the world's biodiversity.</p>
					<p style="font-family:Garamond;color:white; font-size:18px;">India, lying within the Indomalaya ecozone, is home to about 7.6% of all mammalian, 12.6% of avian, 6.2% of reptilian, and 6.0% of flowering plant species. Many ecoregions, such as the shola forests, also exhibit extremely high rates of endemism; overall, 33% of Indian plant species are endemic. India's forest cover ranges from the tropical rainforest of the Andaman Islands, Western Ghats, and Northeast India to the coniferous forest of the Himalaya. Between these extremes lie the sal-dominated moist deciduous forest of eastern India; teak-dominated dry deciduous forest of central and southern India; and the babul-dominated thorn forest of the central Deccan and western Gangetic plain. Important Indian trees include the medicinal neem, widely used in rural Indian herbal remedies. The pipal fig tree, shown on the seals of Mohenjo-daro, shaded the Gautama Buddha as he sought enlightenment.</p>
					<p style="font-family:Garamond;color:white; font-size:18px;">Many Indian species are descendants of taxa originating in Gondwana, to which India originally belonged. Peninsular India's subsequent movement towards, and collision with, the Laurasian landmass set off a mass exchange of species. However, volcanism and climatic change 20 million years ago caused the extinction of many endemic Indian forms. Soon thereafter, mammals entered India from Asia through two zoogeographical passes on either side of the emerging Himalaya. As a result, among Indian species, only 12.6% of mammals and 4.5% of birds are endemic, contrasting with 45.8% of reptiles and 55.8% of amphibians. Notable endemics are the Nilgiri leaf monkey and the brown and carmine Beddome's toad of the Western Ghats. India contains 172, or 2.9%, of IUCN-designated threatened species. These include the Asiatic lion, the Bengal tiger, and the Indian white-rumped vulture, which suffered a near-extinction from ingesting the carrion of diclofenac-treated cattle.</p>
					<p style="font-family:Garamond;color:white; font-size:18px;">In recent decades, human encroachment has posed a threat to India's wildlife; in response, the system of national parks and protected areas, first established in 1935, was substantially expanded. In 1972, India enacted the Wildlife Protection Act and Project Tiger to safeguard crucial habitat; further federal protections were promulgated in the 1980s. Along with over 500 wildlife sanctuaries, India now hosts 15 biosphere reserves, four of which are part of the World Network of Biosphere Reserves; 25 wetlands are registered under the Ramsar Convention.
The varied and rich wildlife of India has had a profound impact on the region's popular culture. The common name for wilderness in India is Jungle, which was adopted into the English language. The word has been also made famous in The Jungle Book by Rudyard Kipling. India's wildlife has been the subject of numerous other tales and fables such as the Panchatantra and the Jataka tales.</p>
					</div>
			</span>
            </td>
            <td width="200px">
        			<div id="news" style="padding:8px 8px 8px 8px;border-radius:10px 10px 10px 10px; background-color:rgba(0,0,0,0.8); ">
						<h2  style="color:white; ">News Section</h2>
						<ol>
							<li style="color:white;">Move to raise Tiger Protection Force in Arunachal</li><hr/>
							<li  style="color:white;">Environmentalists see red over tree felling</li><hr/>
							<li  style="color:white;">Centre ready to amend Forest Rights Act 19th Apr., 2012</li><hr/>
							<li  style="color:white;">Haldwani-Rampur road widening a big threat 29th Mar., 2012</li><hr/>
							<li  style="color:white;">At Least 356 Indian Leopards Killed in 2011, Half by Poachers 1st Mar., 2012</li><hr/>
						</ol>
					</div>
				</td>
            </tr>
            <tr>
            <td width="200px">
        			<div id="news" style="padding:8px 8px 8px 8px;border-radius:10px 10px 10px 10px; background-color:rgba(0,0,0,0.8); ">
						<h2  style="color:white; ">News Section</h2>
						<ol>
							<li style="color:white;">Move to raise Tiger Protection Force in Arunachal</li><hr/>
							<li  style="color:white;">Environmentalists see red over tree felling</li><hr/>
							<li  style="color:white;">Centre ready to amend Forest Rights Act 19th Apr., 2012</li><hr/>
							<li  style="color:white;">Haldwani-Rampur road widening a big threat 29th Mar., 2012</li><hr/>
							<li  style="color:white;">At Least 356 Indian Leopards Killed in 2011, Half by Poachers 1st Mar., 2012</li><hr/>
						</ol>
					</div>
				</td>
                </tr>
            </table>
            
	</div>
	
</div>
</body>
</html>