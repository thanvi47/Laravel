@include('nav')


<form action="#" method="post" class=" mt-5">
    @csrf
    <input type="text"name="employee_id" placeholder="Employee id"><br>
    <input type="text"name="designation_id" placeholder="designation id"><br>
    <input type="text"name="department_id" placeholder="department_id "><br>
    <input type="text"name="basic" placeholder="Basic Salary"><br>
    @foreach($salarys as $salary)
    <input type="text"name="da" placeholder="Dedication Allowance" value="{{$salary->basic*(10/100)}}"><br>
    <input type="text"name="ta" placeholder="Transport Allowance"><br>
    <input type="text"name="hra" placeholder="House Rent Allowance "><br>
    <input type="text"name="pf" placeholder="Provident Fund"><br>
    <input type="text"name="ha" placeholder="Health Allowance"><br>
    <input type="text"name="gross_salary" placeholder="Gross Salary" ><br>
    <input type="text"name="net_salary" placeholder="net_salary "><br>
    @endforeach
    <button class="btn btn-success">submit</button>






</form>














<table>
    <thead class="b bg-dark text-light">
    <th >Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Department</th>
    <th>Image</th>
    <th>Date</th>

    <th>Action</th>
    </thead>
    <tbody class="  text-dark b  text-info">
{{--    @foreach( $salary as $customer)--}}
{{--        <tr class="b">--}}
{{--            <td>  {{$customer->name}}  </td>--}}
{{--            <td>  {{$customer->email}} </td>--}}

{{--            <td> {{$customer->phone_number}}   </td>--}}
{{--            <td>  @if($customer->gender=='M')Male--}}
{{--                @else Female--}}
{{--                @endif--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}



    </tbody>

</table>
