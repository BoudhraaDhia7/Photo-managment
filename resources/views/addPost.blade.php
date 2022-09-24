<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author - Pintereso Bootstrap Template</title>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAs2DHu6AvTQ-no_c4panFGZW0K5W-bdyg&exp&sensor=false&libraries=places" sensor="false"></script>
    <script type="text/javascript">
    $(function(){
    
        var latlng=new google.maps.LatLng(35.67743306240599, 10.097028163014665);
        var map=new google.maps.Map(document.getElementById('gmap'),{
                                                                   zoom:6.5,
                                                                   center:latlng,
                                                                   mapTypeId:google.maps.MapTypeId.ROADMAP
                                                                   });
    
    
    var x= document.getElementById("la").value ;
    var y=document.getElementById("ln").value;
        var marker=new google.maps.Marker({
                                          position:new google.maps.LatLng(x, y),
                                          map:map,
                                          draggable:true,
                                          animation:google.maps.Animation.DROP
                                      });
    
    
    
    //default
    
    
    //change on map
    marker.addListener( 'mouseover', function(event) {
        document.getElementById("la").value = event.latLng.lat();
        document.getElementById("ln").value = event.latLng.lng();
    });
    marker.addListener( 'mouseout', function(event) {
        document.getElementById("la").value = event.latLng.lat();
        document.getElementById("ln").value = event.latLng.lng();
    });
    });
    //end change on map
    </script>
    <link rel="stylesheet" href="{{ asset('css/dashboradapp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboradtheme.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand font-weight-bolder mr-3" href="index.html">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuLRD-XRMXEXCQW4_uLjH11NLJI-8bJZ0NpA&usqp=CAU"
                style="width:150px;height: 150px;"></a>
        <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault"
            aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsDefault">
            <ul class="navbar-nav mr-auto align-items-center">
                <form class="bd-search hidden-sm-down">
                    <input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input"
                        placeholder="Search..." autocomplete="off">
                    <div class="dropdown-menu bd-search-results" id="search-results">
                    </div>
                </form>
            </ul>
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="post.html">Post</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href=""><img class="rounded-circle mr-2"
                            src="https://png.pngtree.com/png-vector/20190629/ourlarge/pngtree-business-people-avatar-icon-user-profile-free-vector-png-image_1527664.jpg"
                            width="30"><span class="align-middle">{{ Auth::user()->name }}</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32"
                            width="21" height="21" aria-hidden="false" data-reactid="71">
                            <path
                                d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z"
                                data-reactid="22"></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
                        <div class="">
                            <ul class="mt-0">


                                <li><a class="settings" href="/setting/{{ auth::user()->id }}"><span
                                            class="picon"><i><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-settings" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                                                    </path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg></i>
                                        </span>Settings</a></li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <li><button style="border-style:none; margin:0;padding:0;background-color:#fff;"
                                            type="submit" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            <a class="logout" href="/logout"><span
                                                    class="picon"><i><svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-logout" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                                            </path>
                                                            <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                                        </svg></i>
                                                </span>Logout</a></li>


                                    </button>
                                </form>

                            </ul>

                        </div>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main" style="margin-top:100px">
        
        <div class="container rounded bg-white mt-5 mb-5" id="Cardrow">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Ajouter publication</h4>
                        </div>
                        <form method="POST" action="{{route('store.post')}}" enctype="multipart/form-data">
                            @csrf
                               @foreach ($errors->all() as $error)
                                    <small style="color:red;font-weight:bold;font-size:12px;margin-left:10px;margin-bottom:10px">{{ $error }}</small><br>
                               @endforeach
                                <label for="name">
                                    <span>Titre :</span>
                                    <br>
                                </label>
                                <input name="name" type="text" id="name" value="" placeholder="Titre de la publication"
                                    class="form-control {{ $errors->has('name') ? '' : '' }}">
                                <label for="name">
                                    <span>Description :</span>
                                    <br>
                                </label>
                                <br>
                                <input name="Desc" value=""  type="text" id="lastname" placeholder="Description de la publication"
                                    class="form-control {{ $errors->has(' lastname ') ? 'is-invalid' : '' }}">
                                
                                <label for="town-select">choisir votre ville:
                                </label>
                                <div>
                                    <select name="town" id="select"
                                        class="form-control {{ $errors->has(' town ') ? 'is-invalid' : '' }}">
                                        <option selected value="Sousse">Sousse</option>
                                        <option value="Bizertr">Bizertr</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Nabeul">Nabeul</option>
                                        <option value="Zaghouane">Zaghouane</option>
                                        <option value="Baja">Baja</option>
                                        <option value="Monastir">Monastir</option>
                                        <option value="Mahdia">Mahdia</option>
                                        <option value="Kairaouan">Kairaouan</option>
                                        <option value="Tozeur">Tozeur</option>
                                    </select>
                                </div>    
                                <div id="gmap" class="col-md-12"style="height:400px; margin-top:15px;"></div>   
                                <input type="hidden" name="userId" value="{{auth::user()->id}}">    
                                <label for="town-select">choisir votre image:
                                </label>         
                                <input type="file" name="img">      
                                <input type="hidden" name="gmapX" id="la" value="35.82653004650417">       
                                <input type="hidden" name="gmapY" id="ln" value="10.588912584527469">  
                                    
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">
                                        Ajouter</button></div>
                        </form>
                    </div>
                </div>


            </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>


    </main>

    <script src="{{ asset('js/Dapp.js') }}"></script>
    <script src="{{ asset('js/Dthemes.js') }}"></script>

    <footer class="footer pt-5 pb-5 text-center">
    </footer>
</body>

</html>
