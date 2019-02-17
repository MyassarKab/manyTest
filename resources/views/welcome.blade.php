 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>




     <h1>Offer name : {{$Offer->name}} </h1>

     @foreach ($Package as $key => $value)
        <h3>Package name : {{$value->name}}</h3>
          @foreach ($value->Details as $key => $value2)

            <h4>details name : {{$value2->name}}</h4>
            <h5> type {{$value2->pivot->type}} </h5>
           @endforeach

      @endforeach


   </body>
 </html>
