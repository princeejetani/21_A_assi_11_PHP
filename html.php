<!DOCTYPE html>
<html>
<head>
<script
src="https://ajax.googleapis.com/ajax/libs/j
query/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
    $("p").html(function(n){
return "This p element has index: " + n;
});
});
});
</script>
</head>
<body>
<button>Change the content of the p
elements</button>
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
</body>
</html>