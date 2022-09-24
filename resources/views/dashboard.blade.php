<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <link rel="stylesheet" href="{{ asset('css/dashboradapp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboradtheme.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    .material-icons { font-size: 30px;color: #f30303 }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand font-weight-bolder mr-3" href="index.html">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuLRD-XRMXEXCQW4_uLjH11NLJI-8bJZ0NpA&usqp=CAU" style="width:150px;height: 150px;"></a>
        <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarsDefault">
            <ul class="navbar-nav mr-auto align-items-center">
                <form class="bd-search hidden-sm-down">
                    <input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Search..." autocomplete="off">
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
                    <a class="nav-link" href="{{route("user.profile",['id'=>Auth::user()->id])}}"><img class="rounded-circle mr-2" src="https://png.pngtree.com/png-vector/20190629/ourlarge/pngtree-business-people-avatar-icon-user-profile-free-vector-png-image_1527664.jpg" width="30"><span class="align-middle">{{Auth::user()->name}}</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
                        <div class="">
                            <ul class="mt-0">


                                <li><a  class="settings" href="/setting/{{Auth::user()->id}}"><span class="picon"><i ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                 </svg></i>
                                </span>Settings</a></li>
                                <form action="/logout" method="POST">         
                                    @csrf                     
                                    <li><button style="border-style:none; margin:0;padding:0;background-color:#fff;"type="submit" onclick="event.preventDefault();
                                        this.closest('form').submit();">                                     
                                        <a class="logout" href="/logout"><span class="picon"><i><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
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
    <main role="main">
        <section class="mt-4 mb-5">
            <div class="container mb-4">
                <h1 class="font-weight-bold title">Explore</h1>
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
                        <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    		</button>
                </div>
            </div> 
            <div class="container-fluid">
                <div class="row">
                    <div class="card-columns">
                        <div class="card card-pin">
                            <img class="card-img" src="https://blog.tunisiebooking.com/wp-content/uploads/2020/12/guide-touristique-Tunisie.jpg" alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Sidi bousaid</h2>
                                <div class="more">
                                    <a href="post.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img" src="https://www.tunisiepromo.com/wp-content/uploads/2017/11/animation-tozeur.jpg" alt="Card image">
                            <div class="overlay">
                               
                                <h2 class="card-title title">Tozeur</h2>
                               
                                <div class="more">
                               
                                   
                                   
                                    <a href="post2.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                <i class="material-icons ">edit</i>
                                <i class="material-icons ">delete</i>
                            </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img" src="https://www.voyage-tunisie.info/wp-content/uploads/2019/05/djerba2-1026x500.jpg" alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Djerba</h2>
                                <div class="more">
                                    <a href="post3.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img" src="https://autogo-dz.com/wp-content/uploads/2020/04/Canva-Tunisian-Vacation-1080x675.jpg" alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Hammamet</h2>
                                <div class="more">
                                    <a href="post4.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>


                        <div class="card card-pin">
                            <img class="card-img" src="https://voyageforum.info/images/hd/posts/openmedium/1569962941-E4N922Z9CSx4Nci.jpeg" alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Mahdia</h2>
                                <div class="more">
                                    <a href="post5.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-pin">
                            <img class="card-img" src="https://tunisie.co/uploads/images/content/portbizerte-191020-7.jpg" alt="Card image">
                            <div class="overlay">
                                <h2 class="card-title title">Bizerte</h2>
                                <div class="more">
                                    <a href="post6.html">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin">
                            <img class="card-img" src="data:image/jpeg;base64,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"
                                alt=" Card image ">
                            <div class="overlay ">
                                <h2 class="card-title title ">Sfax Kerkannah</h2>
                                <div class="more ">
                                    <a href="post7.html ">
                                        <i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>


                        <div class="card card-pin ">
                            <img class="card-img " src="https://upload.wikimedia.org/wikipedia/commons/0/08/Matmata%2C_Tunisia.JPG" alt="Card image ">
                            <div class="overlay ">
                                <h2 class="card-title title ">Tataouin Matmata</h2>
                                <div class="more ">
                                    <a href="post8.html ">
                                        <i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin ">
                            <img class="card-img " src="https://guide-voyage-tunisie.com/wp-content/uploads/2020/08/medina-de-zarzis-1.webp" alt="Card image ">
                            <div class="overlay ">
                                <h2 class="card-title title ">Zarziss</h2>
                                <div class="more ">
                                    <a href="post9.html ">
                                        <i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i> More </a>
                                </div>
                                <div  class="mx-2 pt-3"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>
                        <div class="card card-pin ">
                            <img class="card-img " src="https://i.pinimg.com/474x/c1/2b/1a/c12b1af815f3ec6458428e96b97d989a--beautiful-things-travel-tips.jpg" alt="Card image ">
                            <div class="overlay ">
                                <h2 class="card-title title ">Tunis Medina</h2>
                                <div class="more ">
                                    <a href="post10.html ">
                                        <i class="fa fa-arrow-circle-o-right " aria-hidden="true "></i> More </a>
                                </div>
                                <div  class="mx-2 pt-12"> 
                                    <i class="material-icons ">edit</i>
                                    <i class="material-icons ">delete</i>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="{{ asset('js/Dapp.js') }}"></script>
    <script src="{{ asset('js/Dthemes.js') }}"></script>

    <footer class="footer pt-5 pb-5 text-center ">

        <div class="container ">

            <div class="socials-media ">

                <ul class="list-unstyled ">
                    <li class="d-inline-block ml-1 mr-1 "><a href="# " class="text-dark "><i class="fa fa-facebook "></i></a></li>
                    <li class="d-inline-block ml-1 mr-1 "><a href="# " class="text-dark "><i class="fa fa-twitter "></i></a></li>
                    <li class="d-inline-block ml-1 mr-1 "><a href="# " class="text-dark "><i class="fa fa-instagram "></i></a></li>
                    <li class="d-inline-block ml-1 mr-1 "><a href="# " class="text-dark "><i class="fa fa-google-plus "></i></a></li>
                    <li class="d-inline-block ml-1 mr-1 "><a href="# " class="text-dark "><i class="fa fa-behance "></i></a></li>
                    <li class="d-inline-block ml-1 mr-1 "><a href="# " class="text-dark "><i class="fa fa-dribbble "></i></a></li>
                </ul>

            </div>

          
           


        </div>

    </footer>
</body>

</html>