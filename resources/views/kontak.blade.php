@extends('master')

@section('konten')
    <section class="section mb-5">
        <h2 class="section-header">Social Media</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr class="tr-header">
                        <th>&nbsp;</th>
                        <th>Account</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Facebook</td>
                        <td>
                            <a href="https://facebook.com" target="_blank">Olivia Wilson</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">Instagram</td>
                        <td>
                            <a href="https://instagram.com" target="_blank">@oliviawilson</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">Twitter</td>
                        <td>
                            <a href="https://twitter.com" target="_blank">@oliviawilson</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left">LinkedIn</td>
                        <td>
                            <a href="https://linkedin.com" target="_blank">@oliviawilson</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <hr>
    <!-- Contact -->
    <section class="section mb-5">
        <h2 class="section-header">Address</h2>
        <p><b>Home Address</b>: 123 Anywhere St., Any City, State, Country 12345</p>
        <p><b>Office Address</b>: 123 Anywhere St., Any City, State, Country 12345</p>
    </section>
@endsection
