<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>
    CREATE A PET
  </h1>
  <form method="post" action="/create">
    {{ csrf_field() }}
    <input type="text" placeholder="Name" name="name">
    <input type="number" placeholder="Age" name="age">
    <input type="number" placeholder="Legs" name="legs">
    <input type="text" placeholder="Type" name="type">
    <button type="submit">Create Pet</button>
  </form>
</body>
</html>