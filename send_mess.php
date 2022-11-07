
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>messagerie </title>
    <link rel="stylesheet" href="css/cours.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js""></script>
</head>
<body>
    
    <form method ="post"  action =" index.php" style="text-align:center">
        <label> pseudo :</label><br>
        <input type ="text" name="pseudo" required /><br/>
        <textarea id ="name" name ="message" ></textarea> <br>
        <input id ="env" type ="submit" name="valider">
    </form>
    <section id="messages"></section>
    <script>
        setInterval('load_message()',500);
        function load_message(){
            $('#messages').load('load.php');
        }
        
    </script>  
</body>
</html> 
