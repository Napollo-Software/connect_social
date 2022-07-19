<div class="modal fade" id="receipt-modal" tabindex="-1" role="dialog"
     aria-labelledby="update-social-info-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="update-social-info-modalLabel"><i class="ti-upload"></i>
                    Upload your receipts
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ti-close"></span>
                </button>
            </div>
            <form id="add_receipt_form">
                @csrf
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="merchant_type">Merchant Type</label>
                                <select name="merchant_type" id="merchant_type" class="form-control">
                                    <option value="" hidden>-- Select Merchant Type</option>
                                    <option value="connect" selected>Connect</option>
                                    <option value="non_connect">Non-Connect</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 connect-merchant">
                            <div class="form-group">
                                <label for="connect_merchant">Connect Merchant</label>
                                <select name="connect_merchant" id="connect_merchant" class="form-control">
                                    <option value="" hidden>-- Select Merchant</option>
                                    @foreach($merchants as $merchant)
                                        <option value="{{$merchant->id}}">{{$merchant->fullName()}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 non-connect-merchant" style="display: none;">
                            <div class="form-group">
                                <label for="merchant_name">Name of Non-connect Merchant</label>
                                <input type="text" class="form-control" name="merchant_name" id="merchant_name" placeholder="Enter name of non-connect merchant">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="attachment">Upload your receipt</label>
                                <input type="file" class="form-control btn border" name="attachment" id="attachment">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="receipt_amount">Enter amount of receipt</label>
                                <input type="text" name="receipt_amount" id="receipt_amount" class="form-control" placeholder="Enter amount of receipt">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer share-post-button">
                    <button type="button" data-dismiss="modal">Close</button>
                    <button type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<button class="btn btn-primary edit-button" data-toggle="modal" data-target="#receipt-modal">
    Add Receipt
</button>
@push('scripts')
    <script>
        $(function () {
           $(document).on('change','#merchant_type',function () {
              if ($(this).val()=='connect'){
                  $('.connect-merchant').show();
                  $('.non-connect-merchant').hide();
              }else{
                  $('.connect-merchant').hide();
                  $('.non-connect-merchant').show();
              }
           });

            $(document).on('submit', '#add_receipt_form', function (e) {
                e.preventDefault();
                var button = $(this).find('button[type=submit]');
                var method = 'POST';
                var previous = button.text();
                button.attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');

                $.ajax({
                    type: method,
                    url: '{{route('ambassador.receipts.store')}}',
                    data: new FormData(this),
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        button.attr('disabled', null).html(previous);
                        swal("Success!", data.success, "success").then(function () {
                            $('#receipt-modal').modal('hide');
                        });
                    },
                    error: function (xhr) {
                        button.attr('disabled', null).html(previous);
                        erroralert(xhr);
                    }
                });

            });

        });
    </script>
@endpush