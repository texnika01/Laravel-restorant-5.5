
<!-- Name Form Input -->
<div class="form-group {{ $errors->has('name') ? ' has-error' : ''}}">
    {{ html()->label('Name :') }}
    {{ html()->text('name', null )->class('form-control')->placeholder('Name') }}
    @if($errors->has('name'))
        <span class="help-block">
            {{$errors->first('name')}}
        </span>
    @endif
</div>

<!-- Description Form Input -->
<div class="form-group {{ $errors->has('description') ? ' has-error' : ''}}">
    {{ html()->label('Description :') }}
    {{ html()->text('description', null )->class('form-control')->placeholder('Description') }}
    @if($errors->has('description'))
        <span class="help-block">
            {{$errors->first('description')}}
        </span>
    @endif
</div>