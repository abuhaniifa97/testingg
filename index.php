<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.centered {
  position: absolute;
  background-color: #333;
  z-index: -2;
  transform: translateY(-50px);
  height: 100px;
  width:100%;

}
.container{
	position: absolute;
	width: 200px;
}
</style>
</head>
<body>

<h2>Image Text</h2>
<p>How to place text over an image:</p>

<div class="container">
  <img src="img.png" alt="Snow" style="width:200px;z-index: 2">
  <div class="centered">Centered</div>
</div>

</body>
</html> 
