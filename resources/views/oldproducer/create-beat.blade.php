@extends('producer.master')

@section('header')
<style>
    body {
        background-color: #f8f9fa;
    }

    .form-container {
        /* max-width: 600px; */
        margin: 50px auto;
        padding: 20px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        margin-bottom: 30px;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .submit-btn {
        background-color: #007bff;
        border-color: #007bff;
    }

    .submit-btn:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

@endsection

@section('content')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="card-body iq-total-content">
                <div class="top-block d-flex align-items-center justify-content-between">
                    <p class="mb-1">Available Storage</p>

                </div>
                <h4><span class="counter" style="visibility: visible;">{{$remainingStorageGB}}GB</span> / 5GB</h4>
                <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                    <div class="iq-progress-bar progress-4 bg-warning-light mt-3 iq-progress-bar-icon">
                        <span class="bg-warning" data-percent="100" style="transition: width 2s; width: 34%;">
                            <span class="progress-text text-warning">100%</span>
                        </span>
                    </div>
                    <div id="total-chart-04" class="ml-4"></div>
                </div>
                <a class="btn btn-warning text-white rounded-normal">Upgrade Plan</a>
            </div>

            <div class="card col-12">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Create New Beat</h4>
                    </div>
                </div>
                <div class="card-body">

                    @if(Session::has('message'))
                    <div class='alert alert-success'>
                        {{ Session::get('message') }}
                    </div>
                    @endif
                    @if(Session::has('error'))
                    <div class='alert alert-error'>
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <form method='post' action='/save-beat' enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label for="genre">Select Folder</label>
                            <select id="folder_id" name="folder_id" class="form-control">
                                <option value='0'>Default(Home)</option>
                                @foreach($folders as $folder)
                                <option value='{{$folder->id}}'>{{ $folder->name }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Beat Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <select id="genre" name="genre" class="form-control">
                                <option>Hip-Hop</option>
                                <option>Pop</option>
                                <option>R&B</option>
                                <option>Rock</option>
                                <option>Electronic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempo">Tempo (BPM)</label>
                            <input type="number" id="tempo" name="tempo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="key">Key</label>
                            <select id="key" name="key" class="form-control">
                                <option>C Major</option>
                                <option>A Minor</option>
                                <option>G Major</option>
                                <option>E Minor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="instruments">Instruments Used</label>
                            
                            <select id="instruments" name="instruments" multiple class="form-control">
                                <option>Drums</option>
                                <option>Bass</option>
                                <option>Guitar</option>
                                <option>Piano</option>
                                <option>Strings</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">Upload Beat</label>
                            <input type="file" id="file" name="file" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="file">Cover Picture <span class='text-danger'>(Optional)</span></label>
                            <input type="file" id="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="description">Description <span class='text-danger'>(Optional)</span> </label>
                            <textarea id="description" name="description" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input type="text" id="tags" name="tags" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price (NGN)</label>
                            <input type="number" id="price" name="price" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Submit Beat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

</script>

@endsection