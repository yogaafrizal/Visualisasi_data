<!DOCTYPE html>
<html>
<head>
	<title>Jumlah Perkembangan Covid-19 Di Indonesia </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Online Botstrap CSS  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		<!-- Online Bootstrap javascript -->
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  	<style type="text/css">
  		body {
  			background-color: #f0f0f0;
			margin : 0px;
  		}

  		a, ul {
  			color: black;
  		}

  		.gambar-covid{
  			margin-top: -100px;
  		} 

  		.konten1{
  			padding: 50px;
  			background-color: white;
  			border-radius: 25px;
  			margin-top: -300px;
  			width: max-content;
  			box-shadow: 12px 23px 104px -27px rgba(0,0,0,0.46);
			-webkit-box-shadow: 12px 23px 104px -27px rgba(0,0,0,0.46);
			-moz-box-shadow: 12px 23px 104px -27px rgba(0,0,0,0.46);
  		}
  	</style>

  	    <script type="text/javascript" src="https://cdn.bokeh.org/bokeh/release/bokeh-2.4.2.min.js"></script>
        <script type="text/javascript" src="https://cdn.bokeh.org/bokeh/release/bokeh-widgets-2.4.2.min.js"></script>
        <script type="text/javascript">
            Bokeh.set_log_level("info");
        </script>

</head>
<body>

	<!-- ================ Navbar ==========================-->

	<nav class="navbar navbar-light" style="background-color: black;">
		<div class="container-fluid">
			<a href="#" class="navbar-brand"><b style="color: white; opacity: 1">Jumlah Perkembangan Covid-19 Di Indonesia </b></a>
			</div>
		</div>
	</nav>

<div class="gambar-covid">
	<img src="gambar/covid.jpg">
</div>

