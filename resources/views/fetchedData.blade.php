<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To-Do List</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <body>
    <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h1>TO-DO LIST<span class="float-right"><a class="btn btn-primary" href="create"><i class="fa fa-plus"></i> Add task</a></span></h1>
                            <hr>
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($TodoArr as $todo)
                                        <tr>
                                            <td>{{$todo->name}}</td>
                                            <td>
                                                <a href="delete/{{$todo->id}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                                <a href="edit/{{$todo->id}}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>
