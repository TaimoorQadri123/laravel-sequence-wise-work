<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       <nav
        class="navbar navbar-expand-sm navbar-light bg-light"
       >
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index" aria-current="page"
                            >Home
                            <span class="visually-hidden">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">contct</a>
                    </li>
                </ul>
              
            </div>
        </div>
       </nav>


       <div class="container">
        <h1>this is about view</h1>
        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                
                <tbody>
                    @for($i=1; $i<=10 ; $i++)
                    <tr class="">
                        <td scope="row">{{'14'}}</td>
                        <td>{{'x'}}</td>
                        <td>{{$i}}</td>
                        <td>{{'='}}</td>
                        <td>{{$i*14}}</td>

                    </tr>
                    @endfor
                  
                </tbody>
            </table>
        </div>
        
       </div>
       
    </body>
</html>
