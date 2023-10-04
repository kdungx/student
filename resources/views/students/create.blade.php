

    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Age:</label>
            <input type="number" name="age">
        </div>
        <div>
            <label>Address:</label>
            <textarea name="address"></textarea>
        </div>
        <div>
            <label>Telephone:</label>
            <input type="text" name="telephone">
        </div>
        <button type="submit">Add Student</button>
    </form>

