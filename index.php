<html>
	<head>
 		<STYLE type="text/css">
 		#col-container  {width: 960px; margin: 0 auto}
		#col-container div.col {width: 30%; margin:2px; min-height: 200px; float:left}
		#col1 {background-color: red;}
		#col2 {background-color: green;}
		#col3 {background-color: blue;}
		#wide-form {width: 100% ; margin: 0 auto}
		</STYLE>
	</head>

	<body>

	<div id="body">
		<div id="col-container">
			<div id="col1" class="col"></div>
			<div id="col2" class="col"></div>
			<div id="col3" class="col"></div>
			<div id="wide-form">
				<form action="index.php" method="post">
					<input type="text" name="name-field" value="your name"/>
				</form>
			</div>
		</div>
	</div>

	</body>
</html>