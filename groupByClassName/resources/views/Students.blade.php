<h3>hello</h3>
<div>
    <!-- in example below he makes the response groupby classId(first) -->
    <!-- then he give a key for each group let say this key named IdOfClass (i chnage the name in purpose to know we can nmae the key as we want) -->
@foreach($allstudents->groupBy('classId') as $IdOfClass => $students)
    <div class="class-container">
        <!-- here he make the key of each group -->
        <h2>Class ID: {{ $IdOfClass }}</h2>
        <div class="student-list">
            <!-- here  in each group he pass a loop to display the name of students -->
            @foreach($students as $student)
                <p>{{ $student->studentName }}</p>
                <!-- You can display other student information here -->
            @endforeach
        </div>
    </div>
@endforeach
</div>

<div class="withName">
    <!-- {{var_dump($allstudentswithclassname)}} -->
    @foreach($allstudentswithclassname->groupBy('className') as $className => $students)
    <div class="class-container">
        <!-- here he make the key of each group -->
        <h2>Class ID: {{ $className }}</h2>
        <div class="student-list">
            <!-- here  in each group he pass a loop to display the name of students -->
            @foreach($students as $student)
                <p>{{ $student->studentName }}</p>
                <!-- You can display other student information here -->
            @endforeach
        </div>
    </div>
@endforeach
</div>




