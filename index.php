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
                

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>

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
                            <a className="navbar-brand fw-bold font-arial fs-2" href="index.php" style={{ cursor:'default' }}>ML</a>
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



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div id="FooterHere"></div>
    <script type="text/babel">
        function Footer(){
            return(
                <footer className="footer text-light py-5" style={{ background: 'linear-gradient(to bottom, transparent 0%, #111111 100%)' }}>
                    <div className="container">
                        <br/><hr/><br/>
                        <div className="row">
                            <div className="col-md-6">
                                <h3 style={{ cursor:'default' }}>About ML</h3>
                                <a style={{ cursor:'default' }}>3D2Y-Genin</a><br/>
                                <a style={{ cursor:'default' }}></a><br/> 
                                <a style={{ cursor:'default', textalign: 'right' }}>- Aaroophan</a>
                                <hr/>
                            </div>
                            <div className="col-md-3">
                                <h3 style={{ cursor:'default' }}>Links</h3>
                                <ul className="list-unstyled">
                                    <li><a className="btn btn-lg text-white px-3" style={{ '--bs-btn-padding-y': '.25rem', '--bs-btn-padding-x': '.5rem', '--bs-btn-font-size': '.75rem', cursor:'default' }} href="index.php#Home">Home</a></li>
                                    <li><a className="btn btn-lg text-white px-3" style={{ '--bs-btn-padding-y': '.25rem', '--bs-btn-padding-x': '.5rem', '--bs-btn-font-size': '.75rem', cursor:'default' }} href="index.php#AboutMe">Profile</a></li>
                                    <li><a className="btn btn-lg text-white px-3" style={{ '--bs-btn-padding-y': '.25rem', '--bs-btn-padding-x': '.5rem', '--bs-btn-font-size': '.75rem', cursor:'default' }} href="index.php#Projects">Movies</a></li>
                                    <li><a className="btn btn-lg text-white px-3" style={{ '--bs-btn-padding-y': '.25rem', '--bs-btn-padding-x': '.5rem', '--bs-btn-font-size': '.75rem', cursor:'default' }} href="index.php#Plans">Series</a></li>
                                    <li><a className="btn btn-lg text-white px-3" style={{ '--bs-btn-padding-y': '.25rem', '--bs-btn-padding-x': '.5rem', '--bs-btn-font-size': '.75rem', cursor:'default' }} href="index.php#Contact">Search</a></li>
                                    <hr/>
                                 </ul>
                            </div>
                            <div className="col-md-3">
                                <h3 style={{ cursor:'default' }}>Contact</h3>
                                <ul className="list-unstyled">
                                    <li style={{ cursor:'default' }}><i className="bi bi-geo-alt-fill"></i> Sri Lanka</li>
                                    <li style={{ cursor:'default' }}><i className="bi bi-envelope-fill"></i> arophn@gmail.com</li>
                                    <li style={{ cursor:'default' }}><i className="bi bi-phone-fill"></i> +94 76 850 5131</li>
                                    <hr/>
                                </ul>
                            </div>
                        </div>
                        <hr/>
                        <div className="text-center">
                            <p style={{ cursor:'default' }}>&copy; 2023 Aaroophan.</p>
                            <ul className="list-inline">
                                <li className="list-inline-item"><a href="https://www.facebook.com/Aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-facebook"></i></a></li>
                                <li className="list-inline-item"><a href="https://www.instagram.com/aaroophan/?theme=dark" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-instagram"></i></a></li>
                                <li className="list-inline-item"><a href="https://twitter.com/Aaroophan" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-twitter"></i></a></li>
                                <li className="list-inline-item"><a href="https://www.linkedin.com/in/aaroophan/" style={{ cursor:'default', fontsize: '20px' }}><i className="bi bi-linkedin"></i></a></li>
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
