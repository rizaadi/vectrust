@extends('layouts.layout')
@section('content')
<div class="primary-content-area container content-padding grid-small-sidebar-left">
    @include('layouts.sidebar')
    <div class="main-content-area">
        <div class="page-title-section">
            <h2><span class="gradient-text">Payments History</span</h2> </div> <div class="upload-row">
                    <div class="upload-column">
                        <div class="payment-history">
                            <h5>Last Payments</h5>
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="heading-label">Date</th>
                                        <th scope="col" class="heading-label">Emali</th>
                                        <th scope="col" class="heading-label">Amount</th>
                                        <th scope="col" class="heading-label">Payment</th>
                                        <th scope="col" class="heading-label">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datahistory as $key=>$value)
                                    <tr>
                                        <td data-label="Date" class="tanggal">
                                            <div class="date"><?php echo date("d/m/Y", strtotime($value['created'])); ?></div>
                                        </td>
                                        <td data-label="Method">
                                            <div class="item-title">{{$value['payer_email']}}
                                            </div>
                                        </td>
                                        <td data-label="Amount" class="stat-value">{{$value['amount']}}</td>
                                        <td data-label="Amount" class="stat-value">{{$value['payment_channel']}}</td>
                                        <td data-label="price" class="stat-value">{{$value['status']}}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

        </div>
    </div>
</div>
@stop
@section('page-style')
<script>
    var list = document.getElementsByClassName("tanggal")[0];
    list.getElementsByClassName("tanggal")[0].innerHTML = "Milk";
    console.log(list.getElementsByClassName("tanggal")[0]);

</script>
<script>
    let text = document.getElementById("tanzggal").innerText;
    let element = document.getElementById("tanggal");
    let result = text.substring(0, 10);
    document.getElementById("tanggal").innerHTML = result;

</script>
@stop
