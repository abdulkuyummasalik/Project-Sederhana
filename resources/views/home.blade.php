@extends('master')

@section('konten')
    <div id="content-img" class="text-center mb-5">
        <div class="content1">
            <img src="assets/img/profile.png" class="img-fluid rounded-circle mb-3" alt="Profile Image" style="max-width: 150px;">
            <h2 class="content-header">Olivia Wilson</h2>
            <p class="content-text">
                <b>IT Project Manager</b>
            </p>
        </div>
    </div>
    <!-- Short Description -->
    <section class="section section-small mb-5">
        <h2 class="section-header">About</h2>
        <p class="lead">I am an IT project manager with holistic knowledge of software development and design. I am also experienced in
            coordinating with stakeholders.</p>
    </section>
    <hr>
    <!-- Skill Table -->
    <section class="section mb-5">
        <h2 class="section-header">Skill</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr class="tr-header">
                        <th>&nbsp;</th>
                        <th>Percent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Project Management</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td class="text-left">Software Development</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td class="text-left">Budgeting and Cost Analysis</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td class="text-left">Enterprise Resource Planning</td>
                        <td>85%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <hr>
    <!-- Education List -->
    <section class="section section-small mb-5">
        <h2 class="section-header">Education</h2>
        <div class="mb-4">
            <h5>HGFZ Graduate Center</h5>
            <p>Masters in Project Management | Jan 2013 - Dec 2014</p>
        </div>
        <div>
            <h5>Cliffmoor College</h5>
            <p>BA Product Design | Dec 2008 - Dec 2012</p>
        </div>
    </section>
@endsection
