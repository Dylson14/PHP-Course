<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <main>
        <form action="" method="get">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="firstname" placeholder="Firstname goes here" />
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="lastname" placeholder="Lirstname goes here" />
            <br />
            <label for="message">Favourite Pet?</label>
            <select name="favouritepet" id="favouritepet">
                <option value="none">none</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>