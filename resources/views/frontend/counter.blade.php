<!DOCTYPE html>
<html lang="en">
<head>
   
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
        {{-- <html lang="en"> --}}
                <title>Media Queries</title>
                <meta name="viewport" content="width=device-width, initial=scale1.0">  
                <link rel="stylesheet" href="main.css">
                <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
                <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
                <link href='https://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
                <link href="star-rating.css"  rel="stylesheet">
                     <style>
                         .container{
                             width: 800px;
                             margin: 300px auto;
                         }
</style>

            </head>
            <body> 
                <div class="container">
                    <h3 class="heading">User Rating</h3>
                    <div class="star-rating">
                       <span class="fa fa-star-0" title="1"></span>
                       <span class="fa fa-star-0" title="2"></span>
                       <span class="fa fa-star-0" title="3"></span>
                       <span class="fa fa-star-0" title="4"></span>
                       <span class="fa fa-star-0" title="5"></span>

                    </div>
                    <h3 class="heading">Reviews</h3>
                    <div class="review-rating">
                        <div class="left-review">
                                <span class="fa fa-star" title="1"></span>
                                <span class="fa fa-star" title="2"></span>
                                <span class="fa fa-star" title="3"></span>
                                <span class="fa fa-star-half-0" title="4"></span>
                                <span class="fa fa-star-0" title="5"></span>
                        </div>
                        <div class="review-people"><i class="fa fa-user"></i>8,445,600 total</div>
                    </div>
                    <div class="right-review">
                        <div class="row-bar">
                            <div class="left-bar">1</div>
                            <div class="right-bar">
                                <div class="bar-container">
                                    <div class="bar-1" style="width: 40%"></div>
                                </div>
                            </div>
                        <div>
                    </div>
                    {{-- <h3 class="heading">Reviews</h3> --}}


                </div>
            
            </body>
        </html>
    {{-- <title>MM Movies</title>
</head>
<body>
    <div class="row">
        <button type="submit" name="btn" href="{{action("CounterController@store")}}">Like

        </button>
    </div>
</body>
</html> --}}