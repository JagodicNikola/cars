<html>
 <head></head>
 <body>
  <h1>Cars</h1>
  @foreach ($cars as $car) 
   <ul>
    <li>{{$car->producer}} : {{$car->title}}</li>
   </ul>
  @endforeach
 </body>
</html>