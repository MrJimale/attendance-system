<h1>Attendance</h1>
<form action="/attendance" method="POST">
    @csrf
    <label>Student:</label>
    <select name="student_id" required>
        @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
        @endforeach
    </select>
    <label>Status:</label>
    <select name="status" required>
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
    </select>
    <button type="submit">Mark Attendance</button>
</form>
<table>
    <tr>
        <th>Student</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    @foreach ($attendances as $attendance)
        <tr>
            <td>{{ $attendance->student->name }}</td>
            <td>{{ $attendance->attendance_date }}</td>
            <td>{{ $attendance->status }}</td>
        </tr>
    @endforeach
</table>
