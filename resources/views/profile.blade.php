<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author - Pintereso Bootstrap Template</title>
    <script type="text/javascript">
        var states = [
            "Alabama",
            "Alaska",
            "Arizona",
            "Arkansas",
            "California",
            "Colorado",
            "Connecticut",
            "Delaware",
            "Florida",
            "Georgia",
            "Hawaii",
            "Idaho",
            "Illnois",
            "Indiana",
            "Iowa",
            "Kansas",
            "Kentucky",
            "Louisiana",
            "Maine",
            "Maryland",
            "Massachusetts",
            "Michigan",
            "Minnesota",
            "Mississippi",
            "Missouri",
            "Montana",
            "Nebraska",
            "Nevada",
            "New Hampshire",
            "New Jersey",
            "New Mexico",
            "New York",
            "North Carolina",
            "North Dakota",
            "Ohio",
            "Oklahoma",
            "Oregon",
            "Pennsylvania",
            "Rhode Island",
            "South Carolina",
            "South Dakota",
            "Tennessee",
            "Texas",
            "Utah",
            "Vermont",
            "Virginia",
            "Washington",
            "West Virginia",
            "Wisconsin",
            "Wyoming"
        ];

        $('#form-autocomplete').mdbAutocomplete({
            data: states
        });
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


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand font-weight-bolder mr-3" href="index.html"><img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuLRD-XRMXEXCQW4_uLjH11NLJI-8bJZ0NpA&usqp=CAU"
                style="width:150px;height: 150px;"></a></a>
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
                    <a href="{{route('add.post')}}">
                    <button class="btn btn-primary profile-button mt-3 mx-3" type="button" data-toggle="modal"
                        data-target="">
                        <svg class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">

                            <circle cx="12" cy="12" r="9"></circle>
                            <line x1="9" y1="12" x2="15" y2="12"></line>
                            <line x1="12" y1="9" x2="12" y2="15"></line>
                        </svg></button>
                    </a>
                </form>
            </ul>
            <ul class="navbar-nav mr-auto align-items-center">

            </ul>

            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="post.html">Post</a>
                    </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="author.html"><img class="rounded-circle mr-2"
                            src="https://png.pngtree.com/png-vector/20190629/ourlarge/pngtree-business-people-avatar-icon-user-profile-free-vector-png-image_1527664.jpg"
                            width="30"><span class="align-middle">Author</span></a>
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


                                <li><a class="settings" href="/setting/{{ Auth::user()->id }}"><span
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
    <main role="main">


        <div class="jumbotron border-round-0 min-50vh"
            style="background-image:url(https://images.unsplash.com/photo-1522204657746-fccce0824cfd?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=84b5e9bea51f72c63862a0544f76e0a3&auto=format&fit=crop&w=1500&q=80);">
        </div>
        <div class="container mb-4">
            <img src="https://png.pngtree.com/png-vector/20190629/ourlarge/pngtree-business-people-avatar-icon-user-profile-free-vector-png-image_1527664.jpg"
                class="mt-neg100 mb-4 rounded-circle" width="128">
            <h1 class="font-weight-bold title">Sal</h1>
            <p>
                We Are Artists – Photography is an art form. As photographers we appreciate the artistic value that is
                in photography. Photography allows us to express and bring out the beauty in front of us.
            </p>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <h5 class="font-weight-bold">My post</h5>
                <div class="card-columns">
                    @foreach ($posts as $post)
                    <div class="card card-pin">
                        <img class="card-img" 
                            src="http://psc.test/storage/{{$post->img}}"
                            alt="Card image" 
                            >


                    </div>
                    @endforeach
<!--
                    <div class="card card-pin">
                        <img class="card-img"
                            src="https://www.voyages-d-affaires.com/wp-content/uploads/2008/04/gg-200-4.jpg"
                            alt="Card image">


                    </div>
                    <div class="card card-pin">
                        <img class="card-img"
                            src="https://content.mosaiquefm.net/uploads/content/thumbnails/tourisme_tozeur_1569528343.jpg"
                            alt="Card image">

                    </div>
                    <div class="card card-pin">
                        <img class="card-img"
                            src="https://cdn.getyourguide.com/img/tour/5d1fe913f03f3.jpeg/148.jpg" alt="Card image">

                    </div>
                    <div class="card card-pin">
                        <img class="card-img"
                            src="https://media.tacdn.com/media/attractions-splice-spp-674x446/06/e7/55/18.jpg "
                            alt="Card image">

                    </div>
                    <div class="card card-pin">
                        <img class="card-img"
                            src="https://pbs.twimg.com/profile_images/879334595405242369/f1V8ahUa_400x400.jpg"
                            alt="Card image">

                    </div>
                    <div class="card card-pin">
                        <img class="card-img"
                            src="https://photo980x880.mnstatic.com/41606d23999bc871a2f96eb8306511a4/el-oasis-de-montana-de-chebika-125721.jpg "
                            alt="Card image">

                    </div> -->
                    <div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">AJOUTER PUBLICATION</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">choisir une image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>



                                        <div class="md-form ">
                                            <label for="message-text" class="col-form-label">localisation:</label>
                                            <input type="search" id="form-autocomplete"
                                                class="form-control mdb-autocomplete">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">description:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Ajouter Pub</button>
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

        <div class="container">

            <div class="socials-media">

                <ul class="list-unstyled">
                    <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                                class="fa fa-facebook"></i></a></li>
                    <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                                class="fa fa-twitter"></i></a></li>
                    <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                                class="fa fa-instagram"></i></a></li>
                    <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                                class="fa fa-google-plus"></i></a></li>
                    <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                                class="fa fa-behance"></i></a></li>
                    <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i
                                class="fa fa-dribbble"></i></a></li>
                </ul>

            </div>




        </div>

    </footer>
</body>

</html>
