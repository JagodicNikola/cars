<html>
 <head></head>
 <body>
  <h1>Cars</h1>
  @foreach ($cars as $car) 
   <ul>
    <li><a href="cars/{{$car->id}}">{{$car->producer}} 
     : {{$car->title}}</a></li>
   </ul>
  @endforeach
 </body>
</html>