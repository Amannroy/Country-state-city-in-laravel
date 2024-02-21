<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel AJAX Dependent Country State City Dropdown Example - ItSolutionStuff.com</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .export-button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-primary mb-4 text-center">
                   <h4>Country State City Dropdown</h4>
                </div> 
                <form action="{{ route('export.database') }}" method="get">
                    <button type="submit" class="btn btn-primary export-button">Export Database</button>
                </form>
                
                <form> 
                    <div class="form-group mb-3">
                        <select id="country-dropdown" class="form-control">
                            <option value="">-- Select Country --</option>
                            @foreach ($countries as $data)
                            <option value="{{ $data->id }}">{{ $data->country_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="state-dropdown">Select State</label>
                        <select id="state-dropdown" class="form-control"></select>
                    </div>
                    <div class="form-group">
                        <label for="state-dropdown">Select City</label>
                        <select id="city-dropdown" class="form-control"></select>
                    </div>
                    <div class="form-group">
                        <label for="pincode-dropdown">Pincode</label>
                        <select id="pincode-dropdown" class="form-control" style="display: none;"></select>
                    </div>
                    
                </form> 
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#country-dropdown').on('change', function() {
                var country_id = $(this).val();
                if(country_id) {
                    $.ajax({
                        url: '/fetch-state',
                        type: "POST",
                        data: {
                            country_id: country_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: "json",
                        success:function(data) {
                            $('#state-dropdown').empty();
                            $.each(data.states, function(key, value) {
                                $('#state-dropdown').append('<option value="'+ value.id +'">'+ value.state_name +'</option>');
                            });
                        }
                    });
                } else {
                    $('#state-dropdown').empty();
                    $('#city-dropdown').empty();
                }
            });

            $('#state-dropdown').on('change', function() {
                var state_id = $(this).val();
                if(state_id) {
                    $.ajax({
                        url: '/fetch-city',
                        type: "POST",
                        data: {
                            state_id: state_id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: "json",
                        success:function(data) {
                            $('#city-dropdown').empty();
                            $.each(data.cities, function(key, value) {
                                $('#city-dropdown').append('<option value="'+ value.id +'">'+ value.city_name +'</option>');
                            });
                        }
                    });
                } else {
                    $('#city-dropdown').empty();
                }
            });
            $('#city-dropdown').on('change', function() {
    var city_id = $(this).val();
    var state_id = $('#state-dropdown').val(); // Assuming you have a dropdown for states

    if (city_id && state_id) {
        $.ajax({
            url: '/fetch-pincode',
            type: "POST",
            data: {
                city_id: city_id,
                state_id: state_id,
                _token: '{{ csrf_token() }}'
            },
            dataType: "json",
            success:function(data) {
                $('#pincode-dropdown').empty().show();
                $.each(data.pincodes, function(key, value) {
                    $('#pincode-dropdown').append('<option value="'+ value.id +'">'+ value.pincode +'</option>');
                });
            }
        });
    } else {
        $('#pincode-dropdown').empty().hide();
    }
});


        });
    </script>
</body>
</html>
