<div class="form-group">
    <label>{{ __('Image') }}</label>
    <input type="file" name="image">
    @if($form->image)
        <img src="{{ asset('storage/'.$form->image) }}" class="img-thumbnail" max-width="100px">
    @endif
    @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label>{{ __('Name') }}</label>
    <textarea class="form-control @error('name') is-invalid @enderror"
        name="name">{{ $errors->any() ? old('name') : $form->name }}</textarea>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label>{{ __('State') }}</label>
    <input type="checkbox" class="@error('state') is-invalid @enderror" name="state" value="1"
        {{ $errors->any() ? (old('state') ? 'checked' : '') : ($form->state ? 'checked' : '') }} />
    @error('state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
