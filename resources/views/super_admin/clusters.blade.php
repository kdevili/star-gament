@extends('super_admin.lay')


@section('title' , __('Clusters'))


@section('style')


@endsection

@section('content')
    @php
    $clusters = \App\Cluster::with('garment')->get();
    @endphp



    <div class="row mt-4">
        @if ($clusters->count() == 0)
            <div class="callout callout-warning">
                <h4>Reminder!</h4>
                You must <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalMessage">create a Cluster </a> before creating a Garment

            </div>
        @endif
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Add a Facility</h6>
                </div>
                <div class="card-body p-3">
                    <form  action="{{ route('super_admin/save-garment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="garment_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Discription" name="discription">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Cluster</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="cluster">
                                    @foreach($clusters as $clusters_name)
                                        <option value="{{$clusters_name->id}}">{{ $clusters_name->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit"  @if ($clusters->count() == 0) disabled @endif>Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card z-index-2">
                <div class="card-header pb-0">

                            <h6>Add Clusters</h6>



                    </div>

                <div class="card-body p-3">
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalMessage">Add New Cluster</button>
                    <ul class="list-group">
                        @foreach($clusters as $clusters_name)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$clusters_name->name}}
                            <span class="badge badge-primary badge-pill">{{$clusters_name->garment->count()}}</span>
                        </li>
                        @endforeach
                    </ul>

                </div>
                </div>

            </div>

    </div>

    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new cluster</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('super_admin/save_cluster') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name Of Cluster:</label>
                            <input type="text" class="form-control" value="" id="recipient-name" name="cluster_name" required>
                        </div>
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Save</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')

@endsection
