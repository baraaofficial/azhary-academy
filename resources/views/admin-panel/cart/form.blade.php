<div class="form-group mb-3 mb-md-2">
    <label class="d-block font-weight-semibold">الدفع</label>
    <div class="custom-control custom-control-right custom-radio custom-control-inline">

        <input type="radio" value="1" class="custom-control-input" name="paid" id="1" checked="{{old('paid')}}">
        <label class="custom-control-label position-static" for="1">متاح</label>
    </div>

    <div class="custom-control custom-control-right custom-radio custom-control-inline">
        <input type="radio" value="0" class="custom-control-input" name="paid" id="0" checked="{{old('paid')}}">
        <label class="custom-control-label position-static" for="0">مغلق</label>
    </div>
</div>
