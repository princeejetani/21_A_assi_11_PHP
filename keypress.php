<html>
<head>
<script
src="jquery.js"></script>
<script>
i = 0;
$(document).ready(function(){
$("p").keypress(function(){
$("span").text(i += 1);
});
$("button").click(function(){
$("p").keypress();
});
});
</script>
</head>
<body>
<p>Keypresses: <span>0</span></p>
<button>Trigger the keypress event</button>
</body>