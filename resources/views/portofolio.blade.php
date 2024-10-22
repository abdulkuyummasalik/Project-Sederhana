@extends('master')

@section('konten')
    <section class="section mb-5">
        <h2 class="section-header text-center mb-5">Portofolio</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="../assets/img/portofolio.jpg" class="card-img-top gallery-img" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <a href="detail.html" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="../assets/img/portofolio.jpg" class="card-img-top gallery-img" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <a href="detail.html" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="../assets/img/portofolio.jpg" class="card-img-top gallery-img" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <a href="detail.html" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
