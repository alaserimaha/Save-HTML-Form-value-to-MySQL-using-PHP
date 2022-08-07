<html>  
 <head><title>Save Input Using GET Method</title>
 <style>
        body{
          font-family: 'Open Sans', sans-serif;
          background:#819BDB;
          margin: 0 auto 0 auto;  
          width:100%; 
          text-align:center;
          margin: 20px 0px 20px 0px;   
        }
        .box{
          background:white;
          width:400px;
          border-radius:6px;
          margin: 0 auto 0 auto;
          padding:0px 0px 70px 0px;
          border: #14378F 4px solid; 
        }
        .form{
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width:400px;
            height: 300px;
            text-align: center;
       }
       .number{
          background:#ecf0f1;
          border: #ccc 1px solid;
          border-bottom: #ccc 2px solid;
          padding: 8px;
          width:250px;
          color:#AAAAAA;
          margin-top:10px;
          font-size:1em;
          border-radius:4px;
        }
        .button{
          background:#819BDB;
          width:125px;
          padding-top:5px;
          padding-bottom:5px;
          color:white;
          border-radius:4px;
          border: 1px solid;
          margin-top:20px;
          margin-bottom:20px;
          float:left;
          margin-left:135px;
          font-weight:800;
          font-size:0.8em;
        }
 </style>


</head>  
<body> 
<div class="form"> 
<form action="get.php" method="get"> 
    <div class="box">
<h3 style="color:#525252;">save number using GET method</h3>

 <input type="number" name="number" ><br />  
<input type="submit" value="store" class="button">  
</div>
</form>  
</div>
 </body>  
</html> 
