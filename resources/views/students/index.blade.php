<h1>Students</h1>
<form action="/students" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Class:</label>
    <input type="text" name="class" required>
    <button type="submit">Add Student</button>
</form>
<table>
    <tr>
        <th>Name</th>
        <th>Class</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->class }}</td>
        </tr>
    @endforeach
</table>
