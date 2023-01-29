<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>

    <form action="submit" method="post">
        @csrf
    <label>First Name</label> <br>
    <input type="text" name="name"> <br> <br>
    <label>Last Name</label> <br>
    <input type="text" name="lastname"> <br><br>
    <label>Gender :</label> <br>
    <input type="radio" name="gender"> Man <br>
    <input type="radio" name="gender"> Woman <br>
    <input type="radio" name="gender"> Other <br> <br>
    <label>Nationaly :</label> <br>
    <select name="Nationaly"> 
        <option value="">Indonesia</option>
        <option value="">Singapura</option>
        <option value="">United Arab Emirates</option>
        <option value="">Japan</option> 
    </select> <br> <br>
    <label>Language Spoken :</label> <br>
    <input type="checkbox">Bahasa Indonesia <br>
    <input type="checkbox">English <br>
    <input type="checkbox">Arabik <br>
    <input type="checkbox">Japanese <br> <br>
    <label>Bio</label> <br>
    <textarea name="bio" cols="30" rows="10"></textarea> <br>
    <input type="submit" value="submit">
    </form>
</body>
</html>