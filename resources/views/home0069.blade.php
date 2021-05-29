<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border: 2px solid #000000; background-color: #FFFFFF; color: black;}
.button2 {background-color: #000000; color: white;}
</style>
<body>
	<div class="container-md" align="center">
  		<h1>HOME</h1>
  		<td align="center"><button onclick="document.location='/select'" class="button button1">Select</button>&emsp;<button onclick="document.location='/selectLike'" class="button button2">Select Like</button></td>&emsp;
      <td align="center"><button onclick="document.location='/selectJoin'" class="button button1">Select Join</button>&emsp;<button onclick="document.location='/selectJoinLike'" class="button button2">Select Join Like</button></td>
	</div>
</body>
</html>