<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{ Form::textarea($name, $value, ['class' => 'form-control'], $attributes) }}
</div>