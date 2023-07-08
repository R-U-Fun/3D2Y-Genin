<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">

    <link rel="icon" href="https://as2.ftcdn.net/v2/jpg/03/60/12/53/1000_F_360125377_mVkIhqTKfQN6p6SEEwXC3DvbVEZ9YCYA.jpg" type="image/jpeg" sizes="16x16" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <title>ML</title>
</head>
<body>
        <script type="text/babel">
            function Secret(){
                return(
                    <div className="accordion position-fixed top-25 start-20" style={{ background: 'transparent', border: 'none', cursor:'default' }} id="accordionPanelsStayOpen1"><br/><br/>
                        <div className="accordion-item" style={{ background: 'transparent', border: 'none' }}>
                            <a className="accordion-header">
                                <button className="opacity-75 position-fixed top-3 end-0 mt-5 me-3 p-100" style={{ background: 'transparent', fontfamily: 'Arial Black', border:'none', fontsize: '10px', cursor:'default' }} type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne1">
                                    <i className="bi bi-emoji-wink"></i>
                                </button>
                            </a>
                            <div id="panelsStayOpen-collapseOne1" className="accordion-collapse collapse p-4 p-md-5 rounded-3" style={{ background: 'transparent' }}>
                                <div className="accordion-body" style={{ background: 'transparent', textalign: 'center', cursor:'default' }}>
                                    HA! YOU FOUND THE SECRET!
                                    <i className="bi bi-bug-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                );
            }
            ReactDOM.render(<Secret/> , document.getElementById("Secret"));

            
            function HomeObjs({Name, Linke, Icone}){
                return(
                    <div className="col-sm-4 col-lg-4 rounded-4" id="box" onClick={Linke}>
                        <div className="card my-4 text-white" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none'}}>
                            <h1 style={{ fontsize: '60px', color: '#003475'}}><i className={`bi bi-${Icone}`}></i></h1>
                            <div className="card-body" style={{ background: 'rgba(0, 0, 0, 0)', border: 'none' }}>
                                <h5 className="card-title fs-3 fw-bold" style={{ cursor:'default', color: '#003475'}}>{Name}</h5>
                            </div>
                        </div>
                    </div>
                );
            }
            function HomePage(){
                return(
                    <div>
                        <div id="HomeName"><a><b>M</b>L</a></div>

                        <div className="container my-4 text-center">
                            <div className="row col-lg-12 col-xs-1 gx-3 text-center">
                                <HomeObjs Name='Movies' Linke={MoviePageCall} Icone='film' />
                                <HomeObjs Name='Series' Linke={MoviePageCall} Icone='tv' />
                                <HomeObjs Name='Anime'  Linke={MoviePageCall} Icone='sunglasses' />
                            </div>
                        </div>
                    </div>
                );
            }
            function HomePageCall(){
                ReactDOM.render(<HomePage/> , document.getElementById("AppHere"));
            }
            ReactDOM.render(<HomePage/> , document.getElementById("AppHere"));


            let MLINKS =['https://yts.mx/movies/captain-america-the-first-avenger-2011', 
                                'https://yts.mx/movies/guardians-of-the-galaxy-vol-3-2023', 
                                'https://yts.mx/movies/coco-2017', 
                                'https://yts.mx/movies/vikram-2022',
                                'https://yts.mx/movies/fast-x-2023',
                                'https://yts.mx/movies/inside-out-2015'
                            ];
            console.log(MLINKS);

            function MovieBoxes({ Title, Year}){
                const TitleWords = (Title+"_"+Year).split(" ");
                const ImgTitle = TitleWords.join("_").toLowerCase();
                console.log(ImgTitle);
                return(
                        <div className="card text-white rounded-4" id="box" style={{ border: 'none'}}>
                            <a className='rounded-4' style={{ textDecoration: 'none', color: 'white', background: 'rgba(0, 33, 74, 0.9)', border: 'none'}}>
                                <img src={`https://img.yts.mx/assets/images/movies/${ImgTitle}/medium-cover.jpg`} className="card-img-top rounded-4" alt={`${Title}`} style={{ border: 'none'}} />
                                <div className="card-body" style={{ border: 'none' }}>
                                    <h5 className="card-title fs-3 fw-bold" style={{ cursor:'default', color: 'rgba(210, 230, 250, 0.9)'}}>{Title}</h5>
                                    <p className="card-text fs-6 mb-2" style={{ cursor:'default', color: 'rgba(210, 230, 250, 0.9)' }}><small>{Year}</small></p>
                                </div>
                            </a>
                        </div>
                );
            }
            function MoviePage({ MovieID, Title, Year}){
                const MovieList = [];
                for (let i = 0; i < MLINKS.length; i++) {
                    MovieList.push(<div key={i} className="col-sm-6 col-lg-3 p-3" id={`Movie${i}`} style={{ border: 'none'}}></div>);
                }
                return(
                    <div>
                        <div id="HomeName"><a contentEditable="true"><b>Movie</b>List</a></div>
                        <div className="container my-4 text-center">
                            <div className="row col-lg-12 col-xs-1 gx-3 text-center">
                                {MovieList}
                            </div>
                        </div>
                    </div>
                );
            }
            function MoviePageCall(){
                
                ReactDOM.render(<MoviePage/> , document.getElementById("AppHere"));

                for (let i = 0; i < MLINKS.length; i++){
                    fetch(MLINKS[i])
                        .then(response => response.text())
                        .then(data => {
                            let parser = new DOMParser();
                            let doc = parser.parseFromString(data, 'text/html');

                            let element = doc.querySelector('#mobile-movie-info');
                            let myData = element.textContent;
                            let TitleYearGenre = myData.split('\n');
                            let TitleWords = TitleYearGenre[1].split('.');
                            let Title = TitleWords.join("");
                                TitleWords = Title.split(':');
                                Title = TitleWords.join("");
                            let Year = TitleYearGenre[2].split(' ');

                            ReactDOM.render(<MovieBoxes Title={Title} Year={Year[0]} /> , document.getElementById("Movie"+i));
                    });
                }
            }
            fetch('https://yts.mx/browse-movies/0/all/all/7/downloads/0/en')
                        .then(response => response.text())
                        .then(data => {
                            let parser = new DOMParser();
                            let doc = parser.parseFromString(data, 'text/html');

                            let elements = doc.querySelectorAll('.browse-movie-link');
                            elements.forEach(element => {
                                let href = element.getAttribute('href');
                                console.log(href);
                            });

            });


            function Footer(){
                return(
                    <footer className="footer text-light py-5 bottom" style={{ background: 'linear-gradient(to bottom, transparent 0%, #111111 100%)' }}>
                        <div className="container">
                            <br/><hr/><br/>
                            <div className="text-center">
                                <a href="http://aaroophan-com.stackstaging.com" style={{ cursor:'default', color:'rgba(210, 230, 250, 0.9)', textDecoration:'none' }}>&copy; 2023 Aaroophan</a>
                                <br/><br/>
                                <ul className="list-inline">
                                    <li className="list-inline-item"><a href="https://www.instagram.com/aaroophan/?theme=dark" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-instagram"></i></a></li>
                                    <li className="list-inline-item"><a href="https://twitter.com/Aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-twitter"></i></a></li>
                                    <li className="list-inline-item"><a href="https://www.linkedin.com/in/aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-linkedin"></i></a></li>
                                    <li className="list-inline-item"><a href="https://github.com/R-U-Fun" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                );
            }
            ReactDOM.render(<Footer/> , document.getElementById("FooterHere"));

            
            function Header(){
                return(
                    <div className="container-fluids">
                        <nav className="navbar navbar-expand-md navbar-dark fixed-top" style={{ background: 'rgba(0, 0, 10, 0.8)', cursor:'default' }}>
                            &nbsp;&nbsp;&nbsp;
                            <a href="index.php"  style={{cursor:'default'}}><img src="https://as2.ftcdn.net/v2/jpg/03/60/12/53/1000_F_360125377_mVkIhqTKfQN6p6SEEwXC3DvbVEZ9YCYA.jpg" id="AaroophanIMG" height="35px" width="35px" className="rounded-5" /></a> 
                            &nbsp;&nbsp;&nbsp;
                            <a className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default', color:'rgba(210, 230, 250, 0.9)' }}>ML</a>
                            <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle">
                                <span className="navbar-toggler-icon"></span>
                            </button>
                            &nbsp;&nbsp;&nbsp;
                            <div className="collapse navbar-collapse justify-content-center" id="navbarNav">
                                <ul className="navbar-nav">
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" onClick={HomePageCall} style={{ cursor:'default' }}>Home</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" onClick={MoviePageCall} style={{ cursor:'default' }}>Movies</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" onClick={MoviePageCall} style={{ cursor:'default' }}>Series</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" onClick={MoviePageCall} style={{ cursor:'default' }}>Anime</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" style={{ cursor:'default', color:'rgba(210, 230, 250, 0)' }}>Aaroophan-3D2Y-Genin</a>
                                    </li>
                                    <li className="nav-item">
                                        <input className="nav-link p-2 mx-3 form-control" type="search" placeholder="Search" style={{ cursor:'default', background:'rgba(210, 230, 250, 0)', border:'none', color:'rgba(210, 230, 250, 0.9)' }}/>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" onClick={MoviePageCall} style={{ cursor:'default'}}><i className="bi bi-person mx-3"></i>Log In</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" onClick={MoviePageCall} style={{ cursor:'default' }}><i className="bi bi-view-list mx-3"></i></a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2 mx-3" onClick={MoviePageCall} style={{ cursor:'default' }}><i className="bi bi-brightness-high mx-3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                );
            }
            ReactDOM.render(<Header/> , document.getElementById("HeaderHere"));

        </script>

        <style>
            body{
                background: linear-gradient(to top, #003475 0%, #EDF5FF 100%);
                font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'
            }
            nav, footer{
                font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'
            }
            #HomeName
            {
                width: 100%;
                margin: auto;
                padding: 10px 0;
                text-align: center;
                font-size: 50px;
                font-family: 'Lato', sans-serif;
                letter-spacing: 2px;
            }
            #HomeName a
            {
                color: #003475;
                text-decoration: none;
                position: relative;
                cursor:default;
                transition: font-size 1s, letter-spacing 1s;
            }
            #HomeName a:hover
            {
                font-size: 75px;
                letter-spacing: 20px;
            }
            #box 
            {
                transition: box-shadow .2s;
            }

            #box:hover
            {
                box-shadow: 1px 1px 15px 10px #003475;
            }
            #PageNameA
            {
                font-size: 30px; 
                font-family: 'Lato', sans-serif;
                text-decoration: none;
                transition: color 1s, font-size 1s;
            }
            #PageNameA:hover
            {
                color:#99D9EA;
                cursor:default;
                font-size: 50px;
            }
        </style>


    <div id="Secret"></div>

    <div id="HeaderHere" class="container"></div>
        

    <div class="p-4" id="SearchHere"></div>
    <div class="p-4" id="AppHere"></div>

    <br><br>
    
    <div id="FooterHere"></div>

</body>
</html>