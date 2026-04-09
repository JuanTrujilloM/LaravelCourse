  @extends('layouts.app')

@section('title', 'API Test')
@section('subtitle', 'API REST Test')

@section('content')
<div class="row">

  <div class="col-md-6">
    <h4>Create Product (POST)</h4>
    <div class="mb-3">
      <input type="text" id="name" class="form-control" placeholder="Product name" />
    </div>
    <div class="mb-3">
      <input type="number" id="price" class="form-control" placeholder="Price" />
    </div>
    <button id="btnCreate" class="btn btn-primary">Create</button>
    <div id="infoCreate" class="mt-3"></div>
  </div>

  <div class="col-md-6">
    <h4>Products List (GET)</h4>
    <div id="infoProducts"></div>
  </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
<script>
  // GET all products
  $.ajax({
    type: "GET",
    dataType: "json",
    url: '{{ url("/api/v2/products") }}',
    success: function(data) {
      $('#infoProducts').html('<pre>' + JSON.stringify(data, null, 2) + '</pre>');
    }
  });

  // POST new product
  $('#btnCreate').click(function() {
    $.ajax({
      type: "POST",
      url: '{{ url("/api/v2/products") }}',
      contentType: "application/json",
      dataType: "json",
      data: JSON.stringify({
        name:  $('#name').val(),
        price: parseInt($('#price').val()),
      }),
      success: function(data) {
        $('#infoCreate').html('<div class="alert alert-success">Created: ' + JSON.stringify(data) + '</div>');
      },
      error: function(xhr) {
        $('#infoCreate').html('<div class="alert alert-danger">Error: ' + xhr.responseText + '</div>');
      }
    });
  });
</script>
@endsection
