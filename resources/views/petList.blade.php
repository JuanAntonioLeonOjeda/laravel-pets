<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    div {
      border: 1px solid black;
      background-color: lightblue;
      width: 20vw;
      padding-left: 10px;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <h1>
    Pet list
  </h1>
  @if (count($list) === 0) 
      <p>There are no pets :c</p>
      @else
          @foreach($list as $pet)
            <div>
              <h3>
                Name: {{ $pet->name }}
              </h3>
              <p>
                Age: {{ $pet->age }}
              </p>
              <p>
                Legs: {{ $pet->legs }}
              </p>
              <p>
                Type: {{ $pet->type }}
              </p>
            </div>
          @endforeach
  @endif
</body>
</html>