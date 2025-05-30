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
   
      <div class="container p-5">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    name="name"
                    id=""
                    class="form-control"
                    placeholder=""
                    aria-describedby="helpId"
                />
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="text"
                    name="email"
                    id=""
                    class="form-control"
                    placeholder=""
                    aria-describedby="helpId"
                />
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="text"
                    name="password"
                    id=""
                    class="form-control"
                    placeholder=""
                    aria-describedby="helpId"
                />
                <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <button class="btn btn-info">Add</button>
            
        </form>
      </div>
  


    </body>
</html>
