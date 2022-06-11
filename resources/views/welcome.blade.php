<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Json to blade</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
 <h1>Json To Blade</h1>

 @foreach($items->menu_items as $item)

 <div>
  <ul>
   <li>{{ $item->label }}</li>
   <ul>
    @foreach($item->children as $child)
    <li>{{ $child->label }}</li>
    <ul>
     @foreach($child->children as $three)
     <li>{{ $three->label }}</li>
     <ul>
      @foreach($three->children as $four)
      <li>{{ $four->label }}</li>
      @endforeach
     </ul>
     @endforeach
    </ul>
    @endforeach
   </ul>
  </ul>
 </div>

 @endforeach

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>