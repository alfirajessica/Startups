<html lang="en">
@extends('layout.head')
<body>
@extends('layout.nav')

<main>
    @include('layout.jumbotron')
    @include('layout.category')

    <!-- container -->
    <div class="container">
        <div class="row"> <!-- row -->
            <div class="col-sm-6">
                <div class="card mb-3 mx-4" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="/assets/Product tour-cuate.png" style="width:250px;" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body mx-2">
                            <h5 class="card-title mx-4">Card title</h5>
                            <p class="card-text mx-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text mx-4"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card mb-3 mx-4" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="/assets/Product tour-cuate.png" style="width:250px;" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body mx-4">
                            <h5 class="card-title mx-4">Card title</h5>
                            <p class="card-text mx-4">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text mx-4"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
    <!-- container -->
</main>


</body>
</html>