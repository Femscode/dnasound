@extends('producer.master')

@section('header')

<style>
    /* Style the select field */
    #instruments {
        width: 100%;
        height: auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: transparent;
        font-family: 'Arial', sans-serif;
        font-size: 16px;
        color: #333;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        appearance: none;
        cursor: pointer;
    }

    /* Style the options */
    #instruments option {
        padding: 10px;
        color: #555;
        background-color: transparent;
        font-size: 14px;
    }

    /* Add focus and hover effects */
    #instruments:focus {
        border-color: #b7282e;
        box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        outline: none;
    }

    #instruments:hover {
        /* background-color: #342e37; */
    }

    /* Custom scrollbar for the dropdown */
    #instruments::-webkit-scrollbar {
        width: 8px;
    }

    #instruments::-webkit-scrollbar-thumb {
        background-color: #f25621;
        border-radius: 10px;
    }

    #instruments::-webkit-scrollbar-track {
        background-color: black;
        color: #fff;
        border-radius: 10px;
    }

    #selectedInstruments {
        font-family: 'Arial', sans-serif;
        font-size: 16px;
        color: #fff;
        margin-top: 10px;
    }

    .tags-container {
        display: flex;
        flex-wrap: wrap;
        border: 1px solid #ccc;
        padding: 5px;
        min-height: 40px;
        border-radius: 4px;
    }

    .tag {
        background-color: #f25621;
        color: white;
        border-radius: 3px;
        font-style: italic;
        padding: 5px 10px;
        margin: 3px;
        display: flex;
        align-items: center;
    }

    .tag .remove-tag {
        margin-left: 8px;
        cursor: pointer;
        font-weight: bold;
    }

    .tag .remove-tag:hover {
        color: #ff0000;
    }

    #tags {
        border: none;
        outline: none;
        flex: 1;
        padding: 5px;
        min-width: 150px;
    }

   
</style>
@endsection

