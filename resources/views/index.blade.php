<html lang="en">
@extends('layout.head')
<body>
@extends('layout.nav')

<main>
    @include('layout.jumbotron')
    @include('layout.category')

    <!-- container -->
    <div class="container">
        <div class="row my-4"> <!-- row -->
        <div class="col-sm-6 my-4">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="/assets/Product tour-cuate.png" style="width:200px;" alt="...">
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

            <div class="col-sm-6 my-4">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="/assets/Product tour-cuate.png" style="width:200px;" alt="...">
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
    @include('layout.footer')
</main>


</body>
</html>