<!-- ================ content body ==========================-->

	<div class="row" style="height: 400px">
		<!-- column page division 6/12-->
		<div class="col-md-6">
			<div class="nav justify-content-end">
				<div class="konten1">
					<h2 style="text-align: left;">Angka Terkonfirmasi Covid-19</h2>
					<p style="margin-bottom: 15px">Grafik dibawah merupakan visualisasi data dari <br> jumlah orang yang terkonfirmasi Covid-19 pada kurun waktu tertentu</p>
					<div class="bk-root" id="975dde3c-a3ff-46ff-a97c-edc188890e7d" data-root-id="4971"></div>
            
          
        
      
      
        <script type="application/json" id="5142">
          {"e409bebe-59f5-4dc2-b9aa-ba973272bbe2":{"defs":[],"roots":{"references":[{"attributes":{"bottom_units":"screen","fill_alpha":0.5,"fill_color":"lightgrey","left_units":"screen","level":"overlay","line_alpha":1.0,"line_color":"black","line_dash":[4,4],"line_width":2,"right_units":"screen","syncable":false,"top_units":"screen"},"id":"4994","type":"BoxAnnotation"},{"attributes":{},"id":"5012","type":"Title"},{"attributes":{"axis":{"id":"4984"},"dimension":1,"ticker":null},"id":"4987","type":"Grid"},{"attributes":{},"id":"4976","type":"LinearScale"},{"attributes":{},"id":"5024","type":"Selection"},{"attributes":{},"id":"4972","type":"DataRange1d"},{"attributes":{"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678],"y":[2,2,2,2,4,4,6,19,27,34,34,69,96,117,134,172,227,311,369,450,514,579,686,790,893,1046,1155,1285,1414,1528,1677,1790,1986,2092,2273,2491,2738,2956,3293,3512,3842,4241,4557,4839,5136,5516,5923,6248,6575,6760,7135,7418,7775,8211,8607,8882,9096,9511,9771,10118,10551,10843,11192,11587,12071,12438,12776,13112,13645,14032,14265,14749,15438,16006,16496,17025,17514,18010,18496,19189,20162,20796,21745,22271,22750,23165,23851,24538,25216,25773,26473,26940,27549,28233,28818,29521,30514,31186,32033,33076,34316,35295,36406,37420,38277,39294,40400,41431,42762,43803,45029,45891,46845,47896,49009,50187,51427,52812,54010,55092,56385,57770,59394,60695,62142,63749,64958,66226,68079,70736,72347,74018,75699,76981,78572,80094,81668,83130,84882,86521,88214,89869,91751,93657,95418,97286,98778,100303,102051,104432,106336,108376,109936,111455,113134,115056,116871,118753,121226,123503,125396,127083,128776,130718,132816,135123,137468,139549,141370,143043,144945,147211,149408,151498,153535,155412,157859,160165,162884,165887,169195,172053,174796,177571,180646,184268,187537,190665,194109,196989,200035,203342,207203,210940,214746,218382,221523,225030,228993,232628,236519,240687,244676,248852,252923,257388,262022,266845,271339,275213,278722,282724,287008,291182,295499,299506,303498,307120,311176,315714,320564,324658,328952,333449,336716,340622,344749,349160,353461,357762,361867,365240,368842,373109,377541,381910,385980,389712,392934,396454,400483,404048,406945,410088,412784,415402,418375,421731,425796,429574,433836,437716,440569,444348,448118,452291,457735,463007,467113,470648,474455,478720,483518,488310,493308,497668,502110,506302,511836,516753,522581,527999,534266,538883,543975,549508,557877,563680,569707,575796,581550,586842,592900,598933,605243,611631,617820,623309,629429,636154,643508,650197,657948,664930,671778,678125,685639,692838,700097,706837,713365,719219,727122,735124,743198,751270,758473,765350,772103,779548,788402,797723,808340,818386,828026,836718,846765,858043,869600,882418,896642,907929,917015,927380,939948,951651,965283,977474,989262,999256,1012350,1024298,1037993,1051795,1066313,1078314,1089308,1099687,1111671,1123105,1134854,1147010,1157837,1166079,1174779,1183555,1191990,1201859,1210703,1217468,1223930,1233959,1243646,1252685,1263299,1271353,1278653,1288833,1298608,1306141,1314634,1322866,1329074,1334634,1341314,1347026,1353834,1361098,1368069,1373836,1379662,1386556,1392945,1398578,1403722,1410134,1414741,1419455,1425044,1430458,1437283,1443853,1450132,1455788,1460184,1465928,1471225,1476452,1482559,1487541,1492002,1496085,1501093,1505775,1511712,1517854,1523179,1527524,1534255,1537967,1542516,1547376,1552880,1558145,1562868,1566995,1571824,1577526,1583182,1589359,1594722,1599763,1604348,1609300,1614849,1620569,1626812,1632248,1636792,1641194,1647138,1651794,1657035,1662868,1668368,1672880,1677274,1682004,1686373,1691658,1697305,1703632,1709762,1713684,1718575,1723596,1728204,1731652,1734285,1736670,1739750,1744045,1748230,1753101,1758898,1764644,1769940,1775220,1781127,1786187,1791221,1797499,1803361,1809926,1816041,1821703,1826527,1831773,1837126,1843612,1850206,1856038,1863031,1869325,1877050,1885942,1894025,1901490,1911358,1919547,1927708,1937652,1950276,1963266,1976172,1989909,2004445,2018113,2033421,2053995,2072867,2093962,2115304,2135998,2156465,2178272,2203108,2228938,2256851,2284084,2313829,2345018,2379397,2417788,2455912,2491006,2527203,2567630,2615529,2670046,2726803,2780803,2832755,2877476,2911733,2950058,2983830,3033339,3082410,3127826,3166505,3194733,3239936,3287727,3331206,3372374,3409658,3440396,3462800,3496700,3532567,3568331,3607863,3639616,3666031,3686740,3718821,3749446,3774155,3804943,3833541,3854354,3871738,3892479,3908247,3930300,3950304,3967048,3979456,3989060,4008166,4026837,4043736,4056354,4066404,4073831,4079267,4089801,4100138,4100138,4116890,4123617,4129020,4133433,4140634,4147365,4153355,4158731,4163732,4167511,4170088,4174216,4178164,4181309,4185144,4188529,4190763,4192695,4195958,4198678,4201559,4204116,4206253,4208013,4209403,4211460,4213414,4215104,4216728,4218142,4219284,4220206,4221610,4223094,4224487,4225871,4227038,4227932,4228552,4229813,4231046,4232099,4233014,4234011,4234758,4235384,4236287,4237201,4237834,4238594,4239396,4240019,4240479,4241090,4241809,4242532,4243215,4243835,4244358,4244761,4245373,4246174,4246802,4247320,4247721,4248165,4248409,4248843,4249323,4249758,4250157,4250516,4250855,4251076,4251423,4251945,4252345,4252705,4253098,4253412,4253598,4253992,4254443,4254815,4255268,4255672,4255936,4256112,4256409,4256687,4256998,4257243,4257489,4257685,4257815,4258076,4258340,4258560,4258752,4258980,4259143,4259249,4259439,4259644,4259857,4260148,4260380,4260544,4260677,4260893,4261072,4261208,4261412,4261667,4261667,4261879,4262157,4262351,4262540,4262720,4262994,4263168,4263433,4263732,4264136,4264669,4265187,4265666]},"selected":{"id":"5024"},"selection_policy":{"id":"5023"}},"id":"5007","type":"ColumnDataSource"},{"attributes":{},"id":"4974","type":"DataRange1d"},{"attributes":{"line_alpha":0.1,"line_color":"red","line_width":3,"x":{"field":"x"},"y":{"field":"y"}},"id":"5004","type":"Line"},{"attributes":{},"id":"5014","type":"AllLabels"},{"attributes":{},"id":"4989","type":"WheelZoomTool"},{"attributes":{},"id":"4981","type":"BasicTicker"},{"attributes":{},"id":"4992","type":"ResetTool"},{"attributes":{"line_color":"red","line_width":3,"x":{"field":"x"},"y":{"field":"y"}},"id":"5003","type":"Line"},{"attributes":{"line_alpha":0.1,"line_color":"#1f77b4","line_width":3,"x":{"field":"x"},"y":{"field":"y"}},"id":"5009","type":"Line"},{"attributes":{"axis":{"id":"4980"},"ticker":null},"id":"4983","type":"Grid"},{"attributes":{"axis_label":"Jumlah hari","formatter":{"id":"5018"},"major_label_policy":{"id":"5017"},"ticker":{"id":"4981"}},"id":"4980","type":"LinearAxis"},{"attributes":{},"id":"4993","type":"HelpTool"},{"attributes":{"line_color":"#1f77b4","line_width":3,"x":{"field":"x"},"y":{"field":"y"}},"id":"5008","type":"Line"},{"attributes":{},"id":"5023","type":"UnionRenderers"},{"attributes":{"active_multi":null,"tools":[{"id":"4988"},{"id":"4989"},{"id":"4990"},{"id":"4991"},{"id":"4992"},{"id":"4993"}]},"id":"4995","type":"Toolbar"},{"attributes":{"data_source":{"id":"5002"},"glyph":{"id":"5003"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"5004"},"view":{"id":"5006"}},"id":"5005","type":"GlyphRenderer"},{"attributes":{},"id":"5017","type":"AllLabels"},{"attributes":{},"id":"4978","type":"LinearScale"},{"attributes":{"data":{"x":[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678],"y":{"__ndarray__":"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","dtype":"float64","order":"little","shape":[678]}},"selected":{"id":"5022"},"selection_policy":{"id":"5021"}},"id":"5002","type":"ColumnDataSource"},{"attributes":{},"id":"5022","type":"Selection"},{"attributes":{},"id":"4988","type":"PanTool"},{"attributes":{"source":{"id":"5002"}},"id":"5006","type":"CDSView"},{"attributes":{"overlay":{"id":"4994"}},"id":"4990","type":"BoxZoomTool"},{"attributes":{"data_source":{"id":"5007"},"glyph":{"id":"5008"},"hover_glyph":null,"muted_glyph":null,"nonselection_glyph":{"id":"5009"},"view":{"id":"5011"}},"id":"5010","type":"GlyphRenderer"},{"attributes":{},"id":"5018","type":"BasicTickFormatter"},{"attributes":{"axis_label":"Jumlah Terkonfirmasi","formatter":{"id":"5015"},"major_label_policy":{"id":"5014"},"ticker":{"id":"4985"}},"id":"4984","type":"LinearAxis"},{"attributes":{},"id":"4985","type":"BasicTicker"},{"attributes":{"below":[{"id":"4980"}],"center":[{"id":"4983"},{"id":"4987"}],"left":[{"id":"4984"}],"renderers":[{"id":"5005"},{"id":"5010"}],"title":{"id":"5012"},"toolbar":{"id":"4995"},"x_range":{"id":"4972"},"x_scale":{"id":"4976"},"y_range":{"id":"4974"},"y_scale":{"id":"4978"}},"id":"4971","subtype":"Figure","type":"Plot"},{"attributes":{},"id":"5021","type":"UnionRenderers"},{"attributes":{},"id":"4991","type":"SaveTool"},{"attributes":{"source":{"id":"5007"}},"id":"5011","type":"CDSView"},{"attributes":{},"id":"5015","type":"BasicTickFormatter"}],"root_ids":["4971"]},"title":"Bokeh Application","version":"2.3.3"}}
        </script>
        <script type="text/javascript">
          (function() {
            var fn = function() {
              Bokeh.safely(function() {
                (function(root) {
                  function embed_document(root) {
                    
                  var docs_json = document.getElementById('5142').textContent;
                  var render_items = [{"docid":"e409bebe-59f5-4dc2-b9aa-ba973272bbe2","root_ids":["4971"],"roots":{"4971":"975dde3c-a3ff-46ff-a97c-edc188890e7d"}}];
                  root.Bokeh.embed.embed_items(docs_json, render_items);
                
                  }
                  if (root.Bokeh !== undefined) {
                    embed_document(root);
                  } else {
                    var attempts = 0;
                    var timer = setInterval(function(root) {
                      if (root.Bokeh !== undefined) {
                        clearInterval(timer);
                        embed_document(root);
                      } else {
                        attempts++;
                        if (attempts > 100) {
                          clearInterval(timer);
                          console.log("Bokeh: ERROR: Unable to run BokehJS code because BokehJS library is missing");
                        }
                      }
                    }, 10, root)
                  }
                })(window);
              });
            };
            if (document.readyState != "loading") fn();
            else document.addEventListener("DOMContentLoaded", fn);
          })();
        </script>
		        </div>
			</div>
		</div>

		<!-- content 2 -->
		<!-- pembagian 6/12 -->
		<div class="col-md-6">
			<div>
				<div class="konten1">
					<h2 style="text-align: left;">Angka Terkonfirmasi Covid-19</h2>
					<p style="margin-bottom: 15px">Grafik dibawah merupakan visualisasi data dari <br> jumlah orang yang terkonfirmasi Covid-19 pada kurun waktu tertentu</p>
					<div class="bk-root" id="0fe2879f-c7a7-4279-83f3-c3b0b9dee4b3" data-root-id="1002"></div>
			     	<div class="bk-root" id="09ecbc79-281e-48eb-a627-907bac579ce7" data-root-id="1048"></div>
        <script type="application/json" id="1181">
          {"d5829cef-16ca-4193-9365-6e4c0b5d5a4c":{"defs":[],"roots":{"references":[{"attributes":{},"id":"1024","type":"HelpTool"},{"attributes":{},"id":"1053","type":"AllLabels"},{"attributes":{},"id":"1009","type":"LinearScale"},{"attributes":{"axis":{"id":"1015"},"coordinates":null,"dimension":1,"group":null,"ticker":null},"id":"1018","type":"Grid"},{"attributes":{},"id":"1007","type":"LinearScale"},{"attributes":{},"id":"1055","type":"BasicTickFormatter"},{"attributes":{"high":60,"js_property_callbacks":{"change:value":[{"id":"1041"}]},"low":0,"step":5,"title":"Circle size","value":30,"value_throttled":30,"width":200},"id":"1040","type":"Spinner"},{"attributes":{"axis":{"id":"1011"},"coordinates":null,"group":null,"ticker":null},"id":"1014","type":"Grid"},{"attributes":{},"id":"1016","type":"BasicTicker"},{"attributes":{},"id":"1056","type":"AllLabels"},{"attributes":{"tools":[{"id":"1019"},{"id":"1020"},{"id":"1021"},{"id":"1022"},{"id":"1023"},{"id":"1024"}]},"id":"1026","type":"Toolbar"},{"attributes":{},"id":"1012","type":"BasicTicker"},{"attributes":{"source":{"id":"1033"}},"id":"1038","type":"CDSView"},{"attributes":{},"id":"1020","type":"WheelZoomTool"},{"attributes":{},"id":"1023","type":"ResetTool"},{"attributes":{"fill_alpha":{"value":0.1},"fill_color":{"value":"#21a7df"},"hatch_alpha":{"value":0.1},"line_alpha":{"value":0.1},"line_color":{"value":"#1f77b4"},"size":{"value":30},"x":{"field":"x"},"y":{"field":"y"}},"id":"1035","type":"Circle"},{"attributes":{"end":10,"js_property_callbacks":{"change:value":[{"id":"1043"},{"id":"1044"}]},"start":0,"title":"Rentang Jarak Horizontal","value":[1,9]},"id":"1042","type":"RangeSlider"},{"attributes":{"coordinates":null,"formatter":{"id":"1052"},"group":null,"major_label_policy":{"id":"1053"},"ticker":{"id":"1016"}},"id":"1015","type":"LinearAxis"},{"attributes":{"height":30,"text":"\n          &lt;p&gt;Atur ukuran lingkaran dengan mengubah nomor disamping:&lt;/p&gt;\n          ","width":200},"id":"1039","type":"Div"},{"attributes":{},"id":"1019","type":"PanTool"},{"attributes":{"args":{"other":{"id":"1003"}},"code":"other.start = this.value[0]"},"id":"1043","type":"CustomJS"},{"attributes":{"args":{"other":{"id":"1034"}},"code":"other.size = this.value"},"id":"1041","type":"CustomJS"},{"attributes":{},"id":"1057","type":"UnionRenderers"},{"attributes":{"args":{"other":{"id":"1003"}},"code":"other.end = this.value[1]"},"id":"1044","type":"CustomJS"},{"attributes":{"fill_color":{"value":"#21a7df"},"line_color":{"value":"#1f77b4"},"size":{"value":30},"x":{"field":"x"},"y":{"field":"y"}},"id":"1034","type":"Circle"},{"attributes":{},"id":"1058","type":"Selection"},{"attributes":{"children":[{"id":"1045"},{"id":"1046"},{"id":"1047"}]},"id":"1048","type":"Column"},{"attributes":{"end":9,"start":1},"id":"1003","type":"Range1d"},{"attributes":{"overlay":{"id":"1025"}},"id":"1021","type":"BoxZoomTool"},{"attributes":{},"id":"1022","type":"SaveTool"},{"attributes":{"bottom_units":"screen","coordinates":null,"fill_alpha":0.5,"fill_color":"lightgrey","group":null,"left_units":"screen","level":"overlay","line_alpha":1.0,"line_color":"black","line_dash":[4,4],"line_width":2,"right_units":"screen","syncable":false,"top_units":"screen"},"id":"1025","type":"BoxAnnotation"},{"attributes":{"fill_alpha":{"value":0.2},"fill_color":{"value":"#21a7df"},"hatch_alpha":{"value":0.2},"line_alpha":{"value":0.2},"line_color":{"value":"#1f77b4"},"size":{"value":30},"x":{"field":"x"},"y":{"field":"y"}},"id":"1036","type":"Circle"},{"attributes":{"children":[{"id":"1042"}]},"id":"1046","type":"Row"},{"attributes":{"below":[{"id":"1011"}],"center":[{"id":"1014"},{"id":"1018"}],"height":250,"left":[{"id":"1015"}],"renderers":[{"id":"1037"}],"title":{"id":"1049"},"toolbar":{"id":"1026"},"width":500,"x_range":{"id":"1003"},"x_scale":{"id":"1007"},"y_range":{"id":"1005"},"y_scale":{"id":"1009"}},"id":"1002","subtype":"Figure","type":"Plot"},{"attributes":{"children":[{"id":"1002"}]},"id":"1047","type":"Row"},{"attributes":{},"id":"1005","type":"DataRange1d"},{"attributes":{},"id":"1052","type":"BasicTickFormatter"},{"attributes":{"coordinates":null,"data_source":{"id":"1033"},"glyph":{"id":"1034"},"group":null,"hover_glyph":null,"muted_glyph":{"id":"1036"},"nonselection_glyph":{"id":"1035"},"view":{"id":"1038"}},"id":"1037","type":"GlyphRenderer"},{"attributes":{"data":{"x":[1,2,3,4,5,6,7,8,9,10],"y":[4,5,5,7,2,6,4,9,1,3]},"selected":{"id":"1058"},"selection_policy":{"id":"1057"}},"id":"1033","type":"ColumnDataSource"},{"attributes":{"coordinates":null,"formatter":{"id":"1055"},"group":null,"major_label_policy":{"id":"1056"},"ticker":{"id":"1012"}},"id":"1011","type":"LinearAxis"},{"attributes":{"children":[{"id":"1039"},{"id":"1040"}]},"id":"1045","type":"Row"},{"attributes":{"coordinates":null,"group":null},"id":"1049","type":"Title"}],"root_ids":["1048"]},"title":"Bokeh Application","version":"2.4.2"}}
        </script>
        <script type="text/javascript">
          (function() {
            const fn = function() {
              Bokeh.safely(function() {
                (function(root) {
                  function embed_document(root) {
                    
                  const docs_json = document.getElementById('1181').textContent;
                  const render_items = [{"docid":"d5829cef-16ca-4193-9365-6e4c0b5d5a4c","root_ids":["1048"],"roots":{"1048":"09ecbc79-281e-48eb-a627-907bac579ce7"}}];
                  root.Bokeh.embed.embed_items(docs_json, render_items);
                
                  }
                  if (root.Bokeh !== undefined) {
                    embed_document(root);
                  } else {
                    let attempts = 0;
                    const timer = setInterval(function(root) {
                      if (root.Bokeh !== undefined) {
                        clearInterval(timer);
                        embed_document(root);
                      } else {
                        attempts++;
                        if (attempts > 100) {
                          clearInterval(timer);
                          console.log("Bokeh: ERROR: Unable to run BokehJS code because BokehJS library is missing");
                        }
                      }
                    }, 10, root)
                  }
                })(window);
              });
            };
            if (document.readyState != "loading") fn();
            else document.addEventListener("DOMContentLoaded", fn);
          })();
        </script>
		        </div>
			</div>
		</div>
	</div>
</body>
</html>
