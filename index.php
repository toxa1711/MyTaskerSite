<!DOCTYPE html>
<html lang="ru" >
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Название страницы - отображается на вкладке браузера и в поиске</title>
</head>
<body>
<div id = "progress">
  <div id = "current" style="width: <?php echo ((strftime("%H") / 12) * 800) + (strftime("%M") / 60 * (800 / 12)) ?>px">

  </div>
  <div id = "1" class = "taskDone"></div>
  <div id = "2" class = "taskDone"></div>
  <div id = "3" class = "taskDone"></div>
  <div id = "4" class = "taskDone"></div>
  <div id = "5" class = "task"></div>
  <div id = "6" class = "task"></div>
</div>

<div id = "story">
  <h1 id = "11" class = "storyDone"><input type="checkbox">Sleep22</h1>
  <h1 id = "12" class = "storyDone"><input type="checkbox">Waking up</h1>
  <h1 id = "13" class = "storyDone"><input type="checkbox">ZZy</h1>
  <h1 id = "14" class = "storyDone"><input type="checkbox">F</h1>
  <h1 id = "15" class = "storyDone"><input type="checkbox">Task5</h1>
  <h1 id = "16" class = "storyDone"><input type="checkbox">Task6</h1>



 <br>

<h1><?php echo oci_connect('f1', 'welcome','ORCL')   ?></h1>

</div>
<script>

let task = {
  time : 0;
  name : "none";
}

times = {100,120,330,340}

for(let i = 0; i < times.lenght; i++){
  document.getElementById(i+1).style.width = times[i]+"px";
}

        var z1 = <?php echo (strftime("%H")*60 + strftime("%M")) ?>;
        function wid(){
                z1++;
		if(z1 > 1440){
			z1 = 0;
		}
		let z = z1 * 0.55555555;
		let u = z+'px';
		for(let i = 1; i < 7; i++){
			if(z1 > 240*i){
				document.getElementById(i).className = "taskDone";
  				document.getElementById(10+i).className = "storyDone";

          /*let div = document.createElement('div');
          div.className = "menu";
          div.innerHTML = '<div id = "currentTask">time: <?php echo strftime("%H %M") ?></div> <div id = "buttonRed"></div> <div id = "buttonRed"></div> <div id = "buttonRed"></div>';
          document.getElementById(10+i).append(div);*/
			}
			else{
				document.getElementById(i).className = "task";
  				document.getElementById(10+i).className = "story";
			}
		}

		console.log(u);
                document.getElementById("current").style.width = u;
        }
	wid();
	 //document.getElementById("current").style.width = "100px";
        let a = setInterval(wid, 1000*60);



</script>

</body>
</html>
