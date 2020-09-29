<!DOCTYPE html>
<html>
	<head>
		<title>calculator</title>
		<meta charset="utf-8">
	<style>
        html, body{
            height: 100%;
        }
        html{
            display: table;
            margin: auto;
        }
        body{
            display: table-cell;
            vertical-align: middle;
        }
        .abc,select,.btn{
            text-decoration: none;
            padding: 5px;
            height: 20px;
            width: 40px;
            font-size: large;
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
        }
        select,.btn{
            width: auto;
            height: auto;
        }
    </style>
	</head>
	<body>
		<div class="container">
	    <form method="post" action="index.php">
	        <input name="a" type="text" class="abc" style="width: 150px; display: inline" />
	        <select name="operator">
	        	<option value="add">+</option>
	            <option value="sub">-</option>
	            <option value="mul">*</option>
	            <option value="divide">/</option>
	        </select>
	        <input name="b" type="text" class="abc" style="width: 150px; display: inline" />
            <?php
            if(isset($_POST['submit'])){
                if(is_numeric($_POST['a']) && is_numeric($_POST['b'])){
                    if($_POST['operator'] == 'add'){ $total = $_POST['a'] + $_POST['b'];}
                    if($_POST['operator'] == 'sub'){ $total = $_POST['a'] - $_POST['b'];}
                    if($_POST['operator'] == 'mul'){$total = $_POST['a'] * $_POST['b'];}
                    if($_POST['operator'] == 'divide') {$total = $_POST['a'] / $_POST['b'];}
                    echo "<h3 style='color: green;'> = {$total}</h3>";
                }
                else { echo '<h3 style="color: red;">give number dummy</h3>';}
            }
            ?>
	        <input name="submit" type="submit" value="calculate" class="btn" />

	    </form>
		</div>
	</body>
</html>