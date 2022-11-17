<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;800&display=swap" rel="stylesheet">
        <title>Become Revisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="font-family: 'Montserrat', sans-serif; background-color:#F7F7FF">

<div class="container">
    <div class="row">
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-4">
            <div class="card mt-5" style="height: 80vh; width:50vw">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-2"></div>
                        <div class="col-12, col-md-8 justify-content-center">
                            <h1 style="color:#495867; font-size:20px;">Ciao, {{ $user->name }} ha richiesto di poter diventare revisore!</h1>
                        </div>
                        <div class="col-12 col-md-2"></div>
                
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-2"></div>
                            <div class="col-12 col-md-8 d-flex">
                                <h2 class="justify-content-center; font-size:20px;">Dai un'occhiata ai suoi dati:</h2>
                            </div>
                        <div class="col-12 col-md-2"></div>
                
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-2"></div>
                                <div class="col-12 col-md-8">
                
                                    <div class="card text-center" style="width: 18rem; background-color: #BDD5EA;">
                                        <div class="card-body">
                                          <h5 class="card-text">Nome: {{ $user->name }}</h5>
                                          <p class="card-text">Email: {{ $user->email }}</p>
                                        </div>
                                      </div>
                
                                </div>
                                <div class="col-12 col-md-2"></div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-2"></div>
                                <div class="col-12 col-md-8">
                
                                    <p style="color:#495867;font-size:20px;">Clicca qui se vuoi rendere {{ $user->name }} revisore:</p>
                
                                </div>
                                <div class="col-12 col-md-2"></div>
                            </div>
                        </div>
                   
                        <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-2"></div>
                            <div class="col-12 col-md-6 justify-content-center"> 
                                <button style="appearance: button;
                                background-color: #FE5F55;
                                border: solid transparent;
                                border-radius: 16px;
                                border-width: 0 0 4px;
                                box-sizing: border-box;
                                cursor: pointer;
                                display: inline-block;
                                font-family: 'Montserrat', sans-serif;
                                font-size: 15px;
                                font-weight: 700;
                                letter-spacing: .8px;
                                line-height: 20px;
                                margin: 0;
                                outline: none;
                                overflow: visible;
                                padding: 13px 16px;
                                text-align: center;
                                text-transform: uppercase;
                                touch-action: manipulation;
                                transform: translateZ(0);
                                transition: filter .2s;
                                user-select: none;
                                -webkit-user-select: none;
                                vertical-align: middle;
                                white-space: nowrap;
                                "class="button-19 shadow" role="button">
                                <a href="{{ route('make.revisor', compact('user'))}}">
                                    Rendi revisore
                                </a>
                            </button>
                        </div>
                        </div>
                    </div>
                        </div>
                        
                    </div>
                
                </div>
        </div>
        <div class="col-12 col-md-2"></div>
    </div>
</div>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
<!-- HTML !-->