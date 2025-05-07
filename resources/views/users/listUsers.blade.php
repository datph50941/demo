@extends('/users/main')
b:<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TÊN ĐƠN VỊ</th>
                <th scope="col">HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listUser as $user)
                

            <tr class="">
                <td scope="row">{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{user}}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</div>
