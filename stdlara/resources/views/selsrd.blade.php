<!doctype html>
<html lang="en">
    <head>
        <title>All Students</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <p><label><a href="{{route('addstd')}}" class="btn btn-info">Add New Students</a></label></p>
       
        <table class="table bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Stream</th>
                    <th>Subject</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($std as $s)
                <tr>
                    <td>{{$s->name}}</td>
                    <td>{{$s->gender}}</td>
                    <td>{{$s->stream}}</td>
                    <td>{{$s->subject}}</td>
                    <td><img src="{{url('student_img')}}/{{$s->image}}" alt="Iamge" style="width: 100px";></td>
                    <td><a href="{{url('/edit')}}/{{$s->sid}}" class="btn btn-success">Update</a></td>
                    <td><a href="{{url('/del')}}/{{$s->sid}}" class="btn btn-danger">Delete</a></td>
                   
                </tr>
                    
                @endforeach
            </tbody>
        </table>







        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
