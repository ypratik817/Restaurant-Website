<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- <link rel="icon" href="images/download.jpg"  -->
    <link rel="stylesheet" href="style.css"
    <head>
     <style>
        table,
        th,
        td {
            border: 1px solid black;
            background-color: #f0d5fe;
        }
    </style>
    <style>
        label {
            cursor: pointer;
            display: flex;
            padding: 3px 3px;
            text-align: left;
            width: 85px;
            vertical-align: top;
            /* position: absolute; */
            border: 1px solid black;
            background-color: #f0d5fe;
            font-family: 'Big Shoulders Text', cursive;
            display: flex;
	flex-direction: column;
	flex: 1;
	margin: 30px 20px;
        }
        label:hover{
	background: #E7E7E7;
}
    
        input {
            font-size: inherit;
        }
        a{
	font-family: 'Big Shoulders Text', cursive;
	color: #000;
	font-size: 1em;
	text-transform: uppercase;
	font-weight: 500;
}
 a:hover{
	background: #E7E7E7;
}
</style>
        <style>
        body{
        background-image: url("images/76.jpg");
        background-size: cover;
        background-color: #cccccc;
        }
        ab{
            background-color: #f90000;
        }</style>
    
    

</head>
    


<!-- <center> -->

    <body><div class="contact-address">
				<br><br><br>

        <h2><a>
            Contact</a>
        </h2>
        
<p>
           <span>410-602-8008</span>
            <span>15 Florida Ave</span>
            <span>Palo-Alto, 1111 CA</span>
        </p>
        
    </div>
    <form action="Thank you.html" method="post">
            <label>Name :</label>
            <input type="text" class="form-control" pattern="[a-zA-Z0-9]+" required placeholder="Enter your Name" /><br><br>
            <label>Email Id :</label>
            <input type="email" required placeholder="Enter your Email Id" /><br><br>
            <a><label>Query :</label>
            <input type="email" required placeholder="Enter your Query" /><br><br></a>
            <input type="submit" value="Submit">

        </form>
    </body>
<!-- </center> -->

</html>
