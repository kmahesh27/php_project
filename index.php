<html>
	<head>
		<title>Home Page/</title>
	</head>
	<body>
	    <h1>Welcome to YES Bank</h1>
	    <h2>Candidate Information Form</h2>
	    <h3>Contact to YES Bank only between 10:00 am to 3:00 pm</h3>>
	    <ul>
		<?php
  		    $json = file_get_contents('http://product-service');
  		    $obj = json_decode($json);
		    $products = $obj->products;
		    foreach ($products as $product) {
			echo "<li>$product</li>";
		    }
    		?>
	    </ul>
	</body>
 </html>
