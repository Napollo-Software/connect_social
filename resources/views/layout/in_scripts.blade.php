@if(isset($in_scripts))
    <?php $in_scripts = explode(',',$in_scripts); ?>
    <?php $path = 'layout.in_scripts'; ?>
    @for($i=0; $i < count($in_scripts); $i++)
        <?php $file_path = $path . '.' . $in_scripts[$i]; ?>
        @include($file_path)
    @endfor
@endif