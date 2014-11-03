<?php
Log::error($users);
?>


<?php


?>

@foreach ($users as $user)
{{ $user->id; }}
@endforeach


{{$users->links()}}