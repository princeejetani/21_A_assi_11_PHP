<!DOCTYPE html>
<html>
<head>
<script
src="https://ajax.googleapis.com/ajax/libs/jqu
ery/3.6.3/jquery.min.js"></script>
<script>
function appendText() {
var txt1 = "<p>Text.</p>"; 

var txt2 = $("<p></p>").text("Text."); 
var txt3 = document.createElement("p");
txt3.innerHTML = "Text."; 
$("body").append(txt1, txt2, txt3); 

}
</script>
</head>
<body>
<p>This is a paragraph.</p>
<button onclick="appendText()">Append text</button>
</body>
</html>