<?php
Log::error($users);
?>


<?php


?>

@foreach ($users as $user)
{{ Log::error ($user->name); $user->name; }}
@endforeach


{{$users->links()}}