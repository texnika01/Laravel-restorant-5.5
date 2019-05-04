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
    {{ html()->select('menu_category', $category ,null )->class('form-control')->placeholder('Category') }}
    @if($errors->has('category'))
        <span class="help-block">
            {{$errors->first('category')}}
        </span>
    @endif
</div>

<!-- Price Form Input -->
<div class="form-group {{ $errors->has('price') ? ' has-error' : ''}}">
    {{ html()->label('Price') }}
    {{ html()->text('price', null )->class('form-control')->placeholder('0.00 $') }}
    @if($errors->has('price'))
        <span class="help-block">
            {{$errors->first('price')}}
        </span>
    @endif
</div>

<!-- Image Form Input -->
<div class="form-group {{ $errors->has('image') ? ' has-error' : ''}}">
        {{ html()->label('Image :') }}
        {{ html()->input('file' , 'image',null )->class('form-control') }}
        @if($errors->has('image'))
                <span class="help-block">
            {{$errors->first('image')}}
        </span>
        @endif
</div>

<!-- Menu Form Input -->
<div class="form-group {{ $errors->has('menu') ? ' has-error' : ''}}">
    {{ html()->label('Menu :') }}
    {{ html()->textarea('menu', null )->class('form-control')->placeholder('Menu') }}
    @if($errors->has('menu'))
        <span class="help-block">
            {{$errors->first('menu')}}
        </span>
    @endif
</div>