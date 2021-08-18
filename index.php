<html>
<body>

<div class="box">
<h2 id="login"> Login </h2>

<form action="querecebe.php" method="post">
Nome: <input type="text" name="nome" class="botao"><br>
E-mail: <input type="text" name="email" class="botao"><br>
<input type="submit" class="botao1	">
</form>

</div>

<footer>
	&copy;Lucas Passos da Silva
</footer>

<style type="text/css">

	body{
		background-color: lightgray;
		text-align: center;
	}
    

    .box{
    	margin-top: 300px;
    	margin-left: 600px;
    	padding-bottom: 1px; 
    	background-color: white;
    	width: 300px;
    	box-shadow: 10px 5px 5px black;		
    }
     
    .botao{
    	border-radius: 10px;
    }
     
    .botao1{
    	margin-left: 30px;
    }

    .botao1:hover{
    	 background-color: green; /* Green */
    color: white;
    }

    footer{
    	margin-top: 10px;
    	font-size: 20px;
    	color: blue;
    }

</style>
</body>
</html>
