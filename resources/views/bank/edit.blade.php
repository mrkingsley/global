@extends('layouts.db')

@section('main')


<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Eidt Transaction Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">



                <form class="form-horizontal" action="{{route('bank.update', $bank->id)}}" method="post">
                        @csrf
                        @method('put')
                    <div class="form-group {{ $errors->has('category_name')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Name</label>

                        <div class="col-sm-7">
                            <input type="text" name="name" class="form-control" value="{{ old('name')?   old('name') : $bank->name }}" placeholder="name">
                            {!! $errors->has('name')? '<p class="help-block"> '.$errors->first(' name').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('phone')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">phone</label>

                        <div class="col-sm-7">
                            <input type="text" name="phone" class="form-control" value="{{ old('phone')?  old('phone') : $bank->phone }}" placeholder="enter mobile contact e.g 080122....">
                            {!! $errors->has('phone')? '<p class="help-block"> '.$errors->first('phone').' </p>':'' !!}
                        </div>
                    </div>
                    

                    <div class="form-group {{ $errors->has('transaction')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Transaction Type</label>
                             <div class="col-sm-7">  
                                    <select class="form-control show-tick" name="transaction" id="type">
                                        <option value="">Select Transaction Type. e.g 
                                        'Top-up" </option>
                                        <option value="withdraw">Withdraw</option>
                                        <option value="deposit">Deposit</option>
                                        <option value="transfer">Transfer </option>
                                        <option value="drawings">Drawings </option>
                                        <option value="top-Up">Top-Up</option>
                                        <option value="officet">Office</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            

                    <div class="form-group {{ $errors->has('account_name')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Account Name</label>

                        <div class="col-sm-7">
                            <input type="text" name="account_name" class="form-control" value="{{ old('account_name')?  old('account_name') : $bank->account_name }}" placeholder="Enter account name . e.g prince ajah">
                            {!! $errors->has('account_name')? '<p class="help-block"> '.$errors->first('account_name').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('amount')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Amount</label>

                        <div class="col-sm-7">
                            <input type="number" name="amount" class="form-control" value="{{ old('amount')?  old('amount') : $bank->amount }}" placeholder="Enter Amount. e.g 500">
                            {!! $errors->has('amount')? '<p class="help-block"> '.$errors->first('amount').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('account_name')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Account No.</label>

                        <div class="col-sm-7">
                            <input type="text" name="account_no" class="form-control" value="{{ old('account_no')? old('account_no') : $bank->account_no }}" placeholder="Account No. e.g 00234...">
                            {!! $errors->has('account_no')? '<p class="help-block"> '.$errors->first('account_no').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('bank_charge')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Bank Chages</label>

                        <div class="col-sm-7">
                            <input type="text" name="bank_charge" class="form-control" value="{{ old('bank_charge')? old('bank_charge') : $bank->bank_charge }}" placeholder="Enter the bank charges">
                            {!! $errors->has('bank_charge')? '<p class="help-block"> '.$errors->first('bank_charge').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('charge')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Service Chages</label>

                        <div class="col-sm-7">
                            <input type="text" name="charge" class="form-control" value="{{ old('charge')? old('charge') : $bank->charge }}" placeholder="Enter your service charge">
                            {!! $errors->has('charge')? '<p class="help-block"> '.$errors->first('charge').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('remark')? 'has-error' : '' }}">
                        <label class="control-label col-sm-3">Remark</label>

                        <div class="col-sm-7">
                            <textarea type="text" name="remark" class="form-control" value="{{ old('remark')?  old('remark') : $bank->remark }}" placeholder="Please enter any short notification for refrence purpose "></textarea>
                            {!! $errors->has('remark')? '<p class="help-block"> '.$errors->first('remark').' </p>':'' !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-3">
                            <button type="submit" name="submit" class="btn btn-primary" required="required"><i class="fa fa-plus-square-o"></i> Submit</button>
                        </div>
                    </div>

                    </form>

                </div><!-- /.box-body -->


            </div><!-- /.box -->



        </div> <!-- /.col -->
    </div>
    </div>
    <!-- /.row -->


</section><!-- /.content -->


@endsection