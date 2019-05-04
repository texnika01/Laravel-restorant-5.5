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

<!-- Date Form Input -->
<div class="form-group {{ $errors->has('date') ? ' has-error' : ''}}">
    {{ html()->label('Date :') }}
    {{ html()->input('date', 'date',null )->class('form-control')->placeholder('Date') }}
    @if($errors->has('date'))
        <span class="help-block">
            {{$errors->first('date')}}
        </span>
    @endif
</div>

<!-- Text Form Input -->
<div class="form-group {{ $errors->has('text') ? ' has-error' : ''}}">
    {{ html()->label('Text :') }}
    {{ html()->textarea('text', null )->class('form-control')->placeholder('Text') }}
    @if($errors->has('text'))
        <span class="help-block">
            {{$errors->first('text')}}
        </span>
    @endif
</div>

<!-- Text Form Input -->
<div class="form-group {{ $errors->has('text') ? ' has-error' : ''}}">
    {{ html()->label('Image :') }}
    {{ html()->input('file', 'image', null )->class('form-control')->placeholder('Image') }}
    @if($errors->has('image'))
        <span class="help-block">
            {{$errors->first('image')}}
        </span>
    @endif
</div>