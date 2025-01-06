<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student's </title>
</head>
<body>

    {{-- Student From Submit And Validation --}}

    <form action="{{route('updstd')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <p><label><input type="hidden" name="id" value="{{$ed->sid}}"></label></p>
        
        <p>Name</p>
        <p><label><input type="text" name="name" value="{{$ed->name}}"></label></p>
        <span>
            @error('name')
            {{$message}}
                
            @enderror
        </span>

        <p>Gender</p>
        <p><label><input type="radio" name="gender" value="Male" @if ($ed->gender=="Male") checked @endif >Male</label></p>
        <p><label><input type="radio" name="gender" value="Female"  @if ($ed->gender=="Female") checked @endif>Female</label></p>

        <p>Stream</p>
        <p><label>
            <select name="stream" >
                <option value="">Select</option>
                <option value="BCA" @if ($ed->gender=="BCA") selected @endif >BCA</option>
                <option value="MCA" @if ($ed->gender=="MCA") selected @endif >MCA</option>
            </select>
        </label></p>

        <p>Subject</p>
        
      
        @php
            $sb=explode(",",$ed->subject);
        @endphp
        <p><label><input type="checkbox" name="sub[]" value="C" @if (in_array("C",$sb)) checked @endif>C</label></p>
        <p><label><input type="checkbox" name="sub[]" value="PHP"  @if (in_array("PHP",$sb)) checked @endif>PHP</label></p>
        <p><label><input type="checkbox" name="sub[]" value="LARAVEl"  @if (in_array("LARAVEl",$sb)) checked @endif>LARAVEl</label></p>

        <p>Image</p>
        <p><label><input type="file" name="simg" ></label></p>
        <img src="{{url('student_img')}}/{{$ed->image}}" alt="Iamge" style="width: 100px";>

        <p><label><input type="submit" name="save" value="Submit" ></label></p>
    
    </form>
    
</body>
</html>