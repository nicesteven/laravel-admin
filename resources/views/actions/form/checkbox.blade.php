@admin_assets('icheck')

<div class="form-group">
    <label>{{ $label }}</label>
    <div>
    @foreach($options as $option => $label)
        <span class="icheck-@theme">
            <input id="@id" type="checkbox" name="{{$name}}[]" value="{{$option}}" class="{{$class}}" {{ in_array($option, (array)old($column, $value)) || ($value === null && in_array($label, $checked)) ?'checked':'' }} {!! $attributes !!} />
            <label for="@id">
                &nbsp;{{$label}}&nbsp;&nbsp;
            </label>
        </span>
    @endforeach
    </div>
    <input type="hidden" name="{{$name}}[]">
    @include('admin::actions.form.help-block')
</div>

<script>
    var $checkbox = $('{{ $selector }}');

    @if($canCheckAll)
    $('.{{ $checkAllClass }}').change(function () {
        if (this.checked) {
            $checkbox.prop('checked', true);
        } else {
            $checkbox.prop('checked', false);
        }
    });
    @endif
</script>
