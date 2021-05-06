@csrf
        <div class="form-group">
            <label for="dot_number">Dot Number</label>
            <input type="text" name="dot_number" id="dot_number" value="{{old('dot_number', $quote->dot_number)}}"
            class="form-control {{$errors->has('dot_number')? 'is-invalid' : ''}} "> 
            @if($errors->has('dot_number'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('dot_number')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="premium_amount">Premium Amount</label>
            <input type="text" name="premium_amount" id="premium_amount" value="{{old('premium_amount', $quote->premium_amount)}}"
            class="form-control {{$errors->has('premium_amount')? 'is-invalid' : ''}} "> 
            @if($errors->has('premium_amount'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('premium_amount')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="premium_tax">Premium Tax</label>
            <input type="text" name="premium_tax" id="premium_tax" value="{{old('premium_tax', $quote->premium_tax)}}"
            class="form-control {{$errors->has('premium_tax')? 'is-invalid' : ''}} "> 
            @if($errors->has('premium_tax'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('premium_tax')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="premium_total">Premium Total</label>
            <input type="text" name="premium_total" id="premium_total" value="{{old('premium_total', $quote->premium_total)}}"
            class="form-control {{$errors->has('premium_total')? 'is-invalid' : ''}} "> 
            @if($errors->has('premium_total'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('premium_total')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="street">Street</label>
            <input type="text" name="street" id="street" value="{{old('street', $quote->street)}}"
            class="form-control {{$errors->has('street')? 'is-invalid' : ''}} "> 
            @if($errors->has('street'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('street')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="{{old('city', $quote->city)}}"
            class="form-control {{$errors->has('city')? 'is-invalid' : ''}} "> 
            @if($errors->has('city'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('city')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" name="state" id="state" value="{{old('state', $quote->state)}}"
            class="form-control {{$errors->has('state')? 'is-invalid' : ''}} "> 
            @if($errors->has('state'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('state')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="zipcode">Zipcode</label>
            <input type="text" name="zipcode" id="zipcode" value="{{old('zipcode', $quote->zipcode)}}"
            class="form-control {{$errors->has('zipcode')? 'is-invalid' : ''}} "> 
            @if($errors->has('zipcode'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('zipcode')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver1_name">Driver1 Name</label>
            <input type="text" name="driver1_name" id="driver1_name" value="{{old('driver1_name', $quote->driver1_name)}}"
            class="form-control {{$errors->has('driver1_name')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver1_name'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver1_name')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver1_age">Driver1 Age</label>
            <input type="text" name="driver1_age" id="driver1_age" value="{{old('driver1_age', $quote->driver1_age)}}"
            class="form-control {{$errors->has('driver1_age')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver1_age'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver1_age')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver2_name">Driver2 Name</label>
            <input type="text" name="driver2_name" id="driver2_name" value="{{old('driver2_name', $quote->driver2_name)}}"
            class="form-control {{$errors->has('driver2_name')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver2_name'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver2_name')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver2_age">Driver2 Age</label>
            <input type="text" name="driver2_age" id="driver2_age" value="{{old('driver2_age', $quote->driver2_age)}}"
            class="form-control {{$errors->has('driver2_age')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver2_age'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver2_age')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver3_name">Driver3 Name</label>
            <input type="text" name="driver3_name" id="driver3_name" value="{{old('driver3_name', $quote->driver3_name)}}"
            class="form-control {{$errors->has('driver3_name')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver3_name'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver3_name')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver3_age">Driver3 Age</label>
            <input type="text" name="driver3_age" id="driver3_age" value="{{old('driver3_age', $quote->driver3_age)}}"
            class="form-control {{$errors->has('driver3_age')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver3_age'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver3_age')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver4_name">Driver4 Name</label>
            <input type="text" name="driver4_name" id="driver4_name" value="{{old('driver4_name', $quote->driver4_name)}}"
            class="form-control {{$errors->has('driver4_name')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver4_name'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver4_name')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver4_age">Driver4 Age</label>
            <input type="text" name="driver4_age" id="driver4_age" value="{{old('driver4_age', $quote->driver4_age)}}"
            class="form-control {{$errors->has('driver4_age')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver4_age'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver4_age')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver5_name">Driver5 Name</label>
            <input type="text" name="driver5_name" id="driver5_name" value="{{old('driver5_name', $quote->driver5_name)}}"
            class="form-control {{$errors->has('driver5_name')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver5_name'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver5_name')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="driver5_age">Driver5 Age</label>
            <input type="text" name="driver5_age" id="driver5_age" value="{{old('driver5_age', $quote->driver5_age)}}"
            class="form-control {{$errors->has('driver5_age')? 'is-invalid' : ''}} "> 
            @if($errors->has('driver5_age'))
                <div class="invalid-feedback">
                    <strong>{{$errors->first('driver5_age')}}</strong>
                </div>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn button-main">{{ $buttonText }}</button>
        </div>