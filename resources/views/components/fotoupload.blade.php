<div class="form-group row">
    <label for="{{$name}}" class="col-md-4 col-form-label text-md-end">{{$label}}</label>
        <div class="col-md-6">
            <input type="file" name="{{$name}}" id="{{$name}}" class="form-control mb-3">
        </div>

    @error('{{$name}}')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>                        
    @enderror

</div>