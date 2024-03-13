@extends('partials.content')
@section('body_content')
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <div class="card shadow-sm mt-3">
                    <div class="card-header text-center d-flex">
                        <a class="btn btn-primary" href="/"><i class="fa-solid fa-circle-arrow-left"></i> Back</a>
                        <h5 class="fw-bold ms-3 mt-2">Data Barang</h5>
                    </div>
                    <div class="card-body">
                        @include('partials.alert')
                        <div class="row">
                            <div class="col mt-3">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateData" style="font-weight: 600">Tambah Data</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-2">
                                <table class="table small table-striped" id="DataTableBarang"></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('DataBarang.modal.add')
    @include('DataBarang.modal.delete')
    @include('DataBarang.modal.edit')
    <script src="/js/item/init.js"></script>
    <script src="/js/item/dt.js"></script>
    <script src="/js/item/delete.js"></script>
    <script src="/js/item/edit.js"></script>
@endsection
