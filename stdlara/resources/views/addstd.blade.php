<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student </title>
</head>
<body>

    {{-- Student From Submit And Validation --}}

    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        
        <p>Name</p>
        <p><label><input type="text" name="name" ></label></p>
        <span>
            @error('name')
            {{$message}}
                
            @enderror
        </span>

        <p>Gender</p>
        <p><label><input type="radio" name="gender" value="Male">Male</label></p>
        <p><label><input type="radio" name="gender" value="Female">Female</label></p>

        <p>Stream</p>
        <p><label>
            <select name="stream" >
                <option value="">Select</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
            </select>
        </label></p>

        <p>Subject</p>
        <p><label><input type="checkbox" name="sub[]" value="C">C</label></p>
        <p><label><input type="checkbox" name="sub[]" value="PHP">PHP</label></p>
        <p><label><input type="checkbox" name="sub[]" value="LARAVEl">LARAVEl</label></p>

        <p>Image</p>
        <p><label><input type="file" name="simg" ></label></p>

        <p><label><input type="submit" name="save" value="Submit" ></label></p>
    
    </form>
    
</body>
</html>