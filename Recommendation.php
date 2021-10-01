<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Recommendation.css">
    <title>Movie App</title>
    
    <script src="Recommendation.js"></script>
    <style>
        
    </style>

   
</head>
<body>
    
    <div class="recommended">
        <form  id="form">
            <input type="text" placeholder="Search" id="search" class="search">
           
        </form>
    </div>

    <div >
            <button  type="Submit"class=" RecommendedMovies" id="RecommendedMovies"  onclick="onMyclick();">Recommend Movies</button>
        
    </div>
    
    <main id="main"></main>
    <div class="logout">
    <a style="background-color:blue;text-decoration:none; color:white; border:2px solid black; position:absolute;left:48%; top:40%"href="logout.php">Logout</a>
     </div>
</body>
</html>