@section('main')
<main class="main">
    <div class="container-fluid">
        <div class="row row--grid">
            <!-- breadcrumb -->
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">Edit Beat</li>
                </ul>
            </div>
            <!-- end breadcrumb -->

            <!-- title -->
            <div class="col-12">
                <div class="main__title main__title--page">
                    <h1>Edit Beat</h1>
                </div>
            </div>
            <!-- end title -->
        </div>

        <div class="row row--grid">
            <div class="col-12 col-lg-7 col-xl-8">
                <form method='post' action='/beat/update' class="sign__form sign__form--contacts" enctype='multipart/form-data'>@csrf


                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <select id="folder_id" name="folder_id" class="sign__input">
                                    <option value='{{$beat->folder_id ?? "0"}}'>{{$beat->folder->name ?? "Default(Home)"}}</option>
                                    @foreach($folders as $folder)
                                    <option value='{{$folder->id}}'>{{ $folder->name }}</option>

                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <input type='hidden' value='{{$beat->uuid}}'name='id'/>
                                <input value='{{$beat->title}}' type="text" id="title" name="title" class="sign__input">

                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="sign__group">
                                <input type='hidden' value='{{$beat->uuid}}'name='id'/>
                                <textarea type="text" id="description" name="description" class="sign__input">{{$beat->description}}</textarea>

                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <select required id="genre" name="genre" class="sign__input">
                                    <option value='{{$beat->genre ?? ""}}'>{{$beat->genre ?? "--Select Genre--"}}</option>
                                    <option value='Hip-Hop'>Hip-Hop</option>
                                    <option value='R&B'>R&B</option>
                                    <option value='Rock'>Rock</option>
                                    <option value='Electronic'>Electronic</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                            <select required id="visibility" name="visibility" class="sign__input">
                            <option value='{{$beat->visibility ?? ""}}'>{{$beat->visibility ?? "--Visibility--"}}</option>
                                   
                                    <option value='Public'>Public</option>
                                    <option value='Private'>Private</option>
                                  </select>

                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <select required id="key" name="key" class="sign__input">
                                <option value='{{$beat->key ?? ""}}'>{{$beat->key ?? "--Select Key--"}}</option>
                                   
                                    <option value='C-Major'>C Major</option>
                                    <option value='A-Major'>A Minor</option>
                                    <option value='G-Major'>G Major</option>
                                    <option value='E-Major'>E Minor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <input type="hidden" name="instruments" id="selectedInstrumentsHidden">

                                <ul id="selectedInstruments" class="selected-instruments-list">

                                </ul>
                                <select required id="instruments" multiple class="sign__input">
                                    <option>-Select Instruments-</option>
                                    <option value='Drums'>Drums</option>
                                    <option value='Bass'>Bass</option>
                                    <option value='Guitar'>Guitar</option>
                                    <option value='Paino'>Piano</option>
                                    <option value='Strings'>Strings</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <p style='color:#fff'>Upload Beat</p>
                                <input type="file" id="file" style='color:#fff' name="file" class="sign__input-file">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <p style='color:#fff'>Cover Picture</p>
                                <input type="file" id="file" style='color:#fff' name="image" class="sign__input-file">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <div id="tags-container" class="tags-container">
                                <input type="hidden" id="tags-hidden" name="tags">
                                    <input placeholder="Tags" type="text" id="tags" class="sign__input">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="sign__group">
                                <input value="{{$beat->price}}" type="number" id="price" name="price" class="sign__input">
                            </div>
                        </div>

                        <div class="col-12 col-xl-3">
                            <button type="submit" class="sign__btn">Upload</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="main__title main__title--sidebar">
                    <h2>Info</h2>
                    <p>You're currently running on freemium and there is a limit to the amount of resources you can upload.</p>
                    <div class="hero__btns">
                        <a href="#" class="hero__btn">Upgrade Now</a>
                    </div>
                </div>


            </div>
        </div>

        <!-- partners -->
        <div class="row">
            <div class="col-12">
                <div class="partners owl-carousel">
                    <a href="#" class="partners__img">
                        <img src="img/partners/3docean-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/activeden-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/audiojungle-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/codecanyon-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/photodune-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/themeforest-light-background.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- end partners -->
    </div>
</main>
@endsection

@section('script')
<script>
    document.getElementById('instruments').addEventListener('change', function() {
        let selectedInstruments = Array.from(this.selectedOptions).map(option => option.value);
        let selectedInstrumentsList = document.getElementById('selectedInstruments');
        let selectedInstrumentsHidden = document.getElementById('selectedInstrumentsHidden');

        selectedInstrumentsList.textContent = selectedInstruments.join(', ');
        selectedInstrumentsHidden.value = selectedInstruments.join(', ');
    });

</script>
<script>
    $(document).ready(function () {
    const $input = $('#tags');
    const $tagsContainer = $('#tags-container');
    const $hiddenInput = $('#tags-hidden');

    $input.on('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ',') {
            event.preventDefault();
            const value = $input.val().trim();

            if (value !== '') {
                addTag(value);
                $input.val('');
            }
        }
    });

    function addTag(text) {
        const $tag = $('<span>').addClass('tag').text('#'+text);
        const $removeIcon = $('<span>').addClass('remove-tag').text('×');

        $removeIcon.on('click', function () {
            $(this).parent().remove();
            updateHiddenInput();
        });

        $tag.append($removeIcon);
        $tag.insertBefore($input);
        updateHiddenInput();
    }

    function updateHiddenInput() {
        const tags = [];
        $tagsContainer.find('.tag').each(function () {
            tags.push($(this).text().replace('×', '').trim());
        });
        $hiddenInput.val(tags.join(','));
    }

    // Handle form submission
    $('form').on('submit', function () {
        updateHiddenInput(); // Ensure the hidden input is updated
        // The form will now include the tags in the hidden input field
    });
});

</script>
@endsection