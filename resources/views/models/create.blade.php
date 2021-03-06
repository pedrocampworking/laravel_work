@extends('layouts.app')



<style>
    .label-text {
        font-weight: bold;
        font-size: 1.2rem
    }

</style>


@section('content')
   <div class="container">
        <div class="col-md-12">
            <form action="{{ route('models.store') }}" class='form-horizontal' method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label class="label-text">Vehicle Model</label>
                        <input type="text" class="form-control" name="model">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <select type="text" class="form-control" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-outline-primary">
                        Register Model
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
