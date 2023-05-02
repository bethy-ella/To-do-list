{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
        <section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
            <div class="card rounded-3">
            <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">To Do App</h4>

            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
              <div class="col-12">
                <div class="form-outline">
                  <input type="text" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Enter a task here</label>
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-warning">Get tasks</button>
              </div>
            </form>

            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Todo item</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Buy groceries for next week</td>
                  <td>In progress</td>
                  <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-success ms-1">Finished</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Renew car insurance</td>
                  <td>In progress</td>
                  <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-success ms-1">Finished</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Sign up for online course</td>
                  <td>In progress</td>
                  <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-success ms-1">Finished</button>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList</title>
    {{-- bootstrap cdn  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
              <div class="card rounded-3">
                <div class="card-body p-4">
      
                  <h4 class="text-center my-3 pb-3">My To Do App</h4>
                    <div class="col-12" >
                      {{-- <a href="{{route('tasks.create')}}">New tasks</a> --}}
                    <a href="{{route('tasks.create')}}"><button class="btn btn-warning">New tasks</button></a>
                    </div>
                  <table class="table mb-4">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Todo item</th>
                        {{-- <th scope="col">Status</th> --}}
                        <th scope="col-span-2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tasks as $task)
                      <tr>
                        <th scope="row">{{$task->id}}</th>
                        <th scope="row">{{$task->taskName}}</th>
                        <td>
                          <form action="{{route('tasks.destroy', $task->id)}}" method='POST'>
                            @csrf
                            @method('DELETE')
                          {{-- <a href="{{route('tasks.update', $task->id)}} ">Edit</a> --}}
                          <button type="submit" class="btn btn-success ms-1">Completed</button>
                          </form>
                        </td>
                        <td>
                         <a href="{{route('tasks.edit', $task->id)}}"> <button type="submit" class="btn btn-success ms-1">Edit</button></a>
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
      </section>
</body>
</html>