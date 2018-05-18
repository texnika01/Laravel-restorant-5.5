{{ html()->hidden('user_id', '1') }}
<!-- Title Form Input -->
<div class="form-group {{ $errors->has('title') ? ' has-error' : ''}}">
    {{ html()->label('Title :') }}
    {{ html()->text('title', null )->class('form-control')->placeholder('Title') }}
    @if($errors->has('title'))
        <span class="help-block">
            {{$errors->first('title')}}
        </span>
    @endif
</div>
<!-- Category Form Input -->
<div class="form-group {{ $errors->has('category') ? ' has-error' : ''}}">
    {{ html()->label('Category :') }}
    {{ html()->select('category_id', $category ,null )->class('form-control')->placeholder('Category') }}
    @if($errors->has('category'))
        <span class="help-block">
            {{$errors->first('category')}}
        </span>
    @endif
</div>

<!-- Image Form Input -->
<div class="form-group {{ $errors->has('image') ? ' has-error' : ''}}">
    {{ html()->label('Image :') }}
    {{ html()->input('file' , 'image', null )->class('form-control') }}
    @if($errors->has('image'))
        <span class="help-block">
            {{$errors->first('image')}}
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