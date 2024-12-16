<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <div>
            <h1>Welcome {{ $user->name }}. You have the role: {{ $role->name }}</h1>
            <a href="{{ route('logout') }}">logout</a>
        </div>
    </body>
</html>
