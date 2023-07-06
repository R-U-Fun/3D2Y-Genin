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


    <!--SECRET-->
    <div id="Secret"></div>
    <script type="text/babel">
            function Secret(){
                return(
                    <div className="accordion position-fixed top-25 start-20" style={{ background: 'transparent', border: 'none' }} id="accordionPanelsStayOpen1"><br/><br/>
                        <div className="accordion-item" style={{ background: 'transparent', border: 'none' }}>
                            <a className="accordion-header">
                                <button className="opacity-75 position-fixed top-3 end-0 mt-5 me-3 p-100" style={{ background: 'transparent', fontfamily: 'Arial Black', border:'none', fontsize: '10px' }} type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne1">
                                    <i className="bi bi-emoji-wink"></i>
                                </button>
                            </a>
                            <div id="panelsStayOpen-collapseOne1" className="accordion-collapse collapse p-4 p-md-5 rounded-3" style={{ background: 'transparent' }}>
                                <div className="accordion-body" style={{ background: 'transparent', textalign: 'center' }}>
                                    HA! YOU FOUND THE SECRET!
                                    <i className="bi bi-bug-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                );
            }
            ReactDOM.render(<Secret/> , document.getElementById("Secret"));
        </script>

    <style>
        body{
                background: linear-gradient(to top, #003475 0%, #EDF5FF 100%);
                font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'
            }
        nav, footer{
                font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'
            }
    </style>


        <div id="HeaderHere" class="container"></div>
        <script type="text/babel">
            function Header(){
                return(
                    <div className="container-fluids">
                        <nav className="navbar navbar-expand-md navbar-dark  fixed-top" style={{ background: 'rgba(0, 0, 10, 0.8)' }}>
                            &nbsp;&nbsp;&nbsp;
                            <a href="index.php"  style={{cursor:'default'}}><img src="https://as2.ftcdn.net/v2/jpg/03/60/12/53/1000_F_360125377_mVkIhqTKfQN6p6SEEwXC3DvbVEZ9YCYA.jpg" id="AaroophanIMG" height="35px" width="35px" className="rounded-5" /></a> 
                            &nbsp;&nbsp;&nbsp;
                            <a className="navbar-brand fw-bold font-arial" id="PageNameA" href="index.php" style={{ cursor:'default' }}>ML</a>
                            <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle">
                                <span className="navbar-toggler-icon"></span>
                            </button>
                            &nbsp;&nbsp;&nbsp;
                            <div className="collapse navbar-collapse" id="navbarNav">
                                <ul className="navbar-nav">
                                    <li className="nav-item">
                                        <a className="nav-link p-2" href="index.php" style={{ cursor:'default' }}>Home</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2" href="index.php" style={{ cursor:'default' }}>Profile</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2" href="index.php" style={{ cursor:'default' }}>Movies</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2" href="index.php" style={{ cursor:'default' }}>Series</a>
                                    </li>
                                    <li className="nav-item">
                                        <a className="nav-link p-2" href="index.php" style={{ cursor:'default' }}>Search</a>
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
	


        <br><br>


    <div id="AppHere"></div>

        <div id="HomeName"><a><b>M</b>L</a></div><br><br>
        <style>
            #HomeName
            {
                width: 100%;
                margin: auto;
                padding: 20px 0;
                text-align: center;
                font-size: 100px;
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
                font-size: 150px;
                letter-spacing: 20px;
            }
        </style>





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div id="FooterHere"></div>
    <script type="text/babel">
        function Footer(){
            return(
                <footer className="footer text-light py-5" style={{ background: 'linear-gradient(to bottom, transparent 0%, #111111 100%)' }}>
                    <div className="container">
                        <br/><hr/><br/>
                        <div className="text-center">
                            <p style={{ cursor:'default' }}>&copy; 2023 Aaroophan</p>
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
    </script>
</body>
</html>