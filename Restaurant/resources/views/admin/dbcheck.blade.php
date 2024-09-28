<strong>Database Connected: </strong>
<?php
try {
    \DB::connection()->getPDO();
    echo \DB::connection()->getDatabaseName();
} catch (\Exception $e) {
    echo 'None';
}
?>
<ul>
    @foreach($list as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
