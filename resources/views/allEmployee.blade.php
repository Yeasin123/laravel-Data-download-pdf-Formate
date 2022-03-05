<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
      #emp{
          font-family:Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%
      }
      #emp td,#emp th{
          padding: 8px;
          border: 1px solid #ccc
      }
      #emp tr:nth-child(even){
        background:#AF7AC5 
      }
  </style>
  </head>
  <body>

                <table id="emp">
                    <tr>
                        <th scope="col">#SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Department</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($emp as $e)
                        <tr>
                            <th scope="row">{{$e->id}}</th>
                            <td>{{$e->name}}</td>
                            <td>{{$e->email}}</td>
                            <td>{{$e->phone}}</td>
                            <td>{{$e->salary}}</td>
                            <td>{{$e->department}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
      </div>

  </body>
</html>