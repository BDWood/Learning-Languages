<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Users</title>
</head>
<body>
    This should show all users.
    
    @foreach($users as $user)
    <div>{{ $user->name }}</div><br>
    @endforeach

</body>
</html>