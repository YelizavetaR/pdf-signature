<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>PDF Signature</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <!-- <link rel="stylesheet" href="{{url('../resources/css/app.css')}}"> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body class="antialiased">
    <nav class="navbar navbar-inverse header__main">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="brand">
                    <div class="brand__logo">
                        <a href="/" title="iLovePDF">
                            <img src="https://www.ilovepdf.com/img/ilovepdf.svg" alt="iLovePDF">
                        </a>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <div class="login-nav">Log in</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="signup-nav">Sign Up</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="login" method="POST">
        <input value="csrf_token()" hidden />
        <input type="text" name="tmp_data"/>
        <input type="button" value="login"/>
    </form>
    <div class="container-fluid text-center main__bg">
        <br>
        <h1 class="header__title">Add a signature into a PDF</h1>
        <h2 class="header__subtitle">Sign and certificate PDF documents. Request for digital signatures or sign your own documents.</h2>
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <table class="table__wh">
                    <tr>
                        <th rowspan="2" class="row__w"></th>
                        <th rowspan="2">
                            <div class="button__round" id="select_pdf">
                                <h3>Select PDF file</h3>
                            </div>
                        </th>
                        <td>
                            <div class="button__circle_1" data-toggle="tooltip" data-placement="right" title="Select PDF from Google Drive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 16">
                                    <path fill="#FFF" d="M8.7375,5.80725 L3.021,15.70725 L0.12375,10.69725 L5.847,0.795 L8.7375,5.80725 Z M17.865,10.38225 L12.078,10.39125 L6.378,0.489 L12.1725,0.489 L17.865,10.38225 Z M17.87625,10.9875 L14.9865,15.9975 L3.5415,15.99 L6.43425,10.98375 L17.87625,10.9875 Z"></path>
                                </svg>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="button__circle_2" data-toggle="tooltip" data-placement="right" title="Select PDF from Dropbox">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <path fill="#FFF" d="M5.3475,0.7035 L0.096,4.125 L3.708,7.03725 L9.018,3.765 L5.3475,0.7035 Z M17.904,4.14 L12.66525,0.7275 L9.01875,3.7725 L14.29875,7.03875 L17.904,4.14 Z M9.01875,10.305 L12.66525,13.35975 L17.904,9.945 L14.2995,7.0395 L9.01875,10.305 Z M0.096,9.9585 L5.3475,13.35975 L9.01875,10.305 L3.70875,7.0455 L0.096,9.9585 Z M9.01875,10.9635 L5.35575,14.0385 L3.786,13.02 L3.786,14.16 L9.01875,17.30475 L14.271,14.15175 L14.271,13.0125 L12.693,14.031 L9.01875,10.9635 Z"></path>
                                </svg>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <br>
        or drop PDF here
        <input id="file-input" type="file" name="name" style="display: none;" accept=".pdf" onchange="sign_pdf(this)" />
    </div>

    <div class="footer">
        <div class="footer__copy">© iLovePDF 2021 ® - Your PDF Editor</div>
    </div>
</body>

<scrip>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

        $('#select_pdf').on('click', function() {
            $('#file-input').trigger('click');
        });
    });

    function sign_pdf(e) {
        if (e.value != "") {
            console.log(e.value);
        }
    }
</scrip>

</html>