@extends('partials.content')
@section('body_content')
    <div class="container">
            <div class="card shadow-sm mt-4">
                <div class="card-header text-center">
                    <h4>Recap Data</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Start Date</label>
                            <input type="date" id="startdate" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">End Date</label>
                            <input type="date" id="endDate" class="form-control" required>
                        </div>
                        <div class="col-md-4 mt-4">
                            <button class="btn btn-primary" type="button" onclick="SubmitFilterDate()" style="font-weight: 600">Apply Filter</button>
                            <a class="btn btn-secondary" href="/data-barang" style="font-weight: 600">Create Data</a>

                        </div>
                    </div>
                    <canvas id="ResultData" class="mt-3"></canvas>
                </div>
                <div class="card-footer text-center">
                    <span>Created by <a href="https://www.linkedin.com/in/jokoprasetio12/" target="_blank" class="fw-bold text-dark text-decoration-none"><i class="fa-brands fa-linkedin"></i> Joko prasetio</a></span>
                </div>
            </div>
    </div>
    <script src="/js/chart/resultChart.js"></script>
@endsection
