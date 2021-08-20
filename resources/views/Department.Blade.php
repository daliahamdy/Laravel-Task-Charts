

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <title>It's A Task</title>
  </head>
  <body>
    <div >
      <h1 class ="text-center">View All Data </h1>
       <div class="row justify-content-center">
           <div class="col-auto">
               <table class="table table-responsive">
               <tr>
                    <th>ID</ht>
                    <th >DeparmentName</ht>
                    <th>EmpolyessCount</ht>
                </tr>
               @foreach ($Departments as  $key => $Department)
                <tbody>
                <tr>
                    <td>{{$Department->id }}</td>
                    <td>{{$Department->DepartmentName }}</td>
                    <td>{{$Department->EmpolyessCount }}</td>                     
                </tr>          
                </tbody>
                @endforeach
               </table>

           </div>
       </div>
       <div class="row justify-content-center">
        <button type="button" class="btn btn-outline-secondary" onclick="window.location='{{ url("Departments") }}'">Go To Charts</button>
      </div>
    </div>

  </body>
</html>