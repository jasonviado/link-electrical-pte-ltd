@extends('layouts.app')

@section('title')
    Dining
@endsection


@section('content')
<div>
    <div class="jumbotron">
        <h2>
            Dining
        </h2>
        <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div><button type="button" class="btn btn-outline-success openNewItemModal" data-toggle="modal" data-target="#formModal">NEW</button></div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="item-image">
                            <img src="https://4.imimg.com/data4/XT/BT/ANDROID-23336468/product-500x500.jpeg">
                        </div>
                        <br>
                        <h4 class="item-title">Table</h4>
                        <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <p>Total Price : S$100.00</p>
                        <p>Maintenance : S$100.00</p>
                        <p>Monthly Electricity : S$100.00</p>
                        <div><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#formModal">Update</button></div>
                        <br>
                    </div>
                    <div class="col-md-4">
                        <div class="item-image">
                            <img src="https://alexjm.co/i/2019/01/pads-chair-lowes-dining-for-small-dresser-furniture-lighting-target-menards-rustic-dressers-covers-unit-table-houzz-whit-grey-decor-ideas-inspiration-spaces-room-height-chairs.jpg">
                        </div>
                        <br>
                        <h4 class="item-title">Cabinet</h4>
                        <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <p>Total Price : S$100.00</p>
                        <p>Maintenance : S$100.00</p>
                        <p>Monthly Electricity : S$100.00</p>
                        <div><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#formModal">Update</button></div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="paginationContainer">
                    <nav>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.modal.item')

@endsection

@push('scripts')
<script type="text/javascript" src="{{ url('js/imageUpload.js') }}"></script>
@endpush